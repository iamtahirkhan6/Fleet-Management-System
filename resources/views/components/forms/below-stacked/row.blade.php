<div class="mt-6 sm:col-span-6" {{ $attributes }}>
    <label class="block text-sm font-medium text-gray-700">{{ $title ?? null }} @if($attributes["required"]) <span class="text-red-500">*</span> @endif</label>
    <div class="mt-1 sm:w-3/4">
        {{ $slot }}
    </div>
    @if($error)
        @error($error)<p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
    @endif
</div>
