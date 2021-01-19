<div>
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
            @foreach ($offices as $office)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $office->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $office->company->name }}</x-tables.basic.row>
                    <x-tables.basic.row link="/offices/{{ $office->id }}/employees">{{ $office->total_employees() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/offices/{{ $office->id }}/expenses">View Expenses</x-tables.basic.row>
                </tr>
             @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $offices->links() }}
    </div>
</div>
