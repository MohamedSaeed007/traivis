<div {{ $attributes->class(['relative inline-block text-left']) }} x-data="{openShareMenu:false}">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div>
        <button type="button"
                @click="openShareMenu=true"
                class="
{{--                bg-gray-100 --}}
                rounded-full flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                id="menu-button" aria-expanded="true" aria-haspopup="true">
            <span class="sr-only">Open options</span>
            <x-svg-icons.fi-sr-share class="h-5 w-5 text-traivis-600 "/>
        </button>
    </div>

    <!--
      Dropdown menu, show/hide based on menu state.
  
      Entering: "transition ease-out duration-100"
        From: "transform opacity-0 scale-95"
        To: "transform opacity-100 scale-100"
      Leaving: "transition ease-in duration-75"
        From: "transform opacity-100 scale-100"
        To: "transform opacity-0 scale-95"
    -->
    <div class="
{{--    origin-top-right --}}
    absolute -right-5 mt-2 w-25 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"

         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"

         @click.outside="openShareMenu= false"

         x-show="openShareMenu"
         x-cloak
         role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div class="py-1 flex flex-row-reverse" role="none">
            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0"><x-svg-icons.fi-brands-facebook/></a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-1"><x-svg-icons.fi-brands-twitter/></a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-2"><x-svg-icons.fi-brands-linkedin/></a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-3"><x-svg-icons.fi-brands-whatsapp/></a>
            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-4"><x-svg-icons.fi-brands-telegram/></a>
        </div>
    </div>
</div>
