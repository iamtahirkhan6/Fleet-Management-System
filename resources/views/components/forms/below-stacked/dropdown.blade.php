<select class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" {{ $attributes }} >
    <option hidden>{{ $attributes["title"] }}</option>
    @foreach ($array as $each)
        <option value="{{ $each->id }}">{{ $each->{$attributes["arrayKey"]} ?? $each->name }}</option>
    @endforeach
</select>
