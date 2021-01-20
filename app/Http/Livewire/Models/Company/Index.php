<?php

namespace App\Http\Livewire\Models\Company;

use Livewire\Component;
use App\Domain\Company\Models\Company;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.company.index', ['companies' => Company::where('user_id', Auth::id())->paginate(10)]);
    }
}
