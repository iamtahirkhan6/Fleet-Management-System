<?php

namespace App\Domain\Payment\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Domain\Trip\Models\Trip;
use App\Http\Controllers\Controller;
use App\Domain\Payment\Models\Payment;

class PaymentsTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function index(Payment $payment)
    {
        //
    }

    /**
     * Display Pending Payments.
     *
     * @param  \App\Models\Payment  $payment
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function pending()
    {
        return (Auth::user()->isAbleTo('payments-create')) ? view('page')->with('livewire', 'models.payments.trips.pending')->with('title', 'Challan Pending Payments') : abort(403);
    }

    /**
     * Complete a single Pending Payment.
     *
     * @param  \App\Models\Payment  $payment
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function pending_complete(Trip $trip)
    {
        return (Auth::user()->isAbleTo('payments-create')) ? view('page')->with('livewire', 'models.payments.trips.complete-pending')->with('title', 'Complete Payment')->with('key', 'trip')->with('val', $trip) : abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function create(Payment $payment)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment, Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment, Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment, Trip $trip)
    {
        //
    }
}
