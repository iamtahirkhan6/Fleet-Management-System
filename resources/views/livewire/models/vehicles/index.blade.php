<div>
    <!-- Actions -->
    <div class="grid mt-5 grid-1">
        <div class="inline-flex flex-row">
            <div class="flex-1">
                <div class="ml-2">
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path fill="#fff" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                            </svg>
                        </div>
                        <input type="text" wire:model="searchTerm"
                            class="block w-full pl-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Search Vehicles">
                    </div>
                </div>
            </div>

            <div class="inline-flex flex-1 mt-1 ml-5">
                <span class="mt-2 mr-3 text-gray-500">Per Page</span>
                <select wire:model="perPage" id="location" name="location"
                    class="block py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md w-min focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option selected value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
    </div>

    <!-- List all vehicles -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Vehicle No.</x-tables.basic.column>
            <x-tables.basic.column>Party</x-tables.basic.column>
            <x-tables.basic.column>Trips</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($vehicles as $vehicle)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $vehicle->number }}</x-tables.basic.row>
                    @if ($vehicle->party_id != null)
                        <x-tables.basic.row>{{ $vehicle->party->first()->name }}</x-tables.basic.row>
                    @endif
                    <x-tables.basic.row>{{ $vehicle->trips($vehicle->party->first()->id) }}</x-tables.basic.row>
                    <x-tables.basic.row link="/vehicles/{{ $vehicle->id }}">View</x-tables.basic.row>
                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $vehicles->links() }}
    </div>
</div>
