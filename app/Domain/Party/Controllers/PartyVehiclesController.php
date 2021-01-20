<?php

namespace App\Domain\Party\Controllers;

use App\Domain\Party\Models\Party;
use App\Http\Controllers\Controller;
use App\Domain\MarketVehicle\Models\MarketVehicle;
use Illuminate\Http\Request;

class PartyVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Party $party)
    {
        return view('page')
            ->with('livewire', 'models.parties.vehicles.index')
            ->with('title',  'Vehicles by '. $party->name)
            ->with('description', 'View all the vehicles by this party')
            ->with('key', 'party')
            ->with('val', $party);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function create(Party $party)
    {
        abort(404);
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
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $Party
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }
}
