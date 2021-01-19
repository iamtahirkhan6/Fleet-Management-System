<?php

namespace Database\Seeders;

use App\Domain\Company\Seeders\CompanySeeder;
use App\Domain\Document\Seeders\DocumentCategorySeeder;
use App\Domain\Employee\Seeders\EmployeeDesignationSeeder;
use App\Domain\Employee\Seeders\EmployeeSeeder;
use App\Domain\Expense\Seeders\ExpenseCategorySeeder;
use App\Domain\Expense\Seeders\ExpenseCategoryTypeSeeder;
use App\Domain\Expense\Seeders\ExpenseSeeder;
use App\Domain\Fleet\Seeders\FleetSeeder;
use App\Domain\Fleet\Seeders\FleetVehicleSeeder;
use App\Domain\Office\Seeders\OfficeSeeder;
use App\Domain\Payment\Seeders\PaymentMethodSeeder;
use App\Domain\Trip\Seeders\TripSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LaratrustSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            SectorSeeder::class,
            MinesSeeder::class,
            TaxCategorySeeder::class,
            ExpenseCategoryTypeSeeder::class,
            ExpenseCategorySeeder::class,
            UnloadingPointSeeder::class,
            PaymentMethodSeeder::class,
            EmployeeDesignationSeeder::class,
            MaterialSeeder::class,
            OfficeSeeder::class,
            ConsigneeSeeder::class,
            EmployeeSeeder::class,
            DocumentCategorySeeder::class,
            ProjectSeeder::class,
            TripSeeder::class,
            ExpenseSeeder::class,
            VehicleRCSeeder::class,
            FleetSeeder::class,
            FleetVehicleSeeder::class,
    ]);
    }
}
