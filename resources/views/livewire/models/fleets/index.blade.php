<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        @can('fleets-create')
            <a href="{{ route('fleets.create') }}"
               class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <x-svg.plus-circle />
                Add Fleet
            </a>
        @endcan
    </div>
    <!-- List all fleets -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Total Vehicles</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($fleets as $fleet)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $fleet->name }}</x-tables.basic.row>
                    <x-tables.basic.row link="/fleets/{{ $fleet->id }}/vehicles">{{ $fleet->vehicles->count() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/fleets/{{ $fleet->id }}">View</x-tables.basic.row>

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
        {{ $fleets->links() }}
    </div>
</div>
