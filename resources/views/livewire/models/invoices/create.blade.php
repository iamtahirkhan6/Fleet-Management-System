<div
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail'), showDefaultColumns: @entangle('showDefaultColumns'), columnsSelected: @entangle('columnsSelected'), checkboxDisabled: @entangle('checkboxDisabled'), addItemBool: @entangle('addItemBool') }">

    <x-forms.basic-stacked.form
        wire:submit.prevent='createInvoice'
        :backLink="route('consignees.invoices.index', ['consignee' => $consignee->id])"
        backLinkTitle="Go Back"
        class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg">

        <!-- Consignee Name -->
        <x-forms.basic-stacked.column title="Consignee Name" error="invoice.invoice.consignee_id" width="w-full" required>
            <x-forms.basic-stacked.row-with-value>{{ $consignee->name }}</x-forms.basic-stacked.row-with-value>
        </x-forms.basic-stacked.column>

        <!-- Consignee Address -->
        <x-forms.basic-stacked.column title="Consignee Billing Address" required>
            @if(!isset($consignee->address))
                <a href="{{ route('consignees.update_details', ['consignee' => $consignee->id]) }}"
                   class="text-sm text-red-500">Add consignee address</a>
            @else
                <div class="grid grid-cols-1 gap-y-2">
                    <span class="text-sm text-indigo-500">{{ $consignee->address->line_1 ?? null }}</span>
                    <span class="text-sm text-indigo-500">{{ $consignee->address->line_2 ?? null }}</span>
                    <span class="text-sm text-indigo-500">{{ $consignee->address->city ?? null }}</span>
                    <span class="text-sm text-indigo-500">{{ $consignee->address->district ?? null }}</span>
                    <span class="text-sm text-indigo-500">{{ $consignee->address->zip ?? null }}</span>
                </div>
            @endif
        </x-forms.basic-stacked.column>

        <!-- Consignee Address -->
        <x-forms.basic-stacked.column title="Consignee GSTIN" required>
            @if(!isset($consignee->gstn))
                <a href="{{ route('consignees.update_details', ['consignee' => $consignee->id]) }}"
                   class="text-sm text-red-500">Add consignee gstin</a>
            @else
                <x-forms.basic-stacked.row-with-value>{{ $consignee->gstn ?? '' }}</x-forms.basic-stacked.row-with-value>
            @endif
        </x-forms.basic-stacked.column>

        <!-- Bank Account -->
        <x-forms.basic-stacked.column title="Bank Account" error="invoice.bank_account_id" width="w-full" required>
            @if(is_null(auth()->user()->company->bankAccount))
                <a href="{{ route('company.settings') }}" class="text-sm text-red-500">Add Bank Account</a>
            @else
                <div class="grid grid-cols-1 gap-y-2">
                    <span class="text-sm text-indigo-500">{{ auth()->user()->company->bankAccount->account_name ?? null }}</span>
                    <span class="text-sm text-indigo-500">{{ auth()->user()->company->bankAccount->account_number ?? null }}</span>
                    <span class="text-sm text-indigo-500">{{ auth()->user()->company->bankAccount->ifsc_code ?? null }}</span>
                </div>
            @endif
        </x-forms.basic-stacked.column>

        <!-- Issue Date -->
        <x-forms.basic-stacked.column title="Invoice Issue Date" error="invoice.issue_date" required="true">
            <x-date-picker wire:model.defer="invoice.issue_date"/>
        </x-forms.basic-stacked.column>

        <!-- Due Date -->
        <x-forms.basic-stacked.column title="Due Date" error="invoice.due_date" required="true">
            <x-date-picker wire:model.defer="invoice.due_date"/>
        </x-forms.basic-stacked.column>

        <!-- Invoice Number -->
        <x-forms.basic-stacked.column title="Invoice Number" error="invoice.invoice_number" required="true">
            <x-forms.basic-stacked.input-basic wire:model.defer="invoice.invoice_number"
                                               placeholder="GST based invoice number"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Columns -->
        <div>
            <x-forms.basic-stacked.column title="Columns" cols-span="md:col-span-2" required="true">
                @if($columnsSelected == false)
                    <x-jetstream::secondary-button wire:loading.attr="disabled" wire:click="$toggle('showDefaultColumns')" class="disabled:opacity-50">
                        {{ __('Choose Columns') }}
                    </x-jetstream::secondary-button>
                @endif

                <div class="mt-4" x-show="showDefaultColumns" x-cloak>
                    <div class="grid grid-cols-1 gap-y-2">
                        <table class="p-4 text-gray-500 rounded-xl shadow-md border-separate border-collapse border border-indigo-200">
                            <thead>
                            <tr>
                                <th class="text-left"><x-checkbox name="select_all" wire:model="selectAll" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded mr-2" x-bind:disabled="checkboxDisabled" /></th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Action</th>
                            </tr>
                            <tr>
                                <th class="text-left"></th>
                                <th class="text-left"></th>
                                <th class="text-left"></th>
                            </tr>
                            </thead>
                            <tbody class="mt-1 border-top border-indigo-400">
                            @foreach($default_columns as $key => $column)
                                <tr>
                                    <td class=""><x-checkbox name="{{ $key }}" value="{{ $key }}" wire:model.defer="column_names" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded mr-2" x-bind:disabled="checkboxDisabled"/></td>
                                    <td class="">
                                        @if($column['editingState'] == "true")
                                            <x-jet-input type="text" class="w-3/4" wire:model.lazy="default_columns.{{ $key }}.clean_name"/>
                                        @else
                                            {{ $column['clean_name'] }}
                                        @endif
                                    </td>
                                    <td class="">
                                        <button type="button" class="focus:outline-none" @click="$wire.set('default_columns.{{ $key }}.editingState', 'true')"><x-svg.pencil-alt class="w-5 h-5 text-indigo-500" /></button>
                                        @if($column['editingState'] == "true")
                                            <button type="button" class="focus:outline-none" @click="$wire.set('default_columns.{{ $key }}.editingState', 'false')"><x-svg.check class="w-5 h-5 text-green-500" /></button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <span class="text-sm text-grey-300 mt-2">
                            <x-buttons.primary.small type="button" wire:click="saveColumns" x-show="!columnsSelected" x-cloak>Save</x-buttons.primary.small>
                            <x-jet-danger-button type="button" wire:click="resetColumns" x-show="!columnsSelected" x-cloak>Reset</x-jet-danger-button>
                        </span>

                        <span class="text-sm text-grey-300 mt-2">
                            <x-error field="columns" class="text-red-500" />
                        </span>
                    </div>
                </div>
            </x-forms.basic-stacked.column>
        </div>

        <!-- Items -->
        <div>
            <x-forms.basic-stacked.column title="Items" cols-span="md:col-span-3" error="invoice.items" width="w-full" required="true">
                <x-jetstream::secondary-button wire:loading.attr="disabled" wire:click="addItem" x-show="addItemBool">
                    {{ __('Add Item') }}
                </x-jetstream::secondary-button>

                <x-jetstream::secondary-button wire:loading.attr="disabled" wire:click="completeItems" x-show="addItemBool">
                    {{ __('Save Items') }}
                </x-jetstream::secondary-button>
                <x-error field="items" class="mt-2 text-sm text-red-500" />
            </x-forms.basic-stacked.column>
            @if(count($invoice_items) > 0)
                <x-forms.basic-stacked.column cols-span="md:col-span-4" width="w-full" >
                    @if(count($invoice_items) > 0)
                        <x-tables.basic.main class="table-fixed mt-0 gap-y-0 gap-x-4">
                            <x-slot name="columns">
                                @forelse($column_names as $column)
                                    <x-tables.basic.column>{{ Arr::pull($default_columns[$column], 'clean_name') }}</x-tables.basic.column>
                                @empty
                                @endforelse
                                <x-tables.basic.column></x-tables.basic.column>
                            </x-slot>

                            <x-slot name="rows">
                                @forelse($this->invoice_items as $item)
                                    <tr>
                                        @foreach($item['columns'] as $key => $value)
                                            @if($item['saved'] == "false" || $item["saved"] == false)
                                                <x-tables.basic.row>
                                                    @if($key == 'item')
                                                        <label>
                                                            <textarea wire:model.defer="invoice_items.{{$loop->parent->index}}.columns.{{$key}}" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ Arr::pull($default_columns[$key], 'width') }} @error("invoice_items.".$loop->parent->index.".columns.".$key) border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 bg-red-50 @enderror" rows="3"></textarea>
                                                        </label>
                                                    @elseif($key == 'total')
                                                        {{ \App\Helper\Helper::rupee_format((int)$invoice_items[$loop->parent->index]['columns']['quantity'] * (int)$invoice_items[$loop->parent->index]['columns']['rate'] - ((isset($invoice_items[$loop->parent->index]['columns']['cgst_percent'])) ? (int)$invoice_items[$loop->parent->index]['columns']['quantity'] * (int)$invoice_items[$loop->parent->index]['columns']['rate'] * (int)($invoice_items[$loop->parent->index]['columns']['cgst_percent']) / 100 : 0) - ((isset($invoice_items[$loop->parent->index]['columns']['sgst_percent'])) ? (int)$invoice_items[$loop->parent->index]['columns']['quantity'] * (int)$invoice_items[$loop->parent->index]['columns']['rate'] * (int)($invoice_items[$loop->parent->index]['columns']['sgst_percent']) / 100 : 0))  }}
                                                    @elseif($key == 'value')
                                                        {{ \App\Helper\Helper::rupee_format((((int)$invoice_items[$loop->parent->index]['columns']['quantity'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['quantity'] : 0) * (((int)$invoice_items[$loop->parent->index]['columns']['rate'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['rate'] : 0)) }}
                                                    @elseif($key == 'cgst_amount')
                                                        {{ \App\Helper\Helper::rupee_format((((int)$invoice_items[$loop->parent->index]['columns']['quantity'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['quantity'] : 0) * (((int)$invoice_items[$loop->parent->index]['columns']['rate'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['rate'] : 0) * (((int)$invoice_items[$loop->parent->index]['columns']['cgst_percent'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['cgst_percent'] : 0) / 100) }}
                                                    @elseif($key == 'sgst_amount')
                                                        {{ \App\Helper\Helper::rupee_format((((int)$invoice_items[$loop->parent->index]['columns']['quantity'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['quantity'] : 0) * (((int)$invoice_items[$loop->parent->index]['columns']['rate'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['rate'] : 0) * (((int)$invoice_items[$loop->parent->index]['columns']['sgst_percent'] > 0) ? (int)$invoice_items[$loop->parent->index]['columns']['sgst_percent'] : 0) / 100) }}
                                                    @else
                                                            <label>
                                                                <input type="{{ Arr::pull($default_columns[$key], 'type') }}" step="any" min="0" wire:model.lazy="invoice_items.{{$loop->parent->index}}.columns.{{$key}}" class="block border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm {{ Arr::pull($default_columns[$key], 'width') }} @error("invoice_items.".$loop->parent->index.".columns.".$key) border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 bg-red-50 @enderror"  />
                                                            </label>
                                                    @endif
                                                </x-tables.basic.row>

                                                @if($loop->last)
                                                    <td class="px-6 py-10 whitespace-nowrap text-sm text-gray-500 inline-flex gap-x-4">
                                                        <button type="button" wire:click="saveItem({{ $loop->parent->index }})" ><x-svg.plus-circle-small class="focus:outline-none focus:ring w-6 h-6 text-indigo-500"/></button>
                                                        <button type="button" wire:click="deleteItem({{ $loop->parent->index }})" ><x-svg.trash class="focus:outline-none focus:ring w-6 h-6 text-red-500"/></button>
                                                    </td>
                                                @endif
                                            @else
                                                <x-tables.basic.row>@if($key == "value" || $key == "cgst_amount" || $key == "sgst_amount" || $key == "total") {{ \App\Helper\Helper::rupee_format($value) }} @else {{ $value }} @endif</x-tables.basic.row>
                                            @endif
                                        @endforeach
                                    </tr>
                                @empty
                                @endforelse
                            </x-slot>
                        </x-tables.basic.main>
                    @endif
                </x-forms.basic-stacked.column>
            @endif
        </div>


    <!-- Subtotal -->
    <x-forms.basic-stacked.column title="Subtotal" error="invoice.amount_subtotal" required="true">
        <span class="text-sm text-indigo-500">{{ \App\Helper\Helper::rupee_format($invoice['amount_subtotal']) }}</span>
    </x-forms.basic-stacked.column>

   <!-- Tax Amount -->
    <x-forms.basic-stacked.column title="Total Tax" error="invoice.amount_tax" required="true">
        <span class="text-sm text-indigo-500">{{ \App\Helper\Helper::rupee_format($invoice['amount_tax']) }}</span>
    </x-forms.basic-stacked.column>

    <!-- Total Amount -->
    <x-forms.basic-stacked.column title="Final Payable" error="invoice.amount_total" required="true">
        <span class="text-sm text-indigo-500">{{ \App\Helper\Helper::rupee_format($invoice['amount_total']) }}</span>
    </x-forms.basic-stacked.column>

    <!-- Reverse Change -->
    <x-forms.basic-stacked.column title="Reverse Charge Basis" error="invoice.reverse_charge_basis" required="true">
        <x-forms.basic-stacked.dropdown :array="array('1' => 'Yes', '0' => 'No')" wire:model.lazy="invoice.reverse_charge_basis"/>
    </x-forms.basic-stacked.column>

    <!-- Status -->
    <x-forms.basic-stacked.column title="Status" error="invoice.invoice_status_id" required="true">
        <x-forms.basic-stacked.dropdown :array="$status_types" wire:model.lazy="invoice.invoice_status_id"/>
    </x-forms.basic-stacked.column>

        @error('*') {{ $message }} @enderror
    </x-forms.basic-stacked.form>
@push('styles')
    <!-- Pikaday -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" type="text/javascript"></script>
    @endpush
</div>
