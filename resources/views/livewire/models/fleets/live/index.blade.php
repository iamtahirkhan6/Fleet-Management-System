<div>
    <!-- List all vehicles -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Vehicle No.</x-tables.basic.column>
            <x-tables.basic.column>Polling Time</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($vehicles as $vehicle)
                <tr wire:poll>
                    @if($loop->iteration != 1)
                        {{ $this->fetchVehicle($vehicle->number) }}
                    @else
                        <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ App\Helper\Helper::vn($vehicle->number) }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ count($vehicles_data) }}</x-tables.basic.row>
                    @endif
                    
                    
                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
</div>
