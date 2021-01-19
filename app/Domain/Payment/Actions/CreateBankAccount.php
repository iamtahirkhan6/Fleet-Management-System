<?php

namespace App\Domain\Payment\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;


class CreateBankAccount
{
    use AsAction;

    public function handle($accountName ,$accountNumber, $ifscCode): BankAccount
    {
        $bankAccount = new BankAccount();
        $bankAccount->account_name      = $accountName;
        $bankAccount->account_number    = $accountNumber;
        $bankAccount->ifsc_code         = $ifscCode;
        return $bankAccount;
    }
}
