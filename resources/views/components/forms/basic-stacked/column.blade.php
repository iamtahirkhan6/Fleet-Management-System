<div class="mt-4 space-y-2 sm:mt-1 sm:space-y-2">
    <div class="mt-2 sm:grid sm:grid-cols-4 sm:gap-4 sm:items-start sm:pt-1">
        <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
            {{ $title }}
        </label>
        <div class="mt-1 sm:mt-0 sm:col-span-2">
            <div class="w-2/6">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
