<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button>Create Cast</x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3 cursor-pointer">
                            <div class="flex space-x-4 content-center">
                                <span>Name</span>
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer">
                            <div class="flex space-x-4 content-center">
                                <span>Slug</span>
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer">
                            <div class="flex space-x-4 content-center">
                                <span>Poster</span>
                            </div>
                        </th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($casts as $cast)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            <span class="text-blue-500 hover:text-blue-700 cursor-pointer">Title</span>
                        </td>
                        <td class="px-4 py-3 border">Date
                        </td>
                        <td class="px-4 py-3 border">
                        </td>
                        <td class="px-4 py-3 border">
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">
                        </td>
                        <td class="px-4 py-3 text-sm border">
                            Edit/Delete
                        </td>
                    </tr>
                @endforeach
                </tbody>
                {{ $casts->links() }}
            </table>
        </div>
    </div>

</section>
