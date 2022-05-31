<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button>Create Serie</x-jet-button>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">

        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3 cursor-pointer">
                            <div class="flex space-x-4 content-center">
                                <span>Title</span>
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer">
                            <div class="flex space-x-4 content-center">
                                <span>Date</span>
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer">
                            <div class="flex space-x-4 content-center">
                                <span>Rating</span>
                            </div>
                        </th>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortByColumn('visits')">
                            <div class="flex space-x-4 content-center">
                                <span>Visits</span>
                            </div>
                        </th>
                        <th class="px-4 py-3">Runtime</th>
                        <th class="px-4 py-3">Published</th>
                        <th class="px-4 py-3">Poster</th>
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
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
                </tbody>

            </table>
        </div>
    </div>

</section>
