<div class="flex items-center">
    <div x-data="{ focused: false }">
        <span class="rounded-md shadow-sm">
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file"
                {{ $attributes->except(['text', 'class']) }}>
            <label for="{{ $attributes['id'] }}"
                :class="{ 'outline-none border-traivis-300 shadow-outline-blue': focused }"
                {{ $attributes->only(['class'])->class('-m-2 inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full text-gray-400 hover:text-gray-500') }}>
                {{ $slot }}
            </label>
        </span>
    </div>
</div>
