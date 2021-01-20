<?php

namespace App\Domain\Company\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Company\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('page')
            ->with('livewire', 'models.company.index')
            ->with('title', 'Your Company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        if (isset(Auth::user()->company_id)) {
            if(Auth::user()->company_id == $company->id) {
                return view('page')
                    ->with('livewire', 'models.company.show')
                    ->with('title', $company->name)
                    ->with('key', 'company')
                    ->with('val', $company);
            } else {
                abort(403);
            }
        } else {
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function settings()
    {
        $company = Company::whereId(Auth::user()->company_id)->first();
        return view('page')
            ->with('livewire', 'models.company.settings')
            ->with('title', $company->name. ' Settings')
            ->with('key', 'company')
            ->with('val', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain\Company\Models\Company  $company
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
