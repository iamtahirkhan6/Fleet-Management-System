<x-description-list.main title="Company Information" desc="All the details regarding the company is available here.">
    <x-description-list.row :value="$company->name"                 background="bg-gray-50">Company Name</x-description-list.row>
    <x-description-list.row :value="$company->projects->count()"    background="bg-white">Projects</x-description-list.row>
    <x-description-list.row :value="$company->offices->count()"     background="bg-gray-50">Offices</x-description-list.row>
    <x-description-list.row :value="$company->employees->count()"    background="bg-white">Employees</x-description-list.row>
    <x-description-list.row :value="$company->pan"                  background="bg-gray-50">PAN</x-description-list.row>
    <x-description-list.row :value="$company->gstin"                background="bg-white">GSTIN</x-description-list.row>
</x-description-list.main>

<x-description-list.main title="Address" desc="View the address of the company." class="mt-5">
    <x-description-list.row :value="$company->address->line_1"      background="bg-gray-50">Address 1</x-description-list.row>
    <x-description-list.row :value="$company->address->line_2"      background="bg-white">Address 2</x-description-list.row>
    <x-description-list.row :value="$company->address->zip"         background="bg-gray-50">Zip</x-description-list.row>
    <x-description-list.row :value="$company->address->city"        background="bg-white">City/Town</x-description-list.row>
    <x-description-list.row :value="$company->address->state"       background="bg-gray-50">State</x-description-list.row>
</x-description-list.main>
