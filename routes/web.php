<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\FleetController;
use App\Http\Controllers\MinesController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\SectorsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\VehicleRCController;
use App\Http\Controllers\TripPartyController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\TripBasicController; 
use App\Http\Controllers\OfficeExpenseController;
use App\Http\Controllers\PartyVehiclesController;
use App\Http\Controllers\FleetVehiclesController;
use App\Http\Controllers\CompanyOfficesController;
use App\Http\Controllers\OfficeEmployeesController;
use App\Http\Controllers\TripTransactionController;
use App\Http\Controllers\CompanyEmployeesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
]], function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('fleets/{fleet}/live', [FleetController::class, 'live']);

    Route::resources([
        'fleets' => FleetController::class,
        'fleets.vehicles' => FleetVehiclesController::class,
        'companies' => CompanyController::class,
        'companies.offices' => CompanyOfficesController::class,
        'companies.employees' => CompanyEmployeesController::class,
        'offices' => OfficeController::class,
        'offices.expenses' => OfficeExpenseController::class,
        'offices.employees' => OfficeEmployeesController::class,
        'parties' => PartyController::class,
        'parties.vehicles' => PartyVehiclesController::class,
        'parties.trips' => TripPartyController::class,
        'sectors' => SectorsController::class,
        'mines' => MinesController::class,
    ]);

    Route::resource('employees', EmployeesController::class)->only('index');
    Route::resource('consignees', ConsigneeController::class)->only('index', 'show', 'create');
    Route::resource('payments', TripTransactionController::class);
    Route::resource('trips', TripBasicController::class)->only('show');
    Route::resource('vehicles', VehiclesController::class)->only('index', 'show');

    Route::resource('projects', ProjectController::class)->only('index', 'create', 'show');
    Route::resource('projects.trips', TripController::class)->only('index', 'create', 'show');

    Route::resource('search_vehicle_rc', VehicleRCController::class)->only('index');

    Route::get('/clear-cache-all', function() {
        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Artisan::call('config:cache');
        return redirect()->route('dashboard');
    });
});