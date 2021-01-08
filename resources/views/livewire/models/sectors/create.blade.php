<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form 
        wire:submit.prevent='createSector' 
        :backLink="route('sectors.index')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Sector Name">
            <x-forms.basic-stacked.input-basic wire:model="sector.name" placeholder="Enter the sector name">
            </x-forms.basic-stacked.input-basic>
            @error('sector.name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>
    </x-forms.basic-stacked.form>
    
    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Sector Added" desc="The sector has been added to the database."
        backTitle="Go back to Sectors" link="{{ route('sectors.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The sector could not be added in the database."
        backTitle="Go back to Sectors" link="{{ route('sectors.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>
</div>
