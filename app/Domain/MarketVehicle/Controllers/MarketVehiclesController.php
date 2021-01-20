<?php

namespace App\Domain\MarketVehicle\Controllers;

use App\Domain\MarketVehicle\Models\MarketVehicle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.market-vehicles.index')
            ->with('title',  'Market Vehicles')
            ->with('description', 'View all the market vehicles that have worked with your company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(MarketVehicle $market_vehicle)
    {
        return view('page')
            ->with('livewire', 'models.market-vehicles.show')
            ->with('title',  'View Vehicles')
            ->with('description', 'View all the details regarding this vehicle')
            ->with('key', 'MarketVehicle')
            ->with('val', $market_vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\MarketVehicle\Models\MarketVehicle  $market_vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarketVehicle $vehicle)
    {
        abort(404);
    }
}
