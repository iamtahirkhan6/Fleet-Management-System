<?php

namespace App\Http\Livewire\Models\Company;

use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('livewire.models.company.settings');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
