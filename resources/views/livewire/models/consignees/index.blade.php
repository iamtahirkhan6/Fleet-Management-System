<div>
    <!-- List all consignees -->
    <x-tables.basic.main>
        <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Company Name</x-tables.basic.column>
                <x-tables.basic.column>Projects</x-tables.basic.column>
                <x-tables.basic.column>Running Projects</x-tables.basic.column>
                <x-tables.basic.column>Business Done</x-tables.basic.column>
        </x-slot>
            
        <x-slot name="rows">
            @foreach ($consignees as $consignee)
                <tr>
                    <x-tables.basic.row>{{ $consignee->id  }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $consignee->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $consignee->projects() }}</x-tables.basic.row>
                    <x-tables.basic.row colorSlot="true" :colorSlotVal="$consignee->running_projects()"></x-tables.basic.row>
                    <x-tables.basic.row money="true" :moneyBool="$consignee->business_done()" :moneyVal="$consignee->business_done()"></x-tables.basic.row>
                </tr>
             @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $consignees->links() }}
    </div>
</div>