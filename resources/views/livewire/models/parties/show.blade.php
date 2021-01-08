<x-description-list.main title="Party Information" desc="All the details regarding the party is available here.">

    <x-description-list.row :value="$party->name" background="bg-gray-50">Party Name</x-description-list.row>
    <x-description-list.row :value="$total_vehicles" background="bg-white" link="/parties/{{ $party->id }}/vehicles">Vehicles</x-description-list.row>
    <x-description-list.row :value="$total_bank_accounts" background="bg-gray-50">Bank Accounts</x-description-list.row>
    <x-description-list.row :value="$trips" background="bg-white" link="/parties/{{ $party->id }}/trips">Trips</x-description-list.row>

</x-description-list.main>

@if ($total_bank_accounts > 0)

    <x-description-list.main title="Bank Accounts" desc="All the bank accounts related to the party is shown here.">

        <x-tables.basic.main>
            <x-slot name="columns">
                <x-tables.basic.column>Serial No.</x-tables.basic.column>
                <x-tables.basic.column>Account Name</x-tables.basic.column>
                <x-tables.basic.column>Account No.</x-tables.basic.column>
                <x-tables.basic.column>IFSC Code</x-tables.basic.column>
            </x-slot>

            <x-slot name="rows">
                @foreach ($all_bank_accounts as $bank_account)
                    <tr>
                        <x-tables.basic.row>{{ $loop->iteration }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ $bank_account->acc_name }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ $bank_account->bank_number }}</x-tables.basic.row>
                        <x-tables.basic.row>{{ $bank_account->ifsc }}</x-tables.basic.row>
                    </tr>
                @endforeach
            </x-slot>
        </x-tables.basic.main>

    </x-description-list.main>
@endif
