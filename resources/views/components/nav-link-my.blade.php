@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-start pl-2 text-sm font-normal text-purple-800 focus:outline-none focus:border-blue-800 transition duration-150 ease-in-out'
    : 'inline-flex items-start pl-2 text-sm font-normal text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if ($active)
    <i class="fa-solid fa-caret-right pr-1 pt-0.5 text-purple-800"></i>
    @endif
    {{ $slot }}
</a>
