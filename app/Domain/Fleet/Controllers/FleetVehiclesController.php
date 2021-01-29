<?php

namespace App\Domain\Fleet\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Fleet\Models\Fleet;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\Domain\Fleet\Models\FleetVehicle;
use App\Http\Controllers\VeFleetVehiclehicle;
use Illuminate\Contracts\Foundation\Application;

class FleetVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Fleet $fleet
     *
     * @return Application|Factory|View
     */
    public function index(Fleet $fleet)
    {
        return view('page')->with('livewire', 'models.fleets.vehicles.index')->with('title', 'Fleet Vehicles')->with('description', 'View all the vehicles in your fleet')->with('key', 'fleet')->with('val', $fleet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Fleet $fleet
     *
     * @return Response
     */
    public function create(Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Fleet   $fleet
     *
     * @return Response
     */
    public function store(Request $request, Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Fleet        $fleet
     * @param FleetVehicle $vehicle
     *
     * @return Response
     */
    public function show(Fleet $fleet, FleetVehicle $vehicle)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Fleet        $fleet
     * @param FleetVehicle $vehicle
     *
     * @return Response
     */
    public function edit(Fleet $fleet, FleetVehicle $vehicle)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request      $request
     * @param Fleet        $fleet
     * @param FleetVehicle $vehicle
     *
     * @return Response
     */
    public function update(Request $request, Fleet $fleet, VeFleetVehiclehicle $vehicle)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Fleet        $fleet
     * @param FleetVehicle $vehicle
     *
     * @return Response
     */
    public function destroy(Fleet $fleet, FleetVehicle $vehicle)
    {
        abort(404);
    }
}
