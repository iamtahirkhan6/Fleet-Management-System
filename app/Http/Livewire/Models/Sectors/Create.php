<?php

namespace App\Http\Livewire\Models\Sectors;

use App\Models\Sector;
use Livewire\Component;

class Create extends Component
{
    public Sector $sector;
    
    public $createSuccess = false;
    public $createFail = false;

    protected $rules = [
        'sector.name'       => 'required|unique:sectors,name',
    ];

    protected $messages = [
        'sector.name.required'  => 'The Sector name cannot be empty.',
        'sector.name.unique'    => 'The Sector already Exists.',
    ];

    public function createSector()
    {
        $this->validate();
        
        try{
            $this->sector->visible = 1;
            $this->sector->save();
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
        $this->sector = new Sector();
    }
    
    public function render()
    {
        return view('livewire.models.sectors.create');
    }
}
