<form method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
        <div class="col-span-1">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <livewire:upload-user-photo :model="$user"/>
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
