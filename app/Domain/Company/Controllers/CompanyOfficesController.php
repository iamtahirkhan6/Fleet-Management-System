<?php

namespace App\Domain\Company\Controllers;

use App\Domain\Company\Models\Company;
use App\Domain\Office\Models\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyOfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Company $company)
    {
        return view('page')
            ->with('livewire', 'models.company.offices.index')
            ->with('title', 'Offices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company, Office $office)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, Office $office)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company, Office $office)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @param  \App\Domain\Office\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, Office $office)
    {
        abort(404);
    }
}
