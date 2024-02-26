<div class="w-fit mx-auto order-first sm:order-last">

    {{-- if personal replace (grid-cols-6) with (grid-cols-4) --}}
    <div class="grid  grid-cols-6  flex flex-wrap justify-center mx-auto items-start gap-x-2">

        <x-tooltip-arrow class="col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
            <svg class="h-3 w-3 flex-shrink-0" viewBox="0 0 512 512" fill="currentColor" x="0px" y="0px" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g><path d="M85.333,0h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,234.667,0,196.462,0,149.333v-64C0,38.205,38.205,0,85.333,0z"></path><path d="M362.667,0h64C473.795,0,512,38.205,512,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,38.205,315.538,0,362.667,0z"></path><path d="M85.333,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,512,0,473.795,0,426.667v-64C0,315.538,38.205,277.333,85.333,277.333z"></path><path d="M362.667,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64C512,473.795,473.795,512,426.667,512h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,315.538,315.538,277.333,362.667,277.333z"></path></g>
            </svg>

            <span class="">{{ $notes_count }}</span>
            <x-slot name="text">
                Notes
            </x-slot>
        </x-tooltip-arrow>

        <x-tooltip-arrow class="group relative col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
           <svg class="h-3 w-3 flex-shrink-0" viewBox="0 0 24 24" xml:space="preserve" fill="currentColor">
               <path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path>
           </svg>
            <x-slot name="text">
                Courses
            </x-slot>
            <span class="">{{ $courses_count }}</span>
        </x-tooltip-arrow>

        @if(!is_null($certificates_count))
        <x-tooltip-arrow class="group relative col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
            <svg class="h-3 w-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="m12 16a8 8 0 1 1 8-8 8.009 8.009 0 0 1 -8 8zm0 2a9.938 9.938 0 0 1 -6-2.019v5.519a2.5 2.5 0 0 0 4.062 1.952l1.626-1.3a.5.5 0 0 1 .624 0l1.626 1.3a2.5 2.5 0 0 0 4.062-1.952v-5.519a9.94 9.94 0 0 1 -6 2.019z">
                </path>
            </svg>

            <span class="">{{ $certificates_count }}</span>
            <x-slot name="text">
                certificates
            </x-slot>
        </x-tooltip-arrow>
        @endif

        @if(!is_null($students_count) )
        <x-tooltip-arrow class="group relative col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
            <svg class="h-3 w-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                </path>
            </svg>

            <span class="">{{ $students_count }}</span>
            <x-slot name="text">
                students
            </x-slot>
        </x-tooltip-arrow>
        @endif

        @if(!is_null($connectios_count))
        <x-tooltip-arrow class="group relative col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
            <svg class="h-3 w-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                </path>
            </svg>

            <span class="">{{ $connectios_count }}</span>
            <x-slot name="text">
                Connections
            </x-slot>
        </x-tooltip-arrow>

        @endif

        @if(!is_null($followers_count))
        <x-tooltip-arrow class="group relative col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
            <svg class="h-3 w-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                </path>
            </svg>

            <span class="">{{ $followers_count }}</span>
            <x-slot name="text">
                Followers
            </x-slot>
        </x-tooltip-arrow>
        @endif

        <x-tooltip-arrow class="group relative col-span-2 flex items-center gap-x-1 rounded-full bg-slate-50 hover:bg-slate-100 hover:text-gray-600 px-4 py-2 transition-all">
            <svg class="h-3 w-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" xml:space="preserve">
                <path d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                </path>
            </svg>

            <span class="">{{ $reviews_count }}</span>
            <x-slot name="text">
                reviews
            </x-slot>
        </x-tooltip-arrow>

    </div>
</div>
