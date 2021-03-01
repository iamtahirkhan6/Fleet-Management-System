<?php

namespace App\Domain\Consignee\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\General\Models\GstDetails;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\General\Actions\FetchGstDetails;

class UpdateAddressFromGst
{
    use AsAction;

    public function handle($consignee_id, $gstn, $gstn_details_model = null, Consignee $consignee_model = null)
    {
        if (is_null($consignee_model)) {
            $consignee_model = Consignee::find($consignee_id);
        }

        if (is_null($gstn_details_model)) {
            $gstn_details_model = GstDetails::whereGstn($gstn);
            if ($gstn_details_model->exists()) {
                $gstn_details_model = $gstn_details_model->first();
            } else {
                $gstn_details_model = FetchGstDetails::fetchFromApi($gstn);
            }
        }

        $consignee_model->address()
            ->updateOrCreate([
                                 "addressable_id"   => $consignee_model->id,
                                 "addressable_type" => "App\Domain\Consignee\Models\Consignee",
                             ],
                             [
                                 "line_1"     => $gstn_details_model->address_1,
                                 "line_2"     => $gstn_details_model->address_2,
                                 "city"       => $gstn_details_model->city,
                                 "district"   => $gstn_details_model->district,
                                 "state"      => $gstn_details_model->state,
                                 "zip"        => $gstn_details_model->pin,
                                 "company_id" => auth()->user()->company_id,
                             ]);

        $consignee_model->trade_name = $gstn_details_model->trade_name;
        $consignee_model->save();

        return true;
    }
}
