<?php

namespace App\Http\Livewire\Models\Mines;

use Livewire\Component;

class Show extends Component
{
    public $mine;

    public function mount($mine)
    {
        $this->mine = $mine;
    }

    public function render()
    {
        return view('livewire.models.mines.index');
    }
}
