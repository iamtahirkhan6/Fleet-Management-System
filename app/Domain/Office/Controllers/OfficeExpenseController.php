<?php

namespace App\Domain\Office\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Office\Models\Office;
use App\Domain\Expense\Models\Expense;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class OfficeExpenseController extends Controller
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
        return view('page')->with('livewire', 'models.offices.expenses.index')->with('title', $office->name . ' Office')->with('description', 'View all the expenses in your office')->with('key', 'office')->with('val', $office);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Office $office
     *
     * @return Application|Factory|View
     */
    public function create(Office $office)
    {
        return view('page')->with('livewire', 'models.offices.expenses.create')->with('title', 'Add an Expense')->with('description', 'Enter all the details of the expense.')->with('key', 'office')->with('val', $office);
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
     * @param Office  $office
     * @param Expense $expense
     *
     * @return Response|void
     */
    public function show(Office $office, Expense $expense)
    {
        return abort('404', 'Show specific expense of an office');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Office  $office
     * @param Expense $expense
     *
     * @return Response
     */
    public function edit(Office $office, Expense $expense)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Office  $office
     * @param Expense $expense
     *
     * @return Response
     */
    public function update(Request $request, Office $office, Expense $expense)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Office  $office
     * @param Expense $expense
     *
     * @return Response
     */
    public function destroy(Office $office, Expense $expense)
    {
        abort(404);
    }
}
