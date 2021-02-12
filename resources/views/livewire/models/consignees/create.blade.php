<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
     x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createConsignee()' :backLink="route('consignees.index')" backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Consignee Name" error="input.name">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.name" type="text" placeholder="Enter the consignee name"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Address Line 1 -->
        <x-forms.basic-stacked.column title="Address Line 1" error="input.line_1">
            <x-forms.basic-stacked.input-basic type="text" wire:model.lazy="input.line_1" placeholder="Enter address line 1"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Address Line 2 -->
        <x-forms.basic-stacked.column title="Address Line 2" error="input.line_2">
            <x-forms.basic-stacked.input-basic type="text" wire:model.lazy="input.line_2" placeholder="Enter address line 2"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- City -->
        <x-forms.basic-stacked.column title="City/Town" error="input.city">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.city" type="text" placeholder="Enter the city"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Zip -->
        <x-forms.basic-stacked.column title="Postal Code" error="input.zip">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.zip" type="number" placeholder="Enter the Postal Code"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- State -->
        <x-forms.basic-stacked.column title="State" error="input.state">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.state" type="text" placeholder="Enter the State"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- GSTin -->
        <x-forms.basic-stacked.column title="GST Identification Number" error="input.gstin">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.gstin" type="text" placeholder="Enter the GSTIN"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Pan -->
        <x-forms.basic-stacked.column title="Pan" error="input.pan">
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.pan" type="text" placeholder="Enter the pan"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

    </x-forms.basic-stacked.form>

    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Consignee Added" desc="The consignee has been added to the your company." backTitle="Go back to Consignees" link="{{ route('consignees.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The consignee could not be added to your company." backTitle="Go back to Consignees" link="{{ route('consignees.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>
</div>
