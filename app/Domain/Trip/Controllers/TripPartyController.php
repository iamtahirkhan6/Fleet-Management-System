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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Party $party)
    {
        return view('page')
            ->with('livewire', 'models.parties.trips.index')
            ->with('title',  'Vehicle Trips by '. $party->name)
            ->with('description', 'View all the trips by this party')
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
     * @param  \App\Domain\Party\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Party $party)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Party\Models\Party  $party
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Party $party, Trip $trip)
    {
        return view('page')
            ->with('livewire', 'models.trips.show')
            ->with('title',  'View Trip')
            ->with('description', 'View the details regarding this trip')
            ->with('key', 'trip')
            ->with('val', $trip);

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
        abort(404);
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
        abort(404);
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
        abort(404);
    }
}
