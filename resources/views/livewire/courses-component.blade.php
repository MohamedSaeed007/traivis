<div class="w-full">
    <!-- Page Content -->
    <div class="flex w-full flex-col" x-data="{ colOpt: false }">

        <!-----Start popup window----------->
        <section x-cloak x-show="colOpt" x-transition:enter="ease-out duration-100"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

            <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-50 overflow-y-auto"
                role="dialog">
                <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                    <!---over BG---->
                    <div @click.stop="colOpt = false" aria-hidden="true"
                        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                    </div>
                    <!-- center-->
                    <span aria-hidden="true" class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
                    <!---END over BG---->

                    <!-- popup content-->
                    <div
                        class="relative my-8 inline-block w-fit transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all">

                        <!---->

                        <div class="">
                            <div class="h-full w-full overflow-y-auto">
                                <div class="container mx-auto w-full rounded-lg bg-white px-8 py-4">

                                    <!--content-->
                                    <div class="text-md text-gray-500">

                                        <h1 class="text-center text-xl font-normal text-gray-500">
                                            Show / Hide Columns
                                        </h1>
                                        <div class="flex flex-row gap-x-8">

                                            <div class="space-y-6 py-6">
                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="CourseCol" type="checkbox" value="id">
                                                    <label class="ml-3 min-w-0 flex-1" for="CourseCol">
                                                        Course
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="ModeCol" type="checkbox" value="delivery_mode">
                                                    <label class="ml-3 min-w-0 flex-1" for="ModeCol">
                                                        Delivery
                                                        Mode
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="DurationCol" type="checkbox" value="course_duration">
                                                    <label class="ml-3 min-w-0 flex-1" for="DurationCol">
                                                        Duration
                                                    </label>
                                                </div>



                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="priceCol" type="checkbox" value="price">
                                                    <label class="ml-3 min-w-0 flex-1" for="priceCol">
                                                        Price
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="space-y-6 pt-6">
                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="IncomeCol" type="checkbox" value="income">
                                                    <label class="ml-3 min-w-0 flex-1" for="IncomeCol">
                                                        Income
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="StudentsCol" type="checkbox" value="students">
                                                    <label class="ml-3 min-w-0 flex-1" for="StudentsCol">
                                                        Students
                                                    </label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input wire:model.debounce="show_columns"
                                                        class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                        id="ViewsCol" type="checkbox" value="views">
                                                    <label class="ml-3 min-w-0 flex-1" for="ViewsCol">
                                                        Views
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-center">
                                            <button
                                                class="h-10 appearance-none whitespace-nowrap rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm font-semibold leading-6 text-gray-500 hover:border-traivis-500 hover:text-traivis-500 focus:text-traivis-500"
                                                type="button" @click="colOpt=false">Close
                                            </button>
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

        <div class="px-4 sm:px-6 lg:px-8">

            <!--head-->
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">My Courses</h1>
                    <p class="mb-5 mt-2 flex flex-row items-center text-sm font-semibold">
                        Total
                        <span
                            class="mx-2 flex h-5 w-fit items-center justify-center rounded-full bg-gray-400 p-3.5 px-1.5 font-bold text-white">
                            {{ $total_courses }}
                        </span>
                        Courses
                    </p>
                </div>
            </div>
            <!--END header-->

            <!--content-->
            <section class="">
                <div class="container mx-auto">

                    <!--search-->
                    <div class="mb-8 flex w-full items-center justify-center">
                        <label class="sr-only" for="paysearch">Search Courses</label>
                        <div class="relative w-full md:w-1/2">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor"
                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input wire:model.debounce="search" wire:keyup="searchFilter"
                                class="block h-10 w-full rounded-full border border-gray-300 bg-white py-2 pl-10 pr-3 text-sm text-gray-800 placeholder-gray-500 transition-colors focus:border-traivis-500 focus:text-gray-800 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-traivis-500 sm:text-sm"
                                id="paysearch" placeholder="Search" type="search">
                        </div>
                    </div>
                    <!---->

                    <!-- summary-->
                    <div class="">

                        <div
                            class="flex flex-1 flex-row flex-wrap items-center justify-evenly gap-x-3 gap-y-3 text-sm font-semibold text-gray-600">
                            <button
                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center">
                                    <svg fill="currentColor" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                        height="512">
                                        <path
                                            d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z" />
                                    </svg>
                                    <p class="px-2" wire:click="recordedFilter">Recorded</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $count_recorded }}
                                </p>
                            </button>
                            <button
                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center">
                                    <svg fill="currentColor" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        id="Filled" viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z" />
                                    </svg>
                                    <p class="px-2" wire:click="liveFilter">Live</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $count_live }}
                                </p>
                            </button>
                            <button
                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center">
                                    <svg fill="currentColor" class="h-4 w-4" id="Layer_1" height="512"
                                        viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                        data-name="Layer 1">
                                        <path
                                            d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z" />
                                    </svg>
                                    <p class="px-2" wire:click="f2fFilter">F2F</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $count_f2f }}
                                </p>
                            </button>

                            <button wire:click="publishedFilter"
                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 px-1 py-1 focus-within:border-traivis-600 focus-within:bg-traivis-50 focus-within:text-traivis-600 hover:border-traivis-600 hover:bg-traivis-50 hover:text-traivis-600">
                                <span class="flex flex-row items-center">
                                    <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 24 24" width="512"
                                        height="512">
                                        <path
                                            d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm6.2,10.512l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013.387.394.381,1.027-.014,1.414Z" />
                                    </svg>
                                    <p class="px-2">Published</p>
                                </span>
                                <p class="rounded-full border bg-traivis-500 px-2 text-base text-white">
                                    {{ $count_published }}
                                </p>
                            </button>

                            <!--Ready to publish-->
                            <button wire:click=""
                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 px-1 py-1 focus-within:border-green-600 focus-within:bg-green-50 focus-within:text-green-600 hover:border-green-600 hover:bg-green-50 hover:text-green-600">
                                <span class="flex flex-row items-center">
                                    <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 24 24" width="512">
                                        <path
                                            d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                        </path>
                                    </svg>
                                    <p class="px-2">Ready</p>
                                </span>
                                <p class="rounded-full border bg-green-500 px-2 text-base text-white">
                                    {{ $count_published }}
                                </p>
                            </button>
                            <!--Ready to publish-->

                            <button wire:click="draftFilter"
                                class="flex cursor-pointer items-center justify-between rounded-full border border-gray-300 px-1 py-1 focus-within:border-pink-600 focus-within:bg-pink-50 focus-within:text-pink-600 hover:border-pink-600 hover:bg-pink-50 hover:text-pink-600">
                                <span class="flex flex-row items-center">
                                    <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 24 24">
                                        <path
                                            d="M23.854,22.479l-4.545-7.437c.824-.474,1.614-1.027,2.352-1.674,.415-.364,.456-.996,.092-1.411-.366-.416-.996-.455-1.412-.092-.65,.57-1.347,1.055-2.075,1.47l-3.045-4.983c.485-.662,.78-1.47,.78-2.351,0-1.858-1.279-3.411-3-3.858V1c0-.552-.447-1-1-1s-1,.448-1,1v1.142c-1.721,.447-3,2-3,3.858,0,.881,.295,1.689,.78,2.351l-3.045,4.982c-.728-.414-1.425-.899-2.075-1.47-.416-.364-1.046-.324-1.412,.092-.364,.415-.323,1.046,.092,1.412,.737,.647,1.527,1.201,2.352,1.674L.146,22.479c-.288,.472-.14,1.087,.332,1.375,.163,.1,.343,.146,.521,.146,.337,0,.666-.17,.854-.479l4.648-7.606c1.76,.71,3.627,1.077,5.498,1.077s3.738-.367,5.498-1.077l4.648,7.606c.188,.309,.518,.479,.854,.479,.178,0,.357-.047,.521-.146,.472-.288,.62-.903,.332-1.375ZM12,4c1.103,0,2,.897,2,2s-.897,2-2,2-2-.897-2-2,.897-2,2-2ZM7.555,14.191l2.787-4.561c.506,.232,1.064,.37,1.657,.37s1.151-.138,1.657-.37l2.788,4.562c-2.859,1.067-6.03,1.067-8.889,0Z" />
                                    </svg>
                                    <p class="px-2">Draft</p>
                                </span>
                                <p class="rounded-full border bg-pink-500 px-2 text-base text-white">
                                    {{ $count_draft }}
                                </p>
                            </button>
                        </div>

                    </div>
                    <!--END summary-->

                    <!-- Filter bar -->
                    <div class="my-8 flex w-full flex-col flex-wrap items-center justify-between md:flex-row">

                        <!--date range-->
                        <div class="mb-5 w-full px-5 text-sm font-semibold text-gray-500 md:w-1/2 lg:w-1/3">

                            <div class="group flex w-full flex-row items-center justify-between" date-rangepicker="">
                                <label for="start" class="mr-2">From</label>
                                <div class="relative">
                                    <input wire:model="date_from" wire:change="searchFilter"
                                        class="datepicker-input h-10 rounded-lg border-gray-300 text-sm hover:border-traivis-500"
                                        name="start" id="start" placeholder="Select date start"
                                        type="date">
                                </div>

                                <label for="end" class="mx-2">to</label>
                                <div class="relative">
                                    <input wire:model="date_to" wire:change="searchFilter"
                                        class="h-10 rounded-lg border-gray-300 text-sm hover:border-traivis-500"
                                        name="end" id="end" placeholder="Select date end" type="date">
                                </div>
                            </div>

                        </div>
                        <!---->

                        <!--price range-->
                        <div class="mb-5 w-full items-center px-5 md:w-1/2 lg:w-1/3">

                            <div class="group flex w-full items-center justify-between font-semibold text-gray-500"
                                x-data="range()" x-init="mintrigger();
                                maxtrigger()">

                                <div class="flex w-12 items-center group-hover:font-bold group-hover:text-traivis-500">
                                    <span class="">$</span>
                                    <input class="h-10 w-12 rounded-lg border-none border-gray-300 px-0 text-center"
                                        maxlength="5" type="text" x-model="minprice" x-on:input="mintrigger">
                                </div>

                                <div class="relative mx-3 w-full flex-shrink shrink">
                                    <input wire:model="from_price" wire:change="searchFilter"
                                        class="pointer-events-none absolute z-20 h-2 w-full cursor-pointer appearance-none opacity-0"
                                        step="100" type="range" x-bind:max="max"
                                        x-bind:min="min" x-model="minprice" x-on:input="mintrigger">

                                    <input wire:model="to_price" wire:change="searchFilter"
                                        class="pointer-events-none absolute z-20 h-2 w-full cursor-pointer appearance-none opacity-0"
                                        step="100" type="range" x-bind:max="max"
                                        x-bind:min="min" x-model="maxprice" x-on:input="maxtrigger">

                                    <div class="relative z-10 h-2">
                                        <div
                                            class="absolute bottom-0 left-0 right-0 top-0 z-10 rounded-md bg-gray-300 group-hover:bg-traivis-200">
                                        </div>
                                        <div class="absolute bottom-0 top-0 z-20 rounded-md bg-traivis-500 group-hover:bg-traivis-600"
                                            x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'">
                                        </div>
                                        <div class="absolute left-0 top-0 z-30 -mt-2 h-6 w-6 rounded-full bg-traivis-500 group-hover:bg-traivis-600"
                                            x-bind:style="'left: ' + minthumb + '%'"></div>
                                        <div class="absolute right-0 top-0 z-30 -mt-2 h-6 w-6 rounded-full bg-traivis-500 group-hover:bg-traivis-600"
                                            x-bind:style="'right: ' + maxthumb + '%'"></div>
                                    </div>
                                </div>

                                <div class="flex w-12 items-center group-hover:font-bold group-hover:text-traivis-500">
                                    <span class="">$</span>
                                    <input class="h-10 w-12 rounded-lg border-none border-gray-300 px-0 text-center"
                                        maxlength="5" type="text" x-model="maxprice" x-on:input="maxtrigger">
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
                        <div class="flex w-full flex-row items-center justify-between px-4 lg:w-1/3">
                            <!-- filter-->
                            <div class="mb-5 w-fit lg:px-12">

                                <div @click.outside="fopen = false" @keydown.window.escape.stop="fopen = false"
                                    aria-labelledby="filter-heading" class="relative z-10 w-fit"
                                    x-data="{ fopen: false }">

                                    <h2 class="sr-only" id="filter-heading">Filters</h2>

                                    <!--filters button-->
                                    <div class="">
                                        <div class="group mx-auto flex items-center">
                                            {{-- <div> --}}
                                            {{-- <button @click="fopen = !fopen" aria-controls="disclosure-1" --}}
                                            {{-- aria-expanded="false" --}} {{--
                                                    class="whitespace-nowrap group text-sm  text-gray-500 font-bold hover:text-traivis-500 group-hover:font-bold group-hover:text-traivis-500 focus:font-bold focus:text-traivis-500 font-medium flex items-center w-fit"
                                                    --}}
                                            {{-- type="button"> --}}
                                            {{-- <svg aria-hidden="true" --}} {{--
                                                        class="flex-none w-5 h-5 mr-2" --}}
                                            {{-- fill="currentColor"
                                                        viewBox="0 0 20 20" --}} {{--
                                                        xmlns="http://www.w3.org/2000/svg"> --}}
                                            {{--
                                                        <path clip-rule="evenodd" --}} {{--
                                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                            --}}
                                            {{-- fill-rule="evenodd" /> --}}
                                            {{--
                                                    </svg> --}}
                                            {{-- 2 Filters --}}
                                            {{-- </button> --}}
                                            {{-- </div> --}}
                                            <div class="mx-3">
                                                <button wire:click="clearFilter"
                                                    class="form-input h-10 whitespace-nowrap rounded-lg border-gray-300 text-sm font-semibold text-gray-500 hover:border-traivis-500 hover:text-traivis-500 focus:text-traivis-500"
                                                    type="button">
                                                    Clear all
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--filters menu-->
                                    <div class="absolute left-0 w-fit origin-top-right rounded-lg bg-white p-6 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none lg:left-auto lg:right-0"
                                        id="disclosure-1" x-show="fopen" x-cloak
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        x-transition:leave-start="transform opacity-100 scale-100">

                                        <div class="">
                                            <div class="flex flex-row gap-x-8 text-sm">

                                                <fieldset class="whitespace-nowrap">
                                                    <legend class="block font-medium">Delivery Mode
                                                    </legend>
                                                    <div class="space-y-4 pt-6">
                                                        <div class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                                id="dmode-0" name="dmode[]" type="checkbox"
                                                                value="Live">
                                                            <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="dmode-0">
                                                                Live </label>
                                                        </div>

                                                        <div class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                                id="dmode-1" name="dmode[]" type="checkbox"
                                                                value="Recorded">
                                                            <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="dmode-1">
                                                                Recorded </label>
                                                        </div>

                                                        <div class="flex items-center text-base sm:text-sm">
                                                            <input checked
                                                                class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                                id="dmode-2" name="dmode[]" type="checkbox"
                                                                value="f2f">
                                                            <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="dmode-2">
                                                                Face to Face </label>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset class="whitespace-nowrap">
                                                    <legend class="block font-medium">Status</legend>

                                                    <div class="space-y-4 pt-6">
                                                        <div class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                                id="clResponse-0" name="clResponse[]" type="checkbox"
                                                                value="Accepted">
                                                            <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="clResponse-0">
                                                                Published </label>
                                                        </div>

                                                        <div class="flex items-center text-base sm:text-sm">
                                                            <input
                                                                class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-traivis-500 focus:ring-traivis-500"
                                                                id="clResponse-1" name="clResponse[]" type="checkbox"
                                                                value="Rejected">
                                                            <label class="ml-3 min-w-0 flex-1 text-gray-600"
                                                                for="clResponse-1">
                                                                Draft </label>
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

                                    <div class="mx-auto flex justify-end">
                                        <div class="relative inline-block">
                                            <div class="flex">
                                                <button @click="topen = !topen" aria-expanded="false"
                                                    aria-haspopup="true"
                                                    class="group inline-flex justify-center whitespace-nowrap text-sm font-medium text-gray-700 hover:text-gray-900"
                                                    id="menu-button" type="button">
                                                    <svg class="mr-2 h-5 w-5 flex-none" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                        data-name="Layer 1" viewBox="0 0 24 24" width="512"
                                                        height="512">
                                                        <path
                                                            d="M24,1c0,.553-.448,1-1,1H10c-.552,0-1-.447-1-1s.448-1,1-1h13c.552,0,1,.447,1,1Zm-4,4H10c-.552,0-1,.447-1,1s.448,1,1,1h10c.552,0,1-.447,1-1s-.448-1-1-1Zm-3,5h-7c-.552,0-1,.447-1,1s.448,1,1,1h7c.552,0,1-.447,1-1s-.448-1-1-1Zm-3,5h-4c-.552,0-1,.447-1,1s.448,1,1,1h4c.552,0,1-.447,1-1s-.448-1-1-1Zm-6.293,4.293l-1.707,1.707V1c0-.553-.448-1-1-1s-1,.447-1,1V21l-1.708-1.708c-.391-.391-1.023-.391-1.414,0s-.391,1.023,0,1.414l2.707,2.707c.39,.39,.902,.585,1.415,.585s1.024-.195,1.414-.585l2.707-2.707c.391-.391,.391-1.023,0-1.414s-1.023-.391-1.414,0Z" />
                                                    </svg>
                                                    Sort by
                                                    <!-- Heroicon name: solid/chevron-down -->
                                                    <svg aria-hidden="true"
                                                        class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            fill-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <div aria-labelledby="menu-button" aria-orientation="vertical"
                                                class="absolute right-0 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                role="menu" tabindex="-1" x-show="topen"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                x-transition:enter-start="transform opacity-0 scale-95"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-end="transform opacity-0 scale-95"
                                                x-transition:leave-start="transform opacity-100 scale-100">
                                                <div class="py-1" role="none">
                                                    <select wire:model="sort_by" wire:change="searchFilter"
                                                        class="select2 block px-4 py-2 text-sm font-medium text-gray-900"
                                                        id="menu-item-0" style="width: 100%">
                                                        <option value="" disabled>Select Sortable
                                                        </option>
                                                        <option value="created_at">Date</option>
                                                        <option value="title">Course Name</option>
                                                        {{-- <option value="income">Price</option> --}}

                                                    </select>
                                                </div>
                                                {{-- <div class="py-1" role="none"> --}}
                                                {{--
                                                    <!-- --}}
                                                {{--                                                      Active: "bg-gray-100", Not Active: "" --}}

                                                {{--                                                      Selected: "font-medium text-gray-900", Not Selected: "text-gray-500" --}}
                                                {{--                                                    --> --}}
                                                {{-- <a class="font-medium text-gray-900 block px-4 py-2 text-sm"
                                                        href="#" --}} {{-- id="menu-item-0" --}}
                                                {{-- role="menuitem"
                                                        --}} {{-- tabindex="-0"> Course Name </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-1" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Delivery Mode </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-2" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Duration </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-3" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Initial date </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-4" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Price </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-5" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Income </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-6" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Students </a> --}}

                                                {{-- <a class="text-gray-500 block px-4 py-2 text-sm" href="#" --}}
                                                {{-- id="menu-item-7" --}} {{-- role="menuitem" --}}
                                                {{--
                                                        tabindex="-1"> Views </a> --}}

                                                {{--
                                                </div> --}}
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
                    <div class="overflow-x-auto">

                        <!-- Table Header-->

                        <table class="min-w-full table-auto overflow-x-auto">
                            <thead class="text-center text-sm font-semibold text-gray-500">

                                <tr class="divide table-row divide-x-8 divide-transparent whitespace-nowrap">
                                    @if (in_array('id', $show_columns))
                                        <th class="px-2 py-1 text-left">Course</th>
                                    @endif

                                    {{-- new Status column --}}
                                    <th class="px-2 py-1">Status</th>

                                    @if (in_array('delivery_mode', $show_columns))
                                        <th class="px-2 py-1">Delivery Mode</th>
                                    @endif
                                    @if (in_array('course_duration', $show_columns))
                                        <th class="px-2 py-1">Duration</th>
                                    @endif
                                    @if (in_array('price', $show_columns))
                                        <th class="px-2 py-1">Price</th>
                                    @endif
                                    @if (in_array('income', $show_columns))
                                        <th class="px-2 py-1">Income</th>
                                    @endif
                                    @if (in_array('views', $show_columns))
                                        <th class="px-2 py-1">Views</th>
                                    @endif
                                    @if (in_array('students', $show_columns))
                                        <th class="px-2 py-1">Students</th>
                                    @endif
                                    <th class="px-2 py-1">Edit</th>
                                    <th class="px-2 py-1">
                                        <!--Columns Setting-->
                                        <div class="">

                                            <!---->
                                            <div @keydown.window.escape.stop="colOpt = false"
                                                class="flex justify-center">

                                                <!----- button----------->
                                                <button @click.stop="colOpt = !colOpt" class="flex justify-center"
                                                    href="#" type="button">
                                                    <svg fill="currentColor"
                                                        class="h-8 w-8 transition-all hover:rotate-180"
                                                        xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                        viewBox="0 0 24 24" width="512" height="512">
                                                        <path
                                                            d="M17,11H13V7a1,1,0,0,0-1-1h0a1,1,0,0,0-1,1v4H7a1,1,0,0,0-1,1H6a1,1,0,0,0,1,1h4v4a1,1,0,0,0,1,1h0a1,1,0,0,0,1-1V13h4a1,1,0,0,0,1-1h0A1,1,0,0,0,17,11Z" />
                                                    </svg>

                                                    <span class="sr-only">Lindsay Walton</span>
                                                </button>
                                                <!-----END button----------->

                                            </div>
                                            <!---->

                                        </div>
                                        <!---->

                                    </th>
                                </tr>

                            </thead>

                            <!-- Table Raws -->
                            <tbody class="">
                                @forelse($courses as $course)
                                    {{-- @if ($course->id == 130) --}}
                                    {{-- @dump($course->toArray()) --}}
                                    {{-- @endif --}}
                                    <!--Row -->
                                    <tr
                                        class="divide table-row divide-x-8 divide-transparent whitespace-nowrap text-center text-gray-600 hover:bg-traivis-50 hover:text-gray-900">
                                        @if (in_array('id', $show_columns))
                                            <td wire:key="courser-id-{{ $course->id }}" class="px-2 py-4 text-left">
                                                <span title="{{ $course->maker->business_name }}"
                                                    class="flex h-6 min-w-[100px] max-w-[300px] flex-grow flex-row items-center truncate">
                                                    @if (config('traivis.education_institute_enabled'))
                                                        <x-svg-icons.fi-rr-list-check class="h-6 w-6" />
                                                    @endif
                                                    {{-- <img src="{{ asset('assets/courses/list-check.png') }}"> --}}
                                                    {{-- <img class="m-1 h-6 w-6 rounded" src="{{ $course->maker->avatar }}">
                                            --}}
                                                    <div>
                                                        <p class="">{{ $course->title }}</p>
                                                    </div>
                                                </span>
                                            </td>
                                            {{--
                                    <td wire:key="courser-id-{{ $course->id }}" class="px-2 py-4 text-left">
                                        @can('course_edit')
                                        <a href="{{ route(" $dashBoard-courseDetails", ['id'=> $course->id]) }}"
                                            class="flex flex-row items-center">
                                            @endcan
                                            <svg fill="currentColor" class="h-8 w-8" id="Layer_1" height="512"
                                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                                data-name="Layer 1">
                                                <path
                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="max-w-lg truncate" title="{{ $course->title }}">
                                                    {{ $course->title }}
                                                </p>
                                            </div>
                                            @can('course_edit')
                                        </a>
                                        @endcan

                                    </td>
                                    --}}

                                            {{-- new Status column --}}
                                            <td class="px-2 py-4 text-center">
                                                <div class="flex items-center gap-x-1">
                                                    @if (strtolower($course->publish_status) == 'published')
                                                        <!--Published-->
                                                        <x-tooltip-arrow-up text="Published"
                                                            class=" mx-auto flex items-center justify-center">
                                                            <svg fill="currentColor" class="h-4 w-4 text-traivis-500"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm6.2,10.512l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013.387.394.381,1.027-.014,1.414Z" />
                                                            </svg>
                                                        </x-tooltip-arrow-up>
                                                        <!--Published-->
                                                    @endif

                                                    @if (strtolower($course->publish_status) == 'ready for review')
                                                        <!--Ready for review-->
                                                        <x-tooltip-arrow-up text="Ready for review"
                                                            class=" mx-auto flex items-center justify-center">
                                                            <svg fill="currentColor" class="h-4 w-4 text-green-600"
                                                                viewBox="0 0 24 24" width="512">
                                                                <path
                                                                    d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z" />
                                                            </svg>
                                                        </x-tooltip-arrow-up>
                                                        <!--Ready for review-->
                                                    @endif

                                                    @if (strtolower($course->publish_status) == 'under review')
                                                        <!--Under review-->
                                                        <x-tooltip-arrow-up text="under review"
                                                            class=" mx-auto flex items-center justify-center">
                                                            <svg fill="currentColor" class="h-4 w-4 text-green-600"
                                                                viewBox="0 0 24 24" width="512">
                                                                <path
                                                                    d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z" />
                                                            </svg>
                                                        </x-tooltip-arrow-up>
                                                        <!--Under review-->
                                                    @endif

                                                    @if (strtolower($course->publish_status) == 'draft')
                                                        <!--Draft-->
                                                        <x-tooltip-arrow-up text="Draft"
                                                            class="mx-auto flex items-center justify-center">
                                                            <svg fill="currentColor" class="h-4 w-4 text-pink-500"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M23.854,22.479l-4.545-7.437c.824-.474,1.614-1.027,2.352-1.674,.415-.364,.456-.996,.092-1.411-.366-.416-.996-.455-1.412-.092-.65,.57-1.347,1.055-2.075,1.47l-3.045-4.983c.485-.662,.78-1.47,.78-2.351,0-1.858-1.279-3.411-3-3.858V1c0-.552-.447-1-1-1s-1,.448-1,1v1.142c-1.721,.447-3,2-3,3.858,0,.881,.295,1.689,.78,2.351l-3.045,4.982c-.728-.414-1.425-.899-2.075-1.47-.416-.364-1.046-.324-1.412,.092-.364,.415-.323,1.046,.092,1.412,.737,.647,1.527,1.201,2.352,1.674L.146,22.479c-.288,.472-.14,1.087,.332,1.375,.163,.1,.343,.146,.521,.146,.337,0,.666-.17,.854-.479l4.648-7.606c1.76,.71,3.627,1.077,5.498,1.077s3.738-.367,5.498-1.077l4.648,7.606c.188,.309,.518,.479,.854,.479,.178,0,.357-.047,.521-.146,.472-.288,.62-.903,.332-1.375ZM12,4c1.103,0,2,.897,2,2s-.897,2-2,2-2-.897-2-2,.897-2,2-2ZM7.555,14.191l2.787-4.561c.506,.232,1.064,.37,1.657,.37s1.151-.138,1.657-.37l2.788,4.562c-2.859,1.067-6.03,1.067-8.889,0Z" />
                                                            </svg>
                                                        </x-tooltip-arrow-up>
                                                        <!--Draft-->
                                                    @endif

                                                    @if (strtolower($course->publish_status) == 'declined')
                                                        <!--Declined-->
                                                        <x-tooltip-arrow-up text="Declined"
                                                            class=" mx-auto flex items-center justify-center">
                                                            <svg fill="currentColor" class="h-4 w-4 text-pink-500"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M23.854,22.479l-4.545-7.437c.824-.474,1.614-1.027,2.352-1.674,.415-.364,.456-.996,.092-1.411-.366-.416-.996-.455-1.412-.092-.65,.57-1.347,1.055-2.075,1.47l-3.045-4.983c.485-.662,.78-1.47,.78-2.351,0-1.858-1.279-3.411-3-3.858V1c0-.552-.447-1-1-1s-1,.448-1,1v1.142c-1.721,.447-3,2-3,3.858,0,.881,.295,1.689,.78,2.351l-3.045,4.982c-.728-.414-1.425-.899-2.075-1.47-.416-.364-1.046-.324-1.412,.092-.364,.415-.323,1.046,.092,1.412,.737,.647,1.527,1.201,2.352,1.674L.146,22.479c-.288,.472-.14,1.087,.332,1.375,.163,.1,.343,.146,.521,.146,.337,0,.666-.17,.854-.479l4.648-7.606c1.76,.71,3.627,1.077,5.498,1.077s3.738-.367,5.498-1.077l4.648,7.606c.188,.309,.518,.479,.854,.479,.178,0,.357-.047,.521-.146,.472-.288,.62-.903,.332-1.375ZM12,4c1.103,0,2,.897,2,2s-.897,2-2,2-2-.897-2-2,.897-2,2-2ZM7.555,14.191l2.787-4.561c.506,.232,1.064,.37,1.657,.37s1.151-.138,1.657-.37l2.788,4.562c-2.859,1.067-6.03,1.067-8.889,0Z" />
                                                            </svg>
                                                        </x-tooltip-arrow-up>
                                                        <!--Declined-->
                                                    @endif

                                                    @if (strtolower($course->publish_status) == 'scheduled to publish')
                                                        <!--Schedule-->
                                                        <x-tooltip-arrow-up text="Scheduled to publish"
                                                            class=" mx-auto flex items-center justify-center">
                                                            <svg fill="currentColor" class="h-4 w-4 text-green-600"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M24,7v1H0v-1C0,4.239,2.239,2,5,2h1V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h8V1c0-.552,.448-1,1-1h0c.552,0,1,.448,1,1v1h1c2.761,0,5,2.239,5,5Zm0,10c0,3.86-3.141,7-7,7s-7-3.14-7-7,3.141-7,7-7,7,3.14,7,7Zm-5,.586l-1-1v-1.586c0-.552-.448-1-1-1h0c-.552,0-1,.448-1,1v2c0,.265,.105,.52,.293,.707l1.293,1.293c.39,.39,1.024,.39,1.414,0h0c.39-.39,.39-1.024,0-1.414Zm-11-.586c0-2.829,1.308-5.35,3.349-7H0v9c0,2.761,2.239,5,5,5h6.349c-2.041-1.65-3.349-4.171-3.349-7Z" />
                                                            </svg>
                                                        </x-tooltip-arrow-up>
                                                        <!--Schedule-->
                                                    @endif

                                                </div>
                                            </td>
                                            {{-- end new Status column --}}
                                        @endif

                                        @if (in_array('delivery_mode', $show_columns))
                                            <td wire:key="courser-delivery_mode-{{ $course->id }}"
                                                class="px-2 py-4">
                                                <div class="mx-auto flex flex-row items-center justify-center">
                                                    @if ($course->delivery_modes)
                                                        <svg fill="currentColor" class="mr-3 h-4 w-4" id="Layer_1"
                                                            height="512" viewBox="0 0 24 24" width="512"
                                                            xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                                            <path
                                                                d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z" />
                                                        </svg>
                                                    @endif
                                                    @foreach ($course->delivery_modes as $deliverMode)
                                                        <x-tooltip-arrow-up :text="$deliverMode['name']">
                                                            {{ $deliverMode['code'] }}
                                                        </x-tooltip-arrow-up>
                                                        @if (!$loop->last)
                                                            /
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </td>
                                        @endif
                                        @if (in_array('course_duration', $show_columns))
                                            <td wire:key="courser-course_duration-{{ $course->id }}"
                                                class="px-2 py-4">
                                                <p>{{ $course->course_duration }} hrs</p>
                                            </td>
                                        @endif
                                        @if (in_array('price', $show_columns))
                                            <td wire:key="courser-price-{{ $course->id }}" class="px-2 py-4">
                                                <div
                                                    class="mx-auto flex w-fit flex-row items-center rounded-full bg-traivis-50 px-2 py-1 text-gray-500">
                                                    {{-- <svg fill="currentColor" class="h-4 w-4" --}} {{--
                                                xmlns="http://www.w3.org/2000/svg" id="Bold" --}}
                                                    {{--
                                                viewBox="0 0 24 24" width="512" height="512"> --}}
                                                    {{--
                                                <path --}} {{--
                                                    d="M18.5,9.5A1.5,1.5,0,0,0,20,8V7.313A5.32,5.32,0,0,0,14.687,2H13.5V1.5a1.5,1.5,0,0,0-3,0V2H9.313A5.313,5.313,0,0,0,7.772,12.4l2.728.746V19H9.313A2.316,2.316,0,0,1,7,16.687V16a1.5,1.5,0,0,0-3,0v.687A5.32,5.32,0,0,0,9.313,22H10.5v.5a1.5,1.5,0,0,0,3,0V22h1.187a5.313,5.313,0,0,0,1.541-10.4L13.5,10.856V5h1.187A2.316,2.316,0,0,1,17,7.313V8A1.5,1.5,0,0,0,18.5,9.5Zm-3.118,4.979a2.314,2.314,0,0,1-.7,4.521H13.5V13.965ZM10.5,10.035,8.618,9.521A2.314,2.314,0,0,1,9.313,5H10.5Z" />
                                                --}}
                                                    {{--
                                            </svg> --}}
                                                    <p class="ml-2 font-semibold">
                                                        ${{ $course->sale_price }}
                                                    </p>
                                                </div>
                                            </td>
                                        @endif

                                        @if (in_array('income', $show_columns))
                                            <td wire:key="courser-income-{{ $course->id }}" class="px-2 py-4">
                                                <div
                                                    class="mx-auto flex w-fit flex-row items-center rounded-full border border-traivis-500 bg-traivis-50 px-2 py-1 text-traivis-500">
                                                    {{-- <svg fill="currentColor" class="h-4 w-4" --}} {{--
                                                xmlns="http://www.w3.org/2000/svg" id="Bold" --}}
                                                    {{--
                                                viewBox="0 0 24 24" width="512" height="512"> --}}
                                                    {{--
                                                <path --}} {{--
                                                    d="M18.5,9.5A1.5,1.5,0,0,0,20,8V7.313A5.32,5.32,0,0,0,14.687,2H13.5V1.5a1.5,1.5,0,0,0-3,0V2H9.313A5.313,5.313,0,0,0,7.772,12.4l2.728.746V19H9.313A2.316,2.316,0,0,1,7,16.687V16a1.5,1.5,0,0,0-3,0v.687A5.32,5.32,0,0,0,9.313,22H10.5v.5a1.5,1.5,0,0,0,3,0V22h1.187a5.313,5.313,0,0,0,1.541-10.4L13.5,10.856V5h1.187A2.316,2.316,0,0,1,17,7.313V8A1.5,1.5,0,0,0,18.5,9.5Zm-3.118,4.979a2.314,2.314,0,0,1-.7,4.521H13.5V13.965ZM10.5,10.035,8.618,9.521A2.314,2.314,0,0,1,9.313,5H10.5Z" />
                                                --}}
                                                    {{--
                                            </svg> --}}
                                                    <p class="ml-2 font-semibold">
                                                        ${{ $course->transactions()->where('transaction_status','!=',3)->get()->sum('final_amount') ?? 0 }}
                                                    </p>
                                                </div>
                                            </td>
                                        @endif
                                        @if (in_array('views', $show_columns))
                                            <td wire:key="courser-views-{{ $course->id }}" class="px-2 py-4">
                                                <div
                                                    class="mx-auto flex w-fit flex-row items-center rounded-full bg-traivis-50 px-2 py-1 text-gray-500">
                                                    <svg fill="currentColor" class="h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Capa_1" x="0px" y="0px" viewBox="0 0 512.19 512.19"
                                                        xml:space="preserve" width="512" height="512">
                                                        <g>
                                                            <circle cx="256.095" cy="256.095" r="85.333" />
                                                            <path
                                                                d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z" />
                                                        </g>
                                                    </svg>
                                                    <p class="ml-2 font-semibold">
                                                        {{ count($course->courseViews) }}</p>
                                                </div>
                                            </td>
                                        @endif

                                        @if (in_array('students', $show_columns))
                                            <td wire:key="courser-students-{{ $course->id }}" class="px-2 py-4">
                                                <div
                                                    class="mx-auto flex w-fit flex-row items-center rounded-full bg-traivis-50 px-2 py-1 text-gray-500">
                                                    <svg fill="currentColor" class="h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                                        xml:space="preserve" width="512" height="512">
                                                        <g>
                                                            <circle cx="256" cy="128" r="128" />
                                                            <path
                                                                d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z" />
                                                        </g>
                                                    </svg>
                                                    <p class="ml-2 font-semibold">
                                                        {{ $course->users->count() }}</p>
                                                </div>
                                            </td>
                                        @endif
                                        <!--Edit-->
                                        <td wire:key="courser-edit-{{ $course->id }}" class="px-2 py-4">
                                            @can('course_edit')
                                                <a
                                                    href="{{ route($dashBoard . '-courseDetails', ['id' => $course->id]) }}">
                                                    <svg class="mx-auto h-5 w-5" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" id="Outline"
                                                        viewBox="0 0 24 24" width="512" height="512">
                                                        <path
                                                            d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                                                        <path
                                                            d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                                                    </svg>

                                                </a>
                                            @endcan
                                            <!----- button----------->

                                            <!-----END button----------->

                                        </td>
                                        <!--End Edit-->

                                        <td wire:key="courser-empty-{{ $course->id }}" class="px-2 py-4">

                                        </td>

                                    </tr>
                                    <!--END Row -->
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No Data found.</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>

                    </div>

                    <!--add course-->
                    @can('course_edit')
                        <div class="fixed bottom-16 right-16 z-10 rounded-full bg-white p-2">
                            <div class="sr-only">
                                New Course !
                            </div>

                            <a href="{{ url(request()->segment(1) . '/courses/details') }}"
                                class="text-traivis-500 transition-colors hover:text-gray-500  md:right-60 lg:right-1/4">
                                <svg fill="currentColor" stroke="" class="h-12 w-12" id="Layer_1" height="512"
                                    viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1">
                                    <path
                                        d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-6 6.515a1 1 0 0 0 -1-1h-2v-2a1 1 0 0 0 -2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 1-1z" />
                                </svg>
                            </a>
                        </div>
                    @endcan

                    <!--END add course-->

                </div>
            </section>
            <!---->

        </div>
    </div>
    <!-- Page Content -->
</div>
