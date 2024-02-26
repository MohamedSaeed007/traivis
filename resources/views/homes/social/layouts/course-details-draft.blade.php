@extends('homes.social.layouts.base')
@section('htmlClass', 'h-full bg-gray-100')
@section('title', __('Course: ') . $title)

@section('bodyClass', 'h-full overflow-hidden')
@section('body')
{{-- @dump($course->toArray(), $isEnrolled) --}}

<!--
                                                                                                                                                                                                              This example requires Tailwind CSS v2.0+

                                                                                                                                                                                                              This example requires some changes to your config:

                                                                                                                                                                                                              ```
                                                                                                                                                                                                              // tailwind.config.js
                                                                                                                                                                                                              module.exports = {
                                                                                                                                                                                                                // ...
                                                                                                                                                                                                                plugins: [
                                                                                                                                                                                                                  // ...
                                                                                                                                                                                                                  require('@tailwindcss/forms'),
                                                                                                                                                                                                                ],
                                                                                                                                                                                                              }
                                                                                                                                                                                                              ```
                                                                                                                                                                                                            -->
<!--
                                                                                                                                                                                                                  This example requires updating your template:

                                                                                                                                                                                                                  ```
                                                                                                                                                                                                                  <html class="h-full bg-gray-100">
                                                                                                                                                                                                                  <body class="h-full overflow-hidden">
                                                                                                                                                                                                                  ```
                                                                                                                                                                                                                -->
<div class="flex h-full flex-col bg-white">
    <!-- Top nav-->
    {{-- <header x-data="{ open: false,activeIndex: 0}" @keydown.window.escape="open = false"
        class="flex-shrink-0 relative h-16 bg-white flex items-center">
        <!-- Logo area -->
        <div class="absolute inset-y-0 left-0 md:static md:flex-shrink-0">
            <a href="#"
                class="flex items-center justify-center h-16 w-16 text-traivis-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-traivis-600 md:w-20">
                <x-svg-icons.logo-square class="h-8 w-auto" />
            </a>
        </div>

        <!-- Picker area -->
        <div class="mx-auto md:hidden">
            <div class="relative">
                <label for="inbox-select" class="sr-only">Choose inbox</label>
                <select id="inbox-select"
                    class="rounded-md border-0 bg-none pl-3 pr-8 text-base font-medium text-gray-900 focus:ring-2 focus:ring-traivis-600">
                    <option selected>Open</option>

                    <option>Archive</option>

                    <option>Customers</option>

                    <option>Flagged</option>

                    <option>Spam</option>

                    <option>Drafts</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center justify-center pr-2">
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Menu button area -->
        <div class="absolute inset-y-0 right-0 pr-4 flex items-center sm:pr-6 md:hidden">
            <!-- Mobile menu button -->
            <button type="button"
                class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-traivis-600"
                @click="open = true">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Desktop nav area -->
        <div class="hidden md:min-w-0 md:flex-1 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <div class="max-w-2xl relative text-gray-400 focus-within:text-gray-500">
                    <label for="desktop-search" class="sr-only">Search</label>
                    <input id="desktop-search" type="search" placeholder="Search"
                        class="block w-full border-transparent pl-12 placeholder-gray-500 focus:border-transparent sm:text-sm focus:ring-0">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center justify-center pl-4">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="ml-10 pr-4 flex-shrink-0 flex items-center space-x-10">
                <nav aria-label="Global" class="flex space-x-10">
                    <a href="#" class="text-sm font-medium text-gray-900">Inboxes</a>
                    <a href="#" class="text-sm font-medium text-gray-900">Reporting</a>
                    <a href="#" class="text-sm font-medium text-gray-900">Settings</a>
                </nav>
                <div class="flex items-center space-x-8">
                    <span class="inline-flex">
                        <a href="#" class="-mx-1 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </a>
                    </span>

                    <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.outside="open = false"
                        class="relative inline-block text-left">
                        <button @click="open = !open" type="button"
                            class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-traivis-600"
                            id="menu-0-button" aria-expanded="false" aria-haspopup="true"
                            x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full object-contain"
                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>

                        <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="origin-top-right absolute z-30 right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1"
                            @keydown.tab="open = false" @keydown.enter.prevent="open = false"
                            @keyup.space.prevent="open = false">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                    :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1"
                                    id="menu-0-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1"
                                    @click="open = false">
                                    Your Profile
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                    :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1"
                                    id="menu-0-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1"
                                    @click="open = false">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide this `div` based on menu open/closed state -->

        <div x-show="open" x-cloak class="fixed inset-0 z-40 md:hidden" role="dialog" aria-modal="true">
            <!--
                  Off-canvas menu overlay, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
            <div x-show="open" x-cloak x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="hidden sm:block sm:fixed sm:inset-0 sm:bg-gray-600 sm:bg-opacity-75" @click="open = false"
                aria-hidden="true">

            </div>

            <!--
                  Mobile menu, toggle classes based on menu state.

                  Entering: "transition ease-out duration-150 sm:ease-in-out sm:duration-300"
                    From: "transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
                    To: "transform opacity-100 scale-100  sm:translate-x-0 sm:scale-100 sm:opacity-100"
                  Leaving: "transition ease-in duration-150 sm:ease-in-out sm:duration-300"
                    From: "transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
                    To: "transform opacity-0 scale-110  sm:translate-x-full sm:scale-100 sm:opacity-100"
                -->
            <nav x-show="open" x-cloak
                x-transition:enter="transition ease-out duration-150 sm:ease-in-out sm:duration-300"
                x-transition:enter-start="transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
                x-transition:enter-end="transform opacity-100 scale-100  sm:translate-x-0 sm:scale-100 sm:opacity-100"
                x-transition:leave="transition ease-in duration-150 sm:ease-in-out sm:duration-300"
                x-transition:leave-start="transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
                x-transition:leave-end="transform opacity-0 scale-110  sm:translate-x-full sm:scale-100 sm:opacity-100"
                class="fixed z-40 inset-0 h-full w-full bg-white sm:inset-y-0 sm:left-auto sm:right-0 sm:max-w-sm sm:w-full sm:shadow-lg"
                aria-label="Global">
                <div class="h-16 flex items-center justify-between px-4 sm:px-6">
                    <a href="#">
                        <img class="block h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-mark.svg?color=traivis&shade=500"
                            alt="Workflow">
                    </a>
                    <button type="button"
                        class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-traivis-600"
                        @click="open = false">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-2 max-w-8xl mx-auto px-4 sm:px-6">
                    <div class="relative text-gray-400 focus-within:text-gray-500">
                        <label for="mobile-search" class="sr-only">Search all inboxes</label>
                        <input id="mobile-search" type="search" placeholder="Search all inboxes"
                            class="block w-full border-gray-300 rounded-md pl-10 placeholder-gray-500 focus:border-traivis-600 focus:ring-traivis-600">
                        <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-3">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="max-w-8xl mx-auto py-3 px-2 sm:px-4">
                    <a href="#"
                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Inboxes</a>
                    <a href="#"
                        class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Technical
                        Support</a>
                    <a href="#"
                        class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Sales</a>
                    <a href="#"
                        class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">General</a>
                    <a href="#"
                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Reporting</a>
                    <a href="#"
                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Settings</a>
                </div>
                <div class="border-t border-gray-200 pt-4 pb-3">
                    <div class="max-w-8xl mx-auto px-4 flex items-center sm:px-6">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3 min-w-0 flex-1">
                            <div class="text-base font-medium text-gray-800 truncate">Whitney Francis</div>
                            <div class="text-sm font-medium text-gray-500 truncate">
                                whitney.francis@example.com
                            </div>
                        </div>
                        <a href="#" class="ml-auto flex-shrink-0 bg-white p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </a>
                    </div>
                    <div class="mt-3 max-w-8xl mx-auto px-2 space-y-1 sm:px-4">
                        <a href="#"
                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Sign
                            out</a>
                    </div>
                </div>
            </nav>
        </div>
    </header> --}}
    @include('homes.social.layouts.partials.courses.header', [
    'no_result_panel_for_global_search' => true,
    ])
    <!-- Bottom section -->
    <div class="flex min-h-0 flex-1 overflow-hidden">
        <!-- Narrow sidebar-->
        <nav aria-label="Sidebar" class="{{-- md:bg-gray-800 --}} hidden md:block md:flex-shrink-0 md:overflow-y-auto">
            <div class="relative flex w-20 flex-col space-y-3 p-3">
                <a href="#"
                    class="{{-- bg-gray-900 --}} inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg text-traivis">
                    <span class="sr-only">Open</span>
                    <x-svg-icons.fi-sr-graduation-cap class="h-6 w-6" />
                </a>

                <a href="#"
                    class="inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-700">
                    <span class="sr-only">Archive</span>
                    <!-- Heroicon name: outline/archive -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                </a>

                <a href="#"
                    class="inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-700">
                    <span class="sr-only">Customers</span>
                    <!-- Heroicon name: outline/user-circle -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>

                <a href="#"
                    class="inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-700">
                    <span class="sr-only">Flagged</span>
                    <!-- Heroicon name: outline/flag -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                    </svg>
                </a>

                <a href="#"
                    class="inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-700">
                    <span class="sr-only">Spam</span>
                    <!-- Heroicon name: outline/ban -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                </a>

                <a href="#"
                    class="inline-flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-lg text-gray-400 hover:bg-gray-700">
                    <span class="sr-only">Drafts</span>
                    <!-- Heroicon name: outline/pencil-alt -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
            </div>
        </nav>

        <!-- Main area -->
        <main class="min-w-0 flex-1 border-t border-gray-200 lg:flex">
            <!-- Secondary column (hidden on smaller screens) -->
            <aside class="hidden lg:order-first lg:block lg:flex-shrink-0">
                <div class="{{-- border-r border-gray-200 --}} relative flex h-full w-96 flex-col overflow-y-auto">
                    <!-- Your content -->

                    <!-- part 1 content -->
                    <div class="flex flex-col items-center">
                        <div class="h-32 w-full bg-traivis-100"></div>
                        <div class="-mt-16 flex items-end space-x-5">
                            <img class="h-32 w-32 rounded-full ring-4 ring-white drop-shadow-md"
                                src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                alt="" />
                        </div>
                        <div>
                            <div class="mt-4 flex min-w-0">
                                <h1 class="truncate text-2xl font-bold text-gray-900">Ricardo Cooper
                                </h1>
                                <x-svg-icons.fi-sr-badge-check class="ml-2 w-5 text-traivis-600 drop-shadow-lg" />
                            </div>
                            <div class="mt-2 flex justify-center">
                                <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                <x-svg-icons.fi-rr-star class="w-4 text-yellow-500" />
                            </div>
                        </div>
                        <div class="mt-2">Text Text Text Text Text Text Text Text Text Text Text Text
                        </div>
                    </div>

                    <!-- part 2 content -->
                    <div>

                        <x-menu-header-style2 text="title here 1" class="mt-4">
                            <x-slot name="image">
                                <img class="h-8 w-8 rounded-full object-contain"
                                    src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </x-slot>
                        </x-menu-header-style2>

                        <x-menu-list-style2>
                            <x-menu-button-style2 href="#linkHere" text="Graph API" />
                            <x-menu-button-style2 href="#linkHere" text="ssss" active="1" />
                            <x-menu-button-style2 href="#linkHere" text="Templates" />
                            <x-menu-button-style2 href="#linkHere" text="React Components" />
                        </x-menu-list-style2>
                    </div>

                    <!-- part 3 test content -->

                    {{--
                    <div class="max-w-md mx-auto bg-white shadow-xl min-w-0">
                        <div class="overflow-x-scroll flex">
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Andrew</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Emily</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Whitney</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">David</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Kristin</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1605405748313-a416a1b84491?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Sarah</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}

                    <!-- part 3 content -->

                    <x-menu-header-style2 text="title here 2" class="mt-4">
                        <x-slot name="image">
                            <img class="h-8 w-8 rounded-full object-contain"
                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </x-slot>
                    </x-menu-header-style2>
                    <x-modal.preview.video />

                    <!-- part 3 content -->
                    <div>
                        <ul role="list"
                            class="mt-5 flex touch-pan-x snap-x snap-mandatory gap-x-4 gap-y-8 overflow-hidden hover:overflow-x-scroll sm:gap-x-6">
                            @foreach (range(1, 10) as $itemKey => $item)
                            <li class="snap-center">
                                <x-video-container class="w-28 rounded-lg"
                                    video-src="'https://player.vimeo.com/video/564595151'+'?autoplay=1'" />
                            </li>
                            @endforeach
                            <!--- more items -->
                        </ul>
                    </div>
                    <!-- part 3 test content -->
                    {{--

                    <div class="max-w-md mx-auto bg-white shadow-xl min-w-0">
                        <div class="overflow-x-scroll flex">
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Andrew</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Emily</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Whitney</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">David</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Kristin</strong>
                                </div>
                            </div>
                            <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
                                <div class="flex flex-col items-center justify-center gap-3">
                                    <img class="w-18 h-18 rounded-full"
                                        src="https://images.unsplash.com/photo-1605405748313-a416a1b84491?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80">
                                    <strong
                                        class="text-slate-900 text-xs font-medium ">Sarah</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}

                </div>
            </aside>
            <!-- Primary column -->
            <section aria-labelledby="primary-heading" class="flex h-full min-w-0 flex-1 overflow-y-auto lg:order-last">
                <h1 id="primary-heading" class="sr-only">Home</h1>
                <!-- Your content -->
                <div class="flex h-full min-w-0 flex-1 overflow-y-auto">

                    <div class="flex-grow px-2">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="rounded-b-lg border-r border-l border-b border-gray-200 lg:justify-between">
                            <div class="bg-traivis-600 px-5 pt-2 pb-5">
                                <div class="min-w-0 flex-1">
                                    <h2
                                        class="mt-2 text-2xl font-bold leading-7 text-white drop-shadow-lg sm:truncate sm:text-3xl">
                                        Python for beginners</h2>
                                    <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                                        <div class="mt-2 flex justify-center gap-1 drop-shadow-lg">
                                            <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                            <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                            <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                            <x-svg-icons.fi-sr-star class="w-4 text-yellow-500" />
                                            <x-svg-icons.fi-sr-star class="w-4 text-white" />
                                            <div class="ml-2 font-bold text-white">1200</div>
                                        </div>

                                    </div>
                                    <div class="mt-2 text-white drop-shadow-lg">text text text text text
                                        text text text text text text text text text text text text text
                                        text text text text text text text text text text text text text
                                        text
                                    </div>
                                </div>
                                <div class="mt-5 flex lg:mt-0 lg:ml-4">

                                </div>
                            </div>
                            <div class="flex h-10 bg-traivis-100 font-bold text-gray-500">
                                <div class="flex flex-1 items-center justify-center">
                                    <x-svg-icons.fi-sr-settings-sliders class="mr-2 h-5" />
                                    Beginners
                                </div>
                                <div class="flex flex-1 items-center justify-center">
                                    <x-tooltip-arrow-up text="Devilry mode">
                                        <x-svg-icons.fi-sr-presentation class="mr-2 h-5" />
                                    </x-tooltip-arrow-up>
                                    <x-tooltip-arrow-up text="Face to Face">F2F</x-tooltip-arrow-up>
                                    /
                                    <x-tooltip-arrow-up text="Live">LIV</x-tooltip-arrow-up>
                                </div>
                                <div class="flex flex-1 items-center justify-center">
                                    <x-svg-icons.fi-sr-puzzle-piece class="mr-2 h-5" />
                                    20 lectures
                                </div>
                                <div class="flex flex-1 items-center justify-center">
                                    <x-svg-icons.fi-sr-chart-set-theory class="mr-2 h-5" />
                                    20/8 groups
                                </div>
                                <div class="flex flex-1 items-center justify-center">
                                    <x-svg-icons.fi-sr-clock-three class="mr-2 h-5" />
                                    60hrs
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex gap-1 p-2">
                                    <div class="rounded-md bg-traivis-200 px-2 py-1 text-traivis-600">
                                        programming
                                    </div>
                                    <div class="rounded-md bg-traivis-200 px-2 py-1 text-traivis-600">python
                                    </div>
                                </div>
                                <div class="flex-grow"></div>
                                <div class="flex items-center gap-4 p-1 font-bold text-gray-500">
                                    <div class="flex gap-1">
                                        <x-svg-icons.fi-rr-comments class="h-6 w-6" />
                                        Message
                                    </div>
                                    <div class="flex gap-1">
                                        <x-svg-icons.fi-rr-heart class="h-6 w-6" />
                                        Save
                                    </div>
                                    <div class="flex gap-1">
                                        <x-svg-icons.fi-rr-share class="h-6 w-6" />
                                        Share
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-10 pt-5 pb-10 text-gray-500">

                            @if ($course->maker->id == session('business_id'))
                            this business is the maker of this course and can create chime meeting
                            @endif

                            <x-expandable-panel-style1 title="Overview Video" init-open>
                                @if ($course->overview_video)
                                <video width="420" height="440" controls>
                                    <source src="{{ $course->video }}" type="video/mp4">
                                    <source src="{{ $course->video }}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                                @else
                                No Overview Video Yet
                                @endif

                            </x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="Description">
                                {{ $course->short_description }}
                            </x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="What you will learn">{{ $course->description }}
                            </x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="What's Included">{{ $course->benefits }}
                            </x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="Curriculum">{{ $course->cert_accr }}
                            </x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="Requirements">{{ $course->requirements }}
                            </x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="Instructors">Instructors</x-expandable-panel-style1>
                            <x-expandable-panel-style1 title="Reviews">Reviews</x-expandable-panel-style1>
                        </div>
                    </div>

                    <!-- part 2 content -->
                    <div class="w-72">
                        <x-video-container class="max-w"
                            video-src="'https://player.vimeo.com/video/564595151'+'?autoplay=1'" />

                        <x-menu-header-style2 text="title here 3" class="mt-4">
                            <x-slot name="image">
                                <img class="h-8 w-8 rounded-full object-contain"
                                    src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </x-slot>
                        </x-menu-header-style2>
                        <x-menu-list-style2>

                            <x-menu-button-style2 text="Component Design" />
                            <x-menu-button-style2 text="ssss" sub="$160" active="1" />
                            <x-menu-button-style2 text="Templates" sub="$160" />
                            <x-menu-button-style2 text="React Components" />
                        </x-menu-list-style2>

                    </div>

                </div>
            </section>


        </main>
    </div>
</div>
@endsection