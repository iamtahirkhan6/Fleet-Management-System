<?php

namespace App\Http\Livewire\Models\Company;

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
        return view('livewire.models.company.show');
    }
}
