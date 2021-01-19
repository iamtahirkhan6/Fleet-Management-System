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
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        //
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
        //
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
        //
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
        //
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
        //
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
        //
    }
}
