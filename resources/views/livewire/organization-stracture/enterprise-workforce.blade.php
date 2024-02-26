{{-- @dd($workforceCourses) --}}
<div class="w-full">
    <!-- workforce tab content -->
    <section class="w-full p-2" x-show="tabs.find(tab => tab.id === 2).active">
        {{-- @dd(Auth::user()->can('organization_workforce_edit')) --}}
        <!-- workforce search & filters -->
        <div class="capitalize">

            <!--form-->
            <form class="mt-8 flex w-full flex-col items-center justify-center gap-x-3 gap-y-8">

                <!--search-->
                <div class="flex h-fit w-full flex-row items-center justify-center md:w-1/2">
                    <label class="sr-only" for="wfsearch">Search Workforce</label>
                    <div class="relative w-full">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor"
                                viewbox="0 0 20 20">
                                <path clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="search" placeholder="Search Workforce"
                            wire:model.debounce.500ms='filterName'
                            class="block h-10 w-full rounded-full border border-gray-300 bg-white py-2 pl-10 pr-3 text-sm text-gray-800 placeholder-gray-500 transition-colors focus:border-traivis-500 focus:text-gray-800 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm"
                            id="wfsearch">
                    </div>
                </div>
                <!---->

                <!--filters-->
                <div class="flex w-full flex-row items-center justify-between gap-x-2 gap-y-4 md:w-2/3">

                    <!-- filter positions-->
                    <div class="flex h-fit w-1/4 flex-row items-center justify-center">
                        <div @click.outside="fopen = false" @keydown.window.escape.stop="fopen = false"
                            aria-labelledby="filter-heading1" class="relative z-10 w-fit"
                            x-data="{ fopen: false }">

                            <h2 class="sr-only" id="filter-heading1">positions</h2>

                            <!--filters button-->
                            <div class="">
                                <div class="group mx-auto flex items-center">
                                    <button @click="fopen = !fopen" aria-controls="positionF"
                                        aria-expanded="false"
                                        class="group flex w-fit items-center whitespace-nowrap text-sm font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                        type="button">
                                        <svg class="mr-2 h-5 w-5 flex-shrink-0" fill="currentColor"
                                            data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        Positions
                                    </button>
                                </div>
                            </div>

                            <!--filters menu-->
                            <div class="absolute left-0 w-fit origin-top-right rounded-lg bg-white p-6 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                id="positionF" x-show="fopen"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-transition:leave-start="transform opacity-100 scale-100">

                                <div class="">
                                    <div class="flex flex-row gap-x-8 text-sm">

                                        <fieldset class="whitespace-nowrap">

                                            <div class="space-y-4 pt-6">
                                                @foreach ($positions as $key => $value)
                                                    <div class="flex items-center text-base sm:text-sm">
                                                        <input
                                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                            id="myResponse-0"
                                                            wire:model='filterByPosition'
                                                            name="myResponse[]" type="checkbox"
                                                            value="{{ $key }}">
                                                        <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                            for="myResponse-0">
                                                            {{ $value }} </label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </fieldset>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!---->

                    <!-- filter departments-->
                    <div class="flex h-fit w-1/4 flex-row items-center justify-center">
                        <div @click.outside="fopen = false" @keydown.window.escape.stop="fopen = false"
                            aria-labelledby="filter-heading2" class="relative z-10 w-fit"
                            x-data="{ fopen: false }">

                            <h2 class="sr-only" id="filter-heading2">departments</h2>

                            <!--filters button-->
                            <div class="">
                                <div class="group mx-auto flex items-center">
                                    <button @click="fopen = !fopen" aria-controls="departF"
                                        aria-expanded="false"
                                        class="group flex w-fit items-center whitespace-nowrap text-sm font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                        type="button">
                                        <svg class="mr-2 h-5 w-5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 384 512">
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
                            <div class="absolute left-0 w-fit origin-top-right rounded-lg bg-white p-6 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                id="departF" x-show="fopen"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-transition:leave-start="transform opacity-100 scale-100">

                                <div class="">
                                    <div class="flex flex-row gap-x-8 text-sm">

                                        <fieldset class="whitespace-nowrap">

                                            <div class="space-y-4 pt-6">

                                                @foreach ($departments as $key => $value)
                                                    <div class="flex items-center text-base sm:text-sm">
                                                        <input
                                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
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

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!---->

                    <!-- filter projects-->
                    <div class="flex h-fit w-1/4 flex-row items-center justify-center">
                        <div @click.outside="fopen = false" @keydown.window.escape.stop="fopen = false"
                            aria-labelledby="filter-heading3" class="relative z-10 w-fit"
                            x-data="{ fopen: false }">

                            <h2 class="sr-only" id="filter-heading3">projects</h2>

                            <!--filters button-->
                            <div class="">
                                <div class="group mx-auto flex items-center">
                                    <button @click="fopen = !fopen" aria-controls="projectF"
                                        aria-expanded="false"
                                        class="group flex w-fit items-center whitespace-nowrap text-sm font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                        type="button">
                                        <svg class="mr-2 h-5 w-5 flex-shrink-0" fill="currentColor"
                                            viewBox="0 0 24 24" width="512" height="512">
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
                            <div class="absolute left-0 w-fit origin-top-right rounded-lg bg-white p-6 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                id="projectF" x-show="fopen"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-transition:leave-start="transform opacity-100 scale-100">

                                <div class="">
                                    <div class="flex flex-row gap-x-8 text-sm">

                                        <fieldset class="whitespace-nowrap">

                                            <div class="space-y-4 pt-6">
                                                @foreach ($projects as $key => $value)
                                                    <div class="flex items-center text-base sm:text-sm">
                                                        <input
                                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                            id="status-0" wire:model='filterByProject'
                                                            name="status[]" type="checkbox"
                                                            value="{{ $key }}">
                                                        <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                            for="status-0">
                                                            {{ $value }} </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </fieldset>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!---->

                    <!-- filter branches-->
                    <div class="flex h-fit w-1/4 flex-row items-center justify-center">
                        <div @click.outside="fopen = false" @keydown.window.escape.stop="fopen = false"
                            aria-labelledby="filter-heading4" class="relative z-10 w-fit"
                            x-data="{ fopen: false }">

                            <h2 class="sr-only" id="filter-heading4">branches</h2>

                            <!--filters button-->
                            <div class="">
                                <div class="group mx-auto flex items-center">
                                    <button @click="fopen = !fopen" aria-controls="branchF"
                                        aria-expanded="false"
                                        class="group flex w-fit items-center whitespace-nowrap text-sm font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                        type="button">
                                        <svg class="mr-2 h-5 w-5 flex-shrink-0" fill="currentColor"
                                            data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                            </path>
                                        </svg>
                                        Branches
                                    </button>
                                </div>
                            </div>

                            <!--filters menu-->
                            <div class="absolute left-0 w-fit origin-top-right rounded-lg bg-white p-6 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                id="branchF" x-show="fopen"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                x-transition:leave-start="transform opacity-100 scale-100">

                                <div class="">
                                    <div class="flex flex-row gap-x-8 text-sm">

                                        <fieldset class="whitespace-nowrap">

                                            <div class="space-y-4 pt-6">

                                                @foreach ($branches as $key => $value)
                                                    <div class="flex items-center text-base sm:text-sm">
                                                        <input
                                                            class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
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

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!---->

                </div>
                <!--END filters-->

                <!--Filter Badges-->
                <div class="flex w-full flex-row flex-wrap items-center justify-evenly gap-4">
                    @if ($filterByPosition)
                        @foreach ($positions as $key => $value)
                            @if (in_array($key, $filterByPosition))
                                <span
                                    class="inline-flex items-center rounded-full bg-traivis-100 py-1 pl-2.5 pr-1 text-sm font-semibold text-traivis-600">
                                    {{ $value }}
                                    <button type="button"
                                        wire:click='removePositionFilter({{ $key }})'
                                        class="ml-0.5 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:bg-indigo-500 focus:text-white focus:outline-none">
                                        <span class="sr-only">Remove Filter</span>
                                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                                            viewBox="0 0 8 8">
                                            <path stroke-linecap="round" stroke-width="1.5"
                                                d="M1 1l6 6m0-6L1 7" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        @endforeach

                    @endif

                    @if ($filterByDepartment)
                        @foreach ($departments as $key => $value)
                            @if (in_array($key, $filterByDepartment))
                                <span
                                    class="inline-flex items-center rounded-full bg-traivis-100 py-1 pl-2.5 pr-1 text-sm font-semibold text-traivis-600">
                                    {{ $value }}
                                    <button type="button"
                                        wire:click='removeDevelopmentFilter({{ $key }})'
                                        class="ml-0.5 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:bg-indigo-500 focus:text-white focus:outline-none">
                                        <span class="sr-only">Remove Filter</span>
                                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                                            viewBox="0 0 8 8">
                                            <path stroke-linecap="round" stroke-width="1.5"
                                                d="M1 1l6 6m0-6L1 7" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        @endforeach

                    @endif

                    @if ($filterByProject)
                        @foreach ($projects as $key => $value)
                            @if (in_array($key, $filterByProject))
                                <span
                                    class="inline-flex items-center rounded-full bg-traivis-100 py-1 pl-2.5 pr-1 text-sm font-semibold text-traivis-600">
                                    {{ $value }}
                                    <button type="button"
                                        wire:click='removeProjectFilter({{ $key }})'
                                        class="ml-0.5 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:bg-indigo-500 focus:text-white focus:outline-none">
                                        <span class="sr-only">Remove Filter</span>
                                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                                            viewBox="0 0 8 8">
                                            <path stroke-linecap="round" stroke-width="1.5"
                                                d="M1 1l6 6m0-6L1 7" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        @endforeach

                    @endif

                    @if ($filterByBranch)
                        @foreach ($branches as $key => $value)
                            @if (in_array($key, $filterByBranch))
                                <span
                                    class="inline-flex items-center rounded-full bg-traivis-100 py-1 pl-2.5 pr-1 text-sm font-semibold text-traivis-600">
                                    {{ $value }}
                                    <button type="button"
                                        wire:click='removeBranchFilter({{ $key }})'
                                        class="ml-0.5 inline-flex h-4 w-4 flex-shrink-0 items-center justify-center rounded-full text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:bg-indigo-500 focus:text-white focus:outline-none">
                                        <span class="sr-only">Remove Filter</span>
                                        <svg class="h-2 w-2" stroke="currentColor" fill="none"
                                            viewBox="0 0 8 8">
                                            <path stroke-linecap="round" stroke-width="1.5"
                                                d="M1 1l6 6m0-6L1 7" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        @endforeach

                    @endif

                    <div class="ml-auto flex h-fit flex-row items-center justify-center">
                        <button wire:click='clearAllFilters'
                            class="form-input h-10 w-full whitespace-nowrap rounded-full border-gray-300 text-sm font-semibold text-gray-500 hover:border-traivis-500 hover:text-traivis-500 focus:text-traivis-500"
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
                class="flex justify-center" x-data="{ stuOpen: false, addNew: false }"
                x-init="$wire.on('closeModal', () => {stuOpen= false})">

                <!--Grid Thumbnails-->
                <div
                    class="m-6 mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5">
                    {{-- @dd($Workforces) --}}
                    @forelse ($Workforces as $enterpriseWorkforce)

                        <div wire:click="edit({{ $enterpriseWorkforce->id }})"
                            @click="stuOpen = !stuOpen"
                            class="group relative flex h-fit cursor-pointer flex-col rounded-lg border-t-2 border-b-2 border-gray-300 bg-white p-2 pb-0 transition-all hover:border-traivis-400 hover:bg-traivis-50 hover:shadow-xl">
                            <div class="text-center capitalize text-gray-500">

                                <!--Card Header-->
                                <div class="flex items-center py-1 px-2 text-sm font-semibold">
                                    <!--ID-->
                                    <p class="">#{{ $enterpriseWorkforce->work_id }}</p>
                                    <!--ID-->

                                    <!-- dropdown delete button -->
                                    <div class="deleteButton ml-auto">

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
                                                :aria-controls="$id('dropdown-button')" type="button"
                                                class="border-0 capitalize text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
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
                                                class="absolute z-20 mt-2 w-full rounded">
                                                <button
                                                    class="flex items-center rounded bg-gray-200 p-2 font-semibold capitalize text-gray-600 hover:bg-white">
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
                                <img class="my-3 mx-auto h-16 w-16 rounded-full border border-transparent object-cover transition-all group-hover:border-gray-300"
                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="employee" loading="lazy">
                                <!---->

                                <!--User Name-->
                                <a href="#"
                                    class="my-2 flex w-full justify-center text-lg font-semibold text-gray-900 transition-colors">
                                    {{ $enterpriseWorkforce->user->name ?? 'Employee Name' }}
                                </a>
                                <!---->

                                <!--User Position-->
                                <div
                                    class="mx-auto flex w-fit flex-row items-center justify-center space-x-2 transition-all group-hover:text-traivis-500">
                                    <div class="group/c relative">
                                        <svg class="h-3.5 w-3.5 flex-shrink-0" fill="currentColor"
                                            data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                            height="512">
                                            <path
                                                d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                            </path>
                                        </svg>
                                        <span
                                            class="absolute top-8 flex hidden w-fit flex-col space-y-2 whitespace-nowrap rounded-lg bg-black p-2 text-xs font-bold text-white transition-all group-hover/c:block">
                                            Position
                                        </span>
                                    </div>
                                    <div
                                        class="group/info relative inline-flex w-fit whitespace-nowrap rounded-full border border-gray-200 bg-traivis-50 py-0.5 px-2 text-sm font-bold transition-all group-hover:border-traivis-500">
                                        {{ $enterpriseWorkforce->position->position_name_en ?? 'Position Name' }}

                                        <!--User info tooltip-->
                                        <div style="z-index: 111111111111111111111"
                                            class="absolute top-8 flex hidden w-fit flex-col space-y-2 rounded-lg bg-black p-2 text-xs font-semibold text-white transition-all group-hover/info:block">
                                            <p class="flex flex-row items-center space-x-2">
                                                <svg class="h-3.5 w-3.5 flex-shrink-0"
                                                    fill="currentColor" data-name="Layer 1"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M23,11c0-2.206-1.794-4-4-4v-2c0-2.757-2.243-5-5-5h-4c-2.757,0-5,2.243-5,5v2c-2.206,0-4,1.794-4,4v5.5c0,1.379,1.121,2.5,2.5,2.5h7.5v3H7c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1h-4v-3h7.5c1.379,0,2.5-1.121,2.5-2.5v-5.5ZM3.5,14c-.171,0-.338,.018-.5,.051v-3.051c0-1.103,.897-2,2-2v3h14v-3c1.103,0,2,.897,2,2v3.051c-.162-.033-.329-.051-.5-.051H3.5Z">
                                                    </path>
                                                </svg>
                                                <span
                                                    class="w-12 truncate text-left">@lang('Position')</span>
                                                <span class="mx-1 font-bold">
                                                    {{ $enterpriseWorkforce->position->position_name_en ?? 'Position Name' }}</span>
                                            </p>

                                            <p class="flex flex-row items-center space-x-2">
                                                <svg class="h-3.5 w-3.5 flex-shrink-0"
                                                    fill="currentColor" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                                    </path>
                                                </svg>
                                                <span class="w-12 truncate text-left">Depart</span>
                                                @foreach ($enterpriseWorkforce->departments as $department)
                                                    <span class="mx-1 font-bold">
                                                        {{ $department->department_name_en }}
                                                    </span>
                                                @endforeach
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
                                                <span
                                                    class="w-12 truncate text-left">@lang('Project')</span>

                                                @foreach ($enterpriseWorkforce->projects as $project)
                                                    <span class="mx-1 font-bold">
                                                        {{ $project->project_name_en }}
                                                    </span>
                                                @endforeach
                                            </p>

                                            <p class="flex flex-row items-center space-x-2">
                                                <svg class="h-3.5 w-3.5 flex-shrink-0"
                                                    fill="currentColor" data-name="Layer 1"
                                                    viewBox="0 0 24 24" width="512" height="512">
                                                    <path
                                                        d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                                    </path>
                                                </svg>
                                                <span class="w-12 truncate text-left">Branch</span>
                                                @foreach ($enterpriseWorkforce->branches as $branch)
                                                    <span class="mx-1 font-bold">
                                                        {{ $branch->branch_name_en }}
                                                    </span>
                                                @endforeach
                                            </p>
                                        </div>
                                        <!--End Tooltip-->
                                    </div>

                                </div>
                                <!--End User Position-->

                                <!--Card footer-->
                                <div
                                    class="mt-5 flex items-center justify-between border-t-2 py-3 text-xs font-bold">
                                    <p
                                        class="group/d relative flex w-1/3 flex-row items-center space-x-2 px-1 hover:text-traivis-500">
                                        <svg class="h-3 w-3 flex-shrink-0" fill="currentColor"
                                            height="512" viewBox="0 0 24 24" width="512"
                                            data-name="Layer 1">
                                            <path
                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                        </svg>
                                        <span
                                            class="truncate">{{ $enterpriseWorkforce->companyRequiredCourses->count() }}
                                            Courses </span>

                                        <span
                                            class="absolute top-8 flex hidden w-fit flex-col space-y-2 whitespace-nowrap rounded-lg bg-black p-2 text-xs font-bold text-white transition-all group-hover/d:block">
                                            {{ $enterpriseWorkforce->companyRequiredCourses->count() }}
                                            Courses
                                        </span>
                                    </p>
                                    <p
                                        class="group/d group/op relative flex w-1/3 flex-row items-center space-x-2 px-1 hover:text-traivis-500">
                                        <span
                                            class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                        <span class="truncate">contractor </span>

                                        <span
                                            class="absolute top-8 flex hidden w-fit flex-col space-y-2 whitespace-nowrap rounded-lg bg-black p-2 text-xs font-bold text-white transition-all group-hover/d:block">
                                            contractor
                                        </span>
                                    </p>
                                    <p
                                        class="group/d group/op relative flex w-1/3 flex-row items-center space-x-2 px-1 hover:text-traivis-500">
                                        <span
                                            class="h-1.5 w-1.5 rounded-full bg-gray-500 group-hover/op:bg-traivis-500"></span>
                                        <span class="truncate">Project manager </span>

                                        <span
                                            class="absolute top-8 flex hidden w-fit flex-col space-y-2 whitespace-nowrap rounded-lg bg-black p-2 text-xs font-bold text-white transition-all group-hover/d:block">
                                            Project manager
                                        </span>
                                    </p>
                                </div>
                                <!---->

                            </div>
                        </div>

                    @empty
                        <div class="mx-auto w-80">
                            @lang('Items Not Found')
                        </div>
                    @endforelse

                </div>
                <!--END Grid Thumbnails-->

                <!--add Employee button-->
                @if (auth()->user()->can('organization_workforce_create'))
                    <div

                    @click="stuOpen = !stuOpen
                        addNew=true "
                        class="group fixed bottom-10 right-10 z-20 transition-all duration-500 ease-in-out"
                        :class="stuOpen ? 'opacity-0 mr 96' : 'opacity-100 mr-0'">

                        <button wire:click='store()'
                            class="flex flex-col items-center p-2 text-traivis-500 ring-0 transition-colors group-hover:text-gray-500 ">
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
                @endif
                <!--END add Employee button-->

                <!----- View Card Popup----------->
                <section x-cloak x-show="stuOpen" class="z-[999]"
                    x-transition:enter="ease-out duration-100"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

                    <div class="fixed inset-0 z-30 overflow-y-auto">
                        <div
                            class="flex min-h-screen items-end justify-center px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                            <!---over BG---->
                            <div @click="stuOpen = false
                                addNew=false"
                                aria-hidden="true"
                                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                            </div>
                            <!-- center-->
                            <span aria-hidden="true"
                                class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
                            <!---END over BG---->

                            <!-- popup content-->
                            <div
                                class="relative my-8 inline-block w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">
                                <div>
                                    <div
                                        class="container mx-auto flex w-full flex-col rounded-lg bg-white px-6">
                                        <!--WF sticky header-->
                                        <div
                                            class="sticky top-0 z-30 flex flex-row items-center justify-between bg-white py-5">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <template x-if="addNew==false">
                                                        <img alt=""
                                                            class="h-10 w-10 rounded-full bg-cover"
                                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                        <div class="ml-4">
                                                            <a class="whitespace-nowrap font-medium text-gray-900"
                                                                href="#">Lindsay Walton</a>
                                                        </div>
                                                    </template>
                                                    <template x-if="addNew==true">
                                                        <div
                                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-5 w-5 items-center text-center"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                version="1.1" id="Capa_1"
                                                                x="0px" y="0px"
                                                                viewBox="0 0 512 512"
                                                                xml:space="preserve" width="512"
                                                                height="512">
                                                                <g>
                                                                    <circle cx="256"
                                                                        cy="128" r="128">
                                                                    </circle>
                                                                    <path
                                                                        d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>

                                                    </template>
                                                </div>
                                            </div>
                                            <template x-if="addNew==false"
                                                class="flex flex-row items-center space-x-3">

                                                <div>
                                                    <button
                                                        class="group inline-flex justify-end rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                        type="button">
                                                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white"
                                                            fill="currentColor" data-name="Layer 1"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512">
                                                            <path
                                                                d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z" />
                                                        </svg>
                                                        <span>Message</span>
                                                    </button>

                                                    <button
                                                        class="group inline-flex justify-end rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                        type="button">
                                                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white"
                                                            fill="currentColor" viewBox="0 0 24 24"
                                                            width="512" height="512">
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
                                                class="shadow-dashboard flex w-full flex-col items-center rounded-lg border bg-traivis-50 p-5 text-gray-500 transition-all hover:bg-white">

                                                <div class="flex flex-col items-center md:flex-row">
                                                    <div class="flex flex-col justify-center p-5">
                                                        <span
                                                            class="w-full self-center p-1 text-center text-5xl font-bold">
                                                            80<span class="text-3xl"> % </span>
                                                        </span>
                                                        <p class="w-full p-1 text-center text-3xl">
                                                            Completion
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="flex flex-row flex-wrap justify-center gap-3 p-5">
                                                        <button
                                                            class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 bg-white px-2 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                                            <p class=""> 10 </p>
                                                            <p class="px-2 text-sm"> Assigned
                                                            </p>
                                                        </button>

                                                        <button
                                                            class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 bg-white px-2 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                                            <p class=""> 5 </p>
                                                            <p class="px-2 text-sm"> Completed
                                                            </p>
                                                        </button>

                                                        <button
                                                            class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 bg-white px-2 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                                            <p class=""> 3 </p>
                                                            <p class="px-2 text-sm"> In progress
                                                            </p>
                                                        </button>

                                                        <button
                                                            class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 bg-white px-2 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                                            <p class=""> 2 </p>
                                                            <p class="px-2 text-sm"> Pending </p>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                        </template>
                                        <!--END WF summary-->

                                        <form wire:submit.prevent="{{ $updateOrCreateForm }}">

                                            <!--Collapses-->
                                            <div class="py-6">

                                                <!--details Collapse-->
                                                <div class="text-gray-700">

                                                    <div class="mt-5 rounded-lg border border-gray-200"
                                                        x-data="{ open: false }">

                                                        <div @click="open = !open"
                                                            class="flex cursor-pointer items-center bg-traivis-50 p-5 text-gray-500">
                                                            <div class="mr-5">
                                                                <svg id="Layer_1" class="h-5 w-5"
                                                                    fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512"
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
                                                                    class="h-5 w-5 rotate-0 transition-transform"
                                                                    fill="currentColor"
                                                                    viewbox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                        <div class="p-4" style="display: none;"
                                                            x-show="open"
                                                            x-transition:enter="transition-opacity ease-linear"
                                                            x-transition:enter-end="opacity-100"
                                                            x-transition:enter-start="opacity-0"
                                                            x-transition:leave="transition-opacity ease-linear"
                                                            x-transition:leave-end="opacity-0"
                                                            x-transition:leave-start="opacity-100">

                                                            <!--collapse content-->
                                                            <div class="flex flex-row flex-wrap p-2 normal-case"
                                                                x-data="{
                                                                    role: '',
                                                                    pop: true,
                                                                    pop2: false,
                                                                    toggle: false,
                                                                    toggle2: @entangle('isNotStaff'),
                                                                    employee: [{}],
                                                                    contractorName: @entangle('contractorName'),
                                                                    contractorEmail: @entangle('contractorEmail'),
                                                                    selectedContactor: @entangle('selectedContactor'),
                                                                    contractorPhone: @entangle('contractorPhone')
                                                                }">

                                                                <!--employee basic information-->
                                                                <div
                                                                    class="mb-5 w-full whitespace-nowrap md:w-1/3">
                                                                    <div
                                                                        class="mb-2 p-1 text-sm font-bold text-gray-500">
                                                                        @lang('Basic Info')
                                                                    </div>

                                                                    <div class="space-y-3 pl-3">
                                                                        <div
                                                                            class="flex cursor-pointer border-l border-gray-300 px-2 py-1 hover:border-traivis-500 hover:bg-traivis-50">

                                                                            @if (auth()->user()->can('organization_workforce_edit'))
                                                                                <input type="text"
                                                                                    wire:model.debounce.500ms='name'
                                                                                    class="h-10 w-full rounded-lg"
                                                                                    placeholder="Your Name">
                                                                            @endif

                                                                            @if (auth()->user()->cannot('organization_workforce_edit'))
                                                                                <input type="text"
                                                                                    value="{{ $name }}"
                                                                                    readonly
                                                                                    class="h-10 w-full rounded-lg"
                                                                                    placeholder="Your Name">
                                                                            @endif

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('name')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div
                                                                            class="flex cursor-pointer border-l border-gray-300 px-2 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                            <input type="email"
                                                                                @if (auth()->user()->can('organization_workforce_edit')) wire:model.debounce.500ms='email' @endif
                                                                                @if (auth()->user()->cannot('organization_workforce_edit'))
                                                                                    value="{{ $email }}" disabled
                                                                                @endif
                                                                                class="h-10 w-full rounded-lg"
                                                                                placeholder="example@gmail.com">

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('email')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div
                                                                            class="flex cursor-pointer border-l border-gray-300 px-2 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                            <input type="text"
                                                                                @if (auth()->user()->can('organization_workforce_edit')) wire:model.debounce.500ms='phone' @endif
                                                                                @if (auth()->user()->cannot('organization_workforce_edit'))
                                                                                    value="{{ $phone }}" disabled
                                                                                  @endif
                                                                                class="h-10 w-full rounded-lg"
                                                                                placeholder="01********">

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('phone')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div
                                                                            class="flex cursor-pointer border-l border-gray-300 px-2 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                            <p type="text"
                                                                                class="h-10 w-1/3 rounded-lg rounded-r-none border-r-0 pr-2 text-sm">
                                                                                @lang('Work id'):
                                                                            </p>
                                                                            <input type="text"
                                                                                @if (auth()->user()->can('organization_workforce_edit')) wire:model.debounce.500ms='work_id' @endif
                                                                                @if (auth()->user()->cannot('organization_workforce_edit'))
                                                                                    value="{{ $work_id }}" disabled
                                                                                @endif
                                                                                class="h-10 w-full rounded-lg rounded-l-none"
                                                                                placeholder="1255">

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('work_id')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div
                                                                            class="flex cursor-pointer border-l border-gray-300 px-2 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                            <p type="text"
                                                                                class="h-10 w-1/3 rounded-lg rounded-r-none border-r-0 pr-2 text-sm">
                                                                                @lang('Traivis id'):
                                                                            </p>
                                                                            <input type="text"
                                                                                @if (auth()->user()->can('organization_workforce_edit')) wire:model.debounce.500ms='traivis_id' @endif
                                                                                @if (auth()->user()->cannot('organization_workforce_edit'))
                                                                                    value="{{ $traivis_id }}" disabled
                                                                                @endif
                                                                                {{-- wire:model.debounce.500ms='traivis_id' --}}
                                                                                class="h-10 w-full rounded-lg rounded-l-none"
                                                                                placeholder="25">

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('traivis_id')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <!---->

                                                                <!--employee work information-->
                                                                <div
                                                                    class="mb-5 w-full whitespace-nowrap md:w-1/3">
                                                                    <div
                                                                        class="mb-2 p-1 text-sm font-bold text-gray-500">
                                                                        Work info
                                                                    </div>

                                                                    <div class="w-full space-y-3 pl-3">

                                                                        {{-- position select --}}
                                                                        <div
                                                                            class="group relative flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                            <svg class="peer mr-3 h-5 w-5 flex-shrink-0 group-focus-within:text-traivis-500"
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
                                                                                class="absolute top-auto left-12 hidden rounded-lg bg-black px-2 py-0.5 text-white transition-all peer-hover:block">
                                                                                @lang('Position')
                                                                            </p>

                                                                            <div wire:ignore>
                                                                                <select id="WFposition"
                                                                                    wire:model='selectedPosition'
                                                                                    x-model="employee.position"
                                                                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-traivis-500 focus:ring-traivis-500">
                                                                                    <option selected>
                                                                                        @lang('Choose A Position')
                                                                                    </option>

                                                                                    @foreach ($positions as $key => $value)
                                                                                        <option
                                                                                            @if ($selectedPosition == $key) selected @endif
                                                                                            value="{{ $key }}">
                                                                                            {{ $value }}
                                                                                        </option>
                                                                                    @endforeach

                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('selectedPosition')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div
                                                                            class="group relative flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">

                                                                            <!-- filter departments-->
                                                                            <div
                                                                                class="flex h-fit flex-row items-center justify-center">
                                                                                <div @click.outside="fopen = false"
                                                                                    @keydown.window.escape.stop="fopen = false"
                                                                                    aria-labelledby="filter-heading2"
                                                                                    class="relative w-fit"
                                                                                    x-data="{ fopen: false }">

                                                                                    <h2 class="sr-only"
                                                                                        id="filter-heading2">
                                                                                        departments</h2>

                                                                                    <!--filters button-->
                                                                                    <div class="">
                                                                                        <div
                                                                                            class="group mx-auto flex items-center">
                                                                                            <button
                                                                                                @click="fopen = !fopen"
                                                                                                aria-controls="departF"
                                                                                                aria-expanded="false"
                                                                                                class="group flex w-fit items-center whitespace-nowrap font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                                                                                type="button">
                                                                                                <svg class="peer mr-3 h-5 w-5 flex-shrink-0 group-focus-within:text-traivis-500"
                                                                                                    fill="currentColor"
                                                                                                    viewBox="0 0 384 512">
                                                                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                                    <path
                                                                                                        d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                Select
                                                                                                Departments
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!--filters menu-->
                                                                                    <div class="absolute left-0 z-10 w-full origin-top-right rounded-lg bg-white px-6 py-2 text-center shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                                                                        id="departF"
                                                                                        x-show="fopen"
                                                                                        x-transition:enter="transition ease-out duration-100"
                                                                                        x-transition:enter-end="transform opacity-100 scale-100"
                                                                                        x-transition:enter-start="transform opacity-0 scale-95"
                                                                                        x-transition:leave="transition ease-in duration-75"
                                                                                        x-transition:leave-end="transform opacity-0 scale-95"
                                                                                        x-transition:leave-start="transform opacity-100 scale-100">

                                                                                        <div
                                                                                            class="">
                                                                                            <div
                                                                                                class="flex flex-row gap-x-8">
                                                                                                {{-- {{ var_export($selectedDepartment) }} --}}

                                                                                                <fieldset
                                                                                                    class="whitespace-nowrap">

                                                                                                    <div
                                                                                                        class="space-y-4 pt-6">

                                                                                                        @foreach ($departments as $key => $value)
                                                                                                            <div
                                                                                                                class="flex items-center text-base">
                                                                                                                <div
                                                                                                                    class="mb-4 flex items-center">
                                                                                                                    <input
                                                                                                                        {{-- {{ in_array($key, $selectedDepartment) ? 'checked' : '' }} --}}
                                                                                                                        id="default-checkbox-{{ $key }}"
                                                                                                                        wire:model='selectedDepartment'
                                                                                                                        wire:loading.attr="disabled"
                                                                                                                        type="checkbox"
                                                                                                                        value="{{ $key }}"
                                                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500 ">
                                                                                                                    <label
                                                                                                                        for="default-checkbox-{{ $key }}"
                                                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $value }}</label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endforeach

                                                                                                    </div>
                                                                                                </fieldset>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!---->
                                                                        </div>

                                                                        <div
                                                                            class="mx-auto flex-wrap text-red-700">
                                                                            @error('selectedDepartment')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        {{-- selected projects --}}

                                                                        <div
                                                                            class="group relative flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">

                                                                            <!-- select projects-->
                                                                            <div
                                                                                class="flex h-fit flex-row items-center justify-center">
                                                                                <div @click.outside="fopen = false"
                                                                                    @keydown.window.escape.stop="fopen = false"
                                                                                    aria-labelledby="filter-heading2"
                                                                                    class="relative w-fit"
                                                                                    x-data="{ fopen: false }">

                                                                                    <h2 class="sr-only"
                                                                                        id="filter-heading2">
                                                                                        projects</h2>

                                                                                    <!--filters button-->
                                                                                    <div class="">
                                                                                        <div
                                                                                            class="group mx-auto flex items-center">
                                                                                            <button
                                                                                                @click="fopen = !fopen"
                                                                                                aria-controls="departF"
                                                                                                aria-expanded="false"
                                                                                                class="group flex w-fit items-center whitespace-nowrap font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                                                                                type="button">
                                                                                                <svg class="peer mr-3 h-5 w-5 flex-shrink-0 group-focus-within:text-traivis-500"
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
                                                                                                Select
                                                                                                Projects
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!--filters menu-->
                                                                                    <div class="absolute left-0 z-10 w-full origin-top-right rounded-lg bg-white px-6 py-2 text-center shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                                                                        id="departF"
                                                                                        x-show="fopen"
                                                                                        x-transition:enter="transition ease-out duration-100"
                                                                                        x-transition:enter-end="transform opacity-100 scale-100"
                                                                                        x-transition:enter-start="transform opacity-0 scale-95"
                                                                                        x-transition:leave="transition ease-in duration-75"
                                                                                        x-transition:leave-end="transform opacity-0 scale-95"
                                                                                        x-transition:leave-start="transform opacity-100 scale-100">

                                                                                        <div
                                                                                            class="">
                                                                                            <div
                                                                                                class="flex flex-row gap-x-8">

                                                                                                <fieldset
                                                                                                    class="whitespace-nowrap">

                                                                                                    <div
                                                                                                        class="space-y-4 pt-6">

                                                                                                        @foreach ($projects as $key => $value)
                                                                                                            <div
                                                                                                                class="flex items-center text-base">
                                                                                                                <div
                                                                                                                    class="mb-4 flex items-center">
                                                                                                                    <input
                                                                                                                        {{ in_array($key, $selectedProject) ? 'checked' : '' }}
                                                                                                                        id="default-checkbox-{{ $key }}"
                                                                                                                        wire:model='selectedProject'
                                                                                                                        type="checkbox"
                                                                                                                        value="{{ $key }}"
                                                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500">
                                                                                                                    <label
                                                                                                                        for="default-checkbox-{{ $key }}"
                                                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $value }}</label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endforeach

                                                                                                    </div>
                                                                                                </fieldset>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <!---->
                                                                            </div>

                                                                        </div>
                                                                        <div
                                                                            class="mx-auto w-80 px-4 py-3 text-red-700">
                                                                            @error('selectedProject')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>

                                                                        <div
                                                                            class="group relative flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">

                                                                            <!-- select projects-->
                                                                            <div
                                                                                class="flex h-fit flex-row items-center justify-center">
                                                                                <div @click.outside="fopen = false"
                                                                                    @keydown.window.escape.stop="fopen = false"
                                                                                    aria-labelledby="filter-heading2"
                                                                                    class="relative w-fit"
                                                                                    x-data="{ fopen: false }">

                                                                                    <h2 class="sr-only"
                                                                                        id="filter-heading2">
                                                                                        branches</h2>

                                                                                    <!--filters button-->
                                                                                    <div class="">
                                                                                        <div
                                                                                            class="group mx-auto flex items-center">
                                                                                            <button
                                                                                                @click="fopen = !fopen"
                                                                                                aria-controls="departF"
                                                                                                aria-expanded="false"
                                                                                                class="group flex w-fit items-center whitespace-nowrap font-bold font-medium text-gray-500 hover:text-traivis-500 focus:font-bold focus:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500"
                                                                                                type="button">
                                                                                                <svg class="peer mr-3 h-5 w-5 flex-shrink-0 group-focus-within:text-traivis-500"
                                                                                                    fill="currentColor"
                                                                                                    data-name="Layer 1"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    width="512"
                                                                                                    height="512">
                                                                                                    <path
                                                                                                        d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                Select
                                                                                                Branches
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!--filters menu-->
                                                                                    <div class="absolute left-0 z-10 w-full origin-top-right overflow-auto rounded-lg bg-white px-6 py-2 text-center shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:right-0 lg:left-auto"
                                                                                        id="departF"
                                                                                        x-show="fopen"
                                                                                        x-transition:enter="transition ease-out duration-100"
                                                                                        x-transition:enter-end="transform opacity-100 scale-100"
                                                                                        x-transition:enter-start="transform opacity-0 scale-95"
                                                                                        x-transition:leave="transition ease-in duration-75"
                                                                                        x-transition:leave-end="transform opacity-0 scale-95"
                                                                                        x-transition:leave-start="transform opacity-100 scale-100">

                                                                                        <div
                                                                                            class="">
                                                                                            <div
                                                                                                class="flex flex-row gap-x-8 text-sm">

                                                                                                <fieldset
                                                                                                    class="whitespace-nowrap">

                                                                                                    <div
                                                                                                        class="space-y-4 pt-6">

                                                                                                        @foreach ($branches as $key => $value)
                                                                                                            <div
                                                                                                                class="flex items-center text-base">
                                                                                                                <div
                                                                                                                    class="mb-4 flex items-center">

                                                                                                                    <input
                                                                                                                        {{ in_array($key, $selectedBranch) ? 'checked' : '' }}
                                                                                                                        id="default-checkbox-{{ $key }}"
                                                                                                                        wire:model='selectedBranch'
                                                                                                                        type="checkbox"
                                                                                                                        value="{{ $key }}"
                                                                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-traivis-600 focus:ring-2 focus:ring-traivis-500">
                                                                                                                    <label
                                                                                                                        for="default-checkbox-{{ $key }}"
                                                                                                                        class="ml-2 text-sm font-medium text-gray-900 ">{{ $value }}</label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        @endforeach

                                                                                                    </div>
                                                                                                </fieldset>

                                                                                            </div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!---->
                                                                        </div>

                                                                        <div
                                                                            class="mx-auto text-red-700">
                                                                            @error('selectedBranch')
                                                                                <p
                                                                                    class="text-sm lg:text-base">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                        <!---->

                                                                        <!--End Tables-->
                                                                    </div>
                                                                    <!--END collapse content-->
                                                                </div>
                                                                @if (auth()->user()->hasRole('contractor_manger'))
                                                                @else
                                                                    <div
                                                                        class="mb-5 w-full whitespace-nowrap md:w-1/3">
                                                                        <!--employee additional information-->
                                                                        <div
                                                                            class="mb-5 whitespace-nowrap">
                                                                            <div
                                                                                class="mb-2 p-1 text-sm font-bold text-gray-500">
                                                                                Role & contract
                                                                            </div>
                                                                            <!-- Assignments-->
                                                                            <div class="space-y-3 pl-3">

                                                                                <!--Assignments Info-->
                                                                                <div
                                                                                    class="flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                    <p
                                                                                        class="w-1/2 truncate text-sm font-semibold">
                                                                                        Position
                                                                                    </p>
                                                                                    <p
                                                                                        class="w-1/2 truncate">
                                                                                        {{ $this->getPositionName($selectedPosition) }}
                                                                                    </p>
                                                                                </div>

                                                                                <!--END Assignments Info-->

                                                                                <!--Contractor info-->
                                                                                <div
                                                                                    class="flex cursor-pointer flex-col items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                    <div
                                                                                        class="w-full flex-col text-sm">

                                                                                        <!-- toggle -->
                                                                                        <div
                                                                                            class="flex items-center justify-between space-x-1 py-2">
                                                                                            <p
                                                                                                class="font-semibold capitalize text-gray-700">
                                                                                                staff
                                                                                            </p>
                                                                                            <button
                                                                                                wire:click='toggleIsStaff'
                                                                                                type="button"
                                                                                                class="flex h-4 w-10 items-center rounded-full bg-gray-200 transition duration-300 ease-in-out focus:outline-none"
                                                                                                :class="{ 'bg-traivis-400': toggle2 }"
                                                                                                x-on:click="toggle2 = !toggle2 , pop = true , pop2=false ">
                                                                                                <div class="h-5 w-5 rounded-full border bg-white shadow transition duration-300 ease-in-out"
                                                                                                    :class="{ 'transform translate-x-full ': toggle2 }">
                                                                                                </div>
                                                                                            </button>
                                                                                            <p
                                                                                                class="font-semibold capitalize text-gray-700">
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
                                                                                                class="flex w-full flex-row items-start space-x-2">

                                                                                                <!--Select -->
                                                                                                <div
                                                                                                    class="w-2/3 space-y-2">
                                                                                                    <select
                                                                                                        id="projectes2 h-10"
                                                                                                        x-model.lazy='selectedContactor'
                                                                                                        class="block w-full truncate rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-traivis-500 focus:ring-traivis-500">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            contractor
                                                                                                            name
                                                                                                        </option>
                                                                                                        @foreach ($contractors as $contractor)
                                                                                                            <option
                                                                                                                value={{ $contractor->id }}>
                                                                                                                {{ $contractor->name }}
                                                                                                            </option>
                                                                                                        @endforeach

                                                                                                    </select>
                                                                                                </div>
                                                                                                <!--END Select -->

                                                                                                <!--Add New! Button-->
                                                                                                <div
                                                                                                    class="flex h-10 w-1/3 items-center">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        @click="pop = false , pop2=true"
                                                                                                        class="inline-flex items-center space-x-2 rounded-full border border-transparent border-gray-400 bg-white px-3.5 py-2.5 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                                                                                        +
                                                                                                        New!
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
                                                                                                <div wire:ignore
                                                                                                    class="flex flex-col gap-y-3 py-1">
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        x-model.lazy="contractorName"
                                                                                                        placeholder="Contructor Name"
                                                                                                        class="h-10 w-full rounded-lg px-2 text-sm" />

                                                                                                    <input
                                                                                                        type="email"
                                                                                                        type="text"
                                                                                                        x-model.lazy="contractorEmail"
                                                                                                        placeholder="Email"
                                                                                                        class="h-10 w-full rounded-lg px-2 text-sm" />

                                                                                                    <input
                                                                                                        type="tel"
                                                                                                        type="text"
                                                                                                        x-model.lazy="contractorPhone"
                                                                                                        placeholder="Phone"
                                                                                                        class="h-10 w-full rounded-lg px-2 text-sm" />

                                                                                                </div>

                                                                                            </div>

                                                                                        </template>
                                                                                        @error('contractorName')
                                                                                            <p
                                                                                                class="mt-2 truncate text-xs text-red-600 ">
                                                                                                {{ $message }}
                                                                                            </p>
                                                                                        @enderror
                                                                                        @error('contractorEmail')
                                                                                            <p
                                                                                                class="mt-2 truncate text-xs text-red-600 ">
                                                                                                {{ $message }}
                                                                                            </p>
                                                                                        @enderror
                                                                                        @error('contractorPhone')
                                                                                            <p
                                                                                                class="mt-2 truncate text-xs text-red-600 ">
                                                                                                {{ $message }}
                                                                                            </p>
                                                                                        @enderror

                                                                                        <!--END Add New Contractor-->

                                                                                    </div>

                                                                                </div>
                                                                                <!--END Contractor info-->

                                                                                <!--Assign Role-->
                                                                                {{--  <div
                                                                                class="flex flex-row items-start space-x-2 px-3 py-1 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50">

                                                                                <!--Select roles-->
                                                                                <div class="w-2/3 space-y-2">
                                                                                    <select
                                                                                        class=" truncate h-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  "
                                                                                        x-model="role" id="role">
                                                                                        <option selected="">
                                                                                            None</option>
                                                                                        <option value="cm">
                                                                                            contractor
                                                                                            manager
                                                                                        </option>
                                                                                        <option value="pm">
                                                                                            project manager
                                                                                        </option>
                                                                                        <option value="ii">
                                                                                            internal
                                                                                            instructor
                                                                                        </option>
                                                                                    </select>

                                                                                    <template x-if="role == 'cm' ">
                                                                                        <select
                                                                                            id=" truncate h-10 contructors1"
                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                                            <option selected="">
                                                                                                select
                                                                                                cotructor
                                                                                            </option>
                                                                                            <option value="US">
                                                                                                contractor
                                                                                                1</option>
                                                                                            <option value="CA">
                                                                                                contractor
                                                                                                2</option>
                                                                                            <option value="FR">
                                                                                                contractor
                                                                                                3</option>
                                                                                            <option value="DE">
                                                                                                contractor
                                                                                                4</option>
                                                                                        </select>
                                                                                    </template>

                                                                                    <template x-if="role == 'pm' ">
                                                                                        <select
                                                                                            id=" truncate h-10 contructors2"
                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-traivis-500 focus:border-traivis-500 block w-full p-2.5  ">
                                                                                            <option selected="">
                                                                                                select
                                                                                                project
                                                                                            </option>
                                                                                            <option value="US">
                                                                                                project 1
                                                                                            </option>
                                                                                            <option value="CA">
                                                                                                project 2
                                                                                            </option>
                                                                                            <option value="FR">
                                                                                                project 3
                                                                                            </option>
                                                                                            <option value="DE">
                                                                                                project 4
                                                                                            </option>
                                                                                        </select>
                                                                                    </template>
                                                                                </div>
                                                                                <!--End Select roles-->

                                                                                <!--Assign Button -->
                                                                                <div
                                                                                    class="w-1/3 h-10 flex items-center">
                                                                                    <button x-ref="button"
                                                                                        x-on:click="toggle()  "
                                                                                        :aria-expanded="open"
                                                                                        :aria-controls="$id('dropdown-button')"
                                                                                        type="button"
                                                                                        class="transition inline-flex items-center px-3.5 py-2.5 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 text-white bg-traivis-500 hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500">
                                                                                        Assign
                                                                                    </button>
                                                                                </div>
                                                                                <!--END Assign Button-->

                                                                            </div>  --}}
                                                                                <!--END Assign Role-->

                                                                            </div>
                                                                            <!--END Assignments-->
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <!--end details Collapse-->

                                                        <!--course Collapse-->
                                                        <div class="text-gray-700">

                                                            <div class="mt-5 rounded-lg border border-gray-200"
                                                                x-data="{ open: false }">

                                                                <div @click="open = !open"
                                                                    class="flex cursor-pointer items-center bg-traivis-50 p-5 text-gray-500">
                                                                    <div class="mr-5">
                                                                        <svg class="h-5 w-5"
                                                                            fill="currentColor"
                                                                            height="512"
                                                                            style="enable-background:new 0 0 512 512;"
                                                                            viewBox="0 0 512 512"
                                                                            width="512"
                                                                            x="0px"
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
                                                                            class="h-5 w-5 rotate-0 transition-transform"
                                                                            fill="currentColor"
                                                                            viewbox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>

                                                                </div>

                                                                <div class="p-4"
                                                                    style="display: none;"
                                                                    x-show="open"
                                                                    x-transition:enter="transition-opacity ease-linear"
                                                                    x-transition:enter-end="opacity-100"
                                                                    x-transition:enter-start="opacity-0"
                                                                    x-transition:leave="transition-opacity ease-linear"
                                                                    x-transition:leave-end="opacity-0"
                                                                    x-transition:leave-start="opacity-100">

                                                                    <!--collapse content-->
                                                                    <div
                                                                        class="flex flex-row flex-wrap p-2">

                                                                        <!--tables-->
                                                                        <div
                                                                            class="w-full space-y-5 whitespace-nowrap">

                                                                            <!--Course tests-->
                                                                            <div
                                                                                class="overflow-x-auto">
                                                                                <div
                                                                                    class="mb-2 flex items-center p-1 text-sm font-bold text-gray-500">
                                                                                    <span
                                                                                        class="mr-3 inline-block flex h-5 w-5 items-center justify-center rounded-full bg-traivis-100 p-3 text-base">
                                                                                        {{ $coursesCollection->count() ?? 0 }}
                                                                                    </span>
                                                                                    Courses
                                                                                </div>

                                                                                <div
                                                                                    class="shadow-dashboard rounded-xl border">
                                                                                    <table
                                                                                        class="w-full text-center">
                                                                                        <thead
                                                                                            class="border-b-4 border-gray-300">
                                                                                            <tr
                                                                                                class="bg-traivis-50 font-medium">
                                                                                                <td
                                                                                                    class="px-6 py-3">
                                                                                                    Course
                                                                                                    Name
                                                                                                </td>
                                                                                                <td
                                                                                                    class="px-6 py-3">
                                                                                                    Issue
                                                                                                    Date
                                                                                                </td>
                                                                                                <td
                                                                                                    class="px-6 py-3">
                                                                                                    Expire
                                                                                                    Date
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

                                                                                            @if ($getWorkforceCoursesData)
                                                                                                @foreach ($getWorkforceCoursesData as $workforceCourse)
                                                                                                    @php
                                                                                                        $course = App\Models\EnterpriseRequiredCourse::find($workforceCourse->enterprise_required_course_id);

                                                                                                    @endphp
                                                                                                    <tr
                                                                                                        class="hover:bg-traivis-50">
                                                                                                        <td
                                                                                                            class="px-6 py-3">
                                                                                                            {{ $course->en_course_name }}
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="px-6 py-3">
                                                                                                            <input
                                                                                                                class="datepicker-input h-10 rounded-lg border-gray-300 text-sm hover:border-traivis-500"
                                                                                                                name="start"
                                                                                                                id="start"
                                                                                                                wire:model='issueDate.{{ $course->id }}'
                                                                                                                type="date">

                                                                                                            {{-- <input
                                                                                                class="border-gray-300 text-sm rounded-lg  h-10 datepicker-input hover:border-traivis-500"
                                                                                                name="start" id="start" wire:model='issueDate.{{ 5 }}'
                                                                                                placeholder="Select date start" type="date"> --}}

                                                                                                            @error('issueDate.'
                                                                                                                .
                                                                                                                $course->id)
                                                                                                                {{ $message }}
                                                                                                            @enderror

                                                                                                        </td>
                                                                                                        {{-- @php
                                                                                                    $validityEndDate = Carbon\Carbon::parse($course->created_at)
                                                                                                        ->startOfDay()
                                                                                                        ->addMonth($course->validity);
                                                                                                        $validityEndDate = date('y-m-d', strtotime($validityEndDate))
                                                                                                @endphp --}}
                                                                                                        <td
                                                                                                            class="px-6 py-3">
                                                                                                            {{ $course->course_expire_date }}
                                                                                                        </td>
                                                                                                        <td
                                                                                                            class="px-6 py-3">
                                                                                                            <input
                                                                                                                class="datepicker-input h-10 rounded-lg border-gray-300 text-sm hover:border-traivis-500"
                                                                                                                name="start"
                                                                                                                id="start"
                                                                                                                wire:model='upcomingDate.{{ $course->id }}'
                                                                                                                type="date">

                                                                                                            {{-- <input
                                                                                                class="border-gray-300 text-sm rounded-lg  h-10 datepicker-input hover:border-traivis-500"
                                                                                                name="start" id="start" wire:model='issueDate.{{ 5 }}'
                                                                                                placeholder="Select date start" type="date"> --}}

                                                                                                            @error('upcomingDate.'
                                                                                                                .
                                                                                                                $course->id)
                                                                                                                <p>
                                                                                                                    {{ $message }}

                                                                                                                </p>
                                                                                                            @enderror
                                                                                                        </td>

                                                                                                        @php
                                                                                                            if ($getWorkforceCoursesData) {
                                                                                                                $courseCertification = $getWorkforceCoursesData->where('enterprise_required_course_id', $course->id)->first();
                                                                                                            }
                                                                                                        @endphp
                                                                                                        <td
                                                                                                            class="flex px-6 py-3">
                                                                                                            @if (isset($courseCertification) && $courseCertification->media->count() > 0)
                                                                                                                <a target="_blanck"
                                                                                                                    href="{{ $courseCertification->media->first()->getUrl() }}"
                                                                                                                    {{--  wire:click='getMedia( {{ $course->id }})'  --}}
                                                                                                                    class="inline-flex items-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3 py-1 text-base font-semibold leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                                                                                    type="button">
                                                                                                                    <svg class="h-5 w-5"
                                                                                                                        fill="currentColor"
                                                                                                                        viewBox="0 0 24 24"
                                                                                                                        width="512"
                                                                                                                        height="512">
                                                                                                                        <path
                                                                                                                            d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.705,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z">
                                                                                                                        </path>
                                                                                                                        <path
                                                                                                                            d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                                                                        </path>
                                                                                                                    </svg>
                                                                                                                    {{--  <span class="whitespace-nowrap">View</span>  --}}

                                                                                                                </a>
                                                                                                                <label
                                                                                                                    for="file-input"
                                                                                                                    class="mx-2">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        onclick="document.querySelector('#file-input').click()">
                                                                                                                        <svg style="display: inline"
                                                                                                                            class="mx-auto h-5 w-5"
                                                                                                                            fill="currentColor"
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            id="Outline"
                                                                                                                            viewBox="0 0 24 24"
                                                                                                                            width="512"
                                                                                                                            height="512">
                                                                                                                            <path
                                                                                                                                d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z">
                                                                                                                            </path>
                                                                                                                        </svg>
                                                                                                                    </button>
                                                                                                                </label>
                                                                                                                <input
                                                                                                                    type="file"
                                                                                                                    name="file-input"
                                                                                                                    id="file-input"
                                                                                                                    wire:model='certificate.{{ $course->id }}'
                                                                                                                    class="sr-only">
                                                                                                            @else
                                                                                                                <label
                                                                                                                    for="file-input"
                                                                                                                    class="sr-only">Choose
                                                                                                                    file
                                                                                                                </label>
                                                                                                                <input
                                                                                                                    type="file"
                                                                                                                    name="file-input"
                                                                                                                    wire:model='certificate.{{ $course->id }}'
                                                                                                                    class="block w-full rounded-md border border-gray-200 text-sm shadow-sm file:mr-4 file:border-0 file:bg-transparent file:bg-gray-100 file:py-3 file:px-4 focus:z-10 focus:border-traivis-500 focus:ring-traivis-500">
                                                                                                            @endif

                                                                                                            @error('certificate.'
                                                                                                                .
                                                                                                                $course->id)
                                                                                                                {{ $message }}
                                                                                                            @enderror
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                            @endif

                                                                                            @foreach ($coursesCollection as $workforceCourse)
                                                                                                @if ($getWorkforceCoursesData)
                                                                                                    @if (in_array($workforceCourse->id, $coursesIds))
                                                                                                        @continue;
                                                                                                    @endif
                                                                                                @endif
                                                                                                <tr
                                                                                                    class="hover:bg-traivis-50">
                                                                                                    <td
                                                                                                        class="px-6 py-3">
                                                                                                        {{ $workforceCourse->en_course_name }}
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class="px-6 py-3">
                                                                                                        <input
                                                                                                            class="datepicker-input h-10 rounded-lg border-gray-300 text-sm hover:border-traivis-500"
                                                                                                            name="start"
                                                                                                            id="start"
                                                                                                            wire:model='issueDate.{{ $workforceCourse->id }}'
                                                                                                            type="date">

                                                                                                        {{-- <input
                                                                                                    class="border-gray-300 text-sm rounded-lg  h-10 datepicker-input hover:border-traivis-500"
                                                                                                    name="start" id="start" wire:model='issueDate.{{ 5 }}'
                                                                                                    placeholder="Select date start" type="date"> --}}

                                                                                                        @error('issueDate.'
                                                                                                            .
                                                                                                            $workforceCourse->id)
                                                                                                            {{ $message }}
                                                                                                        @enderror

                                                                                                    </td>

                                                                                                    <td
                                                                                                        class="px-6 py-3">
                                                                                                        {{ $workforceCourse->course_expire_date }}
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class="px-6 py-3">
                                                                                                        <input
                                                                                                            class="datepicker-input h-10 rounded-lg border-gray-300 text-sm hover:border-traivis-500"
                                                                                                            name="start"
                                                                                                            id="start"
                                                                                                            wire:model='upcomingDate.{{ $workforceCourse->id }}'
                                                                                                            type="date">

                                                                                                        {{-- <input
                                                                                                    class="border-gray-300 text-sm rounded-lg  h-10 datepicker-input hover:border-traivis-500"
                                                                                                    name="start" id="start" wire:model='issueDate.{{ 5 }}'
                                                                                                    placeholder="Select date start" type="date"> --}}

                                                                                                        @error('upcomingDate.'
                                                                                                            .
                                                                                                            $workforceCourse->id)
                                                                                                            <p>
                                                                                                                {{ $message }}

                                                                                                            </p>
                                                                                                        @enderror
                                                                                                    </td>

                                                                                                    @php
                                                                                                        if ($getWorkforceCoursesData) {
                                                                                                            $courseCertification = $getWorkforceCoursesData->where('enterprise_required_course_id', $workforceCourse->id)->first();
                                                                                                        }
                                                                                                    @endphp
                                                                                                    <td
                                                                                                        class="px-6 py-3">
                                                                                                        @if (isset($courseCertification) && $courseCertification->media->count() > 0)
                                                                                                            <button
                                                                                                                wire:click='getMedia( {{ $workforceCourse->id }})'
                                                                                                                class="inline-flex items-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3 py-1 text-base font-semibold leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                                                                                                type="button">
                                                                                                                <svg class="h-5 w-5"
                                                                                                                    fill="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    width="512"
                                                                                                                    height="512">
                                                                                                                    <path
                                                                                                                        d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.705,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z">
                                                                                                                    </path>
                                                                                                                    <path
                                                                                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="whitespace-nowrap">View</span>

                                                                                                            </button>
                                                                                                        @else
                                                                                                            <label
                                                                                                                for="file-input"
                                                                                                                class="sr-only">Choose
                                                                                                                file
                                                                                                            </label>
                                                                                                            <input
                                                                                                                type="file"
                                                                                                                name="file-input"
                                                                                                                wire:model='certificate.{{ $workforceCourse->id }}'
                                                                                                                class="block w-full rounded-md border border-gray-200 text-sm shadow-sm file:mr-4 file:border-0 file:bg-transparent file:bg-gray-100 file:py-3 file:px-4 focus:z-10 focus:border-traivis-500 focus:ring-traivis-500">
                                                                                                        @endif

                                                                                                        @error('certificate.'
                                                                                                            .
                                                                                                            $workforceCourse->id)
                                                                                                            {{ $message }}
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>

                                                                                                @php
                                                                                                    debug('a7a');
                                                                                                @endphp
                                                                                            @endforeach

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
                                                            class="text-gray-700">

                                                            <div class="mt-5 rounded-lg border border-gray-200"
                                                                x-data="{ open: false }">
                                                                <div @click="open = !open"
                                                                    class="flex cursor-pointer items-center bg-traivis-50 p-5 text-gray-500">
                                                                    <div class="mr-5">
                                                                        <svg id="Layer_1"
                                                                            class="h-5 w-5"
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
                                                                            class="h-5 w-5 rotate-0 transition-transform"
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
                                                        class="sticky bottom-0 z-30 flex w-full flex-row items-center justify-evenly bg-white py-2">
                                                        <button type="button" @click="stuOpen = false"
                                                            class="inline-flex items-center space-x-2 rounded-full border border-transparent border-gray-400 bg-white px-3.5 py-2.5 text-base font-bold leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                                            Cancel
                                                        </button>

                                                        <button type="submit"
                                                            @click="stuOpen = @entangle('showEmployeeForm')"
                                                            class="inline-flex items-center space-x-2 rounded-full border border-transparent bg-traivis-500 px-3.5 py-2.5 text-base font-bold leading-4 text-white shadow-sm transition hover:bg-traivis-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                                            Save Work force
                                                        </button>

                                                    </div>

                                                    <!---->

                                        </form>

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
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function(event) {
            $('.employeeDepartment').on('change', function(e) {
                var data = $('.employeeDepartment').select2("val");
                @this.set('selectedDepartment', data);
            });

            $('.employeeProject').on('change', function(e) {
                var data = $('.employeeProject').select2("val");
                @this.set('selectedProject', data);
            });

            $('.employeeBranch').on('change', function(e) {
                var data = $('.employeeBranch').select2("val");
                @this.set('selectedBranch', data);
            });
            @this.on('refreshMultiSelect', function() {

                $(".employeeDepartment").val("").trigger("change");
                $(".employeeProject").val("").trigger("change");
                $(".employeeBranch").val("").trigger("change");

            });

            @this.on('markAsSelected', paramters => {
                $('.employeeDepartment').select2();
                $('.employeeDepartment').val(paramters[2]).trigger("change");

                $('.employeeProject').select2();
                $('.employeeProject').val(paramters[1]).trigger("change");

                $('.employeeBranch').select2();
                $('.employeeBranch').val(paramters[0]).trigger("change");

            });

        })


        $(document).ready(function() {
            $('.employeeDepartment').select2({
                placeholder: "Choose Departments",
            });

            $('.employeeProject').select2({
                placeholder: "Choose Projects",
            });

            $('.employeeBranch').select2({
                placeholder: "Choose Branches",
            });

        });
    </script>
@endpush
