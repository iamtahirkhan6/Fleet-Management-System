<?php

namespace App\Domain\Payment\Actions\BankAccount;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;

class AddBankAccountToModels
{
    use AsAction;

    public function handle($accountName, $accountNumber, $ifscCode, $model)
    {
        if (BankAccount::where('account_number', $accountNumber)->where('ifsc_code', $ifscCode)->where('bankable_type', get_class($model))->count() <= 0) {
            $bankAccount = CreateBankAccount::run($accountName, $accountNumber, $ifscCode);
            $model->bankAccounts()->save($bankAccount);
            return true;
        } else {
            return false;
        }
        //
    }
}
