<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
     x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form
        wire:submit.prevent='createFleet'
        :backLink="route('fleets.index')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Fleet Name" error="fleet.name" required="true">
            <x-forms.basic-stacked.input-basic wire:model.lazy="fleet.name"
                                               placeholder="Enter the fleet name"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

    </x-forms.basic-stacked.form>

    <!-- Project Success Modal -->
    <x-modals.basic color="bg-green-100" title="Fleet Creation successful"
                    desc="The fleet has been added to the database." backTitle="Go back to Fleets"
                    link="{{ route('fleets.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle/>
        </x-slot>
    </x-modals.basic>

    <!-- Project Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add Fleet"
                    desc="An error occurred while adding the fleet to the database." backTitle="Go back to Fleets"
                    link="{{ route('fleets.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle/>
        </x-slot>
    </x-modals.basic>

</div>
