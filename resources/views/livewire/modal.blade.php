<div x-data="{ show: false }" x-cloak x-show="show" x-on:open-modal.window = "show = true"
    x-on:close-modal.window = "show = false" x-on:keydown.escape.window = "show = false" class="fixed z-10 inset-0">
    {{-- gray background --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-200 opacity-40"></div>

    {{-- modal --}}
    <div class="bg-white rounded m-auto fixed inset-0 p-5 max-w-2xl h-80">
        <div class="flex justify-between items-center header bg-gray-200 px-2 h-11 rounded text-blue-700 mb-4">
            <h1 class="text-2xl font-bold">
                {{ $title }}
            </h1>
            <button type="button" x-on:click="$dispatch('close-modal')"
                class="bg-slate-600 text-white px-4 py-1 rounded hover:bg-slate-900 cursor-pointer">X</button>
        </div>
        <div class="body p-2 border-2 border-gray-200 rounded h-[77%]">
            {{ $description }}
        </div>
    </div>
</div>
