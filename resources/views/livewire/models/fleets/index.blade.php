<div>
    <!-- List all fleets -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Total Vehicles</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($fleets as $fleet)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $fleet->name }}</x-tables.basic.row>
                    <x-tables.basic.row link="/fleets/{{ $fleet->id }}/vehicles">{{ $fleet->vehicles->count() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/fleets/{{ $fleet->id }}">View</x-tables.basic.row>

                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $fleets->links() }}
    </div>
</div>
