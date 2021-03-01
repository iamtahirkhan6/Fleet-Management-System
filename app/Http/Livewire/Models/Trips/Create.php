<?php

namespace App\Http\Livewire\Models\Trips;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Domain\Agent\Models\Agent;
use App\Domain\Fleet\Models\Fleet;
use Illuminate\Support\Facades\Auth;
use App\Domain\Project\Models\Project;
use App\Domain\Employee\Models\Employee;
use App\Domain\Document\Models\Document;
use App\Domain\Trip\Actions\CreateFleetTrip;
use Illuminate\Database\Eloquent\Collection;
use App\Domain\Trip\Actions\CreateMarketVehicleTrip;

class Create extends Component
{
    use WithFileUploads;

    public $challan_copy;

    public ?array     $input = [];
    public Project    $project;
    public Collection $agents;
    public Collection $paid_drivers;
    public            $fleet_vehicles;

    public string $consignee;
    public string $loadingpoint;
    public string $unloadingpoint;

    public $createFail    = false;
    public $createSuccess = false;

    public $step0 = true;
    public $step1 = false;
    public $step2 = false;
    public $step3 = false;

    public $stepOneCompleted   = false;
    public $stepTwoCompleted   = false;
    public $stepThreeCompleted = false;

    public $mActive         = false;
    public $oActive         = false;
    public $hasOwnedVehicle = true;

    public function checkStepOne()
    {
        $this->validate();
        $this->step0            = false;
        $this->step1            = false;
        $this->step2            = true;
        $this->stepOneCompleted = true;
    }

    public function createTrip()
    {
        if ($this->mActive) {
            $trip = CreateMarketVehicleTrip::run($this->project->id, $this->input);
            if ($trip != false) {
                if (isset($this->challan_copy)) {
                    $this->challan_copy = $this->challan_copy->storePublicly('/challans', 'documents');
                    $trip->challanCopy()->save(new Document(['path' => $this->challan_copy, 'document_type_id' => 1]));
                }
                $this->createSuccess = true;
            }
            else {
                $this->createFail = true;
            }
        }
        elseif ($this->oActive) {
            $trip = CreateFleetTrip::run($this->project->id, $this->input);
            if ($trip != false) {
                if (isset($this->challan_copy)) {
                    $this->challan_copy = $this->challan_copy->storePublicly('/challans', 'documents');
                    $trip->challanCopy()->save(new Document(['path' => $this->challan_copy, 'document_type_id' => 1]));
                }
                $this->createSuccess = true;
            }
            else {
                $this->createFail = true;
            }
        }
        else {
            $this->createFail = true;
        }
    }

    public function loadOwnedVehicleTripData()
    {
        $this->paid_drivers   = Employee::whereEmployeeDesignationId(7)->get();
        $this->fleet_vehicles = Fleet::with('vehicles')->get()->map(function ($fleet) {
                return $fleet->vehicles;
            })->collapse();
    }

    public function loadAgents()
    {
        $this->agents = Agent::get([
                                       'id',
                                       'name',
                                   ]);
    }

    public function mount($project)
    {
        $this->feedInput();
        $this->project        = $project;
        $this->loadingpoint   = $project->loadingPoint->name;
        $this->unloadingpoint = $project->unloadingPoint->name;
        $this->consignee      = $project->consignee->name;
        $this->input["date"]  = Carbon::today()
            ->format('d-m-Y');

        if (Auth::user()->company->fleets->count() <= 0) {
            $this->hasOwnedVehicle = false;
        }

    }

    public function render()
    {
        return view('livewire.models.trips.create');
    }

    public function feedInput() : array
    {
        return $this->input = CreateMarketVehicleTrip::input(collect([
                                                                         CreateMarketVehicleTrip::rules('input.'),
                                                                         CreateFleetTrip::rules('input.'),
                                                                     ])
                                                                 ->collapse()
                                                                 ->toArray());
    }

    public function rules() : array
    {
        if ($this->mActive == true) {
            return CreateMarketVehicleTrip::rules('input.');
        }
        else {
            return CreateFleetTrip::rules('input.');
        }
    }

    public function messages() : array
    {
        if ($this->mActive == true) {
            return CreateMarketVehicleTrip::messages('input.');
        }
        else {
            return CreateFleetTrip::messages('input.');
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
