<section class="container mx-auto p-6 font-mono">
    <div class="w-full flex mb-4 p-2 justify-end">
        <x-jet-button wire:click="showCreateModal">Create Tags</x-jet-button>
    </div>
    {{-- table --}}
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
                        <th class="px-4 py-3">Manage</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($tags as $tag)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                {{ $tag->tag_name }}
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">
                                {{ $tag->slug }}
                            </td>
                            <td class="px-4 py-3 text-sm border">
                                <x-m-button class="bg-green-500 hover:bg-green-700 text-white"
                                    wire:click="showEditModal({{ $tag->id }})">
                                    Edit
                                </x-m-button>
                                <x-m-button wire:click="deleteTag({{ $tag->id }})" class="bg-red-500 hover:bg-red-700 text-white">
                                    Delete
                                </x-m-button>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-gray-700">
                            <td colspan="3" class="px-4 py-3 text-sm border">
                                Kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="showTagModal">
        @if ($tagId)
            <x-slot name="title">Update Tag</x-slot>
        @else
            <x-slot name="title">Create Tag</x-slot>
        @endif
        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">
                                            Tag name
                                        </label>
                                        <input wire:model="tagName" type="text" autocomplete="given-name"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            @if ($tagId)
                <x-m-button wire:click="updateTag" class="mx-2">
                    Update
                </x-m-button>
            @else
                <x-m-button wire:click="createTag" class="mx-2">
                    Create
                </x-m-button>
            @endif
            <x-m-button wire:click="closeTagModal" class="bg-gray-500 hover:bg-gray-800 text-white ">
                Close
            </x-m-button>
        </x-slot>
    </x-jet-dialog-modal>

</section>
