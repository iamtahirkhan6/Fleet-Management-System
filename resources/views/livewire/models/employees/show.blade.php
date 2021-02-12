<x-description-list.main title="Employee Information" desc="All the details regarding the employee is available here.">
    <x-description-list.row :value="$employee->name"                            background="bg-gray-50">Name</x-description-list.row>
    <x-description-list.row :value="$employee->salary"                          background="bg-white">Salary</x-description-list.row>
    <x-description-list.row :value="$employee->designation->name"               background="bg-gray-50">Designation</x-description-list.row>
    <x-description-list.row :value="$employee->office->name"                    background="bg-white">Office</x-description-list.row>
    <x-description-list.row :value="$employee->created_at->format('jS \\of F Y')"     background="bg-gray-50">Created At</x-description-list.row>
</x-description-list.main>
@if($employee->bankAccount)
    <x-description-list.main title="Bank Account" desc="All the available bank details are visible here." class="mt-5">
        <x-description-list.row :value="$employee->bankAccount->account_name"    background="bg-gray-50">Name</x-description-list.row>
        <x-description-list.row :value="$employee->bankAccount->account_number"  background="bg-white">Salary</x-description-list.row>
        <x-description-list.row :value="$employee->bankAccount->ifsc_code"       background="bg-gray-50">Designation</x-description-list.row>
    </x-description-list.main>
@endif
