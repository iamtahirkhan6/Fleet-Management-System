<?php

namespace App\Domain\Consignee\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\Domain\Consignee\Models\Consignee;
use Illuminate\Contracts\Foundation\Application;

class ConsigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.consignees.index')
            ->with('title', 'Consignees')
            ->with('description', 'View all the consignees who work with your company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('page')
            ->with('livewire', 'models.consignees.create')
            ->with('title', 'Consignees')
            ->with('description', 'Add a new consignee to your company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
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
     * @param  Consignee  $Consignee
     *
     * @return Response
     */
    public function show(Consignee $Consignee)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Consignee  $Consignee
     *
     * @return Response
     */
    public function edit(Consignee $Consignee)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request    $request
     * @param  Consignee  $Consignee
     *
     * @return Response
     */
    public function update(Request $request, Consignee $Consignee)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Consignee  $Consignee
     *
     * @return Response
     */
    public function destroy(Consignee $Consignee)
    {
        abort(404);
    }
}
