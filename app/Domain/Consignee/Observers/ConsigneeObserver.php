<?php

namespace App\Domain\Consignee\Observers;

use App\Domain\General\Models\GstDetails;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\General\Actions\FetchGstDetails;
use App\Domain\Consignee\Actions\UpdateAddressFromGst;

class ConsigneeObserver
{
    /**
     * Handle the Consignee "created" event.
     *
     * @param  Consignee  $consignee
     *
     * @return void
     */
    public function created(Consignee $consignee)
    {
        if(isset($consignee->gstn) && strlen($consignee->gstn) == 15)
        {
            $gstn_details_model = FetchGstDetails::run($consignee->gstn);
            if($gstn_details_model != false)
            {
                UpdateAddressFromGst::run($consignee->id, $consignee->gstn, $gstn_details_model, $consignee);
            }
        }
        if(is_null($consignee->company_id)) $consignee->company_id = auth()->user()->company_id;
    }
}
