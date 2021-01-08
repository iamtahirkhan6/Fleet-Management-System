<div>
    <!-- List all companies -->
    <x-tables.basic.main>
        <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Company Name</x-tables.basic.column>
                <x-tables.basic.column>Projects</x-tables.basic.column>
                <x-tables.basic.column>Offices</x-tables.basic.column>
                <x-tables.basic.column>Employees</x-tables.basic.column>
                <x-tables.basic.column></x-tables.basic.column>
        </x-slot>
            
        <x-slot name="rows">
            @foreach ($companies as $company)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->total_projects() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->total_offices() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->total_employees() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/companies/{{ $company->id }}">View</x-tables.basic.row>
                </tr>
             @endforeach
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $companies->links() }}
    </div>
</div>