<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        @can('projects-create')
        <a href="{{ route('projects.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Project
        </a>
        @endcan
    </div>
    <!-- List all projects -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Source</x-tables.basic.column>
            <x-tables.basic.column>Destination</x-tables.basic.column>
            <x-tables.basic.column>Consignee</x-tables.basic.column>
            <x-tables.basic.column>Material</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse($projects as $project)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->loadingPoint->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->unloadingPoint->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->consignee->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $project->material->name }}</x-tables.basic.row>
                    <x-tables.basic.row :colorToggle="$project->status" trueVal="Active" falseVal="Inactive"></x-tables.basic.row>
                    <x-tables.basic.row>
                        <x-buttons.icons.small
                            :href="route('projects.show', ['project' => $project->id])"></x-buttons.icons.small>
                    </x-tables.basic.row>
                </tr>
            @empty
                <tr class="">
                    <td class="px-6 py-4 whitespace-nowrap text-red-400">
                        No Results Found
                    </td>
                </tr>
            @endforelse
        </x-slot>
    </x-tables.basic.main>

    <!-- Pagination Link -->
    <div class="mt-5">
        {{ $projects->links() }}
    </div>
</div>
