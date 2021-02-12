<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        @role('manager')
        <a href="{{ route('consignees.create') }}"
           class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Consignee
        </a>
        @endrole
    </div>
    <!-- List all consignees -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Company Name</x-tables.basic.column>
                <x-tables.basic.column>Projects</x-tables.basic.column>
                <x-tables.basic.column>Running Projects</x-tables.basic.column>
                <x-tables.basic.column>Business Done</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($consignees as $consignee)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration  }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $consignee->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $consignee->totalProjects() }}</x-tables.basic.row>
                    <x-tables.basic.row colorSlot="true" :colorSlotVal="$consignee->runningProjects()"></x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$consignee->businessDone()" :moneyVal="$consignee->businessDone()"></x-tables.basic.row>
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
        {{ $consignees->links() }}
    </div>
</div>
