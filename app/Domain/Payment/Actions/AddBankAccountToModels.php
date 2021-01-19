<?php

namespace App\Domain\Payment\Actions;

use App\Domain\Payment\Models\BankAccount;
use App\Domain\Payment\Actions\CreateBankAccount;
use Lorisleiva\Actions\Concerns\AsAction;

class AddBankAccountToModels
{
    use AsAction;

    public function handle($accountName ,$accountNumber, $ifscCode, $model)
    {
        if(BankAccount::where('account_number', $accountNumber)->where('ifsc_code', $ifscCode)->where('bankable_type', get_class($model))->count() <= 0)
        {
            $bankAccount = CreateBankAccount::run($accountName, $accountNumber, $ifscCode);
            $model->bankAccounts()->save($bankAccount);
            return true;
        } else {
            return false;
        }
//
    }
}
