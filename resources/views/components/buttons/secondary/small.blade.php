<div {{ $attributes }}>
    @if($attributes["type"] == "button")
        <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white
bg-yellow-600 border border-transparent rounded-md shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
            {{ $slot }}
        </button>
    @elseif($attributes["type"] == "link")
        <a class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white
bg-yellow-600 border border-transparent rounded-md shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2
focus:ring-offset-2 focus:ring-yellow-500" @if(isset($attributes["href"])) href="{!! $attributes["href"]  ?? '#' !!}"
            @endif>
            {{ $slot }}
        </a>
        @else
    @endif
</div>
