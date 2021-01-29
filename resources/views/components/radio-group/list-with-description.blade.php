<div>
    <fieldset>
        <legend class="sr-only"> Choose Options </legend>
        <div class="bg-white rounded-md -space-y-px">
            <div @click="{{ $variableOne }} = true, {{ $variableTwo }} = false" :class="{ 'bg-indigo-50 border-indigo-200 z-10': {{ $variableOne }}, 'border-gray-200': !{{ $variableOne }} }" class="relative flex p-4 border rounded-tl-md rounded-tr-md">
                <div class="flex items-center h-5">
                    <input @click="{{ $variableOne }} = true, {{ $variableTwo }} = false" type="radio" x-bind:checked="{{ $variableOne }}" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500" checked> </div>
                <label @click="{{ $variableOne }} = true, {{ $variableTwo }} = false" for="settings-option-0" class="flex flex-col ml-3 cursor-pointer"> <span :class="{ 'text-indigo-900': {{ $variableOne }}, 'text-gray-900': !{{ $variableOne }} }" class="block text-sm font-medium">
                                        {{ $attributes['variableOneTitle'] }}
                                    </span> <span :class="{ 'text-indigo-700': {{ $variableOne }}, 'text-gray-500': !{{ $variableOne }} }" class="block text-sm">
                                        {{ $variableOneDesc }}
                                    </span> </label>
            </div>
            <div x-show="{{ $hidden }}" @click="{{ $variableTwo }} = true, {{ $variableOne }} = false" :class="{ 'bg-indigo-50 border-indigo-200 z-10': {{ $variableTwo }}, 'border-gray-200': !{{
                 $variableTwo }} }" class="relative flex p-4 border border-gray-200">
                <div class="flex items-center h-5">
                    <input @click="{{ $variableTwo }} = true, {{ $variableOne }} = false" type="radio" x-bind:checked="{{ $variableTwo }}" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500"> </div>
                <label @click="{{ $variableTwo }} = true, {{ $variableOne }} = false" class="flex flex-col ml-3
                                cursor-pointer"> <span :class="{ 'text-indigo-7xx00': {{ $variableTwo }}, 'text-gray-500': !{{ $variableTwo }} }" class="block text-sm font-medium">
                                        {{ $attributes['variableTwoTitle'] }}
                    </span> <span :class="{ 'text-indigo-700': {{ $variableTwo }}, 'text-gray-500': !{{ $variableTwo }} }" class="block text-sm">
                                        {{ $variableTwoDesc }}
                    </span> </label>
            </div>
        </div>
    </fieldset>
</div>
