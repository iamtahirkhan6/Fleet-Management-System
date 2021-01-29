<?php

namespace App\Domain\Company\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Domain\Company\Models\Company;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View|Response
     */
    public function index()
    {
        return view('page')->with('livewire', 'models.company.index')->with('title', 'Your Company');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     *
     * @return Application|Factory|View|Response
     */
    public function show(Company $company)
    {
        if (Auth::user()->company_id == $company->id) {
            return view('page')->with('livewire', 'models.company.show')->with('title', $company->name)->with('key', 'company')->with('val', $company);
        } else {
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     *
     * @return bool|View|void
     */
    public function settings()
    {
        if (!Auth::user()->hasRole('manager')) return abort(403);
        return view('page')->with('livewire', 'models.company.settings')->with('title', 'Company Settings')->with('description', 'Manage the settings of your company from this page.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     *
     * @return View|Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Company $company
     *
     * @return View|Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     *
     * @return View|Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
