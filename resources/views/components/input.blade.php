@props([
    'type' => 'text',
    'name',
    'placeholder',
])
<input type="{{ $type }}" name="{{ $name }}" value="{{ old('title') }}" placeholder="{{ $placeholder }}"
    class=" shadow-sm bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white  dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
    {{ $attributes->merge(['required']) }}>
