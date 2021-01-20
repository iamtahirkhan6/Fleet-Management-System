<?php

namespace App\Domain\Fleet\Controllers;

use App\Domain\Fleet\Models\Fleet;
use App\Domain\Fleet\Models\FleetVehicle;
use App\Http\Controllers\Controller;
use App\Http\Controllers\VeFleetVehiclehicle;
use Illuminate\Http\Request;

class FleetVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Fleet $fleet)
    {
        return view('page')
            ->with('livewire', 'models.fleets.vehicles.index')
            ->with('title', 'Fleet Vehicles')
            ->with('description', 'View all the vehicles in your fleet')
            ->with('key', 'fleet')
            ->with('val', $fleet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function create(Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @param  \App\Domain\Fleet\Models\FleetVehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Fleet $fleet, FleetVehicle $vehicle)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @param  \App\Domain\Fleet\Models\FleetVehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Fleet $fleet, FleetVehicle $vehicle)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @param  \App\Domain\Fleet\Models\FleetVehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fleet $fleet, VeFleetVehiclehicle $vehicle)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @param  \App\Domain\Fleet\Models\FleetVehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fleet $fleet, FleetVehicle $vehicle)
    {
        abort(404);
    }
}
