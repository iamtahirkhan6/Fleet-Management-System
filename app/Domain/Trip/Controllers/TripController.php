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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Project $project)
    {
        return view('page')
            ->with('livewire', 'models.projects.index')
            ->with('title',  'View Trips')
            ->with('description', 'View all the performed trips in the project')
            ->with('key', 'project')
            ->with('val', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Project $project, Trip $trip)
    {
        return view('page')
            ->with('livewire', 'models.projects.create')
            ->with('title',  'Create a Trip')
            ->with('description', 'Add a new trip entry for this project')
            ->with('key', 'project')
            ->with('val', $project);
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
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Project\Models\Project  $project
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Project $project, Trip $trip)
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
     * @param  \App\Domain\Project\Models\Project  $project
     * @param  \App\Domain\Trip\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Trip $trip)
    {
        abort(404);
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
        abort(404);
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
        abort(404);
    }
}
