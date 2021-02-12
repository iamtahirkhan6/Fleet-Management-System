<?php

namespace App\Domain\UnloadingPoint\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class UnloadingPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.unloading-points.index')
            ->with('title', 'Unloading Points')
            ->with('description', 'View all the unloading points');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('page')
            ->with('livewire', 'models.unloading-points.create')
            ->with('title', 'Create an Unloading Point')
            ->with('description', 'Enter the details to add a new unloading point');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function store(Request $request) : Response
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  UnloadingPoint $unloadingpoint
     *
     * @return Response
     */
    public function show(UnloadingPoint $unloadingpoint) : Response
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  UnloadingPoint $unloadingpoint
     *
     * @return Response
     */
    public function edit(UnloadingPoint $unloadingpoint) : Response
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request      $request
     * @param  UnloadingPoint $unloadingpoint
     *
     * @return Response
     */
    public function update(Request $request, UnloadingPoint $unloadingpoint) : Response
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  UnloadingPoint $unloadingpoint
     *
     * @return Response
     */
    public function destroy(UnloadingPoint $unloadingpoint) : Response
    {
        abort(404);
    }
}
