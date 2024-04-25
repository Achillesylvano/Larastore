@extends('base')
@section('content')
    <div class="flex-grow py-10 bg-slate-50">
        <main class="my-8">
            <div class="container px-6 mx-auto">
                @include('shared.flash')
                <div class="mb-4 xl:mb-2 pt-7">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Profile
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
                                        class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">User</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Profile Edit</h1>
                </div>

                <form method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                        <div class="col-span-full xl:col-auto">
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                                    <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0"
                                        src="{{ $user->imageUrl() }}" alt="Jese picture">
                                    <div>
                                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture
                                        </h3>
                                        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                            JPG, GIF or PNG. Max size of 800K
                                        </div>


                                        <div
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <label for="avatar" class="flex">
                                                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                                    </path>
                                                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                                </svg>
                                                Upload picture
                                            </label>
                                            <input type="file" name="avatar" class="hidden" id="avatar" />
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
                                    <div class="col-span-full sm:col-span-full">
                                        @include('shared.input', [
                                            'label' => 'Name',
                                            'name' => 'name',
                                            'value' => $user->name,
                                        ])
                                    </div>
                                    <div class="col-span-full sm:col-span-full">
                                        @include('shared.input', [
                                            'label' => 'Email',
                                            'name' => 'email',
                                            'type' => 'email',
                                            'value' => $user->email,
                                        ])
                                    </div>
                                    <div class="col-span-full sm:col-span-full">
                                        @include('shared.input', [
                                            'label' => 'Current Password',
                                            'placeholder' => '',
                                            'name' => 'current_password',
                                            'type' => 'password',
                                        ])
                                    </div>
                                    <div class="col-span-full sm:col-span-full">
                                        @include('shared.input', [
                                            'label' => 'New Password',
                                            'placeholder' => '',
                                            'name' => 'password',
                                            'type' => 'password',
                                        ])
                                    </div>
                                    <div class="col-span-full sm:col-span-full">
                                        @include('shared.input', [
                                            'label' => 'Confirm Password',
                                            'placeholder' => '',
                                            'name' => 'password_confirmation',
                                            'type' => 'password',
                                        ])
                                    </div>




                                    <div class="col-span-6 sm:col-full">
                                        <button type="submit"
                                            class="hidden px-3 py-2 mr-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg rounde hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block">
                                            Update all
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