<x-layout.app>
    <div class="grid gap-8">
        <div class="grid gap-4">
            <h2 class="text-5xl font-extrabold ">Counter</h2>
            <x-sperator />

            <div x-data="{count: 5}" class="grid gap-4">
                <x-input.counter x-model="count"/>

                <div>
                    the current count is <span x-text="count"></span>
                </div>
            </div>
        </div>

        <div class="grid gap-8">
            <h2 class="text-5xl font-extrabold ">Money Input</h2>
            <x-sperator />

            <x-input.money placeholder="0.00" class="!border-red-500"/>
        </div>

        <div class="grid gap-4 my-10">
            <h2 class="text-5xl font-extrabold ">Separator</h2>

            <x-sperator class="bg-blue-500" />

            <div class="flex gap-4">
                Home
                <x-sperator vertical />
                About
                <x-sperator vertical />
                Team
            </div>
        </div>

        <div class="grid gap-4">
            <h2 class="text-5xl font-extrabold ">Card</h2>
            <x-sperator />
            <div class="flex gap-4">
                <x-card heading="not skatboard">
                    <x-slot:heading>
                        <div class="text-2xl font-bold">Sketboards</div>
                    </x-slot:heading>

                    <x-slot name="body">
                        Shop our collection of the best skateboards
                    </x-slot>

                    <x-slot name="footer" col>
                        <button class="bg-gray-300 px-6 py-1.5 w-full rounded-lg hover:bg-gray-400/50 ">Shop Now</button>
                        <button class="bg-gray-300 px-6 py-1.5 w-full rounded-lg hover:bg-gray-400/50 ">Shop Later </button>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>

</x-layout.app>
