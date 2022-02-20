@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'group bg-' . config('settings.color') . '-50 border-' . config('settings.color') . '-600 text-' . config('settings.color') . '-600 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition'
                : 'group border-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


