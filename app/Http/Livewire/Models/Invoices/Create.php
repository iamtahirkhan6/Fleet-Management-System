<?php

namespace App\Http\Livewire\Models\Invoices;

use Carbon\Carbon;
use App\Helper\Helper;
use Livewire\Component;
use App\Domain\Invoice\Models\Invoice;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\Payment\Models\BankAccount;
use App\Domain\Invoice\Models\InvoiceStatus;
use App\Domain\Invoice\Actions\CreateInvoice;

class Create extends Component
{
    public Consignee   $consignee;
    public BankAccount $bank_account;
    public Invoice     $invoice;
    public $status_types;
    public array       $invoice_items   = [];
    public array       $column_names    = [];
    public array       $defaultRow      = [];
    public array       $default_columns = ['item'         => ['order'        => 1,
                                                              'clean_name'   => 'Description of services',
                                                              'width'        => 'w-full',
                                                              'type'         => 'text',
                                                              'editingState' => "false"],
                                           'sac'          => ['order'        => 2,
                                                              'clean_name'   => 'SAC',
                                                              'width'        => 'w-20',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'trips'        => ['order'        => 3,
                                                              'clean_name'   => 'Trips',
                                                              'width'        => 'w-16',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'quantity'     => ['order'        => 4,
                                                              'clean_name'   => 'Quantity (in MT)',
                                                              'width'        => 'w-20',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'rate'         => ['order'        => 5,
                                                              'clean_name'   => 'Rate/metric-ton (INR)',
                                                              'width'        => 'w-20',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'value'        => ['order'        => 6,
                                                              'clean_name'   => 'Value (INR)',
                                                              'width'        => 'w-32',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'cgst_percent' => ['order'        => 7,
                                                              'clean_name'   => 'CGST %',
                                                              'width'        => 'w-16',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'cgst_amount'  => ['order'        => 8,
                                                              'clean_name'   => 'CGST Amount',
                                                              'width'        => 'w-20',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'sgst_percent' => ['order'        => 9,
                                                              'clean_name'   => 'SGST %',
                                                              'width'        => 'w-16',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'sgst_amount'  => ['order'        => 10,
                                                              'clean_name'   => 'SGST Amount',
                                                              'width'        => 'w-20',
                                                              'type'         => 'number',
                                                              'editingState' => "false"],
                                           'total'        => ['order'        => 11,
                                                              'clean_name'   => 'Total (INR)',
                                                              'width'        => 'w-32',
                                                              'type'         => 'number',
                                                              'editingState' => "false"]];

    public bool $row_pending        = false;
    public bool $createFail         = false;
    public bool $createSuccess      = false;
    public bool $columnsSelected    = false;
    public bool $checkboxDisabled   = false;
    public bool $selectAll          = false;
    public bool $addItemBool        = true;
    public bool $showDefaultColumns = false;
    private array $n_invoice_items;

    public function updatedSelectAll($value)
    {
        if ($value) {
            foreach ($this->default_columns as $key => $value) {
                array_push($this->column_names, $key);
            }
        } else {
            $this->column_names = [];
        }

    }

    public function saveColumns()
    {
        // Validation
        if (!count($this->column_names) > 0) {
            $this->addError('columns', 'Please select columns before saving.');

            return false;
        }

        // Sort Array
        $result = [];
        foreach ($this->column_names as $key => $value) { // loop
            foreach ($this->default_columns as $k => $val) {
                if ($value == $k) {
                    $result[$val['order']] = $k;
                }
            }
        }
        ksort($result);
        $this->column_names = $result;

        // Save
        foreach ($this->column_names as $column) {
            $this->defaultRow[$column] = '';
        }
        $this->columnsSelected  = true;
        $this->checkboxDisabled = true;
    }

    public function resetColumns()
    {
        $this->column_names = [];
    }

    public function addItem()
    {
        if (!count($this->column_names) > 0) {
            $this->addError('items', 'Please choose columns before creating an item.');

            return false;
        }
        if ($this->row_pending == true) {
            $this->addError('items', 'Please finish the row before adding another row.');

            return false;
        }

        $this->invoice_items[] = ['columns' => $this->defaultRow, 'saved' => false];
        $this->row_pending     = true;
    }

    public function saveItem($item_n)
    {
        $this->validate($this->rulesForItems());
        $this->invoice_items[$item_n]['saved']            = "true";

        if (array_key_exists('value', $this->invoice_items[$item_n]['columns'])) {
            $this->invoice_items[$item_n]['columns']['value'] = (int) $this->invoice_items[$item_n]['columns']['quantity'] * (int) $this->invoice_items[$item_n]['columns']['rate'];
        }
        if (array_key_exists('cgst_percent', $this->invoice_items[$item_n]['columns'])) {
            $this->invoice_items[$item_n]['columns']['cgst_amount'] = ((int) $this->invoice_items[$item_n]['columns']['quantity'] * (int) $this->invoice_items[$item_n]['columns']['rate']) * ((int) $this->invoice_items[$item_n]['columns']['cgst_percent']) / 100;
        }

        if (array_key_exists('sgst_percent', $this->invoice_items[$item_n]['columns'])) {
            $this->invoice_items[$item_n]['columns']['sgst_amount'] = ((int) $this->invoice_items[$item_n]['columns']['quantity'] * (int) $this->invoice_items[$item_n]['columns']['rate']) * ((int) $this->invoice_items[$item_n]['columns']['sgst_percent']) / 100;
        }

        $this->invoice_items[$item_n]['columns']['total'] = (int)$this->invoice_items[$item_n]['columns']['quantity'] * (int)$this->invoice_items[$item_n]['columns']['rate'] - (int) ($this->invoice_items[$item_n]['columns']['cgst_amount'] ?? 0) - (int) ($this->invoice_items[$item_n]['columns']['sgst_amount'] ?? 0);
        $this->row_pending                                = false;
    }

    public function deleteItem($item_n)
    {
        unset($this->invoice_items[$item_n]);
        $this->row_pending = false;
    }

    public function completeItems()
    {
        if (count($this->invoice_items) <= 0) {
            return $this->validate();
        }
        $this->addItemBool = false;

        // Clean Items
        $this->n_invoice_items = $this->invoice_items;
        foreach ($this->n_invoice_items as $key => $value) {
            if (isset($this->n_invoice_items[$key]['columns'])) {
                $this->n_invoice_items[$key] = $this->n_invoice_items[$key]['columns'];
            }
        }
        $this->invoice->items = $this->n_invoice_items;
    }

    public function createInvoice()
    {
        $this->validate();
        $this->invoice->amount_subtotal = array_sum(Helper::array_column_recursive($this->invoice_items, 'total')) ?? 0;
        $this->invoice->amount_tax      = array_sum(Helper::array_column_recursive($this->invoice_items, 'cgst_amount')) + array_sum(Helper::array_column_recursive($this->invoice_items, 'sgst_amount'));
        $this->invoice->amount_due      = $this->invoice->amount_total;
        $this->invoice->save();
        dd('done');
        return true;
    }

    public function mount()
    {
        $this->invoice             = new Invoice();
        $this->invoice->issue_date = Carbon::today()->format('d-m-Y');
        $this->invoice->due_date   = Carbon::today()->addWeeks(2)->format('d-m-Y');
        if (!is_null(auth()->user()->company->bankAccount)) {
            $this->invoice->bank_account_id = auth()->user()->company->bankAccount;
        }
        $this->invoice->consignee_id    = $this->consignee->id;
        $this->status_types = InvoiceStatus::all('id', 'name');
    }

    public function render()
    {
        $this->invoice->amount_subtotal = array_sum(Helper::array_column_recursive($this->invoice_items, 'total')) ?? 0;
        $this->invoice->amount_tax      = array_sum(Helper::array_column_recursive($this->invoice_items, 'cgst_amount')) + array_sum(Helper::array_column_recursive($this->invoice_items, 'sgst_amount'));
        $this->invoice->amount_total    = $this->invoice->amount_subtotal ?? 0 + $this->invoice->amount_tax ?? 0;

        return view('livewire.models.invoices.create');
    }

    public function rulesForItems() : array
    {
        return [
            'invoice_items.*.columns.item'         => 'sometimes|required',
            'invoice_items.*.columns.sac'          => 'sometimes|required',
            'invoice_items.*.columns.trips'        => 'sometimes|required',
            'invoice_items.*.columns.value'        => 'sometimes|required',
            'invoice_items.*.columns.cgst_percent' => 'sometimes|required',
            'invoice_items.*.columns.cgst_amount'  => 'sometimes|required',
            'invoice_items.*.columns.sgst_percent' => 'sometimes|required',
            'invoice_items.*.columns.sgst_amount'  => 'sometimes|required',
            'invoice_items.*.columns.quantity'     => 'sometimes|required|min:1',
            'invoice_items.*.columns.rate'         => 'sometimes|required|min:1',
        ];
    }

    public function rules() : array
    {
        return CreateInvoice::rules('invoice.');
    }

    public function validationAttributes() : array
    {
        return CreateInvoice::validationAttributes('invoice.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
