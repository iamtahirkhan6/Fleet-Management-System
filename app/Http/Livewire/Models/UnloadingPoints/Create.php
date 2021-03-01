<?php

namespace App\Http\Livewire\Models\UnloadingPoints;

use Livewire\Component;
use Illuminate\Database\QueryException;
use App\Domain\UnloadingPoint\Models\UnloadingPoint;

class Create extends Component
{
    public UnloadingPoint $unloadingpoint;

    public $createSuccess = false;
    public $createFail = false;

    protected $rules = [
        'unloadingpoint.name'       => 'required|unique:unloading_points,name',
        'unloadingpoint.short_code'       => 'required|unique:unloading_points,short_code',
    ];

    protected $validationAttributes = [
        "unloadingpoint.name" => "name",
        "unloadingpoint.short_code" => "short code",
    ];

    public function createUnloadingPoint()
    {
        $this->validate();

        try{
            // $this->unloadingPoint->visible = 1;
            $this->unloadingpoint->save();
        } catch(QueryException $ex)
        {
            $this->createFail = true;
        }

        $this->createSuccess = true;
    }

    public function mount()
    {
        $this->unloadingpoint = new UnloadingPoint();
    }

    public function render()
    {
        return view('livewire.models.unloading-points.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
