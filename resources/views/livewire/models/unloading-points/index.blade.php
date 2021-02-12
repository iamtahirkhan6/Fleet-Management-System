<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('unloading-points.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Unloading Point
        </a>
    </div>

    <!-- List all loading-points -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Short Code</x-tables.basic.column>
            {{-- <x-tables.basic.column>Total Projects</x-tables.basic.column> --}}
            {{-- <x-tables.basic.column>Active Projects</x-tables.basic.column> --}}
            {{-- <x-tables.basic.column></x-tables.basic.column> --}}
        </x-slot>

        <x-slot name="rows">
            @foreach ($unloading_points as $unloading_point)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $unloading_point->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $unloading_point->short_code }}</x-tables.basic.row>
                    {{-- <x-tables.basic.row>{{ $sector->total_projects() }}</x-tables.basic.row> --}}
                    {{-- <x-tables.basic.row>{{ $sector->current_projects() }}</x-tables.basic.row> --}}
                    {{-- <x-tables.basic.row link="/sectors/{{ $sector->id }}">View</x-tables.basic.row> --}}

                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $destinations->links() }}
    </div>
</div>
