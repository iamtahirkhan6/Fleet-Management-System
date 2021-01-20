<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Trip\Controllers\TripController;
use App\Domain\Party\Controllers\PartyController;
use App\Domain\Fleet\Controllers\FleetController;
use App\Domain\General\Controllers\MinesController;
use App\Domain\Office\Controllers\OfficeController;
use App\Domain\General\Controllers\SectorsController;
use App\Domain\Project\Controllers\ProjectController;
use App\Domain\Company\Controllers\CompanyController;
use App\Domain\MarketVehicle\Controllers\MarketVehiclesController;
use App\Domain\Employee\Controllers\EmployeesController;
use App\Domain\VehicleRC\Controllers\VehicleRCController;
use App\Domain\Trip\Controllers\TripPartyController;
use App\Domain\Consignee\Controllers\ConsigneeController;
use App\Domain\Trip\Controllers\TripBasicController;
use App\Domain\Office\Controllers\OfficeExpenseController;
use App\Domain\Party\Controllers\PartyVehiclesController;
use App\Domain\Fleet\Controllers\FleetVehiclesController;
use App\Domain\Company\Controllers\CompanyOfficesController;
use App\Domain\General\Controllers\UnloadingPointsController;
use App\Domain\Office\Controllers\OfficeEmployeesController;
use App\Domain\Trip\Controllers\TripTransactionController;
use App\Domain\Company\Controllers\CompanyEmployeesController;

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

Route::group(['middleware' => ['auth:sanctum','verified']], function () {

    Route::get('search_vehicle_rc', [VehicleRCController::class, 'index']);
    Route::get('fleets/{fleet}/live', [FleetController::class, 'live']);
    Route::get('company/settings', [CompanyController::class, 'settings']);

    Route::resources([
        'company'               => CompanyController::class,
        'company.offices'       => CompanyOfficesController::class,
        'company.employees'     => CompanyEmployeesController::class,
        'fleets'                => FleetController::class,
        'fleets.vehicles'       => FleetVehiclesController::class,
        'offices'               => OfficeController::class,
        'offices.expenses'      => OfficeExpenseController::class,
        'employees'             => EmployeesController::class,
        'offices.employees'     => OfficeEmployeesController::class,
        'parties'               => PartyController::class,
        'parties.vehicles'      => PartyVehiclesController::class,
        'parties.trips'         => TripPartyController::class,
        'consignees'            => ConsigneeController::class,
        'payments'              => TripTransactionController::class,
        'trips'                 => TripBasicController::class,
        'market-vehicles'       => MarketVehiclesController::class,
        'projects'              => ProjectController::class,
        'projects.trips'        => TripController::class,
    ]);

    Route::get('/dashboard', function () {
        return view('dashboards.manager');
    })->name('dashboard');

    Route::get('/clear-cache-all', function() {
        Artisan::call('optimize:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        return redirect(\route('dashboard'));
    });
});

Route::group(['middleware' => ['auth:sanctum','verified', 'role:admin']], function () {
    Route::resources([
        'sectors'               => SectorsController::class,
        'mines'                 => MinesController::class,
        'unloading-points'      => UnloadingPointsController::class
    ]);
});
