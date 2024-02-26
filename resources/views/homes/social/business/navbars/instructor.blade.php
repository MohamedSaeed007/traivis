<!--Traivis Nav bar-->

<div class="sticky top-0 z-50 shadow-sm">

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

                <a href="{{ url('instructor-dashboard') }}"
                    class="group flex flex-shrink-0 items-center justify-start">
                    <button
                        class="@if (request()->routeIs('instructor-dashboard')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                        <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                            id="Layer_1" viewBox="0 0 24 24" width="512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm9.573,9.12-8.908,1.732a4.941,4.941,0,0,1-.368-.679l-3.34-7.7A9.987,9.987,0,0,1,21.573,9.12ZM12,22A9.995,9.995,0,0,1,7.124,3.278l3.338,7.691a7.011,7.011,0,0,0,2.167,2.772l6.653,5.092A9.966,9.966,0,0,1,12,22Zm8.5-4.755-6.125-4.688,7.581-1.473c.027.3.046.607.046.916A9.925,9.925,0,0,1,20.5,17.245Z" />
                        </svg>
                    </button>
                    <span class="ml-5 py-1">Overview</span>
                </a>

                @can('courses_access')
                    <a href="{{ url('instructor-dashboard/courses') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('instructor-dashboard-courses*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" fill="currentColor" height="512" id="Layer_1"
                                viewBox="0 0 512 512" width="512" x="0px" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                y="0px">
                                <path
                                    d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">My Courses</span>
                    </a>
                @endcan

                @can('students_enrolled_access')
                    <a href="{{ url('instructor-dashboard/students') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('instructor-dashboard-students*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                id="Layer_1" viewBox="0 0 24 24" width="512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">My Students</span>
                    </a>
                @endcan

                @if (config('traivis.education_institute_enabled'))
                    @can('freelances_access')
                        <a href="{{ url('instructor-dashboard/freelance') }}"
                            class="group flex flex-shrink-0 items-center justify-start">
                            <button
                                class="@if (request()->routeIs('instructor-dashboard-freelance*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                                <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                    id="Layer_1" viewBox="0 0 24 24" width="512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19,6H14.321A3.95,3.95,0,0,0,13,5.388V5l3.53-1.652a1,1,0,0,0,0-1.7l-3.2-1.5A1.637,1.637,0,0,0,11,1.636V5.388A3.937,3.937,0,0,0,9.68,6H5a5.006,5.006,0,0,0-5,5V21a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11A5.006,5.006,0,0,0,19,6Zm2.816,4H19.657a3.017,3.017,0,0,1-2.121-.879L16.414,8H19A3,3,0,0,1,21.816,10ZM5,8H7.586L6.464,9.121A3.017,3.017,0,0,1,4.343,10H2.184A3,3,0,0,1,5,8Zm8,14H11V19a1,1,0,0,1,2,0Zm8,0H15V19a3,3,0,0,0-6,0v3H3a1,1,0,0,1-1-1V12H4.343a4.968,4.968,0,0,0,3.535-1.465l2.708-2.707a2,2,0,0,1,2.828,0l2.708,2.707A4.968,4.968,0,0,0,19.657,12H22v9A1,1,0,0,1,21,22ZM7,15a1,1,0,0,1-1,1H5a1,1,0,0,1,0-2H6A1,1,0,0,1,7,15Zm0,4a1,1,0,0,1-1,1H5a1,1,0,0,1,0-2H6A1,1,0,0,1,7,19Zm13-4a1,1,0,0,1-1,1H18a1,1,0,0,1,0-2h1A1,1,0,0,1,20,15Zm0,4a1,1,0,0,1-1,1H18a1,1,0,0,1,0-2h1A1,1,0,0,1,20,19Zm-6-7a2,2,0,1,1-2-2A2,2,0,0,1,14,12Z" />
                                </svg>
                            </button>
                            <span class="ml-5 py-1">Freelance Portal</span>
                        </a>
                    @endcan
                @endif

                {{--                <div class="flex flex-col space-y-2 pt-5"> --}}

                @can('calenders_access')
                    <a href="{{ url('instructor-dashboard/calendar') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('instructor-dashboard-calender*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <x-svg-icons.fi-rr-calendar class="h-6 w-6" />
                        </button>
                        <span class="ml-5 py-1">Calender</span>
                    </a>
                @endcan
                @can('claim_rewards_access')
                    <a href="{{ url('instructor-dashboard/rewards') }}"
                        class="group flex flex-shrink-0 items-center justify-start">
                        <button
                            class="@if (request()->routeIs('instructor-dashboard-rewards*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" data-name="Layer 1" fill="currentColor" height="512"
                                id="Layer_1" viewBox="0 0 24 24" width="512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.091,16C21.661,15.964,24,12.484,24,9.5a3.5,3.5,0,0,0-2.764-3.419c.136-.387.254-.742.333-1.011a3.887,3.887,0,0,0-.626-3.458A3.979,3.979,0,0,0,17.729,0H6.271A3.979,3.979,0,0,0,3.057,1.612,3.887,3.887,0,0,0,2.431,5.07c.079.269.2.624.333,1.011A3.5,3.5,0,0,0,0,9.5c0,2.984,2.339,6.464,8.909,6.5A5.06,5.06,0,0,1,9,16.921V20a1.883,1.883,0,0,1-2,2H6a1,1,0,0,0,0,2H18a1,1,0,0,0,0-2h-.992A1.885,1.885,0,0,1,15,20V16.92A5.058,5.058,0,0,1,15.091,16ZM20.5,8A1.5,1.5,0,0,1,22,9.5c0,2.034-1.609,4.2-6.036,4.47a4.847,4.847,0,0,1,.762-.821A15.132,15.132,0,0,0,20.453,7.99C20.469,7.991,20.483,8,20.5,8ZM2,9.5A1.5,1.5,0,0,1,3.5,8c.017,0,.031-.009.047-.01a15.132,15.132,0,0,0,3.727,5.159,4.847,4.847,0,0,1,.762.821C3.609,13.7,2,11.534,2,9.5ZM10.513,22A4.08,4.08,0,0,0,11,20V16.921a6.93,6.93,0,0,0-2.431-5.295A15.338,15.338,0,0,1,4.349,4.5a1.9,1.9,0,0,1,.31-1.694A1.994,1.994,0,0,1,6.271,2H17.729a1.994,1.994,0,0,1,1.612.81,1.9,1.9,0,0,1,.31,1.694,15.338,15.338,0,0,1-4.22,7.122A6.928,6.928,0,0,0,13,16.92V20a4.08,4.08,0,0,0,.487,2Z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">Rewards</span>
                    </a>
                @endcan

                <a href="{{ url('instructor-dashboard/privacy') }}"
                    class="group flex flex-shrink-0 items-center justify-start">
                    <button
                        class="@if (request()->routeIs('instructor-dashboard-privacy*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
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

                @can('managing_mkt_portals')
                    <a class="group flex flex-shrink-0 items-center justify-start"
                        href="{{ url('instructor-dashboard/mkt_manager') }}">
                        <button
                            class="@if (request()->routeIs('instructor-dashboard-mkt_manager*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                            <svg class="h-6 w-6" fill="currentColor" id="Layer_1" height="512"
                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1">
                                <path
                                    d="m17 0a1 1 0 0 0 -1 1c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a3.979 3.979 0 0 0 1.514 3.109l3.572 7.972a3.233 3.233 0 0 0 2.953 1.919 2.982 2.982 0 0 0 2.72-4.2l-2.2-4.8h2.441c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0v-18a1 1 0 0 0 -1-1zm-8.063 20.619a.983.983 0 0 1 -.898 1.381 1.232 1.232 0 0 1 -1.126-.734l-2.808-6.266h2.254zm7.063-6.019a7.723 7.723 0 0 0 -5-1.6h-7a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h7a7.723 7.723 0 0 0 5-1.595zm7.9.852a1 1 0 0 1 -1.342.448l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 .448 1.337zm-3.79-9a1 1 0 0 1 .448-1.342l2-1a1 1 0 1 1 .894 1.79l-2 1a1 1 0 0 1 -1.342-.448zm-.11 3.548a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 -1-1z" />
                            </svg>
                        </button>
                        <span class="ml-5 py-1">MKT Manager</span>
                    </a>
                @endcan
                <a class="group flex flex-shrink-0 items-center justify-start"
                    href="{{ url('instructor-dashboard/followers') }}">
                    <button
                        class="@if (request()->routeIs('instructor-dashboard-followers*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                        <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            id="Outline" viewBox="0 0 24 24" width="512" height="512">
                            <path
                                d="M9,12A6,6,0,1,0,3,6,6.006,6.006,0,0,0,9,12ZM9,2A4,4,0,1,1,5,6,4,4,0,0,1,9,2Z" />
                            <path
                                d="M9,14a9.011,9.011,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.011,9.011,0,0,0,9,14Z" />
                            <path
                                d="M22,7.875a2.107,2.107,0,0,0-2,2.2,2.107,2.107,0,0,0-2-2.2,2.107,2.107,0,0,0-2,2.2c0,1.73,2.256,3.757,3.38,4.659a.992.992,0,0,0,1.24,0c1.124-.9,3.38-2.929,3.38-4.659A2.107,2.107,0,0,0,22,7.875Z" />
                        </svg>
                    </button>
                    <span class="ml-5 py-1">Followers</span>
                </a>
                <a class="group flex flex-shrink-0 items-center justify-start"
                    href="{{ url('instructor-dashboard/rank') }}">
                    <button
                        class="@if (request()->routeIs('instructor-dashboard-rank*')) bg-traivis-500 text-white @else  focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
                        <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512"
                            height="512">
                            <path
                                d="M21,6h-6c-.553,0-1,.447-1,1s.447,1,1,1h5.586l-6.562,6.562c-.564,.564-1.482,.564-2.047,0l-2.539-2.539c-1.344-1.344-3.531-1.344-4.875,0L.293,16.293c-.391,.391-.391,1.023,0,1.414,.195,.195,.451,.293,.707,.293s.512-.098,.707-.293l4.27-4.27c.547-.547,1.5-.547,2.047,0l2.539,2.539c1.344,1.344,3.531,1.344,4.875,0l6.563-6.562v5.586c0,.553,.447,1,1,1s1-.447,1-1v-6c0-1.654-1.346-3-3-3Z" />
                        </svg>
                    </button>
                    <span class="ml-5 py-1">My Rank</span>
                </a>

                {{--                </div> --}}

                {{--                <div class="flex flex-col space-y-2 pt-5"> --}}

                <a href="{{ url('instructor-dashboard/help') }}"
                    class="group flex flex-shrink-0 items-center justify-start">
                    <button
                        class="@if (request()->routeIs('instructor-dashboard-help*')) bg-traivis-500 text-white @else focus:bg-traivis-500 focus:text-white @endif rounded-lg p-4 group-hover:bg-traivis-500 group-hover:text-white group-focus:bg-traivis-500 group-focus:text-white">
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
