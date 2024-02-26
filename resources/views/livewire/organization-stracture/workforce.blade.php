 <!-- workforce tab content -->
 <section class="p-2 w-full" x-show="tabs.find(tab => tab.id === 2).active">

    <!-- workforce search & filters -->
    <div class="capitalize">

        <!--form-->
        <form class="w-full flex flex-col items-center justify-center gap-x-3 gap-y-8 mt-8">

            <!--search-->
            <div class="w-full md:w-1/2 flex flex-row items-center justify-center h-fit  ">
                <label class="sr-only" for="wfsearch">Search Workforce</label>
                <div class="relative w-full ">
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-400"
                            fill="currentColor" viewbox="0 0 20 20">
                            <path clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="search" placeholder="Search Workforce"
                        class=" h-10 block bg-white text-gray-800 border border-gray-300 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors    rounded-full w-full"
                        id="wfsearch">
                </div>
            </div>
            <!---->

            <!--filters-->
            <div
                class="w-full md:w-2/3 flex flex-row items-center justify-between gap-x-2 gap-y-4  ">

                <!-- filter positions-->
                <div class="w-1/4 flex flex-row items-center justify-center h-fit  ">
                    <div @click.outside="fopen = false"
                        @keydown.window.escape.stop="fopen = false"
                        aria-labelledby="filter-heading1" class="w-fit relative z-10  "
                        x-data="{ fopen: false }">

                        <h2 class="sr-only" id="filter-heading1">positions</h2>

                        <!--filters button-->
                        <div class=" ">
                            <div class="group mx-auto flex items-center">
                                <button @click="fopen = !fopen" aria-controls="positionF"
                                    aria-expanded="false"
                                    class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit"
                                    type="button">
                                    <svg class="h-5 w-5 mr-2 flex-shrink-0"
                                        fill="currentColor" data-name="Layer 1"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                        </path>
                                    </svg>
                                    Positions
                                </button>
                            </div>
                        </div>

                        <!--filters menu-->
                        <div class="origin-top-right w-fit absolute left-0 lg:right-0 lg:left-auto  p-6 rounded-lg shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            id="positionF" x-show="fopen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-transition:leave-start="transform opacity-100 scale-100">

                            <div class="">
                                <div class="flex flex-row gap-x-8  text-sm">

                                    <fieldset class=" whitespace-nowrap">


                                        <div class="pt-6 space-y-4 ">
                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="myResponse-0" name="myResponse[]"
                                                    type="checkbox" value="Accepted">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="myResponse-0">
                                                    position1 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="myResponse-1" name="myResponse[]"
                                                    type="checkbox" value="Rejected">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="myResponse-1">
                                                    position2 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input checked
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="myResponse-2" name="myResponse[]"
                                                    type="checkbox" value="Pending">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="myResponse-2">
                                                    position3 </label>
                                            </div>

                                        </div>
                                    </fieldset>


                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!---->

                <!-- filter departments-->
                <div class="w-1/4 flex flex-row items-center justify-center h-fit  ">
                    <div @click.outside="fopen = false"
                        @keydown.window.escape.stop="fopen = false"
                        aria-labelledby="filter-heading2" class="w-fit relative z-10  "
                        x-data="{ fopen: false }">

                        <h2 class="sr-only" id="filter-heading2">departments</h2>

                        <!--filters button-->
                        <div class=" ">
                            <div class="group mx-auto flex items-center">
                                <button @click="fopen = !fopen" aria-controls="departF"
                                    aria-expanded="false"
                                    class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit"
                                    type="button">
                                    <svg class="h-5 w-5 mr-2 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 384 512">
                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                        </path>
                                    </svg>
                                    Departments
                                </button>
                            </div>
                        </div>

                        <!--filters menu-->
                        <div class="origin-top-right w-fit absolute left-0 lg:right-0 lg:left-auto  p-6 rounded-lg shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            id="departF" x-show="fopen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-transition:leave-start="transform opacity-100 scale-100">

                            <div class="">
                                <div class="flex flex-row gap-x-8  text-sm">

                                    <fieldset class=" whitespace-nowrap">


                                        <div class="pt-6 space-y-4">
                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="clResponse-0" name="clResponse[]"
                                                    type="checkbox" value="Accepted">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="clResponse-0">
                                                    department1 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="clResponse-1" name="clResponse[]"
                                                    type="checkbox" value="Rejected">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="clResponse-1">
                                                    department2 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input checked
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="clResponse-2" name="clResponse[]"
                                                    type="checkbox" value="Pending">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="clResponse-2">
                                                    department3 </label>
                                            </div>

                                        </div>
                                    </fieldset>



                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!---->

                <!-- filter projects-->
                <div class="w-1/4 flex flex-row items-center justify-center h-fit  ">
                    <div @click.outside="fopen = false"
                        @keydown.window.escape.stop="fopen = false"
                        aria-labelledby="filter-heading3" class="w-fit relative z-10  "
                        x-data="{ fopen: false }">

                        <h2 class="sr-only" id="filter-heading3">projects</h2>

                        <!--filters button-->
                        <div class=" ">
                            <div class="group mx-auto flex items-center">
                                <button @click="fopen = !fopen" aria-controls="projectF"
                                    aria-expanded="false"
                                    class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit"
                                    type="button">
                                    <svg class="h-5 w-5 mr-2 flex-shrink-0"
                                        fill="currentColor" viewBox="0 0 24 24"
                                        width="512" height="512">
                                        <path
                                            d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                        </path>
                                        <path
                                            d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                        </path>
                                        <path
                                            d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                        </path>
                                    </svg>
                                    Projects
                                </button>
                            </div>
                        </div>

                        <!--filters menu-->
                        <div class="origin-top-right w-fit absolute left-0 lg:right-0 lg:left-auto  p-6 rounded-lg shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            id="projectF" x-show="fopen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-transition:leave-start="transform opacity-100 scale-100">

                            <div class="">
                                <div class="flex flex-row gap-x-8  text-sm">

                                    <fieldset class=" whitespace-nowrap">


                                        <div class="pt-6 space-y-4">
                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="status-0" name="status[]"
                                                    type="checkbox" value="Delivered">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="status-0">
                                                    project1 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="status-1" name="status[]"
                                                    type="checkbox" value="Rejected">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="status-1">
                                                    project2 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input checked
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="status-2" name="status[]"
                                                    type="checkbox" value="progress">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="status-2">
                                                    project3 </label>
                                            </div>

                                        </div>
                                    </fieldset>


                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!---->

                <!-- filter branches-->
                <div class="w-1/4 flex flex-row items-center justify-center h-fit  ">
                    <div @click.outside="fopen = false"
                        @keydown.window.escape.stop="fopen = false"
                        aria-labelledby="filter-heading4" class="w-fit relative z-10  "
                        x-data="{ fopen: false }">

                        <h2 class="sr-only" id="filter-heading4">branches</h2>

                        <!--filters button-->
                        <div class=" ">
                            <div class="group mx-auto flex items-center">
                                <button @click="fopen = !fopen" aria-controls="branchF"
                                    aria-expanded="false"
                                    class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit"
                                    type="button">
                                    <svg class="h-5 w-5 mr-2 flex-shrink-0"
                                        fill="currentColor" data-name="Layer 1"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                        </path>
                                    </svg>
                                    Branches
                                </button>
                            </div>
                        </div>

                        <!--filters menu-->
                        <div class="origin-top-right w-fit absolute left-0 lg:right-0 lg:left-auto  p-6 rounded-lg shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            id="branchF" x-show="fopen"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            x-transition:leave-start="transform opacity-100 scale-100">

                            <div class="">
                                <div class="flex flex-row gap-x-8  text-sm">

                                    <fieldset class=" whitespace-nowrap">


                                        <div class="pt-6 space-y-4">
                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="dmode-0" name="dmode[]"
                                                    type="checkbox" value="Live">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="dmode-0">
                                                    bransh1 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="dmode-1" name="dmode[]"
                                                    type="checkbox" value="Recorded">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="dmode-1">
                                                    bransh2 </label>
                                            </div>

                                            <div
                                                class="flex items-center text-base sm:text-sm">
                                                <input checked
                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                    id="dmode-2" name="dmode[]"
                                                    type="checkbox" value="f2f">
                                                <label
                                                    class="ml-3 min-w-0 flex-1 text-gray-600"
                                                    for="dmode-2">
                                                    bransh3 </label>
                                            </div>

                                        </div>
                                    </fieldset>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!---->

            </div>
            <!--END filters-->

            <!--Filter Badges-->
            <div class="w-full flex flex-row flex-wrap items-center justify-evenly gap-4">
                <span
                    class="inline-flex rounded-full items-center py-1 pl-2.5 pr-1 text-sm font-semibold bg-traivis-100 text-traivis-600">
                    Position
                    <button type="button"
                        class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white">
                        <span class="sr-only">Remove Filter</span>
                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                            viewBox="0 0 8 8">
                            <path stroke-linecap="round" stroke-width="1.5"
                                d="M1 1l6 6m0-6L1 7" />
                        </svg>
                    </button>
                </span>

                <span
                    class="inline-flex rounded-full items-center py-1 pl-2.5 pr-1 text-sm font-semibold bg-traivis-100 text-traivis-600">
                    Position
                    <button type="button"
                        class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white">
                        <span class="sr-only">Remove Filter</span>
                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                            viewBox="0 0 8 8">
                            <path stroke-linecap="round" stroke-width="1.5"
                                d="M1 1l6 6m0-6L1 7" />
                        </svg>
                    </button>
                </span>

                <span
                    class="inline-flex rounded-full items-center py-1 pl-2.5 pr-1 text-sm font-semibold bg-traivis-100 text-traivis-600">
                    Position
                    <button type="button"
                        class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white">
                        <span class="sr-only">Remove Filter</span>
                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                            viewBox="0 0 8 8">
                            <path stroke-linecap="round" stroke-width="1.5"
                                d="M1 1l6 6m0-6L1 7" />
                        </svg>
                    </button>
                </span>

                <span
                    class="inline-flex rounded-full items-center py-1 pl-2.5 pr-1 text-sm font-semibold bg-traivis-100 text-traivis-600">
                    Position
                    <button type="button"
                        class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white">
                        <span class="sr-only">Remove Filter</span>
                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                            viewBox="0 0 8 8">
                            <path stroke-linecap="round" stroke-width="1.5"
                                d="M1 1l6 6m0-6L1 7" />
                        </svg>
                    </button>
                </span>

                <span
                    class="inline-flex rounded-full items-center py-1 pl-2.5 pr-1 text-sm font-semibold bg-traivis-100 text-traivis-600">
                    Position
                    <button type="button"
                        class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white">
                        <span class="sr-only">Remove Filter</span>
                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                            viewBox="0 0 8 8">
                            <path stroke-linecap="round" stroke-width="1.5"
                                d="M1 1l6 6m0-6L1 7" />
                        </svg>
                    </button>
                </span>

                <div class=" flex flex-row items-center justify-center h-fit ml-auto ">
                    <button
                        class="w-full font-semibold text-sm text-gray-500 form-input h-10 rounded-full border-gray-300 focus:text-traivis-500 hover:text-traivis-500 hover:border-traivis-500 whitespace-nowrap "
                        type="button">
                        Clear all Filters
                    </button>
                </div>
            </div>
            <!--END Filter Badges-->

        </form>
        <!--END form-->



    </div>


    <!--END workforce search & filters -->



    <!--WF Grid-->
    <div class="">


        <!--View WF -->
        <div @click.outside="stuOpen = false" @keydown.window.escape.stop="stuOpen = false"
            class="flex justify-center" x-data="{ stuOpen: false, addNew: false }">

            <!--Grid Thumbnails-->
            <div
                class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 m-6 gap-6">

                <!--  card -->
                <div @click="stuOpen = !stuOpen"
                    class="group relative flex flex-col h-fit cursor-pointer p-2 pb-0 hover:shadow-xl border-t-2 border-b-2 border-gray-300 hover:bg-traivis-50 bg-white rounded-lg hover:border-traivis-400 transition-all">
                    <div class="text-center capitalize text-gray-500">

                        <!--Card Header-->
                        <div class="flex items-center   text-sm font-semibold py-1 px-2">
                            <!--ID-->
                            <p class="  ">#2121</p>
                            <!--ID-->


                            <!-- dropdown delete button -->
                            <div class="deleteButton ml-auto ">

                                <!-- start dropdown modal brand  -->
                                <div x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                                
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        this.open = false
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']" class="relative">

                                    <!-- Button -->
                                    <button x-ref="button" x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')"
                                        type="button"
                                        class="border-0 capitalize text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-three-dots-vertical"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>

                                    <!-- Panel -->
                                    <div x-ref="panel" x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')" style="display: none;"
                                        class="absolute w-full mt-2 z-20 rounded">
                                        <button
                                            class="flex items-center capitalize bg-gray-200 text-gray-600 font-semibold p-2 rounded hover:bg-white">
                                            <i class="fa fa-trash mr-1"></i>
                                            delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--ُآEND dropdown delete button -->

                        </div>
                        <!--Card Header-->

                        <!--User Avatar-->
                        <img class="w-16 h-16 my-3 mx-auto rounded-full object-cover border border-transparent group-hover:border-gray-300 transition-all"
                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="employee" loading="lazy">
                        <!---->

                        <!--User Name-->
                        <a href="#"
                            class="my-2 text-lg w-full flex justify-center  transition-colors font-semibold text-gray-900">Macauley
                            Herring
                        </a>
                        <!---->

                        <!--User Position-->
                        <div
                            class="w-fit mx-auto flex flex-row items-center space-x-2 justify-center group-hover:text-traivis-500 transition-all">
                            <div class="group/c relative">
                                <svg class="h-3.5 w-3.5 flex-shrink-0" fill="currentColor"
                                    data-name="Layer 1" viewBox="0 0 24 24"
                                    width="512" height="512">
                                    <path
                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                    </path>
                                </svg>
                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/c:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Posetion
                                </span>
                            </div>
                            <div
                                class="group/info relative w-fit whitespace-nowrap inline-flex text-sm font-bold py-0.5 px-2 rounded-full bg-traivis-50 border border-gray-200 group-hover:border-traivis-500  transition-all">
                                Frontend Developer

                                <!--User info tooltip-->
                                <div
                                    class="hidden absolute top-8 p-2 group-hover/info:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-semibold text-xs transition-all">
                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Position</span>
                                        <span class="mx-1 font-bold"> Frontend
                                            Developer</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Depart</span>
                                        <span class="mx-1 font-bold">Depart Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            width="512" height="512">
                                            <path
                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Project</span>
                                        <span class="mx-1 font-bold">Project Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Branch</span>
                                        <span class="mx-1 font-bold">Branch Name</span>
                                    </p>
                                </div>
                                <!--End Tooltip-->
                            </div>

                        </div>
                        <!--End User Position-->


                        <!--Card footer-->
                        <div
                            class="flex items-center justify-between font-bold text-xs py-3 mt-5 border-t-2">
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500">
                                <svg class="h-3 w-3 flex-shrink-0" fill="currentColor"
                                    height="512" viewBox="0 0 24 24" width="512"
                                    data-name="Layer 1">
                                    <path
                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                </svg>
                                <span class="truncate">10 Courses </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    10 Courses
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">contractor </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    contractor
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">Project manager </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Project manager
                                </span>
                            </p>
                        </div>
                        <!---->

                    </div>
                </div>
                <!-- END card -->

                <!--  card -->
                <div @click="stuOpen = !stuOpen"
                    class="group relative flex flex-col h-fit cursor-pointer p-2 pb-0 hover:shadow-xl border-t-2 border-b-2 border-gray-300 hover:bg-traivis-50 bg-white rounded-lg hover:border-traivis-400 transition-all">
                    <div class="text-center capitalize text-gray-500">

                        <!--Card Header-->
                        <div class="flex items-center   text-sm font-semibold py-1 px-2">
                            <!--ID-->
                            <p class="  ">#2121</p>
                            <!--ID-->


                            <!-- dropdown delete button -->
                            <div class="deleteButton ml-auto ">

                                <!-- start dropdown modal brand  -->
                                <div x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                                
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        this.open = false
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']" class="relative">

                                    <!-- Button -->
                                    <button x-ref="button" x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')"
                                        type="button"
                                        class="border-0 capitalize text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-three-dots-vertical"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>

                                    <!-- Panel -->
                                    <div x-ref="panel" x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')" style="display: none;"
                                        class="absolute w-full mt-2 z-20 rounded">
                                        <button
                                            class="flex items-center capitalize bg-gray-200 text-gray-600 font-semibold p-2 rounded hover:bg-white">
                                            <i class="fa fa-trash mr-1"></i>
                                            delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--ُآEND dropdown delete button -->

                        </div>
                        <!--Card Header-->

                        <!--User Avatar-->
                        <img class="w-16 h-16 my-3 mx-auto rounded-full object-cover border border-transparent group-hover:border-gray-300 transition-all"
                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="employee" loading="lazy">
                        <!---->

                        <!--User Name-->
                        <a href="#"
                            class="my-2 text-lg w-full flex justify-center  transition-colors font-semibold text-gray-900">Macauley
                            Herring
                        </a>
                        <!---->

                        <!--User Position-->
                        <div
                            class="w-fit mx-auto flex flex-row items-center space-x-2 justify-center group-hover:text-traivis-500 transition-all">
                            <div class="group/c relative">
                                <svg class="h-3.5 w-3.5 flex-shrink-0" fill="currentColor"
                                    data-name="Layer 1" viewBox="0 0 24 24"
                                    width="512" height="512">
                                    <path
                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                    </path>
                                </svg>
                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/c:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Posetion
                                </span>
                            </div>
                            <div
                                class="group/info relative w-fit whitespace-nowrap inline-flex text-sm font-bold py-0.5 px-2 rounded-full bg-traivis-50 border border-gray-200 group-hover:border-traivis-500  transition-all">
                                Frontend Developer

                                <!--User info tooltip-->
                                <div
                                    class="hidden absolute top-8 p-2 group-hover/info:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-semibold text-xs transition-all">
                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Position</span>
                                        <span class="mx-1 font-bold"> Frontend
                                            Developer</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Depart</span>
                                        <span class="mx-1 font-bold">Depart Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            width="512" height="512">
                                            <path
                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Project</span>
                                        <span class="mx-1 font-bold">Project Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Branch</span>
                                        <span class="mx-1 font-bold">Branch Name</span>
                                    </p>
                                </div>
                                <!--End Tooltip-->
                            </div>

                        </div>
                        <!--End User Position-->


                        <!--Card footer-->
                        <div
                            class="flex items-center justify-between font-bold text-xs py-3 mt-5 border-t-2">
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500">
                                <svg class="h-3 w-3 flex-shrink-0" fill="currentColor"
                                    height="512" viewBox="0 0 24 24" width="512"
                                    data-name="Layer 1">
                                    <path
                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                </svg>
                                <span class="truncate">10 Courses </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    10 Courses
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">contractor </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    contractor
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">Project manager </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Project manager
                                </span>
                            </p>
                        </div>
                        <!---->

                    </div>
                </div>
                <!-- END card -->

                <!--  card -->
                <div @click="stuOpen = !stuOpen"
                    class="group relative flex flex-col h-fit cursor-pointer p-2 pb-0 hover:shadow-xl border-t-2 border-b-2 border-gray-300 hover:bg-traivis-50 bg-white rounded-lg hover:border-traivis-400 transition-all">
                    <div class="text-center capitalize text-gray-500">

                        <!--Card Header-->
                        <div class="flex items-center   text-sm font-semibold py-1 px-2">
                            <!--ID-->
                            <p class="  ">#2121</p>
                            <!--ID-->


                            <!-- dropdown delete button -->
                            <div class="deleteButton ml-auto ">

                                <!-- start dropdown modal brand  -->
                                <div x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                                
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        this.open = false
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']" class="relative">

                                    <!-- Button -->
                                    <button x-ref="button" x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')"
                                        type="button"
                                        class="border-0 capitalize text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-three-dots-vertical"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>

                                    <!-- Panel -->
                                    <div x-ref="panel" x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')" style="display: none;"
                                        class="absolute w-full mt-2 z-20 rounded">
                                        <button
                                            class="flex items-center capitalize bg-gray-200 text-gray-600 font-semibold p-2 rounded hover:bg-white">
                                            <i class="fa fa-trash mr-1"></i>
                                            delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--ُآEND dropdown delete button -->

                        </div>
                        <!--Card Header-->

                        <!--User Avatar-->
                        <img class="w-16 h-16 my-3 mx-auto rounded-full object-cover border border-transparent group-hover:border-gray-300 transition-all"
                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="employee" loading="lazy">
                        <!---->

                        <!--User Name-->
                        <a href="#"
                            class="my-2 text-lg w-full flex justify-center  transition-colors font-semibold text-gray-900">Macauley
                            Herring
                        </a>
                        <!---->

                        <!--User Position-->
                        <div
                            class="w-fit mx-auto flex flex-row items-center space-x-2 justify-center group-hover:text-traivis-500 transition-all">
                            <div class="group/c relative">
                                <svg class="h-3.5 w-3.5 flex-shrink-0" fill="currentColor"
                                    data-name="Layer 1" viewBox="0 0 24 24"
                                    width="512" height="512">
                                    <path
                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                    </path>
                                </svg>
                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/c:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Posetion
                                </span>
                            </div>
                            <div
                                class="group/info relative w-fit whitespace-nowrap inline-flex text-sm font-bold py-0.5 px-2 rounded-full bg-traivis-50 border border-gray-200 group-hover:border-traivis-500  transition-all">
                                Frontend Developer

                                <!--User info tooltip-->
                                <div
                                    class="hidden absolute top-8 p-2 group-hover/info:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-semibold text-xs transition-all">
                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Position</span>
                                        <span class="mx-1 font-bold"> Frontend
                                            Developer</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Depart</span>
                                        <span class="mx-1 font-bold">Depart Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            width="512" height="512">
                                            <path
                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Project</span>
                                        <span class="mx-1 font-bold">Project Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Branch</span>
                                        <span class="mx-1 font-bold">Branch Name</span>
                                    </p>
                                </div>
                                <!--End Tooltip-->
                            </div>

                        </div>
                        <!--End User Position-->


                        <!--Card footer-->
                        <div
                            class="flex items-center justify-between font-bold text-xs py-3 mt-5 border-t-2">
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500">
                                <svg class="h-3 w-3 flex-shrink-0" fill="currentColor"
                                    height="512" viewBox="0 0 24 24" width="512"
                                    data-name="Layer 1">
                                    <path
                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                </svg>
                                <span class="truncate">10 Courses </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    10 Courses
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">contractor </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    contractor
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">Project manager </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Project manager
                                </span>
                            </p>
                        </div>
                        <!---->

                    </div>
                </div>
                <!-- END card -->

                <!--  card -->
                <div @click="stuOpen = !stuOpen"
                    class="group relative flex flex-col h-fit cursor-pointer p-2 pb-0 hover:shadow-xl border-t-2 border-b-2 border-gray-300 hover:bg-traivis-50 bg-white rounded-lg hover:border-traivis-400 transition-all">
                    <div class="text-center capitalize text-gray-500">

                        <!--Card Header-->
                        <div class="flex items-center   text-sm font-semibold py-1 px-2">
                            <!--ID-->
                            <p class="  ">#2121</p>
                            <!--ID-->


                            <!-- dropdown delete button -->
                            <div class="deleteButton ml-auto ">

                                <!-- start dropdown modal brand  -->
                                <div x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                                
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        this.open = false
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']" class="relative">

                                    <!-- Button -->
                                    <button x-ref="button" x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')"
                                        type="button"
                                        class="border-0 capitalize text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-three-dots-vertical"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>

                                    <!-- Panel -->
                                    <div x-ref="panel" x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')" style="display: none;"
                                        class="absolute w-full mt-2 z-20 rounded">
                                        <button
                                            class="flex items-center capitalize bg-gray-200 text-gray-600 font-semibold p-2 rounded hover:bg-white">
                                            <i class="fa fa-trash mr-1"></i>
                                            delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--ُآEND dropdown delete button -->

                        </div>
                        <!--Card Header-->

                        <!--User Avatar-->
                        <img class="w-16 h-16 my-3 mx-auto rounded-full object-cover border border-transparent group-hover:border-gray-300 transition-all"
                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="employee" loading="lazy">
                        <!---->

                        <!--User Name-->
                        <a href="#"
                            class="my-2 text-lg w-full flex justify-center  transition-colors font-semibold text-gray-900">Macauley
                            Herring
                        </a>
                        <!---->

                        <!--User Position-->
                        <div
                            class="w-fit mx-auto flex flex-row items-center space-x-2 justify-center group-hover:text-traivis-500 transition-all">
                            <div class="group/c relative">
                                <svg class="h-3.5 w-3.5 flex-shrink-0" fill="currentColor"
                                    data-name="Layer 1" viewBox="0 0 24 24"
                                    width="512" height="512">
                                    <path
                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                    </path>
                                </svg>
                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/c:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Posetion
                                </span>
                            </div>
                            <div
                                class="group/info relative w-fit whitespace-nowrap inline-flex text-sm font-bold py-0.5 px-2 rounded-full bg-traivis-50 border border-gray-200 group-hover:border-traivis-500  transition-all">
                                Frontend Developer

                                <!--User info tooltip-->
                                <div
                                    class="hidden absolute top-8 p-2 group-hover/info:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-semibold text-xs transition-all">
                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Position</span>
                                        <span class="mx-1 font-bold"> Frontend
                                            Developer</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Depart</span>
                                        <span class="mx-1 font-bold">Depart Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            width="512" height="512">
                                            <path
                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Project</span>
                                        <span class="mx-1 font-bold">Project Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Branch</span>
                                        <span class="mx-1 font-bold">Branch Name</span>
                                    </p>
                                </div>
                                <!--End Tooltip-->
                            </div>

                        </div>
                        <!--End User Position-->


                        <!--Card footer-->
                        <div
                            class="flex items-center justify-between font-bold text-xs py-3 mt-5 border-t-2">
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500">
                                <svg class="h-3 w-3 flex-shrink-0" fill="currentColor"
                                    height="512" viewBox="0 0 24 24" width="512"
                                    data-name="Layer 1">
                                    <path
                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                </svg>
                                <span class="truncate">10 Courses </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    10 Courses
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">contractor </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    contractor
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">Project manager </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Project manager
                                </span>
                            </p>
                        </div>
                        <!---->

                    </div>
                </div>
                <!-- END card -->

                <!--  card -->
                <div @click="stuOpen = !stuOpen"
                    class="group relative flex flex-col h-fit cursor-pointer p-2 pb-0 hover:shadow-xl border-t-2 border-b-2 border-gray-300 hover:bg-traivis-50 bg-white rounded-lg hover:border-traivis-400 transition-all">
                    <div class="text-center capitalize text-gray-500">

                        <!--Card Header-->
                        <div class="flex items-center   text-sm font-semibold py-1 px-2">
                            <!--ID-->
                            <p class="  ">#2121</p>
                            <!--ID-->


                            <!-- dropdown delete button -->
                            <div class="deleteButton ml-auto ">

                                <!-- start dropdown modal brand  -->
                                <div x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                                
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        this.open = false
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']" class="relative">

                                    <!-- Button -->
                                    <button x-ref="button" x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')"
                                        type="button"
                                        class="border-0 capitalize text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16"
                                            fill="currentColor"
                                            class="bi bi-three-dots-vertical"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </button>

                                    <!-- Panel -->
                                    <div x-ref="panel" x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')" style="display: none;"
                                        class="absolute w-full mt-2 z-20 rounded">
                                        <button
                                            class="flex items-center capitalize bg-gray-200 text-gray-600 font-semibold p-2 rounded hover:bg-white">
                                            <i class="fa fa-trash mr-1"></i>
                                            delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--ُآEND dropdown delete button -->

                        </div>
                        <!--Card Header-->

                        <!--User Avatar-->
                        <img class="w-16 h-16 my-3 mx-auto rounded-full object-cover border border-transparent group-hover:border-gray-300 transition-all"
                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="employee" loading="lazy">
                        <!---->

                        <!--User Name-->
                        <a href="#"
                            class="my-2 text-lg w-full flex justify-center  transition-colors font-semibold text-gray-900">Macauley
                            Herring
                        </a>
                        <!---->

                        <!--User Position-->
                        <div
                            class="w-fit mx-auto flex flex-row items-center space-x-2 justify-center group-hover:text-traivis-500 transition-all">
                            <div class="group/c relative">
                                <svg class="h-3.5 w-3.5 flex-shrink-0" fill="currentColor"
                                    data-name="Layer 1" viewBox="0 0 24 24"
                                    width="512" height="512">
                                    <path
                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                    </path>
                                </svg>
                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/c:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Posetion
                                </span>
                            </div>
                            <div
                                class="group/info relative w-fit whitespace-nowrap inline-flex text-sm font-bold py-0.5 px-2 rounded-full bg-traivis-50 border border-gray-200 group-hover:border-traivis-500  transition-all">
                                Frontend Developer

                                <!--User info tooltip-->
                                <div
                                    class="hidden absolute top-8 p-2 group-hover/info:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-semibold text-xs transition-all">
                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Position</span>
                                        <span class="mx-1 font-bold"> Frontend
                                            Developer</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 384 512">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Depart</span>
                                        <span class="mx-1 font-bold">Depart Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            width="512" height="512">
                                            <path
                                                d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                            </path>
                                            <path
                                                d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Project</span>
                                        <span class="mx-1 font-bold">Project Name</span>
                                    </p>

                                    <p class="flex flex-row items-center space-x-2">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0"
                                            fill="currentColor" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                            </path>
                                        </svg>
                                        <span class="truncate text-left w-12">Branch</span>
                                        <span class="mx-1 font-bold">Branch Name</span>
                                    </p>
                                </div>
                                <!--End Tooltip-->
                            </div>

                        </div>
                        <!--End User Position-->


                        <!--Card footer-->
                        <div
                            class="flex items-center justify-between font-bold text-xs py-3 mt-5 border-t-2">
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500">
                                <svg class="h-3 w-3 flex-shrink-0" fill="currentColor"
                                    height="512" viewBox="0 0 24 24" width="512"
                                    data-name="Layer 1">
                                    <path
                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                </svg>
                                <span class="truncate">10 Courses </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    10 Courses
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">contractor </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    contractor
                                </span>
                            </p>
                            <p
                                class="group/d relative w-1/3 px-1 flex flex-row items-center space-x-2 hover:text-traivis-500 group/op">
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                <span class="truncate">Project manager </span>

                                <span
                                    class="hidden absolute whitespace-nowrap top-8 p-2 group-hover/d:block flex flex-col w-fit space-y-2 bg-black text-white rounded-lg font-bold text-xs transition-all">
                                    Project manager
                                </span>
                            </p>
                        </div>
                        <!---->

                    </div>
                </div>
                <!-- END card -->

            </div>
            <!--END Grid Thumbnails-->


            <!--add Employee button-->
            <div @click="stuOpen = !stuOpen
                   addNew=true
               "
                class="fixed group bottom-10 right-10 transition-all ease-in-out duration-500 z-20"
                :class="stuOpen ? 'opacity-0 mr 96' : 'opacity-100 mr-0'">

                <button
                    class="items-center flex flex-col text-traivis-500 ring-0 p-2 transition-colors group-hover:text-gray-500 ">
                    <svg class="h-12 w-12 rounded-lg" fill="currentColor" x="0px"
                        y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve"
                        width="512" height="512">
                        <path
                            d="M256,169.515c17.944,0,32.491-14.547,32.491-32.491S273.944,104.533,256,104.533s-32.491,14.547-32.491,32.491  S238.056,169.515,256,169.515z" />
                        <path
                            d="M426.667,0.016H85.333C37.894,0.391-0.284,39.104,0,86.544V346.17c-0.284,47.443,37.891,86.162,85.333,86.549h62.357  l79.957,68.267c15.838,14.474,40.039,14.686,56.128,0.491l82.027-68.779h60.864c47.442-0.387,85.617-39.106,85.333-86.549V86.544  C512.284,39.104,474.106,0.391,426.667,0.016z M256,64.912c98.453,2.603,98.432,148.843,0,151.467  C157.547,213.754,157.568,67.578,256,64.912z M346.645,367.12c-11.416,2.913-23.032-3.981-25.945-15.397  c-0.013-0.052-0.026-0.103-0.039-0.155c-10.919-35.717-48.726-55.82-84.443-44.901c-21.5,6.573-38.328,23.401-44.901,44.901  c-2.981,11.405-14.643,18.234-26.048,15.253c-11.405-2.981-18.234-14.643-15.253-26.048l0,0  c16.496-58.539,77.324-92.622,135.863-76.126c36.895,10.397,65.729,39.231,76.126,76.126  C364.975,352.281,358.123,364.034,346.645,367.12z" />
                    </svg>
                    <span class="font-bold">+ Employee</span>
                </button>
            </div>
            <!--END add Employee button-->



            <!----- View Card Popup----------->
            <section x-cloak x-show="stuOpen" class="z-[999]"
                x-transition:enter="ease-out duration-100"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

                <div class="fixed z-30 inset-0 overflow-y-auto">
                    <div
                        class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                        <!---over BG---->
                        <div @click="stuOpen = false
                           addNew=false"
                            aria-hidden="true"
                            class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                        </div>
                        <!-- center-->
                        <span aria-hidden="true"
                            class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                        <!---END over BG---->


                        <!-- popup content-->
                        <div
                            class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-2/3 ">
                            <div class="">

                                <div
                                    class="flex flex-col container px-6 mx-auto rounded-lg bg-white w-full">

                                    <!--WF sticky header-->
                                    <div
                                        class="sticky top-0 py-5 bg-white flex flex-row items-center justify-between z-30">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <template x-if="addNew==false">
                                                    <img alt=""
                                                        class="h-10 w-10 rounded-full bg-cover"
                                                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">

                                                </template>
                                                <template x-if="addNew==true">
                                                    <div
                                                        class="h-10 w-10 rounded-full bg-gray-100 flex justify-center text-center items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-5 w-5 items-center text-center"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            version="1.1" id="Capa_1"
                                                            x="0px" y="0px"
                                                            viewBox="0 0 512 512"
                                                            xml:space="preserve"
                                                            width="512" height="512">
                                                            <g>
                                                                <circle cx="256"
                                                                    cy="128"
                                                                    r="128" />
                                                                <path
                                                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z" />
                                                            </g>


                                                        </svg>
                                                    </div>


                                                </template>

                                            </div>

                                            <div class="ml-4">
                                                <a class="whitespace-nowrap font-medium text-gray-900"
                                                    href="#">Lindsay Walton</a>
                                            </div>
                                        </div>

                                        <template x-if="addNew==false"
                                            class="flex flex-row items-center space-x-3">
                                            <div>
                                                <button
                                                    class="group inline-flex justify-end px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 transition-colors  "
                                                    type="button">
                                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white"
                                                        fill="currentColor"
                                                        data-name="Layer 1"
                                                        viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z" />
                                                    </svg>
                                                    <span>Message</span>
                                                </button>

                                                <button
                                                    class="group inline-flex justify-end px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 transition-colors  "
                                                    type="button">
                                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white"
                                                        fill="currentColor"
                                                        viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M19,6V4a4,4,0,0,0-4-4H9A4,4,0,0,0,5,4V6a5.006,5.006,0,0,0-5,5v5a5.006,5.006,0,0,0,5,5,3,3,0,0,0,3,3h8a3,3,0,0,0,3-3,5.006,5.006,0,0,0,5-5V11A5.006,5.006,0,0,0,19,6ZM7,4A2,2,0,0,1,9,2h6a2,2,0,0,1,2,2V6H7ZM17,21a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Zm5-5a3,3,0,0,1-3,3V17a3,3,0,0,0-3-3H8a3,3,0,0,0-3,3v2a3,3,0,0,1-3-3V11A3,3,0,0,1,5,8H19a3,3,0,0,1,3,3Z" />
                                                        <path
                                                            d="M18,10H16a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                                                    </svg>
                                                    <span>Print</span>
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                    <!--END WF sticky header-->


                                    <!--WF summary-->
                                    <template x-if="addNew==false" class="">


                                        <div
                                            class="w-full flex flex-col shadow-dashboard p-5 border bg-traivis-50 text-gray-500 hover:bg-white transition-all rounded-lg items-center">

                                            <div
                                                class="flex md:flex-row flex-col items-center">
                                                <div
                                                    class="p-5 flex flex-col justify-center">
                                                    <span
                                                        class="w-full text-center self-center text-5xl font-bold p-1">
                                                        80<span class="text-3xl"> % </span>
                                                    </span>
                                                    <p
                                                        class="w-full text-center text-3xl p-1">
                                                        Completion
                                                    </p>
                                                </div>

                                                <div
                                                    class="p-5 flex flex-row flex-wrap justify-center gap-3">
                                                    <button
                                                        class="bg-white px-2 cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-traivis-50 hover:text-traivis-600 hover:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 focus-within:border-traivis-600">
                                                        <p class=""> 10 </p>
                                                        <p class="px-2 text-sm"> Assigned
                                                        </p>
                                                    </button>

                                                    <button
                                                        class="bg-white px-2 cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-traivis-50 hover:text-traivis-600 hover:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 focus-within:border-traivis-600">
                                                        <p class=""> 5 </p>
                                                        <p class="px-2 text-sm"> Completed
                                                        </p>
                                                    </button>

                                                    <button
                                                        class="bg-white px-2 cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-traivis-50 hover:text-traivis-600 hover:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 focus-within:border-traivis-600">
                                                        <p class=""> 3 </p>
                                                        <p class="px-2 text-sm"> In progress
                                                        </p>
                                                    </button>

                                                    <button
                                                        class="bg-white px-2 cursor-pointer flex justify-between items-center px-1 py-1 rounded-full border border-gray-300 hover:bg-traivis-50 hover:text-traivis-600 hover:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 focus-within:border-traivis-600">
                                                        <p class=""> 2 </p>
                                                        <p class="px-2 text-sm"> Pending </p>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </template>
                                    <!--END WF summary-->



                                    <!--Collapses-->
                                    <div class="py-6">

                                        <!--details Collapse-->
                                        <div class="text-gray-700 ">

                                            <div class="mt-5 border border-gray-200 rounded-lg"
                                                x-data="{ open: false }">

                                                <div @click="open = !open"
                                                    class="flex cursor-pointer p-5 items-center bg-traivis-50 text-gray-500">
                                                    <div class="mr-5">
                                                        <svg id="Layer_1" class="w-5 h-5"
                                                            fill="currentColor"
                                                            height="512"
                                                            viewBox="0 0 24 24"
                                                            width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m19 4h-4v-1a3 3 0 0 0 -6 0v1h-4a5.006 5.006 0 0 0 -5 5v10a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-10a5.006 5.006 0 0 0 -5-5zm-8-1a1 1 0 0 1 2 0v2a1 1 0 0 1 -2 0zm11 16a3 3 0 0 1 -3 3h-14a3 3 0 0 1 -3-3v-10a3 3 0 0 1 3-3h4.184a2.982 2.982 0 0 0 5.632 0h4.184a3 3 0 0 1 3 3zm-12-9h-5a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-8a1 1 0 0 0 -1-1zm-1 8h-3v-6h3zm11-3a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1zm0-4a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1zm-2 8a1 1 0 0 1 -1 1h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 1 1z" />
                                                        </svg>

                                                    </div>

                                                    <div class="flex-grow font-bold">
                                                        Employee details & Roles
                                                    </div>
                                                    <div class="ml-5">
                                                        <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                            class="w-5 h-5 transition-transform rotate-0"
                                                            fill="currentColor"
                                                            viewbox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="p-5" style="display: none;"
                                                    x-show="open"
                                                    x-transition:enter="transition-opacity ease-linear"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave="transition-opacity ease-linear"
                                                    x-transition:leave-end="opacity-0"
                                                    x-transition:leave-start="opacity-100">

                                                    <!--collapse content-->
                                                    <div class="normal-case p-2 flex flex-row flex-wrap"
                                                        x-data="{ role: '', pop: true, pop2: false, toggle: false, toggle2: false, employee: [{}] }">

                                                        <!--employee basic information-->
                                                        <div
                                                            class="w-full md:w-1/3 whitespace-nowrap mb-5">
                                                            <div
                                                                class="p-1 mb-2 font-bold text-sm text-gray-500">
                                                                Basic Info
                                                            </div>

                                                            <div class="space-y-3 px-3">
                                                                <div
                                                                    class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <input type="text"
                                                                        class="w-full rounded-lg h-10"
                                                                        placeholder="Ismaiel Mahmoud">

                                                                </div>

                                                                <div
                                                                    class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <input type="text"
                                                                        class="w-full rounded-lg h-10"
                                                                        placeholder="ismaiel194@gmail.com">

                                                                </div>

                                                                <div
                                                                    class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <input type="text"
                                                                        class="w-full rounded-lg h-10"
                                                                        placeholder="01010673076">

                                                                </div>

                                                                <div
                                                                    class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <p type="text"
                                                                        class="border-r-0 rounded-lg rounded-r-none h-10 text-sm pr-2 w-1/3">
                                                                        Work id:
                                                                    </p>
                                                                    <input type="text"
                                                                        class="w-full rounded-lg rounded-l-none h-10"
                                                                        placeholder="1255">

                                                                </div>

                                                                <div
                                                                    class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <p type="text"
                                                                        class="border-r-0 rounded-lg rounded-r-none h-10 text-sm pr-2 w-1/3">
                                                                        Traivis id:
                                                                    </p>
                                                                    <input type="text"
                                                                        class="w-full rounded-lg rounded-l-none h-10"
                                                                        placeholder="25">

                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!---->

                                                        <!--employee work information-->
                                                        <div
                                                            class="w-full md:w-1/3 whitespace-nowrap mb-5">
                                                            <div
                                                                class="p-1 mb-2 font-bold text-sm text-gray-500">
                                                                Work info
                                                            </div>

                                                            <div class="space-y-3 px-3">
                                                                <div
                                                                    class="relative group flex items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <svg class="h-5 w-5 mr-3 flex-shrink-0 peer group-focus-within:text-traivis-500"
                                                                        fill="currentColor"
                                                                        data-name="Layer 1"
                                                                        viewBox="0 0 24 24"
                                                                        width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                                                        </path>
                                                                    </svg>
                                                                    <p
                                                                        class="transition-all absolute top-auto left-12 peer-hover:block hidden bg-black text-white rounded-lg px-2 py-0.5">
                                                                        Position
                                                                    </p>
                                                                    <select id="WFposition"
                                                                        x-model="employee.position"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                        <option
                                                                            selected="">
                                                                            Choose a
                                                                            position</option>
                                                                        <option
                                                                            value="US">
                                                                            United
                                                                            States</option>
                                                                        <option
                                                                            value="CA">
                                                                            Canada
                                                                        </option>
                                                                        <option
                                                                            value="FR">
                                                                            France
                                                                        </option>
                                                                        <option
                                                                            value="DE">
                                                                            Germany
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <div
                                                                    class="relative group flex items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <svg class="h-5 w-5 mr-3 flex-shrink-0 peer group-focus-within:text-traivis-500"
                                                                        fill="currentColor"
                                                                        viewBox="0 0 384 512">
                                                                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                        <path
                                                                            d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                                                        </path>
                                                                    </svg>
                                                                    <p
                                                                        class="transition-all absolute top-auto left-12 peer-hover:block hidden bg-black text-white rounded-lg px-2 py-0.5">
                                                                        Department
                                                                    </p>
                                                                    <select id="WFdepartment"
                                                                        x-model="employee.department"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                        <option
                                                                            selected="">
                                                                            Choose a
                                                                            department</option>
                                                                        <option
                                                                            value="US">
                                                                            United
                                                                            States</option>
                                                                        <option
                                                                            value="CA">
                                                                            Canada
                                                                        </option>
                                                                        <option
                                                                            value="FR">
                                                                            France
                                                                        </option>
                                                                        <option
                                                                            value="DE">
                                                                            Germany
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <div
                                                                    class="relative group flex items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <svg class="h-5 w-5 mr-3 flex-shrink-0 peer group-focus-within:text-traivis-500"
                                                                        fill="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                                                        </path>
                                                                        <path
                                                                            d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z">
                                                                        </path>
                                                                        <path
                                                                            d="M.485,8.357l9.984,5.991a2.97,2.97,0,0,0,3.062,0l9.984-5.991a1,1,0,0,0,0-1.714L13.531.652a2.973,2.973,0,0,0-3.062,0L.485,6.643a1,1,0,0,0,0,1.714Z">
                                                                        </path>
                                                                    </svg>
                                                                    <p
                                                                        class="transition-all absolute top-auto left-12 peer-hover:block hidden bg-black text-white rounded-lg px-2 py-0.5">
                                                                        project
                                                                    </p>
                                                                    <select id="WFproject"
                                                                        x-model="employee.project"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                        <option
                                                                            selected="">
                                                                            Choose a
                                                                            project</option>
                                                                        <option
                                                                            value="US">
                                                                            United
                                                                            States</option>
                                                                        <option
                                                                            value="CA">
                                                                            Canada
                                                                        </option>
                                                                        <option
                                                                            value="FR">
                                                                            France
                                                                        </option>
                                                                        <option
                                                                            value="DE">
                                                                            Germany
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <div
                                                                    class="relative group flex items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <svg class="h-5 w-5 mr-3 flex-shrink-0 peer group-focus-within:text-traivis-500"
                                                                        fill="currentColor"
                                                                        data-name="Layer 1"
                                                                        viewBox="0 0 24 24"
                                                                        width="512"
                                                                        height="512">
                                                                        <path
                                                                            d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                                                        </path>
                                                                    </svg>
                                                                    <p
                                                                        class="transition-all absolute top-auto left-12 peer-hover:block hidden bg-black text-white rounded-lg px-2 py-0.5">
                                                                        Bransh
                                                                    </p>
                                                                    <select id="WFbransh"
                                                                        x-model="employee.bransh"
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                        <option
                                                                            selected="">
                                                                            Choose a
                                                                            bransh</option>
                                                                        <option
                                                                            value="US">
                                                                            United
                                                                            States</option>
                                                                        <option
                                                                            value="CA">
                                                                            Canada
                                                                        </option>
                                                                        <option
                                                                            value="FR">
                                                                            France
                                                                        </option>
                                                                        <option
                                                                            value="DE">
                                                                            Germany
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!---->

                                                        <!--employee additional information-->
                                                        <div
                                                            class="w-full md:w-1/3 whitespace-nowrap mb-5">
                                                            <div
                                                                class="p-1 mb-2 font-bold text-sm text-gray-500">
                                                                Role & contract
                                                            </div>

                                                            <!-- Assignments-->
                                                            <div class="space-y-3 px-3">

                                                                <!--Assignments Info-->
                                                                <div
                                                                    class="flex items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <p
                                                                        class="w-1/2 truncate font-semibold text-sm">
                                                                        Manager of
                                                                    </p>
                                                                    <p
                                                                        class="w-1/2 truncate">
                                                                        project1
                                                                    </p>
                                                                </div>

                                                                <div
                                                                    class="flex items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <p
                                                                        class="w-1/2 truncate font-semibold text-sm">
                                                                        Contractor at
                                                                    </p>
                                                                    <p
                                                                        class="w-1/2 truncate">
                                                                        contract name
                                                                    </p>
                                                                </div>
                                                                <!--END Assignments Info-->

                                                                <!--Contractor info-->
                                                                <div
                                                                    class="flex flex-col items-center px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                    <div
                                                                        class="w-full flex-col text-sm">

                                                                        <!-- toggle -->
                                                                        <div
                                                                            class="py-2 space-x-1 flex items-center justify-between">
                                                                            <p
                                                                                class="text-gray-700 font-semibold capitalize">
                                                                                staff
                                                                            </p>
                                                                            <button
                                                                                class="flex items-center transition ease-in-out duration-300 w-10 h-4 bg-gray-200 rounded-full focus:outline-none"
                                                                                :class="{ 'bg-traivis-400': toggle2 }"
                                                                                x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                <div class="transition ease-in-out duration-300 rounded-full h-5 w-5 bg-white shadow border"
                                                                                    :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                </div>
                                                                            </button>
                                                                            <p
                                                                                class="text-gray-700 font-semibold capitalize">
                                                                                contractor
                                                                            </p>
                                                                        </div>
                                                                        <!--END toggle  -->

                                                                        <!-- dropdown assign as !? -->
                                                                        <div
                                                                            class="assignRoleAs">

                                                                            <!-- start dropdown modal brand  -->
                                                                            <div x-data="{
                                                                                open: false,
                                                                                toggle() {
                                                                                    if (this.open) {
                                                                                        return this.close()
                                                                                    }
                                                                            
                                                                                    this.open = true
                                                                                },
                                                                                close(focusAfter) {
                                                                                    this.open = false
                                                                                    focusAfter && focusAfter.focus()
                                                                                }
                                                                            }"
                                                                                x-on:keydown.escape.prevent.stop="close($refs.button)"
                                                                                x-id="['dropdown-button']"
                                                                                class="relative">
                                                                            </div>
                                                                        </div>
                                                                        <!-- END dropdown assign as !? -->

                                                                        <!--Contractor Select / add-->
                                                                        <template
                                                                            x-if="toggle2 == true ">
                                                                            <div x-show="pop"
                                                                                class="w-full flex flex-row items-start space-x-2">

                                                                                <!--Select -->
                                                                                <div
                                                                                    class="w-2/3 space-y-2">
                                                                                    <select
                                                                                        id="projectes2 h-10"
                                                                                        x-model="employee.project"
                                                                                        class="truncate bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                                        <option
                                                                                            selected="">
                                                                                            contractor
                                                                                            name
                                                                                        </option>
                                                                                        <option
                                                                                            value="US">
                                                                                            United
                                                                                            States
                                                                                        </option>
                                                                                        <option
                                                                                            value="CA">
                                                                                            Canada
                                                                                        </option>
                                                                                        <option
                                                                                            value="FR">
                                                                                            France
                                                                                        </option>
                                                                                        <option
                                                                                            value="DE">
                                                                                            Germany
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <!--END Select -->


                                                                                <!--Add New! Button-->
                                                                                <div
                                                                                    class="w-1/3 h-10 flex items-center">
                                                                                    <button
                                                                                        @click="pop = false , pop2=true"
                                                                                        class="   transition inline-flex items-center px-3.5 py-2.5 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-traivis-500 text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                                                                        + New!
                                                                                    </button>
                                                                                </div>
                                                                                <!--END Add New! Button-->

                                                                            </div>
                                                                        </template>
                                                                        <!--END Contractor Select / add-->

                                                                        <!--Add New Contractor-->
                                                                        <template
                                                                            x-if="toggle2 == true ">
                                                                            <div x-show="pop2"
                                                                                class="w-full">

                                                                                <div
                                                                                    class="flex flex-col py-1 gap-y-3">
                                                                                    <input
                                                                                        type="text"
                                                                                        x-model="employee.Contructor.name"
                                                                                        placeholder="Contructor Name"
                                                                                        class="w-full h-10 px-2 rounded-lg text-sm">

                                                                                    <input
                                                                                        type="email"
                                                                                        type="text"
                                                                                        x-model="employee.Contructor.email"
                                                                                        placeholder="Email"
                                                                                        class="w-full h-10 px-2 rounded-lg text-sm">

                                                                                    <input
                                                                                        type="tel"
                                                                                        type="text"
                                                                                        x-model="employee.Contructor.phone"
                                                                                        placeholder="Phone"
                                                                                        class="w-full h-10 px-2 rounded-lg text-sm">

                                                                                    <input
                                                                                        type="url"
                                                                                        type="text"
                                                                                        x-model="employee.Contructor.website"
                                                                                        placeholder="Website"
                                                                                        class="w-full h-10 px-2 rounded-lg text-sm">
                                                                                </div>

                                                                            </div>
                                                                        </template>
                                                                        <!--END Add New Contractor-->

                                                                    </div>


                                                                </div>
                                                                <!--END Contractor info-->


                                                                <!--Assign Role-->
                                                                <div
                                                                    class="flex flex-row items-start space-x-2 px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">

                                                                    <!--Select roles-->
                                                                    <div
                                                                        class="w-2/3 space-y-2">
                                                                        <select
                                                                            class=" truncate h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  "
                                                                            x-model="role"
                                                                            id="role">
                                                                            <option
                                                                                selected="">
                                                                                None</option>
                                                                            <option
                                                                                value="cm">
                                                                                contractor
                                                                                manager
                                                                            </option>
                                                                            <option
                                                                                value="pm">
                                                                                project manager
                                                                            </option>
                                                                            <option
                                                                                value="ii">
                                                                                internal
                                                                                instructor
                                                                            </option>
                                                                        </select>

                                                                        <template
                                                                            x-if="role == 'cm' ">
                                                                            <select
                                                                                id=" truncate h-10 contructors1"
                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                                <option
                                                                                    selected="">
                                                                                    select
                                                                                    cotructor
                                                                                </option>
                                                                                <option
                                                                                    value="US">
                                                                                    contractor
                                                                                    1</option>
                                                                                <option
                                                                                    value="CA">
                                                                                    contractor
                                                                                    2</option>
                                                                                <option
                                                                                    value="FR">
                                                                                    contractor
                                                                                    3</option>
                                                                                <option
                                                                                    value="DE">
                                                                                    contractor
                                                                                    4</option>
                                                                            </select>
                                                                        </template>

                                                                        <template
                                                                            x-if="role == 'pm' ">
                                                                            <select
                                                                                id=" truncate h-10 contructors2"
                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                                <option
                                                                                    selected="">
                                                                                    select
                                                                                    project
                                                                                </option>
                                                                                <option
                                                                                    value="US">
                                                                                    project 1
                                                                                </option>
                                                                                <option
                                                                                    value="CA">
                                                                                    project 2
                                                                                </option>
                                                                                <option
                                                                                    value="FR">
                                                                                    project 3
                                                                                </option>
                                                                                <option
                                                                                    value="DE">
                                                                                    project 4
                                                                                </option>
                                                                            </select>
                                                                        </template>
                                                                    </div>
                                                                    <!--End Select roles-->

                                                                    <!--Assign Button -->
                                                                    <div
                                                                        class="w-1/3 h-10 flex items-center">
                                                                        <button
                                                                            x-ref="button"
                                                                            x-on:click="toggle()  "
                                                                            :aria-expanded="open"
                                                                            :aria-controls="$id('dropdown-button')"
                                                                            type="button"
                                                                            class="transition inline-flex items-center px-3.5 py-2.5 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                                                            Assign
                                                                        </button>
                                                                    </div>
                                                                    <!--END Assign Button-->

                                                                </div>
                                                                <!--END Assign Role-->


                                                            </div>
                                                            <!--END Assignments-->




                                                        </div>

                                                        <!--End Tables-->
                                                    </div>
                                                    <!--END collapse content-->
                                                </div>

                                            </div>
                                        </div>
                                        <!--end details Collapse-->

                                        <!--course Collapse-->
                                        <div class="text-gray-700 ">

                                            <div class="mt-5 border border-gray-200 rounded-lg"
                                                x-data="{ open: false }">

                                                <div @click="open = !open"
                                                    class="flex cursor-pointer p-5 items-center bg-traivis-50 text-gray-500">
                                                    <div class="mr-5">
                                                        <svg class="w-5 h-5"
                                                            fill="currentColor"
                                                            height="512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            viewBox="0 0 512 512"
                                                            width="512" x="0px"
                                                            xml:space="preserve"
                                                            y="0px">
                                                            <path
                                                                d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                                                        </svg>
                                                    </div>

                                                    <div class="flex-grow font-bold">
                                                        Courses
                                                    </div>

                                                    <div class="ml-5">
                                                        <svg :class="open ? 'rotate-90' :
                                                            'rotate-0'"
                                                            class="w-5 h-5 transition-transform rotate-0"
                                                            fill="currentColor"
                                                            viewbox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="p-5" style="display: none;"
                                                    x-show="open"
                                                    x-transition:enter="transition-opacity ease-linear"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:leave="transition-opacity ease-linear"
                                                    x-transition:leave-end="opacity-0"
                                                    x-transition:leave-start="opacity-100">

                                                    <!--collapse content-->
                                                    <div class="p-2 flex flex-row flex-wrap">

                                                        <!--tables-->
                                                        <div
                                                            class="w-full whitespace-nowrap space-y-5">

                                                            <!--Course tests-->
                                                            <div class="overflow-x-auto">
                                                                <div
                                                                    class="p-1 mb-2 font-bold text-sm text-gray-500 items-center flex">
                                                                    <span
                                                                        class="p-3 w-5 h-5 flex items-center justify-center inline-block rounded-full bg-traivis-100 text-lg mr-3">
                                                                        4
                                                                    </span>
                                                                    Courses
                                                                </div>

                                                                <div
                                                                    class="shadow-dashboard rounded-xl border">
                                                                    <table
                                                                        class="w-full text-center ">
                                                                        <thead
                                                                            class="border-b-4 border-gray-300">
                                                                            <tr
                                                                                class="bg-traivis-50 font-medium">
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Course Name
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Issue Date
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Expire Date
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Upcoming
                                                                                    Date
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Certification
                                                                                </td>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody
                                                                            class="cursor-pointer">
                                                                            <tr
                                                                                class="hover:bg-traivis-50">
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Paython
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    <button
                                                                                        class="transition inline-flex items-center px-3 py-1 border border-transparent leading-4 font-semibold text-base rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                                        type="button">
                                                                                        <svg class="h-5 w-5"
                                                                                            fill="currentColor"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="512"
                                                                                            height="512">
                                                                                            <path
                                                                                                d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.705,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z" />
                                                                                            <path
                                                                                                d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z" />
                                                                                        </svg>
                                                                                        <span
                                                                                            class="whitespace-nowrap">View</span>
                                                                                        <input
                                                                                            x-ref="emp_file"
                                                                                            class="hidden"
                                                                                            type="file">
                                                                                    </button>
                                                                                </td>
                                                                            </tr>

                                                                            <tr
                                                                                class="hover:bg-traivis-50">
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Paython
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    <button
                                                                                        class="transition inline-flex items-center px-3 py-1 border border-transparent leading-4 font-semibold text-base rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                                        type="button">
                                                                                        <svg class="h-5 w-5"
                                                                                            fill="currentColor"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="512"
                                                                                            height="512">
                                                                                            <path
                                                                                                d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.705,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z" />
                                                                                            <path
                                                                                                d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z" />
                                                                                        </svg>
                                                                                        <span
                                                                                            class="whitespace-nowrap">View</span>
                                                                                        <input
                                                                                            x-ref="emp_file"
                                                                                            class="hidden"
                                                                                            type="file">
                                                                                    </button>
                                                                                </td>
                                                                            </tr>

                                                                            <tr
                                                                                class="hover:bg-traivis-50">
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    Paython
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    12/10/2022
                                                                                </td>
                                                                                <td
                                                                                    class="px-6 py-3">
                                                                                    <button
                                                                                        class="transition inline-flex items-center px-3 py-1 border border-transparent leading-4 font-semibold text-base rounded-full shadow-sm space-x-2 focus-within:text-traivis-500 text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                                                                                        @click="$refs.emp_file.click()"
                                                                                        type="button">
                                                                                        <svg class="h-5 w-5"
                                                                                            fill="currentColor"
                                                                                            data-name="Layer 1"
                                                                                            viewBox="0 0 24 24"
                                                                                            width="512"
                                                                                            height="512">
                                                                                            <path
                                                                                                d="M17.974,7.146c-.331-.066-.602-.273-.742-.569-1.55-3.271-5.143-5.1-8.734-4.438-3.272,.6-5.837,3.212-6.384,6.501-.162,.971-.15,1.943,.033,2.89,.06,.309-.073,.653-.346,.901-1.145,1.041-1.801,2.524-1.801,4.07,0,3.032,2.467,5.5,5.5,5.5h11c4.136,0,7.5-3.364,7.5-7.5,0-3.565-2.534-6.658-6.026-7.354Zm-1.474,12.854H5.5c-1.93,0-3.5-1.57-3.5-3.5,0-.983,.418-1.928,1.146-2.59,.786-.715,1.155-1.773,.963-2.763-.138-.712-.146-1.445-.024-2.181,.403-2.422,2.365-4.421,4.771-4.862,.385-.07,.768-.104,1.146-.104,2.312,0,4.405,1.289,5.422,3.434,.413,.872,1.2,1.482,2.158,1.673,2.56,.511,4.417,2.779,4.417,5.394,0,3.032-2.468,5.5-5.5,5.5Zm-1.379-7.707c.391,.391,.391,1.023,0,1.414-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293l-1.707-1.707v5c0,.553-.448,1-1,1s-1-.447-1-1v-5l-1.707,1.707c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l2.707-2.707c.386-.386,.893-.58,1.4-.583l.014-.003,.014,.003c.508,.003,1.014,.197,1.4,.583l2.707,2.707Z" />
                                                                                        </svg>
                                                                                        <span
                                                                                            class="whitespace-nowrap">upload</span>
                                                                                        <input
                                                                                            x-ref="emp_file"
                                                                                            class="hidden"
                                                                                            type="file">
                                                                                    </button>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                            <!---->

                                                        </div>
                                                        <!--End Tables-->
                                                    </div>
                                                    <!--END collapse content-->
                                                </div>

                                            </div>
                                        </div>
                                        <!--end course Collapse-->

                                        <!--Performance Collapse-->
                                        <template x-if="addNew==false"
                                            class="text-gray-700 ">

                                            <div class="mt-5 border border-gray-200 rounded-lg"
                                                x-data="{ open: false }">

                                                <div @click="open = !open"
                                                    class="flex cursor-pointer p-5 items-center bg-traivis-50 text-gray-500">
                                                    <div class="mr-5">
                                                        <svg id="Layer_1"
                                                            class="w-5 h-5 "
                                                            style="enable-background:new 0 0 512 512;"
                                                            height="512"
                                                            viewBox="0 0 24 24"
                                                            width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m12 1a11.995 11.995 0 0 0 -6.888 21.818l.259.182h13.258l.259-.182a11.995 11.995 0 0 0 -6.888-21.818zm5.988 20h-11.976a10 10 0 1 1 11.976 0zm2.012-8a7.939 7.939 0 0 1 -2.406 5.715l-1.4-1.43a5.945 5.945 0 0 0 1.595-5.833l1.575-1.575a7.968 7.968 0 0 1 .636 3.123zm-14 0a5.951 5.951 0 0 0 1.8 4.285l-1.4 1.43a8 8 0 0 1 8.717-13.08l-1.569 1.575a5.977 5.977 0 0 0 -7.548 5.79zm7.926-.512a2.033 2.033 0 1 1 -1.414-1.414l4.281-4.281 1.414 1.414z" />
                                                        </svg>
                                                    </div>

                                                    <div class="flex-grow font-bold">
                                                        Performance
                                                    </div>

                                                    <div class="ml-5">
                                                        <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                            class="w-5 h-5 transition-transform rotate-0"
                                                            fill="currentColor"
                                                            viewbox="0 0 24 24">
                                                            <path
                                                                d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>

                                            </div>
                                        </template>
                                        <!--end Performance Collapse-->

                                    </div>
                                    <!--End Collapses-->

                                    <!--sticky Save-->
                                    <div
                                        class="sticky bottom-0 py-2 w-full bg-white z-30 flex flex-row justify-evenly items-center">
                                        <button type="button"
                                            class="  transition inline-flex items-center px-3.5 py-2.5 border border-transparent text-base leading-4 font-bold rounded-full shadow-sm space-x-2 focus-within:text-traivis-500 text-gray-500 bg-white border-gray-400 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                            Cancel
                                        </button>

                                        <button
                                            class="  transition inline-flex items-center px-3.5 py-2.5 border border-transparent text-base leading-4 font-bold rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                            Save Work force
                                        </button>
                                    </div>
                                    <!---->


                                </div>

                            </div>
                        </div>
                        <!--END popup content -->

                    </div>
                </div>
            </section>
            <!-----END View Card Popup----------->

        </div>
        <!--END View WF-->

    </div>
    <!--END WF Grid-->

</section>
<!--END workforce tab content -->
