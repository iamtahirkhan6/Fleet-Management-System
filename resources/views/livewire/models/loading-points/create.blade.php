<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
    x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createMine' :backLink="route('loading-points.index')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Loading Point/Mine Name" required="true">
            <x-forms.basic-stacked.input-basic wire:model="loadingpoint.name" placeholder="Enter the source name"></x-forms.basic-stacked.input-basic>
                @error('loadingpoint.name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Short Code -->
        <x-forms.basic-stacked.column title="Shortcode (without spaces)" required="true">
            <x-forms.basic-stacked.input-basic wire:model="loadingpoint.short_code" placeholder="Enter the shortcode"></x-forms.basic-stacked.input-basic>
                @error('loadingpoint.short_code') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>
    </x-forms.basic-stacked.form>

    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Loading Point Added" desc="The loading point has been added to the database."
        backTitle="Go back to Loading Points" link="{{ route('loading-points.index') }}" x-show.transition="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The loading point could not be added in the database."
        backTitle="Go back to Loading Points" link="{{ route('loading-points.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>

</div>
