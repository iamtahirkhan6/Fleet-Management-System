<?php

namespace App\Domain\Invoice\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Invoice\Models\Invoice
 *
 * @property int $id
 * @property string $date
 * @property string $due_date
 * @property string $invoice_number
 * @property string $bill_number
 * @property string|null $reference_number
 * @property int $status
 * @property string|null $notes
 * @property int $total
 * @property int $tax
 * @property int $due_amount
 * @property int $received_amount
 * @property int $consignee_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBillNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereConsigneeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReceivedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReferenceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property array|null $items
 * @property int $amount_total
 * @property int $amount_paid
 * @property int $amount_due
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountDue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereItems($value)
 * @property string $issue_date
 * @property int|null $reverse_charge_basis
 * @property int $amount_tax
 * @property int $amount_subtotal
 * @property int $invoice_status_id
 * @property int $bank_account_id
 * @property string|null $invoice_path
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereAmountTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBankAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoicePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereIssueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereReverseChargeBasis($value)
 */

class Invoice extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $casts = [
        'items' => 'array'
    ];

    public function setItemsAttribute($items)
    {
//        dd(json_encode($items));
        $this->attributes['items'] = json_encode($items);
    }
}
