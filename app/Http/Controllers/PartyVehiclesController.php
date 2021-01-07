<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PartyVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function index(Party $party)
    {
        return view('models.parties.vehicles.index', ['party' => $party]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function create(Party $party)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Party  $Party
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Party $Party)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party, Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Party  $Party
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party, Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Party  $party
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Party  $party
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party, Vehicle $vehicle)
    {
        //
    }
}
