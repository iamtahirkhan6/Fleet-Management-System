<div x-data="{showSuccess: @entangle('showSuccess')}">
    <form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent="createExpense">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <!-- date -->
                    <div class="sm:col-span-6">
                        <div class="sm:w-1/6">
                            <label class="block text-sm font-medium text-gray-700">Date <span
                                    class="mt-2 text-sm text-red-600">*</span></label>
                            <x-date-picker wire:model="date"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            @error('date')<p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- amount -->
                    <div class="sm:col-span-6">
                        <div class="sm:w-1/6">
                            <label class="block text-sm font-medium text-gray-700">Amount <span
                                    class="mt-2 text-sm text-red-600">*</span></label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">
                                        ₹
                                    </span>
                                </div>
                                <input type="number" wire:model="amount"
                                    class="block w-full pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm"
                                    placeholder="0.00" aria-describedby="price-currency">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        INR
                                    </span>
                                </div>
                            </div>
                            @error('amount')<p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="sm:col-span-6">
                        <div class="sm:w-1/6">
                            <label class="block text-sm font-medium text-gray-700">Category <span
                                    class="mt-2 text-sm text-red-600">*</span></label>
                            <select wire:model="expense_category"
                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option hidden>Pick a category</option>
                                @foreach ($expense_categories as $expense_category)
                                    <option value="{{ $expense_category->id }}">{{ $expense_category->name }}</option>
                                @endforeach
                            </select>
                            @error('expense_category')<p class="mt-2 text-sm text-red-600" id="name-error">
                                    {{ $message }}
                            </p>@enderror
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="sm:col-span-6">
                        <div class="sm:w-1/6">
                            <label class="block text-sm font-medium text-gray-700">Payment Method <span
                                    class="mt-2 text-sm text-red-600">*</span></label>
                            <select wire:model="payment_method"
                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option hidden>Choose Payment Method</option>
                                @foreach ($payment_methods as $each_payment_method)
                                    <option value="{{ $each_payment_method->id }}">{{ $each_payment_method->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('payment_method')<p class="mt-2 text-sm text-red-600" id="name-error">
                                    {{ $message }}
                            </p>@enderror
                        </div>
                    </div>
                    <!-- Payee -->
                    <div class="sm:col-span-6">
                        <div class="sm:w-1/6">
                            <label class="block text-sm font-medium text-gray-700">Payee</label>
                            <select wire:model="payment_method"
                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option hidden>Choose Payee</option>
                                @foreach ($payment_individuals as $payee)
                                    <option value="{{ $payee->id }}">{{ $payee->name }}</option>
                                @endforeach
                            </select>
                            @error('payee')<p class="mt-2 text-sm text-red-600" id="name-error">
                                    {{ $message }}
                            </p>@enderror
                        </div>
                    </div>

                    <!-- remarks -->
                    <div class="sm:col-span-6">
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                        </label>
                        <div class="w-2/6 mt-1">
                            <textarea id="about" wire:model="remarks" rows="2"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">What was the expense about?.</p>
                        @error('remarks')<p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- upload receipt -->
                    <div class="sm:col-span-4">
                        <label class="block text-sm font-medium text-gray-700">
                            Upload Receipt/Bill/Invoice
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
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
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only"
                                                wire:model="receipt" multiple>
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            @error('*')<p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- actions -->
        <div class="pt-5">
            <div class="flex justify-start">
                <button type="button"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button type="submit"
                    class="justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm in line-flex hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>
    <!-- ON success -->
    <x-modals.basic 
        color="bg-green-100" 
        title="Added Expense" 
        desc="The expense has been added to the database."
        backTitle="Go back to Expenses" 
        :link="url()->previous()" 
        x-show="showSuccess" 
        x-cloak
    >
        <x-slot name="icon">
            <x-svg.check-circle />
        </x-slot>
    </x-modals.basic>

    @push('styles')
        <!-- Pikaday -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    @endpush
</div>
