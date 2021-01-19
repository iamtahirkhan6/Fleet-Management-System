<?php

namespace App\Domain\Trip\Controllers;

use App\Domain\Project\Models\Project;
use App\Domain\Trip\Models\Trip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        return view('models.trips.index', ['project' => $project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project, Trip $trip)
    {
        return view('models.trips.create', ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Project\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Trip $trip)
    {
        return view('models.trips.show', ['trip' => $trip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Project\Models\Project  $project
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Trip $trip)
    {
        //
    }
}
