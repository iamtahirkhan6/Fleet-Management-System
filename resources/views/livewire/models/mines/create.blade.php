<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createMine' :backLink="route('mines.index')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Mine Name">
            <x-forms.basic-stacked.input-basic wire:model="mine.name" placeholder="Enter the mine name"></x-forms.basic-stacked.input-basic>
                @error('mine.name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Sector -->
        <x-forms.basic-stacked.column title="Sector">
            <x-forms.basic-stacked.dropdown wire:model="mine.sector_id" title="Select the sector" :array="$sectors">
            </x-forms.basic-stacked.dropdown>
            @error('mine.sector_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>
    </x-forms.basic-stacked.form>

    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Mine Added" desc="The mine has been added to the database."
        backTitle="Go back to Mines" link="{{ route('mines.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The mine could not be added in the database."
        backTitle="Go back to Mines" link="{{ route('mines.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>

</div>
