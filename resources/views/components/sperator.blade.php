@props([
    'vertical' => false,
])


@if ($vertical)
    <div {{ $attributes->merge(['class' => 'bg-gray-400 w-[1px] h-full']) }} aria-orientation="vertical" role="separator"></div>
@else
    <div {{ $attributes->merge(['class' => 'bg-gray-400 h-[1px] w-full']) }} aria-orientation="horizontal" role="separator"></div>
@endif
