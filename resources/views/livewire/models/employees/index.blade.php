<div
    x-data="{ viewUserModal: @entangle('viewUserModal'), openModal: @entangle('openModal'), showCreateForm: @entangle('showCreateForm'), employeeBool: @entangle('employee_bool'), showSuccessMsg: @entangle('showSuccessMsg'), emBankDetails: @entangle('R_employee_bank_details_bool'), emBankBool: @entangle('R_pay_by_bank_bool') }">

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
                        <input type="text" wire:model="searchTerm"
                            class="block w-full pl-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Search Users">
                    </div>
                </div>
            </div>

            
            
            <div class="inline-flex flex-1 mt-1 ml-5">
              <span class="mt-2 mr-3 text-gray-500">Per Page</span>
              <select wire:model="perPage" id="location" name="location" class="block py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md w-min h-4/6 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option selected value="5">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                </select>
            </div>
            
            <div class="flex-1 mt-1">
                <span class="inline-flex float-right mb-4 rounded-md shadow-sm">
                    <button @click="{openModal = true, showCreateForm = true, showSuccessMsg = false}" type="button"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="w-5 h-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        Add Employee
                    </button>
                </span>
            </div>
        </div>
    </div>

    <!-- List all users -->
    <x-tables.basic.main>
        <x-slot name="columns">
            <x-tables.basic.column>Name</x-tables.basic.column>
            <x-tables.basic.column>Designation</x-tables.basic.column>
            <x-tables.basic.column>Office</x-tables.basic.column>
            <x-tables.basic.column>Salary</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column>Actions</x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @foreach ($employees as $employee)
                <tr>
                    <x-tables.basic.row avatar="true" :val="$employee->phone_number"
                        :url="$employee->profile_photo_url()">{{ $employee->name }}</x-tables.basic.rowavatar>
                        <x-tables.basic.row>{{ $employee->designation->name }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ $employee->office->name }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ App\Helper\Helper::rupee_format($employee->salary) }}
                        </x-tables.basic.row>
                        <x-tables.basic.row :color_toggle="$employee->is_currently_hired" true_val="Hired"
                            false_val="Dismissed">{{ $employee->is_currently_hired }}</x-tables.basic.row>
                        <x-tables.basic.row link="#" wire:click="returnUserInfo({{ $employee }})">View
                        </x-tables.basic.row>
                </tr>
            @endforeach
        </x-slot>
    </x-tables.basic.main>

    <!-- Pagination -->
    <div class="mt-4 grid-1"> {{ $employees->links() }} </div>

    <!-- View User -->
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="viewUserModal" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0"
            x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <!-- This element is to trick the browser into centering the modal contents. --><span
                class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                style="width:	-webkit-fill-available;" role="dialog" aria-modal="true" aria-labelledby="modal-headline"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                <x-description-list.main title="Applicant Information" desc="Personal details and application.">
                    <x-description-list.row :value="$full_Name" background="bg-white">Full Name</x-description-list.row>
                    <x-description-list.row :value="$phone_number" background="bg-gray-50">Phone Number
                    </x-description-list.row>
                    <x-description-list.row :value="$street_address" background="bg-white">Street Address
                    </x-description-list.row>
                    <x-description-list.row :value="$city" background="bg-gray-50">City / Town</x-description-list.row>
                    <x-description-list.row :value="$state" background="bg-white">State</x-description-list.row>
                    <x-description-list.row :value="$zip" background="bg-gray-50">Zip</x-description-list.row>
                    <x-description-list.row :value="$email" background="bg-white">Email address</x-description-list.row>
                    <x-description-list.row :value="$employee_salary" background="bg-gray-50" amount="true">Salary
                    </x-description-list.row>
                    <x-description-list.row :value="$employee_designation" background="bg-white">Designation
                    </x-description-list.row>
                    <x-description-list.row :value="$office" background="bg-gray-50">Office</x-description-list.row>
                    @if ($pay_by_bank_bool == 0)
                        <x-description-list.row value="Cash" background="bg-white">Payment Method
                        </x-description-list.row>Cash
                    @else
                        <x-description-list.row value="Bank Transfer" background="bg-white">Payment Method
                        </x-description-list.row>
                        <x-description-list.row :value="$account_number" background="bg-gray-50">Account Number
                        </x-description-list.row>
                        <x-description-list.row :value="$ifsc_code" background="bg-white">IFSC Code
                        </x-description-list.row>
                    @endif
                </x-description-list.main>

                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button @click="viewUserModal = false" type="button"
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red sm:text-sm sm:leading-5">
                            Close Window
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Create User Modal-->
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="openModal" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
            <div class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div x-show="showCreateForm">
                    <form wire:submit.prevent="createEmployee">
                        @csrf
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                            <p class="max-w-2xl mt-1 text-sm leading-5 text-gray-500"> Enter the details of the user or
                                your employee </p>
                        </div>
                        <div class="mt-6 sm:mt-5">
                            <!-- Full Name -->
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first_name"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> Full
                                    Name <span class="text-red-600">*</span> </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_full_Name" type="text"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    @error('R_full_Name')<p class="mt-2 text-sm text-red-600" id="name-error">
                                        {{ $message }}</p>@enderror
                                </div>
                            </div>
                            <!-- Phone Number -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="R_phone_number"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> Phone
                                    Number <span class="text-red-600">*</span> </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_phone_number" pattern="[0-9]{10}" type="number"
                                            id="phone" name="phone" maxlength="10"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    @error('R_phone_number')
                                        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="R_password"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> Password
                                    <span class="text-red-600">*</span> </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_password" type="password"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    @error('R_password')
                                        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- Email address -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> Email
                                    address</label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_email" type="email"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    @error('R_email')
                                        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- Street address -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="street_address"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> Street
                                    address </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm">
                                        <input wire:model.defer="R_street_address" type="text"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                    @error('R_street_address')
                                        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- City -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="city"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> City
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_city" type="text"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <!-- State / Province -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="state"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> State /
                                    Province </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_state" type="text"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <!-- ZIP / Postal -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="zip"
                                    class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2"> ZIP /
                                    Postal </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                        <input wire:model.defer="R_zip" type="number"
                                            class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <!-- Photo -->
                            <div class="mt-6 sm:mt-5">
                                <div
                                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="photo" class="block text-sm font-medium leading-5 text-gray-700"> Photo
                                    </label>
                                    <div class="mt-2 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            @if ($R_photo) <img
                                                    class="w-12 h-12 overflow-hidden bg-gray-100 rounded-full"
                                                src="{{ $R_photo->temporaryUrl() }}"> @else
                                                <span class="w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                                                    <svg class="w-full h-full text-gray-300" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                </span>
                                            @endif <span class="ml-5 rounded-md shadow-sm">
                                                <input type="file"
                                                    class="inline-flex items-center hidden px-4 py-2 mt-2 mr-2 text-xs font-semibold tracking-widest text-gray-700 uppercase transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50"
                                                    value="Change"></input>
                                                <input class="absolute block opacity-0 cursor-pointer pin-r pin-t"
                                                    type="file" wire:model="R_photo" @change="fileName">
                                                <button
                                                    class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-50 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-200 transition ease-in-out duration-150">
                                                    <span class="">Change</span> </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Employee or not -->
                            <div
                                class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="photo" class="block text-sm font-medium leading-5 text-gray-700"> Employee?
                                </label>
                                <div class="mt-2 sm:mt-0 sm:col-span-2">
                                    <div class="flex items-center">
                                        <button @click="employeeBool = !employeeBool"
                                            :class="{ 'bg-gray-200': !employeeBool, 'bg-indigo-600': employeeBool }"
                                            type="button" aria-pressed="false"
                                            class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="sr-only">Use setting</span>
                                            <span
                                                :class="{ 'translate-x-5': employeeBool, 'translate-x-0': !employeeBool }"
                                                aria-hidden="true"
                                                class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-8 mt-8 border-t border-gray-200 sm:mt-5 sm:pt-10" x-show="employeeBool">
                                <!-- Employee Details -->
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                        Employee Details
                                    </h3>
                                    <p class="max-w-2xl mt-1 text-sm leading-5 text-gray-500"> Enter the designation and
                                        details of your new employee. </p>
                                </div>
                                <!-- Salary -->
                                <div
                                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="email"
                                        class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                        Salary <span class="text-red-600">*</span></label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                            <input wire:model.defer="R_salary" type="text"
                                                class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                        </div>
                                        @error('R_salary')
                                            <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Designation -->
                                <div
                                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="country"
                                        class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                        Designation <span class="text-red-600">*</span></label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                            <select wire:model.defer="R_employee_designation"
                                                class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                <option value="0" selected="selected" disabled>Select Employee
                                                    Designation</option>
                                                @foreach ($designations as $designation)
                                                    <option value="{{ $designation->id }}">{{ $designation->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Office -->
                                <div
                                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="country"
                                        class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                        Office <span class="text-red-600">*</span></label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                            <select wire:model.defer="R_office"
                                                class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                                <option value="0" selected="selected" disabled>Select Office</option>
                                                @foreach ($all_offices as $office)
                                                    <option value="{{ $office->id }}">{{ $office->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Employee Payment Details -->
                                <div
                                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="payment_details"
                                        class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                        Payment Details? </label>
                                    <div class="mt-2 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <button @click="emBankDetails = !emBankDetails"
                                                :class="{ 'bg-gray-200': !emBankDetails, 'bg-indigo-600': emBankDetails }"
                                                type="button" aria-pressed="false"
                                                class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Use setting</span>
                                                <span
                                                    :class="{ 'translate-x-5': emBankDetails, 'translate-x-0': !emBankDetails }"
                                                    aria-hidden="true"
                                                    class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pt-8 mt-8 border-t border-gray-200 sm:mt-5 sm:pt-10" x-show="emBankDetails">
                                <!-- Payment Details -->
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                        Payment Details
                                    </h3>
                                    <p class="max-w-2xl mt-1 text-sm leading-5 text-gray-500"> Enter the bank account
                                        details your new employee. </p>
                                </div>
                                <!-- Pay By Bank? -->
                                <div
                                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="photo" class="block text-sm font-medium leading-5 text-gray-700"> Pay By
                                        Bank? </label>
                                    <div class="mt-2 sm:mt-0 sm:col-span-2">
                                        <div class="flex items-center">
                                            <button @click="emBankBool = !emBankBool"
                                                :class="{ 'bg-gray-200': !emBankBool, 'bg-indigo-600': emBankBool }"
                                                type="button" aria-pressed="false"
                                                class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                <span class="sr-only">Use setting</span>
                                                <span
                                                    :class="{ 'translate-x-5': emBankBool, 'translate-x-0': !emBankBool }"
                                                    aria-hidden="true"
                                                    class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="emBankBool">
                                    <!-- Account Number -->
                                    <div
                                        class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                            Account Number <span class="text-red-600">*</span> </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                                <input wire:model.defer="R_account_number" type="text"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                            </div>
                                            @error('R_account_number')<p class="mt-2 text-sm text-red-600"
                                                id="name-error">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <!-- IFSC Code -->
                                    <div
                                        class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="email"
                                            class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                            IFSC Code <span class="text-red-600">*</span></label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                                                <input wire:model.defer="R_ifsc_code" type="text"
                                                    class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                            </div>
                                            @error('R_ifsc_code')<p class="mt-2 text-sm text-red-600" id="name-error">
                                                {{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end content -->
                        </div>
                        <!-- Cancel/Save Row -->
                        <div class="pt-5 mt-8 border-t border-gray-200">
                            <div class="flex justify-end"> <span class="inline-flex rounded-md shadow-sm">
                                    <button @click="{openModal = false}" type="button"
                                        class="px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
                                        Cancel
                                    </button>
                                </span> <span class="inline-flex ml-3 rounded-md shadow-sm">
                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                                        Save
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Success Message -->
                <div x-show="showSuccessMsg">
                    <x-Acc_Creation_Successfull />
                    <div class="mt-5 sm:mt-6"> <span class="flex w-full rounded-md shadow-sm">
                            <button @click="openModal = false" wire:click="resetForms()" type="button"
                                class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo sm:text-sm sm:leading-5">
                                Go back to dashboard
                            </button>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</div>
