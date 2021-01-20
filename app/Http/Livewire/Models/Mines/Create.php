<?php

namespace App\Http\Livewire\Models\Mines;

use App\Domain\General\Models\Mine;
use App\Domain\General\Models\Sector;
use Livewire\Component;

class Create extends Component
{
    public Mine $mine;

    public $createSuccess = false;
    public $createFail = false;

    protected $rules = [
        'mine.name'         => 'required',
        'mine.sector_id'    => 'required|exists:sectors,id',
    ];

    protected $messages = [
        'mine.name.required'        => 'The Mine name cannot be empty.',
        'mine.sector_id.required'    => 'The Sector cannot be empty.',
    ];

    public function createMine()
    {
        $this->validate();

        try{
            $this->mine->visible = 1;
            $this->mine->save();
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
        $this->mine = new Mine();
    }

    public function render()
    {
        return view('livewire.models.mines.create', ["sectors" => Sector::all()]);
    }
}
