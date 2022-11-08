@props(['active'])

@php
$classes = ($active ?? false)
            
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#1e3a8a] text-sm font-medium leading-5 text-white focus:outline-none focus:border-[#0369a1] transition'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-white hover:border-white focus:outline-none focus:text-white focus:border-white transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
