<div x-data="{ confirmingRazorPay: @entangle('confirmingRazorPay') }">
    <!-- List all consignees -->
    <x-tables.basic.main class="mt-5">
        <x-slot name="columns">
            <x-tables.basic.column>Receiver Name</x-tables.basic.column>
            <x-tables.basic.column>Amount</x-tables.basic.column>
            <x-tables.basic.column>Type</x-tables.basic.column>
            <x-tables.basic.column>Method</x-tables.basic.column>
            <x-tables.basic.column>Status</x-tables.basic.column>
            <x-tables.basic.column>Date</x-tables.basic.column>
            <x-tables.basic.column>Actions</x-tables.basic.column>
            <x-tables.basic.column></x-tables.basic.column>
        </x-slot>

        <x-slot name="rows">
            @forelse ($payments as $payment)
                <tr>
                    <x-tables.basic.row>
                        <a href="/payments/{{ $payment->id }}" class="inline-flex space-x-2 text-sm truncate group">
                            <x-svg.grey-cash />
                            <p class="text-gray-500 truncate group-hover:text-gray-900">
                                Payment to {{ $payment->bankAccount->account_name }}
                            </p>
                        </a>
                    </x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->amount }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->type() }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->method->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->status->name }}</x-tables.basic.row>
                    <x-tables.basic.row>{{ $payment->created_at->format('d-M-Y') }}</x-tables.basic.row>
                    <x-tables.basic.row>
                        <x-buttons.icons.small type="link" href="/payments/{{ $payment->id }}"></x-buttons.primary.small>
                    </x-tables.basic.row>
                    <x-tables.basic.row>
                        @if($payment->method->name == "Razorpay")

                        @endif
                    </x-tables.basic.row>

                </tr>
            @empty
                <tr class="">
                    <td class="px-6 py-4 whitespace-nowrap text-red-500">
                        No Results Found
                    </td>
                </tr>
            @endforelse
        </x-slot>    </x-tables.basic.main>

    <div class="mt-5">
        {{ $payments->links() }}
    </div>

    <x-modals.simple-with-gray-footer x-show="confirmingRazorPay" x-cloak>

        <x-slot name="icon">
            <x-svg.cancel-circle class="h-6 w-6 text-red-600"></x-svg.cancel-circle>
        </x-slot>

        <x-slot name="title">
            RazorPay Confirmation
        </x-slot>

        <x-slot name="body">
            Are you sure you want to make payment to this account? Once the payment is initiated, it cannot be reversed.
        </x-slot>

        <x-slot name="footer">
            <x-buttons.danger.medium wire:click="" wire:loading.attr="disabled">Confirm Payment</x-buttons.danger.medium>

            <x-jet-secondary-button wire:click="$toggle('confirmingRazorPay')" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

        </x-slot>

    </x-modals.simple-with-gray-footer>

</div>
