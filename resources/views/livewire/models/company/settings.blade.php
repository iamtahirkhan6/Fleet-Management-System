<div class="lg:grid lg:grid-cols-12 lg:gap-x-5" x-data="{createSuccess: @entangle('createSuccess'), createFail: @entangle('createFail')}">
    <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
        <nav class="space-y-1">
            <a href="#" class="text-gray-900 hover:text-gray-900 bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <span class="truncate">
          Razorpay Settings
        </span>
            </a>
        </nav>
    </aside>

    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <form wire:submit.prevent="AddRazorPay">
            <div class="shadow sm:rounded-md sm:overflow-hidden shadow-lg border-t-4 border-indigo-300">
                <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">RazorPay Information</h3>
                        <p class="mt-1 text-sm text-gray-500">Make sure you do not share this in front of any person.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:w-3/6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Use Razorpay?</label>
                            <select wire:model.lazy="use_razorpay" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option hidden>Make a choice</option>
                                <option value="1" @if($company->use_razorpay == 1) selected @endif>Yes</option>
                                <option value="0" @if($company->use_razorpay == 0) selected @endif>No</option>
                            </select>
                            @error('use_razorpay') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="col-span-6 sm:w-3/6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Razorpay Key Id</label>
                            <input type="text" wire:model.lazy="razorpay_key_id" value="{{ $company->razorpay_key_id }}" placeholder="{{ $company->razorpay_key_id }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('razorpay_key_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div class="col-span-6 sm:w-3/6">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Razorpay Key Secret</label>
                            <input type="text" wire:model.lazy="razorpay_key_secret" value="{{ $company->razorpay_key_secret }}" placeholder="{{ $company->razorpay_key_secret }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('razorpay_key_secret') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Settings Added" desc="The Razorpay settings has been saved to your account."
                    backTitle="Go back!" link="/company/settings" x-show="createSuccess" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    <!-- Already Exists Modal -->
    <x-modals.basic color="bg-red-100" title="Settings Integration Failed" desc="The details could not be saved to your account."
                    backTitle="Go back!" link="/company/settings" x-show="createFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle />
        </x-slot>
    </x-modals.basic>
</div>
