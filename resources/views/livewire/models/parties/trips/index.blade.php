<div>
    <!-- List all trips -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column>Vehicle No.</x-tables.basic.column>
            <x-tables.basic.column>TP Number/Serial</x-tables.basic.column>
            <x-tables.basic.column>Net Weight</x-tables.basic.column>
            <x-tables.basic.column>Rate</x-tables.basic.column>
            <x-tables.basic.column>HSD</x-tables.basic.column>
            <x-tables.basic.column>Cash</x-tables.basic.column>
            <x-tables.basic.column>2Pay</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($trips as $trip)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->get_loading_date() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->vehicle->number }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->tp_number }}/{{ $trip->tp_serial }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->net_weight }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->rate() }}</x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$trip->hsd_given_bool" :moneyVal="$trip->hsd_amount"></x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$trip->cash_given_bool" :moneyVal="$trip->cash_amount_given"></x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$trip->two_pay" :moneyVal="$trip->two_pay"></x-tables.basic.row>
                    <x-tables.basic.row :colorToggle="$trip->step_payment" trueVal="Completed" falseVal="Payment Pending"></x-tables.basic.>
                    <x-tables.basic.row link="/parties/{{ $trip->id }}/trips/{{ $trip->id }}">View</x-tables.basic.row>

                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $trips->links() }}
    </div>
</div>