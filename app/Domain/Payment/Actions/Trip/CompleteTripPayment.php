<?php

namespace App\Domain\Payment\Actions\Trip;

use Auth;
use App\Domain\Trip\Models\Trip;
use App\Domain\Party\Models\Party;
use App\Domain\Payment\Models\Payment;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\PaymentMethod;
use App\Domain\MarketVehicle\Models\MarketVehicle;
use App\Domain\Payment\Actions\Razorpay\CreateContact;
use App\Domain\Payment\Actions\Razorpay\CreateFundAccount;

class CompleteTripPayment
{
    use AsAction;

    public function handle($input, Trip $trip, $company_id) : bool|array
    {
        try {
            // Check if Party Exists or Create One
            $party = isset($input['party_id']) ? Party::find($input['party_id']) : Party::updateOrCreate([
                'pan'        => $input['pan'],
                'company_id' => $company_id,
            ], [ 'name' => $input['name'] ]);

            $is_razorpay_bool = ($input['payment_method_id'] == PaymentMethod::whereName('Razorpay')->first()->id);
            if ($is_razorpay_bool && is_null($party->razorpay_contact_id)) {
                $party->razorpay_contact_id = CreateContact::run($party->id, true);
                $party->refresh();
            }

            // If Bank Selected
            $bank_account_id = (isset($input['bank_account_id'])) ? $input['bank_account_id'] : $party->bankAccounts()->create([
                    'account_name'    => $input['account_name'],
                    'account_number'  => $input['account_number'],
                    'ifsc_code'       => $input['ifsc_code'],
                    'company_id'      => $company_id,
                    'fund_account_id' => (($is_razorpay_bool == true) ? CreateFundAccount::run($input['account_name'], $input['account_number'], $input['ifsc_code'], $party->id, $party->razorpay_contact_id, false) : null),
                ])->id;

            // Form Party if not exists
            $trip->cash_adv_pct    = (isset($input['cash_adv_pct'])) ? $input['cash_adv_pct'] : null;
            $trip->cash_adv_fees   = (isset($input['cash_adv_fees'])) ? $input['cash_adv_fees'] : null;
            $trip->tds_sbm_bool    = (isset($input['tds_sbm_bool'])) ? $input['tds_sbm_bool'] : null;
            $trip->tds             = (isset($input['tds'])) ? $input['tds'] : null;
            $trip->tax_category_id = (isset($input['tax_category_id'])) ? $input['tax_category_id'] : null;
            $trip->two_pay         = (isset($input['two_pay'])) ? $input['two_pay'] : null;
            $trip->final_payable   = (isset($input['final_payable'])) ? $input['final_payable'] : null;
            $trip->premium_rate    = (isset($input['premium_rate'])) ? $input['premium_rate'] : null;
            $trip->shortage_amount = (isset($input['shortage_amount'])) ? $input['shortage_amount'] : null;

            // Make a Payment
            $payment                    = new Payment();
            $payment->amount            = (isset($input['final_payable'])) ? (float) round($input['final_payable'], 2) : 0;
            $payment->bank_account_id   = $bank_account_id;
            $payment->payment_method_id = (isset($input['payment_method_id'])) ? $input['payment_method_id'] : null;
            $payment->payment_status_id = (isset($input['payment_status_id'])) ? $input['payment_status_id'] : null;
            $payment->company_id        = $company_id;
            $payment->trip_id           = $trip->id;
            $payment->created_by        = Auth::id();
            $payment->save();
            $payment->refresh();

            $market_vehicle = MarketVehicle::create([
                'number'     => $trip->market_vehicle_number,
                'party_id'   => $party->id,
                'company_id' => $company_id,
            ]);

            $trip->market_vehicle_id = $market_vehicle->id;
            $trip->payment_id        = $payment->id;
            $trip->payment_done      = 1;
            $trip->save();

            return [
                $party,
                $trip,
                $payment,
                $market_vehicle,
            ];
        } catch (exception $e) {
            return false;
        }
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'party_id'          => 'required_if:' . $prefix . 'pan,|required_if:' . $prefix . 'name,',
            $prefix . 'bank_account_id'   => 'required_if:' . $prefix . 'account_name,|required_if:' . $prefix . 'account_number,|required_if:' . $prefix . 'ifsc_code,',
            $prefix . 'name'              => 'required_if:' . $prefix . 'party_id,',
            $prefix . 'pan'               => 'required_if:' . $prefix . 'party_id,',
            $prefix . 'account_name'      => 'required_if:' . $prefix . 'bank_account_id,',
            $prefix . 'account_number'    => 'required_if:' . $prefix . 'bank_account_id,',
            $prefix . 'ifsc_code'         => 'required_if:' . $prefix . 'bank_account_id,',
            $prefix . 'cash_adv_pct'      => 'exclude_if:' . $prefix . 'cash,',
            $prefix . 'cash_adv_fees'     => 'exclude_if:' . $prefix . 'cash,',
            $prefix . 'tds_sbm_bool'      => 'required',
            $prefix . 'tds'               => 'required_if:tds_sbm_bool,false',
            $prefix . 'tax_category_id'   => 'required_if:tds_sbm_bool,false',
            $prefix . 'two_pay'           => 'nullable|numeric',
            $prefix . 'shortage_amount'   => 'nullable|numeric',
            $prefix . 'final_payable'     => 'required',
            $prefix . 'payment_method_id' => 'required|exists:payment_methods,id',
            $prefix . 'payment_status_id' => 'required|exists:payment_statuses,id',
            $prefix . 'premium_rate'      => 'nullable|numeric',
            $prefix . 'phone_number'      => 'required_if:' . $prefix . 'bank_account_id,',
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'account_name'      => 'account name',
            $prefix . 'account_number'    => 'account number',
            $prefix . 'ifsc_code'         => 'IFSC code',
            $prefix . 'tax_category_id'   => 'TDS Category',
            $prefix . 'bank_account_id'   => 'bank accounts',
            $prefix . 'name'              => 'party name',
            $prefix . 'pan.required_if'   => 'pan number',
            $prefix . 'payment_method_id' => 'payment method',
            $prefix . 'payment_status_id' => 'payment status',
            $prefix . 'premium_rate'      => 'rate',
            $prefix . 'phone_number'      => 'phone number',
            $prefix . 'shortage_amount'   => 'shortage amount',
        ];
    }
}
