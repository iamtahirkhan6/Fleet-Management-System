<?php

namespace App\Domain\Trip\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Domain\Trip\Models\TripPaymentTransaction;

class TripTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.payments.trips.index')->with('title', 'Payments for Trips')->with('description', 'View all the payments done against trips');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        abort(404);
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
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param TripPaymentTransaction $tripPaymentTransaction
     *
     * @return Application|Factory|View
     */
    public function show(TripPaymentTransaction $payment)
    {
        return view('page')->with('livewire', 'models.payments.trips.show')->with('title', 'Trip Payment')->with('description', 'View payment details of a trip')->with('key', 'transaction')->with('val', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TripPaymentTransaction $tripPaymentTransaction
     *
     * @return Response
     */
    public function edit(TripPaymentTransaction $payment)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request                $request
     * @param TripPaymentTransaction $tripPaymentTransaction
     *
     * @return Response
     */
    public function update(Request $request, TripPaymentTransaction $payment)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TripPaymentTransaction $tripPaymentTransaction
     *
     * @return Response
     */
    public function destroy(TripPaymentTransaction $payment)
    {
        abort(404);
    }
}
