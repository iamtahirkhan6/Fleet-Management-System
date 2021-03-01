<?php

namespace App\Http\Livewire\Models\Payees;

use Livewire\Component;
use App\Domain\Payee\Models\Payee;
use App\Domain\Expense\Models\Expense;

class Show extends Component
{
    public Payee $payee;

    public function render()
    {
        return view('livewire.models.payees.show', ["expenses" => Expense::wherePayeeId($this->payee->id)->paginate(15)]);
    }
}
