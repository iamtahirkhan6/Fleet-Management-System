@if($attributes["type"] == "button")
    <button type="button" {{ $attributes->merge(['class' => 'inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) }}>
        {{ $slot }}
    </button>
@elseif($attributes["type"] == "link")
    <a @if(isset($attributes["href"])) href="{!! $attributes["href"]  ?? '#' !!}" @endif {{ $attributes->merge(['class' => 'inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-white
bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2
focus:ring-offset-2 focus:ring-indigo-500']) }}>
        {{ $slot }}
    </a>
@else
@endif
