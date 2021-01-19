<div>
    <x-description-list.main title="Party Information" desc="All the details regarding the party is available here." >

        <x-description-list.row :value="$party->name" background="bg-gray-50">Party Name</x-description-list.row>
        <x-description-list.row :value="$party->vehicles->count()" background="bg-white" link="/parties/{{ $party->id }}/vehicles">Vehicles</x-description-list.row>
        <x-description-list.row :value="$party->bankAccounts->count()" background="bg-gray-50">Bank Accounts</x-description-list.row>
        <x-description-list.row :value="$party->trips->count()" background="bg-white" link="/parties/{{ $party->id }}/trips">Trips</x-description-list.row>

    </x-description-list.main>

    @if ($party->bankAccounts->count() > 0)

        <x-description-list.main title="Bank Accounts" desc="All the bank accounts related to the party is shown here."
            class="my-5">

            <x-tables.basic.main>
                <x-slot name="columns">
                    <x-tables.basic.column>Serial No.</x-tables.basic.column>
                    <x-tables.basic.column>Account Name</x-tables.basic.column>
                    <x-tables.basic.column>Account No.</x-tables.basic.column>
                    <x-tables.basic.column>IFSC Code</x-tables.basic.column>
                </x-slot>

                <x-slot name="rows">
                    @foreach ($party->bankAccounts as $bank_account)
                        <tr>
                            <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                            <x-tables.basic.row>{{ $bank_account->account_name }}</x-tables.basic.row>
                            <x-tables.basic.row>{{ $bank_account->account_number }}</x-tables.basic.row>
                            <x-tables.basic.row>{{ $bank_account->ifsc_code }}</x-tables.basic.row>
                        </tr>
                    @endforeach
                </x-slot>
            </x-tables.basic.main>

        </x-description-list.main>
    @endif

</div>
