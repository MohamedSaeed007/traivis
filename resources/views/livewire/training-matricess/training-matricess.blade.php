<div>
    <!-- Page Content -->
    <div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">

        <!--head-->
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Training Matrix</h1>
                <div class="flex flex-row items-center mt-2 mb-5  text-sm font-semibold space-x-2">
                    <p class="flex flex-row items-center">
                        Total
                        <span
                            class=" rounded-full p-3.5 w-5 h-5 flex justify-center items-center mx-2 bg-gray-400 font-bold text-white">
                            {{ count($workForces) }}
                        </span>
                        Employees | Assigned to
                        <span
                            class=" rounded-full p-3.5 w-5 h-5 flex justify-center items-center mx-2 border border-gray-400 font-bold">
                            {{ $workForceCourses->count() }}
                        </span>
                        Courses
                    </p>
                </div>
            </div>
        </div>
        <!--END header-->


        <!--content-->
        <section class="">
            <div class="container mx-auto">

                <section class="" x-data="{ colOpt: false }">
                    <div class="  mx-auto">


                        <!--search-->
                        <div class="w-full my-8 flex items-center justify-center">
                            <label class="sr-only" for="paysearch">Search Payments</label>
                            <div class="relative w-full md:w-1/2">
                                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input
                                    class=" h-10 block bg-white text-gray-800 border border-gray-300 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors    rounded-full w-full"
                                    id="paysearch" wire:model.debounce.500ms="filterName" placeholder="Search"
                                    type="search">
                            </div>
                        </div>
                        <!---->


                        <!-- Filter bar -->
                        <div class="flex flex-wrap md:flex-row items-center justify-between w-full mb-8 mt-16">


                            <!--date range-->
                            <div class="mb-5 w-full md:w-1/3 text-sm font-semibold text-gray-500 ">

                                <div class="w-full flex flex-row items-center justify-between group"
                                    date-rangepicker="">
                                    <label for="start" class="mr-2">from</label>
                                    <div class="relative">
                                        <input
                                            class="border-gray-300 text-sm rounded-lg  h-10 datepicker-input hover:border-traivis-500"
                                            name="start" id="start" wire:model='courseStartDate'
                                            placeholder="Select date start" type="date">
                                    </div>

                                    <label for="end" class="mx-2">to</label>
                                    <div class="relative">
                                        <input class="border-gray-300 text-sm rounded-lg  h-10  hover:border-traivis-500"
                                            name="end" id="end" wire:model='courseEndDate'
                                            placeholder="Select date end" type="date">
                                    </div>
                                </div>

                            </div>
                            <!---->



                            <!--filters - Sort - Col option-->
                            <div class="flex flex-row justify-between items-center md:w-1/3 w-full space-x-5 z-20">

                                <!-- filter-->
                                <div class="mb-5 w-fit">
                                    <div @click.outside="fopen = false" @keydown.window.escape.stop="fopen = false"
                                        aria-labelledby="filter-heading" class="w-fit relative z-10  "
                                        x-data="{ fopen: false }">

                                        <h2 class="sr-only" id="filter-heading">Filters</h2>

                                        <!--filters button-->
                                        <div class=" ">
                                            <div class="group mx-auto flex items-center">
                                                <div>
                                                    <button @click="fopen = !fopen" aria-controls="disclosure-1"
                                                        aria-expanded="false"
                                                        class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit"
                                                        type="button">
                                                        <svg aria-hidden="true" class="flex-none w-5 h-5 mr-2"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path clip-rule="evenodd"
                                                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                                fill-rule="evenodd" />
                                                        </svg>
                                                        {{ $numberOfFilters }} Filters
                                                    </button>
                                                </div>
                                                <div class="mx-3">
                                                    <button wire:click='clearAllFilters()'
                                                        class="font-semibold text-sm text-gray-500 form-input h-10 rounded-lg border-gray-300 focus:text-traivis-500 hover:text-traivis-500 hover:border-traivis-500 whitespace-nowrap "
                                                        type="button">
                                                        Clear all
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <!--filters menu-->
                                        <div class="origin-top-right w-fit absolute left-0 lg:right-0 lg:left-auto  p-6 rounded-lg shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                            id="disclosure-1" x-show="fopen"
                                            x-transition:enter="transition ease-out duration-100"
                                            x-transition:enter-end="transform opacity-100 scale-100"
                                            x-transition:enter-start="transform opacity-0 scale-95"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-end="transform opacity-0 scale-95"
                                            x-transition:leave-start="transform opacity-100 scale-100">

                                            <div class="">
                                                <div class="flex flex-row gap-x-8  text-sm">

                                                    <fieldset class=" whitespace-nowrap">
                                                        <legend class="block font-medium">Positions</legend>

                                                        <div class="pt-6 space-y-4 ">
                                                            @foreach ($positions as $key => $value)
                                                                <div class="flex items-center text-base sm:text-sm">
                                                                    <input
                                                                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                        id="myResponse-0" wire:model='filterByPosition'
                                                                        name="myResponse[]" type="checkbox"
                                                                        value="{{ $key }}">
                                                                    <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                        for="myResponse-0">
                                                                        {{ $value }} </label>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </fieldset>

                                                    <fieldset class=" whitespace-nowrap">
                                                        <legend class="block font-medium">Departments</legend>

                                                        <div class="pt-6 space-y-4">

                                                            @foreach ($departments as $key => $value)
                                                                <div class="flex items-center text-base sm:text-sm">
                                                                    <input
                                                                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                        id="clResponse-0"
                                                                        wire:model='filterByDepartment'
                                                                        name="clResponse[]" type="checkbox"
                                                                        value="{{ $key }}">
                                                                    <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                        for="clResponse-0">
                                                                        {{ $value }} </label>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </fieldset>

                                                    <fieldset class=" whitespace-nowrap">
                                                        <legend class="block font-medium">Projects</legend>

                                                        <div class="pt-6 space-y-4">
                                                            @foreach ($projects as $key => $value)
                                                                <div class="flex items-center text-base sm:text-sm">
                                                                    <input
                                                                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                        id="clResponse-0" wire:model='filterByProject'
                                                                        name="clResponse[]" type="checkbox"
                                                                        value="{{ $key }}">
                                                                    <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                        for="clResponse-0">
                                                                        {{ $value }} </label>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </fieldset>

                                                    <fieldset class=" whitespace-nowrap">
                                                        <legend class="block font-medium">Branches</legend>

                                                        <div class="pt-6 space-y-4">
                                                            @foreach ($branches as $key => $value)
                                                                <div class="flex items-center text-base sm:text-sm">
                                                                    <input
                                                                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                        id="dmode-0" wire:model='filterByBranch'
                                                                        name="dmode[]" type="checkbox"
                                                                        value="{{ $key }}">
                                                                    <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                        for="dmode-0">
                                                                        {{ $value }} </label>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </fieldset>

                                                    <fieldset class=" whitespace-nowrap">
                                                        <legend class="block font-medium">Type</legend>

                                                        <div class="pt-6 space-y-4 ">

                                                            <div class="flex items-center text-base sm:text-sm">
                                                                <input
                                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                    id="StaFF" name="myResponse[]"
                                                                    type="checkbox" value="Accepted">
                                                                <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                    for="StaFF">
                                                                    staff </label>
                                                            </div>

                                                            <div class="flex items-center text-base sm:text-sm">
                                                                <input
                                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                    id="Contractor-0" name="myResponse[]"
                                                                    type="checkbox" value="Rejected">
                                                                <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                    for="Contractor-0">
                                                                    contractor </label>
                                                            </div>

                                                        </div>
                                                    </fieldset>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!---->


                                <!--sort-->
                                <div class="mb-5 w-fit">
                                    <div @click.outside="topen = false" @keydown.window.escape.stop="topen = false"
                                        class="w-fit" x-data="{ topen: false }">

                                        <div class="flex justify-end mx-auto">
                                            <div class="relative inline-block">
                                                <div class="flex">
                                                    <button @click="topen = !topen" aria-expanded="false"
                                                        aria-haspopup="true"
                                                        class="group whitespace-nowrap inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                                        id="menu-button" type="button">
                                                        <svg class="flex-none w-5 h-5 mr-2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                            data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M24,1c0,.553-.448,1-1,1H10c-.552,0-1-.447-1-1s.448-1,1-1h13c.552,0,1,.447,1,1Zm-4,4H10c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1Zm-3,5h-7c-.552,0-1,.447-1,1s.448,1,1,1h7c.552,0,1-.447,1-1s-.448-1-1-1Zm-3,5h-4c-.552,0-1,.447-1,1s.448,1,1,1h4c.552,0,1-.447,1-1s-.448-1-1-1Zm-6.293,4.293l-1.707,1.707V1c0-.553-.448-1-1-1s-1,.447-1,1V21l-1.708-1.708c-.391-.391-1.023-.391-1.414,0s-.391,1.023,0,1.414l2.707,2.707c.39,.39,.902,.585,1.415,.585s1.024-.195,1.414-.585l2.707-2.707c.391-.391,.391-1.023,0-1.414s-1.023-.391-1.414,0Z" />
                                                        </svg>
                                                        Sort by
                                                        <!-- Heroicon name: solid/chevron-down -->
                                                        <svg aria-hidden="true"
                                                            class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path clip-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                fill-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>


                                                <div aria-labelledby="menu-button" aria-orientation="vertical"
                                                    class="origin-top-right absolute right-0 mt-2 w-40 z-50 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                    role="menu" tabindex="-1" x-show="topen"
                                                    x-transition:enter="transition ease-out duration-100"
                                                    x-transition:enter-end="transform opacity-100 scale-100"
                                                    x-transition:enter-start="transform opacity-0 scale-95"
                                                    x-transition:leave="transition ease-in duration-75"
                                                    x-transition:leave-end="transform opacity-0 scale-95"
                                                    x-transition:leave-start="transform opacity-100 scale-100">

                                                    <div class="py-1" role="none">
                                                        <!--
                                                                                    Active: "bg-gray-100", Not Active: ""

                                                                                    Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                                                                    -->
                                                        {{-- <a class=" text-gray-900 block px-4 py-2 text-sm hover:text-slate-900"
                                                            wire:click="sortBy('AZ')"  id="menu-item-0" role="menuitem"
                                                            tabindex="-1"> A to Z </a> --}}

                                                        <a class="  block px-4 py-2 text-sm cursor-pointer {{ isset($soryBy) && $sortBy == 'name' ? 'text-gray-900' : 'text-gray-500' }} hover:text-slate-900"
                                                            wire:click="sortWorkforceBy('name')" id="menu-item-2"
                                                            role="menuitem" tabindex="-1"> Name </a>

                                                        <a class=" block px-4 py-2 text-sm cursor-pointer {{ isset($soryBy) && $sortBy == 'position' ? 'text-gray-900' : 'text-gray-500' }} hover:text-slate-900"
                                                            wire:click="sortWorkforceBy('position')" id="menu-item-3"
                                                            role="menuitem" tabindex="-1"> Position </a>

                                                        <a class=" block px-4 py-2 text-sm cursor-pointer {{ isset($soryBy) && $sortBy == 'Department' ? 'text-gray-900' : 'text-gray-500' }} hover:text-slate-900"
                                                            wire:click="sortWorkforceBy('department')"
                                                            id="menu-item-4" role="menuitem" tabindex="-1">
                                                            Department </a>

                                                        <a class=" block px-4 py-2 text-sm cursor-pointer {{ isset($soryBy) && $sortBy == 'project' ? 'text-gray-900' : 'text-gray-500' }} hover:text-slate-900"
                                                            wire:click="sortWorkforceBy('project')" id="menu-item-5"
                                                            role="menuitem" tabindex="-1"> Project </a>

                                                        <a class=" block px-4 py-2 text-sm cursor-pointer {{ isset($soryBy) && $sortBy == 'branch' ? 'text-gray-900' : 'text-gray-500' }} hover:text-slate-900"
                                                            wire:click="sortWorkforceBy('branch')" id="menu-item-6"
                                                            role="menuitem" tabindex="-1"> Bransh </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end sort-->


                                <!--Col setting-->
                                <div class="mb-5 w-fit">
                                    <div class="relative group ">
                                        <div class="">

                                            <!---->
                                            <div @click.outside="colOpt = false"
                                                @keydown.window.escape.stop="colOpt = false"
                                                class="flex justify-end ">

                                                <!----- button----------->
                                                <button @click="colOpt = !colOpt"
                                                    class="p-3 rounded-full rounded-bl-md bg-white text-gray-500 border border-gray-400 bg-traivis-50 hover:bg-traivis-500 hover:text-white hover:border-traivis-500 focus:bg-traivis-500 focus:text-white focus:border-traivis-500 transition-all">
                                                    <svg class="h-6 w-6" fill="currentColor" data-name="Layer 1"
                                                        viewBox="0 0 24 24" width="512" height="512">
                                                        <path
                                                            d="M19,2H5C2.243,2,0,4.243,0,7v10c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V7c0-2.757-2.243-5-5-5ZM5,4h14c1.654,0,3,1.346,3,3H2c0-1.654,1.346-3,3-3Zm-3,13V9H11v11H5c-1.654,0-3-1.346-3-3Zm17,3h-6V9h9v8c0,1.654-1.346,3-3,3Z" />
                                                    </svg>
                                                </button>
                                                <!-----END button----------->


                                                <!-----Start popup window----------->
                                                <section x-cloak x-show="colOpt" class=""
                                                    x-transition:enter="ease-out duration-100"
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    x-transition:leave="ease-in duration-200"
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

                                                    <div aria-labelledby="modal-title" aria-modal="true"
                                                        class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
                                                        <div
                                                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                                                            <!---over BG---->
                                                            <div @click="colOpt = false" aria-hidden="true"
                                                                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                                                            </div>
                                                            <!-- center-->
                                                            <span aria-hidden="true"
                                                                class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                                            <!---END over BG---->


                                                            <!-- popup content-->
                                                            <div
                                                                class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-fit ">

                                                                <!---->

                                                                <div class="">
                                                                    <div class="w-full h-full overflow-y-auto">
                                                                        <div
                                                                            class="container py-4 px-8 mx-auto rounded-lg bg-white w-full">

                                                                            <!--content-->
                                                                            <div class="text-gray-500 text-md">

                                                                                <h1
                                                                                    class="font-normal text-center text-xl text-gray-500">
                                                                                    Show / Hide
                                                                                    Columns</h1>
                                                                                <div class="flex flex-row gap-x-8">
                                                                                    <div
                                                                                        class="pt-6 w-full space-y-6 ">
                                                                                        @foreach ($courses as $course)
                                                                                            <div
                                                                                                class="flex items-center ">

                                                                                                <input
                                                                                                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                    id="{{ $course['id'] }}"
                                                                                                    wire:model='coursesIds'
                                                                                                    wire:loading.attr="disabled"
                                                                                                    value="{{ $course['id'] }}"
                                                                                                    type="checkbox"
                                                                                                    name="course-{{ $course['id'] }} "

                                                                                                    type="checkbox"
                                                                                                    >
                                                                                                <label
                                                                                                    x-text="'{{ $course['en_course_name'] }}'"
                                                                                                    class="ml-3 min-w-0 flex-1 "
                                                                                                    for="{{ $course['id'] }}">

                                                                                                </label>
                                                                                            </div>
                                                                                        @endforeach


                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                            <!---->

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!---->

                                                            </div>
                                                            <!--END popup content -->

                                                        </div>
                                                    </div>
                                                </section>
                                                <!-----END popup window----------->

                                            </div>
                                            <!---->

                                        </div>

                                        <div class="whitespace-nowrap hidden group-hover:block absolute right-14 -top-6 z-10 bg-black text-white text-sm rounded-lg px-2 py-1 w-fit shadow-md"
                                            role="tooltip" aria-hidden="true">
                                            <span>Hide/Show Columns</span>
                                        </div>

                                    </div>
                                </div>
                                <!--END Col setting-->


                            </div>
                            <!--end filters - Sort - Col option-->

                        </div>
                        <!--END Filter bar-->





                        <!-- Table Section-->
                        <div x-data="{ stuOpen: false }" class="hover:overflow-auto relative"
                            @click.outside="stuOpen = false" @keydown.window.escape.stop="stuOpen = false">



                            <!-- Table-->
                            <table class="min-w-full hover:mb-20 ">



                                <!-- Table Head -->
                                <thead class="text-center text-sm font-semibold text-gray-500 ">
                                    <tr class="whitespace-nowrap">

                                        <th
                                            class="px-2 py-3.5  left-0 min-w-[150px] max-w-[150px] sticky z-10 bg-white group-hover:bg-traivis-50">
                                            Employee</th>

                                        <th
                                            class="px-2 py-3.5  left-[150px] min-w-[50px] max-w-[50px] md:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                            Num</th>

                                        <th
                                            class="px-2 py-3.5  left-[200px] min-w-[150px] max-w-[150px] md:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                            Position</th>

                                        <th
                                            class="px-2 py-3.5  left-[350px] min-w-[110px] max-w-[110px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                            Department</th>

                                        <th
                                            class="px-2 py-3.5  left-[460px] min-w-[100px] max-w-[100px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                            Projects</th>

                                        <th
                                            class="px-2 py-3.5  left-[560px] min-w-[70px] max-w-[70px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                            Branch</th>

                                        <th
                                            class="px-2 py-3.5 left-[630px] min-w-[90px] max-w-[90px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50 border-r-2">
                                            Type</th>

                                        @foreach ($courses as $course)
                                            @if (!in_array($course['id'],$coursesIds))


                                            <th class="px-5 py-3.5 w-36" style="white-space: nowrap">
                                                <div class="relative group text-left w-36">
                                                    <div class="font-bold text-xl truncate w-full ">
                                                        {{ $course['en_course_name'] }}
                                                    </div>
                                                    <div class=" flex justify-between font-semibold">
                                                        <div class="  ">
                                                            {{ $course['type'] == 1 ? 'internal' : 'external' }}
                                                        </div>
                                                        <div class="  ">
                                                            {{ $course['validity'] }} Mth
                                                        </div>
                                                    </div>
                                                    <div class="hidden group-hover:inline-block absolute top-7">
                                                        <div class="text-white text-sm bg-gray-700 rounded-lg p-2">
                                                            {{ $course['en_course_name'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                            @endif
                                        @endforeach



                                    </tr>
                                </thead>
                                <!--END Table Head -->


                                <!-- Table Raws -->
                                <tbody class="">

                                    <!--Row 1-->
                                    @foreach ($workForces as $workForce)
                                        <tr @click="stuOpen = !stuOpen"
                                            wire:click='singleWorkforceData({{ $workForce->id }})'
                                            class="group/tr whitespace-nowrap text-center cursor-pointer hover:bg-traivis-50 group text-gray-600 hover:text-gray-900">

                                            <td
                                                class="px-2 py-4  truncate left-0 min-w-[150px] max-w-[150px] sticky z-10 bg-white group-hover:bg-traivis-50">
                                                {{ $workForce->user->name }}
                                            </td>

                                            <td
                                                class="px-2 py-4  truncate left-[150px] min-w-[50px] max-w-[50px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                                {{ $workForce->traivis_id }}
                                            </td>

                                            <td
                                                class="px-2 py-4 truncate left-[200px] min-w-[150px] max-w-[150px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                                {{ $workForce->position->position_name_en }}
                                            </td>

                                            <td
                                                class="px-2 py-4 left-[350px] min-w-[110px] max-w-[110px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                                <div class=" relative">
                                                    <div class="peer truncate">
                                                        Hover Departments<span class="text-xs">+2 </span>
                                                    </div>

                                                    <div
                                                        class="hidden peer-hover:inline-block absolute right-0 top-10 z-50">
                                                        <div class="text-white  text-sm bg-gray-700 rounded-lg p-2">
                                                            @foreach ($workForce->departments as $department)
                                                                {{ $department->department_name_en }} <br>
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td
                                                class="px-2 py-4 left-[460px] min-w-[100px] max-w-[100px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                                <div class=" relative">
                                                    <div class="peer truncate">
                                                        Hover Projects <span class="text-xs">+2 </span>
                                                    </div>

                                                    <div
                                                        class="hidden peer-hover:inline-block absolute right-0 top-10 z-10">
                                                        <div
                                                            class="text-white text-left text-sm bg-gray-700 rounded-lg p-2">
                                                            @foreach ($workForce->projects as $project)
                                                                {{ $project->project_name_en }} <br>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td
                                                class="px-2 py-4 left-[460px] min-w-[100px] max-w-[100px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50">
                                                <div class=" relative">
                                                    <div class="peer truncate">
                                                        Hover Branches <span class="text-xs">+2 </span>
                                                    </div>

                                                    <div
                                                        class="hidden peer-hover:inline-block absolute right-0 top-10 z-10">
                                                        <div
                                                            class="text-white text-left text-sm bg-gray-700 rounded-lg p-2">
                                                            @foreach ($workForce->branches as $branch)
                                                                {{ $branch->branch_name_en }} <br>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td
                                                class="px-2 py-4 truncate left-[630px] min-w-[90px] max-w-[90px] lg:sticky lg:z-2 bg-white group-hover:bg-traivis-50 border-r-2">
                                                Contractor
                                            </td>




                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($courses as $course)
                                                @if (!in_array($course['id'], $coursesIds))
                                                    @php
                                                        //  dd($workForceCourses);
                                                        $theWrorkforce = $workForceCourses->where('course_id', $course['id'])->where('workforce_id',$workForce->id)->first();
                                                        // dd($theWrorkforce);
                                                   @endphp

                                                    @if ($theWrorkforce)
                                                        @php
                                                            $validityEndDate = Carbon\Carbon::parse($theWrorkforce->workforce_course_created_at)
                                                                ->startOfDay()
                                                                ->addMonth($theWrorkforce->course_validity);
                                                            // dd(now()->startOfDay(),$validityEndDate);
                                                            $checkValidity = now()
                                                                ->startOfDay()
                                                                ->diffInMonths($validityEndDate , false);

                                                            $theCourseValidateDate = Carbon\Carbon::parse($theWrorkforce->workforce_course_created_at)
                                                                ->addMonth($theWrorkforce->course_validity)
                                                                ->format('d-m-Y');
                                                        @endphp
                                                        <td>

                                                            <span
                                                                class="text-sm font-semibold flex items-center mx-auto space-x-2 justify-between w-fit space-x-2 py-1 px-2 rounded-full border
                                                        {{ $checkValidity > 3 ? 'border-traivis-500 bg-traivis-50 group-hover/tr:bg-traivis-100 group-hover/tr:text-traivis-900' : ($checkValidity == 3 ? 'border-yellow-500 bg-yellow-50 group-hover/tr:bg-yellow-100 group-hover/tr:text-yellow-900' : 'border-pink-500 bg-pink-50 group-hover/tr:bg-pink-100 group-hover/tr:text-pink-900') }}">

                                                                <span>
                                                                    {{ $theCourseValidateDate }}
                                                                </span>

                                                                @if ($checkValidity > 3)
                                                                    <svg class="w-5 h-5 group-hover/tr:text-green-600 text-green-600"
                                                                        fill="currentColor" viewBox="0 0 24 24"
                                                                        width="512" height="512">
                                                                        <path
                                                                            d="M18.581,2.14,12.316.051a1,1,0,0,0-.632,0L5.419,2.14A4.993,4.993,0,0,0,2,6.883V12c0,7.563,9.2,11.74,9.594,11.914a1,1,0,0,0,.812,0C12.8,23.74,22,19.563,22,12V6.883A4.993,4.993,0,0,0,18.581,2.14ZM16.718,9.717l-4.272,4.272a1.873,1.873,0,0,1-1.335.553h-.033a1.872,1.872,0,0,1-1.345-.6l-2.306-2.4A1,1,0,1,1,8.868,10.16L11.112,12.5,15.3,8.3a1,1,0,0,1,1.414,1.414Z" />
                                                                    </svg>
                                                                @elseif ($checkValidity == 3)
                                                                    <svg class="w-5 h-5 group-hover/tr:text-yellow-600 text-yellow-800"
                                                                        fill="currentColor" height="512"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1">
                                                                        <path
                                                                            d="m18.581 2.14-6.265-2.089a1 1 0 0 0 -.632 0l-6.266 2.089a4.993 4.993 0 0 0 -3.418 4.743v5.117c0 7.563 9.2 11.74 9.594 11.914a1 1 0 0 0 .812 0c.394-.174 9.594-4.351 9.594-11.914v-5.117a4.993 4.993 0 0 0 -3.419-4.743zm-6.581 16.86a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm1-5a1 1 0 0 1 -2 0v-8a1 1 0 0 1 2 0z" />
                                                                    </svg>
                                                                @else
                                                                    <svg class="w-5 h-5 group-hover/tr:text-red-600 text-red-800"
                                                                        fill="currentColor" height="512"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1">
                                                                        <path
                                                                            d="m18.581 2.14-6.265-2.089a1 1 0 0 0 -.632 0l-6.266 2.089a4.993 4.993 0 0 0 -3.418 4.743v5.117c0 7.563 9.2 11.74 9.594 11.914a1 1 0 0 0 .812 0c.394-.174 9.594-4.351 9.594-11.914v-5.117a4.993 4.993 0 0 0 -3.419-4.743zm-6.581 16.86a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm1-5a1 1 0 0 1 -2 0v-8a1 1 0 0 1 2 0z" />
                                                                    </svg>
                                                                @endif


                                                            </span>

                                                        </td>
                                                    @else
                                                        <td class="px-2 py-4" style="white-space: nowrap">
                                                            <span class="text-gray-400 font-bold"> N/A </span>
                                                        </td>
                                                    @endif
                                                @endif


                                                {{-- <td class="px-2 py-4" style="white-space: nowrap">
                                                        
                                                        @dd($workForceCourse->workforce_course_created_at->addMonth((int)$workForceCourse->course_validity))
                                                            
                                                            @switch($workForceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity))
                                                                @case(now()->diffInDays($workForceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity)->toDateString(), false) / 30 > 3)
                                                                    <span
                                                                        class="text-sm group font-semibold flex items-center mx-auto space-x-2 justify-between w-fit space-x-2 py-1 px-2 rounded-full border border-traivis-500 bg-traivis-50 group-hover/tr:bg-traivis-100 group-hover/tr:text-traivis-900">
                                                                        <span>
                                                                            {{ $workForceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity)->toDateString() }}
                                                                        </span>
                                                                        <svg class="w-5 h-5 group-hover/tr:text-green-600 text-green-600"
                                                                            fill="currentColor" viewBox="0 0 24 24"
                                                                            width="512" height="512">
                                                                            <path
                                                                                d="M18.581,2.14,12.316.051a1,1,0,0,0-.632,0L5.419,2.14A4.993,4.993,0,0,0,2,6.883V12c0,7.563,9.2,11.74,9.594,11.914a1,1,0,0,0,.812,0C12.8,23.74,22,19.563,22,12V6.883A4.993,4.993,0,0,0,18.581,2.14ZM16.718,9.717l-4.272,4.272a1.873,1.873,0,0,1-1.335.553h-.033a1.872,1.872,0,0,1-1.345-.6l-2.306-2.4A1,1,0,1,1,8.868,10.16L11.112,12.5,15.3,8.3a1,1,0,0,1,1.414,1.414Z" />
                                                                        </svg>
                                                                    </span>
                                                                @break

                                                                

                                                                @case(round(now()->diffInDays($workForceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity)->toDateString(), false) / 30) == 3)
                                                                    <span
                                                                        class="text-sm font-semibold flex items-center mx-auto space-x-2 justify-between w-fit space-x-2 py-1 px-2 rounded-full border border-yellow-500 bg-yellow-50 group-hover/tr:bg-yellow-100 group-hover/tr:text-yellow-900">
                                                                        <span>{{ $workforceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity)->toDateString() }}</span>
                                                                        <svg class="w-5 h-5 group-hover/tr:text-yellow-600 text-yellow-800"
                                                                            fill="currentColor" height="512"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-name="Layer 1">
                                                                            <path
                                                                                d="m18.581 2.14-6.265-2.089a1 1 0 0 0 -.632 0l-6.266 2.089a4.993 4.993 0 0 0 -3.418 4.743v5.117c0 7.563 9.2 11.74 9.594 11.914a1 1 0 0 0 .812 0c.394-.174 9.594-4.351 9.594-11.914v-5.117a4.993 4.993 0 0 0 -3.419-4.743zm-6.581 16.86a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm1-5a1 1 0 0 1 -2 0v-8a1 1 0 0 1 2 0z" />
                                                                        </svg>
                                                                    </span>
                                                                @case((now()->diffInDays($workForceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity)->toDateString(), false) / 30 )< 3)
                                                                    <span
                                                                        class="text-sm font-semibold flex items-center mx-auto space-x-2 justify-between w-fit space-x-2 py-1 px-2 rounded-full border border-pink-500 bg-pink-50 group-hover/tr:bg-pink-100 group-hover/tr:text-pink-900">
                                                                        <span>{{ $workForceCourse->workforce_course_created_at->addMonth($workForceCourse->course_validity)->toDateString() }}</span>
                                                                        <svg class="w-5 h-5 group-hover/tr:text-red-600 text-red-800"
                                                                            fill="currentColor" height="512"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            data-name="Layer 1">
                                                                            <path
                                                                                d="m18.581 2.14-6.265-2.089a1 1 0 0 0 -.632 0l-6.266 2.089a4.993 4.993 0 0 0 -3.418 4.743v5.117c0 7.563 9.2 11.74 9.594 11.914a1 1 0 0 0 .812 0c.394-.174 9.594-4.351 9.594-11.914v-5.117a4.993 4.993 0 0 0 -3.419-4.743zm-6.581 16.86a1 1 0 1 1 1-1 1 1 0 0 1 -1 1zm1-5a1 1 0 0 1 -2 0v-8a1 1 0 0 1 2 0z" />
                                                                        </svg>
                                                                    </span>
                                                                @break
                                                            @endswitch
                                                        
                                                        
                                                    </td> --}}
                                            @endforeach










                                        </tr>
                                    @endforeach
                                    <!--END Row 1-->

                                </tbody>
                                <!--END Table Raws -->

                            </table>
                            <!--END table-->


                            <!--View employee-->
                            @forelse ((array)$singleWorkforce as $singleWorkforce )
                                <section x-cloak x-show="stuOpen" class="mt-10"
                                    x-transition:enter="ease-out duration-100"
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:leave="ease-in duration-200"
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

                                    <div aria-labelledby="modal-title" aria-modal="true"
                                        class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
                                        <div
                                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                                            <!---over BG & center---->
                                            <div @click="stuOpen = false" aria-hidden="true"
                                                class=" fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                                            </div>
                                            <!-- center-->
                                            <span aria-hidden="true"
                                                class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                            <!---END over BG & center---->


                                            <!-- popup content-->
                                            <div
                                                class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-2/3">
                                                <div class="">
                                                    <div class="w-full h-full overflow-y-auto">
                                                        <div class="container p-6 mx-auto rounded-lg bg-white w-full">


                                                            <!--Employee header-->
                                                            <div class=" flex flex-row items-center justify-between">
                                                                <div class="flex items-center">
                                                                    <div class="flex-shrink-0">
                                                                        <img alt=""
                                                                            class="h-10 w-10 rounded-full bg-cover"
                                                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                                    </div>

                                                                    <div class="ml-4">
                                                                        <a class="whitespace-nowrap font-medium text-gray-900"
                                                                            href="#">{{ $singleWorkforce['user']['name'] }}</a>
                                                                    </div>
                                                                </div>


                                                                <button
                                                                    class="group inline-flex justify-end px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-full text-gray-700 bg-white hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 transition-colors  "
                                                                    type="button">
                                                                    <svg aria-hidden="true"
                                                                        class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white"
                                                                        fill="currentColor" height="512"
                                                                        id="Outline" viewBox="0 0 24 24"
                                                                        width="512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z">
                                                                        </path>
                                                                    </svg>
                                                                    <span>Message</span>
                                                                </button>
                                                            </div>
                                                            <!--END Employee header-->


                                                            <!--Employee summary-->
                                                            <div class=" ">
                                                                <div
                                                                    class="flex flex-row justify-center flex-wrap items-center mt-5">

                                                                    <div class="w-full lg:w-1/2 h-auto p-3 ">
                                                                        <div
                                                                            class="p-5 border bg-traivis-50 hover:bg-white transition-all rounded-lg shadow-dashboard items-center">
                                                                            <div
                                                                                class="flex flex-wrap items-end  mb-2 justify-center">
                                                                                <div class="w-auto ">
                                                                                    <h3
                                                                                        class="text-2xl text-gray-900 ">
                                                                                        CourSes
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex flex-wrap justify-around">

                                                                                <div
                                                                                    class="w-1/2 p-5  flex flex-row flex-wrap justify-center">
                                                                                    <span
                                                                                        class="w-full text-center self-center text-5xl p-1">
                                                                                        80%
                                                                                    </span>
                                                                                    <p
                                                                                        class="w-full text-center text-3xl p-1">
                                                                                        Completion rate
                                                                                    </p>


                                                                                </div>
                                                                                <div class="w-1/2 p-5">
                                                                                    <div
                                                                                        class="m-3 w-[110px] p-2 flex justify-start bg-gray-200   items-center border border-gray-300 rounded-full">
                                                                                        <p class="mr-2">10</p>
                                                                                        <p class=" text-sm ">Assigned
                                                                                        </p>

                                                                                    </div>
                                                                                    <div
                                                                                        class="m-3 w-[110px] p-2 flex justify-start bg-gray-200   items-center border border-gray-300 rounded-full">
                                                                                        <p class="mr-2">5</p>
                                                                                        <p class=" text-sm ">Completed
                                                                                        </p>

                                                                                    </div>
                                                                                    <div
                                                                                        class="m-3 w-[110px] p-2 flex justify-start bg-gray-200   items-center border border-gray-300 rounded-full">
                                                                                        <p class="mr-2">3</p>
                                                                                        <p class=" text-sm ">In
                                                                                            progress </p>

                                                                                    </div>
                                                                                    <div
                                                                                        class="m-3 w-[110px] p-2 flex justify-start bg-gray-200   items-center border border-gray-300 rounded-full">
                                                                                        <p class="mr-2">2</p>
                                                                                        <p class=" text-sm ">Pending
                                                                                        </p>

                                                                                    </div>


                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <!--END Employee summary-->


                                                            <!--Employee details-->
                                                            <div class="text-gray-700 px-2">

                                                                <div class="mt-5 border border-gray-200 rounded-lg "
                                                                    x-data="{ open: false }">

                                                                    <div @click="open = !open"
                                                                        class="flex cursor-pointer p-5 items-center bg-traivis-50 text-gray-500">
                                                                        <div class="mr-5">
                                                                            <svg class="w-5 h-5" fill="currentColor"
                                                                                height="512" id="Layer_1"
                                                                                style="enable-background:new 0 0 512 512;"
                                                                                version="1.1" viewBox="0 0 512 512"
                                                                                width="512" x="0px"
                                                                                xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                y="0px">
                                                                                <path
                                                                                    d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
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
                                                                        <div class="p-2 flex flex-row flex-wrap ">


                                                                            <!--employee basic information-->
                                                                            <div
                                                                                class="w-full md:w-1/3 whitespace-nowrap mb-5">
                                                                                <div
                                                                                    class="p-1 mb-2 font-bold text-sm text-gray-500">
                                                                                    Basic Info
                                                                                </div>

                                                                                <div class="space-y-3 px-3 ">
                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-full">
                                                                                            {{ $singleWorkforce['user']['name'] }}
                                                                                        </p>

                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-full">
                                                                                            {{ $singleWorkforce['user']['email'] }}
                                                                                        </p>

                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-full">
                                                                                            {{ $singleWorkforce['user']['phone'] }}
                                                                                        </p>

                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/3">
                                                                                            Work id:
                                                                                        </p>
                                                                                        <p class="text-left w-1/2">
                                                                                            {{ $singleWorkforce['work_id'] }}
                                                                                        </p>

                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/3">
                                                                                            Traivis id:
                                                                                        </p>
                                                                                        <p class="text-left w-1/2">
                                                                                            {{ $singleWorkforce['traivis_id'] }}
                                                                                        </p>
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

                                                                                <div class="space-y-3 px-3 ">
                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/2">
                                                                                            Position:
                                                                                        </p>
                                                                                        <p class="text-left w-1/2">
                                                                                            {{ $singleWorkforce['position']['position_name_en'] }}
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/2">
                                                                                            Department:
                                                                                        </p>
                                                                                        <p class="w-1/2">
                                                                                            @foreach ($singleWorkforce['departments'] as $department)
                                                                                                {{ $department['department_name_en'] }}
                                                                                                ,
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/2">
                                                                                            project:
                                                                                        </p>
                                                                                        <p class="w-1/2">
                                                                                            @foreach ($singleWorkforce['projects'] as $project)
                                                                                                {{ $project['project_name_en'] }}
                                                                                                ,
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/2">
                                                                                            Bransh:
                                                                                        </p>
                                                                                        <p class="w-1/2">
                                                                                            @foreach ($singleWorkforce['branches'] as $branch)
                                                                                                {{ $branch['branch_name_en'] }}
                                                                                                ,
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>




                                                                                </div>

                                                                            </div>
                                                                            <!---->

                                                                            <!--employee additional information-->
                                                                            <div
                                                                                class="w-full md:w-1/3 whitespace-nowrap mb-5">
                                                                                <div
                                                                                    class="p-1 mb-2 font-bold text-sm text-gray-500">
                                                                                    Role & contract info
                                                                                </div>

                                                                                <div class="space-y-3 px-3 ">


                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-2/3">
                                                                                            Project manager
                                                                                            of:
                                                                                        </p>
                                                                                        <p class="w-1/3">
                                                                                            project1
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class="flex px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                        <p class="w-1/2">
                                                                                            Contractor
                                                                                            at:
                                                                                        </p>
                                                                                        <p class="w-1/2">
                                                                                            contract name
                                                                                        </p>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                            <!---->


                                                                        </div>
                                                                        <!--END collapse content-->
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!--end Employee dtails-->


                                                            <!--Employee course-->
                                                            <div class="text-gray-700 px-2">

                                                                <div class="mt-5 border border-gray-200 rounded-lg "
                                                                    x-data="{ open: false }">

                                                                    <div @click="open = !open"
                                                                        class="flex cursor-pointer p-5 items-center bg-traivis-50 text-gray-500">
                                                                        <div class="mr-5">
                                                                            <svg class="w-5 h-5" fill="currentColor"
                                                                                height="512" id="Layer_1"
                                                                                style="enable-background:new 0 0 512 512;"
                                                                                version="1.1" viewBox="0 0 512 512"
                                                                                width="512" x="0px"
                                                                                xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                y="0px">
                                                                                <path
                                                                                    d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                                                                            </svg>
                                                                        </div>

                                                                        <div class="flex-grow font-bold">
                                                                            Courses
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
                                                                        <div class="p-2 flex flex-row flex-wrap ">




                                                                            <!--tables-->
                                                                            <div
                                                                                class="w-full  whitespace-nowrap space-y-5">

                                                                                <!--Course tests-->
                                                                                <div class="">
                                                                                    <div
                                                                                        class="p-1 mb-2 font-bold text-sm text-gray-500 items-center flex">
                                                                                        <span
                                                                                            class="p-3 w-5 h-5 flex items-center justify-center inline-block rounded-full bg-traivis-100 text-lg mr-3 ">
                                                                                            4
                                                                                        </span>
                                                                                        Courses details
                                                                                    </div>

                                                                                    <div
                                                                                        class=" rounded-xl shadow-dashboard border">
                                                                                        <table
                                                                                            class="w-full text-center">
                                                                                            <thead
                                                                                                class=" border-b-4 border-gray-300 ">
                                                                                                <tr
                                                                                                    class="bg-traivis-50 font-medium ">
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Course Name
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Issue Date
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Expire Date
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Upcoming Date
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Certification
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </thead>

                                                                                            <tbody
                                                                                                class="cursor-pointer">
                                                                                                <tr
                                                                                                    class=" hover:bg-traivis-50 ">
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Paython
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        file
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr
                                                                                                    class=" hover:bg-traivis-50 ">
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Paython
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        file
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr
                                                                                                    class=" hover:bg-traivis-50 ">
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        Paython
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        12/10/2022
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class=" px-6 py-3">
                                                                                                        file
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
                                                            <!--end Employee course-->


                                                            <!--Employee Roles-->
                                                            <div class="text-gray-700 px-2">

                                                                <div class="mt-5 border border-gray-200 rounded-lg "
                                                                    x-data="{ open: false }">

                                                                    <div @click="open = !open"
                                                                        class="flex cursor-pointer p-5 items-center bg-traivis-50 text-gray-500">
                                                                        <div class="mr-5">
                                                                            <svg class="w-5 h-5" fill="currentColor"
                                                                                height="512" id="Layer_1"
                                                                                style="enable-background:new 0 0 512 512;"
                                                                                version="1.1" viewBox="0 0 512 512"
                                                                                width="512" x="0px"
                                                                                xml:space="preserve"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                y="0px">
                                                                                <path
                                                                                    d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                                                                            </svg>
                                                                        </div>

                                                                        <div class="flex-grow font-bold">
                                                                            Performance
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


                                                                </div>
                                                            </div>
                                                            <!--end Employee Roles-->


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END popup content -->

                                        </div>
                                    </div>
                                </section>
                            @empty






                            @endforelse
                            <!--END View employee-->


                        </div>
                        <!--End Table Section-->

                    </div>
                </section>

            </div>
        </section>
        <!--End content-->


    </div>
    <!-- Page Content -->
</div>
