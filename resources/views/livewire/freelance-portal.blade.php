<div class="w-full">

    <!-- Dash Content -->
    <div class="flex w-full flex-col">
        <div class="px-4 sm:px-6 lg:px-8">

            <!--head-->
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">My Freelance Portal</h1>
                    <p class="mt-2 text-sm text-gray-700"></p>
                </div>
            </div>
            <!--END header-->

            <!--content-->
            <section class="">
                <div class="container mx-auto">

                    <!-- summary-->
                    <div class="">
                        <div
                            class="flex flex-col md:flex-row justify-evenly flex-wrap items-center text-gray-500">

                            <div
                                class="cursor-pointer w-full max-w-fit lg:w-1/3 p-10 border-b-4 border-transparent hover:border-traivis-500 transition-all">
                                <div class="w-fit items-center flex md:flex-row flex-col rounded-lg">
                                    <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2">
                                        <h2 class="text-center font-semibold text-6xl tracking-tighter">
                                            {{ $invitations->count() }}</h2>
                                        <h3 class="text-3xl text-gray-600 font-light">
                                            Invitations</h3>
                                    </div>
                                    <div class="flex md:flex-col flex-row gap-x-3">
                                        <p
                                            class="w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-traivis-50 hover:text-traivis-500 hover:border-traivis-500 border border-gray-300 font-bold text-xs">
                                            <span
                                                class="pr-2">{{ $accepted_invitation }}</span>Accepted
                                        </p>
                                        <p
                                            class="w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-pink-50 hover:text-pink-500 hover:border-pink-500 border border-gray-300 font-bold text-xs">
                                            <span
                                                class="pr-2">{{ $rejected_invitation }}</span>Rejected
                                        </p>
                                        <p
                                            class="w-fit mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-gray-50 hover:text-gray-500 hover:border-gray-500 border border-gray-300 font-bold text-xs">
                                            <span class="pr-2">{{ $pending_invitation }}</span>Pending
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="cursor-pointer w-full max-w-fit lg:w-1/3 p-10 border-b-4 border-transparent hover:border-traivis-500 transition-all">
                                <div class="w-fit items-center flex flex-col rounded-lg">
                                    <div class="flex flex-col">
                                        <h2 class="text-center font-semibold text-6xl tracking-tighter">
                                            {{ $total_hours }}<span class="text-3xl"> hrs </span></h2>
                                        <h3 class="text-3xl text-gray-600 font-light">
                                            Total Teaching</h3>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="cursor-pointer w-full max-w-fit lg:w-1/3 p-10 border-b-4 border-transparent hover:border-traivis-500 transition-all">
                                <div class="w-fit items-center flex flex-col rounded-lg">
                                    <div class="flex flex-col">
                                        <h2 class="text-center font-semibold text-6xl tracking-tighter">
                                            <span class="text-3xl">
                                                {{ $total_incomes_currency }}
                                            </span>{{ $total_incomes }}
                                        </h2>
                                        <h3 class="text-3xl text-gray-600 font-light">
                                            Total Income</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--END summary-->

                    <!--search-->
                    <div class="w-full my-8 flex items-center justify-center">
                        <label class="sr-only" for="paysearch">Search Payments</label>
                        <div class="relative w-full md:w-1/2">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor"
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input wire:model.debounce="search" wire:keyup="searchFilter"
                                class="h-10 block bg-white text-gray-800 border border-gray-300 py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-800 focus:placeholder-gray-400 focus:ring-1 focus:ring-traivis-500 focus:border-traivis-500 sm:text-sm transition-colors    rounded-full w-full"
                                id="paysearch" placeholder="Search" type="search">
                        </div>
                    </div>
                    <!---->

                    <!-- Filter bar -->
                    <div
                        class="flex flex-wrap flex-col md:flex-row items-center justify-between w-full mb-8 mt-16">

                        <!--date range-->
                        <div
                            class="mb-5 px-5 w-full lg:w-1/3 md:w-1/2 text-sm font-semibold text-gray-500">

                            <div class="group w-full flex flex-row items-center justify-between"
                                date-rangepicker="">
                                <label for="start" class="mr-2">from</label>
                                <div class="relative">
                                    <input wire:model="date_from" wire:change="searchFilter"
                                        class="datepicker-input border-gray-300 text-sm rounded-lg h-10 hover:border-traivis-500"
                                        name="start" id="start" placeholder="Select date start"
                                        type="date">
                                </div>

                                <label for="end" class="mx-2">to</label>
                                <div class="relative">
                                    <input wire:model="date_to" wire:change="searchFilter"
                                        class="border-gray-300 text-sm rounded-lg h-10 hover:border-traivis-500"
                                        name="end" id="end" placeholder="Select date end"
                                        type="date">
                                </div>
                            </div>

                        </div>
                        <!---->

                        <!--price range-->
                        <div class="mb-5 px-5 w-full lg:w-1/3 md:w-1/2 items-center">

                            <div class="group w-full flex justify-between items-center text-gray-500 font-semibold"
                                x-data="range()" x-init="mintrigger();
                                maxtrigger()">

                                <div
                                    class="w-12 flex items-center group-hover:text-traivis-500 group-hover:font-bold">
                                    <span class="">$</span>
                                    <input
                                        class="h-10 px-0 border-none border-gray-300 rounded-lg w-12 text-center"
                                        maxlength="5" type="text" x-model="minprice"
                                        x-on:input="mintrigger">
                                </div>

                                <div class="relative w-full shrink flex-shrink mx-3">
                                    <input wire:model="from_price" wire:change="searchFilter"
                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer"
                                        step="100" type="range" x-bind:max="max"
                                        x-bind:min="min" x-model="minprice"
                                        x-on:input="mintrigger">

                                    <input wire:model="to_price" wire:change="searchFilter"
                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer"
                                        step="100" type="range" x-bind:max="max"
                                        x-bind:min="min" x-model="maxprice"
                                        x-on:input="maxtrigger">

                                    <div class="relative z-10 h-2">
                                        <div
                                            class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-300 group-hover:bg-traivis-200">
                                        </div>
                                        <div class="absolute z-20 top-0 bottom-0 rounded-md bg-traivis-500 group-hover:bg-traivis-600"
                                            x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'">
                                        </div>
                                        <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-traivis-500 group-hover:bg-traivis-600 rounded-full -mt-2"
                                            x-bind:style="'left: ' + minthumb + '%'"></div>
                                        <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-traivis-500 group-hover:bg-traivis-600 rounded-full -mt-2"
                                            x-bind:style="'right: ' + maxthumb + '%'"></div>
                                    </div>
                                </div>

                                <div
                                    class="w-12 flex items-center group-hover:text-traivis-500 group-hover:font-bold">
                                    <span class="">$</span>
                                    <input
                                        class="h-10 px-0 border-none border-gray-300 rounded-lg w-12 text-center"
                                        maxlength="5" type="text" x-model="maxprice"
                                        x-on:input="maxtrigger">
                                </div>

                            </div>

                            <style>
                                /*price range*/
                                input[type=range]::-webkit-slider-thumb {
                                    pointer-events: all;
                                    width: 24px;
                                    height: 24px;
                                    -webkit-appearance: none;
                                    /* @apply w-6 h-6 appearance-none pointer-events-auto; */
                                }
                            </style>

                            <script>
                                function range() {
                                    return {
                                        minprice: {{ $from_price }},
                                        maxprice: {{ $to_price }},
                                        min: 100,
                                        max: 10000,
                                        minthumb: 0,
                                        maxthumb: 0,

                                        mintrigger() {
                                            this.minprice = Math.min(this.minprice, this.maxprice - 500);
                                            this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
                                        },

                                        maxtrigger() {
                                            this.maxprice = Math.max(this.maxprice, this.minprice + 500);
                                            this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
                                        },
                                    }
                                }
                            </script>
                        </div>
                        <!---->

                        <!--filters and sort-->
                        <div class="flex flex-row justify-between items-center lg:w-1/3 w-full px-4">
                            <!-- filter-->
                            <div class="mb-5 w-fit lg:px-12">

                                <div @click.outside="fopen = false"
                                    @keydown.window.escape.stop="fopen = false"
                                    aria-labelledby="filter-heading" class="w-fit relative z-10"
                                    x-data="{ fopen: false }">

                                    <h2 class="sr-only" id="filter-heading">Filters</h2>

                                    <!--filters button-->
                                    <div class="">
                                        <div class="group mx-auto flex items-center">
                                            {{--                                                                            <div> --}}
                                            {{--                                                                                <button @click="fopen = !fopen" aria-controls="disclosure-1" --}}
                                            {{--                                                                                        aria-expanded="false" --}}
                                            {{--                                                                                        class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit" --}}
                                            {{--                                                                                        type="button"> --}}
                                            {{--                                                                                    <svg aria-hidden="true" --}}
                                            {{--                                                                                         class="flex-none w-5 h-5 mr-2" --}}
                                            {{--                                                                                         fill="currentColor" viewBox="0 0 20 20" --}}
                                            {{--                                                                                         xmlns="http://www.w3.org/2000/svg"> --}}
                                            {{--                                                                                        <path clip-rule="evenodd" --}}
                                            {{--                                                                                              d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" --}}
                                            {{--                                                                                              fill-rule="evenodd"/> --}}
                                            {{--                                                                                    </svg> --}}
                                            {{--                                                                                    2 Filters --}}
                                            {{--                                                                                </button> --}}
                                            {{--                                                                            </div> --}}
                                            <div class="mx-3">
                                                <button wire:click="clearFilter"
                                                    class="font-semibold text-sm text-gray-500 form-input h-10 rounded-lg border-gray-300 focus:text-traivis-500 hover:text-traivis-500 hover:border-traivis-500 whitespace-nowrap"
                                                    type="button">
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--filters menu-->
                                    <div class="origin-top-right w-fit absolute left-0 lg:right-0 lg:left-auto p-6 rounded-lg shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        id="disclosure-1" x-show="fopen"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        x-transition:leave-start="transform opacity-100 scale-100">

                                        <div class="">
                                            <div class="flex flex-row gap-x-8 text-sm">

                                                <fieldset class="whitespace-nowrap">
                                                    <legend class="block font-medium">My Response
                                                    </legend>

                                                    <div class="pt-6 space-y-4">
                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="myResponse-0" name="myResponse[]"
                                                                type="checkbox" value="Accepted">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="myResponse-0">
                                                                Accepted </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="myResponse-1" name="myResponse[]"
                                                                type="checkbox" value="Rejected">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="myResponse-1">
                                                                Rejected </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input checked
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="myResponse-2" name="myResponse[]"
                                                                type="checkbox" value="Pending">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="myResponse-2">
                                                                Pending </label>
                                                        </div>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="whitespace-nowrap">
                                                    <legend class="block font-medium">Client Response
                                                    </legend>

                                                    <div class="pt-6 space-y-4">
                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="clResponse-0" name="clResponse[]"
                                                                type="checkbox" value="Accepted">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="clResponse-0">
                                                                Accepted </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="clResponse-1" name="clResponse[]"
                                                                type="checkbox" value="Rejected">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="clResponse-1">
                                                                Rejected </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input checked
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="clResponse-2" name="clResponse[]"
                                                                type="checkbox" value="Pending">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="clResponse-2">
                                                                Pending </label>
                                                        </div>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="whitespace-nowrap">
                                                    <legend class="block font-medium">Course Status
                                                    </legend>

                                                    <div class="pt-6 space-y-4">
                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="status-0" name="status[]"
                                                                type="checkbox" value="Delivered">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="status-0">
                                                                Delivered </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="status-1" name="status[]"
                                                                type="checkbox" value="Rejected">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="status-1">
                                                                Rejected </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input checked
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="status-2" name="status[]"
                                                                type="checkbox" value="progress">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="status-2">
                                                                In progress </label>
                                                        </div>

                                                    </div>
                                                </fieldset>

                                                <fieldset class="whitespace-nowrap">
                                                    <legend class="block font-medium">Delivery Mode
                                                    </legend>

                                                    <div class="pt-6 space-y-4">
                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="dmode-0" name="dmode[]"
                                                                type="checkbox" value="Live">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="dmode-0">
                                                                Live </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="dmode-1" name="dmode[]"
                                                                type="checkbox" value="Recorded">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="dmode-1">
                                                                Recorded </label>
                                                        </div>

                                                        <div
                                                            class="flex items-center text-base sm:text-sm">
                                                            <input checked
                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                id="dmode-2" name="dmode[]"
                                                                type="checkbox" value="f2f">
                                                            <label
                                                                class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="dmode-2">
                                                                Face to Face </label>
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
                                <div @click.outside="topen = false"
                                    @keydown.window.escape.stop="topen = false" class="w-fit"
                                    x-data="{ topen: false }">

                                    <div class="flex justify-end mx-auto">
                                        <div class="relative inline-block">
                                            <div class="flex">
                                                <button @click="topen = !topen" aria-expanded="false"
                                                    aria-haspopup="true"
                                                    class="group whitespace-nowrap inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                                    id="menu-button" type="button">
                                                    <svg class="flex-none w-5 h-5 mr-2"
                                                        fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        id="Layer_1" data-name="Layer 1"
                                                        viewBox="0 0 24 24" width="512"
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

                                            <div aria-labelledby="menu-button"
                                                aria-orientation="vertical"
                                                class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                role="menu" tabindex="-1" x-show="topen"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                x-transition:enter-start="transform opacity-0 scale-95"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-end="transform opacity-0 scale-95"
                                                x-transition:leave-start="transform opacity-100 scale-100">

                                                <div class="py-1" role="none">
                                                    <select wire:model="sort_by"
                                                        wire:change="searchFilter"
                                                        class="select2 font-medium text-gray-900 block px-4 py-2 text-sm"
                                                        id="menu-item-0" style="width: 100%">
                                                        <option value="" disabled>Select Sortable
                                                        </option>
                                                        <option value="started_at">Date</option>
                                                        <option value="hours">Hours</option>
                                                        <option value="status">Status</option>
                                                        <option value="institute_id">Institution
                                                        </option>
                                                        <option value="delivery_mode">Delivery Mode
                                                        </option>
                                                    </select>
                                                </div>
                                                {{--                                            <div class="py-1" role="none"> --}}
                                                {{--                                                <!-- --}}
                                                {{--                                                  Active: "bg-gray-100", Not Active: "" --}}

                                                {{--                                                  Selected: "font-medium text-gray-900", Not Selected: "text-gray-500" --}}
                                                {{--                                                --> --}}
                                                {{--                                                <a class="font-medium text-gray-900 block px-4 py-2 text-sm" href="#" --}}
                                                {{--                                                   id="menu-item-0" --}}
                                                {{--                                                   role="menuitem" --}}
                                                {{--                                                   tabindex="-1"> Date </a> --}}

                                                {{--                                                <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{--                                                   id="menu-item-1" --}}
                                                {{--                                                   role="menuitem" --}}
                                                {{--                                                   tabindex="-1"> Institution </a> --}}

                                                {{--                                                <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{--                                                   id="menu-item-2" --}}
                                                {{--                                                   role="menuitem" --}}
                                                {{--                                                   tabindex="-1"> Status </a> --}}

                                                {{--                                                <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{--                                                   id="menu-item-3" --}}
                                                {{--                                                   role="menuitem" --}}
                                                {{--                                                   tabindex="-1"> Hours </a> --}}

                                                {{--                                                <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{--                                                   id="menu-item-5" --}}
                                                {{--                                                   role="menuitem" --}}
                                                {{--                                                   tabindex="-1"> Delivery Mode </a> --}}
                                                {{--                                            </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end sort-->

                        </div>
                        <!--end filter and sort-->

                    </div>
                    <!--    -->

                    <!-- Table -->
                    <div class="overflow-y-hidden">

                        <!-- Table Header-->

                        <table class="min-w-full">
                            <thead class="text-center text-sm font-semibold text-gray-500">

                                <tr
                                    class="divide whitespace-nowrap table-row divide-x-8 divide-transparent">
                                    @if (in_array('course_id', $show_columns))
                                        <th class="px-2 py-3.5 text-left"> Course</th>
                                    @endif
                                    @if (in_array('institute_id', $show_columns))
                                        <th class="px-2 py-3.5">Institution</th>
                                    @endif
                                    @if (in_array('started_at', $show_columns))
                                        <th class="px-2 py-3.5">Initiation</th>
                                    @endif
                                    @if (in_array('instructor_response', $show_columns))
                                        <th class="px-2 py-3.5">My Response</th>
                                    @endif

                                    @if (in_array('institute_response', $show_columns))
                                        <th class="px-2 py-3.5">Client Response</th>
                                    @endif

                                    @if (in_array('status', $show_columns))
                                        <th class="px-2 py-3.5 sr-only lg:not-sr-only"
                                            style="white-space: nowrap">Status</th>
                                    @endif

                                    @if (in_array('hours', $show_columns))
                                        <th class="px-2 py-3.5 sr-only lg:not-sr-only"
                                            style="white-space: nowrap">Hours</th>
                                    @endif
                                    @if (in_array('delivery_mode', $show_columns))
                                        <th class="px-2 py-3.5 sr-only lg:not-sr-only"
                                            style="white-space: nowrap">Delivery
                                            Mode
                                        </th>
                                    @endif

                                    @if (in_array('agreed_price', $show_columns))
                                        <th class="px-2 py-3.5 sr-only lg:not-sr-only"
                                            style="white-space: nowrap"> Agreed
                                            Price
                                        </th>
                                    @endif
                                    @if (in_array('institute_price', $show_columns))
                                        <th class="px-2 py-3.5 sr-only lg:not-sr-only"
                                            style="white-space: nowrap">Offered
                                            Price
                                        </th>
                                    @endif

                                    @if (in_array('instructor_price', $show_columns))
                                        <th class="px-2 py-3.5 sr-only lg:not-sr-only"
                                            style="white-space: nowrap">My Price
                                        </th>
                                    @endif

                                    <th class="px-2 py-3.5">

                                        <!--Columns Setting-->
                                        <div class="">

                                            <!---->
                                            <div @click.outside="colOpt = false"
                                                @keydown.window.escape.stop="colOpt = false"
                                                class="flex justify-center" x-data="{ colOpt: false }"
                                                id="columns">

                                                <!----- button----------->
                                                <button @click="colOpt = !colOpt"
                                                    class="justify-center flex" href="#"
                                                    type="button">
                                                    <svg fill="currentColor"
                                                        class="w-8 h-8 hover:rotate-180 transition-all"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        id="Outline" viewBox="0 0 24 24"
                                                        width="512" height="512">
                                                        <path
                                                            d="M17,11H13V7a1,1,0,0,0-1-1h0a1,1,0,0,0-1,1v4H7a1,1,0,0,0-1,1H6a1,1,0,0,0,1,1h4v4a1,1,0,0,0,1,1h0a1,1,0,0,0,1-1V13h4a1,1,0,0,0,1-1h0A1,1,0,0,0,17,11Z" />
                                                    </svg>

                                                    <span class="sr-only">Lindsay Walton</span>
                                                </button>
                                                <!-----END button----------->

                                                <!-----Start popup window----------->
                                                <section x-cloak x-show="colOpt"
                                                    x-transition:enter="ease-out duration-100"
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    x-transition:leave="ease-in duration-200"
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

                                                    <div aria-labelledby="modal-title"
                                                        aria-modal="true"
                                                        class="fixed z-30 inset-0 overflow-y-auto"
                                                        role="dialog">
                                                        <div
                                                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                                                            <!---over BG---->
                                                            <div @click="colOpt = false"
                                                                aria-hidden="true"
                                                                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                                                            </div>
                                                            <!-- center-->
                                                            <span aria-hidden="true"
                                                                class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                                                            <!---END over BG---->

                                                            <!-- popup content-->
                                                            <div
                                                                class="relative inline-block bg-white rounded-lg p-4 text-left shadow-xl transform transition-all my-8 align-middle w-fit">

                                                                <!---->

                                                                <div class="">
                                                                    <div
                                                                        class="w-full h-full overflow-y-auto">
                                                                        <div
                                                                            class="container py-4 px-8 mx-auto rounded-lg bg-white w-full">

                                                                            <!--content-->
                                                                            <div
                                                                                class="text-md text-gray-500">

                                                                                <h1
                                                                                    class="font-normal text-center text-xl text-gray-500">
                                                                                    Show / Hide Columns
                                                                                </h1>
                                                                                <div
                                                                                    class="flex flex-row gap-x-8">

                                                                                    <div
                                                                                        class="pt-6 space-y-6">
                                                                                        <div
                                                                                            class="flex items-center">
                                                                                            <input
                                                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                id="col-0"
                                                                                                wire:model="show_columns"
                                                                                                type="checkbox"
                                                                                                value="status">
                                                                                            <label
                                                                                                class="ml-3 min-w-0 flex-1"
                                                                                                for="col-0">
                                                                                                Status
                                                                                            </label>
                                                                                        </div>

                                                                                        <div
                                                                                            class="flex items-center">
                                                                                            <input
                                                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                id="col-1"
                                                                                                wire:model="show_columns"
                                                                                                type="checkbox"
                                                                                                value="hours">
                                                                                            <label
                                                                                                class="ml-3 min-w-0 flex-1"
                                                                                                for="col-1">
                                                                                                Hours
                                                                                            </label>
                                                                                        </div>

                                                                                        <div
                                                                                            class="flex items-center">
                                                                                            <input
                                                                                                checked
                                                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                id="col-2"
                                                                                                wire:model="show_columns"
                                                                                                type="checkbox"
                                                                                                value="delivery_mode">
                                                                                            <label
                                                                                                class="ml-3 min-w-0 flex-1"
                                                                                                for="col-2">
                                                                                                Delivery
                                                                                                Mode
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="pt-6 space-y-6">
                                                                                        <div
                                                                                            class="flex items-center">
                                                                                            <input
                                                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                id="col-3"
                                                                                                wire:model="show_columns"
                                                                                                type="checkbox"
                                                                                                value="agreed_price">
                                                                                            <label
                                                                                                class="ml-3 min-w-0 flex-1"
                                                                                                for="col-3">
                                                                                                Agreed
                                                                                                Price
                                                                                            </label>
                                                                                        </div>

                                                                                        <div
                                                                                            class="flex items-center">
                                                                                            <input
                                                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                id="col-4"
                                                                                                wire:model="show_columns"
                                                                                                type="checkbox"
                                                                                                value="institute_price">
                                                                                            <label
                                                                                                class="ml-3 min-w-0 flex-1"
                                                                                                for="col-4">
                                                                                                Offered
                                                                                                Price
                                                                                            </label>
                                                                                        </div>

                                                                                        <div
                                                                                            class="flex items-center">
                                                                                            <input
                                                                                                class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-traivis-500 focus:ring-traivis-500"
                                                                                                id="col-5"
                                                                                                wire:model="show_columns"
                                                                                                type="checkbox"
                                                                                                value="instructor_price">
                                                                                            <label
                                                                                                class="ml-3 min-w-0 flex-1"
                                                                                                for="col-5">
                                                                                                My Price
                                                                                            </label>
                                                                                        </div>
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
                                        <!---->

                                    </th>
                                </tr>

                            </thead>

                            <!-- Table Raws -->
                            <tbody class="">

                                @forelse($invitations as $invitation)
                                    <!--Row -->
                                    <tr
                                        class="group divide whitespace-nowrap text-center hover:bg-traivis-50 table-row divide-x-8 divide-transparent text-gray-600 hover:text-gray-900">
                                        @if (in_array('course_id', $show_columns))
                                            <td class="px-2 py-4 text-left">
                                                <a href="#" class="flex flex-row items-center">
                                                    <svg fill="currentColor" class="w-8 h-8"
                                                        id="Layer_1" height="512"
                                                        viewBox="0 0 24 24" width="512"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        data-name="Layer 1">
                                                        <path
                                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                    </svg>
                                                    <div class="ml-4">
                                                        <p class="">
                                                            {{ $invitation->course->title }}</p>
                                                    </div>
                                                </a>
                                            </td>
                                        @endif

                                        @if (in_array('institute_id', $show_columns))
                                            <td class="px-2 py-4 text-left">
                                                <a href="#" class="flex flex-row items-center">
                                                    <div class="h-10 w-10 flex-shrink-0">
                                                        <img alt=""
                                                            class="h-10 w-10 rounded-full"
                                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                    </div>
                                                    <div class="ml-4">
                                                        <p class="">
                                                            {{ $invitation->institute->business_name }}
                                                        </p>
                                                    </div>
                                                </a>
                                            </td>
                                        @endif
                                        @if (in_array('started_at', $show_columns))
                                            <td class="px-2 py-4">{{ $invitation->started_at }}</td>
                                        @endif
                                        @if (in_array('instructor_response', $show_columns))
                                            <td class="px-2 py-4">
                                                <span
                                                    class="whitespace-nowrap font-bold text-xs text-traivis-500 border-traivis-500 border bg-traivis-100 px-2 rounded-full">{{ $invitation->instructor_response }}</span>
                                            </td>
                                        @endif
                                        @if (in_array('institute_response', $show_columns))
                                            <td class="px-2 py-4">
                                                <span
                                                    class="whitespace-nowrap font-bold text-xs text-pink-500 border-pink-500 border bg-pink-100 px-2 rounded-full">{{ $invitation->institute_response }}</span>
                                            </td>
                                        @endif

                                        @if (in_array('status', $show_columns))
                                            <td class="px-2 py-4 sr-only lg:not-sr-only"
                                                style="white-space: nowrap">
                                                <span
                                                    class="whitespace-nowrap font-bold text-xs text-gray-500 border-gray-500 border bg-gray-100 px-2 rounded-full">{{ $invitation->status }}</span>
                                            </td>
                                        @endif

                                        @if (in_array('hours', $show_columns))
                                            <td class="px-2 py-4 sr-only lg:not-sr-only"
                                                style="white-space: nowrap">{{ $invitation->hours }}
                                                <span class="text-xs font-bold">hrs</span>
                                            </td>
                                        @endif
                                        @if (in_array('delivery_mode', $show_columns))
                                            <td class="px-2 py-4 sr-only lg:not-sr-only"
                                                style="white-space: nowrap">
                                                <div
                                                    class="mx-auto flex flex-row items-center justify-center">
                                                    <svg fill="currentColor" class="mr-3 w-5 h-5"
                                                        id="Layer_1" height="512"
                                                        viewBox="0 0 24 24" width="512"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        data-name="Layer 1">
                                                        <path
                                                            d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z" />
                                                    </svg>
                                                    <span>{{ $invitation->delivery_mode }}</span>
                                                </div>
                                            </td>
                                        @endif

                                        @if (in_array('agreed_price', $show_columns))
                                            <td class="text-traivis-500 font-bold px-2 py-4 sr-only lg:not-sr-only"
                                                style="white-space: nowrap">
                                                <span
                                                    class="text-xs font-bold mr-1">{{ $invitation->agreed_price_currency }}
                                                </span>{{ $invitation->agreed_price }}
                                            </td>
                                        @endif
                                        @if (in_array('institute_price', $show_columns))
                                            <td class="px-2 py-4 sr-only lg:not-sr-only"
                                                style="white-space: nowrap">
                                                <span
                                                    class="text-xs font-bold mr-1">{{ $invitation->institute_price_currency }}
                                                </span>{{ $invitation->institute_price }}
                                            </td>
                                        @endif

                                        @if (in_array('instructor_price', $show_columns))
                                            <td class="px-2 py-4 sr-only lg:not-sr-only"
                                                style="white-space: nowrap">
                                                <span
                                                    class="text-xs font-bold mr-1">{{ $invitation->instructor_price_currency }}
                                                </span>{{ $invitation->instructor_price }}
                                            </td>
                                        @endif
                                        <td class="px-2 py-4">
                                            <svg fill="currentColor" class="mx-auto w-5 h-5"
                                                height="512" viewBox="0 0 24 24" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="01 align center" id="_01_align_center">
                                                    <path
                                                        d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                    </path>
                                                    <path
                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </td>
                                    </tr>
                                    <!--END Row -->
                                @empty
                                    <tr>
                                        <td colspan="10" style="text-align: center">No Data found.
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>

                        {{--                    @dump($invitations->toArray()) --}}

                    </div>
                </div>
            </section>
            <!---->

        </div>
    </div>
    <!-- Dash Content -->
</div>
