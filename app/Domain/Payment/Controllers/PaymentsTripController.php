<?php

namespace App\Domain\Payment\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Trip\Models\Trip;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Payment\Models\Payment;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PaymentsTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return Response
     */
    public function index(Payment $payment)
    {
        //
    }

    /**
     * Display Pending Trip Payments.
     *
     * @param  \App\Models\Payment  $payment
     *
     * @return Application|Factory|View|Response|void
     */
    public function pending()
    {
        return (Auth::user()->isAbleTo('payments-create')) ? view('page')->with('livewire', 'models.payments.trips.pending')->with('title', 'Challan Pending Payments') : abort(403);
    }

    /**
     * Display Razorpay Pending Payments.
     *
     * @param  \App\Models\Payment  $payment
     *
     * @return Application|Factory|View|Response|void
     */
    public function razorpay_pending()
    {
        return (Auth::user()->isAbleTo('razorpay-complete')) ? view('page')->with('livewire', 'models.payments.trips.pending-razorpay')->with('title', 'Razorpay Pending Payments') : abort(403);
    }

    /**
     * Complete a single Pending Payment.
     *
     * @param  \App\Models\Payment  $payment
     *
     * @return Application|Factory|View|Response
     */
    public function pending_complete(Trip $trip)
    {
        return (Auth::user()->isAbleTo('payments-create')) ? abort(404) : abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return Response
     */
    public function create(Payment $payment)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request              $request
     * @param  \App\Models\Payment  $payment
     *
     * @return Response
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
     * @return Response
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
     * @return Response
     */
    public function edit(Payment $payment, Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request              $request
     * @param  \App\Models\Payment  $payment
     * @param  \App\Models\Trip     $trip
     *
     * @return Response
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
     * @return Response
     */
    public function destroy(Payment $payment, Trip $trip)
    {
        //
    }
}
