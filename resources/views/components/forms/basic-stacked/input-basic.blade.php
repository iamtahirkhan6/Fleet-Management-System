<input type="text"
       {{ $attributes->merge(['class' => 'block border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) }} @if(!isset($attributes["width"])) class="w-full" @endif {{ $attributes }} />
        @if(isset($desc))<p class="mt-2 text-sm text-gray-500">{{ $desc ?? null }}</p> @endif
