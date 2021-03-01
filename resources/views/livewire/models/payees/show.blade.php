<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="{{ route('payees.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.arrow-left/>Go Back
        </a>
    </div>
    <!-- List all expenses -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>ID</x-tables.basic.column>
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Category</x-tables.basic.column>
            <x-tables.basic.column>Amount</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($expenses as $expense)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $expense->created_at->format('d-M-Y') }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $expense->category->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $expense->amount }}</x-tables.basic.row>

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
        {{ $expenses->links() }}
    </div>
</div>
