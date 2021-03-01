<th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50" {{ $attributes }}>
    @if(isset($attributes['clean']) && $attributes['clean'] == "true")
        {{ \App\Helper\Helper::cleanColumnName($slot) }}
    @else
        {{ $slot }}
    @endif
</th>
