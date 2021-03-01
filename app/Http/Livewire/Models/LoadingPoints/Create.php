<?php

namespace App\Http\Livewire\Models\LoadingPoints;

use Livewire\Component;
use App\Domain\LoadingPoint\Models\LoadingPoint;

class Create extends Component
{
    public LoadingPoint $loadingpoint;

    public bool $createSuccess = false;
    public bool $createFail    = false;

    protected $rules = [
        'loadingpoint.name'       => 'required',
        'loadingpoint.short_code' => 'required|unique:loading_points,short_code',
    ];

    protected $validationAttributes = [
        'loadingpoint.name'       => 'loading point',
        'loadingpoint.short_code' => 'short code',
    ];

    public function createLoadingPoint()
    {
        $this->validate();
        $this->loadingpoint->save();

        $this->createSuccess = !is_null($this->loadingpoint->id);
        $this->createFail    = is_null($this->loadingpoint->id);
    }

    public function mount()
    {
        $this->loadingpoint = new LoadingPoint();
    }

    public function render()
    {
        return view('livewire.models.loading-points.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
