<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
     x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form
        wire:submit.prevent='createFleetVehicle'
        :backLink="route('fleets.vehicles.create', '[]')"
        backLinkTitle="Go Back">

        <!-- Name -->
        <x-forms.basic-stacked.column title="Vehicle License Plate" error="fleetvehicle.license_plate" required="true">
            <x-forms.basic-stacked.input-basic wire:model.lazy="fleetvehicle.license_plate"
                                               placeholder="Number on license plate"></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

    </x-forms.basic-stacked.form>

    <!-- Project Success Modal -->
    <x-modals.basic color="bg-green-100" title="Fleet Vehicle Added successfully"
                    desc="The vehicle has been added to the database." backTitle="Go back to Fleet Vehicles"
                    x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle/>
        </x-slot>
    </x-modals.basic>

    <!-- Project Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Failed to Add Fleet"
                    desc="An error occurred while adding the vehicle to the database." backTitle="Go back to Fleet Vehicles"
                    x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle/>
        </x-slot>
    </x-modals.basic>

</div>
