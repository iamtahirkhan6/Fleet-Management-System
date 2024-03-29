{{-- If Avatar --}}
@if (isset($avatar) && $avatar)
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-10 h-10 rounded-full" src="{{ $url ?? null }}" alt="{{ $slot ?? null }}">
            </div>
            <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                    {{ $slot ?? null }}
                </div>
                <div class="text-sm text-gray-500">
                    {{ $val ?? null }}
                </div>
            </div>
        </div>
    </td>
@elseif(isset($trueVal) && $trueVal != null && isset($falseVal) && $falseVal != null)
    @if($colorToggle == 0)
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                {{ $falseVal }}
            </span>
        </td>
    @else
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                {{ $trueVal }}
            </span>
        </td>
    @endif

@else
    @if(isset($attributes["lessWidth"]) && $attributes["lessWidth"] == true)
        <td {{ $attributes->merge(['class' => 'px-1 py-4 whitespace-nowrap text-sm text-gray-500']) }} >
    @else
        <td {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-nowrap text-sm text-gray-500']) }} >
            @endif
                @if(isset($link) && $link)
                    <a href="{{ $link }}" {{ $attributes }} {{ $attributes->merge(['class' => 'text-indigo-600 hover:text-indigo-900']) }}>{{ $slot }}</a>
                @else
                    @if(isset($money) && $money == "true")
                        @if($moneyBool == 0 || $moneyBool == false)
                            <x-svg.red-cross />
                        @else
                            {{ App\Helper\Helper::rupee_format($moneyVal) }}
                        @endif
                    @elseif(isset($amount) && $amount == "true")
                        @if(isset($amountVal) && $amountVal > 0)
                            {{ App\Helper\Helper::rupee_format($amountVal) }}
                        @else
                            <x-svg.red-cross />
                        @endif
                    @else
                        @if(isset($colorSlot) && $colorSlot == true)
                            @if(($colorSlotVal <= 0))
                                <span class="text-red-500" {{ $attributes }}>{{ $colorSlotVal }}</span>
                            @else
                                <span class="text-green-500" {{ $attributes }}>{{ $colorSlotVal }}</span>
                            @endif
                        @else
                            {{ $slot }}
                        @endif
                    @endif
                @endif
        </td>
@endif
