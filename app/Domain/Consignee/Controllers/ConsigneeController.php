<?php

namespace App\Domain\Consignee\Controllers;

use App\Http\Controllers\Controller;
use App\Domain\Consignee\Models\Consignee;
use Illuminate\Http\Request;

class ConsigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.consignees.index')
            ->with('title',  'Consignees')
            ->with('description', 'View all the consignees who work with your company');
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
     * @param  \App\Domain\Consignee\Models\Consignee  $Consignee
     * @return \Illuminate\Http\Response
     */
    public function show(Consignee $Consignee)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $Consignee
     * @return \Illuminate\Http\Response
     */
    public function edit(Consignee $Consignee)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Consignee\Models\Consignee  $Consignee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consignee $Consignee)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Consignee\Models\Consignee  $Consignee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consignee $Consignee)
    {
        abort(404);
    }
}
