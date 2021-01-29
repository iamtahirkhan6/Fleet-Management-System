<?php

namespace App\Domain\Party\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Party\Models\Party;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Domain\MarketVehicle\Models\MarketVehicle;

class PartyVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Party $party
     *
     * @return Application|Factory|View
     */
    public function index(Party $party)
    {
        return view('page')->with('livewire', 'models.parties.vehicles.index')->with('title', 'Vehicles by ' . $party->name)->with('description', 'View all the vehicles by this party')->with('key', 'party')->with('val', $party);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Party $party
     *
     * @return Response
     */
    public function create(Party $party)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Party   $Party
     *
     * @return Response
     */
    public function store(Request $request, Party $Party)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Party         $party
     * @param MarketVehicle $market_vehicle
     *
     * @return Response
     */
    public function show(Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Party         $Party
     * @param MarketVehicle $market_vehicle
     *
     * @return Response
     */
    public function edit(Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request       $request
     * @param Party         $party
     * @param MarketVehicle $market_vehicle
     *
     * @return Response
     */
    public function update(Request $request, Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Party         $party
     * @param MarketVehicle $market_vehicle
     *
     * @return Response
     */
    public function destroy(Party $party, MarketVehicle $market_vehicle)
    {
        abort(404);
    }
}
