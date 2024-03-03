<div {{ $attributes->whereStartsWith('class')->class([
    'relative flex border rounded-lg border-slate-300'
]) }}>
    <span class="absolute top-0 bottom-0 left-0 pl-3 text-gray-500 flex items-center justify-center">$</span>
    <input
        x-data
        x-mask:dynamic="$money($input)"
        {{ $attributes->whereDoesntStartWith('class') }}
        type="text"
        class="py-2 pr-3 pl-7 w-full bg-white block text-gray-800 rounded-lg"
    >
</div>
