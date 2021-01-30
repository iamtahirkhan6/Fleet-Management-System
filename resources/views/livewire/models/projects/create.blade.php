<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg" x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">

    <x-forms.basic-stacked.form
        wire:submit.prevent='createProject'
        :backLink="route('projects.index')"
        backLinkTitle="Go Back">

        <!-- Material -->
        <x-forms.basic-stacked.column title="Material">
            <x-forms.basic-stacked.dropdown
                wire:model="project.material"
                title="Select the material"
                :array="$materials">
            </x-forms.basic-stacked.dropdown>
            @error('project.material') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Consignee -->
        <x-forms.basic-stacked.column title="Consignee">
            <x-forms.basic-stacked.dropdown
                wire:model="project.consignee"
                title="Select the consignee"
                :array="$consignees">
            </x-forms.basic-stacked.dropdown>
            @error('project.consignee') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Source -->
        <x-forms.basic-stacked.column title="Source">
            <x-forms.basic-stacked.dropdown
                wire:model="project.source"
                title="Select the source"
                :array="$sources">
            </x-forms.basic-stacked.dropdown>
            @error('project.source') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Destination -->
        <x-forms.basic-stacked.column title="Destination">
            <x-forms.basic-stacked.dropdown
                wire:model="project.destination"
                title="Select the destination"
                :array="$destinations">
            </x-forms.basic-stacked.dropdown>
            @error('project.destination') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </x-forms.basic-stacked.column>

        <!-- Destination -->
        <x-forms.basic-stacked.column title="Company">
            <x-forms.basic-stacked.dropdown
                wire:model="project.company_id"
                title="Select the company"
                :array="$companies">
            </x-forms.basic-stacked.dropdown>
            @error('project.company_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
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
