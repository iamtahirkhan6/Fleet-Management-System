<?php

namespace App\Domain\Party\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Domain\Party\Models\Party;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.parties.index')->with('title', 'Parties')->with('description', 'View all the parties that have worked with your company');
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
     * @param Party $party
     *
     * @return Application|Factory|View
     */
    public function show(Party $party)
    {
        return view('page')->with('livewire', 'models.parties.show')->with('title', 'View Party Information')->with('description', 'View the information regarding this party')->with('key', 'party')->with('val', $party);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Party $party
     *
     * @return Response
     */
    public function edit(Party $party)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Party   $party
     *
     * @return Response
     */
    public function update(Request $request, Party $party)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Party $party
     *
     * @return Response
     */
    public function destroy(Party $party)
    {
        abort(404);
    }
}
