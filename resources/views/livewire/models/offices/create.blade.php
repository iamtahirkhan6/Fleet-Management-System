<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
     x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form wire:submit.prevent='createOffice' :backLink="route('offices.index')"
                                backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Office Name/Location" required="true">
            <x-forms.basic-stacked.input-basic wire:model.lazy="office.name" placeholder="Enter the name"></x-forms.basic-stacked.input-basic>
            @error('office.name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>
    </x-forms.basic-stacked.form>

    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Office Added" desc="The office has been created."
                    backTitle="Go back to Offices" link="{{ route('offices.index') }}" x-show.transition="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add Office" desc="The office could not be created."
                    backTitle="Go back to Offices" link="{{ route('offices.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>

</div>
