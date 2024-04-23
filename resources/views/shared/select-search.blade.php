@php
    $name ??= 'property_id';
    $options ??= $properties;
    $value ??= $properties->pluck('id');
@endphp
<select id="{{ $name }}" name="{{ $name }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected value="">Choose a category</option>
    @foreach ($options as $k => $v)
        <option value="{{ $k }}">
            {{ $v }}
        </option>
    @endforeach

</select>
