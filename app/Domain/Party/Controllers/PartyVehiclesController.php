<?php

namespace App\Domain\Party\Controllers;

use App\Domain\Party\Models\Party;
use App\Http\Controllers\Controller;
use App\Models\MarketVehicle;
use Illuminate\Http\Request;

class PartyVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function index(Party $party)
    {
        return view('models.parties.vehicles.index', ['party' => $party]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
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
     * @param  \App\Domain\Party\Models\Party  $Party
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Party $Party)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party, MarketVehicle $market_vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $Party
     * @param  \App\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party, MarketVehicle $market_vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party, MarketVehicle $market_vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party, MarketVehicle $market_vehicle)
    {
        //
    }
}
