<?php

namespace App\Http\Livewire\Models\UnloadingPoint;

use Livewire\Component;
use App\Domain\General\Models\UnloadingPoint;

class Create extends Component
{
    public UnloadingPoint $unloadingPoint;

    public $createSuccess = false;
    public $createFail = false;

    protected $rules = [
        'unloadingPoint.name'       => 'required|unique:unloading_points,name',
        'unloadingPoint.short_code'       => 'required|unique:unloading_points,short_code',
    ];

    protected $messages = [
        'unloadingPoint.name.required'  => 'The Unloading Point name cannot be empty.',
        'unloadingPoint.name.unique'    => 'The Unloading Point already Exists.',
        'unloadingPoint.short_code.required'  => 'The short code name cannot be empty.',
        'unloadingPoint.short_code.unique'    => 'The short code already exists.',
    ];

    public function createUnloadingPoint()
    {
        $this->validate();

        try{
            // $this->unloadingPoint->visible = 1;
            $this->unloadingPoint->save();
        } catch(\Illuminate\Database\QueryException $ex)
        {
            $this->createFail = true;
        }

        $this->createSuccess = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->unloadingPoint = new UnloadingPoint();
    }

    public function render()
    {
        return view('livewire.models.unloading-point.create');
    }
}
