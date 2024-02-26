@props([
    'active'=>null,
    'href'=>'#',
    'sub'=>null,
    'image',
    'text'

])

<div {{ $attributes->class(['col-span-1 flex h-16']) }}>
    <div class="flex w-16 flex-shrink-0 items-center justify-center text-sm font-medium text-gray-500">
        {{$image}}
    </div>
    <div class="flex flex-1 items-center justify-between truncate">
        <div class="flex-1 truncate px-4 py-2 text-sm">
            <a href="#" class="font-bold text-gray-900 hover:text-gray-600 "> {{$text}}</a>
        </div>
    </div>
</div>
