<?php

namespace App\Http\Livewire\Models\LoadingPoints;

use Livewire\Component;
use Illuminate\Database\QueryException;
use App\Domain\LoadingPoint\Models\LoadingPoint;

class Create extends Component
{
    public LoadingPoint $loadingpoint;

    public $createSuccess = false;
    public $createFail    = false;

    protected $rules = [
        'loadingpoint.name'       => 'required',
        'loadingpoint.short_code' => 'required|unique:loading_points,short_code',
    ];

    protected $validationAttributes = [
        'loadingpoint.name'       => 'loading point',
        'loadingpoint.short_code' => 'short code',
    ];

    public function createMine()
    {
        $this->validate();

        try {
            $this->loadingpoint->save();
        } catch (QueryException $ex) {
            $this->createFail = true;
        }

        $this->createSuccess = true;
    }

    public function mount()
    {
        $this->loadingpoint = new LoadingPoint();
    }

    public function render()
    {
        return view('livewire.models.loading-points.create', ["loadingpoint" => LoadingPoint::all()]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
