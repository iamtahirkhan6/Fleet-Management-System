<div {{ $attributes }}>
    <div class="mt-2 sm:grid sm:grid-cols-4 sm:gap-4 sm:items-start sm:pt-1">
        <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
            {{ $title }} @if(isset($attributes["required"]) && ($attributes["required"] == "true"))<span class="mt-2
            text-sm text-red-600">*</span>@endif
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-1">
            <div @if($attributes['width']) class="{{ $attributes['width'] }}" @else class="w-full md:w-4/6" @endif>
                {{ $slot }}
                @if($attributes["error"])
                    @error($attributes["error"])<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                @endif
            </div>
        </div>
        {{ (isset($lastColumn)) ? $lastColumn : '' }}
    </div>
</div>
