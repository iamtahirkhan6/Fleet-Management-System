<div>
    <!-- List all consignees -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Transaction</x-tables.basic.column>
            <x-tables.basic.column>Amount</x-tables.basic.column>
            <x-tables.basic.column>Trip</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column>Through</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($payments as $payment)
                <tr>
                    <x-tables.basic.row>
                        <a href="/payments/{{ $payment->trip_id }}" class="inline-flex space-x-2 text-sm truncate group">
                            <!-- Heroicon name: cash -->
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-gray-500 truncate group-hover:text-gray-900">
                                Payment to {{ $payment->party->name }}
                            </p>
                        </a>
                    </x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="1" :moneyVal="$payment->amount"></x-tables.basic.row>
                    <x-tables.basic.row link="/trips/{{ $payment->trip_id }}">{{ $payment->trip_id }}</x-tables.basic.row>
                    <x-tables.basic.row :colorToggle="$payment->status" trueVal="Paid" falseVal="Pending"></x-tables.basic.>
                    <x-tables.basic.row>{{ $payment->remarks }}</x-tables.basic.>
                    <x-tables.basic.row>{{ App\Helper\Helper::human_date($payment->created_at) }}</x-tables.basic.row>
                    <x-tables.basic.row link="/payments/{{ $payment->trip_id }}">View</x-tables.basic.row>

                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $payments->links() }}
    </div>
</div>
