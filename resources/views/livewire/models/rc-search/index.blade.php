<div x-data="{informationBox: @entangle('informationBox')}">
    <form wire:submit.prevent="findVehicleInfo" class="mb-5 divide-gray-200 space-y-8divide-y">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div class="w-1/6">
                <label for="email" class="block text-sm font-medium text-gray-700">Vehicle Number</label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <!-- Heroicon name: Search -->
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2h-1.528A6 6 0 004 9.528V4z" />
                            <path fill-rule="evenodd"
                                d="M8 10a4 4 0 00-3.446 6.032l-1.261 1.26a1 1 0 101.414 1.415l1.261-1.261A4 4 0 108 10zm-2 4a2 2 0 114 0 2 2 0 01-4 0z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <input type="text" name="vehicle_number" id="vehicle_number" wire:model="vehicle_number"
                        class="block w-full pl-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="OD-XX-XX-9999" pattern="[a-zA-Z0-9 ]+">
                </div>
                @error('vehicle_number')<p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>@enderror 
            </div>

        </div>

        <div class="pt-5">
            <div class="flex justify-left">
                <button type="submit" wire:click="findVehicleInfo"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Search
                </button>
            </div>
            <div class="flex mt-8 justify-left">
                <div wire:loading wire:target="findVehicleInfo">
                    Searching for vehicle information...
                    <br>
                    <img src="{{ asset('img/theme/loader.gif') }}" class="w-8/12">
                </div>
            </div>
        </div>
    </form>

    <x-description-list.main x-cloak x-show="informationBox" 
        title="Vehicle Information" 
        desc="All the details regarding the vehicle is available here.">
        
        <x-description-list.row :value="$vehicle_number"                   background="bg-gray-50">Number</x-description-list.row >
        <x-description-list.row :value="$vehice_owner_name"                background="bg-white">Owner Name</x-description-list.row >
        <x-description-list.row :value="$vehice_model"                     background="bg-gray-50">Model</x-description-list.row >
        <x-description-list.row :value="$vehice_class"                     background="bg-white">Class</x-description-list.row >
        <x-description-list.row :value="$vehice_registration_date"         background="bg-gray-50">Registration Date</x-description-list.row >
        <x-description-list.row :value="$vehice_fitness_upto"              background="bg-white">Fitness Upto</x-description-list.row >
        <x-description-list.row :value="$vehice_insurance_expiry"          background="bg-gray-50">Insurance Expiry</x-description-list.row >
        <x-description-list.row :value="$vehice_authority"                 background="bg-white">Registration Authority</x-description-list.row >
        <x-description-list.row :value="$vehice_rto_code"                  background="bg-gray-50">RTO Code</x-description-list.row >
        <x-description-list.row :value="$vehice_chassis_number"            background="bg-white">Chassis Number</x-description-list.row >
        <x-description-list.row :value="$vehice_engine_number"             background="bg-gray-50">Engine Number</x-description-list.row >
            
</x-description-list.main>


</div>
