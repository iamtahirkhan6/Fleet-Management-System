<?php

namespace App\Http\Livewire\Models\Invoices;

use Livewire\Component;
use App\Domain\Invoice\Models\Invoice;
use App\Domain\Consignee\Models\Consignee;

class Index extends Component
{
    public Consignee $consignee;

    public function render()
    {
        return view('livewire.models.invoices.index',['consignees' => Invoice::whereConsigneeId($this->consignee)->paginate(15)]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
