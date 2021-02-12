<button type="button" class="inline-flex items-center px-4 py-2 text-base font-medium text-white bg-{{ $color ?? 'yellow' }}-600 border border-transparent rounded-md shadow-sm hover:bg-{{ $color ?? 'yellow' }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $color ?? 'yellow' }}-500">
  {{ $slot }}
</button>
