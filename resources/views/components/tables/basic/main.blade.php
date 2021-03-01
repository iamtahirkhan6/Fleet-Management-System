<div {{ $attributes->merge(["class" => "flex flex-col mt-5"]) }}>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
            <div class="overflow-hidden shadow sm:rounded-lg @if(!isset($attributes['noTopBorder'])) border-t-4 border-indigo-400 @endif">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            {{ $columns ?? null }}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        {{ $rows ?? null }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
