<?php

namespace App\Domain\Company\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Office\Models\Office;
use App\Domain\Company\Models\Company;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class CompanyOfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Company $company
     *
     * @return Application|Factory|View
     */
    public function index(Company $company)
    {
        return view('page')->with('livewire', 'models.company.offices.index')->with('title', 'Offices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Company $company
     *
     * @return Response
     */
    public function create(Company $company)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Company $company
     *
     * @return Response
     */
    public function store(Request $request, Company $company)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     * @param Office  $office
     *
     * @return Response
     */
    public function show(Company $company, Office $office)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @param Office  $office
     *
     * @return Response
     */
    public function edit(Company $company, Office $office)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Company $company
     * @param Office  $office
     *
     * @return Response
     */
    public function update(Request $request, Company $company, Office $office)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     * @param Office  $office
     *
     * @return Response
     */
    public function destroy(Company $company, Office $office)
    {
        abort(404);
    }
}
