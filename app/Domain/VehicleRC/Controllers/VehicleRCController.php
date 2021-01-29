<?php

namespace App\Domain\VehicleRC\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;


class VehicleRCController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.rc-search.index')->with('title', 'Search Vehicle Registration')->with('description', 'View the details regarding the registration certificate');
    }
}
