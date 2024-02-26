@props([
    'active' => null,
    'href' => '#',
    'sub' => null,
    'text',
])

<li
    {{ $attributes->class(['col-span-1 flex shadow-sm border-t border-r border-b border-gray-200 h-16' . ($active ? ' bg-gray-100' : '')]) }}>
    <div
        class="@if ($active) border-l-traivis-500 @endif flex w-16 flex-shrink-0 items-center justify-center border-l-2 text-sm font-medium text-gray-500">
        <x-svg-icons.fi-sr-graduation-cap class="h-6 w-6" />
    </div>
    <div class="flex flex-1 items-center justify-between truncate">
        <div class="flex-1 truncate px-4 py-2 text-sm">
            <a href="{{ $href }}"
                class="font-medium text-gray-900 hover:text-gray-600">{{ $text }}</a>
            <p class="text-gray-500">{{ $sub }}</p>
        </div>
        <div class="flex-shrink-0 pr-2">
            <button type="button"
                class="inline-flex h-8 items-center justify-center rounded-full bg-transparent text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="sr-only">Open options</span>
                <x-svg-icons.fi-sr-menu-dots-vertical class="h-5 w-5" />
            </button>
        </div>
    </div>
</li>
