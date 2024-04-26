@php
    $messages ??= '';
@endphp

@if ($messages)
    <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
