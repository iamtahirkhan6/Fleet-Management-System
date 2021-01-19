<x-description-list.main title="Company Information" desc="All the details regarding the compmany is available here.">

    <x-description-list.row :value="$company->name"                 background="bg-gray-50">Company Name</x-description-list.row>
    <x-description-list.row :value="$company->address"              background="bg-white">Address</x-description-list.row>
    <x-description-list.row :value="$company->city"                 background="bg-gray-50">City</x-description-list.row>
    <x-description-list.row :value="$company->state"                background="bg-white">State</x-description-list.row>
    <x-description-list.row :value="$company->gstin"                background="bg-gray-50">GSTIN</x-description-list.row>
    <x-description-list.row :value="$company->pan"                  background="bg-white">PAN</x-description-list.row>
    <x-description-list.row :value="$company->totalProjects()"     background="bg-gray-50">Projects</x-description-list.row>
    <x-description-list.row :value="$company->totalOffices()"      background="bg-white">Offices</x-description-list.row>
    <x-description-list.row :value="$company->totalEmployees()"    background="bg-gray-50">Employees</x-description-list.row>

</x-description-list.main>
