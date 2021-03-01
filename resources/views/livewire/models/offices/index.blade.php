<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('offices.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle/>
            Add Office
        </a>
    </div>
    <!-- List all offices -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Location</x-tables.basic.column>
                <x-tables.basic.column>Company</x-tables.basic.column>
                <x-tables.basic.column>Employees</x-tables.basic.column>
                <x-tables.basic.column>Action</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($offices as $office)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $office->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $office->company->name }}</x-tables.basic.row>
                    <x-tables.basic.row link="/offices/{{ $office->id }}/employees">{{ $office->total_employees() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/offices/{{ $office->id }}/expenses">View Expenses</x-tables.basic.row>
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
        {{ $offices->links() }}
    </div>
</div>
