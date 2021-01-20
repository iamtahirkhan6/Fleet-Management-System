<?php

namespace App\Domain\Trip\Controllers;

use App\Domain\Trip\Models\TripPaymentTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.payments.trips.index')
            ->with('title',  'Payments for Trips')
            ->with('description', 'View all the payments done against trips');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Trip\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(TripPaymentTransaction $payment)
    {
        return view('page')
            ->with('livewire', 'models.payments.trips.show')
            ->with('title',  'Trip Payment')
            ->with('description', 'View payment details of a trip')
            ->with('key', 'transaction')
            ->with('val', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Trip\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(TripPaymentTransaction $payment)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Trip\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TripPaymentTransaction $payment)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Trip\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(TripPaymentTransaction $payment)
    {
        abort(404);
    }
}
