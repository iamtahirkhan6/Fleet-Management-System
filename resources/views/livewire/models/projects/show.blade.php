<div>
  <x-description-list.main
    title="Project Information"
    desc="All the details regarding the project is available here.">

      <x-description-list.row :value="$project->name"                   background="bg-gray-50">Project Name</x-description-list.row >
      <x-description-list.row :value="$project->loadingPoint->name"           background="bg-white">Source</x-description-list.row >
      <x-description-list.row :value="$project->unloadingPoint->name"      background="bg-gray-50">Destination</x-description-list.row >
      <x-description-list.row :value="$project->consignee->name"        background="bg-white">Consignee</x-description-list.row >
      <x-description-list.row :value="$project->material->name"         background="bg-gray-50">Material Type</x-description-list.row >
      <x-description-list.row :value="$project->trips->count()"         background="bg-white" link="/projects/{{ $project->id }}/trips">Trips</x-description-list.row >
      <x-description-list.row :value="$project->pendingPayments()"      background="bg-gray-50" link="/payments/pending">Pending Payments</x-description-list.row >
      <x-description-list.row :value="$project->transportVolume()"      background="bg-white">Total Transport volume (in tons)</x-description-list.row >
      @can('payments-read')
          <x-description-list.row :value="$project->workDone()"        background="bg-gray-50" amount="true">Total Work Done</x-description-list.row >
      @endcan

  </x-description-list.main>

  <!-- Actions -->
    @can('trips-create')
      <div class="flex flex-row-reverse mt-5">
        <a href="/projects/{{ $project->id }}/trips/create" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <x-svg.plus-circle /> Add Trip
        </a>
      </div>
    @endcan
</div>
