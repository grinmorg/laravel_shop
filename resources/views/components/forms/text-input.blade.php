@props(['type' => 'text', 'value' => '', 'autocomplete' => 'on', 'isError' => false])

<input type="{{ $type }}" value="{{ $value }}" autocomplete="{{ $autocomplete }}" {{ $attributes->class(['border-red-300' => $isError, 'bg-gray-50 border border-gray-300 text-gray-900 sm:text-xl rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5']) }}>
