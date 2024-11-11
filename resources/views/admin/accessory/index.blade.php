@extends('base')

@section('content')
    <div class="flex-grow py-10 pt-32 bg-gray-100">
        <div class="container px-6 mx-auto">
            @include('shared.flash')
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="px-3 pt-4 pb-4 bg-white dark:bg-gray-900 ">
                    <a href="{{ route('admin.accessory.create') }}"
                       class="rounde mr-3 hidden bg-blue-700 py-1.5 px-6 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block rounded-lg">
                        Add new accessory
                    </a>
                </div>
                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $accessories as $accessory)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $accessory->brand }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $accessory->status ? 'Nouveau' : 'Occasion' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $accessory->property->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $accessory->formatted_price }}
                            </td>
                            <td class="p-4 space-x-2 whitespace-nowrap">
                                <a href="{{ route('admin.accessory.edit', $accessory) }}"
                                   class="rounde mr-3 hidden bg-blue-700 py-1.5 px-6 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block rounded-lg">
                                    Edit
                                </a>
                                <button data-modal-target="{{ $accessory->id }}"
                                        data-modal-toggle="{{ $accessory->id }}"
                                        class="rounde mr-3 hidden bg-red-700 py-1.5 px-6 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block rounded-lg">
                                    Remove
                                </button>
                                @include('shared.modal', [
                                    'data' => $accessory,
                                    'link' => 'admin.accessory.destroy',
                                ])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $accessories->links() }}
            </div>

        </div>
    </div>
@endsection
