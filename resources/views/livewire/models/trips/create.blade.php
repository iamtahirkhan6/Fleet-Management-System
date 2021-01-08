<div
    x-data="{ step1: @entangle('step1'), step2: @entangle('step2'), step3: @entangle('step3'), stepOneCompleted: @entangle('stepOneCompleted'), stepTwoCompleted: @entangle('stepTwoCompleted'), stepThreeCompleted: @entangle('stepThreeCompleted'), hsdBool: @entangle('f_hsd_bool'), cashAdvBool: @entangle('f_cash_advance_bool') }">

    <!-- Steps -->
    <nav aria-label="Progress" class="mt-5 bg-white">
        <ol class="border border-gray-300 divide-y divide-gray-300 rounded-md md:flex md:divide-y-0">
            <!-- Step 1-->
            <li class="relative md:flex-1 md:flex">
                <a href="#" class="flex items-center px-6 py-4 text-sm font-medium">

                    <!-- When Step 1 is not completed -->
                    <span x-show="!stepOneCompleted"
                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full"
                        aria-current="step">
                        <span class="text-indigo-600">01</span>
                    </span>

                    <!-- When Step 1 is completed -->
                    <span x-show="stepOneCompleted"
                        class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800"
                        x-cloak>
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span class="ml-4 text-sm font-medium text-indigo-600">Trip Details</span>
                </a>

                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </li>

            <!-- Step 2 -->
            <li class="relative md:flex-1 md:flex">
                <a href="#" class="flex items-center group">

                    <!-- When Step 2 is inactive -->
                    <span x-show="!stepOneCompleted" class="flex items-center px-6 py-4 text-sm font-medium">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                            <span class="text-gray-500 group-hover:text-gray-900">02</span>
                        </span>
                        <span class="ml-4 text-sm font-medium text-gray-500 group-hover:text-gray-900">Upload
                            Documents</span>
                    </span>

                    <!-- When Step 2 is active -->
                    <span class="flex items-center px-6 py-4 text-sm font-medium" x-show="step2" x-cloak>
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full"
                            aria-current="step" x-cloak>
                            <span class="text-indigo-600">02</span>
                        </span>
                        <span class="ml-4 text-sm font-medium text-indigo-600" x-cloak>Upload
                            Documents</span>
                    </span>

                    <!-- When Step 2 is completed -->
                    <span class="flex items-center px-6 py-4 text-sm font-medium" x-show="stepTwoCompleted" x-cloak>
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800"
                            x-cloak>
                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span x-show="stepTwoCompleted" class="ml-4 text-sm font-medium text-indigo-600">Upload
                            Documents</span>
                    </span>
                </a>

                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </li>

            <!-- Step 3 -->
            <li class="relative md:flex-1 md:flex">
                <a href="#" class="flex items-center group">


                    <!-- When Step 3 is inactive -->
                    <span x-show="!step3" class="flex items-center px-6 py-4 text-sm font-medium">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                            <span class="text-gray-500 group-hover:text-gray-900">03</span>
                        </span>
                        <span class="ml-4 text-sm font-medium text-gray-500 group-hover:text-gray-900">Preview</span>
                    </span>

                    <!-- When Step 3 is active -->
                    <span class="flex items-center px-6 py-4 text-sm font-medium" x-show="step3">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full"
                            aria-current="step" x-cloak>
                            <span class="text-indigo-600">03</span>
                        </span>
                        <span class="ml-4 text-sm font-medium text-indigo-600" x-cloak>Preview</span>
                    </span>
                </a>
            </li>
        </ol>
    </nav>

    <!-- Body -->
    <div class="mt-5 overflow-hidden bg-white border-t rounded-lg shadow-2xl border-gray-50">
        <div class="px-4 py-5 sm:p-6">
            <!-- Body -->
            <form class="space-y-4" wire:submit.prevent="createTrip">
                <!-- Step 1 -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3" x-show="step1">
                    <div class="w-11/12 col-span-1 border-gray-200 sm:border-r">
                        <div class="">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Trip Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Fill the details as mentioned on the challan.</p>
                            <hr class="my-3 sm:w-3/4">
                        </div>
                        
                        <!-- Loading Point -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Loading Point</label>
                            <div class="mt-1 sm:w-3/4">
                                <p class="text-indigo-500 ">{{ $f_loading_point_val }}</p>
                            </div>
                        </div>

                        <!-- Unloading Point -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Unloading Point</label>
                            <div class="mt-1 sm:w-3/4">
                                <p class="text-indigo-500 ">{{ $f_unloading_point_val }}</p>
                            </div>
                        </div>

                        <!-- Consignee -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Consignee</label>
                            <div class="mt-1 sm:w-3/4">
                                <p class="text-indigo-500">{{ $f_consignee_val }}</p>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-700">Date</label>
                            <div class="mt-1 sm:w-3/4">
                                <x-date-picker wire:model="f_date" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
                            </div>
                            @error('f_date')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Challan Serial -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-700">Challan Serial</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="number" wire:model="f_challan_serial"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_challan_serial')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Vehicle Number -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Vehicle Number <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_vehicle_number"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_vehicle_number')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- TP Number -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">TP Number <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_tp_number"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_tp_number')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- TP Serial -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">TP Serial <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_tp_serial"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_tp_serial')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Agent -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Agent</label>
                            <div class="mt-1 sm:w-3/4">
                                <select wire:model="f_agent"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option hidden>Select an Agent</option>
                                    @foreach ($agents as $agent)
                                        <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="w-11/12 col-span-1 border-gray-200 sm:border-r">
                        <!-- Quantity Information -->
                        <div>
                            <h3 x-show="step1" class="text-lg font-medium leading-6 text-gray-900">Quantity Information
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Fill the details of the transported mineral.</p>
                            <hr class="my-3 sm:w-3/4">
                        </div>

                        <!-- Gross Weight -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Gross Weight</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_gross_weight"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Tare Weight -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Tare Weight</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_tare_weight"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Net Weight -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Net Weight <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-1 sm:w-3/4">
                            <input type="text" wire:model="f_net_weight"  }}"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_net_weight')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Rate -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Rate per metric ton <span
                                    class="text-red-500">*</span></label>
                            <div class="sm:w-3/4">
                                <input type="number" wire:model="f_rate"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_rate')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="mt-6 sm:col-span-6">
                            <h3 x-show="step1" class="text-lg font-medium leading-6 text-gray-900">Driver Information
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Fill the details as mentioned on the challan.</p>
                            <hr class="my-3 sm:w-3/4">
                        </div>

                        <!-- Driver Name -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Driver Name</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_driver_name"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Driver License Number -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">License Number</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_driver_license_num"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Driver Phone Number -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Driver Phone Number</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="number" wire:model="f_driver_phone_num"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                    </div>

                    <div class="col-span-1 p-1">
                        <div class="sm:col-span-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Cash Advance Information</h3>
                            <p class="mt-1 text-sm text-gray-500">Fill the details as mentioned on the challan.</p>
                            <hr class="my-3 sm:w-3/4">
                        </div>

                        <!-- HSD Advance Given? -->
                        <div class="mt-6 sm:col-span-6">
                            <div class="flex items-center justify-between">
                                <span class="flex flex-row flex-grow" id="toggleLabel">
                                    <span class="mr-40 text-sm font-medium text-gray-700">HSD Advance Given?</span>

                                    <button @click="hsdBool = !hsdBool"
                                        :class="{ 'bg-gray-200': !hsdBool, 'bg-indigo-600': hsdBool }" type="button"
                                        aria-pressed="false" aria-labelledby="toggleLabel"
                                        class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Use setting</span>
                                        <span :class="{ 'translate-x-5': hsdBool, 'translate-x-0': !hsdBool }"
                                            aria-hidden="true"
                                            class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
                                    </button>
                            </div>

                        </div>

                        <!-- HSD Amount -->
                        <div class="mt-6 sm:col-span-6" x-show="hsdBool"  x-cloak>
                            <label class="block text-sm font-medium text-gray-700">HSD Amount <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="number" wire:model="f_hsd_amount"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Cash Amount Given? -->
                        <div class="mt-6 sm:col-span-6">
                            <div class="flex items-center justify-between">
                                <span class="flex flex-row flex-grow">
                                    <span class="mr-40 text-sm font-medium text-gray-700">Cash Advance Given?</span>

                                    <button @click="cashAdvBool = !cashAdvBool"
                                        :class="{ 'bg-gray-200': !cashAdvBool, 'bg-indigo-600': cashAdvBool }"
                                        type="button" aria-pressed="false"
                                        class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <span class="sr-only">Use setting</span>
                                        <span :class="{ 'translate-x-5': cashAdvBool, 'translate-x-0': !cashAdvBool }"
                                            aria-hidden="true"
                                            class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <!-- Cash Amount -->
                        <div class="mt-6 sm:col-span-6" x-show="cashAdvBool" x-cloak>
                            <label class="block text-sm font-medium text-gray-700">Cash Amount <span
                                    class="text-red-500">*</span></label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="number" wire:model="f_cash_advance_amt"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <!-- Owner Information -->
                        <div class="mt-6 sm:col-span-6">
                            <h3 x-show="step1" class="text-lg font-medium leading-6 text-gray-900">Owner Information
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Fill the details of the owner of the vehicle.</p>
                            <hr class="my-3 sm:w-3/4">
                        </div>

                        <!-- Owner Name -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Owner Name</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="text" wire:model="f_owner_name"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_owner_name')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Owner Phone Number -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Owner Phone Number</label>
                            <div class="mt-1 sm:w-3/4">
                                <input type="number" wire:model="f_owner_phone"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            @error('f_owner_phone')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                    </div>
                </div>

                <!-- Step 2 -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3" x-show="step2">
                    <div class="col-span-1 ">
                        <!-- Upload Documents -->
                        <div class="">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Upload Documents</h3>
                            <p class="mt-1 text-sm text-gray-500">Scan the copy of the challan and upload it.</p>
                            <hr class="my-3 sm:w-3/4">
                        </div>

                        <!-- Upload Challan -->
                        <div class="mt-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">
                                Upload Challan
                            </label>
                            <div
                                class="flex justify-center px-6 pt-5 pb-6 mt-2 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input wire:model="f_challan_photo" id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                            @error('f_challan_photo')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                            <div wire:loading wire:target="f_challan_photo">Uploading...</div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3" x-show="step3">
                    <div class="col-span-3">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Review Trip Information
                        </h3>
                        <p class="max-w-2xl mt-1 text-sm text-gray-500">
                            Re-check every details before submiting the form.
                        </p>
                    </div>

                    <div class="col-span-3">
                        <div class="border-t border-b border-gray-200">
                            <dl>
                                <!-- Date -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Date
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_date }}</span>
                                    </dd>
                                </div>

                                <!-- Challan Serial -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Challan Serial
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_challan_serial }}</span>
                                    </dd>
                                </div>

                                <!-- Consignee -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Consignee
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_consignee_val }}</span>
                                    </dd>
                                </div>

                                <!-- Loading Point -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Loading Point
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <span class="text-indigo-500">{{ $f_loading_point_val }}</span>
                                    </dd>
                                </div>

                                <!-- Unloading Point -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Unloading Point
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_unloading_point_val }}</span>
                                    </dd>
                                </div>

                                <!-- Vehicle Number -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Vehicle Number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_vehicle_number }}</span>
                                    </dd>
                                </div>

                                <!-- TP Number -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        TP Number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_tp_number }}</span>
                                    </dd>
                                </div>

                                <!-- TP Serial -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        TP Serial
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <span class="text-indigo-500"> {{ $f_tp_serial }}</span>
                                    </dd>
                                </div>

                                <!-- Gross Weight  -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Gross Weight
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_gross_weight }}</span>
                                    </dd>
                                </div>

                                <!-- Tare Weight  -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Tare Weight
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_tare_weight }}</span>
                                    </dd>
                                </div>

                                <!-- Net Weight  -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Net Weight
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_net_weight }}</span>
                                    </dd>
                                </div>

                                <!-- Rate  -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Rate
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">₹{{ number_format($f_rate) }}</span>
                                    </dd>
                                </div>

                                <!-- Driver Name  -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Driver Name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <span class="text-indigo-500"> {{ $f_driver_name }}</span>
                                    </dd>
                                </div>

                                <!-- Driver License Number  -->
                                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        License Number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <span class="text-indigo-500"> {{ $f_driver_license_num }}</span>
                                    </dd>
                                </div>

                                <!-- Driver Phone Number  -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Driver Phone Number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                         <span class="text-indigo-500">{{ $f_driver_phone_num }}</span>
                                    </dd>
                                </div>

                                <!-- HSD Amount  -->
                                @if ($f_hsd_bool == true && $f_hsd_amount != null)
                                    <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            HSD Amount
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                             <span class="text-indigo-500">₹{{ number_format($f_hsd_amount) }}</span>
                                        </dd>
                                    </div>
                                @endif

                                <!-- Cash Advance Amount  -->
                                @if ($f_cash_advance_bool == true && $f_cash_advance_amt != null)
                                    <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Cash Advance Amount
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                             <span class="text-indigo-500">₹{{ number_format($f_cash_advance_amt) }}</span>
                                        </dd>
                                    </div>
                                @endif

                                <!-- Upload Challan  -->
                                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Challan Soft Copy
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <span class="text-indigo-500">
                                            @if($f_challan_photo != NULL)
                                            Uploaded
                                            @endif
                                        </span>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

        </div>

        
        <!-- Footer -->
        <div class="px-4 py-4 bg-gray-800 sm:px-6">
            <div class="flex justify-end">
                <button x-show="step2" @click="step1 = !step1, step2 = !step2, stepOneCompleted = !stepOneCompleted" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>Back</button>
                <button x-show="step3" @click="step2 = !step2, step3 = !step3, stepTwoCompleted = !stepTwoCompleted" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>Back</button>

                <button x-show="step1" @click="" wire:click="checkStepOne" type="button"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Next</button>
                <button x-show="step2" @click="step3 = !step3, step2 = !step2, stepTwoCompleted = !stepTwoCompleted" type="button"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>Next</button>
                <button x-show="step3" type="submit"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>Submit</button>
            </div>
        </div>
        </form>
    </div>
    @push('styles')
        <!-- Pikaday -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    @endpush
</div>
