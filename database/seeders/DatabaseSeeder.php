<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Trip\Seeders\TripTypeSeeder;
use App\Domain\Company\Seeders\CompanySeeder;
use App\Domain\Expense\Seeders\ExpenseSeeder;
use App\Domain\Payee\Seeders\PayeeTypeSeeder;
use App\Domain\General\Seeders\MaterialSeeder;
use App\Domain\Payment\Seeders\TaxCategorySeeder;
use App\Domain\VehicleRC\Seeders\VehicleRCSeeder;
use App\Domain\Invoice\Seeders\InvoiceTypeSeeder;
use App\Domain\Payment\Seeders\PaymentMethodSeeder;
use App\Domain\Payment\Seeders\PaymentStatusSeeder;
use App\Domain\Invoice\Seeders\InvoiceStatusSeeder;
use App\Domain\Document\Seeders\DocumentTypeSeeder;
use App\Domain\Expense\Seeders\ExpenseCategorySeeder;
use App\Domain\Expense\Seeders\ExpenseCategoryTypeSeeder;
use App\Domain\Employee\Seeders\EmployeeDesignationSeeder;

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
                        TaxCategorySeeder::class,
                        PaymentStatusSeeder::class,
                        ExpenseCategoryTypeSeeder::class,
                        ExpenseCategorySeeder::class,
                        PaymentMethodSeeder::class,
                        EmployeeDesignationSeeder::class,
                        MaterialSeeder::class,
                        TripTypeSeeder::class,
                        PayeeTypeSeeder::class,
                        InvoiceTypeSeeder::class,
                        InvoiceStatusSeeder::class,
                        DocumentTypeSeeder::class,
                        AskLogistiekSeeder::class,
                    ]);
    }
}
