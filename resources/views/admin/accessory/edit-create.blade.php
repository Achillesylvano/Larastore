@extends('base')

@section('content')
    <div class="flex-grow py-10 bg-slate-50">
        <main class="my-8">
            <div class="container px-6 mx-auto">

                <div class="mb-4 xl:mb-2 pt-7">
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
                                    accessorys
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
                                        class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">{{ $accessory->type ? 'Smartphone' : 'Computer' }}</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">accessory Edit</h1>
                </div>

                <form method="POST" enctype="multipart/form-data"
                    action="{{ route($accessory->exists ? 'admin.accessory.update' : 'admin.accessory.store', $accessory) }}">
                    @csrf
                    @method($accessory->exists ? 'PUT' : 'POST')

                    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                        <div class="col-span-full xl:col-auto">
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                                    <div class="relative flex items-end overflow-hidden h-65 rounded-xl">
                                        <img class="object-contain w-full h-full mb-4 rounded-lg sm:mb-0 xl:mb-4 2xl:mb-0"
                                            src="{{ $accessory->imageUrl() }}" alt="accessory picture">
                                    </div>
                                    <div>
                                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Accessory picture
                                        </h3>
                                        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                            JPG, GIF or PNG. Max size of 800K
                                        </div>
                                        <div
                                            class="hidden px-3 py-2 mr-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg rounde hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block">
                                            <label class="m-1 text-white form-label" for="image">Upload picture</label>
                                            <input type="file" name="image" class="hidden" id="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>

                                <div class="grid grid-cols-6 gap-6">
                                    @include('shared.input', [
                                        'label' => 'Name',
                                        'placeholder' => 'Chargeur',
                                        'name' => 'brand',
                                        'value' => $accessory->brand,
                                    ])
                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Status
                                        </label>
                                        <div class="flex">
                                            <div class="flex items-center me-4">
                                                <input id="status" type="radio" value="1" name="status"
                                                    {{ $accessory->exists && $accessory->status === 1 ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="inline-radio"
                                                    class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Nouveau</label>
                                            </div>
                                            <div class="flex items-center me-4">
                                                <input id="status" type="radio" value="0" name="status"
                                                    {{ $accessory->exists && $accessory->status === 0 ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="inline-checked-radio"
                                                    class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Occasion</label>

                                            </div>
                                            @error('status')
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="col-span-6 sm:col-span-3">
                                        @include('shared.select', [
                                            'name' => 'property_id',
                                            'label' => 'Category',
                                            'value' => $accessory->property()->pluck('id'),
                                            'options' => $properties,
                                        ])
                                    </div>
                                    @include('shared.input', [
                                        'label' => 'Price',
                                        'type' => 'number',
                                        'placeholder' => '100000',
                                        'name' => 'price',
                                        'value' => $accessory->price,
                                    ])
                                    <div class="col-span-full">
                                        @include('shared.input', [
                                            'label' => 'Description',
                                            'type' => 'textarea',
                                            'name' => 'description',
                                            'value' => $accessory->description,
                                        ])
                                    </div>

                                    <div class="col-span-6 sm:col-full">
                                        <button type="submit"
                                            class="hidden px-3 py-2 mr-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg rounde hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block">
                                            @if ($accessory->exists)
                                                Update all
                                            @else
                                                Create all
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </main>
    </div>
@endsection
