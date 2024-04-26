<form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')

    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
        <div class="xl:col-start-2 xl:col-span-2 col-auto">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="mb-4 text-xl font-semibold dark:text-white">Update Password</h3>

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-full sm:col-span-full">
                        @include('shared.input', [
                            'label' => 'Current Password',
                            'placeholder' => '',
                            'name' => 'current_password',
                            'type' => 'password',
                        ])
                        @include('shared.input-error', [
                            'messages' => $errors->updatePassword->get('current_password'),
                        ])
                    </div>
                    <div class="col-span-full sm:col-span-full">
                        @include('shared.input', [
                            'label' => 'New Password',
                            'placeholder' => '',
                            'name' => 'password',
                            'type' => 'password',
                        ])
                        @include('shared.input-error', [
                            'messages' => $errors->updatePassword->get('password'),
                        ])

                    </div>
                    <div class="col-span-full sm:col-span-full">
                        @include('shared.input', [
                            'label' => 'Confirm Password',
                            'placeholder' => '',
                            'name' => 'password_confirmation',
                            'type' => 'password',
                        ])
                        @include('shared.input-error', [
                            'messages' => $errors->updatePassword->get('password_confirmation'),
                        ])

                    </div>
                    <div class="col-span-6 sm:col-full">
                        <button type="submit"
                            class="hidden px-3 py-2 mr-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg rounde hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 md:mr-0 md:inline-block">
                            Update
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
