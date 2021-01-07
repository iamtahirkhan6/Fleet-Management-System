<?php

namespace App\Http\Controllers;

use App\Models\TripPaymentTransaction;
use Illuminate\Http\Request;

class TripTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('models.payments.trips.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(TripPaymentTransaction $payment)
    {
        return view('models.payments.trips.show', ['transaction' => $payment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(TripPaymentTransaction $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TripPaymentTransaction $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TripPaymentTransaction  $tripPaymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(TripPaymentTransaction $payment)
    {
        //
    }
}
