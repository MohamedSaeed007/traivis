@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)
@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
    <x-modal.preview.video />
    <div class="transition-colors   ">
        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])
        <div class="flex flex-wrap md:mb-0">
            <div
                class="sticky top-[80px] hidden h-full w-full space-y-1 px-4 pl-7 md:mb-0 md:w-1/4 md:w-1/5 lg:block">
                <div class="space-y-1 border-b border-gray-200 pb-5">
                    <a href="#"
                        class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-900 transition-colors hover:bg-traivis-100  "
                        aria-current="page">
                        <!-- Heroicon name: outline/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                            width="512" height="512" aria-hidden="true" fill="currentColor"
                            class="-ml-1 mr-3 h-6 w-6 flex-shrink-0 text-gray-500 transition-colors ">
                            <path
                                d="M12,6A3,3,0,0,0,9,9V21a3,3,0,0,0,6,0V9A3,3,0,0,0,12,6Zm1,15a1,1,0,0,1-2,0V9a1,1,0,0,1,2,0Z">
                            </path>
                            <path
                                d="M21,0a3,3,0,0,0-3,3V21a3,3,0,0,0,6,0V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-2,0V3a1,1,0,0,1,2,0Z">
                            </path>
                            <path d="M3,12a3,3,0,0,0-3,3v6a3,3,0,0,0,6,0V15A3,3,0,0,0,3,12Z"></path>
                        </svg>
                        <span class="truncate"> My Rank </span>
                    </a>
                    <div class="group flex items-center justify-between">
                        <a @click="Livewire.emit('openModalFollowers','home-my-followers')" href="#"
                            class="group flex items-center rounded-md px-3 py-1 text-sm text-gray-800 transition-colors hover:bg-traivis-100 ">
                            <!-- Heroicon name: outline/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 512.19 512.19"
                                xml:space="preserve" width="512" height="512" fill="currentColor"
                                class="-ml-1 mr-3 h-4 w-4 flex-shrink-0 text-gray-800 transition-colors group-hover:text-gray-500  ">
                                <g>
                                    <circle cx="256.095" cy="256.095" r="85.333"></circle>
                                    <path
                                        d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                    </path>
                                </g>
                            </svg>
                            <span class="truncate"> {{ $user->profile_views_count }} </span>
                        </a>

                        {{-- <a href="#"
                            class="group flex items-center rounded-md px-3 py-1 text-sm text-gray-800 transition-colors hover:bg-traivis-100 ">
                            <!-- Heroicon name: outline/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" id="Filled" viewbox="0 0 24 24" width="512" height="512"
                                fill="currentColor"
                                class="-ml-1 mr-3 h-4 w-4 flex-shrink-0 text-gray-800 transition-colors group-hover:text-gray-500 ">
                                <path
                                    d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                </path>
                            </svg>
                            <span class="truncate"> 374 </span>
                        </a> --}}

                    </div>

                    {{-- <a href="#"
                        class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 transition-colors hover:bg-traivis-100 ">
                        <!-- Heroicon name: outline/trending-up -->
                        <svg class="-ml-1 mr-3 h-6 w-6 flex-shrink-0 text-gray-800 transition-colors group-hover:text-gray-500 "
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="truncate"> Next Battel </span>
                    </a> --}}

                </div>
                @livewire('home-my-courses')
                @livewire('home-my-connections')
                @livewire('social.act-as-business', ['homeDisplay' => 1])
                {{-- <div class="pl-5">

                    <div class="space-y-1">

                        <a href="#"
                            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-traivis-100 ">
                            <!-- Heroicon name: outline/fire -->
                            <x-svg-icons.fi-rr-golf />
                            <span class="truncate text-base font-bold text-gray-500">My Pages</span>

                        </a>

                    </div>

                    <div class="mt-3 space-y-2" aria-labelledby="communities-headline">

                        <a href="#"
                            class="group flex items-center rounded-md px-2 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">

                            <div class="flex-shrink-0">
                                <img class="mr-4 h-5 w-5 rounded-full"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="">
                            </div>

                            <div class="relative">
                                <!-- Online Status Dot -->
                                <div class="absolute -right-0 bottom-0 h-4 w-4 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                                    title="User is online">
                                </div>
                            </div>

                            <span class="truncate"> mohamed fadol </span>
                        </a>

                        <a href="#"
                            class="group flex items-center rounded-md px-2 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">

                            <div class="flex-shrink-0">
                                <img class="mr-4 h-5 w-5 rounded-full"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="">
                            </div>

                            <div class="relative">
                                <!-- Online Status Dot -->
                                <div class="absolute -right-0 bottom-0 h-4 w-4 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                                    title="User is online">
                                </div>
                            </div>

                            <span class="truncate"> omer ali </span>
                        </a>

                    </div>

                </div>

                <div class="border-b border-gray-200 pl-5 pb-5">

                    <div class="space-y-1">

                        <a href="#"
                            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-traivis-100">
                            <!-- Heroicon name: outline/fire -->
                            <x-svg-icons.fi-rr-users-alt />
                            <span class="truncate text-base font-bold text-gray-500">My Groups</span>

                        </a>

                    </div>

                    <div class="mt-3 space-y-2" aria-labelledby="communities-headline">

                        <a href="#"
                            class="group flex items-center rounded-md px-2 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">

                            <div class="flex-shrink-0">
                                <img class="mr-4 h-5 w-5 rounded-full"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="">
                            </div>

                            <div class="relative">
                                <!-- Online Status Dot -->
                                <div class="absolute -right-0 bottom-0 h-4 w-4 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                                    title="User is online">
                                </div>
                            </div>

                            <span class="truncate"> mohamed fadol </span>
                        </a>

                        <a href="#"
                            class="group flex items-center rounded-md px-2 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">

                            <div class="flex-shrink-0">
                                <img class="mr-4 h-5 w-5 rounded-full"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="">
                            </div>

                            <div class="relative">
                                <!-- Online Status Dot -->
                                <div class="absolute -right-0 bottom-0 h-4 w-4 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                                    title="User is online">
                                </div>
                            </div>

                            <span class="truncate"> omer ali </span>
                        </a>

                    </div>

                </div> --}}

                {{-- <div class="space-y-1" id="myCourses" x-data="{open:false}">
                    <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                    @include('homes.social.layouts.partials.courses.components.courses-button',
                    ['text'=>__('My Courses'),
                    'icon'=>'svg-icons.fi-rr-briefcase',
                    'link'=>'team'
                    ])

                    <!-- Expandable link section, show/hide based on state. -->
                    <div class="space-y-1" id="sub-menu-2" x-show="open" x-cloak x-collapse>
                        <a href="#" class="
                   group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium
                   text-gray-500
                   hover:text-gray-900
                   hover:bg-gray-50


                   rounded-md
                   ">
                            <x-svg-icons.fi-sr-heart
                                    class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  "/>
                            {{__('Wishlist')}}
                        </a>

                        <a href="#"
                           class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-500 rounded-md hover:text-gray-900 hover:bg-gray-50  ">
                            <x-svg-icons.fi-sr-book-open-reader
                                    class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  "/>
                            {{__('Enrolled')}}
                        </a>

                        <a href="#"
                           class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-500 rounded-md hover:text-gray-900 hover:bg-gray-50  ">
                            <x-svg-icons.fi-sr-badge-check
                                    class="w-5 h-5 mr-2 text-traivis group-hover:text-traivis-700  "/>
                            {{__('Completed')}}
                        </a>
                    </div>
                </div>

                <div class="space-y-1" id="myQuizzes" x-data="{open:false}">

                    @include('homes.social.layouts.partials.courses.components.courses-button',
                    ['text'=>__('My Quizzes'),
                    'icon'=>'svg-icons.fi-rr-test',
                    'link'=>'team'
                    ])

                    <!-- Expandable link section, show/hide based on state. -->
                    <div class="space-y-1" id="sub-menu-3" x-show="open" x-cloak x-collapse>
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
                    @include('homes.social.layouts.partials.courses.components.courses-button',
                    ['text'=>'My Certificates',
                    'icon'=>'svg-icons.fi-rr-diploma',
                    'link'=>'team'
                    ])

                    <!-- Expandable link section, show/hide based on state. -->
                    <div class="space-y-1" id="sub-menu-4" x-show="open" x-cloak x-collapse>
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
                </div> --}}
                {{-- <div class="py-5">

                    <div class="space-y-1">

                        <a href="#"
                            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-traivis-100">
                            <!-- Heroicon name: outline/fire -->
                            <x-svg-icons.fi-rr-thumbtack />
                            <span class="truncate text-base font-bold text-gray-500">Pin</span>
                        </a>
                    </div>

                    <div class="mt-3 space-y-2" aria-labelledby="communities-headline">

                        <a href="#"
                            class="group flex items-center rounded-md px-1 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">
                            <span class="truncate"> Resume Course </span>
                        </a>

                        <a href="#"
                            class="group flex items-center rounded-md px-1 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">
                            <span class="truncate"> complete Porfile </span>
                        </a>

                        <a href="#"
                            class="group flex items-center rounded-md px-1 py-1 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900  ">
                            <span class="truncate"> Payments </span>
                        </a>

                    </div>

                </div> --}}

            </div>
            @livewire('home-my-followers')

            @livewire('home-feed')
            <div class="mb-4 w-full px-4 md:mb-0 md:w-1/3 lg:w-1/5">

                @livewire('home-ads')
                @livewire('home-trending-courses')
                @livewire('home-trending-blogs')

            </div>
        </div>
    </div>
    @if (!$user->took_survey)
        @livewire('home-survey')
    @endif
@endsection

{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic,latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset(mix('js/app.js'), true)}}"></script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('#user-menu-button')
            const dropdown = document.querySelector('#dropdown')

            menuBtn.addEventListener('click', () => {
                /* if(dropdown.classList.contains('hidden')){
                    dropdown.classList.remove('hidden');
                    dropdown.classList.add('flex');
                }else{
                    dropdown.classList.remove('flex')
                    dropdown.classList.add('hidden')
                } */

                dropdown.classList.toggle('hidden')
                dropdown.classList.toggle('flex')
            })

        })
    </script>


    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('#post-menu-button')
            const dropdown = document.querySelector('#post-dropdown')

            menuBtn.addEventListener('click', () => {
                //  if(dropdown.classList.contains('hidden')){
                //     dropdown.classList.remove('hidden');
                //     dropdown.classList.add('flex');
                // }else{
                //     dropdown.classList.remove('flex')
                //     dropdown.classList.add('hidden')
                // }

                dropdown.classList.toggle('hidden')
                dropdown.classList.toggle('flex')
            })

        })
    </script>
</head>

<body class="antialiased bg-body text-body font-body overflow-x-hidden">
    <script src="https://fastly.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/charts-demo.js"></script>
</body>

</html> --}}
