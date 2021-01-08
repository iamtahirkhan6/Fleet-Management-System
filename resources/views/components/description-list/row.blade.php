<div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 {{ $background }}">
    <dt class="text-sm font-medium text-gray-500">
        {{ $slot }}
    </dt>
    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        @if($value != null)
            @if($link != null && $amount == null)
                <a href="{{ $link }}" class="text-indigo-600 hover:text-indigo-900">{{ $value }}</a>
            @else
                @if($amount == "true")
                    @if($value > 0)
                        @if($link != null)
                            <a href="{{ $link }}" class="text-indigo-600 hover:text-indigo-900">{{ App\Helper\Helper::rupee_format($value) }}</a>
                        @else
                            ₹{{ number_format($value) }}
                        @endif
                    @else
                        <svg class="w-5 h-5 mr-3 text-red-500 transition duration-150 ease-in-out group-hover:text-red-500 group-focus:text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    @endif
                 
                @else
                    {{ $value }}
                @endif
            @endif
        @else
            <svg class="w-5 h-5 mr-3 text-red-500 transition duration-150 ease-in-out group-hover:text-red-500 group-focus:text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        @endif
    </dd>
</div>