<?php

namespace App\Domain\Company\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Company\Models\Company;
use Illuminate\Contracts\View\Factory;
use App\Domain\Employee\Models\Employee;
use Illuminate\Contracts\Foundation\Application;

class CompanyEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Company  $company
     *
     * @return Application|Factory|View|Response
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
     * @param  Company  $company
     *
     * @return Response
     */
    public function create(Company $company)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @param  Company  $company
     *
     * @return Response
     */
    public function store(Request $request, Company $company)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  Company   $company
     * @param  Employee  $employee
     *
     * @return Application|Factory|View
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
     * @param  Company   $company
     * @param  Employee  $employee
     *
     * @return Response
     */
    public function edit(Company $company, Employee $employee)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request   $request
     * @param  Company   $company
     * @param  Employee  $employee
     *
     * @return Response
     */
    public function update(Request $request, Company $company, Employee $employee)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Company   $company
     * @param  Employee  $employee
     *
     * @return Response
     */
    public function destroy(Company $company, Employee $employee)
    {
        abort(404);
    }
}
