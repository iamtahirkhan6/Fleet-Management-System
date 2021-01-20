<div>
    <!-- List all company -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Serial No.</x-tables.basic.column>
            <x-tables.basic.column>Company Name</x-tables.basic.column>
            <x-tables.basic.column>Projects</x-tables.basic.column>
            <x-tables.basic.column>Offices</x-tables.basic.column>
            <x-tables.basic.column>Employees</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($companies as $company)
                <tr>
                    <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->totalProjects() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->totalOffices() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $company->totalEmployees() }}</x-tables.basic.row>
                    <x-tables.basic.row link="/company/{{ $company->id }}">View</x-tables.basic.row>
                </tr>
            @empty
                <tr class="">
                    <td class="px-6 py-4 whitespace-nowrap text-red-500">
                        No Results Found
                    </td>
                </tr>
            @endforelse
        </x-slot>
    </x-tables.basic.main>
    <div class="mt-5">
        {{ $companies->links() }}
    </div>
</div>
