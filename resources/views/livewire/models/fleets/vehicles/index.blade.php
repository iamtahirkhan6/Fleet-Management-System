<div>
    <!-- List all vehicles -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Vehicle No.</x-tables.basic.column>
                <x-tables.basic.column>Trips</x-tables.basic.column>
                <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($vehicles as $vehicle)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row >{{ App\Helper\Helper::vn($vehicle->license_plate) }}</x-tables.basic.row>
                    <x-tables.basic.row >{{ $vehicle->trips->count() }}</x-tables.basic.row>
                    <x-tables.basic.row link="{{ route('fleets.vehicles.show', ['fleet' => $fleet->id, 'vehicle' => $vehicle->id]) }}">View</x-tables.basic.row>
                    {{-- <x-tables.basic.row link="/"><svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg></x-tables.basic.row> --}}
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
        {{ $vehicles->links() }}
    </div>
</div>
