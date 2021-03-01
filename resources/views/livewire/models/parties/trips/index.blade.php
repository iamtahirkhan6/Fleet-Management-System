<div>
    <!-- List all trips -->
    <x-tables.basic.main class="mt-5">
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
            @forelse ($trips as $trip)
                <tr  class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->date }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->vehicle->number }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->tp_number }}/{{ $trip->tp_serial }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->net_weight }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->rate">{{ $trip->rate }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->hsd">{{ $trip->hsd }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->cash">{{ $trip->cash }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->two_pay">{{ $trip->two_pay }}</x-tables.basic.row>
                    <x-tables.basic.row :colorToggle="$trip->step_payment" trueVal="Completed" falseVal="Payment Pending"></x-tables.basic.row>
                    <x-tables.basic.row link="/parties/{{ $trip->id }}/trips/{{ $trip->id }}">View</x-tables.basic.row>
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
        {{ $trips->links() }}
    </div>
</div>
