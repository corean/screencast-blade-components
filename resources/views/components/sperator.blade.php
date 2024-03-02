@props([
    'vertical' => false,
])

<div
    aria-orientation="{{ $vertical ? 'vertical' : 'horizontal' }}"
    role="separator"
    {{ $attributes->class([
    'bg-gray-400',
        'w-[1px] h-full' => $vertical,
        'h-[1px] w-full' => ! $vertical,
    ]) }}"
></div>
