<?php

namespace App\Http\Livewire\Models\Payees;

use Livewire\Component;
use App\Domain\Payee\Models\Payee;

class Index extends Component
{
    public function render()
    {
        return view('livewire.models.payees.index', ["payees" => Payee::with(['payeeType'])->paginate(15)]);
    }
}
