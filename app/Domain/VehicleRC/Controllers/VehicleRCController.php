<?php

namespace App\Domain\VehicleRC\Controllers;

use App\Domain\VehicleRC\Models\VehicleRC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VehicleRCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.rc-search.index')
            ->with('title', 'Search Vehicle Registration')
            ->with('description', 'View the details regarding the registration certificate');
    }
}
