<x-jet-form-section submit="updateAddress">
    <x-slot name="title">
        {{ __('Address') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Manage your consignee\'s billing address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Address 1 -->
        <div class="col-span-6 sm:col-span-6 w-3/6">
            <x-jet-label for="address.line_1" value="{{ __('Address 1') }}"/>
            <x-jet-input id="address.line_1" type="text" class="mt-1 block" wire:model.lazy="address.line_1"/>
            <x-jet-input-error for="address.line_1" class="mt-2"/>
        </div>

        <!-- Address 2 -->
        <div class="col-span-6 sm:col-span-6 w-3/6">
            <x-jet-label for="address.line_2" value="{{ __('Address 2') }}"/>
            <x-jet-input id="address.line_2" type="text" class="mt-1 block" wire:model.lazy="address.line_2"/>
            <x-jet-input-error for="address.line_2" class="mt-2"/>
        </div>

        <!-- Address 2 -->
        <div class="col-span-6 sm:col-span-6 w-3/6">
            <x-jet-label for="address.district" value="{{ __('District') }}"/>
            <x-jet-input id="address.district" type="text" class="mt-1 block" wire:model.lazy="address.district"/>
            <x-jet-input-error for="address.district" class="mt-2"/>
        </div>

        <!-- City -->
        <div class="col-span-6 sm:col-span-2">
            <x-jet-label for="address.city" value="{{ __('City') }}"/>
            <x-jet-input id="address.city" type="text" class="mt-1 block w-full" wire:model.lazy="address.city"/>
            <x-jet-input-error for="address.city" class="mt-2"/>
        </div>

        <!-- State -->
        <div class="col-span-6 sm:col-span-2">
            <x-jet-label for="address.state" value="{{ __('State') }}"/>
            <x-jet-input id="address.state" type="text" class="mt-1 block w-full" wire:model.lazy="address.state"/>
            <x-jet-input-error for="address.state" class="mt-2"/>
        </div>

        <!-- Pin -->
        <div class="col-span-6 sm:col-span-2">
            <x-jet-label for="address.zip" value="{{ __('Postal Code') }}"/>
            <x-jet-input id="address.zip" type="tel" maxlength="6" class="mt-1 block w-full" wire:model.lazy="address.zip"/>
            <x-jet-input-error for="address.zip" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3 text-green-500" on="addressUpdated">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-red-500" on="addressUpdateFailed">
            {{ __('Failed to save.') }}
        </x-jet-action-message>

        <x-jet-action-message class="mr-3 text-red-500" on="unableToFetchGstn">
            {{ __('Please set the GSTN number first.') }}
        </x-jet-action-message>

        @if($update_from_gstn)
            <x-jet-secondary-button class="mr-3" wire:loading.attr="disabled" wire:target="updateAddressFromGstn" wire:click="updateAddressFromGstn">
                <x-tabler-loader-quarter class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24" wire:loading wire:target="updateAddressFromGstn" wire:loading.attr="disabled" />
                {{ __('Get Address from GSTIN') }}
            </x-jet-secondary-button>
        @endif

        <x-jet-button wire:loading.attr="disabled">
            <x-tabler-loader-quarter class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24" wire:loading wire:loading.attr="disabled" />
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
