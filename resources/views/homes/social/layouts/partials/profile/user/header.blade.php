<main
    class="min-w-0 border-b-2 border-gray-200 bg-white transition-colors   lg:flex">
    <!-- Primary column -->
    <section aria-labelledby="primary-heading" x-data="{ header: false, privacy: false }"
        class="flex h-full min-w-0 flex-1 flex-col bg-white transition-colors  lg:order-last">

        <!--start profile cover-->
        <div class="relative bg-white transition-colors ">

            @if ($userType != 'user')
                <p
                    class="absolute left-0 top-1 z-10 flex max-w-xl items-center rounded-r-full bg-traivis-500 px-4 py-1 text-white ring-1 ring-white">
                    @switch($userType)
                        @case('instructor')
                            <x-svg-icons.fi-sr-book-open-reader class="mr-2 flex h-5 w-5" />
                        @break

                        @case('institute')
                            <x-svg-icons.fi-sr-school class="mr-2 flex h-5 w-5" />
                        @break

                        @case('enterprise')
                            <x-svg-icons.fi-sr-building class="mr-2 flex h-5 w-5" />
                        @break
                    @endswitch
                    {{ __(ucfirst($userType)) }}

                </p>
            @endif
            @livewire('profile.user-cover-pic', ['user' => $user])

            <!--start profile info-->
            <div x-data="{ topen: false }"
                class="mx-auto mb-4 max-w-6xl bg-white px-4 transition-colors  sm:px-6">
                <div class="relative -mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">

                    <div class="relative flex justify-center">
                        <img class="z-10 h-24 w-24 rounded-full bg-white object-cover object-center ring-4 ring-white transition-colors sm:h-32 sm:w-32"
                            src="{{ $user?->avatar }}" alt="">
                        @if ($userType != 'user' && $user?->created_by == auth()->id())
                            <form id="form" action="{{ route('post.business.image') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <label class="cursor-pointer" for="profile-image">
                                    <span
                                        class="absolute bottom-0 right-0 z-20 inline-block h-6 w-6 rounded-full border-2 border-white bg-traivis-600 text-center"><i
                                            class="la la-edit text-white"></i></span>
                                </label>
                                <input onchange="document.getElementById('form').submit()"
                                    id="profile-image" class="hidden" type="file" name="image" />
                                <input type="hidden" value="{{ $user->id }}" name="user_id" />
                            </form>
                        @endif
                    </div>

                    @if ($userType != 'user')
                        <!--User Rank-->
                        <div
                            class="absolute -top-4 left-24 mx-5 hidden flex-1 justify-start p-5 sm:flex">

                            <!--Tier-->
                            <div class="group flex w-80 flex-col items-start rounded-xl bg-black bg-opacity-30 px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-opacity-60"
                                href="#">

                                <div class="hidden">
                                    <svg class="-ml-1 mr-4 h-4 w-4 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Z" />
                                        <path
                                            d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Z" />
                                        <path
                                            d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z" />
                                    </svg>
                                </div>

                                {{--  for current tier, each tier has a different bg color in a comment at the end of the span classes --}}
                                <div
                                    class="flex w-full items-center justify-between gap-x-5 text-center font-bold text-white">

                                    <x-tooltip-arrow direction="down">
                                        <div class="group/t relative flex flex-col items-center">
                                            <span
                                                class="{{ $user->tier_id == 1 ? 'bg-[#5976f7]' : '' }} flex h-7 w-7 items-center justify-center truncate rounded-full">
                                                Ta </span>
                                            <div
                                                class="{{ $user->tier_id == 1 ? 'group-hover:bg-[#5976f7]' : 'group-hover:bg-[#726cf7]' }} h-2 w-[2px] bg-white transition-all duration-300 group-hover:bg-traivis-500">
                                            </div>
                                        </div>
                                        <x-slot name="text">
                                            Talented
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    <x-tooltip-arrow direction="down">
                                        <div class="group/t relative flex flex-col items-center">
                                            <span
                                                class="{{ $user->tier_id == 2 ? 'bg-[#5976f7]' : '' }} flex h-7 w-7 items-center justify-center truncate rounded-full">
                                                Sk </span>
                                            <div
                                                class="{{ $user->tier_id == 1 ? 'group-hover:bg-[#5976f7]' : 'group-hover:bg-[#726cf7]' }} h-2 w-[2px] bg-white transition-all duration-300">
                                            </div>
                                        </div>
                                        <x-slot name="text">
                                            Skilled
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    <x-tooltip-arrow direction="down">
                                        <div class="group/t relative flex flex-col items-center">
                                            <span
                                                class="{{ $user->tier_id == 3 ? 'bg-[#5976f7]' : '' }} flex h-7 w-7 items-center justify-center truncate rounded-full">
                                                Ex </span>
                                            <div
                                                class="{{ $user->tier_id == 1 ? 'group-hover:bg-[#5976f7]' : 'group-hover:bg-[#726cf7]' }} h-2 w-[2px] transition-all duration-300">
                                            </div>
                                        </div>
                                        <x-slot name="text">
                                            Expert
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    <x-tooltip-arrow direction="down">
                                        <div class="group/t relative flex flex-col items-center">
                                            <span
                                                class="{{ $user->tier_id == 4 ? 'bg-[#5976f7]' : '' }} flex h-7 w-7 items-center justify-center truncate rounded-full">
                                                Ma </span>
                                            <div
                                                class="{{ $user->tier_id == 1 ? 'group-hover:bg-[#5976f7]' : 'group-hover:bg-[#726cf7]' }} h-2 w-[2px] transition-all duration-300">
                                            </div>
                                        </div>
                                        <x-slot name="text">
                                            Master
                                        </x-slot>
                                    </x-tooltip-arrow>

                                    <x-tooltip-arrow direction="down">
                                        <div class="group/t relative flex flex-col items-center">
                                            <span
                                                class="{{ $user->tier_id == 5 ? 'bg-[#5976f7]' : '' }} flex h-7 w-7 items-center justify-center truncate rounded-full">
                                                PA </span>
                                            <div
                                                class="{{ $user->tier_id == 1 ? 'group-hover:bg-[#5976f7]' : 'group-hover:bg-[#726cf7]' }} h-2 w-[2px] transition-all duration-300">
                                            </div>
                                        </div>
                                        <x-slot name="text">
                                            Partner
                                        </x-slot>
                                    </x-tooltip-arrow>

                                </div>

                                <div class="flex w-full items-center justify-between gap-x-5">
                                    <div
                                        class="h-[2px] w-full rounded-lg bg-white transition-all duration-300 group-hover:bg-gradient-to-r group-hover:from-traivis-500 group-hover:to-purple-500">
                                    </div>
                                </div>

                            </div>
                            <!--/Tier-->

                        </div>
                        <!--/User Rank-->
                    @endif

                    <!--start social contact-->
                    <div
                        class="absolute right-5 top-5 flex w-fit flex-row-reverse items-center gap-x-5 py-1">
                        @if ($user?->socilaMedia?->facebook)
                            <a href="{{ $user?->socilaMedia?->facebook }}"
                                class="flex cursor-pointer justify-center rounded-full p-1.5 text-center text-sm text-white transition-all hover:bg-gray-100 hover:text-gray-500 hover:text-gray-900">
                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M16.000,8.049 C16.000,3.629 12.418,0.047 8.000,0.047 C3.582,0.047 -0.000,3.629 -0.000,8.049 C-0.000,12.043 2.925,15.353 6.750,15.953 L6.750,10.362 L4.719,10.362 L4.719,8.049 L6.750,8.049 L6.750,6.286 C6.750,4.280 7.944,3.173 9.772,3.173 C10.647,3.173 11.563,3.329 11.563,3.329 L11.563,5.298 L10.554,5.298 C9.560,5.298 9.250,5.915 9.250,6.548 L9.250,8.049 L11.469,8.049 L11.114,10.362 L9.250,10.362 L9.250,15.953 C13.075,15.353 16.000,12.043 16.000,8.049z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($user?->socilaMedia?->twitter)
                            <a href="{{ $user?->socilaMedia?->twitter }}"
                                class="flex cursor-pointer justify-center rounded-full p-1.5 text-center text-sm text-white transition-all hover:bg-gray-100 hover:text-gray-500 hover:text-gray-900">
                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M15.969,3.058c-0.586,0.26-1.217,0.436-1.878,0.515c0.675-0.405,1.194-1.045,1.438-1.809c-0.632,0.375-1.332,0.647-2.076,0.793c-0.596-0.636-1.446-1.033-2.387-1.033c-1.806,0-3.27,1.464-3.27,3.27 c0,0.256,0.029,0.506,0.085,0.745C5.163,5.404,2.753,4.102,1.14,2.124C0.859,2.607,0.698,3.168,0.698,3.767 c0,1.134,0.577,2.135,1.455,2.722C1.616,6.472,1.112,6.325,0.671,6.08c0,0.014,0,0.027,0,0.041c0,1.584,1.127,2.906,2.623,3.206 C3.02,9.402,2.731,9.442,2.433,9.442c-0.211,0-0.416-0.021-0.615-0.059c0.416,1.299,1.624,2.245,3.055,2.271 c-1.119,0.877-2.529,1.4-4.061,1.4c-0.264,0-0.524-0.015-0.78-0.046c1.447,0.928,3.166,1.469,5.013,1.469 c6.015,0,9.304-4.983,9.304-9.304c0-0.142-0.003-0.283-0.009-0.423C14.976,4.29,15.531,3.714,15.969,3.058z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($user?->socilaMedia?->whatsapp)
                            <a href="https://wa.me/{{ $user?->socilaMedia?->whatsapp }}"
                                class="flex cursor-pointer justify-center rounded-full p-1.5 text-center text-sm text-white transition-all hover:bg-gray-100 hover:text-gray-500 hover:text-gray-900">
                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M8.013,15.949 L8.009,15.949 C6.574,15.948 5.167,15.564 3.939,14.839 L3.647,14.666 L0.620,15.457 L1.428,12.517 L1.238,12.216 C0.438,10.947 0.015,9.481 0.016,7.976 C0.017,3.584 3.605,0.010 8.016,0.010 C10.152,0.011 12.160,0.841 13.669,2.347 C15.179,3.852 16.010,5.854 16.009,7.983 C16.008,12.375 12.420,15.949 8.013,15.949 ZM12.860,10.262 C12.800,10.162 12.639,10.103 12.399,9.983 C12.159,9.863 10.977,9.283 10.756,9.203 C10.536,9.124 10.376,9.084 10.215,9.323 C10.055,9.563 9.594,10.103 9.454,10.262 C9.314,10.422 9.174,10.442 8.933,10.322 C8.693,10.202 7.918,9.950 7.000,9.134 C6.285,8.499 5.803,7.714 5.663,7.475 C5.522,7.235 5.648,7.105 5.768,6.986 C5.876,6.878 6.008,6.706 6.129,6.566 C6.249,6.426 6.289,6.327 6.369,6.167 C6.449,6.007 6.409,5.867 6.349,5.747 C6.289,5.627 5.822,4.443 5.608,3.969 C5.428,3.570 5.238,3.562 5.067,3.555 C4.927,3.549 4.766,3.549 4.606,3.549 C4.446,3.549 4.185,3.609 3.965,3.849 C3.745,4.089 3.124,4.668 3.124,5.847 C3.124,7.026 3.985,8.165 4.105,8.324 C4.226,8.484 5.769,10.980 8.212,11.941 C10.243,12.739 10.656,12.580 11.097,12.540 C11.538,12.500 12.519,11.961 12.720,11.401 C12.920,10.842 12.920,10.362 12.860,10.262z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($user?->socilaMedia?->telegram)
                            <a href="{{ $user?->socilaMedia?->telegram }}"
                                class="flex cursor-pointer justify-center rounded-full p-1.5 text-center text-sm text-white transition-all hover:bg-gray-100 hover:text-gray-500 hover:text-gray-900">
                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M1.155 7.049 C 5.43 5.188 8.281 3.962 9.708 3.369 C 13.781 1.677 14.627 1.384 15.179 1.374 C 15.3 1.372 15.571 1.402 15.747 1.544 C 15.895 1.664 15.936 1.827 15.956 1.941 C 15.975 2.055 15.999 2.314 15.98 2.517 C 15.759 4.834 14.804 10.454 14.319 13.048 C 14.113 14.146 13.708 14.514 13.316 14.55 C 12.465 14.628 11.818 13.988 10.993 13.448 C 9.702 12.603 8.973 12.077 7.72 11.252 C 6.272 10.299 7.211 9.775 8.036 8.919 C 8.252 8.695 12.004 5.286 12.077 4.977 C 12.086 4.938 12.095 4.794 12.009 4.718 C 11.923 4.642 11.797 4.668 11.705 4.689 C 11.576 4.718 9.514 6.079 5.519 8.772 C 4.934 9.174 4.404 9.369 3.929 9.359 C 3.405 9.348 2.398 9.063 1.649 8.82 C 0.731 8.522 0.001 8.364 0.064 7.858 C 0.097 7.594 0.461 7.325 1.155 7.049z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                    </div>
                    <!--/ social contact-->

                    <div
                        class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">

                        <div
                            class="relative mt-6 flex min-w-0 flex-1 flex-row items-center justify-center bg-white transition-colors  md:justify-start">
                            <h1 class="mr-2 truncate bg-white text-2xl font-bold text-gray-900 transition-colors   "
                                contenteditable="false">{{ $user->name }}</h1>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="my-auto h-5 text-traivis-500 transition-colors "
                                width="24" height="24" viewbox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                    class=""></path>
                            </svg>
                            <!---- button----->
                            @if ($block_privat)
                                <button type="button" @click="topen = !topen"
                                    class="group inline-flex justify-center rounded-full border border-gray-300 bg-white p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                    <!-- Heroicon name: solid/mail -->
                                    <svg class="h-5 w-5 text-gray-400 group-hover:text-white"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        id="Outline" viewbox="0 0 24 24" width="512"
                                        height="512">
                                        <circle cx="2" cy="12" r="2">
                                        </circle>
                                        <circle cx="12" cy="12" r="2">
                                        </circle>
                                        <circle cx="22" cy="12" r="2">
                                        </circle>
                                    </svg>
                                </button>
                            @endif
                            <div x-show="topen" @click.outside="topen = false"
                                @keydown.window.escape.stop="topen = false"
                                class="absolute left-40 top-[30px] z-10 mt-2 w-40 origin-bottom-left divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none md:left-[14rem] md:top-0"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-50"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-50">

                                <div class="py-1" role="none">
                                    <button @click="header=true"
                                        class="group flex w-full items-center px-4 py-1 text-sm text-gray-700 hover:bg-traivis-500 hover:text-white"
                                        role="menuitem" tabindex="-1" id="menu-item-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                            viewBox="0 0 24 24" width="512" height="512"
                                            fill="currentColor"
                                            class="mr-3 h-5 w-5 text-gray-600 group-hover:text-white"
                                            data-name="Layer 1">
                                            <path
                                                d="M23,16a1,1,0,0,0-1,1v2a3,3,0,0,1-3,3H17a1,1,0,0,0,0,2h2a5.006,5.006,0,0,0,5-5V17A1,1,0,0,0,23,16Z">
                                            </path>
                                            <path
                                                d="M1,8A1,1,0,0,0,2,7V5A3,3,0,0,1,5,2H7A1,1,0,0,0,7,0H5A5.006,5.006,0,0,0,0,5V7A1,1,0,0,0,1,8Z">
                                            </path>
                                            <path
                                                d="M7,22H5a3,3,0,0,1-3-3V17a1,1,0,0,0-2,0v2a5.006,5.006,0,0,0,5,5H7a1,1,0,0,0,0-2Z">
                                            </path>
                                            <path
                                                d="M19,0H17a1,1,0,0,0,0,2h2a3,3,0,0,1,3,3V7a1,1,0,0,0,2,0V5A5.006,5.006,0,0,0,19,0Z">
                                            </path>
                                            <path
                                                d="M12,11A4,4,0,1,0,8,7,4,4,0,0,0,12,11Zm0-6a2,2,0,1,1-2,2A2,2,0,0,1,12,5Z">
                                            </path>
                                            <path
                                                d="M18,20a1,1,0,0,0,1-1,6.006,6.006,0,0,0-6-6H11a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0,4,4,0,0,1,4-4h2a4,4,0,0,1,4,4A1,1,0,0,0,18,20Z">
                                            </path>
                                        </svg>
                                        Card
                                    </button>
                                    @if ($userType != 'user')
                                        <a href="{{ route('busuness-followers', ['id' => $user->id]) }}"
                                            class="group flex items-center px-4 py-1 text-sm text-gray-700 hover:bg-traivis-500 hover:text-white"
                                            role="menuitem" tabindex="-1" id="menu-item-1">
                                            <svg id="Layer_1" height="512" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg"
                                                class="mr-3 h-5 w-5 text-gray-600 group-hover:text-white"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="m7.5 13a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5zm7.5 17v-.5a7.5 7.5 0 0 0 -15 0v.5a1 1 0 0 0 2 0v-.5a5.5 5.5 0 0 1 11 0v.5a1 1 0 0 0 2 0zm9-5a7 7 0 0 0 -11.667-5.217 1 1 0 1 0 1.334 1.49 5 5 0 0 1 8.333 3.727 1 1 0 0 0 2 0zm-6.5-9a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5z">
                                                </path>
                                            </svg>
                                            Followers
                                        </a>
                                    @else
                                        <a href="{{ route('user-profile-connections', ['id' => $user->id]) }}"
                                            class="group flex items-center px-4 py-1 text-sm text-gray-700 hover:bg-traivis-500 hover:text-white"
                                            role="menuitem" tabindex="-1" id="menu-item-1">
                                            <svg id="Layer_1" height="512" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg"
                                                class="mr-3 h-5 w-5 text-gray-600 group-hover:text-white"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="m7.5 13a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5zm7.5 17v-.5a7.5 7.5 0 0 0 -15 0v.5a1 1 0 0 0 2 0v-.5a5.5 5.5 0 0 1 11 0v.5a1 1 0 0 0 2 0zm9-5a7 7 0 0 0 -11.667-5.217 1 1 0 1 0 1.334 1.49 5 5 0 0 1 8.333 3.727 1 1 0 0 0 2 0zm-6.5-9a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5z">
                                                </path>
                                            </svg>
                                            Connections
                                        </a>
                                    @endif

                                    @if (auth()->check() && auth()->id() == request('id'))
                                        <button @click="privacy=true"
                                            class="group flex w-full items-center px-4 py-1 text-sm text-gray-700 hover:bg-traivis-500 hover:text-white"
                                            role="menuitem" tabindex="-1" id="menu-item-1">
                                            <svg version="1.0" fill="currentColor"
                                                class="mr-3 h-5 w-5 text-gray-600 group-hover:text-white"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="m22,14.537v-1.537c0-2.206-1.794-4-4-4s-4,1.794-4,4v1.537c-1.195.693-2,1.986-2,3.463v2c0,2.206,1.794,4,4,4h4c2.206,0,4-1.794,4-4v-2c0-1.477-.805-2.77-2-3.463Zm-6-1.537c0-1.103.897-2,2-2s2,.897,2,2v1h-4v-1Zm6,7c0,1.103-.897,2-2,2h-4c-1.103,0-2-.897-2-2v-2c0-1.103.897-2,2-2h4c1.103,0,2,.897,2,2v2Zm-2.5-1c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm-11.5-7c3.309,0,6-2.691,6-6S11.309,0,8,0,2,2.691,2,6s2.691,6,6,6Zm0-10c2.206,0,4,1.794,4,4s-1.794,4-4,4-4-1.794-4-4,1.794-4,4-4Zm1.99,13.211c-.078.547-.583.929-1.131.85-.284-.041-.574-.061-.859-.061-3.309,0-6,2.691-6,6v1c0,.552-.448,1-1,1s-1-.448-1-1v-1c0-4.411,3.589-8,8-8,.379,0,.763.027,1.141.081.547.078.927.584.85,1.131Z" />
                                            </svg>
                                            <span class="">Privacy</span>

                                        </button>
                                    @endif
                                </div>

                            </div>

                        </div>

                        <div class="mt-6 flex flex-col gap-x-4 gap-y-3 sm:flex-row sm:items-center">
                            @if ($userType == 'user')
                                <!--Influencer Registering-->
                                @livewire('influencer-informations')
                                <!--/Influencer Registering-->
                            @endif
                            @if (auth()->check())
                                @livewire('social.follow-business', ['business_id' => $user->id, 'userType' => $userType, 'urlSegment' => request()->segment(1)])

                                @livewire('message-button', ['business_id' => $user->id, 'userType' => $userType])
                            @endif

                        </div>
                    </div>
                </div>

            </div>

            <!--user stats-->
            <div
                class="relative mx-auto mb-4 flex max-w-6xl flex-col justify-center gap-x-10 gap-y-3 px-4 text-sm text-gray-500 transition-all sm:flex-row sm:justify-between sm:px-6">

                <!--job desc-->
                <div class="mx-auto w-full flex-1">
                    <p
                        class="rounded-md bg-slate-50 px-4 py-2 text-center transition-all hover:bg-slate-100 hover:text-gray-600 sm:text-justify">
                        {{ $user->description }}
                    </p>
                </div>
                <!--/job desc-->

                <!--stats-->
                @livewire('single-component.profile-status', ['user' => $user, 'userType' => $userType])
                <!--/stats-->

            </div>
            <!--End user stats-->
            <!--end profile info-->

        </div>
        <!--end profile cover-->

        <div x-show="header" class="fixed inset-0 z-[99999999999]" aria-labelledby="slide-over-title"
            role="dialog" aria-modal="true">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    aria-hidden="true" contenteditable="false"></div>

                <div class="pointer-events-none fixed inset-y-0 right-0 flex w-full pl-10">
                    <div class="pointer-events-auto relative w-full">
                        <!-------Main Container ----------->
                        <div x-on:click.outside="header=false"
                            class="float-right flex h-full w-4/5 flex-col overflow-y-scroll bg-white px-6 py-4 pt-4 shadow-xl transition-colors  lg:w-3/4 2xl:w-2/4">
                            <!-------Profile name----------->
                            @if ($userType == 'user')
                                @livewire('profile.profile-card', ['id' => request('id')])
                            @else
                                @livewire('profile.business-profile-card-for-public', ['id' => request('id')])
                            @endif

                            <div class="mt-20"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="privacy" class="fixed inset-0 z-[99999999999]" aria-labelledby="slide-over-title"
            role="dialog" aria-modal="true">
            <div class="absolute inset-0">

                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    aria-hidden="true" contenteditable="false"></div>

                <div class="pointer-events-none fixed inset-y-0 right-0 flex w-full pl-10">

                    <div class="pointer-events-auto relative w-full">

                        <!-------Main Container ----------->
                        <div
                            class="float-right flex h-full w-4/5 flex-col overflow-y-scroll bg-white px-6 py-4 pt-4 shadow-xl transition-colors  lg:w-3/4 2xl:w-2/4">

                            <!-------Profile name----------->
                            @if (auth()->check() && auth()->id() == request('id'))
                                @livewire('profile.privacy-card', ['id' => request('id')])
                            @endif
                            <div class="mt-20"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Your content -->
    </section>
    <!-- /Primary column -->
</main>

@switch($userType)
    @case('user')
        @php
            $menuItems = [
                [
                    'route' => 'user-profile-social',
                    'name' => __('Social'),
                    'icon' => 'svg-icons.fi-sr-user',
                ],
                [
                    'route' => 'user-profile-courses',
                    'name' => __('Courses'),
                    'icon' => 'svg-icons.fi-rr-graduation-cap',
                ],
                [
                    'route' => 'user-profile-rewards',
                    'name' => __('Rewards'),
                    'icon' => 'svg-icons.fi-rr-trophy',
                ],
                //[
                //    'route' => 'user-profile-analytics',
                //    'name' => __('Analytics'),
                //    'icon' => 'svg-icons.fi-rr-chart-pie',
                // ],
                [
                    'route' => 'user-profile-businesses',
                    'name' => __('Businesses'),
                    'icon' => 'svg-icons.fi-rr-chart-network',
                ],
                [
                    'route' => 'user-profile-karma',
                    'name' => __('Karma'),
                    'icon' => 'svg-icons.fi-rr-spade',
                ],
            ];
            
            if (
                \App\Models\InfluencerInformation::where([
                    'user_id' => \Illuminate\Support\Facades\Auth::id(),
                    'status' => 2,
                ])->count()
            ) {
                $menuItems[] = [
                    'route' => 'user-profile-influencer',
                    'name' => __('Influencer'),
                    'icon' => 'svg-icons.fi-rr-mike',
                ];
            }
            
        @endphp
    @break

    @case('instructor')
        @php
            $menuItems = [
                [
                    'route' => 'business-profile-social',
                    'name' => __('Social'),
                    'icon' => 'svg-icons.fi-sr-user',
                ],
                [
                    'route' => 'profile-instructor-courses',
                    'name' => __('Courses'),
                    'icon' => 'svg-icons.fi-rr-graduation-cap',
                ],
                // [
                //    'route' => 'profile-instructor-institutes',
                //    'name' => __('Institutes'),
                //    'icon' => 'svg-icons.fi-rr-school',
                // ],
            ];
        @endphp
    @break

    @case('institute')
        @php
            $menuItems = [
                [
                    'route' => 'business-profile-social',
                    'name' => __('Social'),
                    'icon' => 'svg-icons.fi-sr-user',
                ],
                [
                    'route' => 'profile-institute-courses',
                    'name' => __('Courses'),
                    'icon' => 'svg-icons.fi-rr-graduation-cap',
                ],
                [
                    'route' => 'profile-institute-instructors',
                    'name' => __('Instructors'),
                    'icon' => 'svg-icons.fi-rr-book-open-reader',
                ],
            ];
        @endphp
    @break

    @case ('enterprise')
        @php
            $menuItems = [
                [
                    'route' => 'business-profile-social',
                    'name' => __('Social'),
                    'icon' => 'svg-icons.fi-sr-user',
                ],
                [
                    'route' => 'profile-enterprise-employees',
                    'name' => __('Employees'),
                    'icon' => 'svg-icons.fi-rr-id-badge',
                ],
                [
                    'route' => 'profile-enterprise-tenders',
                    'name' => __('Tenders'),
                    'icon' => 'svg-icons.fi-rr-handshake',
                ],
            ];
        @endphp
    @break
@endswitch

<!--profile nav-->
<div class="sticky top-[72px] z-20 mb-10">
    <div class="overflow-x-auto">
        <div
            class="flex justify-center border-b border-gray-200 bg-white transition-colors  ">

            <nav class="-mb-px flex w-full max-w-3xl items-center justify-between gap-x-8 px-4"
                aria-label="Tabs">

                @foreach ($menuItems as $menuItem)
                    <!-- Current: "border-traivis-500 text-traivis-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->

                    <a href="{{ $block_privat ? route($menuItem['route'], ['id' => $user->id]) : 'javascript:void(0);' }}"
                        class="{{ \Route::current()->getName() == $menuItem['route'] && $block_privat
                            ? 'border-traivis-500 text-traivis-500 '
                            : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} group inline-flex flex-col items-center gap-x-2 gap-y-1 border-b-2 py-4 text-sm font-medium transition-colors sm:flex-row">

                        <!-- Heroicon name: solid/user
                    Current: "text-traivis-500", Default: "text-gray-400 group-hover:text-gray-500"
                                                                                        -->

                        <x-dynamic-component class="h-5 w-5" :component="$menuItem['icon']" />

                        <span>{{ $menuItem['name'] }}</span>
                    </a>
                @endforeach

                <a class="inline-flex items-center py-4">
                    @if ($block_privat)
                        <button type="button"
                            class="pointer-events-none inline-flex justify-center rounded-md border-gray-300 text-sm font-medium text-gray-400 shadow-sm transition-colors hover:bg-gray-50 focus:outline-none focus:ring-2">
                            <x-svg-icons.fi-rr-lock class="h-5 w-5" fill="currentColor" />
                            <span></span>
                        </button>
                    @else
                        <div class="group relative flex">
                            <button type="button"
                                class="pointer-events-none inline-flex justify-center rounded-md border border-traivis-500 bg-traivis-200 text-sm font-medium text-traivis-700 shadow-sm transition-colors focus:outline-none focus:ring-2">
                                <x-svg-icons.fi-rr-lock class="h-5 w-5 bg-traivis-200" />
                                <span></span>
                            </button>
                            <span style="width: 150px"
                                class="absolute left-1/2 m-4 translate-y-full rounded-md bg-gray-800 px-1 text-sm text-gray-100 opacity-0 transition-opacity group-hover:opacity-100">The
                                user locked some of this space content</span>
                        </div>
                    @endif

                </a>

            </nav>
        </div>
    </div>
</div>
<!--/profile nav-->
