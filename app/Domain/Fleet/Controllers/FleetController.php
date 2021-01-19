<?php

namespace App\Domain\Fleet\Controllers;

use App\Domain\Fleet\Models\Fleet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('models.fleets.index');
    }

    public function live(Fleet $fleet)
    {
        return view('models.fleets.live.index', ['fleet' => $fleet]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function show(Fleet $fleet)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function edit(Fleet $fleet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fleet $fleet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Fleet\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fleet $fleet)
    {
        //
    }
}