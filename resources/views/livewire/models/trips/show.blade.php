<x-description-list.main title="Trip Information" desc="All the details regarding the trip is available here.">
  <x-description-list.row :value="$trip->challan_serial"        background="bg-gray-50">Challan Number</x-description-list.row >
  <x-description-list.row :value="$trip->date->format('d-M-Y')" background="bg-white">Loading Date</x-description-list.row >
  <x-description-list.row :value="$trip->market_vehicle_number ?? $trip->fleetVehicle->number"       background="bg-gray-50">Vehicle Number</x-description-list.row >
  <x-description-list.row :value="$trip->tp_number"             background="bg-white"  >TP Number</x-description-list.row >
  <x-description-list.row :value="$trip->tp_serial"             background="bg-gray-50"  >TP Serial</x-description-list.row >
  <x-description-list.row :value="$trip->gross_weight"          background="bg-white">Gross Weight</x-description-list.row >
  <x-description-list.row :value="$trip->tare_weight"           background="bg-gray-50"  >Tare Weight</x-description-list.row >
  <x-description-list.row :value="$trip->net_weight"            background="bg-white">Net Weight</x-description-list.row >
  <x-description-list.row :value="$trip->rate"                  background="bg-gray-50" amount="true">Rate Per Ton</x-description-list.row >
  <x-description-list.row :value="$trip->hsd_amount"            background="bg-white" amount="true">HSD</x-description-list.row >
  <x-description-list.row :value="$trip->cash_amount_given"     background="bg-gray-50" amount="true">Cash Advance</x-description-list.row >
  <x-description-list.row :value="$trip->two_pay"               background="bg-white" amount="true">2 Pay</x-description-list.row >
  <x-description-list.row :value="$source"                      background="bg-gray-50">Source</x-description-list.row >
  <x-description-list.row :value="$destination"                 background="bg-white">Destination</x-description-list.row >
{{--  <x-description-list.row :value="$trip->txn->amount"           background="bg-gray-50" amount="true" link="/payments/{{ $trip->txn->id }}">Payment</x-description-list.row >--}}
</x-description-list.main>
