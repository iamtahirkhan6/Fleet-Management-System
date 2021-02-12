<div class="overflow-hidden bg-white border-t-4 border-indigo-400 rounded-lg shadow-lg"
     x-data="{panDiv: @entangle('panDiv'), onPanSearch:@entangle('onPanSearch'), tds_sbm_bool: @entangle('tds_sbm_bool'),personalDetails: @entangle('personalDetails'), showFail:@entangle('showFail'),showUploadDocuments: @entangle('showUploadDocuments'),showExistingBankDetails: @entangle('showExistingBankDetails'), enterBankDetails: @entangle('enterBankDetails'), showFeesStructure: @entangle('showFeesStructure')}">

    <x-forms.basic-stacked.form wire:submit.prevent='completePayment' title="Party Details"
                                desc="Enter the details of the party that has to be paid." topGap="false">

        <!-- Pan Account -->
        @if($panDiv)
            <x-forms.basic-stacked.column title="PAN" error="input.pan" width="md:w-2/6 sm:w-full" x-show="panDiv">
                <x-forms.basic-stacked.input-basic wire:model.lazy="input.pan" type="text"
                                                   placeholder="Enter the pan of the party" maxlength="10"
                                                   oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"></x-forms.basic-stacked.input-basic>
                <button wire:click="checkIfPartyExists" type="button"
                        class="mt-4 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Search Party!
                </button>
            </x-forms.basic-stacked.column>
        @endif

        @if($personalDetails)
            <div x-show="personalDetails" x-cloak>
                <x-forms.basic-stacked.column title="Name on Pan" error="input.name" x-cloak>
                    <x-forms.basic-stacked.input-basic wire:model.lazy="input.name" type="text"
                                                       placeholder="Enter the name"></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
                <x-forms.basic-stacked.column title="PAN" error="input.pan" x-cloak>
                    <x-forms.basic-stacked.input-basic wire:model.lazy="input.pan" type="text"
                                                       placeholder="Enter the pan" maxlength="10"
                                                       oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
                <x-forms.basic-stacked.column title="Phone Number" error="input.phone_number" x-cloak>
                    <x-forms.basic-stacked.input-basic wire:model.lazy="input.phone_number" type="tel"
                                                       placeholder="Enter the phone number"
                                                       maxlength="10"></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
            </div>
        @endif

        <div class="grid grid-cols-1 gap-y-3 md:grid-cols-2 md:gap-x-6"
             x-show="showExistingBankDetails"
             x-cloak>
            @forelse($existing_bank_accounts as $bank_account)
                <div
                    class="grid-cols-1 bg-white overflow-hidden shadow-md rounded-lg divide-y divide-gray-200 border-t-2 border-yellow-300 mt-2">
                    <div class="px-4 py-2 sm:px-6">
                        Bank Account {{ $loop->iteration }}
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <!-- Bank Account Name -->
                        <x-forms.basic-stacked.column title="Bank Account Name" error="input.party_name">
                            <x-forms.basic-stacked.row-with-value>{{ $bank_account->account_name }}</x-forms.basic-stacked.row-with-value>
                        </x-forms.basic-stacked.column>

                        <!-- Bank Account Number -->
                        <x-forms.basic-stacked.column title="Bank Account Number" error="input.bank_account_number">
                            <x-forms.basic-stacked.row-with-value>{{ $bank_account->account_number }}</x-forms.basic-stacked.row-with-value>
                        </x-forms.basic-stacked.column>

                        <!-- IFSC Code -->
                        <x-forms.basic-stacked.column title="IFSC Code" error="input.bank_ifsc_code">
                            <x-forms.basic-stacked.row-with-value>{{ $bank_account->ifsc_code }}</x-forms.basic-stacked.row-with-value>
                        </x-forms.basic-stacked.column>
                    </div>
                </div>
            @empty
            @endforelse
        </div>

        <!-- If a bank exists -->
        <div>
            <x-forms.basic-stacked.column title="Select an Account" error="input.bank_account_id"
                                          x-show="showExistingBankDetails" x-cloak>
                <x-forms.basic-stacked.dropdown :array="$existing_bank_accounts" arrayKey="account_number"
                                                title="Select an option"
                                                wire:model="input.bank_account_id"></x-forms.basic-stacked.dropdown>
            </x-forms.basic-stacked.column>
            <div class="relative w-full sm:w-2/6 my-3" x-show="showExistingBankDetails" x-cloak>
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="px-2 bg-white text-sm text-gray-500">
                      OR
                    </span>
                </div>
            </div>

            <div x-show="enterBankDetails" x-cloak>
                <!-- Bank Account Name -->
                <x-forms.basic-stacked.column title="Bank Account Name" error="input.account_name">
                    <x-forms.basic-stacked.input-basic wire:model.lazy="input.account_name" type="text"
                                                       placeholder=""></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
                <!-- Bank Account Number -->
                <x-forms.basic-stacked.column title="Bank Account Number" error="input.account_number">
                    <x-forms.basic-stacked.input-basic wire:model.lazy="input.account_number" type="number"
                                                       placeholder=""></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
                <!-- IFSC Code -->
                <x-forms.basic-stacked.column title="IFSC Code" error="input.ifsc_code">
                    <x-forms.basic-stacked.input-basic wire:model.lazy="input.ifsc_code" type="text"
                                                       placeholder=""></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
            </div>
        </div>

        <div class="space-y-8 sm:space-y-5" x-show="showFeesStructure" x-cloak>
            <!-- HSD Advance -->
            <x-forms.basic-stacked.column title="HSD Advance">
                <x-forms.basic-stacked.row-with-value>{{ $trip->hsd ?? 'Nill' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
            <!-- Cash Advance -->
            <x-forms.basic-stacked.column title="Cash Advance">
                <x-forms.basic-stacked.row-with-value>{{ $trip->cash ?? '0' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
            <!-- Gross Weight -->
            <x-forms.basic-stacked.column title="Gross Weight">
                <x-forms.basic-stacked.row-with-value>{{ $trip->gross_weight ?? 'Not Mentioned' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
            <!-- Tare Weight -->
            <x-forms.basic-stacked.column title="Tare Weight">
                <x-forms.basic-stacked.row-with-value>{{ $trip->tare_weight ?? 'Not Mentioned' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
            <!-- Net Weight -->
            <x-forms.basic-stacked.column title="Net Weight">
                <x-forms.basic-stacked.row-with-value>{{ $trip->net_weight ?? 'Not Mentioned' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
            <!-- Net Weight -->
            <x-forms.basic-stacked.column title="Rate">
                <x-forms.basic-stacked.row-with-value>{{ $trip->rate ?? 'Not Mentioned' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
            <!-- Total Amount -->
            <x-forms.basic-stacked.column title="Total Amount">
                <x-forms.basic-stacked.row-with-value>{{ $trip->total_amount ?? 'Not Mentioned' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>
        @if($trip->getRawOriginal('cash') != null)
            <!-- Cash Percentage -->
                <x-forms.basic-stacked.column title="Cash Adv. Percentage">
                    <x-forms.basic-stacked.input-basic wire:model="input.cash_adv_pct" type="number" placeholder="%"
                                                       class="sm:w-1/6" value="0"></x-forms.basic-stacked.input-basic>
                </x-forms.basic-stacked.column>
                <!-- Cash Percentage Fees -->
                <x-forms.basic-stacked.column title="Cash Adv. Fees">
                    <x-forms.basic-stacked.row-with-value>{{ App\Helper\Helper::rupee_format($input['cash_adv_fees']) ?? '0' }}</x-forms.basic-stacked.row-with-value>
                </x-forms.basic-stacked.column>
        @endif
        <!-- TDS -->
            <div class="space-y-8 sm:space-y-5">
                <x-forms.basic-stacked.column title="TDS Submitted?">
                    <x-forms.basic-stacked.toggle alpineBool="tds_sbm_bool">TDS?</x-forms.basic-stacked.toggle>
                </x-forms.basic-stacked.column>

                <x-forms.basic-stacked.column title="TDS Category" error="input.tax_category_id" x-show="!tds_sbm_bool">
                    <x-forms.basic-stacked.dropdown :array="$tax_categories" arrayKey="section"
                                                    wire:model="input.tax_category_id"
                                                    title="Select a category"></x-forms.basic-stacked.dropdown>
                </x-forms.basic-stacked.column>

                <x-forms.basic-stacked.column title="TDS Fees" x-show="!tds_sbm_bool">
                    <x-forms.basic-stacked.row-with-value>{{ App\Helper\Helper::rupee_format($input["tds"]) ?? '0' }}</x-forms.basic-stacked.row-with-value>
                </x-forms.basic-stacked.column>

                <x-forms.basic-stacked.column title="TDS Soft Copy" error="tds_soft_copy" width="md:w-3/6 sm:w-full"
                                              x-show="tds_sbm_bool" x-cloak>
                    <x-media-library-attachment
                        name="tds_soft_copy"
                        rules="mimes:png,jpeg,pdf|max:10000"
                    />
                </x-forms.basic-stacked.column>
            </div>
            <x-forms.basic-stacked.column title="2PAY Charges" error="input.two_pay">
                <x-forms.basic-stacked.input-basic wire:model.lazy="input.two_pay" type="number" placeholder=""
                                                   value="0"></x-forms.basic-stacked.input-basic>
            </x-forms.basic-stacked.column>

            <x-forms.basic-stacked.column title="Final Payable">
                <x-forms.basic-stacked.row-with-value>{{ App\Helper\Helper::rupee_format($input['final_payable']) ?? '0' }}</x-forms.basic-stacked.row-with-value>
            </x-forms.basic-stacked.column>

        </div>

        <div x-show="onPanSearch" x-cloak>
            <x-forms.basic-stacked.column title="Payment Method" error="input.payment_method_id">
                <x-forms.basic-stacked.dropdown :array="$payment_methods"
                                                wire:model="input.payment_method_id"></x-forms.basic-stacked.dropdown>
            </x-forms.basic-stacked.column>

            <x-forms.basic-stacked.column title="Payment Status" error="input.payment_status_id">
                <x-forms.basic-stacked.dropdown :array="$payment_statuses"
                                                wire:model="input.payment_status_id"></x-forms.basic-stacked.dropdown>
            </x-forms.basic-stacked.column>
        </div>

        <!-- PAN Soft Copy -->
        <x-forms.basic-stacked.column title="Pan Soft Copy" width="md:w-3/6 sm:w-full" x-show="showUploadDocuments"
                                      error="pan_soft_copy" x-cloak>
            <x-media-library-attachment
                name="pan_soft_copy"
                rules="required|mimes:png,jpeg,pdf|max:10000"
            />
        </x-forms.basic-stacked.column>

        <!-- RC Soft Copy -->
        <x-forms.basic-stacked.column title="Vehicle Registration Soft Copy" width="md:w-3/6 sm:w-full"
                                      error="rc_soft_copy"
                                      x-show="showUploadDocuments" x-cloak>
            <x-media-library-attachment
                name="rc_soft_copy"
                rules="mimes:png,jpeg,pdf|max:10000"
            />
        </x-forms.basic-stacked.column>

        <!-- Premium Rate -->
        <x-forms.basic-stacked.column title="Premium Rate" x-show="onPanSearch" error="input.premium_rate" x-cloak>
            <x-forms.basic-stacked.input-basic wire:model.lazy="input.premium_rate" type="number"
                                               placeholder=""></x-forms.basic-stacked.input-basic>
        </x-forms.basic-stacked.column>

        <!-- Final Payabale -->
        <x-forms.basic-stacked.column title="Final Payabale" x-show="onPanSearch" x-cloak>
            <x-forms.basic-stacked.row-with-value>{{ App\Helper\Helper::rupee_format($input['final_payable']) ?? '0' }}</x-forms.basic-stacked.row-with-value>
        </x-forms.basic-stacked.column>
        @error('*') {{ $message }} @enderror
    </x-forms.basic-stacked.form>

    <x-modals.basic color="bg-red-100" title="Payment Failed" desc="The payment could not be added in the database."
                    backTitle="Go back to Payments" link="{{ url('/payments/pending') }}" x-show="showFail" x-cloak>
        <x-slot name="icon">
            <x-svg.cancel-circle/>
        </x-slot>
    </x-modals.basic>
</div>
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush
