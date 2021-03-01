<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg" x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form
        wire:submit.prevent='createProject'
        :backLink="route('projects.index')"
        backLinkTitle="Go Back">

        <!-- Material -->
        <x-forms.basic-stacked.column title="Material" error="project.material_id">
            <x-forms.basic-stacked.dropdown
                wire:model="project.material_id"
                title="Select the material"
                :array="$materials">
            </x-forms.basic-stacked.dropdown>
        </x-forms.basic-stacked.column>

        <!-- Consignee -->
        <x-forms.basic-stacked.column title="Consignee" error="project.consignee_id">
            <x-forms.basic-stacked.dropdown
                wire:model="project.consignee_id"
                title="Select the consignee"
                :array="$consignees">
            </x-forms.basic-stacked.dropdown>
            <x-slot name="lastColumn">
                <div class="my-auto">
                    <a class="text-sm text-indigo-600" href="{{ route('consignees.create') }}">Add a new Consignee</a>
                </div>
            </x-slot>
        </x-forms.basic-stacked.column>

        <!-- Loading Points -->
        <x-forms.basic-stacked.column title="Source" error="project.loading_point_id">
            <x-forms.basic-stacked.dropdown
                wire:model="project.loading_point_id"
                title="Select the loading point"
                :array="$loading_points">
            </x-forms.basic-stacked.dropdown>
            <x-slot name="lastColumn">
                <div class="my-auto">
                    <a class="text-sm text-indigo-600" href="{{ route('loading-points.create') }}">Create a new Loading Point</a>
                </div>
            </x-slot>
        </x-forms.basic-stacked.column>

        <!-- Unloading Points -->
        <x-forms.basic-stacked.column title="Destination" error="project.unloading_point_id">
            <x-forms.basic-stacked.dropdown
                wire:model="project.unloading_point_id"
                title="Select the destination"
                :array="$unloading_points">
            </x-forms.basic-stacked.dropdown>
            <x-slot name="lastColumn">
                <div class="my-auto">
                    <a class="text-sm text-indigo-600" href="{{ route('unloading-points.create') }}">Create a new Unloading Point</a>
                </div>
            </x-slot>
        </x-forms.basic-stacked.column>
    </x-forms.basic-stacked.form>

    <!-- Project Success Modal -->
    <x-modals.basic color="bg-green-100" title="Project Creation successful"
        desc="The projects has been added to the database." backTitle="Go back to Projects"
        link="{{ route('projects.index') }}" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Project Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Project Already Exists"
        desc="The projects was already present in the database." backTitle="Go back to Projects"
        link="{{ route('projects.index') }}" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>

</div>
