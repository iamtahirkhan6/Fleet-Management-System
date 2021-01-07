<?php

namespace App\Http\Controllers;

use App\Models\VehicleRC;
use Illuminate\Http\Request;


class VehicleRCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('models.rc-search.index');
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
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleRC  $vehicleRC
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleRC $vehicleRC)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleRC  $vehicleRC
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleRC $vehicleRC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleRC  $vehicleRC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleRC $vehicleRC)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleRC  $vehicleRC
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleRC $vehicleRC)
    {
        //
    }
}
