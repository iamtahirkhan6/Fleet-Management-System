<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
            <a href="{{ Request::url() }}/create" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <x-svg.plus-circle/>
                Add Expense
            </a>
    </div>
    <!-- List all expenses -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>ID</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column>Category</x-tables.basic.column>
            <x-tables.basic.column>Payee</x-tables.basic.column>
            <x-tables.basic.column>Amount</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($expenses as $expense)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $expense->id }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $expense->date }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $expense->category->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $expense->payee->name ?? 'SELF' }}</x-tables.basic.row>
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
