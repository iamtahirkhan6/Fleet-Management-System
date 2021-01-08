@if ($avatar)
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-10 h-10 rounded-full" src="{{ $url ?? null }}" alt="{{ $slot ?? null }}">
            </div>
            <div class="ml-4">
                <div class="text-sm font-medium text-gray-900">
                    {{ $slot }}
                </div>
                <div class="text-sm text-gray-500">
                    {{ $val }}
                </div>
            </div>
        </div>
    </td>
@elseif($trueVal != null && $falseVal != null)
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
    <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-500">
                @if($link)
                    <a href="{{ $link }}" {{ $attributes }} class="text-indigo-600 hover:text-indigo-900">{{ $slot }}</a>
                @else
                    @if($money == "true")
                        @if($moneyBool == 0 || $moneyBool == false)
                            <svg class="w-6 h-6 mr-3 text-red-500 transition duration-150 ease-in-out group-hover:text-red-500 group-focus:text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        @else
                            {{ App\Helper\Helper::rupee_format($moneyVal) }}
                        @endif
                    @else
                        @if($colorSlot == true)
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
            </div>
        </td>
@endif
