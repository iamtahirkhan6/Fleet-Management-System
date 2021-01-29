<?php

namespace App\Domain\Trip\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Trip\Models\Trip;
use App\Domain\Party\Models\Party;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PartyTripController extends Controller
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
        return view('page')->with('livewire', 'models.parties.trips.index')->with('title', 'Vehicle Trips by ' . $party->name)->with('description', 'View all the trips by this party')->with('key', 'party')->with('val', $party);
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
     * @param Party   $party
     *
     * @return Response
     */
    public function store(Request $request, Party $party)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Party $party
     * @param Trip  $trip
     *
     * @return Application|Factory|View
     */
    public function show(Party $party, Trip $trip)
    {
        return view('page')->with('livewire', 'models.trips.show')->with('title', 'View Trip')->with('description', 'View the details regarding this trip')->with('key', 'trip')->with('val', $trip);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Party $party
     * @param Trip  $trip
     *
     * @return Response
     */
    public function edit(Party $party, Trip $trip)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Party   $party
     * @param Trip    $trip
     *
     * @return Response
     */
    public function update(Request $request, Party $party, Trip $trip)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Party $party
     * @param Trip  $trip
     *
     * @return Response
     */
    public function destroy(Party $party, Trip $trip)
    {
        abort(404);
    }
}
