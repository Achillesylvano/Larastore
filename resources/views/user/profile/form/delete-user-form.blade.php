<div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
    <div class="xl:col-start-2 xl:col-span-2 col-auto">
        <div
            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="text-xl font-semibold dark:text-white">Delete Account</h3>
            <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Once your account is deleted,
                all of its resources and data will be permanently deleted.
                Before deleting your account, please download any data or information that you wish to
                retain.
            </p>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-full">
                    <!-- Modal toggle -->
                    <button type="button" data-modal-target="confirm-user-deletion"
                        data-modal-toggle="confirm-user-deletion"
                        class="hidden px-3 py-2 mr-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg rounde hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 md:mr-0 md:inline-block">
                        Delete user
                    </button>
                    <!-- Main modal -->
                    <div id="confirm-user-deletion" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Delete current user
                                    </h3>
                                    <button type="button"
                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="confirm-user-deletion">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <form method="post" action="{{ route('profile.destroy') }}">
                                        @csrf
                                        @method('delete')
                                        <div>
                                            @include('shared.input', [
                                                'label' => 'Your Password',
                                                'placeholder' => '',
                                                'name' => 'password',
                                                'type' => 'password',
                                            ])
                                            @include('shared.input-error', [
                                                'messages' => $errors->userDeletion->get('current_password'),
                                            ])
                                        </div>
                                        <div class="mt-6 flex justify-end">
                                            <button
                                                data-modal-hide="{{ $errors->userDeletion->get('current_password') ? 'confirm-user-deletion' : '' }}"
                                                type="submit"
                                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                                Delete
                                            </button>
                                            <button data-modal-hide="confirm-user-deletion" type="button"
                                                class="ms-3 inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">No,
                                                cancel</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
