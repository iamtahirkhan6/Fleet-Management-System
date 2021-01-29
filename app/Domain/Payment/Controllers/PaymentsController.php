<?php

namespace App\Domain\Payment\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Domain\Payment\Models\Payment;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return (Auth::user()->isAbleTo('payments-read')) ? view('page')->with('livewire', 'models.payments.index')->with('title', 'Payments') : abort(403);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        dd('Create Payment');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Payment $payment
     *
     * @return Response
     */
    public function show(Payment $payment)
    {
        dd('Show specific payment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Payment $payment
     *
     * @return Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Payment $payment
     *
     * @return Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Payment $payment
     *
     * @return Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
