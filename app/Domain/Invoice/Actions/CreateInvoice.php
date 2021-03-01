<?php


namespace App\Domain\Invoice\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Facades\Validator;

class CreateInvoice
{
    use AsAction;

    public function handle($input)
    {
        $validation = Validator::make($input, $this->rules(), [], $this->validationAttributes());
        if (!$validation->fails()) {
            $this->core($input);
        } else {
            return false;
        }
    }

    public static function core($input)
    {
    }

    public static function rules($prefix = null) : array
    {
        return [
            $prefix . "issue_date"           => "required|date",
            $prefix . "due_date"             => "required|date",
            $prefix . "invoice_number"       => "required|string|min:1",
            $prefix . "consignee_id"         => "required|exists:consignees,id",
            $prefix . "items"                => "required",
            $prefix . "reverse_charge_basis" => "required|boolean",
            $prefix . "amount_subtotal"      => "required|integer|min:0",
            $prefix . "amount_tax"           => "required|integer",
            $prefix . "amount_total"         => "required|integer|min:1",
            $prefix . "invoice_status_id"    => "required|exists:invoice_statuses,id",
            $prefix . "bank_account_id"      => "required",
        ];
    }

    public static function validationAttributes($prefix = null) : array
    {
        return [
            $prefix . 'issue_date'           => 'issue date',
            $prefix . 'due_date'             => 'due date',
            $prefix . 'invoice_number'       => 'invoice number',
            $prefix . 'consignee_id'         => 'consignee',
            $prefix . 'items'                => 'items',
            $prefix . 'reverse_charge_basis' => 'reverse charge basis',
            $prefix . 'amount_subtotal'      => 'subtotal',
            $prefix . 'amount_tax'           => 'tax amount',
            $prefix . 'amount_total'         => 'final payable',
            $prefix . 'invoice_status_id'    => 'invoice status',
            $prefix . 'bank_account_id'    => 'bank account',
        ];
    }
}
