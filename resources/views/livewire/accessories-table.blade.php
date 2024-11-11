<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                <div class="flex items-center" wire:click="sortBy('brand')">
                    Name
                    <button
                        class="flex items-center text-sm text-gray-800 mr-1.5">
                        @if($sortDirection === 'asc' && $sortField === 'brand')
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                      d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                        @else
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                      d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                </path>
                            </svg>
                        @endif

                    </button>
                </div>
            </th>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                Date & Time
            </th>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                User
            </th>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                <div class="flex items-center" wire:click="sortBy('price')">
                    Price
                    <button
                        class="flex items-center text-sm text-gray-800 mr-1.5">
                        @if($sortDirection === 'asc' && $sortField === 'price')
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                      d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                        @else
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                      d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                </path>
                            </svg>
                        @endif

                    </button>
                </div>
            </th>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                Category
            </th>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                <div class="flex items-center" wire:click="sortBy('status')">
                    Status
                    <button
                        class="flex items-center text-sm text-gray-800 mr-1.5">
                        @if($sortDirection === 'asc' && $sortField === 'status')
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                      d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                        @else
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                      d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                </path>
                            </svg>
                        @endif

                    </button>
                </div>
            </th>
            <th scope="col"
                class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($accessories as $accessory)
            <tr wire:key="{{ $accessory->id }}">
                <td
                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    <span class="font-semibold">{{ $accessory->brand }}</span>
                </td>
                <td
                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                    {{ $accessory->created_at }}
                </td>
                <td
                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-gray-400">
                    {{ $accessory->user->name }}
                </td>
                <td
                    class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $accessory->formatted_price }}
                </td>
                <td
                    class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                    {{ $accessory->property->category }}
                </td>
                <td class="p-4 whitespace-nowrap">
                    <span @class(['text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 border','bg-green-100 text-green-800 dark:text-green-400 border-green-100 dark:border-green-500' => $accessory->status,
                    'bg-red-100 text-red-800 border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400' => !$accessory->status
                            ]) >{{ $accessory->status ? 'Nouveau' : 'Occasion' }}
                    </span>
                </td>
                <td class="p-4 whitespace-nowrap">
                    <button
                        wire:click="deleteAccessory({{ $accessory->id }})"
                        wire:confirm="Are you sure you want to delete this accessory?"
                        class="rounde mr-3 hidden bg-red-700 py-1.5 px-6 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block rounded-lg">
                        Remove
                    </button>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $accessories->links() }}
</div>
