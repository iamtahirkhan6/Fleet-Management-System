<x-jet-form-section submit="AddOrUpdateRazorPayToCompany">
    <x-slot name="title">
        {{ __('Manage RazorPay') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage your companies razorpay secret api keys and account number.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Enable Razorpay Payments -->
        <div class="col-span-6 sm:col-span-6 md:w-2/6">
            <x-jet-label for="razorpay_input.use_razorpay" value="{{ __('Enable Razorpay Payments?') }}"/>
            <x-forms.basic-stacked.dropdown :array="$enable_razorpay_bool" wire:model.lazy="razorpay_input.use_razorpay"></x-forms.basic-stacked.dropdown>
            <x-jet-input-error for="razorpay_input.use_razorpay" class="mt-2"/>
        </div>

        <!-- Razorpay Key ID -->
        <div class="col-span-6 sm:col-span-6 md:w-3/6">
            <x-jet-label for="razorpay_input.razorpay_key_id" value="{{ __('Key ID') }}"/>
            <x-jet-input id="razorpay_input.razorpay_key_id" type="text" class="mt-1 block" wire:model.lazy="razorpay_input.razorpay_key_id" />
            <x-jet-input-error for="razorpay_input.razorpay_key_id" class="mt-2"/>
        </div>

        <!-- Key Secret -->
        <div class="col-span-6 sm:col-span-6 md:w-3/6">
            <x-jet-label for="razorpay_input.razorpay_key_secret" value="{{ __('Key Secret') }}"/>
            <x-jet-input id="razorpay_input.razorpay_key_secret" type="text" class="mt-1 block" wire:model.lazy="razorpay_input.razorpay_key_secret" />
            <x-jet-input-error for="razorpay_input.razorpay_key_secret" class="mt-2"/>
        </div>

        <!-- Account Number -->
        <div class="col-span-6 sm:col-span-6 md:w-3/6">
            <x-jet-label for="razorpay_input.razorpay_account_number" value="{{ __('Account Number') }}"/>
            <x-jet-input id="razorpay_input.razorpay_account_number" type="text" class="mt-1 block" wire:model.lazy="razorpay_input.razorpay_account_number" />
            <x-jet-input-error for="razorpay_input.razorpay_account_number" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-green-500" on="razorpaySuccess">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-red-500" on="razorpayFailed">
            {{ __('Failed to update.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-yellow-500" wire:loading x-cloak on="">
            <img src="{{ asset("img/theme/loader.gif") }}"  class="w-10 h-10" alt="loading"/>
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
