@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)

@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
    <div class="min-h-screen bg-white transition-colors ">

        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])

        <div class="flex w-full">

            <div x-data="{ SMopen: true }"
                 class="sticky top-20 h-[100vh] flex-shrink-0 transition-all bg-white z-50 border-r border-slate-300">

                @livewire('profile.profile-side-bar',['user'=>$user])
            </div>

            <div class="w-full flex flex-col">

                @include('homes.social.layouts.partials.profile.user.header')

                <div class="relative mx-auto flex justify-between w-full">



                    <section class="mb-4 w-full px-4 lg:px-20 md:mb-0 mx-auto">
                        <div class="mx-auto flex flex-wrap items-center justify-start">
                            {{-- Start Owner Space --}}
                            {{--
                            @foreach ($businesses as $business)
                                <!----------grid box---------->
                                <div class="mb-12 w-full bg-red-500 px-3 md:w-1/2 xl:w-1/4 2xl:w-1/4">
                                    <div
                                        class="shadow-dashboard group rounded-md border-t border-b-2 border-gray-300 bg-white pt-3 transition-colors hover:border-traivis-300  ">

                                        <div
                                            class="flex items-center py-2 px-3 text-xs font-bold text-gray-400 transition-colors group-hover:text-traivis-500  ">
                                            <!-- Heroicon name: outline/fire -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                id="Layer_1" x="0px" y="0px" viewbox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                                fill="currentColor" class="mr-2 h-5 w-5">
                                                <path
                                                    d="M256,192c-47.1,0-85.3,38.2-85.4,85.3c0,22.6,9,44.4,25,60.4l48.8,47.7c6.4,6.2,16.7,6.2,23.1,0l49.1-47.9  c33.2-33.4,33.1-87.4-0.3-120.7C300.3,200.9,278.6,192,256,192z M256,298.5c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3  c11.8,0,21.3,9.6,21.3,21.3C277.3,288.9,267.8,298.5,256,298.5L256,298.5z M346.5,367.9L297.4,416c-23.1,22.3-59.7,22.3-82.8,0  l-49.1-47.9c-50-49.9-50.1-131-0.2-181s131-50.1,181-0.2l0,0C396.3,236.9,396.3,317.8,346.5,367.9z M405.3,85.3h-23.5  C371.7,35.7,328,0.1,277.3,0h-42.7C184,0.1,140.3,35.7,130.1,85.3h-23.5C47.8,85.4,0.1,133.1,0,192v106.7V356v49.3  C0.1,464.2,47.8,511.9,106.7,512h298.7c58.9-0.1,106.6-47.8,106.7-106.7V356v-57.3V192C511.9,133.1,464.2,85.4,405.3,85.3z   M234.7,42.7h42.7c27,0.1,51.1,17.2,60.1,42.7H174.6C183.6,59.9,207.6,42.8,234.7,42.7z">
                                                </path>
                                            </svg>
                                            <h3
                                                class="rounded-full border border-gray-500 px-1 transition-colors group-hover:border-traivis-500">
                                                Owner</h3>
                                        </div>

                                        <div
                                            class="-mt-7 flex flex-col items-center justify-center border-b border-gray-100 px-4 ">
                                            <img class="mb-4 h-20 w-20 rounded-full object-cover"
                                                src="https://static.shuffle.dev/uploads/files/a7/a75aae7cc1f68e982bbb89459fbc656be1c07728/cambridge-logo-png-600x400-q85.png"
                                                alt="">
                                            <div class="flex min-w-0 flex-1 flex-row items-center justify-center">
                                                <h1 class="mr-2 truncate font-bold text-gray-500 ">
                                                    Cambridge institute</h1>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    class="my-auto h-5 text-traivis-500 transition-colors "
                                                    version="1.1" width="24" height="24" viewbox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                                        class=""></path>
                                                </svg>
                                            </div>

                                            <button type="button"
                                                class="my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-400 shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-traivis-300 group-hover:border-traivis-500 group-hover:bg-traivis-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <span
                                                    class="text-gray-500 transition-colors group-hover:text-white  ">View
                                                </span>
                                            </button>

                                        </div>

                                        <div
                                            class="flex items-center justify-between bg-gray-50 group-hover:bg-traivis-100">

                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500   ">
                                                    <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                            data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                                            height="512" fill="currentColor" aria-hidden="true"
                                                            class="mr-2 h-3 w-3">
                                                            <path
                                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                                            </path>
                                                        </svg><span>420 </span>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500   ">
                                                    <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            id="Capa_1" x="0px" y="0px"
                                                            viewbox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            xml:space="preserve" width="512" height="512"
                                                            fill="currentColor" aria-hidden="true"
                                                            class="mr-2 h-3 w-3">
                                                            <g>
                                                                <circle cx="256" cy="128" r="128">
                                                                </circle>
                                                                <path
                                                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                                </path>
                                                            </g>
                                                        </svg><span>20k </span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!----------END grid box---------->
                                <!----------grid box---------->
                                <div class="mb-12 w-full bg-red-500 px-3 md:w-1/2 xl:w-1/4 2xl:w-1/4">
                                    <div
                                        class="shadow-dashboard group rounded-md border-t border-b-2 border-gray-300 bg-white pt-3 transition-colors hover:border-traivis-300  ">

                                        <div
                                            class="flex items-center py-2 px-3 text-xs font-bold text-gray-400 transition-colors group-hover:text-traivis-500  ">
                                            <!-- Heroicon name: outline/fire -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                id="Layer_1" x="0px" y="0px" viewbox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                                fill="currentColor" class="mr-2 h-5 w-5">
                                                <path
                                                    d="M256,192c-47.1,0-85.3,38.2-85.4,85.3c0,22.6,9,44.4,25,60.4l48.8,47.7c6.4,6.2,16.7,6.2,23.1,0l49.1-47.9  c33.2-33.4,33.1-87.4-0.3-120.7C300.3,200.9,278.6,192,256,192z M256,298.5c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3  c11.8,0,21.3,9.6,21.3,21.3C277.3,288.9,267.8,298.5,256,298.5L256,298.5z M346.5,367.9L297.4,416c-23.1,22.3-59.7,22.3-82.8,0  l-49.1-47.9c-50-49.9-50.1-131-0.2-181s131-50.1,181-0.2l0,0C396.3,236.9,396.3,317.8,346.5,367.9z M405.3,85.3h-23.5  C371.7,35.7,328,0.1,277.3,0h-42.7C184,0.1,140.3,35.7,130.1,85.3h-23.5C47.8,85.4,0.1,133.1,0,192v106.7V356v49.3  C0.1,464.2,47.8,511.9,106.7,512h298.7c58.9-0.1,106.6-47.8,106.7-106.7V356v-57.3V192C511.9,133.1,464.2,85.4,405.3,85.3z   M234.7,42.7h42.7c27,0.1,51.1,17.2,60.1,42.7H174.6C183.6,59.9,207.6,42.8,234.7,42.7z">
                                                </path>
                                            </svg>
                                            <h3
                                                class="rounded-full border border-gray-500 px-1 transition-colors group-hover:border-traivis-500">
                                                Owner</h3>
                                        </div>

                                        <div
                                            class="-mt-7 flex flex-col items-center justify-center border-b border-gray-100 px-4 ">
                                            <img class="mb-4 h-20 w-20 rounded-full object-cover"
                                                src="https://static.shuffle.dev/uploads/files/a7/a75aae7cc1f68e982bbb89459fbc656be1c07728/cambridge-logo-png-600x400-q85.png"
                                                alt="">
                                            <div class="flex min-w-0 flex-1 flex-row items-center justify-center">
                                                <h1 class="mr-2 truncate font-bold text-gray-500 ">
                                                    {{ $business->business_name }}</h1>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    class="my-auto h-5 text-traivis-500 transition-colors "
                                                    width="24" height="24" viewbox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                                        class=""></path>
                                                </svg>
                                            </div>

                                            <button type="button"
                                                class="my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-400 shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-traivis-300 group-hover:border-traivis-500 group-hover:bg-traivis-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <span
                                                    class="text-gray-500 transition-colors group-hover:text-white  ">View
                                                </span>
                                            </button>

                                        </div>

                                        <div
                                            class="flex items-center justify-between bg-gray-50 group-hover:bg-traivis-100">

                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500   ">
                                                    <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                            data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                                            height="512" fill="currentColor" aria-hidden="true"
                                                            class="mr-2 h-3 w-3">
                                                            <path
                                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                                            </path>
                                                        </svg><span>420 </span>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500   ">
                                                    <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            version="1.1" id="Capa_1" x="0px"
                                                            y="0px" viewbox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            xml:space="preserve" width="512" height="512"
                                                            fill="currentColor" aria-hidden="true"
                                                            class="mr-2 h-3 w-3">
                                                            <g>
                                                                <circle cx="256" cy="128"
                                                                    r="128">
                                                                </circle>
                                                                <path
                                                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                                </path>
                                                            </g>
                                                        </svg><span>20k </span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!----------END grid box---------->
                                <!----------grid box---------->
                                <div class="mb-12 w-full bg-red-500 px-3 md:w-1/2 xl:w-1/4 2xl:w-1/4">
                                    <div
                                        class="shadow-dashboard group rounded-md border-t border-b-2 border-gray-300 bg-white pt-3 transition-colors hover:border-traivis-300  ">

                                        <div
                                            class="flex items-center py-2 px-3 text-xs font-bold text-gray-400 transition-colors group-hover:text-traivis-500  ">
                                            <!-- Heroicon name: outline/fire -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                id="Layer_1" x="0px" y="0px"
                                                viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve" fill="currentColor" class="mr-2 h-5 w-5">
                                                <path
                                                    d="M256,192c-47.1,0-85.3,38.2-85.4,85.3c0,22.6,9,44.4,25,60.4l48.8,47.7c6.4,6.2,16.7,6.2,23.1,0l49.1-47.9  c33.2-33.4,33.1-87.4-0.3-120.7C300.3,200.9,278.6,192,256,192z M256,298.5c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3  c11.8,0,21.3,9.6,21.3,21.3C277.3,288.9,267.8,298.5,256,298.5L256,298.5z M346.5,367.9L297.4,416c-23.1,22.3-59.7,22.3-82.8,0  l-49.1-47.9c-50-49.9-50.1-131-0.2-181s131-50.1,181-0.2l0,0C396.3,236.9,396.3,317.8,346.5,367.9z M405.3,85.3h-23.5  C371.7,35.7,328,0.1,277.3,0h-42.7C184,0.1,140.3,35.7,130.1,85.3h-23.5C47.8,85.4,0.1,133.1,0,192v106.7V356v49.3  C0.1,464.2,47.8,511.9,106.7,512h298.7c58.9-0.1,106.6-47.8,106.7-106.7V356v-57.3V192C511.9,133.1,464.2,85.4,405.3,85.3z   M234.7,42.7h42.7c27,0.1,51.1,17.2,60.1,42.7H174.6C183.6,59.9,207.6,42.8,234.7,42.7z">
                                                </path>
                                            </svg>
                                            <h3
                                                class="rounded-full border border-gray-500 px-1 transition-colors group-hover:border-traivis-500">
                                                Owner</h3>
                                        </div>

                                        <div
                                            class="-mt-7 flex flex-col items-center justify-center border-b border-gray-100 px-4 ">
                                            <img class="mb-4 h-20 w-20 rounded-full object-cover"
                                                src="https://static.shuffle.dev/uploads/files/a7/a75aae7cc1f68e982bbb89459fbc656be1c07728/cambridge-logo-png-600x400-q85.png"
                                                alt="">
                                            <div class="flex min-w-0 flex-1 flex-row items-center justify-center">
                                                <h1
                                                    class="mr-2 truncate font-bold text-gray-500 ">
                                                    Cambridge institute</h1>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    class="my-auto h-5 text-traivis-500 transition-colors "
                                                    version="1.1" width="24" height="24"
                                                    viewbox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                                        class=""></path>
                                                </svg>
                                            </div>

                                            <button type="button"
                                                class="my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-400 shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-traivis-300 group-hover:border-traivis-500 group-hover:bg-traivis-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <span
                                                    class="text-gray-500 transition-colors group-hover:text-white  ">View
                                                </span>
                                            </button>

                                        </div>

                                        <div
                                            class="flex items-center justify-between bg-gray-50 group-hover:bg-traivis-100">

                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500   ">
                                                    <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                            data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                                            height="512" fill="currentColor" aria-hidden="true"
                                                            class="mr-2 h-3 w-3">
                                                            <path
                                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                                            </path>
                                                        </svg><span>420 </span>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-traivis-500   ">
                                                    <p class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            id="Capa_1" x="0px" y="0px"
                                                            viewbox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            xml:space="preserve" width="512" height="512"
                                                            fill="currentColor" aria-hidden="true"
                                                            class="mr-2 h-3 w-3">
                                                            <g>
                                                                <circle cx="256" cy="128"
                                                                    r="128">
                                                                </circle>
                                                                <path
                                                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                                </path>
                                                            </g>
                                                        </svg><span>20k </span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!----------END grid box---------->
                                --}}
                            {{-- End Owner Space --}}{{--

                            @endforeach
        --}}

                            {{-- <div class="mx-auto flex flex-wrap items-center justify-center">
                            <livewire:business :user="$selectedUser" />
                        </div> --}}
                            {{-- <div> --}}

                            @forelse($businesses as $business)
                                @livewire('single-component.single-business',['business'=>$business])
                            @empty
                                <div>

                                    <p>You have no business yet</p><br/>
                                    @if($user->id == auth()->id())
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('business-space') }}">Creat Business</a>
                                    @endif
                                </div>
                        @endforelse
                        {{-- </div> --}}

                    </section>
                </div>

            </div>

        </div>


    </div>
@endsection
