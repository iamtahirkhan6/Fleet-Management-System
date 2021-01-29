<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail'), bankBool: @entangle('bankBool')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createEmployee()' :backLink="route('employees.index')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Employee Name" error="input.name">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.name" type="text" placeholder="Enter the employee name"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Salary -->
        <x-forms.basic-stacked.column title="Salary" error="input.salary">
            <x-forms.basic-stacked.input-basic type="number" wire:model.lazy="input.salary" placeholder="Enter the salary"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Phone Number -->
        <x-forms.basic-stacked.column title="Phone Number" error="input.phone_number">
            <x-forms.basic-stacked.input-basic type="number" wire:model.lazy="input.phone_number" placeholder="Enter the phone number"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Phone Number -->
        <x-forms.basic-stacked.column title="Email Address" error="input.email">
            <x-forms.basic-stacked.input-basic type="email" wire:model.lazy="input.email" placeholder="Enter the email"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Office -->
        <x-forms.basic-stacked.column title="Office" error="input.office_id">
            <x-forms.basic-stacked.dropdown
                wire:model="input.office_id"
                :array="$offices"
                joinColumn="true"
                title="Choose an office"
                arrayKey="name">
            </x-forms.basic-stacked.dropdown>
        </x-forms.basic-stacked.column>

        <!-- Hidden Company ID -->
        <input type="hidden" wire:model="input.company_id">

        <!-- Designation -->
        <x-forms.basic-stacked.column title="Designation" error="input.employee_designation_id">
            <x-forms.basic-stacked.dropdown
                wire:model="input.employee_designation_id"
                :array="$designations"
                title="Choose a designation"
                arrayKey="employee_designation_id">
            </x-forms.basic-stacked.dropdown>
        </x-forms.basic-stacked.column>

        <!-- Bank Details? -->
        <x-forms.basic-stacked.column title="Add Bank Account?" error="input.bank_bool">
            <x-forms.basic-stacked.toggle alpineBool="bankBool">Add Bank Account?</x-forms.basic-stacked.toggle>
        </x-forms.basic-stacked.column>

        <div x-show="bankBool" x-cloak>
            <!-- Bank Account Name -->
            <x-forms.basic-stacked.column title="Bank Account Name" error="input.account_name">
                <x-forms.basic-stacked.input-basic wire:model.lazy="input.bank_account_name" type="text" placeholder="Enter the name on bank account"></x-forms.basic-stacked.input-basic>
            </x-forms.basic-stacked.column>

            <!-- Bank Account Number -->
            <x-forms.basic-stacked.column title="Bank Account Number" error="input.account_number">
                <x-forms.basic-stacked.input-basic wire:model.lazy="input.bank_account_number" type="number" placeholder="Enter the bank account number"></x-forms.basic-stacked.input-basic>
            </x-forms.basic-stacked.column>

            <!-- Bank IFSC Code -->
            <x-forms.basic-stacked.column title="Bank IFSC Code" error="input.ifsc_code">
                <x-forms.basic-stacked.input-basic wire:model.lazy="input.bank_account_number" type="text" placeholder="Enter the IFSC Code"></x-forms.basic-stacked.input-basic>
            </x-forms.basic-stacked.column>
        </div>
        {{ $bankBool }}
    </x-forms.basic-stacked.form>

    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Employee Added" desc="The Employee has been added to the database."
        backTitle="Go back to Employees" link="{{ route('employees.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The Employee could not be added in the database."
        backTitle="Go back to Employees" link="{{ route('employees.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>
</div>
