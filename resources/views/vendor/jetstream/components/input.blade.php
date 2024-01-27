@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300  dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300  dark:focus:ring-gray-600 dark:focus:border-gray-600 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm aria disabled:bg-gray-200 read-only:bg-gray-200 ' . (count($errors->get($attributes['name'])) ? 'border-b-red-300 border-b-2' : '')]) !!}>

@if (count($errors->get($attributes['name'])))

    <ul class="mt-1 text-xs text-red-600 list-none dark:text-red-400">
        @foreach ($errors->get($attributes['name']) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif