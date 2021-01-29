<?php

namespace App\Domain\Fleet\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Fleet\Models\Fleet;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.fleets.index')->with('title', 'Your Fleets')->with('description', 'View all the fleets in your company');
    }

    public function live(Fleet $fleet)
    {
        return view('page')->with('livewire', 'models.fleets.live.index')->with('title', 'Your Fleets')->with('description', 'View all the fleets in your company')->with('key', 'fleet')->with('val', $fleet);
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
     * @param Fleet $fleet
     *
     * @return Response
     */
    public function show(Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Fleet $fleet
     *
     * @return Response
     */
    public function edit(Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Fleet   $fleet
     *
     * @return Response
     */
    public function update(Request $request, Fleet $fleet)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Fleet $fleet
     *
     * @return Response
     */
    public function destroy(Fleet $fleet)
    {
        abort(404);
    }
}
