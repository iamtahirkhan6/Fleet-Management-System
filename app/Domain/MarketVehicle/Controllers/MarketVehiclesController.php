<?php

namespace App\Domain\MarketVehicle\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Domain\MarketVehicle\Models\MarketVehicle;

class MarketVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.market-vehicles.index')->with('title', 'Market Vehicles')->with('description', 'View all the market vehicles that have worked with your company');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param MarketVehicle $market_vehicle
     *
     * @return Application|Factory|View
     */
    public function show(MarketVehicle $market_vehicle)
    {
        return view('page')->with('livewire', 'models.market-vehicles.show')->with('title', 'View Vehicles')->with('description', 'View all the details regarding this vehicle')->with('key', 'MarketVehicle')->with('val', $market_vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MarketVehicle $market_vehicle
     *
     * @return Response
     */
    public function edit(MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request       $request
     * @param MarketVehicle $market_vehicle
     *
     * @return Response
     */
    public function update(Request $request, MarketVehicle $market_vehicle)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vehicle $vehicle
     *
     * @return Response
     */
    public function destroy(MarketVehicle $vehicle)
    {
        abort(404);
    }
}
