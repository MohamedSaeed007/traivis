<!--Traivis Nav bar-->

<div class="">

    {{-- <div class="transition-colors " id="mobileMenu" x-data="{ isMenuOn: false }">
    <header class="sticky top-0 bg-white shadow-sm lg:overflow-y-visible transition-colors   z-50">
        <div class="mx-auto px-6 ">
            <div class="relative flex justify-between grid grid-cols-8 md:grid-cols-12 gap-8 items-center py-4">

                <div class="col-span-4 flex flex-row items-center">
                <div class="flex w-fit mr-4 ">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="#">

                            <pan class="text-traivis ">
                                <svg class="block h-8 w-auto text-traivis-500 hover:text-gray-500" fill="currentColor" viewbox="0 0 488.3 488.3" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g><path class="st0" d="M33.7,324.8c-5.4,2.3-8,8.5-5.7,13.9c2.3,5.4,8.6,7.9,14,5.6c5.4-2.3,8-8.5,5.7-13.9
                C45.4,325,39.1,322.5,33.7,324.8z"></path><path class="st0" d="M458.9,74.9C424.2,40.6,285.8,0,260.6,0C238,0,126.4,35.3,81.2,65.1c-26.1,13.6-44,41.2-44,71.4
                c0,0,0,17.5,0,41.4v132.8c6-129.5,6.4-166.2,16.7-180c0.4-0.4,0.7-0.9,1.1-1.3c0.5-0.6,1.1-1.3,1.6-1.9c0.4-0.4,0.7-0.8,1.1-1.2
                c0.6-0.7,1.3-1.3,1.9-2c0.3-0.3,0.6-0.6,0.9-0.9c1-0.9,2-1.9,3-2.8c0.2-0.2,0.4-0.3,0.6-0.5c0.8-0.7,1.7-1.4,2.6-2.1
                c0.4-0.3,0.8-0.6,1.2-0.9c0.7-0.5,1.4-1.1,2.1-1.6c0.4-0.3,0.9-0.6,1.4-0.9c0.7-0.5,1.4-0.9,2.1-1.4c0.5-0.3,1-0.6,1.4-0.9
                c0.7-0.4,1.4-0.9,2.2-1.3c0.5-0.3,1-0.5,1.5-0.8c0.8-0.4,1.6-0.8,2.4-1.2c0.5-0.2,0.9-0.5,1.4-0.7c1-0.5,2-0.9,2.9-1.3
                c0.3-0.1,0.6-0.3,0.9-0.4c1.3-0.5,2.5-1,3.8-1.5c33.6,19.4,94.9,39.7,136.5,48.9v238.1c0,53,43.5,96,97.2,96h56.8
                c-23.9,0-88.4-1.2-88.4-96V154.6C357.7,140.1,479.2,95.2,458.9,74.9z M263.3,121.8c-31.7,0-171.9-41.1-151.1-61.2
                C135.7,38,244.6,6.2,263.3,6.2c18.8,0,130,29.4,155.8,54.4C437.4,78.2,295,121.8,263.3,121.8z"></path></g><path
                                        class="st0" d="M263.9,35.6c-9,0-61.5,15.3-72.8,26.3c-10,9.7,57.5,29.6,72.8,29.6c15.3,0,83.8-21,75-29.6
                C326.5,49.8,272.9,35.6,263.9,35.6z"></path></svg>
                            </pan>
                        </a>
                    </div>
                </div>

                <div class="flex flex-1 justify-start w-full">
                    <div class="flex items-center w-full lg:w-full md:w-40">
                        <div class="w-full">
                            <div wire:id="tD18q1ALn7K0Ewd0Tor2">
                                <label class="sr-only" for="globalSearch">Search</label>
                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                        <!-- Heroicon name: solid/search -->
                                        <svg aria-hidden="true" class="h-5 w-5 text-gray-400"
                                             fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                  fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input class="block bg-white text-gray-800 border border-gray-300 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-indigo-500 sm:text-sm transition-colors    rounded-full w-full" id="globalSearch"
                                           placeholder="Search"
                                           type="search" wire:model.debounce.500ms="search"></div>
                            </div>

                            <!-- Livewire Component wire-end:tD18q1ALn7K0Ewd0Tor2 -->
                        </div>
                    </div>
                </div>
                </div>

                <div class="hidden flex flex-1 md:flex justify-center col-span-4">
                    <div class="flex items-center justify-center">
                        <div class=" flex space-x-8">
                            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                            <a class="whitespace-nowrap border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium "
                               href="#">
                                Home </a>
                            <a class="whitespace-nowrap border-traivis-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium "
                               href="#">
                                Courses </a>
                            <a class="whitespace-nowrap border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium "
                               href="#">
                                Learning war </a>
                            <a class="whitespace-nowrap border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium "
                               href="#">
                                Resources </a>
                        </div>
                    </div>
                </div>




                <!--navbar dropdowns -->
                <div class="flex flex-1 items-center justify-end  col-span-4">


                    <!--Messages dropdown-->
                    <div @click.outside="jopen = false"
                         @keydown.window.escape.stop="jopen = false"
                         class="flex relative "
                         x-data="{jopen:false}">


                        <a @click="jopen = !jopen"
                           class="ml-5 flex-shrink-0 bg-white transition-colors  rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500 inline-block"
                           href="#">
                            <span class="sr-only">View Messages</span>
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z"></path>
                            </svg>
                            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
            6</span>
                        </a>

                        <!--menu-->
                        <div class="absolute z-50 right-1/2 transform mt-12"
                             x-show="jopen" x-cloak
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             x-transition:leave-start="transform opacity-100 scale-100">

                            <div class="w-full mb-4 md:mb-0">
                                <div class="bg-white mx-auto justify-center rounded-b-lg mx-auto flex-col container w-96 py-4  flex">


                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200   bg-gray-200">
                                        <div class="items-center flex items-start w-full">
                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="flex justify-center group-hover:font-bold items-center   hover:w-auto"
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Chris Nutman</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate">
                                                please
                                            </div>

                                        </div>
                                    </div>

                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200 ">
                                        <div class="items-center flex items-start w-full">

                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="justify-center group-hover:font-bold items-center flex hover:w-auto  "
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Fady</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate"> Hey?
                                                where are you
                                            </div>

                                        </div>
                                    </div>


                                    <!-- the unchecked noticifcation will be highlighted in gray-200 (LM) and gray-700 (DM)-->
                                    <div class="bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200   py-4 bg-gray-200">
                                        <div class="items-center flex items-start w-full">

                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="flex justify-center group-hover:font-bold items-center   hover:w-auto"
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Ammar</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate"> Hello
                                            </div>

                                        </div>
                                    </div>

                                    <div class="text-center  flex justify-center mt-2"><a
                                            class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base   hover:border-b-2 hover:border-traivis-500"
                                            href="#">Show more </a></div>

                                </div>
                            </div>

                        </div>
                        <!--end menu-->

                    </div>
                    <!--END Messages dropdown-->


                    <!--notifications dropdown-->
                    <div @click.outside="jopen = false"
                         @keydown.window.escape.stop="jopen = false"
                         class="flex relative "
                         x-data="{jopen:false}">


                        <a @click="jopen = !jopen"
                           class="ml-5 flex-shrink-0 bg-white transition-colors  rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500 inline-block"
                           href="#">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.555,13.662l-1.9-6.836A9.321,9.321,0,0,0,2.576,7.3L1.105,13.915A5,5,0,0,0,5.986,20H7.1a5,5,0,0,0,9.8,0h.838a5,5,0,0,0,4.818-6.338ZM12,22a3,3,0,0,1-2.816-2h5.632A3,3,0,0,1,12,22Zm8.126-5.185A2.977,2.977,0,0,1,17.737,18H5.986a3,3,0,0,1-2.928-3.651l1.47-6.616a7.321,7.321,0,0,1,14.2-.372l1.9,6.836A2.977,2.977,0,0,1,20.126,16.815Z"></path>
                            </svg>
                            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
              99</span>
                        </a>

                        <!--menu-->
                        <div class="absolute z-50 right-1/2 transform mt-12"
                             x-show="jopen" x-cloak
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             x-transition:leave-start="transform opacity-100 scale-100">

                            <div class="w-full mb-4 md:mb-0">
                                <div class="bg-white mx-auto justify-center rounded-b-lg mx-auto flex-col container w-96 py-4  flex">


                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200  sm:w-auto">
                                        <div class="items-center flex items-start w-full">

                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="flex justify-center group-hover:font-bold items-center   hover:w-auto"
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Chris Nutman</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate sm:w-auto sm:inline-flex">
                                                has sent you a connection request
                                            </div>

                                        </div>
                                    </div>

                                    <!--this for any notification related to courses-->
                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200 ">
                                        <div class="items-center flex items-start w-full">
                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <div class="flex justify-center rounded-full border-2 text-gray-500 bg-gray-500 w-10 h-10 items-center border-gray-200 bg-traivis-600">
                                                    <svg aria-hidden="true"
                                                         class="w-8 h-8 w-6 h-6 -ml-0.5 text-white" fill="currentColor"
                                                         height="512"
                                                         viewbox="0 0 512 512"
                                                         width="512"
                                                         x="0px" xml:space="preserve"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><path d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z"></path></svg>
                                                </div>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate">for
                                                any
                                                notification relted to courses
                                            </div>
                                        </div>
                                    </div>


                                    <!--this for any notification related to rewards-->
                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200 ">
                                        <div class="items-center flex items-start w-full">
                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <div class="flex justify-center rounded-full border-2 text-gray-500 bg-gray-500 w-10 h-10 items-center border-gray-200 bg-traivis-600">
                                                    <svg aria-hidden="true" class="w-8 h-8 w-6 h-6 -ml-0.5 text-white"
                                                         fill="currentColor"
                                                         height="512"
                                                         viewbox="0 0 24 24"
                                                         width="512"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.091,16C21.661,15.964,24,12.484,24,9.5a3.5,3.5,0,0,0-2.764-3.419c.136-.387.254-.742.333-1.011a3.887,3.887,0,0,0-.626-3.458A3.979,3.979,0,0,0,17.729,0H6.271A3.979,3.979,0,0,0,3.057,1.612,3.887,3.887,0,0,0,2.431,5.07c.079.269.2.624.333,1.011A3.5,3.5,0,0,0,0,9.5c0,2.984,2.339,6.464,8.909,6.5A5.06,5.06,0,0,1,9,16.921V20a1.883,1.883,0,0,1-2,2H6a1,1,0,0,0,0,2H18a1,1,0,0,0,0-2h-.992A1.885,1.885,0,0,1,15,20V16.92A5.058,5.058,0,0,1,15.091,16ZM20.5,8A1.5,1.5,0,0,1,22,9.5c0,2.034-1.609,4.2-6.036,4.47a4.847,4.847,0,0,1,.762-.821A15.132,15.132,0,0,0,20.453,7.99C20.469,7.991,20.483,8,20.5,8ZM2,9.5A1.5,1.5,0,0,1,3.5,8c.017,0,.031-.009.047-.01a15.132,15.132,0,0,0,3.727,5.159,4.847,4.847,0,0,1,.762.821C3.609,13.7,2,11.534,2,9.5ZM10.513,22A4.08,4.08,0,0,0,11,20V16.921a6.93,6.93,0,0,0-2.431-5.295A15.338,15.338,0,0,1,4.349,4.5a1.9,1.9,0,0,1,.31-1.694A1.994,1.994,0,0,1,6.271,2H17.729a1.994,1.994,0,0,1,1.612.81,1.9,1.9,0,0,1,.31,1.694,15.338,15.338,0,0,1-4.22,7.122A6.928,6.928,0,0,0,13,16.92V20a4.08,4.08,0,0,0,.487,2Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate"> this
                                                for any
                                                notification related to rewards
                                            </div>
                                        </div>
                                    </div>


                                    <!-- the unchecked notification will be highlighted in gray-200 (LM) and gray-700 (DM)-->

                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200   bg-gray-200">
                                        <div class="items-center flex items-start w-full">
                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="flex justify-center group-hover:font-bold items-center   hover:w-auto"
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Chris Nutman</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate"> has
                                                sent you a
                                                connection request
                                            </div>

                                        </div>
                                    </div>

                                    <div class="py-4 bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200 ">
                                        <div class="items-center flex items-start w-full">

                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="justify-center group-hover:font-bold items-center flex hover:w-auto  "
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Fady</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate"> has
                                                invited you
                                                for a course
                                            </div>

                                        </div>
                                    </div>


                                    <!-- the unchecked noticifcation will be highlighted in gray-200 (LM) and gray-700 (DM)-->
                                    <div class="bg-white hover:bg-traivis-50 hover:border-l-2 hover:border-traivis-500 transition-colors   justify-start items-start flex ease-in-out border-gray-200   py-4 bg-gray-200">
                                        <div class="items-center flex items-start w-full">

                                            <div class="flex group px-4 md:justify-center justify-start md:py-0 py-2 inline-flex group-hover:font-bold">
                                                <a class="flex justify-center group-hover:font-bold items-center   hover:w-auto"
                                                   href="#">
                                                    <img alt=""
                                                         class="w-8 h-8 mr-4 object-cover rounded-full hover:ring-gray-700 group"
                                                         src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                                    <div class="flex" contenteditable="false"></div>
                                                    <p class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base  "
                                                       contenteditable="false">Ammar</p>
                                                </a>
                                            </div>
                                            <div class="-ml-2 text-gray-500  flex truncate"> has
                                                sent you a
                                                message
                                            </div>

                                        </div>
                                    </div>

                                    <div class="text-center  flex justify-center mt-2"><a
                                            class="font-medium items-center flex truncate transition-colors font-bold text-gray-500 -ml-2 hover:text-gray-700 text-base   hover:border-b-2 hover:border-traivis-500"
                                            href="#">Show more </a></div>

                                </div>
                            </div>

                        </div>
                        <!--end menu-->

                    </div>
                    <!--END notifications dropdown-->


                    <!-- Profile Avatar dropdown -->
                    <div @click.outside="jopen = false" @keydown.window.escape.stop="jopen = false"
                         class="flex-shrink-0 relative ml-5 flex"
                         id="profile"
                         x-data="{jopen:false}">

                        <div>
                            <button :aria-expanded="open.toString()"
                                    @click="jopen = !jopen"
                                    aria-expanded="false" aria-haspopup="true" class="bg-white transition-colors  rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-500"
                                    id="user-menu-button"
                                    type="button">
                                <span class="sr-only">Open user menu</span>
                                <img alt=""
                                     class="h-8 w-8 rounded-full object-contain"
                                     src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"></button>
                        </div>


                        <div class="absolute z-50 right-1/2 transform mt-12 "
                             x-show="jopen" x-cloak
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             x-transition:leave-start="transform opacity-100 scale-100">
                            <div class="bg-white rounded-b-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden w-60 justify-center items-center flex grid transition-colors ">


                                <a class="flex items-start transition ease-in-out duration-150 hover:w-full w-auto hover:border-gray-300 text-gray-500 hover:text-gray-700 text-sm font-medium px-1 py-4 border-b-2 border-transparent transition-colors   "
                                   href="">
                                    <svg aria-hidden="true" class="flex-shrink-0 h-5 w-5"
                                         fill="currentColor" height="512" id="Outline" viewbox="0 0 24 24"
                                         width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12,12A6,6,0,1,0,6,6,6.006,6.006,0,0,0,12,12ZM12,2A4,4,0,1,1,8,6,4,4,0,0,1,12,2Z"></path>
                                        <path d="M12,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,12,14Z"></path>
                                    </svg>
                                    <div class="ml-4">
                                        <span>My Profile</span>
                                    </div>
                                </a>


                                <a class="flex items-start transition ease-in-out duration-150 w-full hover:w-full border-b-2 border-transparent group hover:border-gray-300 text-gray-500 hover:text-gray-700 font-medium text-sm px-1 py-4 transition-colors   "
                                   href="#">
                                    <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0" fill="currentColor"
                                         viewbox="0 0 512 512"
                                         x="0px" xml:space="preserve"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><path d="M448.4,286.4c-16.5,0-32.3,6.4-44.1,17.9l-25.1-12.6c20.5-67.2-17.4-138.3-84.6-158.8c-24.6-7.5-50.9-7.4-75.4,0.4
                  l-14.7-26.6c23.6-25.9,21.8-66-4.1-89.6c-25.9-23.6-66-21.8-89.6,4.1c-23.6,25.9-21.8,66,4.1,89.6c11.7,10.7,27.1,16.6,43,16.6
                  c3.1-0.1,6.1-0.4,9.1-0.9l14.6,26.4c-55.3,41-67.7,118.6-27.9,174.8L91.8,387c-32.8-14.7-71.3,0-85.9,32.8
                  c-14.7,32.8,0,71.3,32.8,85.9c32.8,14.7,71.3,0,85.9-32.8c8.2-18.3,7.5-39.3-1.9-57l60.6-58.2c56.6,41,135.7,28.4,176.7-28.2
                  l25.4,12.7c-0.4,2.6-0.6,5.1-0.7,7.7c0,35.1,28.5,63.6,63.6,63.6s63.6-28.5,63.6-63.6C512,314.9,483.5,286.4,448.4,286.4z
                  M256.1,360.9c-58,0-104.9-47-104.9-104.9c0-58,47-104.9,104.9-104.9c58,0,104.9,47,104.9,104.9C361,313.9,314,360.9,256.1,360.9z
                  M295.1,211.7H289c-2.6-13-14.1-22.3-27.4-22.4h-11.2c-13.3,0-24.7,9.4-27.4,22.4h-6.2c-15.4,0-27.9,12.5-28,28v28v15v12.9
                  c0,15.4,12.5,28,28,28h78.3c15.4,0,28-12.5,28-28v-12.9v-15v-28C323.1,224.3,310.6,211.8,295.1,211.7z M250.4,200.6h11.2
                  c7.1,0,13.4,4.5,15.8,11.2h-42.7C237,205.1,243.3,200.6,250.4,200.6z"></path></svg>
                                    <div class="ml-4">
                                        <span>My Business Env.</span>
                                    </div>
                                </a>


                                <a class="flex items-start transition ease-in-out duration-150 w-full hover:w-full border-b-2 border-transparent group hover:border-gray-300 text-gray-500 hover:text-gray-700 font-medium text-sm px-1 py-4 transition-colors   "
                                   href="#">
                                    <svg aria-hidden="true" class="flex-shrink-0 h-5 w-5"
                                         fill="currentColor" height="512" id="Outline" viewbox="0 0 24 24"
                                         width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"></path>
                                        <path d="M21.294,13.9l-.444-.256a9.1,9.1,0,0,0,0-3.29l.444-.256a3,3,0,1,0-3-5.2l-.445.257A8.977,8.977,0,0,0,15,3.513V3A3,3,0,0,0,9,3v.513A8.977,8.977,0,0,0,6.152,5.159L5.705,4.9a3,3,0,0,0-3,5.2l.444.256a9.1,9.1,0,0,0,0,3.29l-.444.256a3,3,0,1,0,3,5.2l.445-.257A8.977,8.977,0,0,0,9,20.487V21a3,3,0,0,0,6,0v-.513a8.977,8.977,0,0,0,2.848-1.646l.447.258a3,3,0,0,0,3-5.2Zm-2.548-3.776a7.048,7.048,0,0,1,0,3.75,1,1,0,0,0,.464,1.133l1.084.626a1,1,0,0,1-1,1.733l-1.086-.628a1,1,0,0,0-1.215.165,6.984,6.984,0,0,1-3.243,1.875,1,1,0,0,0-.751.969V21a1,1,0,0,1-2,0V19.748a1,1,0,0,0-.751-.969A6.984,6.984,0,0,1,7.006,16.9a1,1,0,0,0-1.215-.165l-1.084.627a1,1,0,1,1-1-1.732l1.084-.626a1,1,0,0,0,.464-1.133,7.048,7.048,0,0,1,0-3.75A1,1,0,0,0,4.79,8.992L3.706,8.366a1,1,0,0,1,1-1.733l1.086.628A1,1,0,0,0,7.006,7.1a6.984,6.984,0,0,1,3.243-1.875A1,1,0,0,0,11,4.252V3a1,1,0,0,1,2,0V4.252a1,1,0,0,0,.751.969A6.984,6.984,0,0,1,16.994,7.1a1,1,0,0,0,1.215.165l1.084-.627a1,1,0,1,1,1,1.732l-1.084.626A1,1,0,0,0,18.746,10.125Z"></path>
                                    </svg>
                                    <div class="ml-4">
                                        <span>Settings/Security</span>
                                    </div>
                                </a>


                                <a class="transition ease-in-out duration-150 hover:border-gray-300 border-b-2 inline-flex group border-transparent text-gray-500 px-1 text-sm font-medium hover:text-gray-700 items-center transition-colors    flex py-4"
                                   href="#">
                                    <svg aria-hidden="true" class="h-5 w-5 flex-shrink-0"
                                         fill="currentColor" height="512" id="Outline" viewbox="0 0 24 24"
                                         width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path class=""
                                              d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"></path>
                                        <path d="M12.717,5.063A4,4,0,0,0,8,9a1,1,0,0,0,2,0,2,2,0,0,1,2.371-1.967,2.024,2.024,0,0,1,1.6,1.595,2,2,0,0,1-1,2.125A3.954,3.954,0,0,0,11,14.257V15a1,1,0,0,0,2,0v-.743a1.982,1.982,0,0,1,.93-1.752,4,4,0,0,0-1.213-7.442Z"></path>
                                        <rect height="2" rx="1" width="2" x="11" y="17"></rect>
                                    </svg>
                                    <div class="ml-4">
                                        <span>Support</span>
                                    </div>
                                </a>


                                <a class="border-t-2 border-traivis-500 flex items-start transition ease-in-out duration-150 w-full hover:w-full border-b-2 border-transparent group hover:border-gray-300 text-gray-500 hover:text-gray-700 font-medium text-sm px-1 py-4 transition-colors   "
                                   href="#">
                                    <svg aria-hidden="true" class="flex-shrink-0 h-5 w-5"
                                         fill="currentColor" height="512"
                                         viewbox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.476,15a1,1,0,0,0-1,1v3a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7.476a3,3,0,0,1,3,3V8a1,1,0,0,0,2,0V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7.476a5.006,5.006,0,0,0,5-5V16A1,1,0,0,0,11.476,15Z"></path>
                                        <path d="M22.867,9.879,18.281,5.293a1,1,0,1,0-1.414,1.414l4.262,4.263L6,11a1,1,0,0,0,0,2H6l15.188-.031-4.323,4.324a1,1,0,1,0,1.414,1.414l4.586-4.586A3,3,0,0,0,22.867,9.879Z"></path>
                                    </svg>
                                    <div class="ml-4">
                                        <span>Logout</span>
                                    </div>
                                </a>


                            </div>
                        </div>



                    </div>
                    <!--Avatar drop down-->


                </div>
            </div>
        </div>


        <!-- Mobile menu, show/hide based on menu state. -->

    </header>
</div> --}}
    @include('homes.social.layouts.partials.courses.header')

</div>
<!--End Traivis Nav bar-->

<!--Dash Main Grid-->
<div class="mx-auto flex w-full">

    <!--Dash Menu-->
    <div
        class="sticky top-0 z-30 flex h-screen w-20 flex-shrink-0 flex-col overflow-hidden border-r border-gray-300 bg-white pl-3 hover:w-60">
        <nav aria-label="Sidebar" style="overflow-x: hidden"
            class="h-screen shrink-0 overflow-x-hidden bg-white md:overflow-y-auto">
            <div class="relative flex flex-col space-y-2 font-semibold text-gray-500">

                <a href="{{ url('enterprise-dashboard') }}"
                    class="group flex flex-shrink-0 items-center justify-start">
                    <button
                        class="@if (request()->routeIs('enterprise-dashboard')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                        <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                            viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm9.573,9.12-8.908,1.732a4.941,4.941,0,0,1-.368-.679l-3.34-7.7A9.987,9.987,0,0,1,21.573,9.12ZM12,22A9.995,9.995,0,0,1,7.124,3.278l3.338,7.691a7.011,7.011,0,0,0,2.167,2.772l6.653,5.092A9.966,9.966,0,0,1,12,22Zm8.5-4.755-6.125-4.688,7.581-1.473c.027.3.046.607.046.916A9.925,9.925,0,0,1,20.5,17.245Z" />
                        </svg>
                    </button>
                    <span class="ml-5 py-1">Overview</span>
                </a>
                @can('courses_access')
                    <a href="{{ url('enterprise-dashboard/courses') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-courses*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" fill="currentColor" height="512" viewBox="0 0 512 512"
                                width="512" x="0px" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                y="0px">
                                <path
                                    d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">My Courses</span>
                    </a>
                @endcan
                @can('organization_workforce_access')
                    <a href="{{ route('enterprise-dashboard-organization-structure') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-organization-structure*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                id="Layer_1" viewBox="0 0 24 24" width="512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m7 14a1 1 0 0 1 -1 1h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 1 1zm4-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm-5 4h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm-5-12h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm-5 4h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm5 0h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2zm13 1v9a5.006 5.006 0 0 1 -5 5h-14a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h6a5.006 5.006 0 0 1 5 5h3a5.006 5.006 0 0 1 5 5zm-19 12h9v-17a3 3 0 0 0 -3-3h-6a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3zm17-12a3 3 0 0 0 -3-3h-3v15h3a3 3 0 0 0 3-3zm-3 3a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm0 4a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm0-8a1 1 0 1 0 1 1 1 1 0 0 0 -1-1z">
                                </path>
                            </svg>
                        </button>
                        <span class="ml-5 py-1"> Organization Structure </span>
                    </a>
                @endcan
                @can('training_matrices_access')
                    <a href="{{ route('enterprise-dashboard-training-matrices') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-training-matrices*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                height="512">
                                <path
                                    d="M19,2H5C2.243,2,0,4.243,0,7v10c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V7c0-2.757-2.243-5-5-5ZM5,4h14c1.654,0,3,1.346,3,3H2c0-1.654,1.346-3,3-3Zm-3,13V9H7v11h-2c-1.654,0-3-1.346-3-3Zm17,3H9V9h13v8c0,1.654-1.346,3-3,3Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">Training Matrix</span>
                    </a>
                @endcan

                @can('students_access')
                    <a href="{{ url('enterprise-dashboard/students') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-students*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">My Students</span>
                    </a>
                @endcan
                @can('students_access')
                    <a href="{{ url('enterprise-dashboard/instructors') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-instructors*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19,6H14.321A3.95,3.95,0,0,0,13,5.388V5l3.53-1.652a1,1,0,0,0,0-1.7l-3.2-1.5A1.637,1.637,0,0,0,11,1.636V5.388A3.937,3.937,0,0,0,9.68,6H5a5.006,5.006,0,0,0-5,5V21a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11A5.006,5.006,0,0,0,19,6Zm2.816,4H19.657a3.017,3.017,0,0,1-2.121-.879L16.414,8H19A3,3,0,0,1,21.816,10ZM5,8H7.586L6.464,9.121A3.017,3.017,0,0,1,4.343,10H2.184A3,3,0,0,1,5,8Zm8,14H11V19a1,1,0,0,1,2,0Zm8,0H15V19a3,3,0,0,0-6,0v3H3a1,1,0,0,1-1-1V12H4.343a4.968,4.968,0,0,0,3.535-1.465l2.708-2.707a2,2,0,0,1,2.828,0l2.708,2.707A4.968,4.968,0,0,0,19.657,12H22v9A1,1,0,0,1,21,22ZM7,15a1,1,0,0,1-1,1H5a1,1,0,0,1,0-2H6A1,1,0,0,1,7,15Zm0,4a1,1,0,0,1-1,1H5a1,1,0,0,1,0-2H6A1,1,0,0,1,7,19Zm13-4a1,1,0,0,1-1,1H18a1,1,0,0,1,0-2h1A1,1,0,0,1,20,15Zm0,4a1,1,0,0,1-1,1H18a1,1,0,0,1,0-2h1A1,1,0,0,1,20,19Zm-6-7a2,2,0,1,1-2-2A2,2,0,0,1,14,12Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">My Instructors</span>
                    </a>
                @endcan
                @can('followers_access')
                    <a href="{{ url('enterprise-dashboard/followers') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-followers*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                id="Outline" viewBox="0 0 24 24" width="512" height="512">
                                <path
                                    d="M9,12A6,6,0,1,0,3,6,6.006,6.006,0,0,0,9,12ZM9,2A4,4,0,1,1,5,6,4,4,0,0,1,9,2Z">
                                </path>
                                <path
                                    d="M9,14a9.011,9.011,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.011,9.011,0,0,0,9,14Z">
                                </path>
                                <path
                                    d="M22,7.875a2.107,2.107,0,0,0-2,2.2,2.107,2.107,0,0,0-2-2.2,2.107,2.107,0,0,0-2,2.2c0,1.73,2.256,3.757,3.38,4.659a.992.992,0,0,0,1.24,0c1.124-.9,3.38-2.929,3.38-4.659A2.107,2.107,0,0,0,22,7.875Z">
                                </path>
                            </svg>
                        </button>
                        <span class="ml-5 py-1">My Followers</span>
                    </a>
                @endcan
                @can('bidding_offer_access')
                    <a href="{{ route('enterprise-dashboard-biddies') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-biddies*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                viewBox="0 0 24 24" width="512" height="512" class="h-6 w-6"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M23,15h-.667c-.25,0-.498,.019-.745,.057l-7.046-5.284,1.688-1.616c.399-.382,.413-1.016,.031-1.414-.383-.399-1.017-.412-1.414-.031l-4.173,3.995c-.208,.208-.491,.315-.788,.29-.298-.024-.56-.175-.739-.425-.274-.38-.19-.975,.168-1.334l4.703-4.429c.891-.837,2.284-1.042,3.374-.495l2.316,1.158c.69,.345,1.464,.527,2.235,.527h1.056c.553,0,1-.447,1-1s-.447-1-1-1h-1.056c-.463,0-.928-.109-1.342-.316l-2.314-1.158c-1.824-.913-4.153-.574-5.641,.828l-.618,.582-.7-.638c-.919-.837-2.109-1.298-3.39-1.298-.771,0-1.54,.182-2.227,.525l-2.314,1.158c-.415,.207-.88,.316-1.343,.316H1c-.553,0-1,.447-1,1s.447,1,1,1h1.056c.771,0,1.545-.183,2.236-.527l2.316-1.158c1.022-.514,2.458-.375,3.374,.462l.587,.535-2.646,2.492c-1.073,1.072-1.244,2.767-.398,3.938,.52,.723,1.553,1.259,2.444,1.259,.793,0,1.554-.312,2.104-.863l1.006-.963,6.346,4.759c-.031,.022-6.198,4.646-6.198,4.646-.723,.562-1.732,.562-2.47-.011l-6.091-4.568c-.859-.645-1.925-1-3-1h-.667c-.553,0-1,.447-1,1s.447,1,1,1h.667c.645,0,1.284,.213,1.8,.6l6.077,4.558c.725,.564,1.594,.846,2.461,.846,.862,0,1.723-.279,2.437-.835l6.093-4.568c.515-.387,1.154-.6,1.799-.6h.667c.553,0,1-.447,1-1s-.447-1-1-1Z">
                                </path>
                            </svg>
                        </button>
                        <span class="ml-5 py-1">Biddies</span>
                    </a>
                @endcan

                {{--                <div class="flex flex-col space-y-2 pt-5"> --}}
                @can('calenders_access')
                    <a href="{{ url('enterprise-dashboard/calendar') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-calender*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <x-svg-icons.fi-rr-calendar class="h-6 w-6" />
                        </button>
                        <span class="ml-5 py-1">Calender</span>
                    </a>
                @endcan
                @can('claim_rewards_access')
                    <a href="{{ url('enterprise-dashboard/rewards') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-rewards*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.091,16C21.661,15.964,24,12.484,24,9.5a3.5,3.5,0,0,0-2.764-3.419c.136-.387.254-.742.333-1.011a3.887,3.887,0,0,0-.626-3.458A3.979,3.979,0,0,0,17.729,0H6.271A3.979,3.979,0,0,0,3.057,1.612,3.887,3.887,0,0,0,2.431,5.07c.079.269.2.624.333,1.011A3.5,3.5,0,0,0,0,9.5c0,2.984,2.339,6.464,8.909,6.5A5.06,5.06,0,0,1,9,16.921V20a1.883,1.883,0,0,1-2,2H6a1,1,0,0,0,0,2H18a1,1,0,0,0,0-2h-.992A1.885,1.885,0,0,1,15,20V16.92A5.058,5.058,0,0,1,15.091,16ZM20.5,8A1.5,1.5,0,0,1,22,9.5c0,2.034-1.609,4.2-6.036,4.47a4.847,4.847,0,0,1,.762-.821A15.132,15.132,0,0,0,20.453,7.99C20.469,7.991,20.483,8,20.5,8ZM2,9.5A1.5,1.5,0,0,1,3.5,8c.017,0,.031-.009.047-.01a15.132,15.132,0,0,0,3.727,5.159,4.847,4.847,0,0,1,.762.821C3.609,13.7,2,11.534,2,9.5ZM10.513,22A4.08,4.08,0,0,0,11,20V16.921a6.93,6.93,0,0,0-2.431-5.295A15.338,15.338,0,0,1,4.349,4.5a1.9,1.9,0,0,1,.31-1.694A1.994,1.994,0,0,1,6.271,2H17.729a1.994,1.994,0,0,1,1.612.81,1.9,1.9,0,0,1,.31,1.694,15.338,15.338,0,0,1-4.22,7.122A6.928,6.928,0,0,0,13,16.92V20a4.08,4.08,0,0,0,.487,2Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">Rewards</span>
                    </a>
                @endcan
                @can('managing_space_privacy')
                    <a href="{{ url('enterprise-dashboard/privacy') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('enterprise-dashboard-privacy*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" fill="currentColor"
                                class="h-6 w-6" viewBox="0 0 24 24" width="512" height="512">
                                <path
                                    d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
                                <path
                                    d="M21.294,13.9l-.444-.256a9.1,9.1,0,0,0,0-3.29l.444-.256a3,3,0,1,0-3-5.2l-.445.257A8.977,8.977,0,0,0,15,3.513V3A3,3,0,0,0,9,3v.513A8.977,8.977,0,0,0,6.152,5.159L5.705,4.9a3,3,0,0,0-3,5.2l.444.256a9.1,9.1,0,0,0,0,3.29l-.444.256a3,3,0,1,0,3,5.2l.445-.257A8.977,8.977,0,0,0,9,20.487V21a3,3,0,0,0,6,0v-.513a8.977,8.977,0,0,0,2.848-1.646l.447.258a3,3,0,0,0,3-5.2Zm-2.548-3.776a7.048,7.048,0,0,1,0,3.75,1,1,0,0,0,.464,1.133l1.084.626a1,1,0,0,1-1,1.733l-1.086-.628a1,1,0,0,0-1.215.165,6.984,6.984,0,0,1-3.243,1.875,1,1,0,0,0-.751.969V21a1,1,0,0,1-2,0V19.748a1,1,0,0,0-.751-.969A6.984,6.984,0,0,1,7.006,16.9a1,1,0,0,0-1.215-.165l-1.084.627a1,1,0,1,1-1-1.732l1.084-.626a1,1,0,0,0,.464-1.133,7.048,7.048,0,0,1,0-3.75A1,1,0,0,0,4.79,8.992L3.706,8.366a1,1,0,0,1,1-1.733l1.086.628A1,1,0,0,0,7.006,7.1a6.984,6.984,0,0,1,3.243-1.875A1,1,0,0,0,11,4.252V3a1,1,0,0,1,2,0V4.252a1,1,0,0,0,.751.969A6.984,6.984,0,0,1,16.994,7.1a1,1,0,0,0,1.215.165l1.084-.627a1,1,0,1,1,1,1.732l-1.084.626A1,1,0,0,0,18.746,10.125Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">Privacy</span>
                    </a>
                @endcan
                <a href="{{ url('enterprise-dashboard/help') }}"
                    class="group flex flex-shrink-0 items-center justify-start">
                    <button
                        class="@if (request()->routeIs('enterprise.dashboard-help*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                        <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            id="Outline" viewBox="0 0 24 24" width="512" height="512">
                            <path
                                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                            <path
                                d="M12.717,5.063A4,4,0,0,0,8,9a1,1,0,0,0,2,0,2,2,0,0,1,2.371-1.967,2.024,2.024,0,0,1,1.6,1.595,2,2,0,0,1-1,2.125A3.954,3.954,0,0,0,11,14.257V15a1,1,0,0,0,2,0v-.743a1.982,1.982,0,0,1,.93-1.752,4,4,0,0,0-1.213-7.442Z" />
                            <rect x="11" y="17" width="2" height="2"
                                rx="1" />
                        </svg>
                    </button>
                    <span class="ml-5 py-1"> Help & Support</span>
                </a>

                {{--                </div> --}}

            </div>

        </nav>
        <div class="fixed bottom-0"></div>
    </div>

    <!--END Dash Menu-->
