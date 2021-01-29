<?php

namespace App\Domain\Employee\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\Domain\Employee\Models\Employee;
use Illuminate\Contracts\Foundation\Application;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.employees.index')->with('title', 'Employees')->with('description', 'View all the employees in your company');
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('page')->with('livewire', 'models.employees.create')->with('title', 'Employees')->with('description', 'Add an employee in your company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     *
     * @return Response
     */
    public function show(Employee $employee)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     *
     * @return Response
     */
    public function edit(Employee $employee)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param Employee $employee
     *
     * @return Response
     */
    public function update(Request $request, Employee $employee)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     *
     * @return Response
     */
    public function destroy(Employee $employee)
    {
        abort(404);
    }
}
