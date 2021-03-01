<?php

namespace App\Domain\Payee\Controllers;


use Illuminate\Http\Request;
use App\Domain\Payee\Models\Payee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PayeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(
    ) : \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        if (!Auth::user()
            ->isAbleTo('payees-read')) return abort(403);

        return view('page')
            ->with('livewire', 'models.payees.index')
            ->with('title', 'Payees')
            ->with('description', 'View all the payees in your company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(
    ) : \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        if (!Auth::user()
            ->isAbleTo('fleets-create')) return abort(403);

        return view('page')
            ->with('livewire', 'models.payees.create')
            ->with('title', 'Create a Payee')
            ->with('description', 'Enter the details below to add a payee.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payee  $payee
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Payee $payee) : \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View {

        if (!Auth::user()
            ->isAbleTo('fleets-read')) return abort(403);

        return view('page')
            ->with('livewire', 'models.payees.show')
            ->with('title', 'Payee Details')
            ->with('description', 'List of all the payments to ' . $payee->name . '.')
            ->with('key', 'payee')
            ->with('val', $payee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : \Illuminate\Http\Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payee  $payee
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Payee $payee) : \Illuminate\Http\Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payee         $payee
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payee $payee) : \Illuminate\Http\Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payee  $payee
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payee $payee) : \Illuminate\Http\Response
    {
        //
    }
}
