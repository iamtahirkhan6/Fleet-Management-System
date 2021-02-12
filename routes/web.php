<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Fleet\Controllers\FleetController;
use App\Domain\Party\Controllers\PartyController;
use App\Domain\Office\Controllers\OfficeController;
use App\Domain\Trip\Controllers\PartyTripController;
use App\Domain\Trip\Controllers\TripBasicController;
use App\Domain\Company\Controllers\CompanyController;
use App\Domain\Project\Controllers\ProjectController;
use App\Domain\Payment\Controllers\PaymentsController;
use App\Domain\Trip\Controllers\ProjectTripController;
use App\Domain\Employee\Controllers\EmployeesController;
use App\Domain\Consignee\Controllers\ConsigneeController;
use App\Domain\Fleet\Controllers\FleetVehiclesController;
use App\Domain\Party\Controllers\PartyVehiclesController;
use App\Domain\VehicleRC\Controllers\VehicleRCController;
use App\Domain\Office\Controllers\OfficeExpenseController;
use App\Domain\Payment\Controllers\PaymentsTripController;
use App\Domain\Company\Controllers\CompanyOfficesController;
use App\Domain\Office\Controllers\OfficeEmployeesController;
use App\Domain\Company\Controllers\CompanyEmployeesController;
use App\Domain\LoadingPoint\Controllers\LoadingPointController;
use App\Domain\MarketVehicle\Controllers\MarketVehiclesController;
use App\Domain\UnloadingPoint\Controllers\UnloadingPointsController;

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

Route::mediaLibrary('temporary');

Route::group(['middleware' => ['auth:sanctum', 'verified'],], function () {
    // For company accounts
    Route::group(['middleware' => 'hasCompany'], function () {
        Route::get('search_vehicle_rc', [VehicleRCController::class, 'index',]);

        Route::get('fleets/{fleet}/live', [FleetController::class, 'live',]);

        Route::get('company/settings', [CompanyController::class, 'settings',]);

        Route::get('payments/pending', [PaymentsTripController::class, 'pending',]);

        Route::get('payments/razorpay-pending', [PaymentsTripController::class, 'razorpay_pending',]);

        Route::get('payments/pending/{trip}', [PaymentsTripController::class, 'pending_complete',]);

        Route::resources([
                             'company'           => CompanyController::class,
                             'company.offices'   => CompanyOfficesController::class,
                             'company.employees' => CompanyEmployeesController::class,
                             'fleets'            => FleetController::class,
                             'fleets.vehicles'   => FleetVehiclesController::class,
                             'offices'           => OfficeController::class,
                             'offices.expenses'  => OfficeExpenseController::class,
                             'employees'         => EmployeesController::class,
                             'offices.employees' => OfficeEmployeesController::class,
                             'parties'           => PartyController::class,
                             'parties.vehicles'  => PartyVehiclesController::class,
                             'parties.trips'     => PartyTripController::class,
                             'consignees'        => ConsigneeController::class,
                             'payments'          => PaymentsController::class,
                             'payments.trips'    => PaymentsTripController::class,
                             'market-vehicles'   => MarketVehiclesController::class,
                             'projects'          => ProjectController::class,
                             'projects.trips'    => ProjectTripController::class,
                             'loading-points'    => LoadingPointController::class,
                             'unloading-points'  => UnloadingPointsController::class,
                         ]);
    });

    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('/clear-cache-all', function () {
            Artisan::call('optimize:clear');
            Artisan::call('cache:clear');
            Artisan::call('route:cache');
            Artisan::call('view:clear');
            Artisan::call('config:clear');

            return redirect(\route('dashboard'));
        });
    });

    Route::get('/dashboard', function () {
        return view('dashboards.manager');
    })
        ->name('dashboard');

});
