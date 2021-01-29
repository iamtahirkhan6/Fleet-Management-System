<select
    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" {{ $attributes }}>
    <option hidden>{{ $attributes["title"] }}</option>
    @if(isset($array))
        @forelse ($array as $each)
            <option value="{{ $each->id ?? $each["id"] }}">{{ $each->{$attributes["arrayKey"]} ?? $each[$attributes["arrayKey"]] ?? $each->name ?? $each["name"] }}</option>
        @empty
            <option selected disabled>No Registered Agents</option>>
        @endforelse
    @endif
</select>
