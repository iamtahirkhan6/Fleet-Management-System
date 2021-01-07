<?php

namespace Database\Seeders;

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
            UserSeeder::class,
            CompanySeeder::class,
            SectorSeeder::class,
            MinesSeeder::class,
            UnloadingPointSeeder::class,
            DesignationSeeder::class,
            OfficeSeeder::class,
            ConsigneeSeeder::class,
            EmployeeSeeder::class,
            AgentSeeder::class,
            DocumentCategorySeeder::class,
            MaterialSeeder::class,
            ProjectSeeder::class,
            TripTypeSeeder::class,
            TripSeeder::class,
            ExpenseCategoryTypeSeeder::class,
            ExpenseCategorySeeder::class,
            ExpensePaymentMethodSeeder::class,
            ExpenseSeeder::class,
            VehicleRCSeeder::class,
            FleetSeeder::class,
            FleetVehicleSeeder::class,
    ]);
    }
}
