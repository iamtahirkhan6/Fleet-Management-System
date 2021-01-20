<div>
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
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $fleet->name }}</x-tables.basic.row>
                    <x-tables.basic.row link="/fleets/{{ $fleet->id }}/vehicles">{{ $fleet->vehicles->count() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/fleets/{{ $fleet->id }}">View</x-tables.basic.row>

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
        {{ $fleets->links() }}
    </div>
</div>
