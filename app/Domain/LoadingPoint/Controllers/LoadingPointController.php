<?php

namespace App\Domain\LoadingPoint\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\Domain\LoadingPoint\Models\LoadingPoint;
use Illuminate\Contracts\Foundation\Application;

class LoadingPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.loading-points.index')
            ->with('title', 'Loading Points')
            ->with('description', 'View the list of all loading points');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('page')
            ->with('livewire', 'models.loading-points.create')
            ->with('title', 'Add a Loading Point')
            ->with('description', 'Add a new loading point');
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
     * @param  LoadingPoint  $loadingpoint
     *
     * @return Application|Factory|View
     */
    public function show(LoadingPoint $loadingpoint)
    {
        return view('page')
            ->with('livewire', 'models.loading-points.show')
            ->with('title', 'View Loading Points')
            ->with('description', 'View all the details of this loading point.')
            ->with('key', 'loadingpoint')
            ->with('val', $loadingpoint);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  LoadingPoint  $loadingpoint
     *
     * @return Response
     */
    public function edit(LoadingPoint $loadingpoint)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request       $request
     * @param  LoadingPoint  $loadingpoint
     *
     * @return Response
     */
    public function update(Request $request, LoadingPoint $loadingpoint) : Response
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  LoadingPoint  $loadingpoint
     *
     * @return Response
     */
    public function destroy(LoadingPoint $loadingpoint) : Response
    {
        abort(404);
    }
}
