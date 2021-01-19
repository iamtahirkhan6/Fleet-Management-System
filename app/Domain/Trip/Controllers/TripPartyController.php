<?php

namespace App\Domain\Trip\Controllers;

use App\Http\Controllers\Controller;
use App\Domain\Party\Models\Party;
use App\Domain\Trip\Models\Trip;
use Illuminate\Http\Request;

class TripPartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function index(Party $party)
    {
        return view('models.parties.trips.index', ['party' => $party]);
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
     * @param  \App\Domain\Party\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Party $party)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party, Trip $trip)
    {
        return view('models.trips.show', ['trip' => $trip]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party, Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party, Trip $trip)
    {
        //
    }
}
