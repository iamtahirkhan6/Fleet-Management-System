<div>
    <!-- List all consignees -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Receiver Name</x-tables.basic.column>
            <x-tables.basic.column>Amount</x-tables.basic.column>
            <x-tables.basic.column>Type</x-tables.basic.column>
            <x-tables.basic.column>Method</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($payments as $payment)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>
                        <a href="/payments/{{ $payment->id }}" class="inline-flex space-x-2 text-sm truncate group">
                            <x-svg.grey-cash />
                            <p class="text-gray-500 truncate group-hover:text-gray-900">
                                Payment to {{ $payment->bankAccount->account_name }}
                            </p>
                        </a>
                    </x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->amount }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->type() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->method->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->status->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->created_at->format('d-M-Y') }}</x-tables.basic.row>
                    <x-tables.basic.row >
                        <x-buttons.icons.small href="/payments/{{ $payment->id }}"></x-buttons.icons.small>
                    </x-tables.basic.row>

                </tr>
            @empty
                <tr class="">
                    <td class="px-6 py-4 whitespace-nowrap text-red-400">
                        No Results Found
                    </td>
                </tr>
            @endforelse
        </x-slot>    </x-tables.basic.main>

    <div class="mt-5">
        {{ $payments->links() }}
    </div>

    <!-- Actions -->
    @can('payments-read')
        <div class="flex flex-row-reverse gap-5 mt-5">
            @can('payments-read')
                <a href="/payments/pending" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-yellow-600 border border-transparent rounded-md shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    <x-svg.collection /> Pending Payments
                </a>
            @endcan
            @can('razorpay-complete')
                <a href="/payments/razorpay-pending" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-yellow-600 border border-transparent rounded-md shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                    <x-svg.clock /> RazorPay Pending Payouts
                </a>
            @endcan
        </div>
    @endcan
</div>
