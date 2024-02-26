@props([
'videoSrc'
])

<div {{ $attributes->class(['group relative block overflow-hidden bg-gray-100 focus-within:ring-2
    focus-within:ring-indigo-500 focus-within:ring-offset-2
    focus-within:ring-offset-gray-100 cursor-pointer']) }}
    {{-- @click="$dispatch('vid-modal', { vidModalImgSrc: 'https://picsum.photos/640/480', vidModalImgDesc: '' })"--}}
    @click="$dispatch('vid-modal', { vidModalImgSrc: {{$videoSrc}}, vidModalImgDesc: '' })"
    >
    <x-svg-icons.fi-sr-play
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-auto  z-10 text-white group-hover:opacity-25 transition-opacity" />
    {{-- <svg xmlns="http://www.w3.org/2000/svg" --}} {{--
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-auto  z-10 text-white group-hover:opacity-25 transition-opacity"
        --}} {{-- viewBox="0 0 20 20" fill="currentColor">--}}
        {{--
        <path fill-rule="evenodd" --}} {{--
            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
            --}} {{-- clip-rule="evenodd" />--}}
        {{--
    </svg>--}}
    <img src="https://dummyimage.com/640x360/000/fff.jpg" alt=""
        class="pointer-events-none object-cover group-hover:opacity-75 transition-opacity" />
    <button type="button" class="absolute inset-0 focus:outline-none">
        <span class="sr-only">View details for IMG_4985.HEIC</span>
    </button>
</div>
{{-- <p class="pointer-events-none mt-2 block truncate text-center text-sm font-medium text-gray-900">--}}
    {{-- IMG_4985.HEIC ({{$itemKey}})</p>--}}