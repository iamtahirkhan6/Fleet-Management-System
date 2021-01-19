<?php

namespace App\Http\Controllers;

use App\Models\UnloadingPoint;
use Illuminate\Http\Request;

class UnloadingPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('models.unloading-point.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models.unloading-point.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function show(UnloadingPoint $unloadingPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(UnloadingPoint $unloadingPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnloadingPoint $unloadingPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnloadingPoint  $unloadingPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnloadingPoint $unloadingPoint)
    {
        //
    }
}
