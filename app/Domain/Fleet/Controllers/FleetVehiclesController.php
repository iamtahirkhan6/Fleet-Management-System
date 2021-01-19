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
     * @return \Illuminate\Http\Response
     */
    public function index(Fleet $fleet)
    {
        return view('models.fleets.vehicles.index', ['fleet' => $fleet]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function create(Fleet $fleet)
    {
        //
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
        //
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
        dd("Show Vehicle Record");
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
        //
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
        //
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
        //
    }
}
