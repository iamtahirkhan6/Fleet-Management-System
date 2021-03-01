<div class="mt-5 overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg font-medium leading-6 text-gray-900">
      Vehicle Information
    </h3>
    <p class="max-w-2xl mt-1 text-sm text-gray-500">
      All the details regarding the vehicle is available here.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
        <x-description-list.row :value="$vehicle->license_plate"           background="bg-gray-50">Vehicle Number</x-description-list.row >
        <x-description-list.row :value="$vehicle->all_trips()"      background="bg-white">Trips</x-description-list.row >

    </dl>
  </div>
</div>

@if($all_parties > 0)
<div class="mt-5 overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg font-medium leading-6 text-gray-900">
        Parties
    </h3>
    <p class="max-w-2xl mt-1 text-sm text-gray-500">
      All the parties related to the vehicle are shown here.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Serial No.
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Party Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Trips
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($parties as $party)
                                <tr>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap">
                                        {{ $party->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $vehicle->trips($party->id) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endif

@if($rc_details)
<div class="mt-5 overflow-hidden bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg font-medium leading-6 text-gray-900">
      Vehicle Information
    </h3>
    <p class="max-w-2xl mt-1 text-sm text-gray-500">
      All the details regarding the vehicle is available here.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
        <x-description-list.row :value="$rc_details->number"            background="bg-gray-50">Vehicle Number</x-description-list.row >
        <x-description-list.row :value="$rc_details->owner_name"        background="bg-white">Owner Name</x-description-list.row >
        <x-description-list.row :value="$rc_details->reg_date"          background="bg-gray-50">Registration Date</x-description-list.row >
        <x-description-list.row :value="$rc_details->model"             background="bg-white">Make / Model</x-description-list.row >
        <x-description-list.row :value="$rc_details->fitness_upto"      background="bg-gray-50">Fitness Upto</x-description-list.row >
        <x-description-list.row :value="$rc_details->insurance_upto"    background="bg-white">Insurance Upto</x-description-list.row >
        <x-description-list.row :value="$rc_details->class"             background="bg-gray-50">Class</x-description-list.row >
        <x-description-list.row :value="$rc_details->chassis_number"    background="bg-white">Chassis Number</x-description-list.row >
        <x-description-list.row :value="$rc_details->engine_number"     background="bg-gray-50">Engine Number</x-description-list.row >
        <x-description-list.row :value="$rc_details->authority"         background="bg-white">Registration Authority</x-description-list.row >
        <x-description-list.row :value="$rc_details->rto_code"          background="bg-gray-50">RTO Code</x-description-list.row >

    </dl>
  </div>
</div>
@endif
