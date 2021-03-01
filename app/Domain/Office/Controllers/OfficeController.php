<?php

namespace App\Domain\Office\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Office\Models\Office;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.offices.index')
            ->with('title', 'Offices')
            ->with('description', 'View all the offices in your company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('page')
            ->with('livewire', 'models.offices.create')
            ->with('title', 'Add an Office')
            ->with('description', 'Create a new office in your company');
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
     * @param  Office  $office
     *
     * @return Response
     */
    public function show(Office $office)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Office  $office
     *
     * @return Response
     */
    public function edit(Office $office)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Office   $office
     *
     * @return Response
     */
    public function update(Request $request, Office $office)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Office  $office
     *
     * @return Response
     */
    public function destroy(Office $office)
    {
        abort(404);
    }
}
