<?php

namespace App\Http\Livewire\Models\Payees;

use Livewire\Component;
use App\Domain\Payee\Models\Payee;
use App\Domain\Payee\Models\PayeeType;

class Create extends Component
{
    public Payee $payee;
    public       $payee_types;

    public bool $createSuccess = false;
    public bool $createFail    = false;

    protected array $rules = [
        'payee.name'          => 'required',
        'payee.payee_type_id' => 'required|unique:loading_points,short_code',
    ];

    protected array $validationAttributes = [
        'payee.name'          => 'payee name',
        'payee.payee_type_id' => 'payee type',
    ];

    public function createPayee()
    {
        $this->validate();
        $this->payee->save();

        $this->createSuccess = !is_null($this->payee->id);
        $this->createFail    = is_null($this->payee->id);
    }

    public function mount()
    {
        $this->payee       = new Payee();
        $this->payee_types = PayeeType::all(['id', 'name']);
    }

    public function render(
    ) : \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.models.payees.create');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
