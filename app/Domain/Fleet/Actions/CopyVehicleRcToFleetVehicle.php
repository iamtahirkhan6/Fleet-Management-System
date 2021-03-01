<?php


namespace App\Domain\Fleet\Actions;


use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\VehicleRC\Actions\SearchVehicleAndCreate;

class CopyVehicleRcToFleetVehicle
{
    use AsAction;

    public function handle($vehicle_rc_model, $fleet_vehicle_model, $fleet_id)
    {
        $fleet_vehicle_model->owner_name            = isset($$vehicle_rc_model->owner_name) ? strtoupper($$vehicle_rc_model->owner_name) : null;
        $fleet_vehicle_model->ownership_type        = isset($$vehicle_rc_model->ownership_type) ? strtoupper($$vehicle_rc_model->ownership_type) : null;
        $fleet_vehicle_model->financer              = isset($$vehicle_rc_model->financer) ? strtoupper($$vehicle_rc_model->financer) : null;
        $fleet_vehicle_model->model                = isset($$vehicle_rc_model->model) ? strtoupper($$vehicle_rc_model->model) : null;
        $fleet_vehicle_model->class                 = isset($$vehicle_rc_model->class) ? strtoupper($$vehicle_rc_model->class) : null;
        $fleet_vehicle_model->registration_date     = isset($$vehicle_rc_model->registration_date) ? strtoupper($$vehicle_rc_model->registration_date) : null;
        $fleet_vehicle_model->vehicle_age           = isset($$vehicle_rc_model->vehicle_age) ? strtoupper($$vehicle_rc_model->vehicle_age) : null;
        $fleet_vehicle_model->insurance_expiry      = isset($$vehicle_rc_model->insurance_expiry) ? strtoupper($$vehicle_rc_model->insurance_expiry) : null;
        $fleet_vehicle_model->chassis_number        = isset($$vehicle_rc_model->chassis_number) ? strtoupper($$vehicle_rc_model->chassis_number) : null;
        $fleet_vehicle_model->engine_number         = isset($$vehicle_rc_model->engine_number) ? strtoupper($$vehicle_rc_model->engine_number) : null;
        $fleet_vehicle_model->color                 = isset($$vehicle_rc_model->color) ? strtoupper($$vehicle_rc_model->color) : null;
        $fleet_vehicle_model->fuel_type             = isset($$vehicle_rc_model->fuel_type) ? strtoupper($$vehicle_rc_model->fuel_type) : null;
        $fleet_vehicle_model->vehicle_type          = isset($$vehicle_rc_model->vehicle_type) ? strtoupper($$vehicle_rc_model->vehicle_type) : null;
        $fleet_vehicle_model->engine_capacity       = isset($$vehicle_rc_model->engine_capacity) ? strtoupper($$vehicle_rc_model->engine_capacity) : null;
        $fleet_vehicle_model->fuel_norm             = isset($$vehicle_rc_model->fuel_norm) ? strtoupper($$vehicle_rc_model->fuel_norm) : null;
        $fleet_vehicle_model->weight                = isset($$vehicle_rc_model->weight) ? strtoupper($$vehicle_rc_model->weight) : null;
        $fleet_vehicle_model->fitness_upto          = isset($$vehicle_rc_model->fitness_upto) ? strtoupper($$vehicle_rc_model->fitness_upto) : null;
        $fleet_vehicle_model->registering_authority = isset($$vehicle_rc_model->registering_authority) ? strtoupper($$vehicle_rc_model->registering_authority) : null;
        $fleet_vehicle_model->price_range           = isset($$vehicle_rc_model->price_range) ? strtoupper($$vehicle_rc_model->price_range) : null;
        $fleet_vehicle_model->noc_details           = isset($$vehicle_rc_model->noc_details) ? strtoupper($$vehicle_rc_model->noc_details) : null;
        $fleet_vehicle_model->puc_upto             = isset($$vehicle_rc_model->puc_upto) ? strtoupper($$vehicle_rc_model->puc_upto) : null;
        $fleet_vehicle_model->mvtax_upto            = isset($$vehicle_rc_model->mvtax_upto) ? strtoupper($$vehicle_rc_model->mvtax_upto) : null;
        $fleet_vehicle_model->roadtax_upto          = isset($$vehicle_rc_model->roadtax_upto) ? strtoupper($$vehicle_rc_model->roadtax_upto) : null;
        $fleet_vehicle_model->vehicle_type          = isset($$vehicle_rc_model->vehicle_type) ? strtoupper($$vehicle_rc_model->vehicle_type) : null;
        $fleet_vehicle_model->rto_code              = isset($$vehicle_rc_model->rto_code) ? strtoupper($$vehicle_rc_model->rto_code) : null;
        $fleet_vehicle_model->rto                   = isset($$vehicle_rc_model->rto) ? strtoupper($$vehicle_rc_model->rto) : null;
        $fleet_vehicle_model->state                 = isset($$vehicle_rc_model->state) ? strtoupper($$vehicle_rc_model->state) : null;
        $fleet_vehicle_model->isValid               = isset($$vehicle_rc_model->isValid) ? strtoupper($$vehicle_rc_model->isValid) : null;

        $fleet_vehicle_model->fleet_id = $fleet_id;
        $fleet_vehicle_model->save();

        return true;
    }
}
