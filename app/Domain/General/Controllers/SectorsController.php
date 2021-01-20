<?php

namespace App\Domain\General\Controllers;

use App\Domain\General\Models\Sector;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.sectors.index')
            ->with('title', 'Sectors')
            ->with('description', 'View the list of all sectors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('page')
            ->with('livewire', 'models.sectors.create')
            ->with('title', 'Add a Sector')
            ->with('description', 'Enter a new sector to your application');
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
     * @param  \App\Domain\General\Models\Sector  $sector
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Sector $sector)
    {
        return view('page')
            ->with('livewire', 'models.sectors.show')
            ->with('title', 'View Sector')
            ->with('description', 'View all the details of this sector')
            ->with('key', 'sector')
            ->with('val', $sector);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\General\Models\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function edit(Sector $sector)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\General\Models\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sector $sector)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\General\Models\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sector $sector)
    {
        abort(404);
    }
}
