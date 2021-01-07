<?php

namespace App\Http\Livewire\Models\Companies;

use App\Models\Company;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.companies.index', ['companies' => Company::paginate(10)]);
    }
}
