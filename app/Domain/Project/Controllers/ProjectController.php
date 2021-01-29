<?php

namespace App\Domain\Project\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Domain\Project\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return void
     */
    public function index()
    {
       if (!Auth::user()->isAbleTo("projects-read")) return abort(403);
        return view('page')->with('livewire', 'models.projects.index')->with('title', 'Projects')->with('description', 'View all the projects of your company');
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create()
    {
        if (!Auth::user()->isAbleTo("projects-create")) return abort(403);
        return view('page')->with('livewire', 'models.projects.create')->with('title', 'Create Project')->with('description', 'Create a new project for your company');
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
     * @param Project $project
     *
     * @return Application|Factory|View|void
     */
    public function show(Project $project)
    {
        if (!Auth::user()->isAbleTo("projects-read")) return abort(403);
        return view('page')->with('livewire', 'models.projects.show')->with('title', 'View Project')->with('description', 'View all the details regarding the project')->with('key', 'project')->with('val', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     *
     * @return Application|Factory|View
     */
    public function edit(Project $project)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     *
     * @return Response
     */
    public function update(Request $request, Project $project)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     *
     * @return Response
     */
    public function destroy(Project $project)
    {
        abort(404);
    }
}
