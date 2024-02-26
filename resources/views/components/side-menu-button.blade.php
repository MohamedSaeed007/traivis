<!-- Expand/collapse section button -->
<button type="button"
        @click="open = !open"
        class="px-2 py-3
        transition-colors
        hover:bg-gray-50
        bg-white
        text-gray-900
        hover:text-gray-700
        w-full flex items-center justify-between"
        aria-controls="filter-section-mobile-0" aria-expanded="false"
        {{$attributes->except(['text', 'class', 'icon'])}}
>

{{--    @dd($icon)--}}
    {{$slot}}
{{--    <x-dynamic-component :component="$icon"/>--}}
{{--    <x-svg-icons.fi-sr-folder/>--}}
    <span class="font-medium flex-grow text-left {{-- text-gray-900--}}"> {{$text}} </span>
    <span class="ml-6 flex items-center">
                  <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                  <svg class="h-5 w-5" x-show="!open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                       fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                          clip-rule="evenodd"/>
                  </svg>
        <!--
          Collapse icon, show/hide based on section open state.

          Heroicon name: solid/minus-sm
        -->
                  <svg class="h-5 w-5" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                       fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"/>
                  </svg>
                </span>
</button>
