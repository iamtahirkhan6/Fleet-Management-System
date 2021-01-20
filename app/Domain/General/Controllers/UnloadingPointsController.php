<?php

namespace App\Domain\General\Controllers;

use App\Domain\General\Models\UnloadingPoint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnloadingPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.unloading-point.index')
            ->with('title', 'Unloading Points')
            ->with('description', 'View all the unloading points');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('page')
            ->with('livewire', 'models.unloading-point.create')
            ->with('title', 'Create an Unloading Point')
            ->with('description', 'Enter the details to add a new unloading point');
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
     * @param  \App\Domain\General\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function show(UnloadingPoint $unloadingPoint)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\General\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(UnloadingPoint $unloadingPoint)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\General\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnloadingPoint $unloadingPoint)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\General\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnloadingPoint $unloadingPoint)
    {
        abort(404);
    }
}
