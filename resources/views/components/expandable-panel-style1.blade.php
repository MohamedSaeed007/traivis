@props(['title', 'initOpen' => false])
<div {{ $attributes->class(['mt-5 border border-gray-200 rounded-lg p-5']) }} x-data="{ open: @js($initOpen) }">
    <div class="flex cursor-pointer" @click="open = !open">
        <div class="mr-5">
            <x-svg-icons.fi-sr-badge-check class="h-5 w-5" />
        </div>
        <div class="flex-grow font-bold">{{ $title }}</div>
        <div class="ml-5">
            <x-svg-icons.fi-sr-caret-right class="h-5 w-5 transition-transform" ::class="open ? 'rotate-90' : 'rotate-0'" />
        </div>
    </div>
    <div class="mt-5" x-show="open" x-cloak x-transition:enter="transition-opacity ease-linear"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">{{ $slot }}</div>
</div>
