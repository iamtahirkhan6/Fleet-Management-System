<x-jet-form-section submit="AddOrUpdateBankAccount">
    <x-slot name="title">
        {{ __('Bank Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage your companies bank account to receive payments.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Account Name -->
        <div class="col-span-6 sm:col-span-6 md:w-3/6">
            <x-jet-label for="bank_account_input.account_name" value="{{ __('Account Name') }}"/>
            <x-jet-input id="bank_account_input.account_name" type="text" class="mt-1 block" wire:model.lazy="bank_account_input.account_name" />
            <x-jet-input-error for="bank_account_input.account_name" class="mt-2"/>
        </div>

        <!-- Account Number -->
        <div class="col-span-6 sm:col-span-6 md:w-3/6">
            <x-jet-label for="bank_account_input.account_number" value="{{ __('Account Number') }}"/>
            <x-jet-input id="bank_account_input.account_number" type="text" class="mt-1 block" wire:model.lazy="bank_account_input.account_number" />
            <x-jet-input-error for="bank_account_input.account_number" class="mt-2"/>
        </div>

        <!-- IFSC Code -->
        <div class="col-span-6 sm:col-span-6 md:w-3/6">
            <x-jet-label for="bank_account_input.ifsc_code" value="{{ __('IFSC Code') }}"/>
            <x-jet-input id="bank_account_input.ifsc_code" type="text" class="mt-1 block" wire:model.lazy="bank_account_input.ifsc_code" />
            <x-jet-input-error for="bank_account_input.ifsc_code" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-green-500" on="bankAccountActionSuccess">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-red-500" on="bankAccountActionFail">
            {{ __('Failed to process request.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-yellow-500" wire:loading x-cloak on="">
            <img src="{{ asset("img/theme/loader.gif") }}"  class="w-10 h-10" alt="loading"/>
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
