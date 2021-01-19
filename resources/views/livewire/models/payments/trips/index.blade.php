<div>
    <!-- List all consignees -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Transaction</x-tables.basic.column>
            <x-tables.basic.column>Amount</x-tables.basic.column>
            <x-tables.basic.column>Trip</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column>Method</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($payments as $payment)
                <tr>
                    <x-tables.basic.row>
                        <a href="/payments/{{ $payment->trip_id }}" class="inline-flex space-x-2 text-sm truncate group">
                            <x-svg.grey-cash />
                            <p class="text-gray-500 truncate group-hover:text-gray-900">
                                Payment to {{ $payment->party->name }}
                            </p>
                        </a>
                    </x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="1" :moneyVal="$payment->amount"></x-tables.basic.row>
                    <x-tables.basic.row link="/trips/{{ $payment->trip_id }}">{{ $payment->trip_id }}</x-tables.basic.row>
                    <x-tables.basic.row :colorToggle="$payment->status" trueVal="Paid" falseVal="Pending"></x-tables.basic.>
                    <x-tables.basic.row>{{ $payment->payment_method->name }}</x-tables.basic.>
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
