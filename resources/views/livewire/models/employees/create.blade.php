<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createEmployee()' :backLink="route('employees.index')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Employee Name">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.name" type="text" placeholder="Enter the employee name"></x-forms.basic-stacked.input-basic>
                @error('name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Salary -->
        <x-forms.basic-stacked.column title="Salary">
            <x-forms.basic-stacked.input-basic type="number" wire:model.lazy="salary" placeholder="Enter the salary"></x-forms.basic-stacked.input-basic>
            @error('salary') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Phone Number -->
        <x-forms.basic-stacked.column title="Phone Number">
            <x-forms.basic-stacked.input-basic type="number" wire:model.lazy="phone_number" placeholder="Enter the phone number"></x-forms.basic-stacked.input-basic>
            @error('phone_number') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Phone Number -->
        <x-forms.basic-stacked.column title="Email Address">
            <x-forms.basic-stacked.input-basic type="email" wire:model.lazy="email" placeholder="Enter the email"></x-forms.basic-stacked.input-basic>
            @error('email') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Office -->
        <x-forms.basic-stacked.column title="Office">
            <x-forms.basic-stacked.dropdown
                wire:model="office_id"
                :array="$offices"
                :arrayTwo="$companies"
                joinColumn="true"
                title="Choose an office"
                arrayKey="name">
            </x-forms.basic-stacked.dropdown>
            @error('office_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Hidden Company ID -->
        <input type="hidden" wire:model="company_id">

        @role('admin')
        <!-- Company ID -->
        <x-forms.basic-stacked.column title="Company">
            <x-forms.basic-stacked.dropdown
                wire:model="company_id"
                :array="$companies"
                title="Choose a company"
                arrayKey="name">
            </x-forms.basic-stacked.dropdown>
            @error('company_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>
        @endrole

        <!-- Designation -->
        <x-forms.basic-stacked.column title="Designation">
            <x-forms.basic-stacked.dropdown
                wire:model="employee_designation_id"
                :array="$designations"
                title="Choose a designation"
                arrayKey="employee_designation_id">
            </x-forms.basic-stacked.dropdown>
            @error('employee_designation_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

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
