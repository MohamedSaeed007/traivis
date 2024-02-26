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

            <div x-data="{ SMopen: true }"  class="sticky top-20 h-[100vh] flex-shrink-0 transition-all bg-white z-50 border-r border-slate-300">

                @livewire('profile.profile-side-bar',['user'=>$user])
            </div>

            <div class="w-full flex flex-col">

                @include('homes.social.layouts.partials.profile.user.header')

                <div class="relative mx-auto flex justify-between w-full">



                    <div class="mb-4 w-full px-4 lg:px-20 md:mb-0 mx-auto">
                        <div class="flex w-full justify-center">
                            <section class="flex w-full p-1 py-4 ">
                                <div class="container mx-auto w-full flex-col">
                                    <!--Karma-->
                                    <section class="">
                                        <div class="container mx-auto">
                                            <!--stats-->
                                            <div class=" ">
                                                <div class="flex flex-col lg:flex-row justify-between items-center gap-x-8 text-gray-500">

                                                    <!--Reached-->
                                                    <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                                                        <div class="w-fit items-center flex flex-col mx-auto rounded-lg ">

                                                            <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2 flex flex-col items-center">
                                                                <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                                                    <svg fill="currentColor" class="h-10 w-10" x="0px" y="0px" viewBox="0 0 512.19 512.19" style="enable-background:new 0 0 512.19 512.19;" xml:space="preserve" width="512" height="512"><g><circle cx="256.095" cy="256.095" r="85.333"></circle><path d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z"></path></g></svg>
                                                                    <span>{{ !empty($shareCourses) ? $shareCourses->sum('reached') : 0}}</span>
                                                                </h2>
                                                                <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">
                                                                    Reached
                                                                </h3>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--/Reached-->

                                                    <!--Engaged-->
                                                    <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                                                        <div class="w-fit items-center flex mx-auto rounded-lg gap-x-5">

                                                            <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2 flex flex-col items-center">
                                                                <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                                                    <svg fill="currentColor" class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg>
                                                                    <span>{{ !empty($shareCourses) ? $shareCourses->sum('register') : 0}}</span>
                                                                </h2>
                                                                <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">
                                                                    Engaged
                                                                </h3>
                                                            </div>

                                                            <div class="flex flex-col gap-x-3">

                                                                <p class="flex justify-between whitespace-nowrap w-28 mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-indigo-50 hover:text-indigo-500 hover:border-indigo-500 border border-gray-300 font-bold text-sm">
                                                                    <span class="pr-2">{{ !empty($shareCourses) ? $shareCourses->sum('register') : 0}}</span>
                                                                    <span>Registered</span>
                                                                </p>
                                                                <p class="flex justify-between whitespace-nowrap w-28 mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-indigo-50 hover:text-indigo-500 hover:border-indigo-500 border border-gray-300 font-bold text-sm">
                                                                    <span class="pr-2">{{ !empty($shareCourses) ? $shareCourses->sum('enrolled') : 0}}</span>
                                                                    <span>Enrolled</span>
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--/Engaged-->

                                                    <!--Earnings-->
                                                    <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                                                        <div class="w-fit items-center flex flex-col mx-auto rounded-lg ">
                                                            <div class="flex flex-col items-center">
                                                                <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                                                    <svg class="h-10 w-10 fill-current" viewBox="0 0 24 24" width="512" height="512"><path d="M9,4c0-2.209,3.358-4,7.5-4s7.5,1.791,7.5,4-3.358,4-7.5,4-7.5-1.791-7.5-4Zm7.5,6c-1.027,0-2.001-.115-2.891-.315-1.359-1.019-3.586-1.685-6.109-1.685-4.142,0-7.5,1.791-7.5,4s3.358,4,7.5,4,7.5-1.791,7.5-4c0-.029-.007-.057-.008-.086h.008v2.086c0,2.209-3.358,4-7.5,4S0,16.209,0,14v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v2c0,2.209-3.358,4-7.5,4S0,20.209,0,18v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v-.08c.485,.052,.986,.08,1.5,.08,4.142,0,7.5-1.791,7.5-4v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.209-3.358,4-7.5,4Z"></path></svg>
                                                                    <span>{{ !empty($shareCourses) ? $shareCourses->sum('earnings') : 0}}</span>
                                                                </h2>
                                                                <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">Earnings</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/Earnings-->

                                                    <!--Links-->
                                                    <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                                                        <div class="w-fit items-center flex flex-col mx-auto rounded-lg ">
                                                            <div class="flex flex-col items-center">
                                                                <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                                                    <svg class="h-10 w-10 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                                                    <span>{{ !empty($shareCourses) ? $shareCourses->count() : 0}}</span>
                                                                </h2>
                                                                <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">Shared Links</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/Links-->

                                                </div>
                                            </div>
                                            <!--/stats-->

                                            <!--tabel and list-->
                                            <div class="flex w-full md:flex-row flex-col">
                                                <!-- Table -->
                                                <div class="w-full md:w-2/3 overflow-y-hidden ">
                                                    <table class="min-w-full ">
                                                        <!--/ Table Header-->
                                                        <thead class="text-center text-sm font-semibold text-gray-500 ">
                                                        <tr class="whitespace-nowrap table-row divide-x-8 divide-transparent divide ">

                                                            <th class="px-2 py-1 text-left"> Course </th>

                                                            <th class="px-2 py-1">My Link</th>

                                                            <th class="px-2 py-1">Reached</th>

                                                            <th class="px-2 py-1">Registered</th>

                                                            <th class="px-2 py-1">Enrolled</th>

                                                            <th class="px-2 py-1">Earnings</th>

                                                        </tr>
                                                        </thead>
                                                        <!--/ Table Header-->
                                                        <!-- Table Raws -->
                                                        <tbody class="">

                                                        @if(!empty($shareCourses))

                                                            @foreach($shareCourses as $shareCourse)
                                                                <tr class="whitespace-nowrap text-center hover:bg-indigo-50 table-row divide-x-8 divide-transparent divide text-gray-600 hover:text-gray-900">
                                                                    <td class="px-2 py-4 text-left">
                                                                        <a href="{{ route('course', $shareCourse->course->slug) }}" class="flex flex-row items-center">
                                                                            <svg fill="currentColor" class=" w-8 h-8" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                                                                            <div class="ml-4">
                                                                                <p class="truncate  w-48" >
                                                                                    {{ $shareCourse->course->title }}
                                                                                </p>
                                                                            </div>
                                                                        </a>
                                                                    </td>

                                                                    <td class="px-2 py-4">
                                                                        <div class="group flex items-center justify-between text-sm text-gray-400 hover:text-gray-700 rounded-full" style="">
                                                                            <div class="w-0 flex-1 flex items-center">
                                                                                <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                                                                <span class="ml-2 flex-1 w-0 truncate"> {{route('course',$shareCourse->course->slug). '?karma='. auth()->user()->user_karma_key }} </span>
                                                                            </div>

                                                                            <div class="flex rounded-full px-1 border border-gray-400 group-hover:border-gray-700 items-center">
                                                                                <a href="#" class="flex items-center justify-between space-x-2 text-base" onclick="CopyCourseUrlToClipboard('{{route('course',$shareCourse->course->slug). '?karma='. auth()->user()->user_karma_key }}')">
                                                                                    <span>Copy</span>
                                                                                    <svg class="flex-shrink-0 h-4 w-4" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z"></path></svg>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td class="px-2 py-4">
                                                                        <div class="flex flex-row w-fit mx-auto items-center px-2 py-1 rounded-full bg-indigo-50 text-gray-500 ">
                                                                            <svg fill="currentColor" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.19 512.19" style="enable-background:new 0 0 512.19 512.19;" xml:space="preserve" width="512" height="512"><g><circle cx="256.095" cy="256.095" r="85.333"></circle><path d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z"></path></g></svg>
                                                                            <p class="ml-2 font-semibold">{{ $shareCourse->reached }}</p>
                                                                        </div>
                                                                    </td>

                                                                    <td class="px-2 py-4">
                                                                        <div class="flex flex-row w-fit mx-auto items-center px-2 py-1 rounded-full bg-indigo-50 text-gray-500 ">
                                                                            <svg fill="currentColor" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg>
                                                                            <p class="ml-2 font-semibold">{{ $shareCourse->register }}</p>
                                                                        </div>
                                                                    </td>

                                                                    <td class="px-2 py-4">
                                                                        <div class="flex flex-row w-fit mx-auto items-center px-2 py-1 rounded-full bg-indigo-50 text-gray-500 ">
                                                                            <svg fill="currentColor" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg>
                                                                            <p class="ml-2 font-semibold">{{ $shareCourse->enrolled }}</p>
                                                                        </div>
                                                                    </td>

                                                                    <td class="px-2 py-4">
                                                                        <div class="flex flex-row w-fit mx-auto items-center px-2 py-1 rounded-full border bg-indigo-50 text-indigo-500 border-indigo-500">
                                                                            <svg fill="currentColor" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="512" height="512"><path d="M18.5,9.5A1.5,1.5,0,0,0,20,8V7.313A5.32,5.32,0,0,0,14.687,2H13.5V1.5a1.5,1.5,0,0,0-3,0V2H9.313A5.313,5.313,0,0,0,7.772,12.4l2.728.746V19H9.313A2.316,2.316,0,0,1,7,16.687V16a1.5,1.5,0,0,0-3,0v.687A5.32,5.32,0,0,0,9.313,22H10.5v.5a1.5,1.5,0,0,0,3,0V22h1.187a5.313,5.313,0,0,0,1.541-10.4L13.5,10.856V5h1.187A2.316,2.316,0,0,1,17,7.313V8A1.5,1.5,0,0,0,18.5,9.5Zm-3.118,4.979a2.314,2.314,0,0,1-.7,4.521H13.5V13.965ZM10.5,10.035,8.618,9.521A2.314,2.314,0,0,1,9.313,5H10.5Z"></path></svg>
                                                                            <p class="ml-2 font-semibold">{{ $shareCourse->earnings }}</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                        <!--/ Table Raws-->
                                                    </table>
                                                </div>
                                                <!--/ Table -->
                                                <!--List-->
                                                <div class="w-full md:w-1/3 h-[300px] ">
                                                    <ul class="grid md:grid-cols-1 grid-cols-1 gap-x-5" role="list">


                                                        @if(!empty($karmaStudents))
                                                            @foreach($karmaStudents as $student)
                                                                <li class="relative group flex flex-row items-center gap-x-2 w-full px-2 py-1 text-gray-500 transition-all rounded-sm hover:shadow-md hover:border-l-4 hover:border-indigo-500 hover:bg-indigo-50">
                                                                    <div class="flex flex-col items-center shrink-0">
                                                                        <img alt="" class="h-14 w-14 rounded-full bg-cover" src="{{ $student?->avatar }}">
                                                                    </div>
                                                                    <div class="flex flex-col flex-1 gap-y-1">

                                                                        <!--Name - status - payments-->
                                                                        <div class="flex justify-between items-center gap-x-3">
                                                                            <p class="font-bold flex-1">{{ $student->name }}</p>
                                                                            <div class="w-fit text-sm text-white bg-indigo-500 rounded-full px-2 py-0">
                                                                                <p>Enrolled {{ !empty($student->earnings) ? count($student->earnings['courses']) : 0  }}</p>
                                                                            </div>
                                                                            <p class="whitespace-nowrap text-sm text-white bg-indigo-500 rounded-full px-1 py-0"><span class="text-xs">$</span>{{ !empty($student->earnings) ? $student->earnings['totalEarning']  : 0  }}</p>
                                                                        </div>
                                                                        <!--Name - status - payments-->

                                                                        <!--registered date-->
                                                                        <p class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($student->created_at)->format('d/m/Y') }}</p>
                                                                        <!--registered date-->

                                                                        <!--details-->
                                                                        <div class="origin-top z-10 hidden group-hover:block absolute top-16 right-1/2 translate-x-1/2 shadow-md flex flex-col items-center border rounded-lg space-y-2 p-2 text-sm font-semibold bg-white">

                                                                            @if(!empty($student->earnings))
                                                                                @foreach($student->earnings['courses'] as $course)
                                                                                    <a href="{{ route('course', $course->slug) }}" class="flex justify-between items-center gap-x-2">
                                                                                <span class="flex flex-row items-center flex-1">
                                                                                    <svg fill="currentColor" class="shrink-0 h-4 w-4" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                                                                                    <p class="px-2 truncate">{{ $course->title }}</p>
                                                                                </span>
                                                                                        <p class="text-sm text-gray-900">
                                                                                            {{ \Carbon\Carbon::parse($course->pivot_created_at)->format('d/m/Y') }}</p>
                                                                                        <p class="whitespace-nowrap text-sm text-white bg-indigo-500 rounded-full px-1 py-0"><span class="text-xs">$</span>{{ $course->earnings }}</p>
                                                                                    </a>
                                                                                @endforeach
                                                                            @endif

                                                                        </div>
                                                                        <!--/details-->
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        @endif



                                                    </ul>
                                                </div>
                                                <!--/List-->
                                            </div>
                                            <!--/tabel and list-->
                                        </div>
                                    </section>
                                    <!--/coKarmantent-->

                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
@endsection
