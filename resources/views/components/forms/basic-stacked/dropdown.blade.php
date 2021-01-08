<select {{ $attributes }}
    class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <option hidden>{{ $title }}</option>
    @foreach ($array as $each)
        <option value="{{ $each->id }}">{{ $each->name }}</option>
    @endforeach
</select>
