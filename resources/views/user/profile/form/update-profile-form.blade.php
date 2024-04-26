<form method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
        <div class="col-span-1">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0" src="{{ $user->imageUrl() }}"
                        alt="Jese picture">
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
                            @include('shared.input-error', [
                                'messages' => $errors->get('avatar'),
                            ])
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
                        @include('shared.input-error', [
                            'messages' => $errors->get('name'),
                        ])
                    </div>
                    <div class="col-span-full sm:col-span-full">
                        @include('shared.input', [
                            'label' => 'Email',
                            'name' => 'email',
                            'type' => 'email',
                            'value' => $user->email,
                        ])
                        @include('shared.input-error', [
                            'messages' => $errors->get('email'),
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
