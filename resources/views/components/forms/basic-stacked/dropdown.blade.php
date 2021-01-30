<select class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" {{ $attributes }}>
    <option hidden>{{ $attributes["title"] ?? 'Select an option' }}</option>
    @foreach($array as $key => $each)
        <option value="{{ $each->id ?? $key }}">{{ $each->{$attributes["arrayKey"]} ?? $each->name ?? $each->id ?? ''}}</option>
    @endforeach
</select>
