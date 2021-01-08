
<x-description-list.main 
  title="Transaction Information" 
  desc="All the details regarding the transaction is available here.">

  <x-description-list.row :value="$transaction->party->name"           background="bg-gray-50">Party Name</x-description-list.row >
  <x-description-list.row :value="$transaction->bank->acc_name"        background="bg-white">Bank Account Name</x-description-list.row >
  <x-description-list.row :value="$transaction->bank->bank_number"     background="bg-gray-50">Bank Account Number</x-description-list.row >
  <x-description-list.row :value="$transaction->bank->ifsc"            background="bg-white">IFSC Code</x-description-list.row >
  <x-description-list.row :value="$transaction->trip->id"              background="bg-gray-50" link="/parties/{{ $transaction->party->id }}/trips/{{ $transaction->trip->id }}">Trip ID</x-description-list.row >
  <x-description-list.row :value="$transaction->amount"                background="bg-white" amount="true">Amount</x-description-list.row >
  <x-description-list.row :value="$created_at"                         background="bg-gray-50">Time</x-description-list.row >
    
</x-description-list.main>