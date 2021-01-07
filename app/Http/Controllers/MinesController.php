<?php

namespace App\Http\Controllers;

use App\Models\Mine;
use Illuminate\Http\Request;

class MinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('models.mines.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models.mines.create');
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
     * @param  \App\Models\Mine  $mine
     * @return \Illuminate\Http\Response
     */
    public function show(Mine $mine)
    {
        return view('models.mines.show', ["mine" => $mine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mine  $mine
     * @return \Illuminate\Http\Response
     */
    public function edit(Mine $mine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mine  $mine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mine $mine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mine  $mine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mine $mine)
    {
        //
    }
}
