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
                            @if(is_numeric($value))
                            ₹{{ number_format($value) }}
                            @else
                                {{$value}}
                            @endif
                        @endif
                    @else
                        <x-svg.red-cross />
                    @endif

                @elseif($photo != null)
                    Uploaded
                @else
                    {{ $value ?? null }}
                @endif
            @endif
        @else
            <x-svg.red-cross />
        @endif
    </dd>
</div>
