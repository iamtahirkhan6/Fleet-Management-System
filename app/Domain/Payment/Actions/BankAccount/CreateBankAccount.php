<?php

namespace App\Domain\Payment\Actions\BankAccount;

use Lorisleiva\Actions\Concerns\AsAction;
use App\Domain\Payment\Models\BankAccount;


class CreateBankAccount
{
    use AsAction;

    public function handle($accountName, $accountNumber, $ifscCode) : BankAccount
    {
        return BankAccount::create([ "account_name"   => $accountName,
                                     "account_number" => $accountNumber,
                                     "ifsc_code"      => $ifscCode,
        ]);
    }
}
