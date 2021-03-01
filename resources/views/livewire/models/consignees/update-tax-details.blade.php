<x-jet-form-section submit="updateTaxDetails">
    <x-slot name="title">
        {{ __('Tax Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage your consignee\'s tax information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- GSTIN/UIN Number -->
        <div class="col-span-6 sm:col-span-6 md:w-2/6">
            <x-jet-label for="gstn" value="{{ __('GSTIN/UIN Number') }}"/>
            <x-jet-input id="gstn" type="text" class="mt-1 block" wire:model.lazy="tax_details.gstn" />
            <x-jet-input-error for="tax_details.gstn" class="mt-2"/>
        </div>

        <!-- PAN Number -->
        <div class="col-span-6 sm:col-span-6 md:w-2/6">
            <x-jet-label for="pan" value="{{ __('PAN') }}"/>
            <x-jet-input id="pan" type="text" class="mt-1 block" wire:model.lazy="tax_details.pan" />
            <x-jet-input-error for="tax_details.pan" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-green-500" on="taxDetailsUpdated">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-red-500" on="taxDetailsUpdateFailed">
            {{ __('Failed to update.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" class="disabled:opacity-50">
            <x-tabler-loader-quarter class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24" wire:loading wire:loading.attr="disabled" />
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
