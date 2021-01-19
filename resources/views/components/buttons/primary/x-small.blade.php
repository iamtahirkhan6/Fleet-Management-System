<button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-{{ $color ?? 'indigo' }}-600 hover:bg-{{ $color ?? 'indigo' }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $color ?? 'indigo' }}-500">
  {{ $slot }}
</button>
