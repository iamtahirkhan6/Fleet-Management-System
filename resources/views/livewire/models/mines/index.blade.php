<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('mines.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Mines
        </a>
    </div>
    
    <!-- List all mines -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Sector</x-tables.basic.column>
            <x-tables.basic.column>Total Projects</x-tables.basic.column>
            <x-tables.basic.column>Active Projects</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($mines as $mine)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $mine->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $mine->sector->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $mine->total_projects() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $mine->current_projects() }}</x-tables.basic.row>
                    {{-- <x-tables.basic.row link="/mines/{{ $mine->id }}">View</x-tables.basic.row> --}}

                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $mines->links() }}
    </div>
</div>