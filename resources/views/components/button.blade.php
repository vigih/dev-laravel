@props(['variant' => 'primary', 'size' => 'md', 'disabled' => false, 'href' => null])

@php
    $baseClass = 'inline-flex items-center justify-center font-medium rounded-lg transition-all duration-200 py-2 px-4';

    $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-gray-200 hover:bg-gray-300 text-gray-800',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'outline' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    ];

    $sizes = [
        'sm' => 'px-3 py-1 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-6 py-3 text-lg',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $disabledClass = $disabled ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-md';

    $class = trim("$baseClass $variantClass $sizeClass $disabledClass");
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge([ 'class' => $class, 'disabled' => $disabled ]) }}>
        {{ $slot }}
    </a>
@else
    <button type="button" {{ $attributes->merge([ 'class' => $class, 'disabled' => $disabled ]) }}>
        {{ $slot }}
    </button>
@endif
