<!-- This example requires Tailwind CSS v2.0+ -->
<div id="sortCourses" x-data="{open:false,selected:'Newest', sortOptions:@entangle('sortOptions')}">
  <div class="relative w-48">
    <button type="button" @click="open=true"
      class="relative w-full bg-white border border-gray-300 rounded-full shadow-sm pl-3 pr-10 py-1.5 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm"
      aria-haspopup="listbox" aria-expanded="true" :aria-expanded="open.toString()" aria-labelledby="listbox-label">
      <span class="block truncate"> {{__('Sort by')}} {{ $sortOptions[$sortField]['label'] }}</span>
      <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
        <!-- Heroicon name: solid/selector -->
        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
          aria-hidden="true">
          <path fill-rule="evenodd"
            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    <!--
          Select popover, show/hide based on select state.

          Entering: ""
            From: ""
            To: ""
          Leaving: "transition ease-in duration-100"
            From: "opacity-100"
            To: "opacity-0"
        -->
    <ul x-transition:enter="" x-transition:enter-start="" x-transition:enter-end=""
      x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0" @click.outside="open= false" x-show="open" x-cloak
      class="absolute z-30 z-[99999] mt-1 w-full bg-white shadow-lg max-h-60 rounded-b-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm"
      tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
      <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "text-white bg-traivis-600", Not Highlighted: "text-gray-900"
            -->
      <template x-for="sortOption in sortOptions" :key="index">
        <li
          class="group cursor-pointer hover:text-white hover:bg-traivis-600 text-gray-900 cursor-default select-none relative py-2 pl-8 pr-4"
          id="listbox-option-0" role="option">
          <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
          <span class="font-normal block truncate" x-text="sortOption.label"
            @click="$wire.sortBy(sortOption.id);open= false"></span>
          <!--
                      Checkmark, only display for selected option.

                      Highlighted: "text-white", Not Highlighted: "text-traivis-600"
                    -->
          <span
            class="text-traivis-600 group:hover:text-white group:hover:fill-white absolute inset-y-0 left-0 flex items-center pl-1.5">
            <!-- Heroicon name: solid/check -->
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
              aria-hidden="true">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </li>
      </template>
      <!-- More items... -->
    </ul>
  </div>
</div>