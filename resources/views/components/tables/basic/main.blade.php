<div class="flex flex-col mt-5">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
            <div class="overflow-hidden border-t-4 border-indigo-400 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            {{ $columns }}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        {{ $rows }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
