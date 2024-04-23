@extends('base')

@section('content')
    <main class="my-8 pt-20 bg-gray-100">
        <div class="container px-6 mx-auto">

            <div class="bg-white rounded-lg shadow-lg md:flex md:items-center">
                <div class="w-full h-full md:m-10 md:w-1/2 lg:h-96">
                    <img class="object-contain w-full h-full max-w-lg mx-auto rounded-md" src="{{ $accessory->imageUrl() }}"
                        alt="accessory photo" />
                </div>
                <div class="w-full max-w-lg p-8 mx-auto md:ml-8 md:mt-0 md:w-1/2">
                    <h3 class="text-lg text-gray-700 uppercase">{{ $accessory->brand }}</h3>
                    <hr class="my-3" />
                    <div>
                        <div class="py-1 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Etat :
                            </dt>
                            <dd class="mt-1 text-sm font-light text-orange-500 sm:mt-0 sm:col-span-2">
                                {{ $accessory->status ? 'Nouveau' : 'Occasion' }}
                            </dd>
                        </div>

                        <div class="py-1 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Type :
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $accessory->property->category }}
                            </dd>
                        </div>
                        <div class="py-1 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-1">
                            <span class="text-sm font-medium text-gray-500">
                                Prix :
                            </span>
                            <dd class="mt-1 text-sm font-bold text-blue-500 sm:mt-0 sm:col-span-2">
                                ${{ $accessory->price }}
                            </dd>
                        </div>
                    </div>







                    <hr class="my-3" />

                    <div class="mt-3">
                        <label class="text-sm text-gray-700" for="count">Description:</label>
                        <div class="flex items-center mt-1 text-gray-900">
                            <span>{{ $accessory->description }}</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-6">
                        <button
                            class="px-8 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">
                            Order Now
                        </button>
                        <button class="p-2 mx-2 text-gray-600 border rounded-md hover:bg-gray-200 focus:outline-none">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
