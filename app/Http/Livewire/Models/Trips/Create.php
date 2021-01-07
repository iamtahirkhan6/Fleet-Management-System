<?php

namespace App\Http\Livewire\Models\Trips;

use Carbon\Carbon;
use App\Models\Mine;
use App\Models\Trip;
use App\Models\Mines;
use App\Models\Agent;
use App\Models\Driver;
use App\Models\Party;
use App\Models\Vehicle;
use App\Models\TripType;
use App\Models\Consignee;
use App\Models\DriverNumber;
use App\Models\TripDocuments;
use App\Models\UnloadingPoint;
use App\Models\PartiesPhoneNumber;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $consignees;
    public $mines;
    public $unloading_points;
    public $agents;

    public $step1 = true;
    public $step2 = false;
    public $step3 = false;
    
    public $stepOneCompleted = true;
    public $stepTwoCompleted = false;
    public $stepThreeCompleted = false;

    // Form Inputs
    public $f_date;
    public $f_challan_serial;
    public $f_project_id;
    public $f_consignee;
    public $f_consignee_val;
    public $f_vehicle_number;
    public $f_loading_point;
    public $f_loading_point_val;
    public $f_unloading_point;
    public $f_unloading_point_val;
    public $f_tp_number;
    public $f_tp_serial;
    public $f_agent;
    public $f_gross_weight;
    public $f_tare_weight;
    public $f_net_weight;
    public $f_rate;
    public $f_driver_name;
    public $f_driver_license_num;
    public $f_driver_phone_num;
    public $f_hsd_bool;
    public $f_hsd_amount;
    public $f_cash_advance_bool;
    public $f_cash_advance_amt;
    public $f_owner_name;
    public $f_owner_phone;
    public $f_challan_photo;


    protected $rules = [
        'f_date' => 'required|date',
        'f_challan_serial' => 'nullable|alpha_num',
        'f_vehicle_number' => 'required',
        'f_tp_number' => 'required',
        'f_tp_serial' => 'required|numeric',
        'f_net_weight' => 'required',
        'f_rate' => 'required|numeric',
        'f_owner_name' => 'nullable|alpha_spaces',
        'f_owner_phone' => 'nullable|digits:10',
        'f_challan_photo' => 'nullable|file',
    ];

    protected $messages = [
            'f_date.required' => 'Date cannot be empty.',
            'f_vehicle_number.required' => 'Vehicle number cannot be empty.',
            'f_tp_number.required' => 'Transit Pass (TP) cannot be empty.',
            'f_tp_serial.required' => 'Transit Pass (TP) serial number cannot be empty.',
            'f_tp_serial.numeric' => 'Transit Pass (TP) serial number should be numeric.',
            'f_net_weight.required' => 'Net Weight cannot be empty.',
            'f_rate.required' => 'Rate per ton be empty.',
            'f_owner_name' => 'Owner Name is not valid.',
            'f_owner_phone.digits' => 'Owner\'s Phone Number should be of 10 digits only.',
            'f_challan_photo' => 'The Challan file should be an image(jpeg/png).',
            'f_challan_photo.size' => 'The Challan should be less than 10mb.',
    ];

    public function checkStepOne()
    {
        $this->validate();
        $this->step1 = !$this->step1;
        $this->step2 = !$this->step2;
        $this->stepOneCompleted = !$this->stepOneCompleted;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createTrip()
    {
        $this->validate();

        $trip = new Trip;
        $trip->loading_date = $this->f_date;
        $trip->challan_serial = $this->f_challan_serial;
        
        // Owner
        if((strlen($this->f_owner_name) >= 0) || (strlen($this->f_owner_phone) >= 0))
        {
            if(strlen($this->f_owner_name) > 0 && (strlen($this->f_owner_phone) < 0))
            {
                $trip->owner_id = Party::create(['name' => $this->f_owner_name])->id;

            } elseif(strlen($this->f_owner_phone) > 0 && strlen($this->f_owner_name) <= 0)
            {
                $trip->owner_id = Party::create(['name' => $this->f_vehicle_number])->id;
                PartiesPhoneNumber::create(['party_id' => $trip->owner_id, 'phone_number' => $this->f_owner_phone]);
            }
            
        } else {
            $trip->party_id = Party::create(['name' => $this->f_vehicle_number])->id;
        }

        $trip->agent_id = $this->f_agent;
        $trip->vehicle_number = Vehicle::firstOrCreate(['number' => $this->f_vehicle_number, 'party_id' => $trip->party_id])->id;
        $trip->project_id = $this->f_project_id;
        $trip->tp_number = $this->f_tp_number;
        $trip->tp_serial = $this->f_tp_serial;
        
        // Driver
        if((strlen($this->f_driver_name) > 0) || strlen($this->f_driver_license_num) > 0 || strlen($this->f_driver_phone_num) > 0)
        {
            if(strlen($this->f_driver_name) > 0 && strlen($this->f_driver_license_num) <= 0)
            {
                $driver = Driver::firstOrCreate(['name' => $this->f_driver_name]);
                $this->driver_id = $driver->id;

            } elseif(strlen($this->f_driver_license_num) > 0 && strlen($this->f_driver_name) <= 0)
            {
                $driver = Driver::firstOrCreate(['license_no' => $this->f_driver_license_num]);
                $this->driver_id = $driver->id;
            } else {
                 $driver = Driver::firstOrCreate(['name' => $this->f_driver_name, 'license_no' => $this->f_driver_license_num]);
                 $this->driver_id = $driver->id;
            }
            
            if(strlen($this->driver_phone_num) > 0)
            {
                DriverNumber::create(['driver_id' => $this->driver_id, 'phone_number' => $this->driver_phone_num]);
            }
            $trip->driver_id = $this->driver_id;
        }

        // Owner Name

        // Weight
        $trip->gross_weight = $this->f_gross_weight;
        $trip->tare_weight = $this->f_tare_weight;
        $trip->net_weight = $this->f_net_weight;

        // Total Amount
        $trip->rate = $this->f_rate;
        $trip->total_amount = $this->f_net_weight * $this->f_rate;

        // HSD
        if(($this->f_hsd_bool == true || $this->f_hsd_bool == 1) && ($this->f_hsd_amount != '0'))
        {
            $trip->hsd_given_bool = 1;
            $trip->hsd_amount = $this->f_hsd_amount;
        } else {
            $trip->hsd_given_bool = 0;
            $trip->hsd_amount = 0;
        }
        
        // Cash Advance
        if(($this->f_cash_advance_bool == true || $this->f_cash_advance_bool == 1) && ($this->f_cash_advance_amt != '0'))
        {
            $trip->cash_given_bool = 1;
            $trip->cash_amount_given = $this->f_cash_advance_amt;
        } else {
            $trip->cash_given_bool = 0;
            $trip->cash_amount_given = 0;
        }

        $trip->trip_type = 1;           // Market Vehicle
        $trip->step_load = 1;           
        $trip->step_pay = 1;           
        $trip->created_by = Auth::id();

        $trip->save();

        // Challan Soft Copy
        if($this->f_challan_photo != NULL)
        {
            $trip->challan_doc_id = TripDocuments::create(['trip_id' => $trip->id, 'doc_category_id' => '1', 'doc_path' => str_replace("public/documents/challans/","documents/challans/",$this->f_challan_photo->storePublicly('/public/documents/challans'))])->id;
        }

        $trip->save();
    }

    public function mount($project)
    {
        $this->f_consignee = $project->Consignee->id;
        $this->f_loading_point = $project->Source->id;
        $this->f_unloading_point = $project->Destination->id;

        $this->f_consignee_val = $project->Consignee->name;
        $this->f_loading_point_val = $project->Source->name;
        $this->f_unloading_point_val = $project->Destination->name;

        $this->f_project_id = $project->id;
        $this->f_date = Carbon::today()->format('d-m-Y');

        // Pre-Load for step 1
        $this->consignees = Consignee::all();
        $this->mines = Mine::all();
        $this->unloading_points = UnloadingPoint::all();
        $this->agents = Agent::all();

        // set default step
        $this->step1 = true;
        $this->step2 = false;
        $this->step3 = false;
        $this->step4 = false;

        $this->stepOneCompleted = false;
        $this->stepTwoCompleted = false;
        $this->stepThreeCompleted = false;

    }

    public function render()
    {
        return view('livewire.models.trips.create');
    }
}