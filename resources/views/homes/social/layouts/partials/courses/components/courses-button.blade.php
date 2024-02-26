<!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
<button
        @click="open= !open"
        type="button"
        class="bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500"
        aria-controls="sub-menu-1"
        aria-expanded="false"
        :aria-expanded="open.toString()"
>
    <!-- Heroicon name: outline/users -->
    @isset($isActive)
        <x-dynamic-component :component="$icon"
                             class="mr-3 flex-shrink-0 h-6 w-6 text-traivis group-hover:text-traivis-700"/>
    @else
        <x-dynamic-component :component="$icon"
                             class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
    @endisset
    {{--    @include('homes.social.layouts.partials.svg-icons.'.$icon, ['svgClass'=>'mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500'])--}}

    <span class="flex-1 truncate"> {{$text}} </span>
    <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

    <x-svg-icons.fi-rr-angle-right
            ::class="{'text-gray-400 rotate-90': open, 'text-gray-300': !open }"
            class="ml-3 hidden lg:block flex-shrink-0 h-4 w-4 transform group-hover:text-gray-400 transition-all ease-in-out duration-150"/>

    {{--        <svg--}}
    {{--                :class="{'text-gray-400 rotate-90': open, 'text-gray-300': !open }"--}}
    {{--                class="ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-all ease-in-out duration-150"--}}
    {{--                viewBox="0 0 20 20" aria-hidden="true">--}}
    {{--            <path d="M6 6L14 10L6 14V6Z" fill="currentColor"/>--}}
    {{--        </svg>--}}
</button>
