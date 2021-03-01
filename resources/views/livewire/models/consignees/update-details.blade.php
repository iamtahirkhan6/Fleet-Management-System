<div class="grid grid-cols-1 gap-y-10 max-w-8xl mx-auto py-10 sm:px-6 lg:px-8" x-data="">
    <div>@livewire('models.consignees.update-name', ['consignee' => $consignee])</div>
    <div>@livewire('models.consignees.update-address', ['consignee' => $consignee])</div>
    <div>@livewire('models.consignees.update-tax-details', ['consignee' => $consignee])</div>
</div>
