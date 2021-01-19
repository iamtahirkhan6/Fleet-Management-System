<div x-data="{
        step0: @entangle('step0'),
        step1: @entangle('step1'),
        step2: @entangle('step2'),
        step3: @entangle('step3'),
        mActive: @entangle('mActive'),
        oActive: @entangle('oActive'),
        stepOneCompleted: @entangle('stepOneCompleted'),
        stepTwoCompleted: @entangle('stepTwoCompleted'),
        stepThreeCompleted: @entangle('stepThreeCompleted')
    }">

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
            <form class="min-h-full space-y-4" wire:submit.prevent="createTrip">
                <div x-show="step0" class="w-3/6 mx-auto">
                    <fieldset>
                        <legend class="sr-only">
                            Privacy setting
                        </legend>

                        <div class="-space-y-px bg-white rounded-md">
                            <div @click="mActive = true, oActive = false"
                                :class="{ 'bg-indigo-50 border-indigo-200 z-10': mActive, 'border-gray-200': !mActive }"
                                class="relative flex p-4 border rounded-tl-md rounded-tr-md">
                                <div class="flex items-center h-5">
                                    <input @click="mActive = true" type="radio" x-bind:checked="mActive"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500"
                                        checked>
                                </div>
                                <label @click="mActive = true, oActive = false" for="settings-option-0"
                                    class="flex flex-col ml-3 cursor-pointer">
                                    <span :class="{ 'text-indigo-900': mActive, 'text-gray-900': !mActive }"
                                        class="block text-sm font-medium">
                                        Market Vehicle
                                    </span>
                                    <span :class="{ 'text-indigo-700': mActive, 'text-gray-500': !mActive }"
                                        class="block text-sm">
                                        This vehicle is owned by a third party and they do transportation for us.
                                    </span>
                                </label>
                            </div>

                            <div @click="oActive = true, mActive = false"
                                :class="{ 'bg-indigo-50 border-indigo-200 z-10': oActive, 'border-gray-200': !oActive }"
                                class="relative flex p-4 border border-gray-200">
                                <div class="flex items-center h-5">
                                    <input @click="oActive = true" type="radio" x-bind:checked="oActive"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500">
                                </div>
                                <label @click="oActive = true, mActive = false" for="settings-option-1"
                                    class="flex flex-col ml-3 cursor-pointer">
                                    <span :class="{ 'text-indigo-900': oActive, 'text-gray-900': !oActive }"
                                        class="block text-sm font-medium">
                                        Owned Vehicle
                                    </span>
                                    <span :class="{ 'text-indigo-700': oActive, 'text-gray-500': !oActive }"
                                        class="block text-sm">
                                        This vehicle is owned by us and is a part of our fleet.
                                    </span>
                                </label>
                            </div>
                        </div>
                    </fieldset>

                </div>
                <div x-show="step1" x-cloak>
                    <!-- Step 1 -->
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 @if($mActive != 'true') sm:grid-cols-2 @else sm:grid-cols-3 @endif" x-show="step1">

                        <!-- Trip Information -->
                        <x-forms.below-stacked.vertical-column title="Trip Information"
                            desc="Fill the details as mentioned on the challan."
                            class="w-11/12 col-span-1 border-gray-200 sm:border-r">

                            <!-- Loading Point -->
                            <x-forms.below-stacked.row-with-value title="Source">
                                {{ $source }}
                            </x-forms.below-stacked.row-with-value>

                            <!-- Unloading Point -->
                            <x-forms.below-stacked.row-with-value title="Destination">
                                {{ $destination }}
                            </x-forms.below-stacked.row-with-value>

                            <!-- Consignee -->
                            <x-forms.below-stacked.row-with-value title="Consignee">
                                {{ $consignee }}
                            </x-forms.below-stacked.row-with-value>

                            <!-- Date -->
                            <x-forms.below-stacked.row title="Date" error="trip.date">
                                <x-date-picker wire:model="trip.date"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </x-forms.below-stacked.row>

                            <!-- Challan Serial -->
                            <x-forms.below-stacked.row title="Challan Serial" error="trip.challan_serial">
                                <x-forms.below-stacked.text-input type="text" wire:model="trip.challan_serial" />
                            </x-forms.below-stacked.row>

                            <!-- Vehicle Number -->
                            @if ($mActive == 'true')

                                <!-- Market Vehicle -->
                                <x-forms.below-stacked.row title="Vehicle Registration Number" error="vehicle.number" required="true">
                                    <x-forms.below-stacked.text-input type="text" wire:model="vehicle.number" />
                                </x-forms.below-stacked.row>

                            @elseif($oActive == 'true')

                            <!-- Fleet Vehicle -->
                                <x-forms.below-stacked.row title="Vehicle Registration Number" error="fleet_vehicle_id"
                                    required="true">
                                    <x-forms.below-stacked.dropdown title="Select a Vehicle" :array="$fleet_vehicles" arrayKey="number"
                                        wire:model="fleet_vehicle_id" />
                                </x-forms.below-stacked.dropdown>

                            @endif

                            <!-- TP Number -->
                            <x-forms.below-stacked.row title="TP Number" error="trip.tp_number" required="true">
                                <x-forms.below-stacked.text-input type="text" wire:model="trip.tp_number" />
                            </x-forms.below-stacked.row>

                            <!-- TP Serial -->
                            <x-forms.below-stacked.row title="TP Serial" error="trip.tp_serial" required="true">
                                <x-forms.below-stacked.text-input type="text" wire:model="trip.tp_serial" />
                            </x-forms.below-stacked.row>

                            @if ($mActive == 'true' && $step0 == false)
                                <!-- Agent -->
                                <x-forms.below-stacked.row title="Agent" error="trip.agent_id">
                                    <x-forms.below-stacked.dropdown :array="$agents" title="Select an agent"
                                        wire:model="trip.agent_id" />
                                </x-forms.below-stacked.row>
                            @endif
                        </x-forms.below-stacked.vertical-column>

                        <!-- Quantity Information -->
                        <x-forms.below-stacked.vertical-column title="Quantity Information"
                            desc="Fill the details as mentioned on the challan."
                            class="w-11/12 col-span-1 border-gray-200 {{ ($oActive != 'true') ? 'sm:border-r':'' }}">

                            <!-- Gross Weight -->
                            <x-forms.below-stacked.row title="Gross Weight" error="trip.gross_weight">
                                <x-forms.below-stacked.text-input type="number" wire:model="trip.gross_weight" />
                            </x-forms.below-stacked.row>

                            <!-- Tare Weight -->
                            <x-forms.below-stacked.row title="Tare Weight" error="trip.tare_weight">
                                <x-forms.below-stacked.text-input type="number" wire:model="trip.tare_weight" />
                            </x-forms.below-stacked.row>

                            <!-- Net Weight -->
                            <x-forms.below-stacked.row title="Net Weight" error="trip.net_weight" required="true">
                                <x-forms.below-stacked.text-input type="number" wire:model="trip.net_weight" />
                            </x-forms.below-stacked.row>

                            <!-- Rate -->
                            <x-forms.below-stacked.row title="Rate per metric ton" error="trip.rate" required="true">
                                <x-forms.below-stacked.text-input type="number" wire:model="trip.rate" />
                            </x-forms.below-stacked.row>

                            <x-forms.below-stacked.vertical-column class="mt-5" title="Driver Information"
                                desc="Fill the details as mentioned on the challan" />

                            @if ($mActive == 'true')

                                <!-- Driver Name -->
                                <x-forms.below-stacked.row title="Driver Name" error="driver.name">
                                    <x-forms.below-stacked.text-input type="text" wire:model="driver.name" />
                                </x-forms.below-stacked.row>

                                <!-- Driver License Number -->
                                <x-forms.below-stacked.row title="License Number" error="">
                                    <x-forms.below-stacked.text-input type="text" wire:model="document.license_num" />
                                </x-forms.below-stacked.row>

                                <!-- Driver Phone Number -->
                                <x-forms.below-stacked.row title="Phone Number" error="">
                                    <x-forms.below-stacked.text-input type="number" wire:model="phone_number.mumber" />
                                </x-forms.below-stacked.row>

                            @elseif($oActive == 'true')

                                <x-forms.below-stacked.row title="Driver" error="fleet_driver_id"
                                    required="true">
                                    <x-forms.below-stacked.dropdown title="Select a driver" :array="$paid_drivers" arrayKey="name"
                                        wire:model="trip.driver_id" />
                                </x-forms.below-stacked.dropdown>

                            @endif

                        </x-forms.below-stacked.vertical-column>

                        @if($oActive != 'true')
                        <!-- Cash Advance Information -->
                        <x-forms.below-stacked.vertical-column title="Cash Advance Information"
                            desc="Fill the details as mentioned on the challan." class="col-span-1">

                            <!-- HSD Amount -->
                            <x-forms.below-stacked.row title="HSD Amount" error="trip.hsd">
                                <x-forms.below-stacked.text-input type="number" wire:model="trip.hsd" />
                            </x-forms.below-stacked.row>

                            <!-- Cash Amount -->
                            <x-forms.below-stacked.row title="Cash Amount" error="trip.cash">
                                <x-forms.below-stacked.text-input type="number" wire:model="trip.cash" />
                            </x-forms.below-stacked.row>

                            <!-- Owner Information -->
                            <x-forms.below-stacked.vertical-column class="mt-5" title="Owner Information"
                                desc="Fill the details as mentioned on the challan" />

                            <!-- Owner Name -->
                            <x-forms.below-stacked.row title="Party Name" error="party.name">
                                <x-forms.below-stacked.text-input type="text" wire:model="party.name" />
                            </x-forms.below-stacked.row>

                            <!-- Owner Phone Number -->
                            <x-forms.below-stacked.row title="Phone Number" error="party_ph_num.number">
                                <x-forms.below-stacked.text-input type="number" wire:model="party_ph_num.number" />
                            </x-forms.below-stacked.row>

                            @error('*')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </x-forms.below-stacked.vertical-column>
                        @endif
                    </div>

                    <!-- Step 2 -->
                    <div class="grid grid-cols-1 sm:grid-cols-3" x-show="step2">
                        <div class="col-span-1 border-gray-200 sm:border-r sm:pr-7">
                            <!-- Upload Documents -->
                            <x-forms.below-stacked.vertical-column title="Upload Documents"
                                desc="Scan the copy of the challan and upload it." class="col-span-1" />

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
                                                <input wire:model="challan_photo" id="file-upload" name="file-upload"
                                                    type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                                @error('challan_photo')<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror

                                <div>

                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 pl-7" x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">

                            <x-forms.below-stacked.vertical-column title="Image Preview"
                                desc="You will be able to preview the photo once it is uploaded." class="col-span-1" />

                            {{-- <div wire:loading wire:target="challan_photo">
                                Uploading...</div> --}}
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>

                            @if ($challan_photo)
                                <img src="{{ $challan_photo->temporaryUrl() }}">
                            @endif
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="grid-cols-1" x-show="step3">
                        <x-description-list.main title="Review Trip Information"
                            desc="Re-check every details before submiting the form.">

                            <x-description-list.row :value="$trip->date" background="bg-gray-50">Date</x-description-list.row>
                            <x-description-list.row :value="$trip->challan_serial" background="bg-white">Challan Serial</x-description-list.row>
                            <x-description-list.row :value="$consignee" background="bg-gray-50">Consignee</x-description-list.row>
                            <x-description-list.row :value="$source" background="bg-white">Source</x-description-list.row>
                            <x-description-list.row :value="$destination" background="bg-gray-50">Destination</x-description-list.row>
                            <x-description-list.row :value="$vehicle->number" background="bg-white">Vehicle Number</x-description-list.row>
                            <x-description-list.row :value="$trip->tp_number" background="bg-gray-50">TP Number</x-description-list.row>
                            <x-description-list.row :value="$trip->tp_serial" background="bg-white">TP Serial</x-description-list.row>
                            <x-description-list.row :value="$trip->gross_weight" background="bg-gray-50">Gross Weight</x-description-list.row>
                            <x-description-list.row :value="$trip->tare_weight" background="bg-white" amount="true">Tare Weight</x-description-list.row>
                            <x-description-list.row :value="$trip->net_weight" background="bg-gray-50">Net Weight</x-description-list.row>
                            <x-description-list.row :value="$trip->rate" background="bg-white" amount="true">Rate</x-description-list.row>
                            <x-description-list.row :value="$driver->name" background="bg-gray-50">Driver Name</x-description-list.row>
                            <x-description-list.row :value="$driver->license_no" background="bg-white">License Number</x-description-list.row>
                            <x-description-list.row :value="$trip->hsd" background="bg-gray-50" amount="true">HSD Amount</x-description-list.row>
                            <x-description-list.row :value="$trip->cash" background="bg-white" amount="true">Cash Advance</x-description-list.row>
                            <x-description-list.row :value="$trip->challan_photo" background="bg-gray-50" photo="true">Challan Soft Copy</x-description-list.row>
                        </x-description-list.main>
                    </div>
                </div>
        </div>

        <!-- Footer -->
        <div class="px-4 py-4 bg-gray-800 sm:px-6">
            <div class="flex justify-end">
                <button x-show="step1" @click="step1 = !step1, step2 = false, step0 = true" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>
                    Back
                </button>
                <button x-show="step2" @click="step1 = !step1, step2 = !step2, stepOneCompleted = !stepOneCompleted"
                    type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>
                    Back
                </button>
                <button x-show="step3" @click="step2 = !step2, step3 = !step3, stepTwoCompleted = !stepTwoCompleted"
                    type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>
                    Back
                </button>

                @if($this->mActive || $this->oActive)
                    <button x-show="step0" @click="step0 = false, step1 = true" @if($mActive) wire:click="loadAgents" @else wire:click="loadPaidDrivers" @endif type="button"
                        class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Next
                    </button>
                @endif
                <button x-show="step1" wire:click="checkStepOne" type="button"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Next
                </button>
                <button x-show="step2" @click="step3 = !step3, step2 = !step2, stepTwoCompleted = !stepTwoCompleted"
                    type="button"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>
                    Next
                </button>
                <button x-show="step3" type="submit"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    x-cloak>
                    Submit
                </button>
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
