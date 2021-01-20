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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Office $office)
    {
        return view('page')
            ->with('livewire', 'models.offices.employees.index')
            ->with('title',  'Employees')
            ->with('description', 'View all the employees in this office')
            ->with('key', 'office')
            ->with('val', $office);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function create(Office $office)
    {
        abort(404);
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
        abort(404);
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
        abort(404);
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
        abort(404);
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
        abort(404);
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
        abort(404);
    }
}
