<?php

namespace App\Http\Livewire\Models\Consignees;

use Livewire\Component;
use App\Domain\Consignee\Models\Consignee;

class UpdateDetails extends Component
{
    public Consignee $consignee;

    public function render()
    {
        return view('livewire.models.consignees.update-details');
    }
}
