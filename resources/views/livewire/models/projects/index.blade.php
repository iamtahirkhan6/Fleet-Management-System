<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('projects.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Project
        </a>
    </div>
    <!-- List all projects -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Source</x-tables.basic.column>
            <x-tables.basic.column>Destination</x-tables.basic.column>
            <x-tables.basic.column>Consignee</x-tables.basic.column>
            <x-tables.basic.column>Material</x-tables.basic.column>
            <x-tables.basic.column>Company</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($projects as $project)
                <tr>
                    <x-tables.basic.row>{{ $project->id }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->Source->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->Destination->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->Consignee->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->Material->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->Company->short_name }}</x-tables.basic.row>
                    <x-tables.basic.row :colorToggle="$project->status" trueVal="Active" falseVal="Inactive">
                    </x-tables.basic.row>
                    <x-tables.basic.row link="/projects/{{ $project->id }}"><x-svg.view-list/></x-tables.basic.row>
                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>

    <!-- Pagination Link -->
    <div class="mt-5">
        {{ $projects->links() }}
    </div>
</div>
