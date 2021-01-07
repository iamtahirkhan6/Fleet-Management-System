<?php

namespace App\Http\Livewire\Models\RcSearch;

use App\Models\VehicleRC;
use Livewire\Component;

class Index extends Component
{
    public $vehicle;
    public $error;
    public $vehicle_number;
    public $informationBox;

    public $vehice_owner_name;
    public $vehice_model;
    public $vehice_class;
    public $vehice_registration_date;
    public $vehice_fitness_upto;
    public $vehice_insurance_expiry;
    public $vehice_authority;
    public $vehice_rto_code;
    public $vehice_chassis_number;
    public $vehice_engine_number;

    protected $rules = [
        'vehicle_number' => ['required', 'alpha_num', 'regex:/^[A-Z|a-z]{2}\s?[0-9]{1,2}\s?[A-Z|a-z]{0,3}\s?[0-9]{4}$/'],
    ];

    protected $messages = [
            'vehicle_number.required' => 'The Vehicle Number cannot be empty.',
            'vehicle_number.regex' => 'The Vehicle Number not valid.',
            'vehicle_number.alpha_num' => 'The Vehicle Number must only have Alphabets & Integers.',
        ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function findVehicleInfo()
    {
        $vehicle_number = $this->vehicle_number;
        $this->vehicle = VehicleRC::where('number', $vehicle_number)->firstOr(function () use($vehicle_number) 
        {
            return VehicleRC::create(["number" => $vehicle_number]);
        });

        if($this->vehicle != null)
        {
            $this->vehice_owner_name        = $this->vehicle->owner_name;
            $this->vehice_model             = $this->vehicle->model;
            $this->vehice_class             = $this->vehicle->class;
            $this->vehice_registration_date = $this->vehicle->reg_date;
            $this->vehice_fitness_upto      = $this->vehicle->fitness_upto;
            $this->vehice_insurance_expiry  = $this->vehicle->insurance_upto;
            $this->vehice_authority         = $this->vehicle->authority;
            $this->vehice_rto_code          = $this->vehicle->rto_code;
            $this->vehice_chassis_number    = $this->vehicle->chassis_number;
            $this->vehice_engine_number     = $this->vehicle->engine_number;

            // dd($this->vehicle);
            $this->informationBox = true;
        }
    }

    public function render()
    {
        return view('livewire.models.rc-search.index');
    }
}
