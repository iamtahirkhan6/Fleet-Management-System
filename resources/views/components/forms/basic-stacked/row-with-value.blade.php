<div class="block text-sm font-weight-light sm:mt-px sm:pt-2 @if(str_contains($slot, 'Not Mentioned') || str_contains($slot, 'Nill')) text-red-500 @else text-indigo-500 @endif">
    {{ $slot }}
</div>
