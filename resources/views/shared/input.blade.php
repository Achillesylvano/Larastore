@php
    $label ??= ucfirst($name);
    $type ??= 'text';
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
    $errorClass =
        ' bg-red-50  border-red-500 dark:border-red-500  placeholder-red-700 focus:ring-red-500 focus:border-red-500';
@endphp

<label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    {{ $label }}
</label>
@if ($type === 'textarea')
    <textarea id="{{ $name }}" rows="4" name="{{ $name }}"
        class="@error($name) {{ $errorClass }}  @enderror
            block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here...">{{ old('description', $value) }}</textarea>
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
@else
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="
                @error($name) {{ $errorClass }}  @enderror dark:border-gray-600 bg-gray-50 border-gray-300
                shadow-sm  border  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="{{ $placeholder }}" required>
@endif
