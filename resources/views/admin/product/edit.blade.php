@extends('base')

@section('content')
    <div class="flex-grow py-10 bg-slate-50">
        <main class="my-8">
            <div class="container px-6 mx-auto">

                <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                    <div class="mb-4 col-span-full xl:mb-2">
                        <nav class="flex mb-5" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                            </path>
                                        </svg>
                                        Products
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#"
                                            class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">{{ $product->type ? 'Smartphone' : 'Computer' }}</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Product Edit</h1>
                    </div>
                    <!-- Right Content -->
                    <div class="col-span-full xl:col-auto">
                        <div
                            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                                <div class="relative flex items-end h-66 overflow-hidden rounded-xl">
                                    <img class="mb-4 rounded-lg w-full h-full sm:mb-0 xl:mb-4 2xl:mb-0 object-contain"
                                        src="{{ asset('img/phone.webp') }}" alt="product picture">
                                </div>

                                <div>
                                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>
                                    <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                        JPG, GIF or PNG. Max size of 800K
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <button type="button"
                                            class="py-2 px-3 rounde mr-3 hidden bg-blue-700 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block rounded-lg">
                                            Upload picture
                                        </button>
                                        <button type="button"
                                            class="py-2 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-span-2">
                        <div
                            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
                            <form action="#">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Name
                                        </label>
                                        <input type="text" name="first-name" id="first-name"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Huawei P30 Pro" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Status
                                        </label>
                                        <input type="text" name="last-name" id="last-name"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Nouveau" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <input type="text" name="country" id="country"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="smartphone" required>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="zip-code"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input type="number" name="zip-code" id="zip-code"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="100000" required>
                                    </div>
                                    <div class="col-span-full">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Description
                                        </label>
                                        <textarea id="message" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write your thoughts here..."></textarea>
                                    </div>
                                    <div class="col-span-full">
                                        <h4 class="mt-3 text-xl font-semibold">Property</h4>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="address"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Processor</label>
                                        <select id="processors"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach ($processors as $processor)
                                                <option value="{{ $processor }}" @selected(old('processor') == $processor)>
                                                    {{ $processor }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="ram"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ram</label>
                                        <select id="ram"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach ($rams as $ram)
                                                <option value="{{ $ram }}" @selected(old('ram') == $ram)>
                                                    {{ $ram }} Go
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="storage"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Storage</label>
                                        <select id="storage"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach ($storages as $storage)
                                                <option value="{{ $storage }}" @selected(old('storage') == $storage)>
                                                    {{ $storage }} Go
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="size"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size</label>
                                        <select id="size"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @foreach ($sizes as $size)
                                                <option value="{{ $size }}" @selected(old('size') == $size)>
                                                    {{ $size }}"
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-full">
                                        <button type="button"
                                            class="py-2 px-3 rounde mr-3 hidden bg-blue-700 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block rounded-lg">
                                            Save all
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


            </div>
        </main>
    </div>
@endsection
