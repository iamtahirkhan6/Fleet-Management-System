<div x-data="{showSuccess: @entangle('showSuccess'), showFail: @entangle('showFail') }">

    <div class="bg-white overflow-hidden shadow-xl rounded-lg divide-y divide-gray-200 border-t-4 border-indigo-300">
            <x-forms.basic-stacked.form
                wire:submit.prevent='createExpense'
                :backLink="route('offices.expenses.index', ['office' => $office->id])"
                backLinkTitle="Go Back">

                <!-- Date -->
                <x-forms.basic-stacked.column title="Date" error="expense.date" required="true">
                    <x-datepicker wire:model.lazy="expense.date"></x-datepicker>
                </x-forms.basic-stacked.column>

                <!-- Amount -->
                <x-forms.basic-stacked.column title="Amount" error="expense.amount" required="true">
                    <x-forms.basic-stacked.input-rupee title="Select an amount" wire:model.lazy="expense.amount">
                    </x-forms.basic-stacked.input-rupee>
                </x-forms.basic-stacked.column>

                <!-- Expense Category -->
                <x-forms.basic-stacked.column title="Expense Category" error="expense.expense_category_id" required="true">
                    <x-forms.basic-stacked.dropdown :array="$expense_categories" wire:model.lazy="expense.expense_category_id"
                                                    title="Select an expense category">
                    </x-forms.basic-stacked.dropdown>
                </x-forms.basic-stacked.column>

                <!-- Payment Method -->
                <x-forms.basic-stacked.column title="Payment Method" error="expense.payment_method_id" required="true">
                    <x-forms.basic-stacked.dropdown :array="$payment_methods" wire:model.lazy="expense.payment_method_id"
                                                    title="Select a payment method">
                    </x-forms.basic-stacked.dropdown>
                </x-forms.basic-stacked.column>

                <!-- Payee -->
                <x-forms.basic-stacked.column title="Payee" error="expense.payee_id">
                    <x-forms.basic-stacked.dropdown :array="$payees" wire:model.lazy="expense.payee_id"
                                                    title="Select a payee">
                    </x-forms.basic-stacked.dropdown>
                </x-forms.basic-stacked.column>

                <!-- Remarks -->
                <x-forms.basic-stacked.column title="Remarks" error="expense.remark">
                    <x-forms.basic-stacked.input-textarea wire:model.lazy="expense.remark">
                    </x-forms.basic-stacked.input-textarea>
                </x-forms.basic-stacked.column>

                <!-- Receipt -->
                <x-forms.basic-stacked.column title="Remarks" error="expense.remark">
                    @if(!isset($receipt))
                        <x-forms.basic-stacked.image-upload wireModel="receipt"/>
                    @else
                        <ul>
                            <li><span class="text-md text-indigo-500">Uploaded Receipt</span></li>
                        </ul>
                    @endif
                </x-forms.basic-stacked.column>

            </x-forms.basic-stacked.form>
    </div>

    <!-- Success Modal -->
    <x-modals.basic
        color="bg-green-100"
        title="Expense Added"
        desc="The expense has been successfully added to the database."
        backTitle="Go back to Expenses"
        :link="route('offices.expenses.index', ['office' => $office->id])"
        x-show="showSuccess"
        x-cloak
    >
        <x-slot name="icon">
            <x-svg.check-circle/>
        </x-slot>
    </x-modals.basic>

    <!-- Fail Modal -->
    <x-modals.basic color="bg-red-100"
                    title="Failed to add Expense"
                    desc="An error occurred while adding to the database. Please try again later."
                    backTitle="Go back to Expenses"
                    :link="route('offices.expenses.index', ['office' => $office->id])"
                    x-show="showFail"
                    x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle/>
        </x-slot>
    </x-modals.basic>

@push('styles')
    <!-- Pikaday -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        <!-- Spatie -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @endpush
</div>
