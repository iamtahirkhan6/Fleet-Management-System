 <div x-data="{
        step0: @entangle('step0'),
        step1: @entangle('step1'),
        step2: @entangle('step2'),
        step3: @entangle('step3'),
        mActive: @entangle('mActive'),
        oActive: @entangle('oActive'),
        createFail: @entangle('createFail'),
        createSuccess: @entangle('createSuccess'),
        hasOwnedVehicle: @entangle('hasOwnedVehicle'),
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
                    <!-- When Step 1 is not completed --><span x-show="!stepOneCompleted" class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                        <span class="text-indigo-600">01</span> </span>
                    <!-- When Step 1 is completed --><span x-show="stepOneCompleted" class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800" x-cloak>
                        <x-svg.step-completed class="w-6 h-6 text-white"/>
                    </span> <span class="ml-4 text-sm font-medium text-indigo-600">Trip Details</span> </a>
                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" /> </svg>
                </div>
            </li>
            <!-- Step 2 -->
            <li class="relative md:flex-1 md:flex">
                <a href="#" class="flex items-center group">
                    <!-- When Step 2 is inactive -->
                    <span x-show="!stepOneCompleted" class="flex items-center px-6 py-4 text-sm font-medium">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                            <span class="text-gray-500 group-hover:text-gray-900">02</span> </span> <span class="ml-4 text-sm font-medium text-gray-500 group-hover:text-gray-900">Upload
                            Documents</span> </span>
                    <!-- When Step 2 is active -->
                    <span class="flex items-center px-6 py-4 text-sm font-medium" x-show="step2" x-cloak>
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full"
                            aria-current="step" x-cloak>
                            <span class="text-indigo-600">02</span> </span> <span class="ml-4 text-sm font-medium text-indigo-600" x-cloak>Upload
                            Documents</span> </span>
                    <!-- When Step 2 is completed -->
                    <span class="flex items-center px-6 py-4 text-sm font-medium" x-show="stepTwoCompleted" x-cloak>
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800"
                            x-cloak>
                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </span> <span x-show="stepTwoCompleted" class="ml-4 text-sm font-medium text-indigo-600">Upload
                            Documents</span> </span>
                </a>
                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" /> </svg>
                </div>
            </li>
            <!-- Step 3 -->
            <li class="relative md:flex-1 md:flex">
                <a href="#" class="flex items-center group">
                    <!-- When Step 3 is inactive --><span x-show="!step3" class="flex items-center px-6 py-4 text-sm font-medium">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                            <span class="text-gray-500 group-hover:text-gray-900">03</span> </span> <span class="ml-4 text-sm font-medium text-gray-500 group-hover:text-gray-900">Preview</span> </span>
                    <!-- When Step 3 is active --><span class="flex items-center px-6 py-4 text-sm font-medium" x-show="step3">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full"
                            aria-current="step" x-cloak>
                            <span class="text-indigo-600">03</span> </span> <span class="ml-4 text-sm font-medium text-indigo-600" x-cloak>Preview</span> </span>
                </a>
            </li>
        </ol>
    </nav>
    <!-- Body -->
    <div class="mt-5 overflow-hidden bg-white border-t rounded-lg shadow-2xl border-gray-50">
        <form class="min-h-full space-y-4" wire:submit.prevent="createTrip" novalidate>
            <div class="">
                <!-- Step 0 -->
                <div x-show="step0" class="w-3/6 mx-auto px-4 py-5 sm:p-6">
                    <x-radio-group.list-with-description variableOne="mActive" variableOneTitle="Market Vehicle" variableOneDesc="These vehicles are owned by a third party." variableTwo="oActive" variableTwoTitle="Owned Vehicle" variableTwoDesc="These vehicles are a part of our fleet" hidden="hasOwnedVehicle" /> </div>
                <!-- Step 1 -->
                <div x-show="step1" class="px-4 py-5 sm:p-6" x-cloak>
                    <!-- Step 1 -->
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 @if($mActive != 'true') sm:grid-cols-2 @else
                        sm:grid-cols-3 @endif" x-show="step1">
                        <!-- Trip Information -->
                        <x-forms.below-stacked.vertical-column title="Trip Information" desc="Fill the details as
                        mentioned on the challan." class="w-11/12 col-span-1 border-gray-200 sm:border-r">
                            <!-- Loading Point -->
                            <x-forms.below-stacked.row-with-value title="Source"> {{ $project->loadingPoint->name }} </x-forms.below-stacked.row-with-value>
                            <!-- Unloading Point -->
                            <x-forms.below-stacked.row-with-value title="Destination"> {{ $project->unloadingPoint->name }} </x-forms.below-stacked.row-with-value>
                            <!-- Consignee -->
                            <x-forms.below-stacked.row-with-value title="Consignee"> {{ $project->consignee->name }} </x-forms.below-stacked.row-with-value>
                            <!-- Date -->
                            <x-forms.below-stacked.row title="Date" error="input.date">
                                <x-date-picker wire:model.lazy="input.date"/> </x-forms.below-stacked.row>
                            <!-- Challan Serial -->
                            <x-forms.below-stacked.row title="Challan Serial" error="input.challan_serial">
                                <x-forms.below-stacked.text-input type="number" autocomplete="off" wire:model.lazy="input.challan_serial" /> </x-forms.below-stacked.row>
                            <!-- Vehicle Number -->@if ($mActive == 'true')
                            <!-- Market Vehicle -->
                                <x-forms.below-stacked.row title="Vehicle Registration Number" error="input.market_vehicle_number" requiredCol="true">
                                    <x-forms.below-stacked.text-input type="text" wire:model.lazy="input.market_vehicle_number" /> </x-forms.below-stacked.row> @else
                            <!-- Fleet Vehicle -->
                                <x-forms.below-stacked.row title="Vehicle Registration Number" error="input.fleet_vehicle_id" requiredCol="true">
                                    <x-forms.below-stacked.dropdown title="Select a Vehicle" :array="$fleet_vehicles" arrayKey="number" wire:model.lazy="input.fleet_vehicle_id"> </x-forms.below-stacked.dropdown>
                                </x-forms.below-stacked.row> @endif
                        <!-- TP Number -->
                            <x-forms.below-stacked.row title="TP Number" error="input.tp_number" requiredCol="true">
                                <x-forms.below-stacked.text-input type="text" wire:model.lazy="input.tp_number" /> </x-forms.below-stacked.row>
                            <!-- TP Serial -->
                            <x-forms.below-stacked.row title="TP Serial" error="input.tp_serial" requiredCol="true">
                                <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.tp_serial" /> </x-forms.below-stacked.row> @if ($mActive == 'true' && $step0 == false)
                            <!-- Agent -->
                                <x-forms.below-stacked.row title="Agent" error="input.agent_id">
                                    <x-forms.below-stacked.dropdown :array="$agents" arrayKey="name" title="Select an
                                     agent" wire:model.lazy="input.agent_id" /> </x-forms.below-stacked.row> @endif </x-forms.below-stacked.vertical-column>
                        <!-- Quantity Information -->
                        <x-forms.below-stacked.vertical-column title="Quantity Information" desc="Fill the details as mentioned on the challan." class="w-11/12 col-span-1 border-gray-200 {{ ($oActive != 'true') ? 'sm:border-r':'' }}">
                            <!-- Gross Weight -->
                            <x-forms.below-stacked.row title="Gross Weight" error="input.gross_weight">
                                <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.gross_weight" /> </x-forms.below-stacked.row>
                            <!-- Tare Weight -->
                            <x-forms.below-stacked.row title="Tare Weight" error="input.tare_weight">
                                <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.tare_weight" /> </x-forms.below-stacked.row>
                            <!-- Net Weight -->
                            <x-forms.below-stacked.row title="Net Weight" error="input.net_weight" requiredCol="true">
                                <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.net_weight" /> </x-forms.below-stacked.row>
                            <!-- Rate -->
                            <x-forms.below-stacked.row title="Rate per metric ton" error="input.rate" requiredCol="true">
                                <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.rate" /> </x-forms.below-stacked.row>
                            <x-forms.below-stacked.vertical-column class="mt-5" title="Driver Information" desc="Fill the details as mentioned on the challan" /> @if ($mActive == 'true')
                            <!-- Driver Name -->
                                <x-forms.below-stacked.row title="Driver Name" error="input.driver_name">
                                    <x-forms.below-stacked.text-input type="text" wire:model.lazy="input.driver_name" /> </x-forms.below-stacked.row>
                                <!-- Driver Phone Number -->
                                <x-forms.below-stacked.row title="Phone Number" error="">
                                    <x-forms.below-stacked.text-input type="tel" maxlength="10" wire:model.lazy="input.driver_phone_num" /> </x-forms.below-stacked.row>
                                <!-- Driver License Number -->
                                <x-forms.below-stacked.row title="License Number" error="">
                                    <x-forms.below-stacked.text-input type="text" wire:model.lazy="input.driver_license_num" /> </x-forms.below-stacked.row> @elseif($oActive == 'true')
                                <x-forms.below-stacked.row title="Driver" error="input.fleet_driver_id" requiredCol="true">
                                    <x-forms.below-stacked.dropdown title="Select a driver" :array="$paid_drivers" arrayKey="name" wire:model.lazy="input.fleet_driver_id" /> </x-forms.below-stacked.row> @endif </x-forms.below-stacked.vertical-column> @if($oActive != 'true')
                        <!-- Cash Advance Information -->
                            <x-forms.below-stacked.vertical-column title="Cash Advance Information" desc="Fill the details as mentioned on the challan." class="col-span-1">
                                <!-- HSD Amount -->
                                <x-forms.below-stacked.row title="HSD Amount" error="input.hsd">
                                    <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.hsd" /> </x-forms.below-stacked.row>
                                <!-- Cash Amount -->
                                <x-forms.below-stacked.row title="Cash Amount" error="input.cash">
                                    <x-forms.below-stacked.text-input type="number" wire:model.lazy="input.cash" /> </x-forms.below-stacked.row>
                                <!-- Owner Information -->
                                <x-forms.below-stacked.vertical-column class="mt-5" title="Owner Information" desc="Fill the details as mentioned on the challan" />
                                <!-- Owner Name -->
                                <x-forms.below-stacked.row title="Party Name" error="input.party_name">
                                    <x-forms.below-stacked.text-input type="text" wire:model.lazy="input.party_name" /> </x-forms.below-stacked.row>
                                <!-- Owner Phone Number -->
                                <x-forms.below-stacked.row title="Phone Number" error="input.party_number">
                                    <x-forms.below-stacked.text-input type="tel" maxLength="10" wire:model.lazy="input.party_number" /> </x-forms.below-stacked.row>
                            </x-forms.below-stacked.vertical-column> @endif
                    </div>
                </div>
                <!-- Step 2 -->
                <div x-show="step2" class="grid grid-cols-1 px-4 py-5 sm:p-6" x-cloak>
                    <div class="col-span-1 border-gray-200 sm:pr-7">
                        <!-- Upload Documents -->
                        <x-forms.below-stacked.vertical-column title="Upload Documents" desc="Scan the copy of the challan and upload it." class="col-span-1" />
                        <!-- Upload Challan -->
                        <div class="mt-1 sm:mt-0 col-span-3 md:col-span-1">
                            @if(!isset($challan_copy))
                                <x-forms.basic-stacked.image-upload wireModel="challan_copy"/>
                            @else
                                <ul>
                                    <li><span class="text-md text-indigo-500">Uploaded Soft Copy</span></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Step 3 -->
                <div x-show="step3" class="grid-cols-1" x-cloak>
                    <x-description-list.main title="Review Trip Information" desc="Re-check every details before submitting the form." default="true">
                        <x-description-list.row :value="$input['date'] ?? null" background="bg-gray-50">Date</x-description-list.row>
                        <x-description-list.row :value="$input['challan_serial'] ?? null" background="bg-white">Challan Serial</x-description-list.row>
                        <x-description-list.row :value="$consignee ?? null" background="bg-gray-50">Consignee</x-description-list.row>
                        <x-description-list.row :value="$consignee->loadingPoint->name ?? null" background="bg-white">Source</x-description-list.row>
                        <x-description-list.row :value="$consignee->unloadingPoint->name ?? null" background="bg-gray-50">Destination</x-description-list.row>
                        <x-description-list.row :value="$input['market_vehicle_number'] ?? null ?? null" background="bg-white">Vehicle Number</x-description-list.row>
                        <x-description-list.row :value="$input['tp_serial'] ?? null" background="bg-gray-50">TP Number</x-description-list.row>
                        <x-description-list.row :value="$input['tp_number'] ?? null" background="bg-white">TP Serial</x-description-list.row>
                        <x-description-list.row :value="$input['gross_weight'] ?? null" background="bg-gray-50">Gross Weight</x-description-list.row>
                        <x-description-list.row :value="$input['tare_weight'] ?? null" background="bg-white" amount="true">Tare Weight</x-description-list.row>
                        <x-description-list.row :value="$input['net_weight'] ?? null" background="bg-gray-50">Net Weight</x-description-list.row>
                        <x-description-list.row :value="$input['rate'] ?? null" background="bg-white" amount="true">Rate</x-description-list.row>
                        <x-description-list.row :value="$input['driver_name'] ?? null" background="bg-gray-50">Driver Name</x-description-list.row>
                        <x-description-list.row :value="$input['driver_license'] ?? null" background="bg-white">License Number</x-description-list.row>
                        <x-description-list.row :value="$input['hsd'] ?? null" background="bg-gray-50" amount="true">HSD Amount</x-description-list.row>
                        <x-description-list.row :value="$input['cash'] ?? null" background="bg-white" amount="true">Cash Advance</x-description-list.row>
                        <x-description-list.row :value="$trip->challan_photo ?? null" background="bg-gray-50" photo="true">Challan Soft Copy</x-description-list.row>
                    </x-description-list.main>
                </div>
            <!-- Footer -->
            <div class="px-4 py-4 bg-gray-800 sm:px-6">
                <div class="flex justify-end">
                    <button x-show="step1" @click="step1 = !step1, step2 = false, step0 = true" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-cloak> Back </button>
                    <button x-show="step2" @click="step1 = !step1, step2 = !step2, stepOneCompleted = !stepOneCompleted" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-cloak> Back </button>
                    <button x-show="step3" @click="step2 = !step2, step3 = !step3, stepTwoCompleted = !stepTwoCompleted" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-cloak> Back </button> @if($this->mActive || $this->oActive)
                        <button @if($mActive) wire:click="loadAgents" @else wire:click="loadOwnedVehicleTripData" @endif x-show="step0" @click="step0 = false, step1 = true" type="button" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">  Next </button> @endif
                    <button x-show="step1" wire:click="checkStepOne" type="button" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">  Next </button>
                    <button x-show="step2" @click="step3 = !step3, step2 = !step2, stepTwoCompleted = !stepTwoCompleted" type="button" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-cloak>  Next </button>
                    <button x-show="step3" type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" x-cloak><x-tabler-loader-quarter class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24" wire:loading wire:target="" wire:loading.attr="disabled" />  Submit </button>
                </div>
            </div>

        </form>
        <!-- Success Modal -->
        <x-modals.basic color="bg-green-100" title="Trip Added" desc="The Trip has been added to the database."
                        backTitle="Go back!" link="/projects/{{ $project->id }}/trips/create" x-show="createSuccess" x-cloak>
            <x-slot name="icon">
                <x-svg.check-circle /> </x-slot>
        </x-modals.basic>
        <!-- Already Exists Modal -->
        <x-modals.basic color="bg-red-100" title="Failed to Add" desc="The Trip could not be added in the database." backTitle="Go back!" x-show="createFail" link="/projects/{{ $project->id }}/trips/create" x-cloak>
            <x-slot name="icon">
                <x-svg.cancel-circle /> </x-slot>
        </x-modals.basic>
    </div>
    @push('styles')
        <!-- Pikaday -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        <!-- Spatie -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @endpush
    </div>
