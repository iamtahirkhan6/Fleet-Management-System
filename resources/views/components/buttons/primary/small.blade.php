<button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white bg-{{ $color ?? 'indigo' }}-600 border border-transparent rounded-md shadow-sm hover:bg-{{ $color ?? 'indigo' }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $color ?? 'indigo' }}-500">
  {{ $slot }}
</button>

