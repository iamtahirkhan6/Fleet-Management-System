<div>
    <!-- List all consignees -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column>Vehicle No.</x-tables.basic.column>
            <x-tables.basic.column>Project</x-tables.basic.column>
            <x-tables.basic.column>Trip ID</x-tables.basic.column>
            <x-tables.basic.column>HSD Adv.</x-tables.basic.column>
            <x-tables.basic.column>Cash Adv.</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($trips as $trip)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->date->format('d-M-Y') }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->market_vehicle_number }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->project->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->id }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->hsd }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->cash }}</x-tables.basic.row>
                    <x-tables.basic.row>
                        <x-buttons.primary.small type="link" href="/payments/pending/{{ $trip->id }}">Complete</x-buttons.primary.small>
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
    <div class="mt-5">
        {{ $trips->links() }}
    </div>
</div>
