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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.employees.index')
            ->with('title', 'Employees')
            ->with('description', 'View all the employees in your company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        abort(404);
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
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Employee\Models\Employee  $employee
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Company $company, Employee $employee)
    {
        return view('page')
            ->with('livewire', 'models.employees.show')
            ->with('title', $employee->name)
            ->with('description', 'View all the details of the employee');
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
        abort(404);
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
        abort(404);
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
        abort(404);
    }
}
