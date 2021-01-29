<?php

namespace App\Domain\Trip\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Trip\Models\Trip;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Domain\Project\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ProjectTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     *
     * @return Application|Factory|View
     */
    public function index(Project $project)
    {
        if ((!Auth::user()->hasRole("admin")) && (!Auth::user()->hasCompanyId())) return abort(403);
        return view('page')->with('livewire', 'models.trips.index')->with('title', 'View Trips')->with('description', 'View all the performed trips in the project')->with('key', 'project')->with('val', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     *
     * @return Application|Factory|View
     */
    public function create(Project $project, Trip $trip)
    {
        if ((!Auth::user()->hasRole("admin")) && (!Auth::user()->hasCompanyId())) return abort(403);
        return view('page')->with('livewire', 'models.trips.create')->with('title', 'Create a Trip')->with('description', 'Add a new trip entry for this project')->with('key', 'project')->with('val', $project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Project $project
     *
     * @return Response
     */
    public function store(Request $request, Project $project)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @param Trip    $trip
     *
     * @return Application|View|void
     */
    public function show(Project $project, Trip $trip)
    {
        if ((!Auth::user()->hasRole("admin")) && (!Auth::user()->hasCompanyId())) return abort(403);
        return view('page')->with('livewire', 'models.trips.show')->with('title', 'View Trip')->with('description', 'View the details regarding this trip')->with('key', 'trip')->with('val', $trip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @param Trip    $trip
     *
     * @return Response
     */
    public function edit(Project $project, Trip $trip)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @param Trip    $trip
     *
     * @return Response
     */
    public function update(Request $request, Project $project, Trip $trip)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param Trip    $trip
     *
     * @return Response
     */
    public function destroy(Project $project, Trip $trip)
    {
        abort(404);
    }
}
