<?php

namespace App\Http\Livewire\Models\Company;

use App\Domain\Company\Models\Company;
use Livewire\Component;

class Show extends Component
{
    public Company $company;

    public function render()
    {
        return view('livewire.models.company.show');
    }
}
