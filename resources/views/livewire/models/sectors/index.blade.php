<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('sectors.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Sector
        </a>
    </div>

    <!-- List all mines -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Total Mines</x-tables.basic.column>
            {{-- <x-tables.basic.column>Total Projects</x-tables.basic.column> --}}
            {{-- <x-tables.basic.column>Active Projects</x-tables.basic.column> --}}
            {{-- <x-tables.basic.column></x-tables.basic.column> --}}
        </x-slot>

        <x-slot name="rows">
            @forelse ($sectors as $sector)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $sector->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $sector->mines->count() }}</x-tables.basic.row>
                    {{-- <x-tables.basic.row>{{ $sector->total_projects() }}</x-tables.basic.row> --}}
                    {{-- <x-tables.basic.row>{{ $sector->current_projects() }}</x-tables.basic.row> --}}
                    {{-- <x-tables.basic.row link="/sectors/{{ $sector->id }}">View</x-tables.basic.row> --}}

                </tr>
            @empty
                <tr class="">
                    <td class="px-6 py-4 whitespace-nowrap text-red-500">
                        No Results Found
                    </td>
                </tr>
            @endforelse
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $sectors->links() }}
    </div>
</div><div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
