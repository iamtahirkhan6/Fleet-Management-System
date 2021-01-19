<div>
    <!-- Actions -->
    <div class="flex flex-row-reverse">
        <a href="/projects/{{ $project->id }}/trips/create"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <x-svg.plus-circle />
            Add Trip
        </a>
    </div>
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
            @foreach ($trips as $trip)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->get_loading_date() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->vehicle->number }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->tp_number }}/{{ $trip->tp_serial }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $trip->net_weight }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->rate"></x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->hsd"></x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->cash"></x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$trip->two_pay"></x-tables.basic.row>
                    <x-tables.basic.row :color_toggle="$trip->step_payment" true_val="Processed" false_val="Pending">{{ $trip->step_payment }}</x-tables.basic.row>
                    <x-tables.basic.row link="/projects/{{ $project->id }}/trips/{{ $trip->id }}">View</x-tables.basic.row>
                </tr>
             @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $trips->links() }}
    </div>
</div>
