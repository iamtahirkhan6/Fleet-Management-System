<?php

namespace App\Http\Livewire\Models\Trips;

use Carbon\Carbon;
use App\Domain\General\Models\Mine;
use App\Domain\Trip\Models\Trip;
use App\Domain\Fleet\Models\Fleet;
use App\Models\Mines;
use App\Domain\Agent\Models\Agent;
use App\Models\Driver;
use App\Domain\Party\Models\Party;
use App\Models\Docuent;
use App\Domain\Employee\Models\Employee;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\General\Models\PhoneNumber;
use App\Models\TripDocuments;
use App\Domain\MarketVehicle\Models\MarketVehicle;
use App\Domain\General\Models\UnloadingPoint;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $agents;
    public $paid_drivers = [];
    public $fleet_vehicles = [];

    public $consignee;
    public $source;
    public $destination;

    public $step0 = true;
    public $step1 = false;
    public $step2 = false;
    public $step3 = false;

    public $mActive = false;
    public $oActive = false;

    public $fleet_vehicle_id;
    public $fleet_driver_id;

    public $stepOneCompleted = false;
    public $stepTwoCompleted = false;
    public $stepThreeCompleted = false;

    public Trip $trip;
    public Party $party;
    public Driver $driver;
    public MarketVehicle $market_vehicle;
    public Employee $driver_emp;
    public PhoneNumber $phone_num;
    public Document $document;

    // Form Inputs
    public $challan_photo;

    protected $rules = [
        'trip.net_weight'           => 'required',
        'trip.tp_number'            => 'required',
        'trip.date'                 => 'required|date',
        'trip.tp_serial'            => 'required|numeric',
        'trip.rate'                 => 'required|numeric',
        'trip.driver_id'            => 'required_if:oActive,true|numeric',
        'trip.challan_serial'       => 'nullable|alpha_num',
        'narketVehicle.number'      => 'required',
        'party.name'                => 'nullable|alpha_spaces',
        'party_ph_num.owner_phone'  => 'nullable|digits:10',
        'challan_photo'             => 'nullable|image',
    ];

    protected $messages = [
        'trip.date.required'                    => 'Date cannot be empty.',
        'trip.tp_number.required'               => 'Transit Pass (TP) cannot be empty.',
        'trip.tp_serial.required'               => 'Transit Pass (TP) serial number cannot be empty.',
        'trip.tp_serial.numeric'                => 'Transit Pass (TP) serial number should be numeric.',
        'trip.net_weight.required'              => 'Net Weight cannot be empty.',
        'trip.rate.required'                    => 'Rate per ton be empty.',
        'party.name.alpha_spaces'               => 'Owner Name is not valid.',
        'party_ph_num.owner_phone.digits'       => 'Owner\'s Phone Number should be of 10 digits only.',
        'narketVehicle.number.required'         => 'Vehicle number cannot be empty.',
        'challan_photo.mimes'                   => 'The Challan file should be an image(jpeg/png).',
        'challan_photo.size'                    => 'The Challan should be less than 10mb.',
    ];

    public function checkStepOne()
    {
        $this->validate();
        $this->step0 = false;
        $this->step1 = false;
        $this->step2 = true;
        $this->stepOneCompleted = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createTrip()
    {
        $this->validate();

        // Market Vehicle
        if($this->mActive == "true")
        {
            $this->trip->trip_type        = 1; // Market Vehicle Boolean

            // Party
            if((strlen($this->party->name) >= 0) || (strlen($this->party_ph_num->number) >= 0))
            {
                if(strlen($this->party->name) > 0 && (strlen($this->party_ph_num->number) < 0))
                {
                    $this->party->save();
                    $this->trip->party_id = $this->party->id;

                } elseif(strlen($this->party_ph_num->number) > 0 && strlen($this->party->name) <= 0) {
                    $this->party->name = $this->vehicle->name." - ".$this->trip->id;
                    $this->party->save();

                    $this->trip->party_id = $this->party->id;

                    $this->party_ph_num->party_id     = $this->trip->party_id;
                    $this->party_ph_num->phone_number = $this->party_ph_num->number;
                    $this->party_ph_num->save();
                }

            } else {
                $this->party->name = $this->vehicle->name;
                $this->party->save();
                $this->trip->party_id = $this->party->id;
            }

            // Driver
            if ((strlen($this->driver->name) > 0) || strlen($this->driver->license_no) > 0 || strlen($this->driver->number) > 0) {

                $this->driver->save();
                $this->driver()->associate($this->driver)->save();

                if (strlen($this->driver->name) > 0 && strlen($this->driver->license_no) <= 0) {

                    // $this->trip->driver_id = Driver::firstOrCreate(['name' => $this->driver->name])->id;
                    $this->driver->save;
                } elseif (strlen($this->driver->license_no) > 0 && strlen($this->driver->name) <= 0) {

                    $this->trip->driver_id = Driver::firstOrCreate(['license_no' => $this->driver->license_no])->id;

                } else {
                    $this->trip->driver_id = Driver::firstOrCreate(['name' => $this->driver->name, 'license_no' => $this->driver->license_no])->id;
                }
                $this->trip->driver_type    = "App\Driver";

                if (strlen($this->driver_phone_num) > 0) {
                    PhoneNumber::create(['driver_id' => $this->driver->id, 'phone_number' => $this->driver_phone_num->number]);
                }
            }

            $this->trip->vehicle_id = MarketVehicle::firstOrCreate(['number' => $this->vehicle->number, 'party_id' => $this->trip->party_id])->id;

        } else {

            // Owned Vehicle
            $this->trip->trip_type      = 0;                        // Owned Vehicle Boolean

            // Employeed Driver Id
            $this->trip->driver_id      = $this->fleet_driver_id;
            $this->trip->driver_type    = "App\Employee";
        }

        // Total Amount
        $this->trip->amount           = $this->trip->net_weight * $this->trip->rate;
        $this->trip->step_loading     = 1;
        $this->trip->step_payment     = 0;
        $this->trip->created_by       = Auth::id();

        $this->trip->save();

        // Challan Soft Copy
        if($this->challan_photo != NULL)
        {
            $this->trip->challan_doc_id = TripDocuments::create(['trip_id' => $this->trip->id, 'doc_category_id' => '1', 'doc_path' => str_replace("public/","",$this->challan_photo->storePubliclyAs('/public/documents/challans', $this->trip->id))])->id;
        }

        $this->trip->save();
    }

    public function loadPaidDrivers()
    {
        $this->paid_drivers     = Employee::where('employee_designation_id', '7')->get();
    }

    public function loadAgents()
    {
        $this->agents           = Agent::get(['id', 'name']);
    }

    public function mount($project)
    {
        $this->trip             = new Trip;
        $this->party            = new Party;
        $this->vehicle          = new MarketVehicle;
        $this->driver           = new Driver;
        $this->driver_emp       = new Employee;
        $this->phone_number     = new PhoneNumber;

        $this->trip->project_id = $project->id;
        $this->consignee        = $project->Consignee->name;
        $this->source           = $project->Source->name;
        $this->destination      = $project->Destination->name;

        $this->trip->date       = Carbon::today()->format('d-m-Y');

        // Pre-Load for step 1

        $this->fleet_vehicles   = Fleet::with(['vehicles'])->find(1)->vehicles;
    }

    public function render()
    {
        return view('livewire.models.trips.create');
    }
}
