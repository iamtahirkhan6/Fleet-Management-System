<div {{ $attributes }}>
    <div>
        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
        <p class="mt-1 text-sm text-gray-500">{{ $desc }}</p>
        <hr class="my-3 sm:w-3/4">
    </div>
    {{ $slot }}
</div>