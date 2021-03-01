<div>

    <!-- Actions -->
    <div class="grid mt-5 grid-1">
        <div class="inline-flex flex-row">
            <div class="flex-1">
                <div class="ml-2">
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <input type="text" wire:model.lazy="searchTerm"
                            class="block w-full pl-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Search Users">
                    </div>
                </div>
            </div>

            <div class="inline-flex flex-1 mt-1 ml-5">
              <span class="mt-2 mr-3 text-gray-500">Per Page</span>
              <select wire:model.lazy="perPage" id="location" name="location" class="block py-2 pl-3 pr-10 text-base border-gray-300 rounded-md w-min h-10 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option selected value="5">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                </select>
            </div>

            @role('manager')
            <div class="flex-1 mt-1">
                <span class="inline-flex float-right mb-4 rounded-md shadow-sm">
                    <a href="/employees/create"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="w-5 h-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        Add Employee
                    </a>
                </span>
            </div>
            @endrole
        </div>
    </div>

    <!-- List all users -->
    <x-tables.basic.main class="mt-4">
        <x-slot name="columns">
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Designation</x-tables.basic.column>
            <x-tables.basic.column>Office</x-tables.basic.column>
            <x-tables.basic.column>Salary</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column>Actions</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($employees as $employee)
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl" >
                    <x-tables.basic.row avatar="true" :val="$employee->phoneNumber->phone_number ?? null" :url="$employee->profile_photo_url()">{{ $employee->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $employee->designation->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $employee->office->name }}</x-tables.basic.row>
                    <x-tables.basic.row amount="true" :amountVal="$employee->salary"></x-tables.basic.row>
                    <x-tables.basic.row :color_toggle="$employee->is_currently_hired" true_val="Hired" false_val="Dismissed">{{ $employee->is_currently_hired }}</x-tables.basic.row>
                    <x-tables.basic.row link="/employees/{{ $employee->id }}">View</x-tables.basic.row>
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

    <!-- Pagination -->
    <div class="mt-4 grid-1"> {{ $employees->links() }} </div>

</div>
</div>
