<?php

namespace App\Domain\General\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\General\Models\Mine;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class MinesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.mines.index')->with('title', 'Mines')->with('description', 'View the list of all mines');
    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('page')->with('livewire', 'models.mines.create')->with('title', 'Add a Mine')->with('description', 'Enter a new mine to a sector');
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
     * @param Mine $mine
     *
     * @return Application|Factory|View
     */
    public function show(Mine $mine)
    {
        return view('page')->with('livewire', 'models.mines.show')->with('title', 'View Mine')->with('description', 'View all the details of this mine')->with('key', 'mine')->with('val', $mine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Mine $mine
     *
     * @return Response
     */
    public function edit(Mine $mine)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Mine    $mine
     *
     * @return Response
     */
    public function update(Request $request, Mine $mine)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Mine $mine
     *
     * @return Response
     */
    public function destroy(Mine $mine)
    {
        abort(404);
    }
}
