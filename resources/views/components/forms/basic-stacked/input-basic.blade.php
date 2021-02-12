<div>
    <div class="mt-1">
        <input type="text" {{ $attributes->merge(['class' => 'block border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) }} @if(!isset($attributes["width"])) class="w-full" @endif {{ $attributes }}>
    </div>
    @if(isset($desc))<p class="mt-2 text-sm text-gray-500" id="email-description">{{ $desc ?? null }}</p> @endif
</div>
