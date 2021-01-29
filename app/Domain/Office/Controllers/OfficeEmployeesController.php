<?php

namespace App\Domain\Office\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Office\Models\Office;
use Illuminate\Contracts\View\Factory;
use App\Domain\Employee\Models\Employee;
use Illuminate\Contracts\Foundation\Application;

class OfficeEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Office $office
     *
     * @return Application|Factory|View
     */
    public function index(Office $office)
    {
        return view('page')->with('livewire', 'models.offices.employees.index')->with('title', 'Employees')->with('description', 'View all the employees in this office')->with('key', 'office')->with('val', $office);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Office $office
     *
     * @return Response
     */
    public function create(Office $office)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Office  $office
     *
     * @return Response
     */
    public function store(Request $request, Office $office)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Office   $office
     * @param Employee $employee
     *
     * @return Response
     */
    public function show(Office $office, Employee $employee)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Office   $office
     * @param Employee $employee
     *
     * @return Response
     */
    public function edit(Office $office, Employee $employee)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param Office   $office
     * @param Employee $employee
     *
     * @return Response
     */
    public function update(Request $request, Office $office, Employee $employee)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Office   $office
     * @param Employee $employee
     *
     * @return Response
     */
    public function destroy(Office $office, Employee $employee)
    {
        abort(404);
    }
}
