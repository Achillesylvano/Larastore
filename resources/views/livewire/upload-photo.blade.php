<div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
    <div class="relative flex items-end overflow-hidden h-65 rounded-xl">
        @if ($photo)
            <img class="object-contain w-full h-full mb-4 rounded-lg sm:mb-0 xl:mb-4 2xl:mb-0"
                 src="{{ $photo->temporaryUrl() }}" alt="product picture">
        @else
            <img class="object-contain w-full h-full mb-4 rounded-lg sm:mb-0 xl:mb-4 2xl:mb-0"
                 src="{{ $model->imageUrl() }}" alt="product picture">
        @endif
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
            <input type="file" name="image" class="hidden" id="image" wire:model="photo"/>
        </div>
        <div class="mb-4 text-sm text-red-800 dark:text-red-400" role="alert">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
