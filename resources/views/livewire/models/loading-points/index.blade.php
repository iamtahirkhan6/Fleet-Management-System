<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('loading-points.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Loading Point
        </a>
    </div>

    <!-- List all loading-points -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>ID</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Short Code</x-tables.basic.column>
            <x-tables.basic.column>Total Projects</x-tables.basic.column>
            <x-tables.basic.column>Active Projects</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($loadingpoints as $loadingpoint)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loadingpoint->id }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $loadingpoint->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $loadingpoint->short_code }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $loadingpoint->totalProjects() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $loadingpoint->currentProjects() }}</x-tables.basic.row>
                    {{-- <x-tables.basic.row link="/loading-points/{{ $loadingpoint->id }}">View</x-tables.basic.row> --}}

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
    <div class="mt-5">
        {{ $loadingpoints->links() }}
    </div>
</div>
