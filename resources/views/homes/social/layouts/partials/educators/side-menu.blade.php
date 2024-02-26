<aside x-data="{ SMopen: true }" class="sticky top-[72px] h-[90vh] flex-shrink-0 transition-all bg-white z-20 border-r border-slate-300">

    <div class="bottom-1/2 translate-y-1/2 absolute z-50" :class="SMopen ? '-right-5' : '-right-16'">
        <x-tooltip-arrow direction="left" class="">
            <x-slot name="text">
                Show/Hide Navigator
            </x-slot>
            <button x-on:click="SMopen = ! SMopen" :class="SMopen ? 'text-traivis-500 hover:text-gray-500 bg-traivis-50 hover:bg-slate-100 -right-5' : 'text-gray-500 hover:text-traivis-500 hover:bg-traivis-50 -right-16 shadow-md'"
                    class="duration-200 h-fit w-fit transition-all group border z-50 block  p-3 border-slate-300 bg-white rounded-full focus-within:ring-0 hover:shadow-md">

                <svg :class="SMopen ? 'block' : 'hidden'" class="h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 512.051 512.051" style="enable-background:new 0 0 512.051 512.051;" xml:space="preserve" width="512" height="512"><g><path d="M21.359,101.359h58.368c11.52,42.386,55.219,67.408,97.605,55.888c27.223-7.399,48.489-28.665,55.888-55.888h257.472   c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333H233.22C221.7,16.306,178.001-8.716,135.615,2.804   c-27.223,7.399-48.489,28.665-55.888,55.888H21.359c-11.782,0-21.333,9.551-21.333,21.333S9.577,101.359,21.359,101.359z"/><path d="M490.692,234.692h-58.368c-11.497-42.38-55.172-67.416-97.552-55.92c-27.245,7.391-48.529,28.674-55.92,55.92H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h257.493c11.497,42.38,55.172,67.416,97.552,55.92   c27.245-7.391,48.529-28.674,55.92-55.92h58.368c11.782,0,21.333-9.551,21.333-21.333   C512.025,244.243,502.474,234.692,490.692,234.692z"/><path d="M490.692,410.692H233.22c-11.52-42.386-55.219-67.408-97.605-55.888c-27.223,7.399-48.489,28.665-55.888,55.888H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h58.368c11.52,42.386,55.219,67.408,97.605,55.888   c27.223-7.399,48.489-28.665,55.888-55.888h257.472c11.782,0,21.333-9.551,21.333-21.333   C512.025,420.243,502.474,410.692,490.692,410.692z"/></g></svg>
                <svg :class="SMopen ? 'hidden' : 'block'" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" ><path d="M1,4.75H3.736a3.728,3.728,0,0,0,7.195,0H23a1,1,0,0,0,0-2H10.931a3.728,3.728,0,0,0-7.195,0H1a1,1,0,0,0,0,2ZM7.333,2a1.75,1.75,0,1,1-1.75,1.75A1.752,1.752,0,0,1,7.333,2Z"/><path d="M23,11H20.264a3.727,3.727,0,0,0-7.194,0H1a1,1,0,0,0,0,2H13.07a3.727,3.727,0,0,0,7.194,0H23a1,1,0,0,0,0-2Zm-6.333,2.75A1.75,1.75,0,1,1,18.417,12,1.752,1.752,0,0,1,16.667,13.75Z"/><path d="M23,19.25H10.931a3.728,3.728,0,0,0-7.195,0H1a1,1,0,0,0,0,2H3.736a3.728,3.728,0,0,0,7.195,0H23a1,1,0,0,0,0-2ZM7.333,22a1.75,1.75,0,1,1,1.75-1.75A1.753,1.753,0,0,1,7.333,22Z"/></svg>

            </button>
        </x-tooltip-arrow>
    </div>

    <div :class="SMopen ? 'shadow-none' : '-ml-80 opacity-0'"
        class="duration-200 opacity-100 h-full relative flex flex-col w-80 overflow-y-auto pb-20 transition-all -ml-0 block">
        <div
            class="flex mt-2 flex-col flex-grow border-gray-200 pb-4 bg-white overflow-y-auto transition-colors ">
            <div class="flex-grow flex flex-col">
                <nav class="flex-1 px-7 space-y-1 bg-white transition-colors  pt-1" aria-label="Sidebar"
                    x-data="">
                    <div class="space-y-1" id="browseEducators" x-data="{open:true}">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <button @click="open= !open" type="button"
                            class=" bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500"
                            aria-controls="sub-menu-1" aria-expanded="false" :aria-expanded="open.toString()">
                            <!-- Heroicon name: outline/users -->
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                fill="currentColor"
                                class="mr-3 flex-shrink-0 h-6 w-6 text-traivis group-hover:text-traivis-700">
                                <path
                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                </path>
                            </svg>
                            <span class="flex-1"> Browse {{$pageName}}  </span>
                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                :class="{'text-gray-400 rotate-90': open, 'text-gray-300': !open }"
                                class="ml-3 flex-shrink-0 h-4 w-4 transform group-hover:text-gray-400 transition-all ease-in-out duration-150 text-gray-300">
                                <path
                                    d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z">
                                </path>
                            </svg>
                        </button>
                        <!-- Expandable link section, show/hide based on state. -->
                        <div class="space-y-1" id="sub-menu-1" x-show="open" x-collapse="" style="display: none;">

                            
                            <livewire:educators-filters-sidemenu />

                        </div>
                    </div>

                    <div class="space-y-1" id="myCourses" x-data="{open:false}">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <button @click="open= !open" type="button"
                            class="bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500"
                            aria-controls="sub-menu-1" aria-expanded="false" :aria-expanded="open.toString()">
                            <!-- Heroicon name: outline/users -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                                fill="currentColor"
                                class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500">
                                <path
                                    d="M19,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H5A5.006,5.006,0,0,0,0,9V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V9A5.006,5.006,0,0,0,19,4ZM11,2h2a3,3,0,0,1,2.816,2H8.184A3,3,0,0,1,11,2ZM5,6H19a3,3,0,0,1,3,3v3H2V9A3,3,0,0,1,5,6ZM19,22H5a3,3,0,0,1-3-3V14h9v1a1,1,0,0,0,2,0V14h9v5A3,3,0,0,1,19,22Z">
                                </path>
                            </svg>


                            <span class="flex-1"> My Courses </span>
                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                :class="{'text-gray-400 rotate-90': open, 'text-gray-300': !open }"
                                class="ml-3 flex-shrink-0 h-4 w-4 transform group-hover:text-gray-400 transition-all ease-in-out duration-150 text-gray-300">
                                <path
                                    d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z">
                                </path>
                            </svg>







                        </button>

                        <!-- Expandable link section, show/hide based on state. -->
                        <div class="space-y-1" id="sub-menu-2" x-show="open" x-collapse=""
                            style="height: 0px; overflow: hidden; display: none;" hidden="">
                            <a href="#" class="
                            group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium
                            text-gray-500
                            hover:text-gray-900
                            hover:bg-gray-50


                            rounded-md
                            ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  ">
                                    <path
                                        d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                    </path>
                                </svg>
                                Wishlist
                            </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-500 rounded-md hover:text-gray-900 hover:bg-gray-50  ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  ">
                                    <path
                                        d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                    </path>
                                </svg>
                                Enrolled
                            </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-500 rounded-md hover:text-gray-900 hover:bg-gray-50  ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  ">
                                    <path
                                        d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                    </path>
                                </svg>
                                Completed
                            </a>
                        </div>
                    </div>

                    <div class="space-y-1" id="myQuizzes" x-data="{open:false}">

                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <button @click="open= !open" type="button"
                            class="bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500"
                            aria-controls="sub-menu-1" aria-expanded="true" :aria-expanded="open.toString()">
                            <!-- Heroicon name: outline/users -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                                fill="currentColor"
                                class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500">
                                <path
                                    d="m16 17a1 1 0 0 1 0 2h-1a1 1 0 0 1 0-2zm-2-2a1 1 0 0 1 -1-1v-1h-2v1a1 1 0 0 1 -2 0v-4a3 3 0 0 1 6 0v4a1 1 0 0 1 -1 1zm-1-4v-1a1 1 0 0 0 -2 0v1zm-1.711 5.3-1.612 1.63a.25.25 0 0 1 -.344.01l-.616-.64a1 1 0 0 0 -1.434 1.4l.626.644a2.255 2.255 0 0 0 3.186 0l1.616-1.644a1 1 0 0 0 -1.422-1.4zm9.711-9.643v12.343a5.006 5.006 0 0 1 -5 5h-8a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h6.343a4.969 4.969 0 0 1 3.536 1.465l1.656 1.656a4.969 4.969 0 0 1 1.465 3.536zm-4.535-3.778a3.042 3.042 0 0 0 -.465-.379v2.5h2.5a3.042 3.042 0 0 0 -.38-.465zm2.535 4.121h-3a2 2 0 0 1 -2-2v-3h-6a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3z">
                                </path>
                            </svg>


                            <span class="flex-1"> My Quizzes </span>
                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                :class="{'text-gray-400 rotate-90': open, 'text-gray-300': !open }"
                                class="ml-3 flex-shrink-0 h-4 w-4 transform group-hover:text-gray-400 transition-all ease-in-out duration-150 text-gray-400 rotate-90">
                                <path
                                    d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z">
                                </path>
                            </svg>







                        </button>

                        <!-- Expandable link section, show/hide based on state. -->
                        <div class="space-y-1" id="sub-menu-3" x-show="open" x-collapse=""
                            style="height: 0px; overflow: hidden;" hidden="">
                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 1 </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 2 </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 3 </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 4 </a>
                        </div>
                    </div>

                    <div class="space-y-1" id="myCertificates" x-data="{open:false}">
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <button @click="open= !open" type="button"
                            class="bg-white transition-colors  text-gray-600  hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-traivis-500"
                            aria-controls="sub-menu-1" aria-expanded="true" :aria-expanded="open.toString()">
                            <!-- Heroicon name: outline/users -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xml:space="preserve"
                                fill="currentColor"
                                class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500">
                                <path
                                    d="m11 12a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2zm6-3a1 1 0 0 0 -1-1h-8a1 1 0 0 0 0 2h8a1 1 0 0 0 1-1zm-9-3h8a1 1 0 0 0 0-2h-8a1 1 0 0 0 0 2zm12 13.444v3.833a.721.721 0 0 1 -1.231.51l-.769-.768-.769.768a.721.721 0 0 1 -1.231-.51v-3.833a3.987 3.987 0 0 1 2-7.444 3.939 3.939 0 0 1 1 .142v-7.142a3 3 0 0 0 -3-3h-8a3 3 0 0 0 -3 3v12a3 3 0 0 0 3 3h5a1 1 0 0 1 0 2h-5a5.006 5.006 0 0 1 -5-5v-12a5.006 5.006 0 0 1 5-5h8a5.006 5.006 0 0 1 5 5v8.382a3.95 3.95 0 0 1 -1 6.062zm0-3.444a2 2 0 1 0 -2 2 2 2 0 0 0 2-2z">
                                </path>
                            </svg>


                            <span class="flex-1"> My Certificates </span>
                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                :class="{'text-gray-400 rotate-90': open, 'text-gray-300': !open }"
                                class="ml-3 flex-shrink-0 h-4 w-4 transform group-hover:text-gray-400 transition-all ease-in-out duration-150 text-gray-400 rotate-90">
                                <path
                                    d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z">
                                </path>
                            </svg>







                        </button>

                        <!-- Expandable link section, show/hide based on state. -->
                        <div class="space-y-1" id="sub-menu-4" x-show="open" x-collapse=""
                            style="height: 0px; overflow: hidden;" hidden="">
                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 1 </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 2 </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 3 </a>

                            <a href="#"
                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                Menu item 4 </a>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
        <script>
            function test() {
                console.log('test1');
                console.log('test2');
                                                                                this.$el.checked=!$el.checked;
                                                                                this.$refs.categoriesForm.submit();
            }
        </script>
    </div>
</aside>