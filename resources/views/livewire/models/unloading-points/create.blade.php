<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form
        wire:submit.prevent='createUnloadingPoint'
        :backLink="route('unloading-points.index')"
        backLinkTitle="Go Back">

        <!-- Short Code -->
        <x-forms.basic-stacked.column title="Short Code Name">
            <x-forms.basic-stacked.input-basic wire:model.lazy="unloadingpoint.name" placeholder="Enter the short code">
            </x-forms.basic-stacked.input-basic>
            @error('unloadingpoint.name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Name -->
        <x-forms.basic-stacked.column title="Unloading Point Name">
            <x-forms.basic-stacked.input-basic wire:model.lazy="unloadingpoint.short_code" placeholder="Enter the unloading point name">
            </x-forms.basic-stacked.input-basic>
            @error('unloadingpoint.short_code') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

    </x-forms.basic-stacked.form>

    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Unloading Point Added" desc="The unloading point has been added to the database."
        backTitle="Go back to Unloading Points" link="{{ route('unloading-points.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The unloading point could not be added in the database."
        backTitle="Go back to Unloading Points" link="{{ route('unloading-points.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>
</div>
