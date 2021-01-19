<?php

namespace App\Domain\Office\Controllers;

use App\Domain\Expense\Models\Expense;
use App\Domain\Office\Models\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficeExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function index(Office $office)
    {
        return view("models.offices.expenses.index", ["office" => $office]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function create(Office $office)
    {
        return view("models.offices.expenses.create", ["office" => $office]);
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
     * @param  \App\Domain\Expense\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office, Expense $expense)
    {
        return dd("show specific expense of an office");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Expense\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office, Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Expense\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @param  \App\Domain\Expense\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office, Expense $expense)
    {
        //
    }
}
