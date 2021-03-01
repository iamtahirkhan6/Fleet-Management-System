<div @if(isset($attributes['default']) && $attributes['default'] == 'true') {{ $attributes->merge(["class" => "overflow-hidden bg-white shadow sm:rounded-lg"]) }} @else {{ $attributes->merge(["class" => "overflow-hidden bg-white border-t-4 border-indigo-400 shadow sm:rounded-lg"]) }} @endif>
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg font-medium leading-6 text-gray-900">
            {{ $title ?? null }}
        </h3>
        <p class="max-w-2xl mt-1 text-sm text-gray-500">
            {{ $desc ?? null }}
        </p>
    </div>
    <div class="border-t border-gray-200">
        @if(isset($list))
            {{ dd($list) }}
        @else
            <dl>{{ $slot ?? null }}</dl>
        @endif
    </div>
</div>
