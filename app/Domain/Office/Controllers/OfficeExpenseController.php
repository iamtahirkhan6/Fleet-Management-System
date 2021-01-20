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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Office $office)
    {
        return view('page')
            ->with('livewire', 'models.offices.expenses.index')
            ->with('title', $office->name . ' Office')
            ->with('description', 'View all the offices in your company')
            ->with('key', 'office')
            ->with('val', $office);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Office $office)
    {
        return view('page')
            ->with('livewire', 'models.offices.expenses.create')
            ->with('title', 'Add an Expense')
            ->with('description', 'Enter all the details of the expense.')
            ->with('key', 'office')
            ->with('val', $office);
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
     * @param  \App\Domain\Expense\Models\Expense  $expense
     * @return \Illuminate\Http\Response|void
     */
    public function show(Office $office, Expense $expense)
    {
        return abort('404', 'Show specific expense of an office');
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
        abort(404);
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
        abort(404);
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
        abort(404);
    }
}
