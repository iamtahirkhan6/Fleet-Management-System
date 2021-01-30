<?php

namespace App\Http\Livewire\Models\Payments\Trips;

use Auth;
use Livewire\Component;
use App\Domain\Party\Models\Party;
use App\Domain\Payment\Models\TaxCategory;
use App\Domain\Payment\Models\PaymentMethod;
use App\Domain\Payment\Models\PaymentStatus;
use App\Domain\Payment\Actions\Trip\CompleteTripPayment;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class CompletePending extends Component
{
    use WithMedia;

    protected $listeners           = [ 'refreshDetails' => '$refresh' ];
    public    $mediaComponentNames = [
        'pan',
        'rc',
        'tds',
    ];
    public    $trip;
    public    $pan_soft_copy;
    public    $rc_soft_copy;
    public    $tds_soft_copy;


    public ?array $input = [];

    public bool $showFail                = false;
    public bool $panDiv                  = true;
    public bool $onPanSearch             = false;
    public bool $tds_sbm_bool            = false;
    public bool $personalDetails         = false;
    public bool $enterBankDetails        = false;
    public bool $showFeesStructure       = false;
    public bool $showUploadDocuments     = false;
    public bool $showExistingBankDetails = false;

    public $existing_bank_accounts = [];
    public $tax_categories;
    public $payment_methods;
    public $payment_statuses;


    public function checkIfPartyExists()
    {
        $this->validate([ 'input.pan' => 'required|size:10|alpha_num' ], [
            'input.pan.required'  => 'Pan Card is required',
            'input.pan.size'      => 'Pan Card should be 10 characters long',
            'input.pan.alpha_num' => 'Pan Card can only be Alpha Numeric',
        ]);
        $this->panDiv = false; // Hide Pan Search Option
        $party        = Party::wherePan($this->input['pan'])->first();
        if ($party) {
            $this->input["party_id"]     = $party->id;
            $this->input["name"]         = $party->name ?? null;
            $this->input["phone_number"] = $party->phoneNumber ?? null;
            if ($party->bankAccounts()->count() > 0) {
                $this->existing_bank_accounts  = $party->bankAccounts ?? [];
                $this->showExistingBankDetails = true;
                $this->emit('refreshDetails');
            }
            $this->enterBankDetails    = true;
            $this->showFeesStructure   = true;
            $this->showUploadDocuments = true;
        } else {
            if ($this->showExistingBankDetails) {
                unset($this->existing_bank_accounts);
                $this->existing_bank_accounts  = [];
                $this->showExistingBankDetails = false;
                $this->emit('refreshDetails');
            }
            $this->personalDetails     = true;
            $this->enterBankDetails    = true;
            $this->showFeesStructure   = true;
            $this->showUploadDocuments = true;
        }
        $this->onPanSearch = true;
    }

    public function completePayment()
    {
        $this->input["tds_sbm_bool"] = $this->tds_sbm_bool;
        $this->fixInput();
        $this->validate($this->rules(), $this->messages());
        $result = CompleteTripPayment::run($this->input, $this->trip);
        if (!$result) {
            $this->showFail = true;
        } else {
            $party   = $result[0];
            $trip    = $result[1];
            $payment = $result[2];

            $party->addFromMediaLibraryRequest($this->rc_soft_copy)->toMediaCollection('documents')?->withCustomProperties(['type' => 'rc', 'market_vehicle_number' => $trip->market_vehicle_number]);
            $party->addFromMediaLibraryRequest($this->pan_soft_copy)->toMediaCollection('documents')?->withCustomProperties(['type' => 'pan', 'party_id' => $party->id]);

            if($this->tds_soft_copy) $party->addFromMediaLibraryRequest($this->pan_soft_copy)->toMediaCollection('documents')?->withCustomProperties(['type' => 'tds', 'party_id' => $party->id, 'payment_id' => $payment->id]);

            redirect()->to(url('/payments/pending'));
        }
    }

    // Function on Load
    public function mount($trip)
    {
        // If Payment Already Done
        if (!$trip->payment_done == 0) return abort(404);

        $this->trip = $trip;
        $this->feedInput();
        $this->input['two_pay'] = 0;

        // Prefetch Categories
        $this->tax_categories   = TaxCategory::all();
        $this->payment_methods  = PaymentMethod::all();
        $this->payment_statuses = PaymentStatus::all();

    }

    // Render
    public function render()
    {
        // Auto Calculate Cash Fees
        if ($this->trip->cash != null) {
            $this->input['cash_adv_pct']  = isset($this->input['cash_adv_pct']) ? $this->input['cash_adv_pct'] : 2;
            $this->input['cash_adv_fees'] = ($this->input['cash_adv_pct'] != 0) ? $this->trip->getRawOriginal('cash') * (int) $this->input['cash_adv_pct'] / 100 : 0;
        }

        // Auto Calculate TDS Fees
        if (!$this->tds_sbm_bool) {
            $this->input["tds"] = (isset($this->input['tax_category_id']) && $this->input['tax_category_id'] > 0) ? $this->trip->getRawOriginal('total_amount') * $this->tax_categories->find($this->input['tax_category_id'])->percentage / 100 : 0;
        }

        // Calculate Final Payable
        $this->input['final_payable'] = $this->trip->getRawOriginal('total_amount') - ($this->trip->getRawOriginal('hsd') ?? 0) - ($this->trip->getRawOriginal('cash') ?? 0) - ($this->input['cash_adv_fees'] ?? 0) - ((($this->tds_sbm_bool == false) ? $this->input['tds'] : 0)) - ((isset($this->input['two_pay']) && (is_numeric($this->input['two_pay']))) ? $this->input['two_pay'] : 0);

        return view('livewire.models.payments.trips.complete-pending');
    }

    // Set $input array
    public function feedInput()
    {
        $this->input = CompleteTripPayment::input($this->rules());
    }

    // Fix input array
    public function fixInput()
    {
        foreach ($this->input as $key => $val) {
            if (!str_contains($key, 'input.')) {
                $this->input["input." . $key] = $val;
                unset($this->input[$key]);
            }
        }

        foreach ($this->input as $key => $val) {
            $this->input[str_replace('input.', '', $key)] = $val;
            unset($this->input[$key]);
        }
    }

    // Rules for forms
    public function rules() : array
    {
        $rules  = collect(CompleteTripPayment::rules('input.'));
        $merged = $rules->merge([
            'pan_soft_copy' => 'required',
            'rc_soft_copy'  => 'required',
            'tds_soft_copy' => 'required_if:tds_sbm_bool,true',
        ]);
        return $merged->toArray();
    }

    // Custom Messages
    public function messages() : array
    {
        $messages = collect(CompleteTripPayment::messages('input.'));
        $merged   = $messages->merge([
            'pan_soft_copy.required_if' => 'Soft copy of PAN is required.',
            'rc_soft_copy.required'  => 'Soft copy of RC is required.',
            'tds_soft_copy.required_if' => 'Soft copy of TDS is required.',
        ]);
        return $merged->toArray();
    }

    // Real Time Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
