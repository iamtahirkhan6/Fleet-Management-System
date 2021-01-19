<?php

namespace App\Domain\Company\Controllers;

use App\Domain\Company\Models\Company;
use App\Domain\Employee\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company, Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, Employee $employee)
    {
        //
    }
}
