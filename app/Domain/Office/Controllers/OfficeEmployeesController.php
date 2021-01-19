<?php

namespace App\Domain\Office\Controllers;

use App\Domain\Employee\Models\Employee;
use App\Domain\Office\Models\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function index(Office $office)
    {
        return view('models.offices.employees.index', ['office' => $office]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function create(Office $office)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Office $office)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office, Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office, Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office, Employee $employee)
    {
        //
    }
}