<a class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm
        text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2
        focus:ring-indigo-500" @if(isset($attributes["href"])) href="{!! $attributes["href"]  ?? '#' !!}"
        @endif {{ $attributes }}>
    <x-svg.view class="h-5 w-5" />
</a>
