<div>
    <div class="grid mt-5 grid-1">
        <div class="inline-flex flex-row">
            <div class="flex-1">
                <div class="ml-2">
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <input type="text" wire:model="searchTerm"
                            class="block w-full pl-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Search Party">
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
    <!-- List all trips -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Party Name</x-tables.basic.column>
            <x-tables.basic.column>Total Vehicles</x-tables.basic.column>
            <x-tables.basic.column>Bank Accounts</x-tables.basic.column>
            <x-tables.basic.column>Total Trips</x-tables.basic.column>
            <x-tables.basic.column>Net TXN Value</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($parties as $party)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $party->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $party->vehicles->count() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $party->bankAccounts->count() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $party->trips->count() }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$party->totalBusiness()"></x-tables.basic.row>
                    <x-tables.basic.row link="/parties/{{ $party->id }}">View</x-tables.basic.row>

                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $parties->links() }}
    </div>
</div>
