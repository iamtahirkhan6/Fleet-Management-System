<form {{ $attributes }}>
    @if(isset($attributes["title"]))
        <div class="p-5 pb-0">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $attributes["title"] }}
            </h3>
            @if(isset($attributes["desc"]))
                <p class="mt-1 text-sm text-gray-500 pb-5">
                    {{ $attributes["desc"] }}
                </p>
            @endif
        </div>
        <div class="px-4 border-b border-gray-200"></div>
    @endif
    <div @if(isset($attributes["topGap"]) && $attributes["topGap"] == "false") class="px-4 py-5 sm:p-6 sm:pt-1" @else
    class="px-4 py-5
    sm:p-6" @endif>
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            {{ $slot }}
        </div>
    </div>
    <div class="px-4 py-4 bg-gray-800 sm:px-6">
        <div class="flex justify-end">
            @if(isset($backLink))
                <a href="{{ $backLink }}"
                   class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ $backLinkTitle }}
                </a>
            @endif
            <button type="submit"
                    class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600
                    border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </div>
    </div>
</form>
