<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
     x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createPayee' :backLink="route('loading-points.index')"
                                backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Payee Name" required="true" error="payee.name">
            <x-forms.basic-stacked.input-basic wire:model.lazy="payee.name"
                                               placeholder="Enter the payee name"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Payee Type -->
        <x-forms.basic-stacked.column title="Payee Type" error="payee.payee_type_id" required="true">
            <x-forms.basic-stacked.dropdown :array="$payee_types" title="Select a type"
                                            wire:model.lazy="payee.payee_type_id"></x-forms.basic-stacked.dropdown>
        </x-forms.basic-stacked.column>


        <!-- Success Modal -->
        <x-modals.basic color="bg-green-100" title="Payee Added" desc="The payee has been added to the database."
                        backTitle="Go back to Payees" link="{{ route('payees.index') }}"
                        x-show.transition="createSuccess" x-cloak>
            <x-slot name="icon">
                <x-svg.check-circle/>
            </x-slot>
        </x-modals.basic>

        <!-- Already Exists Modal -->
        <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The payee could not be added in the database."
                        backTitle="Go back to Payees" link="{{ route('payees.index') }}" x-show="createFail" x-cloak>
            <x-slot name="icon">
                <x-svg.cancel-circle/>
            </x-slot>
        </x-modals.basic>
    </x-forms.basic-stacked.form>
</div>
