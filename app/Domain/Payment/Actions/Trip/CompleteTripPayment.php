<?php

namespace app\Domain\Payment\Actions\Trip;

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
            if ($is_razorpay_bool) {
                $party->razorpay_contact_id = CreateContact::run($party->id, $party, false);
                $party->save();
            }

            // If Bank Selected
            $bank_account_id = (isset($input['bank_account_id'])) ? $input['bank_account_id'] : $party->bankAccounts()->create([
                'account_name'    => $input['account_name'],
                'account_number'  => $input['account_number'],
                'ifsc_code'       => $input['ifsc_code'],
                'company_id'      => $company_id,
                'fund_account_id' => (($is_razorpay_bool == true) ? CreateFundAccount::run($input['account_name'], $input['account_number'], $input['ifsc_code'], $party->id, $party->razorpay_contact_id) : null),
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

            // Make a Payment
            $payment                    = new Payment();
            $payment->amount            = (isset($input['final_payable'])) ? $input['final_payable'] : 0;
            $payment->bank_account_id   = $bank_account_id;
            $payment->payment_method_id = (isset($input['payment_method_id'])) ? $input['payment_method_id'] : null;
            $payment->payment_status_id = (isset($input['payment_status_id'])) ? $input['payment_status_id'] : null;
            $payment->company_id        = $company_id;
            $payment->trip_id           = $trip->id;
            $payment->created_by        = Auth::id();
            $payment->save();

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
            ];
        } catch (exception $e) {
            return false;
        }
    }

    public static function input(array $array) : array
    {
        foreach ($array as $key => $value) $array[$key] = null;
        return $array;
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . 'party_id'          => 'required_if:' . $prefix . 'pan,|required_if:' . $prefix . 'name,',
            $prefix . 'bank_account_id'   => 'required_if:' . $prefix . 'account_name,|required_if:' . $prefix . 'account_number,|required_if:' . $prefix . 'ifsc_code,',
            $prefix . 'name'              => 'required_if:' . $prefix . 'party_id,',
            $prefix . 'pan'               => 'required_if:' . $prefix . 'party_id,',
            $prefix . 'account_name'      => 'required_if:' . $prefix . 'bank_account_id,',
            $prefix . 'account_number'    => 'required_if:' . $prefix . 'bank_account_id,|numeric',
            $prefix . 'ifsc_code'         => 'required_if:' . $prefix . 'bank_account_id,',
            $prefix . 'cash_adv_pct'      => 'exclude_if:' . $prefix . 'cash,',
            $prefix . 'cash_adv_fees'     => 'exclude_if:' . $prefix . 'cash,',
            $prefix . 'tds_sbm_bool'      => 'required',
            $prefix . 'tds'               => 'required_if:tds_sbm_bool,false',
            $prefix . 'tax_category_id'   => 'required_if:tds_sbm_bool,false',
            $prefix . 'two_pay'           => 'nullable|numeric',
            $prefix . 'final_payable'     => 'required',
            $prefix . 'payment_method_id' => 'required|exists:payment_methods,id',
            $prefix . 'payment_status_id' => 'required|exists:payment_statuses,id',
            $prefix . 'premium_rate'      => 'nullable|numeric',
            $prefix . 'phone_number'      => 'required|numeric|digits:10',
        ];
    }

    public static function messages($prefix = null) : array
    {
        return [
            $prefix . 'account_name.required_if'    => 'Name on passbook is required',
            $prefix . 'account_number.required_if'  => 'Account number cannot be empty',
            $prefix . 'account_number.numeric'      => 'Account number should only have numbers',
            $prefix . 'ifsc_code.required_if'       => 'IFSC code cannot be empty',
            $prefix . 'tax_category_id.required_if' => 'Please select a TDS Category',
            $prefix . 'bank_account_id.required_if' => 'Select one of the Bank Accounts',
            $prefix . 'name.required_if'            => 'Party name cannot be empty',
            $prefix . 'pan.required_if'             => 'Pan card cannot be empty',
            $prefix . 'pan.required'                => 'Pan card cannot be empty',
            $prefix . 'pan.size'                    => 'Pan card should be 10 characters long',
            $prefix . 'pan.alpha_num'               => 'Pan card can only be Alpha Numeric',
            $prefix . 'payment_method_id.required'  => 'Payment method Cannot be empty',
            $prefix . 'payment_method_id.exists'    => 'Payment method is not valid',
            $prefix . 'payment_status_id.required'  => 'Payment status Cannot be empty',
            $prefix . 'payment_status_id.exists'    => 'Payment status is not valid',
            $prefix . 'premium_rate.numeric'        => 'Rate must be an integer',
            $prefix . 'phone_number.required'       => 'Phone number of the party cannot be empty',
            $prefix . 'phone_number.digits'         => 'Phone number can be 10 digits only',
        ];
    }
}
