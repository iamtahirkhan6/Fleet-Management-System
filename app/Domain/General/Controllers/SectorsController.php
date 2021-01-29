<?php

namespace App\Domain\General\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\General\Models\Sector;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class SectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.sectors.index')->with('title', 'Sectors')->with('description', 'View the list of all sectors');
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('page')->with('livewire', 'models.sectors.create')->with('title', 'Add a Sector')->with('description', 'Enter a new sector to your application');
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
     * @param Sector $sector
     *
     * @return Application|Factory|View
     */
    public function show(Sector $sector)
    {
        return view('page')->with('livewire', 'models.sectors.show')->with('title', 'View Sector')->with('description', 'View all the details of this sector')->with('key', 'sector')->with('val', $sector);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sector $sector
     *
     * @return Response
     */
    public function edit(Sector $sector)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Sector  $sector
     *
     * @return Response
     */
    public function update(Request $request, Sector $sector)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sector $sector
     *
     * @return Response
     */
    public function destroy(Sector $sector)
    {
        abort(404);
    }
}
