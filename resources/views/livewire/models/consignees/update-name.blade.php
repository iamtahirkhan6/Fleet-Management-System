<x-jet-form-section submit="updateDetails">
    <x-slot name="title">
        {{ __('Basic Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage your consignee\'s incorporation information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-6 md:w-2/6">
            <x-jet-label for="name" value="{{ __('Name') }}"/>
            <x-jet-input id="name" type="text" class="mt-1 block" wire:model.lazy="consignee.name" value="{{ $consignee->name }}"/>
            <x-jet-input-error for="consignee.name" class="mt-2"/>
        </div>

        <!-- Trade Name -->
        <div class="col-span-6 sm:col-span-6 md:w-2/6">
            <x-jet-label for="trade_name" value="{{ __('Trade Name') }}"/>
            <x-jet-input id="trade_name" type="text" class="mt-1 block" wire:model.lazy="consignee.trade_name" value="{{ $consignee->trade_name }}"/>
            <x-jet-input-error for="consignee.trade_name" class="mt-2"/>
        </div>

        <!-- Trade Name -->
        <div class="col-span-6 sm:col-span-6 md:w-2/6">
            <x-jet-label for="short_code" value="{{ __('Short Code') }}"/>
            <x-jet-input id="short_code" type="text" class="mt-1 block" wire:model.lazy="consignee.short_code" value="{{ $consignee->short_code }}"/>
            <x-jet-input-error for="consignee.short_code" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-green-500" on="detailsUpdated">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-red-500" on="detailsUpdateFailed">
            {{ __('Failed to update.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" class="disabled:opacity-50">
            <x-tabler-loader-quarter class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24" wire:loading wire:loading.attr="disabled" />
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
