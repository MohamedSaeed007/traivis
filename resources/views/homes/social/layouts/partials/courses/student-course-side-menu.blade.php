<!-- Left column (Course Nav) -->

<aside class="absolute z-10 flex-shrink-0 bg-white transition lg:relative">

    <!--Sidebar toggle Button-->
    <button @click="SMopen = ! SMopen"
        :class="SMopen ? 'text-traivis-500 hover:text-gray-500 bg-traivis-50 hover:bg-slate-100 -right-5' :
            'text-gray-500 hover:text-traivis-500 hover:bg-traivis-50 -right-16 shadow-md'"
        class="group absolute bottom-1/2 z-50 block h-fit w-fit translate-y-1/2 rounded-full border border-slate-300 bg-white p-3 transition-all duration-200 focus-within:ring-0 hover:shadow-md">
        <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24" xml:space="preserve">
            <path
                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
            </path>
        </svg>
    </button>
    <!--/ Sidebar toggle Button-->

    <div :class="SMopen ? '' : '-ml-80 opacity-0'"
        class="-ml-0 block flex h-screen w-80 flex-col overflow-y-auto pb-56 opacity-100 transition-all duration-200">
        <!-- left col Header -->
        <div class="group/tr relative">
            <div class="transition-all" :class="TRopen ? 'mb-5' : '-mt-[350px] mb-0'">
                <!--instructor -->
                <div class="flex flex-col items-center">
                    <!--styling-->
                    <div class="h-24 w-full bg-traivis-100"></div>
                    <!--styling-->
                    <!--avatar-->
                    <div class="-mt-20 flex items-end space-x-5">
                        <img class="h-32 w-32 rounded-full ring-4 ring-white drop-shadow-md"
                            src="{{ $maker->avatar }}" alt="">
                    </div>
                    <!--/avatar-->
                    <!--name and rates-->
                    <div>
                        <!--name-->
                        <div class="mt-4 flex min-w-0">
                            <h1 class="truncate text-2xl font-bold text-gray-900">
                                {{ $maker?->name ?? 'Not Found' }}
                            </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="ml-2 w-5 text-traivis-600 shadow-lg">
                                <path
                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                </path>
                            </svg>
                        </div>
                        <!--/name-->
                    </div>
                    <!--/name and rates-->
                    <!--Trainer info-->
                    <div class="mt-5 flex flex-wrap justify-center gap-y-2 px-2">
                        <x-tooltip-arrow direction="down">
                            <button class="group relative mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                                <svg class="mr-2 h-3 w-3" fill="currentColor" viewBox="0 0 24 24"
                                    xml:space="preserve">
                                    <path
                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                    </path>
                                </svg>
                                {{ $makerRating }}
                            </button>
                            <x-slot name="text">
                                <p class="flex justify-center itrms-center gap-x-2">
                                    <span>{{ $makerReviewCount }}</span>
                                    Reviews
                                </p>
                                <div class="flex justify-center gap-1 whitespace-nowrap drop-shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         xml:space="preserve" fill="currentColor"
                                         class="{{ $makerRating >= 1 ? 'text-yellow-500' : 'text-white' }} w-4">
                                            <path
                                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                            </path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         xml:space="preserve" fill="currentColor"
                                         class="{{ $makerRating >= 2 ? 'text-yellow-500' : 'text-white' }} w-4">
                                            <path
                                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                            </path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         xml:space="preserve" fill="currentColor"
                                         class="{{ $makerRating >= 3 ? 'text-yellow-500' : 'text-white' }} w-4">
                                            <path
                                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                            </path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         xml:space="preserve" fill="currentColor"
                                         class="{{ $makerRating >= 4 ? 'text-yellow-500' : 'text-white' }} w-4">
                                            <path
                                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                            </path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         xml:space="preserve" fill="currentColor"
                                         class="{{ $makerRating >= 5 ? 'text-yellow-500' : 'text-white' }} w-4">
                                            <path
                                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                            </path>
                                        </svg>
                                    <div class="ml-2 font-bold">{{ $makerRating }} / 5</div>
                                </div>
                            </x-slot>
                        </x-tooltip-arrow>

                        <x-tooltip-arrow direction="down">
                            <button class="group relative mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                                <svg class="mr-2 h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                                    </path>
                                </svg>
                                {{ $maker->followers->count() }}
                            </button>
                            <x-slot name="text">
                                Followers
                            </x-slot>
                        </x-tooltip-arrow>

                        <x-tooltip-arrow direction="down">
                            <button class="group relative mx-1 inline-flex items-center rounded-full border border-gray-300 bg-gray-100 px-2 py-0.5 text-sm text-gray-500">
                                <svg class="mr-2 h-3 w-3" fill="currentColor" viewBox="0 0 24 24"
                                    xml:space="preserve">
                                    <path
                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                    </path>
                                </svg>
                                {{ $maker->courses->count() }}
                            </button>
                            <x-slot name="text">
                                Courses
                            </x-slot>
                        </x-tooltip-arrow>
                    </div>
                    <!--Trainer info-->
                </div>
                <!--/instructor -->
                <!--vids-->
                <div class="w-80">
                    <ul role="list"
                        class="flex touch-pan-x snap-x snap-mandatory gap-x-0 overflow-hidden overflow-x-scroll py-2.5 sm:gap-x-0">
                        @foreach ($hints as $hint)
                            <li class="scale-75 snap-center">
                                <x-video-container class="w-32 rounded-lg"
                                    video-src="'{{ $hint->getFirstMediaUrl() }}'" />
                                {{-- <div
                                    class="group relative block overflow-hidden bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 cursor-pointer w-28 rounded-lg"
                                    @click="$dispatch('vid-modal', { vidModalImgSrc: {{$hint->getFirstMediaUrl()}}, vidModalImgDesc: '' })">
                                    <x-svg-icons.fi-sr-play
                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-auto  z-10 text-white group-hover:opacity-25 transition-opacity" />
                                    <img src="https://dummyimage.com/640x360/000/fff.jpg" alt=""
                                        class="pointer-events-none object-cover group-hover:opacity-75 transition-opacity">
                                    <button type="button" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">View details for IMG_4985.HEIC</span>
                                    </button>
                                </div> --}}
                            </li>
                        @endforeach
                        <!--- more items -->
                    </ul>
                </div>
                <!--vids-->
            </div>
            <!--instructor toggle Button-->
            <button @click="TRopen = ! TRopen" :class="TRopen ? 'top-[250px]' : 'top-0 duration-500'"
                class="absolute left-36 z-40 block rounded-full border border-gray-300 bg-slate-500 p-1.5 text-white shadow-lg transition-all">
                <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 24 24">
                    <path
                        d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                    </path>
                </svg>
            </button>
            <!--/ instructor toggle Button-->
        </div>
        <!--END left col Header -->
        <!------ left col (Course Structure) ------>
        <div class="h-full">
            <!-------Course Info-------->
            <div
                class="{{ $content == 'course-details' ? 'bg-traivis-50 border-l-traivis-500 text-gray-700' : '' }} border-b border-l-4 border-gray-200 border-l-transparent p-5 text-sm font-medium text-gray-500 transition-colors focus-within:border-l-traivis-500 focus-within:bg-traivis-50 focus-within:text-gray-700 hover:border-l-traivis-500 hover:bg-traivis-50 hover:text-gray-700">
                <a href="" wire:click.prevent="getCourseDetails()"
                    class="flex cursor-pointer items-center">
                    <div class="mr-5">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex-grow py-1 font-bold">Course Info</div>
                </a>
            </div>
            <!-------END Course Info-------->
            <!-------Course Details-------->
            <div class="border-b border-l-4 border-gray-200 border-l-transparent p-5 text-sm font-medium text-gray-500 transition-colors hover:border-l-traivis-500 hover:bg-traivis-50 hover:text-gray-700"
                :class="open ? 'bg-traivis-50 border-l-traivis-500 text-gray-700' : ''"
                x-data="{ open: false }">
                <div class="flex cursor-pointer items-center" @click="open = !open">
                    <a href="section.html" class="mr-5">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                            </path>
                        </svg>
                    </a>
                    <div class="flex-grow py-1 font-bold">Course Content</div>
                    <div class="ml-5">
                        <svg viewBox="0 0 24 24" fill="currentColor"
                            class="h-5 w-5 rotate-0 transition-transform"
                            :class="open ? 'rotate-90' : 'rotate-0'">
                            <path
                                d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!--Course Content -->
                <div class="mt-5" x-show="open" x-transition:enter="transition-opacity ease-linear"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    style="display: none;">
                    @foreach ($course->sections as $section)
                        <!-------Course section-------->
                        <div class="-mx-5 border-b border-l-4 border-gray-200 border-l-transparent p-5 text-sm font-medium text-gray-500 transition-colors hover:border-l-traivis-500 hover:bg-traivis-50 hover:text-gray-700"
                            :class="open ? 'bg-traivis-50 border-l-traivis-500 text-gray-700' : ''"
                            x-data="{ open: false }">
                            <div class="flex cursor-pointer items-center" @click="open = !open">
                                <a href="#" class="mr-5">
                                    <svg fill="currentColor" class="h-5 w-5" height="512"
                                        viewBox="0 0 24 24" width="512">
                                        <path
                                            d="m22.2 2.163a5 5 0 0 0 -4.157-1.069l-1.764.432a4 4 0 0 0 -3.279 3.935v15.467a6.909 6.909 0 0 1 -2 0v-15.467a3.981 3.981 0 0 0 -3.226-3.923l-1.874-.456a5 5 0 0 0 -5.9 4.918v10.793a5 5 0 0 0 4.105 4.919l6.286 1.143a9 9 0 0 0 3.218 0l6.291-1.143a5 5 0 0 0 4.1-4.919v-10.793a4.983 4.983 0 0 0 -1.8-3.837z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="flex-grow py-1 font-bold">{{ $section->section_name }}
                                </div>
                                <div class="ml-5">
                                    <svg viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 rotate-0 transition-transform"
                                        :class="open ? 'rotate-90' : 'rotate-0'">
                                        <path
                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <!--Course Section Content -->
                            <div class="mt-5" x-show="open"
                                x-transition:enter="transition-opacity ease-linear"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition-opacity ease-linear"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0" style="display: none;">
                                @foreach ($section->contents as $content)
                                    <!-- Content -->
                                    <div wire:click.prevent="setContent('{{ $content->id }}')"
                                        class="flex cursor-pointer items-center border-b border-gray-200 p-5 text-sm font-medium text-gray-500 transition-colors hover:text-gray-700">

                                        @switch($content->contentable_type)
                                            @case(App\Models\Lecture::class)
                                                <a href="#" class="mr-5">
                                                    <svg fill="currentColor" class="h-5 w-5"
                                                        xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                        data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            @break

                                            @case(App\Models\Assignment::class)
                                                <a href="#" class="mr-5">
                                                    <svg fill="currentColor" class="h-5 w-5"
                                                        xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                        data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            @break

                                            @case(App\Models\Quiz::class)
                                                <a href="#" class="mr-5">
                                                    <svg fill="currentColor" class="h-5 w-5"
                                                        xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                        data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M12.836,.028C9.361-.202,5.961,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.933,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.951-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.285,.807-2.627,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.786-.81-1.458-1.596-1.596-.605-.107-1.196,.049-1.657,.435-.454,.382-.714,.94-.714,1.532,0,.553-.448,1-1,1s-1-.447-1-1c0-1.185,.521-2.301,1.428-3.063,.908-.762,2.107-1.078,3.289-.874,1.613,.283,2.938,1.607,3.221,3.221,.298,1.699-.509,3.396-2.009,4.223Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            @break
                                        @endswitch

                                        <div class="flex-grow py-1 font-bold">
                                            {{ $content->contentable->title }}</div>
                                    </div>
                                    <!--END Content -->
                                @endforeach
                            </div>
                            <!-- END Course Section Content -->
                        </div>
                        <!-------END Course section-------->
                    @endforeach
                </div>
                <!-- END Course Content -->
            </div>
            <!-------END Course Details-------->
            <!-------Enrolled Connections-------->
            @auth
                <div class="border-b border-l-4 border-gray-200 border-l-transparent p-5 text-sm font-medium text-gray-500 transition-colors hover:border-l-traivis-500 hover:bg-traivis-50 hover:text-gray-700"
                    :class="open ? 'bg-traivis-50 border-l-traivis-500 text-gray-700' : ''"
                    x-data="{ open: false }">
                    <div class="flex cursor-pointer items-center" @click="open = !open">
                        <a href="#" class="mr-5">
                            <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24">
                                <path
                                    d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM5.683,16H1a1,1,0,0,1-1-1A6.022,6.022,0,0,1,5.131,9.084a1,1,0,0,1,1.1,1.266A6.009,6.009,0,0,0,6,12a5.937,5.937,0,0,0,.586,2.57,1,1,0,0,1-.9,1.43ZM17,24H7a1,1,0,0,1-1-1,6,6,0,0,1,12,0A1,1,0,0,1,17,24ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8Zm17,8H18.317a1,1,0,0,1-.9-1.43A5.937,5.937,0,0,0,18,12a6.009,6.009,0,0,0-.236-1.65,1,1,0,0,1,1.105-1.266A6.022,6.022,0,0,1,24,15,1,1,0,0,1,23,16Z">
                                </path>
                            </svg>
                        </a>
                        <!--collapse label-->

                        <div class="flex flex-grow items-center gap-x-3 py-1 font-bold">
                            <span>Enrolled Connections</span>
                            <span
                                class="flex w-fit items-center justify-center rounded-full bg-traivis-500 px-1 py-0.5 text-white">{{ $enrolledConnections->count() }}</span>
                        </div>

                        <!--/collapse label-->
                        <div class="ml-5">
                            <svg viewBox="0 0 24 24" fill="currentColor"
                                class="h-5 w-5 rotate-0 transition-transform"
                                :class="open ? 'rotate-90' : 'rotate-0'">
                                <path
                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Enrolled Connections Content -->
                    <div class="mt-5" x-show="open" x-transition:enter="transition-opacity ease-linear"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-opacity ease-linear"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        style="display: none;">
                        <!--Students List-->
                        @auth
                            <div class="">
                                <ul class="-mx-5 -mb-5 grid grid-cols-1 gap-x-5" role="list">
                                    @foreach ($enrolledConnections as $enrolledConnection)
                                        <li
                                            class="flex w-full cursor-pointer flex-row items-center px-4 py-3 transition-all hover:border-l-4 hover:border-traivis-500 hover:bg-white hover:shadow-md">
                                            <img alt="" class="h-12 w-12 rounded-full bg-cover"
                                                src="{{ $enrolledConnection->avatar }}">
                                            <div class="ml-3 flex-1 space-y-1">
                                                <p
                                                    class="w-32 truncate text-clip whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $enrolledConnection->name }}</p>
                                                <div
                                                    class="group relative w-36 truncate text-clip whitespace-nowrap text-sm text-gray-500">
                                                    <p>Enrolled in
                                                        <span>{{ $enrolledConnection->courses()->whereCourseId($course->id)->first()->pivot->created_at }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a
                                                    href="{{ route('chat-conversations', ['id' => $enrolledConnection->id, 'type' => 'p']) }}">
                                                    <button type="button"
                                                        class="group inline-flex justify-end rounded-full border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 shadow-sm transition-all hover:bg-traivis-500 hover:text-white focus:bg-traivis-500 focus:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                                        <svg class="h-5 w-5 group-hover:hidden group-focus:hidden"
                                                            fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                            data-name="Layer 1" viewBox="0 0 24 24"
                                                            width="512" height="512">
                                                            <path
                                                                d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="hidden h-5 w-5 group-hover:block group-focus:block"
                                                            fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                            data-name="Layer 1" viewBox="0 0 24 24"
                                                            width="512" height="512">
                                                            <path
                                                                d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endauth
                        <!--END Students List-->
                    </div>
                    <!-- END Enrolled Connections Content -->
                </div>
            @endauth
            <!-------END Enrolled Connections-------->
            @if ($enrolled || $isMaker)
                @if (!$isMaker)
                    <!--Sidebar Footer-->
                    <div
                        class="fixed bottom-0 flex h-fit w-80 flex-col justify-center border-t-2 border-slate-100 bg-slate-50 py-3">
                        <!-------Certificates-------->
                        <div wire:click.prevent="$set('content','Certificates')"
                            class="border-b border-l-4 border-gray-200 border-l-transparent p-5 text-sm font-medium text-gray-500 transition-colors focus-within:border-l-traivis-500 focus-within:bg-traivis-50 focus-within:text-gray-700 hover:border-l-traivis-500 hover:bg-traivis-50 hover:text-gray-700">
                            <span class="flex cursor-pointer items-center">
                                <div class="mr-5">
                                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path
                                            d="m12 16a8 8 0 1 1 8-8 8.009 8.009 0 0 1 -8 8zm0 2a9.938 9.938 0 0 1 -6-2.019v5.519a2.5 2.5 0 0 0 4.062 1.952l1.626-1.3a.5.5 0 0 1 .624 0l1.626 1.3a2.5 2.5 0 0 0 4.062-1.952v-5.519a9.94 9.94 0 0 1 -6 2.019z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-grow py-1 font-bold">Certificates</div>
                            </span>
                        </div>
                        <!-------END Certificates-------->
                    </div>
                @endif
            @else
                @if ($user)

                    @if (!$course->isEnrollable())
                        <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                            <div
                                class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                                <p class="font-bold">
                                    No seats available.</p>
                            </div>
                        </div>
                    @else
                        <div
                            class="fixed bottom-0 flex h-fit w-80 flex-col items-center justify-evenly gap-y-5 border-t-4 bg-traivis-50 py-5">
                            <!--Enroll button-->
                            <button type="button"
                                wire:click.prevent="$emit('addToCartEmit',{{ $course->id }})"
                                class="peer z-20 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:scale-110 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path
                                        d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                    </path>
                                </svg>
                                <span class="whitespace-nowrap font-bold">Enroll</span>
                            </button>
                            <!--/Enroll button-->
                            <div
                                class="absolute z-10 flex animate-[ping_1.2s_ease-in_infinite] items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-traivis-500 opacity-50 shadow-sm transition peer-hover:animate-none peer-focus:animate-none">
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path
                                        d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                    </path>
                                </svg>
                                <span class="whitespace-nowrap font-bold">Enroll</span>
                            </div>
                        </div>
                    @endif
                    {{-- @else
                    <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                        <div
                            class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                            <a class="font-bold"
                                href="{{ route('login', ['_redirect_back_to' => request()->fullUrl()]) }}">Login</a>
                        </div>
                    </div> --}}
                @endif
            @endif
            <!--END Sidebar Footer-->
        </div>
        <!--END left col (Course Nav content) -->
    </div>
</aside>
<!--END Left column (Course nav) -->
