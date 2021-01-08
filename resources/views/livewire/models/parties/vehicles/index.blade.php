<div>
    <!-- List all vehicles -->
    <x-tables.basic.main>
        <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Vehicle No.</x-tables.basic.column>
                <x-tables.basic.column>Total Trips</x-tables.basic.column>
                <x-tables.basic.column>Net Weight</x-tables.basic.column>
                <x-tables.basic.column>Total HSD</x-tables.basic.column>
                <x-tables.basic.column>Total Cash Advance</x-tables.basic.column>
                {{-- <x-tables.basic.column></x-tables.basic.column> --}}
        </x-slot>
            
        <x-slot name="rows">
            @foreach ($vehicles as $vehicle)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $vehicle->number }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $vehicle->trips($party->id) }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $vehicle->net_weight($party->id) }}</x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$vehicle->hsd($party->id)" :moneyVal="$vehicle->hsd($party->id)"></x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$vehicle->cash_advance($party->id)" :moneyVal="$vehicle->cash_advance($party->id)"></x-tables.basic.row>
                    {{-- <x-tables.basic.row link="/parties/{{ $party->id }}">View</x-tables.basic.row> --}}
                </tr>
             @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $vehicles->links() }}
    </div>
</div>