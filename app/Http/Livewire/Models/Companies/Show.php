<?php

namespace App\Http\Livewire\Models\Companies;

use Livewire\Component;

class Show extends Component
{
    public $company;
    public function mount($company)
    {
        $this->company = $company;
    }
    public function render()
    {
        return view('livewire.models.companies.show');
    }
}
