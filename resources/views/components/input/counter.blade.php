<div x-data="{ value : 0 }"
     x-modelable="value"
    {{ $attributes->class(['flex gap-2']) }}
>
    <button
        type="button"
        x-on:click="value++"
        class="border border-gray-600 rounded-full h-8 w-8 flex items-center justify-center hover:bg-gray-100">+</button>
    <button
        type="button"
        x-on:click="value--"
        class="border border-gray-600 rounded-full h-8 w-8 flex items-center justify-center hover:bg-gray-100">-</button>
</div>
