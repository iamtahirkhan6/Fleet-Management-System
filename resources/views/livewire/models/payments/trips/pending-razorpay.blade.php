<div x-data="{ confirmingRazorPay: @entangle('confirmingRazorPay'), showPaymentComplete: @entangle('showPaymentComplete'), showPaymentFailed: @entangle('showPaymentFailed') }">
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
                <tr class="transition duration-500 ease-in-out hover:bg-gray-50 hover:shadow-xl">
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
                    <x-tables.basic.row >
                        <x-buttons.icons.small href="/payments/{{ $payment->id }}"></x-buttons.icons.small>
                    </x-tables.basic.row>
                    <x-tables.basic.row>
                        @if($payment->method->name == "Razorpay")
                            <x-buttons.primary.small type="button" wire:click="payUsingRazorpay('{{$payment->id}}','{{ $payment->getRawOriginal('amount') }}','{{ $payment->bankAccount->account_name }}','{{$payment->bankAccount->account_number }}','{{ $payment->bankAccount->ifsc_code }}','{{ $payment->trip_id ?? null }}')">
                                Pay Using Razorpay
                            </x-buttons.primary.small>
                        @endif
                    </x-tables.basic.row>

                </tr>
            @empty
                <tr class="">
                    <td class="px-6 py-4 whitespace-nowrap text-red-400">
                        No Results Found
                    </td>
                </tr>
            @endforelse
        </x-slot>    </x-tables.basic.main>

    <div class="mt-5">
        {{ $payments->links() }}
    </div>
    <x-modals.simple-with-gray-footer iconBackground="" x-show="confirmingRazorPay" x-cloak>

        <x-slot name="icon">
            <x-svg.question class="h-6 w-6 text-red-600"></x-svg.question>
        </x-slot>

        <x-slot name="title">
            RazorPay Confirmation
        </x-slot>

        <x-slot name="body">
            Are you sure you want to make payment to this account? Once the payment is initiated, it cannot be
            reversed.<br><br>
            <pre class="text-sm text-gray-500">
Account Name      : {{ $account_name ?? 'Not Mentioned' }}
Account Number    : {{ $account_number ?? 'Not Mentioned' }}
IFSC Code         : {{ $ifsc_code ?? 'Not Mentioned' }}

Amount            : {{ $amount ?? 'Not Mentioned' }}
</pre><br>
            <div class="grid grid-cols-3">
                <label for="location" class="col-span-1 block text-sm text-gray-500">Mode</label>
                <select wire:model.lazy="mode" class="col-span-2 mt-1 block w-full md:w-4/6 pl-3 pr-10 py-2 text-base
  border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option hidden>Select a mode</option>
                    <option value="IMPS">IMPS</option>
                    <option value="NEFT">NEFT</option>
                    <option value="RTGS">RTGS</option>
                </select>
            </div>
            @error('mode')<p class="mt-2 text-sm text-red-600 md:mx-auto">{{ $message }}</p> @enderror

        </x-slot>

        <x-slot name="footer">
            <x-buttons.danger.medium wire:click="completePayment">Confirm Payment</x-buttons.danger.medium>

            <x-jet-secondary-button wire:click="$toggle('confirmingRazorPay')" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

        </x-slot>

    </x-modals.simple-with-gray-footer>
    <!-- Success Modal -->
    <x-modals.basic color="bg-green-100" title="Payment Completed"
                    desc="The payment has been sent for processing to Razorpay."
                    backTitle="Go back!" x-show="showPaymentComplete" x-cloak>
        <x-slot name="icon">
            <x-svg.check-circle/>
        </x-slot>
    </x-modals.basic>

    <x-modals.basic color="bg-red-100" title="Razorpay Payment Failed"
                    desc="The payment could not be completed by Razorpay."
                    backTitle="Go back!" x-show="showPaymentFailed" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle/>
        </x-slot>
    </x-modals.basic>
</div>
