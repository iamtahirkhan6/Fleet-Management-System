<?php

namespace App\Domain\Invoice\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Invoice\Models\Invoice;
use App\Domain\Consignee\Models\Consignee;

class ConsigneeInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Consignee $consignee)
    {
        return view('page')
            ->with('livewire', 'models.invoices.index')
            ->with('title', 'Invoices')
            ->with('description', 'View all the invoices by your consignee')
            ->with('key', 'consignee')
            ->with('val', $consignee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Consignee $consignee)
    {
        return view('page')
            ->with('livewire', 'models.invoices.create')
            ->with('title', 'Create Invoice')
            ->with('description', 'Create an invoice for the consignee')
            ->with('key', 'consignee')
            ->with('val', $consignee);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request                $request
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Consignee $consignee)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     * @param  \App\Domain\Invoice\Models\Invoice      $invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Consignee $consignee, Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     * @param  \App\Domain\Invoice\Models\Invoice      $invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Consignee $consignee, Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request                $request
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     * @param  \App\Domain\Invoice\Models\Invoice      $invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consignee $consignee, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $consignee
     * @param  \App\Domain\Invoice\Models\Invoice      $invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consignee $consignee, Invoice $invoice)
    {
        //
    }
}
