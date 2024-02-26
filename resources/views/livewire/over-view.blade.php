<div class="flex w-full flex-col bg-gradient-to-b from-white via-traivis-50 to-violet-100 px-8">

    <!--head-->
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Overview</h1>
            <p class="mt-2 text-sm text-gray-700"></p>
        </div>
    </div>
    <!--END header-->

    <!--content-->
    <section class="text-gray-500">
        <div class="container mx-auto pb-16">

            <!--Main Rank-->
            <div class="mx-auto mb-14 mt-5 flex w-full flex-wrap items-start justify-between gap-y-8">

                <!--tier and Balance-->
                <div class="w-full md:mx-0 lg:w-1/4" x-data="{ stockTicker: stockTicker() }" x-init="stockTicker.renderChart()">

                    <!--Tier-->
                    <div
                        class="group relative ml-10 flex cursor-pointer flex-row items-center rounded-xl border border-traivis-200 bg-gradient-to-r from-traivis-50 to-violet-50 p-2 px-3 font-bold transition-all hover:border-traivis-500 hover:bg-traivis-50">
                        <img alt=""
                            class="absolute -left-7 -top-[7px] h-[75px] w-[75px] rounded-full border-2 border-traivis-400 bg-cover transition-all group-hover:border-4 group-hover:border-traivis-500"
                            src="  https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">

                        <div class="flex w-full flex-col pl-10">

                            <div class="flex w-full flex-row justify-between whitespace-nowrap px-2">
                                {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                            </div>

                            <div class="flex w-full flex-row justify-between whitespace-nowrap px-2">
                                <p class="w-1/4">
                                    Skilled
                                </p>
                                <div class="w-full text-right">
                                    <div class="flex items-center">
                                        <span class="mx-2 w-20">100%</span>
                                        <div class="relative w-full">
                                            <div class="h-2 w-full rounded-sm bg-gray-200">
                                                <div class="h-2 rounded-sm bg-gradient-to-r from-traivis-500 to-purple-500"
                                                    style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Tier-->

                    <!--Balance-->
                    <div class="mt-5 flex flex-col gap-y-3 px-3 pl-12 font-bold">

                        <div
                            class="flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                            <p class="flex w-1/2 items-center gap-x-2 truncate text-sm font-semibold">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M21,6H5c-.859,0-1.672-.372-2.235-.999,.55-.614,1.349-1.001,2.235-1.001H23c1.308-.006,1.307-1.995,0-2H5C2.239,2,0,4.239,0,7v10c0,2.761,2.239,5,5,5H21c1.657,0,3-1.343,3-3V9c0-1.657-1.343-3-3-3Zm-1,9c-1.308-.006-1.308-1.994,0-2,1.308,.006,1.308,1.994,0,2Z" />
                                </svg>
                                <span class="text-black"> Current Balance</span>
                            </p>
                            <p class="w-1/2 truncate text-right">
                                $1000
                            </p>
                        </div>

                        <div
                            class="flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                            <p class="flex w-1/2 items-center gap-x-2 truncate text-sm font-semibold">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24,4v1c0,1.47-.81,2.75-2,3.44V4c0-1.1-.9-2-2-2H4c-1.1,0-2,.9-2,2v4.44c-1.19-.69-2-1.97-2-3.44v-1C0,1.79,1.79,0,4,0H20c2.21,0,4,1.79,4,4Zm-4,15c0,2.76-2.24,5-5,5h-6c-2.76,0-5-2.24-5-5V5c0-.55,.45-1,1-1h14c.55,0,1,.45,1,1v14Zm-4-7c0-2.21-1.79-4-4-4s-4,1.79-4,4,1.79,4,4,4,4-1.79,4-4Zm-4-2c-1.1,0-2,.9-2,2s.9,2,2,2,2-.9,2-2-.9-2-2-2Z" />
                                </svg>
                                <span class="text-black"> Last Withdrawal</span>
                            </p>
                            <p class="w-1/2 truncate text-right">
                                1/1/2023
                            </p>
                        </div>

                        <div
                            class="flex cursor-pointer items-center border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                            <p class="flex w-1/2 items-center gap-x-2 truncate text-sm font-semibold">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m14.09 16h.91c6.643 0 9-3.5 9-6.5a3.5 3.5 0 0 0 -2.84-3.433 7.564 7.564 0 0 0 .409-1 3.887 3.887 0 0 0 -.626-3.458 3.979 3.979 0 0 0 -3.214-1.609h-11.458a3.979 3.979 0 0 0 -3.214 1.612 3.887 3.887 0 0 0 -.626 3.458 7.564 7.564 0 0 0 .409 1 3.5 3.5 0 0 0 -2.84 3.43c0 3 2.357 6.5 9 6.5h.91a5.027 5.027 0 0 1 .09.921v3.079a1.883 1.883 0 0 1 -2 2h-2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2h-1.994a1.885 1.885 0 0 1 -2.006-2v-3.08a5.025 5.025 0 0 1 .09-.92zm1.636-2.851a23.486 23.486 0 0 0 4.4-5.225 1 1 0 0 0 .374.076 1.5 1.5 0 0 1 1.5 1.5c0 2.176-1.839 4.5-7 4.5h-.056a4.805 4.805 0 0 1 .782-.851zm-6.726.851c-5.161 0-7-2.324-7-4.5a1.5 1.5 0 0 1 1.5-1.5 1 1 0 0 0 .375-.076 23.486 23.486 0 0 0 4.4 5.225 4.805 4.805 0 0 1 .781.851z" />
                                </svg>
                                <span class="text-black"> Rewards Spent</span>
                            </p>
                            <p class="w-1/2 truncate text-right">
                                20 <span>(90)</span>
                            </p>
                        </div>

                    </div>
                    <!--/Balance-->

                </div>
                <!--/tier and Balance-->

                <!--Main Stats-->
                <div
                    class="mx-auto grid w-full grid-cols-3 items-center justify-between gap-5 md:w-2/3 md:grid-cols-2 md:pr-5 lg:w-2/4 lg:grid-cols-3 lg:px-10">
                    @if ($coursesShow)
                        <div class="flex flex-col">
                            <button
                                class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-8">
                                <span class="flex gap-x-4">
                                    <svg class="w-8" fill="currentColor" viewBox="0 0 24 24"
                                        width="512">
                                        <path
                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                        </path>
                                    </svg>
                                    <h2
                                        class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                        {{ $courses->count() }}
                                    </h2>
                                </span>
                                <h3 class="truncate whitespace-nowrap text-sm font-bold">
                                    Total Courses
                                </h3>
                            </button>
                        </div>
                    @endif
                    @if ($tendersShow)
                        <div class="flex flex-col">
                            <button
                                class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-8">
                                <span class="flex gap-x-4">
                                    <svg class="w-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12.056,11.211l8.039,6.718-5.694,4.271c-1.422,1.067-3.378,1.067-4.8,0l-6.133-4.6c-.519-.389-1.151-.6-1.8-.6h-.667C.448,17,0,16.552,0,16V4.937c0-.508,.379-.931,.884-.988,1.357-.151,2.579-.696,3.829-1.424,1.798-.925,4.157-.595,5.616,.772l.617,.593-4.007,3.911c-1.073,1.072-1.244,2.767-.398,3.938,.52,.723,1.461,1.259,2.444,1.259,.793,0,1.554-.312,2.104-.863l.967-.925ZM19.954,2.525c-1.69-.845-3.798-.625-5.308,.548l-6.303,6.152c-.371,.372-.455,.967-.181,1.347,.18,.25,.441,.4,.739,.425,.295,.025,.581-.082,.788-.29l3.618-3.429c.949-.901,2.324,.537,1.383,1.445l-1.181,1.097,8.593,7.181h.897c.552,0,1-.448,1-1V4.903c0-.49-.358-.895-.841-.982-1.694-.306-3.205-1.395-3.205-1.395Z" />
                                    </svg>
                                    <h2
                                        class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                        {{ $tenders->count() }}
                                    </h2>
                                </span>
                                <h3 class="truncate whitespace-nowrap text-sm font-bold">
                                    Total Tenders
                                </h3>
                            </button>
                        </div>
                    @endif

                    <div class="flex flex-col">
                        <button
                            class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-8">
                            <span class="flex gap-x-4">
                                <svg class="w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.5,9.5A1.5,1.5,0,0,0,20,8V7.313A5.32,5.32,0,0,0,14.687,2H13.5V1.5a1.5,1.5,0,0,0-3,0V2H9.313A5.313,5.313,0,0,0,7.772,12.4l2.728.746V19H9.313A2.316,2.316,0,0,1,7,16.687V16a1.5,1.5,0,0,0-3,0v.687A5.32,5.32,0,0,0,9.313,22H10.5v.5a1.5,1.5,0,0,0,3,0V22h1.187a5.313,5.313,0,0,0,1.541-10.4L13.5,10.856V5h1.187A2.316,2.316,0,0,1,17,7.313V8A1.5,1.5,0,0,0,18.5,9.5Zm-3.118,4.979a2.314,2.314,0,0,1-.7,4.521H13.5V13.965ZM10.5,10.035,8.618,9.521A2.314,2.314,0,0,1,9.313,5H10.5Z" />
                                </svg>
                                <h2
                                    class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                    2000
                                </h2>
                            </span>
                            <h3 class="truncate whitespace-nowrap text-sm font-bold">
                                Total Income
                            </h3>
                        </button>
                    </div>

                    <div class="flex flex-col">
                        <button
                            class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-8">
                            <h2
                                class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                300
                            </h2>
                            <h3 class="truncate whitespace-nowrap text-sm font-bold">
                                Total Hrs
                            </h3>
                        </button>
                    </div>

                    <div class="flex flex-col">
                        <button
                            class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-8">
                            <h2
                                class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                30
                            </h2>
                            <h3 class="truncate whitespace-nowrap text-sm font-bold">
                                Students
                            </h3>
                        </button>
                    </div>

                    <div class="flex flex-col">
                        <button
                            class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-8">
                            <h2
                                class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                30
                            </h2>
                            <h3 class="truncate whitespace-nowrap text-sm font-bold">
                                Followers
                            </h3>
                        </button>
                    </div>

                </div>
                <!--/Main Stats-->

                <!--Notification-->
                <div
                    class="group/s relative mx-auto h-fit w-full whitespace-normal rounded-xl border border-gray-200 bg-traivis-50 shadow-sm transition-all focus-within:bg-white focus-within:shadow-2xl hover:bg-white hover:shadow-2xl md:w-1/3 lg:w-1/4">
                    <!--Card Head-->
                    <span
                        class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-traivis-50 p-5 font-bold text-gray-500 transition-all group-focus-within/s:bg-white group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:bg-white group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                        <svg class="w-5 transition-all group-focus-within/s:w-6 group-hover/s:w-6"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.424,21a4.99,4.99,0,0,0,9.152,0Z" />
                            <path
                                d="M22.392,12.549,20.656,6.826A9.321,9.321,0,0,0,2.58,7.28L1.232,12.817A5,5,0,0,0,6.09,19H17.607a5,5,0,0,0,4.785-6.451Z" />
                        </svg>
                        Notification
                    </span>
                    <!--/Card Head-->

                    <!--Card Content-->
                    <div
                        class="overflow-x-hiddedn flex h-[210px] flex-col overflow-y-auto pb-5 xl:h-[230px]">

                        @forelse ($notifications as $notification)
                            <div
                                class="flex items-start justify-start border-gray-200 py-4 transition-colors ease-in-out hover:border-l-2 hover:border-traivis-500 hover:bg-traivis-50   ">
                                <div class="flex w-full items-start items-center">

                                    <div
                                        class="group flex inline-flex justify-start px-4 py-2 group-hover:font-bold md:justify-center md:py-0">
                                        <a class="flex items-center justify-center hover:w-auto group-hover:font-bold"
                                            href="#">
                                            <img alt=""
                                                class="group mr-4 h-8 w-8 rounded-full object-cover hover:ring-gray-700"
                                                src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                            <div class="flex" contenteditable="false"></div>
                                            <p class="-ml-2 flex items-center truncate text-base font-bold font-medium text-gray-500 transition-colors hover:text-gray-700  "
                                                contenteditable="false">
                                                {{ $notification->user ? $notification->user->first_name : '' }}
                                            </p>
                                        </a>
                                    </div>
                                    <div
                                        class="-ml-2 flex truncate text-gray-500  sm:inline-flex sm:w-auto">
                                        {{ $notification->note_type }}
                                    </div>

                                </div>
                            </div>
                        @empty
                        @endforelse

                        <div class="mt-2 flex justify-center text-center "><a
                                class="-ml-2 flex items-center truncate text-base font-bold font-medium text-gray-500 transition-colors hover:border-b-2 hover:border-traivis-500 hover:text-gray-700  "
                                href="#">Show more </a></div>

                    </div>
                    <!--/Card Content-->
                </div>
                <!--/ Notification-->

            </div>
            <!--/Main Rank-->

            <!--Cards-->
            <div
                class="my-5 flex grid w-full grid-cols-1 flex-wrap gap-x-5 gap-y-7 lg:grid-cols-2 lg:gap-x-16">
                @if ($coursesShow)
                    <!--My Courses-->
                    <div
                        class="group/s relative relative h-fit whitespace-normal rounded-xl border border-gray-200 bg-white shadow-sm transition-all focus-within:shadow-2xl hover:shadow-2xl">

                        <!--Card Head-->
                        <span
                            class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-white p-5 font-bold text-gray-500 transition-all group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                            <svg class="w-5 transition-all group-focus-within/s:w-6 group-hover/s:w-6"
                                fill="currentColor" viewBox="0 0 24 24" width="512">
                                <path
                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                            </svg>
                            My Courses
                        </span>
                        <!--/Card Head-->

                        <!--Stats-->
                        <div class="mb-5 px-3">
                            <div class="grid grid-cols-4 items-center justify-between gap-5">

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Courses
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $courses->count() }}
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Hours
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $courses->sum(function ($item) {return $item->lectures->sum('video_time');}) }}
                                            <span class="text-3xl"> </span>
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Students
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $courses->sum(function ($item) {return $item->student_courses_count;}) }}
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Income
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            <span class="text-base lg:text-xl xl:text-3xl"> $ </span>
                                            600
                                        </h2>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!--/Stats-->

                        <!--Card Content-->
                        <div class="flex flex-col p-5 pt-0">

                            <!--Tabs-->
                            <div x-cloak x-data="{ openTab: 1 }" class="">

                                <!--Tabs buttons-->
                                <ul class="flex w-full justify-between gap-x-5 overflow-x-auto text-sm">
                                    <li @click="openTab = 1" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2"
                                            :class="openTab === 1 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 1 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M22.903,6.538c-.676-.338-1.473-.267-2.077,.188-.039,.029-.076,.062-.11,.096l-1.757,1.773c-.211-2.565-2.341-4.594-4.959-4.594H5C2.243,4,0,6.243,0,9v6c0,2.757,2.243,5,5,5H14c2.629,0,4.768-2.047,4.962-4.627l1.756,1.754c.034,.033,.069,.063,.107,.092,.352,.264,.768,.398,1.188,.398,.303,0,.606-.069,.89-.211,.677-.338,1.097-1.019,1.097-1.774v-7.318c0-.757-.42-1.437-1.097-1.775Zm-8.903,11.462H5c-1.654,0-3-1.346-3-3v-6c0-1.654,1.346-3,3-3H14c1.654,0,3,1.346,3,3v6c0,1.654-1.346,3-3,3Zm5-5.417v-1.189l3-3.028,.025,7.238-3.025-3.022Z" />
                                            </svg>
                                            <svg :class="openTab === 1 ? '' : 'hidden'"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z">
                                                </path>
                                            </svg>
                                            Recorded
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                {{ $courses->where('delivery_mode', 'recorded')->count() }}
                                            </p>
                                        </dov>
                                    </li>

                                    <li @click="openTab = 2" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2"
                                            :class="openTab === 2 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 2 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z" />
                                            </svg>
                                            <svg :class="openTab === 2 ? '' : 'hidden'"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                                </path>
                                            </svg>
                                            Live
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                {{ $courses->where('delivery_mode', 'live')->count() }}
                                            </p>
                                        </dov>
                                    </li>

                                    <li @click="openTab = 3" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2"
                                            :class="openTab === 3 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 3 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                height="512" viewBox="0 0 24 24" width="512"
                                                height="512">
                                                <path
                                                    d="M23,13H1a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2ZM18.934,7.126A2.427,2.427,0,0,0,17.65,4.395L9.668.428A3.3,3.3,0,0,0,6.4.433,2.809,2.809,0,0,0,5,2.914V6A3,3,0,0,0,8,9h8.318A2.538,2.538,0,0,0,18.934,7.126ZM8.737,2.2,16.749,6.18a.421.421,0,0,1,.24.477c-.074.308-.494.341-.671.341H8A1,1,0,0,1,7,6V2.914a.825.825,0,0,1,.418-.758A1.168,1.168,0,0,1,8.011,2,1.5,1.5,0,0,1,8.737,2.2Zm.891,21.394L17.661,19.6a2.425,2.425,0,0,0,1.273-2.726A2.538,2.538,0,0,0,16.318,15H8a3,3,0,0,0-3,3v3.085a2.808,2.808,0,0,0,1.4,2.481A3.212,3.212,0,0,0,8.032,24,3.287,3.287,0,0,0,9.628,23.592ZM16.318,17c.177,0,.6.033.671.341a.417.417,0,0,1-.229.472L8.7,21.822a1.313,1.313,0,0,1-1.279.02A.824.824,0,0,1,7,21.084V18a1,1,0,0,1,1-1Z" />
                                            </svg>
                                            <svg :class="openTab === 3 ? '' : 'hidden'"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                height="512" viewBox="0 0 24 24" width="512">
                                                <path
                                                    d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z">
                                                </path>
                                            </svg>

                                            Face to Face
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                {{ $courses->where('delivery_mode', 'F2F')->count() }}
                                            </p>
                                        </dov>
                                    </li>

                                    <!--<li @click="openTab = 4" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2"
                                             :class="openTab === 4 ? 'border-b-2 border-traivis-500 font-bold' :
                                                 'font-semibold'" >

                                            <svg :class="openTab === 4 ? 'hidden' : ''"
                                                 class="mr-2 h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 24 24" width="512" height="512"><path d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0Zm3,19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3Z"/><path d="M9.333,15.919,5.414,12A1,1,0,0,0,4,12H4a1,1,0,0,0,0,1.414l3.919,3.919a2,2,0,0,0,2.829,0L20,8.081a1,1,0,0,0,0-1.414h0a1,1,0,0,0-1.414,0Z"/></svg>
                                            <svg :class="openTab === 4 ? '' : 'hidden'"
                                                 class="mr-2 h-5 w-5" fill="currentColor" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><path d="M405.333,0H106.667C47.786,0.071,0.071,47.786,0,106.667v298.667C0.071,464.214,47.786,511.93,106.667,512h298.667   C464.214,511.93,511.93,464.214,512,405.333V106.667C511.93,47.786,464.214,0.071,405.333,0z M426.667,172.352L229.248,369.771   c-16.659,16.666-43.674,16.671-60.34,0.012c-0.004-0.004-0.008-0.008-0.012-0.012l-83.563-83.541   c-8.348-8.348-8.348-21.882,0-30.229s21.882-8.348,30.229,0l83.541,83.541l197.44-197.419c8.348-8.318,21.858-8.294,30.176,0.053   C435.038,150.524,435.014,164.034,426.667,172.352z"></path></g></svg>

                                            Published
                                            <p class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">15</p>
                                        </dov>
                                    </li>-->

                                    <li @click="openTab = 5" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2"
                                            :class="openTab === 5 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 5 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M17,24H7.005a4.014,4.014,0,0,1-3.044-1.4,3.94,3.94,0,0,1-.917-3.158A12.522,12.522,0,0,1,7.445,12a12.522,12.522,0,0,1-4.4-7.444A3.94,3.94,0,0,1,3.961,1.4,4.014,4.014,0,0,1,7.005,0H17a4.017,4.017,0,0,1,3.044,1.4,3.943,3.943,0,0,1,.918,3.155A12.556,12.556,0,0,1,16.551,12a12.557,12.557,0,0,1,4.406,7.448,3.944,3.944,0,0,1-.918,3.156A4.017,4.017,0,0,1,17,24ZM17,2H7.005a2.015,2.015,0,0,0-1.528.7,1.921,1.921,0,0,0-.456,1.556c.376,2.5,1.924,4.84,4.6,6.957a1,1,0,0,1,0,1.568C6.945,14.9,5.4,17.242,5.021,19.741A1.921,1.921,0,0,0,5.477,21.3a2.015,2.015,0,0,0,1.528.7H17a2.014,2.014,0,0,0,1.528-.7,1.917,1.917,0,0,0,.456-1.554c-.373-2.487-1.92-4.829-4.6-6.962a1,1,0,0,1,0-1.564c2.681-2.133,4.228-4.475,4.6-6.963A1.916,1.916,0,0,0,18.523,2.7,2.014,2.014,0,0,0,17,2ZM15.681,20H8.318a1,1,0,0,1-.927-1.374,11.185,11.185,0,0,1,3.471-4.272l.518-.412a1,1,0,0,1,1.245,0l.509.406a11.3,11.3,0,0,1,3.473,4.276A1,1,0,0,1,15.681,20Zm-5.647-2h3.928A11.57,11.57,0,0,0,12,16,11.3,11.3,0,0,0,10.034,18Z" />
                                            </svg>
                                            <svg :class="openTab === 5 ? '' : 'hidden'"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512">
                                                <path
                                                    d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                </path>
                                            </svg>

                                            Draft
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                {{ $courses->where('publish_status', 'draft')->count() }}
                                            </p>
                                        </dov>
                                    </li>
                                </ul>
                                <!--END Tabs buttons-->

                                <!--Tabs Content-->
                                <div class="w-full pt-4 text-sm">

                                    <!--Tab Recorded-->
                                    <div x-show="openTab === 1">

                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="CRecorded"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        <!--Courses-->
                                        <div
                                            class="flex h-20 flex-col overflow-y-auto whitespace-nowrap pr-3">
                                            <div class="flex flex-col gap-y-3 whitespace-nowrap">
                                                @forelse ($courses->where('delivery_mode','recorded') as $course)
                                                    <div
                                                        class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                        <div class="flex flex-row items-center gap-x-3">
                                                            <svg fill="currentColor" class="h-4 w-4"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                                </path>
                                                            </svg>
                                                            <p class="flex-1 truncate">
                                                                {{ $course->title }}
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-row items-center">
                                                            <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                                class="flex justify-center">
                                                                <svg class="h-5 w-5"
                                                                    fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512">
                                                                    <g data-name="01 align center"
                                                                        id="_01_align_center">
                                                                        <path
                                                                            d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span class="sr-only">view course</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @empty
                                                @endforelse

                                            </div>
                                        </div>
                                        <!--/ Courses-->
                                    </div>
                                    <!--END Tab Recorded-->

                                    <!--Tab live-->
                                    <div x-show="openTab === 2">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="CLive"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        <!--Courses-->
                                        <div
                                            class="flex h-20 flex-col overflow-y-auto whitespace-nowrap pr-3">
                                            <div class="flex flex-col gap-y-3 whitespace-nowrap">

                                                @forelse ($courses->where('delivery_mode','live') as $course)
                                                    <div
                                                        class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                        <div class="flex flex-row items-center gap-x-3">
                                                            <svg fill="currentColor" class="h-4 w-4"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                                </path>
                                                            </svg>
                                                            <p class="max-w-md flex-1 truncate">
                                                                {{ $course->title }}
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-row items-center">
                                                            <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                                class="flex justify-center">
                                                                <svg class="h-5 w-5"
                                                                    fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512">
                                                                    <g data-name="01 align center"
                                                                        id="_01_align_center">
                                                                        <path
                                                                            d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span class="sr-only">view course</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @empty
                                                @endforelse

                                            </div>
                                        </div>
                                        <!--/ Courses-->
                                    </div>
                                    <!--END Tab live-->

                                    <!--Tab F2f-->
                                    <div x-show="openTab === 3">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="CFtoF"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        <!--Courses-->
                                        <div
                                            class="flex h-20 flex-col overflow-y-auto whitespace-nowrap pr-3">
                                            <div class="flex flex-col gap-y-3 whitespace-nowrap">

                                                @forelse ($courses->where('delivery_mode','F2F') as $course)
                                                    <div
                                                        class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                        <div class="flex flex-row items-center gap-x-3">
                                                            <svg fill="currentColor" class="h-4 w-4"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                                </path>
                                                            </svg>
                                                            <p class="flex-1 truncate">
                                                                {{ $course->title }}
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-row items-center">
                                                            <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                                class="flex justify-center">
                                                                <svg class="h-5 w-5"
                                                                    fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512">
                                                                    <g data-name="01 align center"
                                                                        id="_01_align_center">
                                                                        <path
                                                                            d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span class="sr-only">view course</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @empty
                                                @endforelse

                                            </div>
                                        </div>
                                        <!--/ Courses-->
                                    </div>
                                    <!--END Tab F2f-->

                                    <!--Tab draft-->
                                    <div x-show="openTab === 5">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="CDraft"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        <!--Courses-->
                                        <div
                                            class="flex h-20 flex-col overflow-y-auto whitespace-nowrap pr-3">
                                            <div class="flex flex-col gap-y-3 whitespace-nowrap">

                                                @forelse ($courses->where('publish_status','draft') as $course)
                                                    <div
                                                        class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                        <div class="flex flex-row items-center gap-x-3">
                                                            <svg fill="currentColor" class="h-4 w-4"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                                </path>
                                                            </svg>
                                                            <p class="flex-1 truncate">
                                                                {{ $course->title }}
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-row items-center">
                                                            <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                                class="flex justify-center">
                                                                <svg class="h-5 w-5"
                                                                    fill="currentColor" height="512"
                                                                    viewBox="0 0 24 24" width="512">
                                                                    <g data-name="01 align center"
                                                                        id="_01_align_center">
                                                                        <path
                                                                            d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span class="sr-only">view course</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @empty
                                                @endforelse

                                            </div>
                                        </div>
                                        <!--/ Courses-->
                                    </div>
                                    <!--END Tab draft-->

                                </div>
                                <!--End tabs content-->

                            </div>
                            <!--/Tabs-->

                        </div>
                        <!--/Card Content-->

                    </div>
                    <!--/ My Courses-->
                @endif
                @if ($freelancerShow)
                    <div
                        class="group/s relative relative h-fit whitespace-normal rounded-xl border border-gray-200 bg-white shadow-sm transition-all focus-within:shadow-2xl hover:shadow-2xl">

                        <!--Card Head-->
                        <span
                            class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-white p-5 font-bold text-gray-500 transition-all group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                            <svg class="w-5 transition-all group-focus-within/s:w-6 group-hover/s:w-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="m4.343 11h-4.343a5.006 5.006 0 0 1 5-5h6v-4.364a1.637 1.637 0 0 1 2.33-1.482l3.2 1.5a1 1 0 0 1 0 1.7l-3.53 1.646v1h6a5.006 5.006 0 0 1 5 5h-4.343a3 3 0 0 1 -2.092-.849l-2.736-2.979a4.074 4.074 0 0 0 -5.687.03l-2.678 2.919a3.017 3.017 0 0 1 -2.121.879zm7.657 8a1 1 0 0 0 -1 1v4h2v-4a1 1 0 0 0 -1-1zm7.657-6h4.343v8a3 3 0 0 1 -3 3h-6v-4a3 3 0 0 0 -6 0v4h-6a3 3 0 0 1 -3-3v-8h4.343a4.994 4.994 0 0 0 3.565-1.495l2.678-2.919a2.07 2.07 0 0 1 2.8-.03l2.738 2.979a4.968 4.968 0 0 0 3.533 1.465zm-13.657 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm0-4a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm8-4a2 2 0 1 0 -2 2 2 2 0 0 0 2-2zm7 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm-1-5h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2z">
                                </path>
                            </svg>
                            My Freelance Portal
                        </span>
                        <!--/Card Head-->

                        <!--Stats-->
                        <div class="mb-5 px-3">
                            <div class="grid grid-cols-4 items-center justify-between gap-5">

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Invitations
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $invitationsfreelancer->count() }}
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Hours
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $invitationsfreelancer->sum('hours') }} <span
                                                class="text-3xl"> </span>
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Students
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            30
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Income
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            <span class="text-base lg:text-xl xl:text-3xl"> $ </span>
                                            600
                                        </h2>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!--/Stats-->

                        <!--Card Content-->
                        <div class="flex flex-col p-5 pt-0">

                            <!--Tabs-->
                            <div x-data="{ openTab: 1 }" class="">

                                <!--Tabs buttons-->
                                <ul class="flex w-full justify-between gap-x-5 overflow-x-auto text-sm">
                                    <li @click="openTab = 1" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap border-b-2 border-traivis-500 py-2 font-bold"
                                            :class="openTab === 1 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 1 ? 'hidden' : ''"
                                                class="mr-2 hidden h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M22.903,6.538c-.676-.338-1.473-.267-2.077,.188-.039,.029-.076,.062-.11,.096l-1.757,1.773c-.211-2.565-2.341-4.594-4.959-4.594H5C2.243,4,0,6.243,0,9v6c0,2.757,2.243,5,5,5H14c2.629,0,4.768-2.047,4.962-4.627l1.756,1.754c.034,.033,.069,.063,.107,.092,.352,.264,.768,.398,1.188,.398,.303,0,.606-.069,.89-.211,.677-.338,1.097-1.019,1.097-1.774v-7.318c0-.757-.42-1.437-1.097-1.775Zm-8.903,11.462H5c-1.654,0-3-1.346-3-3v-6c0-1.654,1.346-3,3-3H14c1.654,0,3,1.346,3,3v6c0,1.654-1.346,3-3,3Zm5-5.417v-1.189l3-3.028,.025,7.238-3.025-3.022Z">
                                                </path>
                                            </svg>
                                            <svg :class="openTab === 1 ? '' : 'hidden'"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z">
                                                </path>
                                            </svg>
                                            Recorded
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                0</p>
                                        </dov>
                                    </li>

                                    <li @click="openTab = 2" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2 font-semibold"
                                            :class="openTab === 2 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 2 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z">
                                                </path>
                                            </svg>
                                            <svg :class="openTab === 2 ? '' : 'hidden'"
                                                class="mr-2 hidden h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                                </path>
                                            </svg>
                                            Live
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                15</p>
                                        </dov>
                                    </li>

                                    <li @click="openTab = 3" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2 font-semibold"
                                            :class="openTab === 3 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 3 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                height="512" viewBox="0 0 24 24" width="512">
                                                <path
                                                    d="M23,13H1a1,1,0,0,1,0-2H23a1,1,0,0,1,0,2ZM18.934,7.126A2.427,2.427,0,0,0,17.65,4.395L9.668.428A3.3,3.3,0,0,0,6.4.433,2.809,2.809,0,0,0,5,2.914V6A3,3,0,0,0,8,9h8.318A2.538,2.538,0,0,0,18.934,7.126ZM8.737,2.2,16.749,6.18a.421.421,0,0,1,.24.477c-.074.308-.494.341-.671.341H8A1,1,0,0,1,7,6V2.914a.825.825,0,0,1,.418-.758A1.168,1.168,0,0,1,8.011,2,1.5,1.5,0,0,1,8.737,2.2Zm.891,21.394L17.661,19.6a2.425,2.425,0,0,0,1.273-2.726A2.538,2.538,0,0,0,16.318,15H8a3,3,0,0,0-3,3v3.085a2.808,2.808,0,0,0,1.4,2.481A3.212,3.212,0,0,0,8.032,24,3.287,3.287,0,0,0,9.628,23.592ZM16.318,17c.177,0,.6.033.671.341a.417.417,0,0,1-.229.472L8.7,21.822a1.313,1.313,0,0,1-1.279.02A.824.824,0,0,1,7,21.084V18a1,1,0,0,1,1-1Z">
                                                </path>
                                            </svg>
                                            <svg :class="openTab === 3 ? '' : 'hidden'"
                                                class="mr-2 hidden h-5 w-5" fill="currentColor"
                                                height="512" viewBox="0 0 24 24" width="512">
                                                <path
                                                    d="m23 13h-22a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zm-4.066-5.874a2.427 2.427 0 0 0 -1.284-2.731l-7.982-3.967a3.3 3.3 0 0 0 -3.268.005 2.809 2.809 0 0 0 -1.4 2.481v3.086a3 3 0 0 0 3 3h8.318a2.538 2.538 0 0 0 2.616-1.874zm-9.306 16.466 8.033-3.992a2.425 2.425 0 0 0 1.273-2.726 2.538 2.538 0 0 0 -2.616-1.874h-8.318a3 3 0 0 0 -3 3v3.085a2.808 2.808 0 0 0 1.4 2.481 3.212 3.212 0 0 0 1.632.434 3.287 3.287 0 0 0 1.596-.408z">
                                                </path>
                                            </svg>

                                            Face to Face
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                15</p>
                                        </dov>
                                    </li>

                                    <li @click="openTab = 5" class="">
                                        <dov class="flex cursor-pointer items-center whitespace-nowrap py-2 font-semibold"
                                            :class="openTab === 5 ? 'border-b-2 border-traivis-500 font-bold' :
                                                'font-semibold'">

                                            <svg :class="openTab === 5 ? 'hidden' : ''"
                                                class="mr-2 h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M17,24H7.005a4.014,4.014,0,0,1-3.044-1.4,3.94,3.94,0,0,1-.917-3.158A12.522,12.522,0,0,1,7.445,12a12.522,12.522,0,0,1-4.4-7.444A3.94,3.94,0,0,1,3.961,1.4,4.014,4.014,0,0,1,7.005,0H17a4.017,4.017,0,0,1,3.044,1.4,3.943,3.943,0,0,1,.918,3.155A12.556,12.556,0,0,1,16.551,12a12.557,12.557,0,0,1,4.406,7.448,3.944,3.944,0,0,1-.918,3.156A4.017,4.017,0,0,1,17,24ZM17,2H7.005a2.015,2.015,0,0,0-1.528.7,1.921,1.921,0,0,0-.456,1.556c.376,2.5,1.924,4.84,4.6,6.957a1,1,0,0,1,0,1.568C6.945,14.9,5.4,17.242,5.021,19.741A1.921,1.921,0,0,0,5.477,21.3a2.015,2.015,0,0,0,1.528.7H17a2.014,2.014,0,0,0,1.528-.7,1.917,1.917,0,0,0,.456-1.554c-.373-2.487-1.92-4.829-4.6-6.962a1,1,0,0,1,0-1.564c2.681-2.133,4.228-4.475,4.6-6.963A1.916,1.916,0,0,0,18.523,2.7,2.014,2.014,0,0,0,17,2ZM15.681,20H8.318a1,1,0,0,1-.927-1.374,11.185,11.185,0,0,1,3.471-4.272l.518-.412a1,1,0,0,1,1.245,0l.509.406a11.3,11.3,0,0,1,3.473,4.276A1,1,0,0,1,15.681,20Zm-5.647-2h3.928A11.57,11.57,0,0,0,12,16,11.3,11.3,0,0,0,10.034,18Z">
                                                </path>
                                            </svg>
                                            <svg :class="openTab === 5 ? '' : 'hidden'"
                                                class="mr-2 hidden h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512">
                                                <path
                                                    d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                </path>
                                            </svg>

                                            Draft
                                            <p
                                                class="ml-1 rounded-full border border border-gray-400 bg-gray-200 px-1 text-xs font-bold">
                                                15</p>
                                        </dov>
                                    </li>
                                </ul>
                                <!--END Tabs buttons-->

                                <!--Tabs Content-->
                                <div class="w-full pt-4 text-sm">

                                    <!--Tab Recorded-->
                                    <div x-show="openTab === 1">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="FRecorded"
                                                style="display: block; box-sizing: border-box; height: 210px; width: 420px;"
                                                height="299" width="598"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        <!--Courses-->
                                        <div
                                            class="flex h-20 flex-col overflow-y-auto whitespace-nowrap pr-3">
                                            <div class="flex flex-col gap-y-3 whitespace-nowrap">
                                                @forelse ($invitationsfreelancer as $item)
                                                    @if ($item->course->where('delivery_mode', 'recorded'))
                                                        <div
                                                            class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                            <div
                                                                class="flex flex-row items-center gap-x-3">
                                                                <svg fill="currentColor"
                                                                    class="h-4 w-4" height="512"
                                                                    viewBox="0 0 24 24" width="512"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    data-name="Layer 1">
                                                                    <path
                                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                                    </path>
                                                                </svg>
                                                                <p class="flex-1 truncate">
                                                                    {{ $item->course->title }}
                                                                </p>
                                                            </div>
                                                            <div class="flex flex-row items-center">
                                                                <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                                    class="flex justify-center">
                                                                    <svg class="h-5 w-5"
                                                                        fill="currentColor"
                                                                        height="512"
                                                                        viewBox="0 0 24 24"
                                                                        width="512">
                                                                        <g data-name="01 align center"
                                                                            id="_01_align_center">
                                                                            <path
                                                                                d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                            </path>
                                                                            <path
                                                                                d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="sr-only">view
                                                                        course</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif

                                                @empty
                                                @endforelse

                                            </div>
                                        </div>
                                        <!--/ Courses-->
                                    </div>
                                    <!--END Tab Recorded-->

                                    <!--Tab Live-->
                                    <div x-show="openTab === 2" style="display: none;">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="FLive"
                                                style="display: block; box-sizing: border-box; height: 0px; width: 0px;"
                                                height="0" width="0"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        @forelse ($invitationsfreelancer as $item)
                                            @if ($item->course->where('delivery_mode', 'live'))
                                                <div
                                                    class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                    <div class="flex flex-row items-center gap-x-3">
                                                        <svg fill="currentColor" class="h-4 w-4"
                                                            height="512" viewBox="0 0 24 24"
                                                            width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                        <p class="flex-1 truncate">
                                                            {{ $item->course->title }}
                                                        </p>
                                                    </div>
                                                    <div class="flex flex-row items-center">
                                                        <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                            class="flex justify-center">
                                                            <svg class="h-5 w-5" fill="currentColor"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512">
                                                                <g data-name="01 align center"
                                                                    id="_01_align_center">
                                                                    <path
                                                                        d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                    </path>
                                                                    <path
                                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <span class="sr-only">view course</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif

                                        @empty
                                        @endforelse
                                    </div>
                                    <!--END Tab Live-->

                                    <!--Tab f2f-->
                                    <div x-show="openTab === 3" style="display: none;">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="FFtoF"
                                                style="display: block; box-sizing: border-box; height: 0px; width: 0px;"
                                                height="0" width="0"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        @forelse ($invitationsfreelancer as $item)
                                            @if ($item->course->where('delivery_mode', 'F2F'))
                                                <div
                                                    class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                    <div class="flex flex-row items-center gap-x-3">
                                                        <svg fill="currentColor" class="h-4 w-4"
                                                            height="512" viewBox="0 0 24 24"
                                                            width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                        <p class="flex-1 truncate">
                                                            {{ $item->course->title }}
                                                        </p>
                                                    </div>
                                                    <div class="flex flex-row items-center">
                                                        <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                            class="flex justify-center">
                                                            <svg class="h-5 w-5" fill="currentColor"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512">
                                                                <g data-name="01 align center"
                                                                    id="_01_align_center">
                                                                    <path
                                                                        d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                    </path>
                                                                    <path
                                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <span class="sr-only">view course</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif

                                        @empty
                                        @endforelse
                                    </div>
                                    <!--END Tab f2f-->

                                    <!--Tab Draft-->
                                    <div x-show="openTab === 5" style="display: none;">
                                        <!--Charts-->
                                        <div class="p-3">
                                            <canvas id="FDraft"
                                                style="display: block; box-sizing: border-box; height: 0px; width: 0px;"
                                                height="0" width="0"></canvas>
                                        </div>
                                        <!--/ Charts-->

                                        <!--Courses-->
                                        @forelse ($invitationsfreelancer as $item)
                                            @if ($item->course->where('publish_status', 'draft'))
                                                <div
                                                    class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                                    <div class="flex flex-row items-center gap-x-3">
                                                        <svg fill="currentColor" class="h-4 w-4"
                                                            height="512" viewBox="0 0 24 24"
                                                            width="512"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            data-name="Layer 1">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                        <p class="flex-1 truncate">
                                                            {{ $item->course->title }}
                                                        </p>
                                                    </div>
                                                    <div class="flex flex-row items-center">
                                                        <a href="{{ auth()->user()->can('course_edit')? route($dashBoard . '-courseDetails', $course->id): '#' }}"
                                                            class="flex justify-center">
                                                            <svg class="h-5 w-5" fill="currentColor"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512">
                                                                <g data-name="01 align center"
                                                                    id="_01_align_center">
                                                                    <path
                                                                        d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                    </path>
                                                                    <path
                                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <span class="sr-only">view course</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif

                                        @empty
                                        @endforelse
                                        <!--/ Courses-->
                                    </div>
                                    <!--END Tab Draft-->

                                </div>
                                <!--End tabs content-->

                            </div>
                            <!--/Tabs-->

                        </div>
                        <!--/Card Content-->

                    </div>
                @endif
                @if ($tendersShow)
                    <!--My Tenders-->
                    <div
                        class="group relative relative h-fit whitespace-normal rounded-xl border border-gray-200 bg-white shadow-sm transition-all focus-within:shadow-2xl hover:shadow-2xl">

                        <!--Card Head-->
                        <span
                            class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-white p-5 font-bold text-gray-500 transition-all group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                            <svg class="w-5 transition-all group-focus-within:w-6 group-hover:w-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.056,11.211l8.039,6.718-5.694,4.271c-1.422,1.067-3.378,1.067-4.8,0l-6.133-4.6c-.519-.389-1.151-.6-1.8-.6h-.667C.448,17,0,16.552,0,16V4.937c0-.508,.379-.931,.884-.988,1.357-.151,2.579-.696,3.829-1.424,1.798-.925,4.157-.595,5.616,.772l.617,.593-4.007,3.911c-1.073,1.072-1.244,2.767-.398,3.938,.52,.723,1.461,1.259,2.444,1.259,.793,0,1.554-.312,2.104-.863l.967-.925ZM19.954,2.525c-1.69-.845-3.798-.625-5.308,.548l-6.303,6.152c-.371,.372-.455,.967-.181,1.347,.18,.25,.441,.4,.739,.425,.295,.025,.581-.082,.788-.29l3.618-3.429c.949-.901,2.324,.537,1.383,1.445l-1.181,1.097,8.593,7.181h.897c.552,0,1-.448,1-1V4.903c0-.49-.358-.895-.841-.982-1.694-.306-3.205-1.395-3.205-1.395Z" />
                            </svg>
                            Tenders
                        </span>
                        <!--/Card Head-->

                        <!--Stats-->
                        <div class="mb-5 px-3">
                            <div class="grid grid-cols-4 items-center justify-between gap-5">

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Invitations
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $tenders?->sum('my_invitations_count') }}
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Winning
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $tenders?->sum(function ($item) {return $item->BiddingOffers->where('enterprise_status', 'hired')->count() > 0 ? 1 : 0;}) }}
                                            <span class="text-3xl"> </span>
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-traivis-50 px-8 py-3 transition-all focus-within:bg-white hover:border-traivis-200 hover:bg-white focus:border-traivis-200 lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Total Cost
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            <span class="text-base lg:text-xl xl:text-3xl"> $ </span>
                                            100
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-green-50 px-8 py-3 transition-all focus-within:bg-white hover:border-green-200 hover:bg-white focus:border-green-200 lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Total Income
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            <span class="text-base lg:text-xl xl:text-3xl"> $ </span>
                                            600
                                        </h2>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!--/Stats-->

                        <!--Card Content-->
                        <div class="flex flex-col p-5 pt-0">
                            <div class="p-3">
                                <canvas id="TendersChart"></canvas>
                            </div>

                            <!--Courses-->
                            <div class="flex h-32 flex-col overflow-y-auto whitespace-nowrap pr-3">
                                <div class="flex flex-col gap-y-3 whitespace-nowrap">
                                    @forelse ($tenders as $tender)
                                        <div
                                            class="group flex cursor-pointer flex-row items-center justify-between font-semibold hover:text-traivis-500">
                                            <div class="flex flex-row items-center gap-x-3">
                                                <svg fill="currentColor" class="h-4 w-4"
                                                    height="512" viewBox="0 0 24 24" width="512"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    data-name="Layer 1">
                                                    <path
                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                    </path>
                                                </svg>
                                                <p class="flex-1 truncate">
                                                    {{ $tender->name }}
                                                </p>
                                            </div>
                                            <div class="flex flex-row items-center">
                                                <button @click="Topen = !Topen"
                                                    class="flex justify-center" type="button">
                                                    <svg class="h-5 w-5" fill="currentColor"
                                                        height="512" viewBox="0 0 24 24"
                                                        width="512">
                                                        <g data-name="01 align center"
                                                            id="_01_align_center">
                                                            <path
                                                                d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                            </path>
                                                            <path
                                                                d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span class="sr-only">view bidding</span>
                                                </button>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse

                                </div>
                            </div>
                            <!--/ Courses-->
                        </div>
                        <!--/Card Content-->

                    </div>
                    <!--/ My Tenders-->
                @endif
                @if ($myTeamsShow)
                    <!--My Team-->
                    <div
                        class="group relative relative h-fit whitespace-normal rounded-xl border border-gray-200 bg-white shadow-sm transition-all focus-within:shadow-2xl hover:shadow-2xl">

                        <!--Card Head-->
                        <span
                            class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-white p-5 font-bold text-gray-500 transition-all group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                            <svg class="w-5 transition-all group-focus-within:w-6 group-hover:w-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z" />
                            </svg>
                            My Team
                        </span>
                        <!--/Card Head-->

                        <!--Stats-->
                        <div class="mb-5 px-3">
                            <div class="grid grid-cols-4 items-center justify-between gap-5">

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-cyan-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Staff
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $myTeams }}
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-violet-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Freelancers
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            {{ $myTeamsFreelancer }} <span class="text-3xl"> </span>
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Payments
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            <span class="text-base lg:text-xl xl:text-3xl"> $ </span>
                                            100
                                        </h2>
                                    </button>
                                </div>

                                <div class="flex flex-col">
                                    <button
                                        class="flex w-full flex-col items-center justify-center rounded-lg border bg-gray-50 px-8 py-3 transition-all focus-within:bg-white hover:bg-white lg:py-5">
                                        <h3 class="truncate whitespace-nowrap text-base xl:text-xl">
                                            Income
                                        </h3>
                                        <h2
                                            class="whitespace-nowrap text-center text-2xl font-bold tracking-tighter text-gray-500 lg:text-4xl xl:text-5xl">
                                            <span class="text-base lg:text-xl xl:text-3xl"> $ </span>
                                            600
                                        </h2>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!--/Stats-->

                        <!--Card Content-->
                        <span class="flex flex-col p-5 pt-0">
                            <div class="p-3">
                                <canvas id="Chartteam"></canvas>
                            </div>
                        </span>
                        <!--/Card Content-->

                    </div>
                    <!--/ My Team-->
                @endif

                <!--My calendar-->
                <div
                    class="group/s relative relative h-fit whitespace-normal rounded-xl border border-gray-200 bg-white shadow-sm transition-all focus-within:shadow-2xl hover:shadow-2xl">

                    <!--Card Head-->
                    <span
                        class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-white p-5 font-bold text-gray-500 transition-all group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                        <svg class="w-5 transition-all group-focus-within/s:w-6 group-hover/s:w-6"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M0,10v9c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V10H0Zm15,8h-6c-.552,0-1-.448-1-1s.448-1,1-1h6c.552,0,1,.448,1,1s-.448,1-1,1ZM0,8v-1C0,4.243,2.243,2,5,2h1V1c0-.552,.448-1,1-1s1,.448,1,1v1h8V1c0-.552,.448-1,1-1s1,.448,1,1v1h1c2.757,0,5,2.243,5,5v1H0Z" />
                        </svg>
                        Calendar
                    </span>
                    <!--/Card Head-->

                    <!--Card Content-->
                    <div
                        class="flex w-full flex-col items-start justify-between gap-x-5 gap-y-10 px-5 lg:flex-row">

                        <!--Calender-->
                        <div class="w-full">
                            <div inline-datepicker data-date="{{ now()->format('m/d/Y') }}"></div>
                        </div>
                        <!--/ Calender-->

                        <!-- Upcoming Events-->
                        <div
                            class="relative flex h-[350px] w-full flex-col overflow-y-auto overflow-x-hidden">

                            <!--Events Head-->
                            <div class="top-0 z-10 bg-white font-bold">
                                Upcoming Events
                                <h2 class="py-1 text-sm font-medium text-gray-700">
                                    Schedule for
                                    <time
                                        datetime="{{ now()->format('Y-m-d') }}">{{ now()->format('M d Y') }}</time>
                                </h2>
                            </div>
                            <!--/Events Head-->

                            <!--Events-->
                            <div class="w-full text-sm">
                                @forelse ($eventsOfDay as $event)
                                    <ol class="w-full text-sm leading-6 text-gray-500">
                                        <li
                                            class="group flex w-full cursor-pointer items-center justify-start space-x-4 rounded-xl px-5 py-2 focus-within:bg-indigo-200 hover:bg-indigo-50 hover:shadow-lg">

                                            <!-- Event circle Colour ( Meeting)-->
                                            <div class="mr-2 h-3 w-3 rounded-full bg-indigo-500"></div>

                                            {{--  <img alt="" class="h-10 w-10 flex-none rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">  --}}
                                            <div class="flex-auto">
                                                <p class="text-gray-900">{{ $event->name }}</p>
                                                <p class="mt-0.5">
                                                    <time
                                                        datetime="{{ $event->start_date }}">{{ \Carbon\Carbon::parse($event?->start_date)->format('h:i') }}</time>
                                                </p>
                                            </div>

                                        </li>
                                    </ol>
                                @empty
                                @endforelse

                            </div>
                            <!--/ Events-->
                        </div>
                        <!-- / Upcoming Events-->

                    </div>
                    <!--/Card Content-->

                </div>
                <!--/ My calendar-->
                @if ($marketingShow)
                    <!--My MKT Manager-->
                    <div
                        class="group/s relative relative h-fit whitespace-normal rounded-xl border border-gray-200 bg-white shadow-sm transition-all focus-within:shadow-2xl hover:shadow-2xl">

                        <!--Card Head-->
                        <span
                            class="text-md top-16 flex items-center gap-x-3 rounded-2xl bg-white p-5 font-bold text-gray-500 transition-all group-focus-within/s:text-traivis-500 group-focus-within:text-traivis-500 group-hover/s:text-traivis-500 group-hover:text-traivis-500">
                            <svg class="w-5 transition-all group-focus-within/s:w-6 group-hover/s:w-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z" />
                            </svg>
                            Marketing Manager
                        </span>
                        <!--/Card Head-->

                        <!--Card Content-->
                        <div class="flex flex-col p-5 pt-0">

                            <div class="h-auto w-full">
                                <div class="items-center text-gray-500 transition-all">
                                    <div class="py-4 text-center">

                                        <!--Start Graph-->
                                        <div class="mx-auto w-full p-4" x-data="{ annual: false, graf: true, table: false }">

                                            <!--Graph stats Content-->
                                            <div class="" x-data="{ cardOpen: false, cardData: cardData() }">

                                                <!--graph head-->
                                                <div
                                                    class="mb-6 flex flex-row items-center justify-evenly space-x-5">
                                                    <!--Slots count-->
                                                    <div class="flex flex-row items-center space-x-2">
                                                        <h4 class="inline-block text-3xl font-semibold leading-tight text-gray-900 lg:text-4xl"
                                                            x-text="cardData.size" x-ref="total"></h4>
                                                        <h3 class="text-xl font-semibold leading-tight">
                                                            Slots</h3>
                                                    </div>
                                                    <!--Slots count-->

                                                    <!--Graph Nav-->
                                                    <div
                                                        class="flex h-10 w-fit max-w-sm rounded-xl border-4 border-gray-200 bg-gray-200 font-bold">
                                                        <button
                                                            class="group relative block flex w-full items-center justify-center space-x-2 rounded-lg px-3 py-1 text-sm transition"
                                                            :class="annual == false ? 'bg-white shadow-ios' :
                                                                'hover:text-gray-700'"
                                                            @click="annual = false ,graf=true,table=false"
                                                            type="button">
                                                            <svg class="h-5 w-5" fill="currentColor"
                                                                viewBox="0 0 24 24" width="512"
                                                                height="512">
                                                                <path
                                                                    d="M5.5,21A2.5,2.5,0,0,1,3,18.5V1.5A1.5,1.5,0,0,0,1.5,0h0A1.5,1.5,0,0,0,0,1.5v17A5.5,5.5,0,0,0,5.5,24h17A1.5,1.5,0,0,0,24,22.5h0A1.5,1.5,0,0,0,22.5,21Z" />
                                                                <path
                                                                    d="M19.5,18A1.5,1.5,0,0,0,21,16.5v-6a1.5,1.5,0,0,0-3,0v6A1.5,1.5,0,0,0,19.5,18Z" />
                                                                <path
                                                                    d="M7.5,18A1.5,1.5,0,0,0,9,16.5v-6a1.5,1.5,0,0,0-3,0v6A1.5,1.5,0,0,0,7.5,18Z" />
                                                                <path
                                                                    d="M13.5,18A1.5,1.5,0,0,0,15,16.5V5.5a1.5,1.5,0,0,0-3,0v11A1.5,1.5,0,0,0,13.5,18Z" />
                                                            </svg>
                                                            <p
                                                                class="absolute bottom-12 hidden rounded-lg bg-black px-2 py-1 text-white group-hover:block">
                                                                Graph</p>
                                                        </button>

                                                        <button
                                                            class="group relative block flex w-full items-center justify-center space-x-2 rounded-lg px-3 py-1 text-sm transition"
                                                            :class="annual == true ? 'bg-white shadow-ios' :
                                                                'hover:text-gray-700'"
                                                            @click="annual = true ,graf=false,table=true"
                                                            type="button">
                                                            <svg class="h-5 w-5" fill="currentColor"
                                                                height="512" viewBox="0 0 24 24"
                                                                width="512"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                data-name="Layer 1">
                                                                <path
                                                                    d="m0 7h5v4h-5zm5 6h-5v4h5zm6 0h-4v4h4zm0-2v-4h-4v4zm2 0h4v-4h-4zm6 0h5v-4h-5zm-12-6h4v-5h-4zm6-5v5h4v-5zm-2 24v-5h-4v5zm-6-24a5.006 5.006 0 0 0 -5 5h5zm12 19h-4v5h4zm2 5a5.006 5.006 0 0 0 5-5h-5zm-14-5h-5a5.006 5.006 0 0 0 5 5zm8-6v4h4v-4zm6-8h5a5.006 5.006 0 0 0 -5-5zm5 8h-5v4h5z" />
                                                            </svg>
                                                            <p
                                                                class="absolute bottom-12 hidden rounded-lg bg-black px-2 py-1 text-white group-hover:block">
                                                                Table</p>
                                                        </button>
                                                    </div>
                                                    <!--END Graph Nav-->
                                                </div>
                                                <!--END graph head-->

                                                <!--graph view-->
                                                <div x-show="graf"
                                                    class="flex items-center justify-center py-1 text-gray-900">
                                                    <!--graph table-->
                                                    <div class="w-full px-5 py-1 text-gray-900"
                                                        x-init="$watch('cardOpen', value => value ? (cardData.countUp($refs.total, 0, 11602, null, 0.8), cardData.sessions.forEach((el, i) => cardData.countUp($refs[`device${i}`], 0, cardData.sessions[i].size, null, 1.6))) : null);
                                                        setTimeout(() => { cardOpen = true }, 100)">
                                                        <div class="flex w-full">
                                                            <div class="relative h-5 leading-none">
                                                                <button
                                                                    class="h-6 text-xl text-gray-900 focus:outline-none"
                                                                    @click.prevent="cardOpen=!cardOpen">
                                                                    <i class="mdi"
                                                                        :class="'mdi-chevron-' + (cardOpen ?
                                                                            'up' : 'down')"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="relative overflow-hidden transition-all duration-500"
                                                            x-ref="card"
                                                            x-bind:style="`max-height:${cardOpen?$refs.card.scrollHeight:0}px; opacity:${cardOpen?1:0}`">
                                                            <div>

                                                                <div class="pb-4 lg:pb-6">
                                                                    <div class="flex h-3 overflow-hidden rounded-full bg-gray-800 transition-all duration-500"
                                                                        :class="cardOpen ? 'w-full' : 'w-0'">
                                                                        <template
                                                                            x-for="(item,index) in cardData.sessions">
                                                                            <div class="h-full"
                                                                                :class="`bg-${item.color}`"
                                                                                :style="`width:${item.size}%`">
                                                                            </div>
                                                                        </template>
                                                                    </div>
                                                                </div>
                                                                <div class="-mx-4 flex">
                                                                    <template
                                                                        x-for="(item,index) in cardData.sessions">
                                                                        <div class="w-1/3 px-4"
                                                                            :class="{
                                                                                'border-l border-gray-700': index !==
                                                                                    0
                                                                            }">
                                                                            <div class="text-sm">
                                                                                <span
                                                                                    class="mr-1 inline-block h-2 w-2 rounded-full align-middle"
                                                                                    :class="`bg-${item.color}`">&nbsp;</span>
                                                                                <span
                                                                                    class="align-middle"
                                                                                    x-text="item.label">&nbsp;</span>
                                                                            </div>
                                                                            <div
                                                                                class="text-lg font-medium text-gray-800">
                                                                                <span x-text="item.size"
                                                                                    :x-ref="`device${index}`">0</span>%
                                                                            </div>
                                                                        </div>
                                                                    </template>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--END graph table-->
                                                </div>
                                                <!--END graph view-->

                                                <!--Table view-->
                                                <div x-show="table" class="text-gray-900">
                                                    <table class="mt-6 w-full text-center">
                                                        <thead class="">
                                                            <tr class="font-medium">
                                                                <th class="px-6 py-3">
                                                                    <div
                                                                        class="group relative flex items-center justify-center whitespace-nowrap">
                                                                        <svg class="h-8 text-traivis-500"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="Capa_1"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 24 24"
                                                                            style="enable-background:new 0 0 24 24;"
                                                                            xml:space="preserve"
                                                                            width="512"
                                                                            height="512">
                                                                            <g>
                                                                                <path
                                                                                    d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z" />
                                                                            </g>
                                                                        </svg>
                                                                        <p
                                                                            class="absolute bottom-12 hidden rounded-lg bg-black px-2 text-white group-hover:block">
                                                                            Facebook</p>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3">
                                                                    <div
                                                                        class="group relative flex items-center justify-center whitespace-nowrap">
                                                                        <svg class="h-8 text-sky-400"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="Capa_1"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 24 24"
                                                                            style="enable-background:new 0 0 24 24;"
                                                                            xml:space="preserve"
                                                                            width="512"
                                                                            height="512">
                                                                            <path
                                                                                id="Logo_00000038394049246713568260000012923108920998390947_"
                                                                                d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z" />
                                                                        </svg>
                                                                        <p
                                                                            class="absolute bottom-12 hidden rounded-lg bg-black px-2 text-white group-hover:block">
                                                                            Twitter</p>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3">
                                                                    <div
                                                                        class="group relative flex items-center justify-center whitespace-nowrap">
                                                                        <svg class="h-8 text-sky-500"
                                                                            fill="currentColor"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 24 24"
                                                                            style="enable-background:new 0 0 24 24;"
                                                                            xml:space="preserve"
                                                                            width="512"
                                                                            height="512">
                                                                            <g id="Artboard">
                                                                                <path
                                                                                    style="fill-rule:evenodd;clip-rule:evenodd;"
                                                                                    d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z    M17.562,8.161c-0.18,1.897-0.962,6.502-1.359,8.627c-0.168,0.9-0.5,1.201-0.82,1.23c-0.697,0.064-1.226-0.461-1.901-0.903   c-1.056-0.692-1.653-1.123-2.678-1.799c-1.185-0.781-0.417-1.21,0.258-1.911c0.177-0.184,3.247-2.977,3.307-3.23   c0.007-0.032,0.015-0.15-0.056-0.212s-0.174-0.041-0.248-0.024c-0.106,0.024-1.793,1.139-5.062,3.345   c-0.479,0.329-0.913,0.489-1.302,0.481c-0.428-0.009-1.252-0.242-1.865-0.442c-0.751-0.244-1.349-0.374-1.297-0.788   c0.027-0.216,0.324-0.437,0.892-0.663c3.498-1.524,5.831-2.529,6.998-3.015c3.333-1.386,4.025-1.627,4.477-1.635   C17.472,7.214,17.608,7.681,17.562,8.161z" />
                                                                            </g>
                                                                        </svg>
                                                                        <p
                                                                            class="absolute bottom-12 hidden rounded-lg bg-black px-2 text-white group-hover:block">
                                                                            Telegram</p>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3">
                                                                    <div
                                                                        class="group relative flex items-center justify-center whitespace-nowrap">
                                                                        <svg class="h-8 rounded-full bg-green-500 text-white"
                                                                            fill="currentColor"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 24 24"
                                                                            style="enable-background:new 0 0 24 24;"
                                                                            xml:space="preserve"
                                                                            width="512"
                                                                            height="512">
                                                                            <g id="WA_Logo">
                                                                                <g>
                                                                                    <path
                                                                                        style="fill-rule:evenodd;clip-rule:evenodd;"
                                                                                        d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z" />
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        <p
                                                                            class="absolute bottom-12 hidden rounded-lg bg-black px-2 text-white group-hover:block">
                                                                            whatsapp</p>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3">
                                                                    <div
                                                                        class="group relative flex items-center justify-center whitespace-nowrap">
                                                                        <svg class="h-8 text-red-500"
                                                                            fill="currentColor"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 24 24"
                                                                            style="enable-background:new 0 0 24 24;"
                                                                            xml:space="preserve"
                                                                            width="512"
                                                                            height="512">
                                                                            <g>
                                                                                <path
                                                                                    d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z" />
                                                                            </g>
                                                                        </svg>
                                                                        <p
                                                                            class="absolute bottom-12 hidden rounded-lg bg-black px-2 text-white group-hover:block">
                                                                            Pininterest</p>
                                                                    </div>
                                                                </th>
                                                                <th class="px-6 py-3">
                                                                    <div
                                                                        class="group relative flex items-center justify-center whitespace-nowrap">
                                                                        <svg class="h-8 text-sky-600"
                                                                            fill="currentColor"
                                                                            x="0px"
                                                                            y="0px"
                                                                            viewBox="0 0 24 24"
                                                                            style="enable-background:new 0 0 24 24;"
                                                                            xml:space="preserve"
                                                                            width="512"
                                                                            height="512">
                                                                            <g>
                                                                                <path id="Path_2525"
                                                                                    d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262" />
                                                                                <path id="Path_2520"
                                                                                    d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463" />
                                                                                <path id="Path_2526"
                                                                                    d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031" />
                                                                            </g>
                                                                        </svg>
                                                                        <p
                                                                            class="absolute bottom-12 hidden rounded-lg bg-black px-2 text-white group-hover:block">
                                                                            LinkedIn</p>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody class="cursor-pointer">
                                                            <tr class="hover:bg-traivis-50">
                                                                <template
                                                                    x-for="(item,index) in cardData.sessions">
                                                                    <td class="px-6 py-3">
                                                                        <span x-text="item.size"></span>
                                                                        <span>%</span>
                                                                    </td>
                                                                </template>
                                                            </tr>

                                                            <tr class="hover:bg-traivis-50">
                                                                <template
                                                                    x-for="(item,index) in cardData.sessions">
                                                                    <td class="px-6 py-3">
                                                                        <span
                                                                            x-text="cardData.size/100*item.size"></span>
                                                                        <span>slot</span>
                                                                    </td>
                                                                </template>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--END Table view-->

                                            </div>
                                            <!--END Graph stats Content-->

                                        </div>
                                        <!--END Graph-->

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/Card Content-->

                    </div>
                    <!--/ My MKT Manager-->
                @endif

            </div>
            <!--/Cards-->

        </div>
    </section>
    <!--End content-->

</div>

@section('styles')
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
@endsection
@section('scripts')
    <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js"
        integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>

    {{--  ///////////calender  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>

    <script>
        //--------------courses charts----------------
        // setup
        const dataCRecorded = {
            labels: @json($courses?->where('delivery_mode', 'recorded')?->pluck('title')),
            datasets: [


                //data2
                {
                    label: 'Last Month',
                    data: @json($courses?->where('delivery_mode', 'recorded')?->pluck('course_views_count')),
                    pointRadius: 3,
                    pointHoverRadius: 7,

                    backgroundColor: [
                        'rgb(192,132,252)',
                    ],

                    borderColor: [
                        'rgb(139,92,246)',
                    ],
                },

                //data2
                {
                    label: 'Last Year',
                    data: [10, 14, 40, 28, 30, 55, 60],
                    pointRadius: 4,
                    pointHoverRadius: 7,

                    backgroundColor: [
                        'rgb(96,165,250)',
                    ],

                    borderColor: [
                        'rgb(59,130,246)',
                    ],
                },

                //data1
                {
                    label: 'Total Income',
                    data: [14, 17, 75, 50, 60, 80, 100],
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    borderWidth: 1,

                    backgroundColor: [
                        'rgb(134,239,172)',
                    ],

                    borderColor: [
                        'rgb(22,163,74)',
                    ]
                }
            ]
        };

        // config
        const configCRecorded = {
            type: 'line',
            data: dataCRecorded,
            options: {
                borderWidth: 0,
                responsive: true,
                scales: {
                    x: {
                        ticks: {
                            callback: function(value) {
                                return this.getLabelForValue(value).substr(0, 7);
                            }
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    },
                    y: {
                        grid: {
                            drawOnChartArea: false
                        },
                        beginAtZero: false
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 20,
                        },
                    },
                    title: {
                        display: false,
                        text: 'Courses'
                    },
                    tooltip: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 20,
                        backgroundColor: '#536c94',
                        boxPadding: 10,
                        cornerRadius: 20,
                        caretSize: 13,
                        caretPadding: 15,
                        titleAlign: 'center',
                        position: 'nearest',
                        titleFont: {
                            size: 16,
                            weight: 'bolder',
                        },
                        interaction: {
                            mode: 'nearest'
                        }
                    }
                }
            },
        };
        //--------------courses charts----------------
        // setup
        const dataCLive = {
            labels: @json($courses?->where('delivery_mode', 'live')?->pluck('title')),
            datasets: [


                //data2
                {
                    label: 'Last Month',
                    data: @json($courses?->where('delivery_mode', 'live')?->pluck('course_views_count')),
                    pointRadius: 3,
                    pointHoverRadius: 7,

                    backgroundColor: [
                        'rgb(192,132,252)',
                    ],

                    borderColor: [
                        'rgb(139,92,246)',
                    ],
                },

                //data2
                {
                    label: 'Last Year',
                    data: [10, 14, 40, 28, 30, 55, 60],
                    pointRadius: 4,
                    pointHoverRadius: 7,

                    backgroundColor: [
                        'rgb(96,165,250)',
                    ],

                    borderColor: [
                        'rgb(59,130,246)',
                    ],
                },

                //data1
                {
                    label: 'Total Income',
                    data: [14, 17, 75, 50, 60, 80, 100],
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    borderWidth: 1,

                    backgroundColor: [
                        'rgb(134,239,172)',
                    ],

                    borderColor: [
                        'rgb(22,163,74)',
                    ]
                }
            ]
        };

        // config
        const configCLive = {
            type: 'line',
            data: dataCLive,
            options: {
                borderWidth: 0,
                responsive: true,
                scales: {
                    x: {
                        ticks: {
                            callback: function(value) {
                                return this.getLabelForValue(value).substr(0, 7);
                            }
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    },
                    y: {
                        grid: {
                            drawOnChartArea: false
                        },
                        beginAtZero: false
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 20,
                        },
                    },
                    title: {
                        display: false,
                        text: 'Courses'
                    },
                    tooltip: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 20,
                        backgroundColor: '#536c94',
                        boxPadding: 10,
                        cornerRadius: 20,
                        caretSize: 13,
                        caretPadding: 15,
                        titleAlign: 'center',
                        position: 'nearest',
                        titleFont: {
                            size: 16,
                            weight: 'bolder',
                        },
                        interaction: {
                            mode: 'nearest'
                        }
                    }
                }
            },
        };


        // render Recorded courses
        const CRecorded = new Chart(
            document.getElementById('CRecorded'), configCRecorded
        );

        // render Live courses
        const CLive = new Chart(
            document.getElementById('CLive'), configCLive
        );

        // render FtoF courses
        const CFtoF = new Chart(
            document.getElementById('CFtoF'), configCRecorded
        );

        // render draft courses
        const CDraft = new Chart(
            document.getElementById('CDraft'), configCRecorded
        );
        //------------------------------










        //--------------freelance charts----------------
        // setup
        const dataFRecorded = {
            labels: ['python for beginners', 'HTML5 CSS3', 'Web Design Basics',
                'Grapghic Design Basics'
            ],
            datasets: [


                //Month
                {
                    label: 'Last Month',
                    data: [5, 7, 3, 18],
                    pointRadius: 3,
                    pointHoverRadius: 7,
                    fill: true,

                    backgroundColor: [
                        'rgb(237,233,254)',
                    ],

                    borderColor: [
                        'rgb(139,92,246)',
                    ],
                },

                //Year
                {
                    label: 'Last Year',
                    data: [10, 14, 40, 28],
                    pointRadius: 4,
                    pointHoverRadius: 7,
                    fill: true,

                    backgroundColor: [
                        'rgb(219,234,254)',
                    ],

                    borderColor: [
                        'rgb(59,130,246)',
                    ],
                },

                //Total
                {
                    label: 'Total Income',
                    data: [14, 17, 75, 50],
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    fill: true,

                    backgroundColor: [
                        'rgb(220,252,231)',
                    ],

                    borderColor: [
                        'rgb(22,163,74)',
                    ]
                },

            ]
        };

        // config
        const configFRecorded = {
            type: 'line',
            data: dataFRecorded,
            options: {
                tension: 0.4,
                borderWidth: 1,
                responsive: true,
                scales: {
                    x: {
                        ticks: {
                            callback: function(value) {
                                return this.getLabelForValue(value).substr(0, 7);
                            }
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    },
                    y: {
                        stacked: false,
                        grid: {
                            drawOnChartArea: false
                        },
                        beginAtZero: true
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 20,
                        },
                    },
                    title: {
                        display: false,
                        text: 'Freelance Jobs'
                    },
                    tooltip: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 20,
                        backgroundColor: '#536c94',
                        boxPadding: 10,
                        cornerRadius: 20,
                        caretSize: 13,
                        caretPadding: 15,
                        titleAlign: 'center',
                        position: 'nearest',
                        titleFont: {
                            size: 16,
                            weight: 'bolder',
                        },
                        interaction: {
                            mode: 'index'
                        }
                    }
                }
            },
        };


        // render Recorded freelance
        const FRecorded = new Chart(
            document.getElementById('FRecorded'), configFRecorded
        );

        // render Live freelance
        const FLive = new Chart(
            document.getElementById('FLive'), configFRecorded
        );

        // render FtoF freelance
        const FFtoF = new Chart(
            document.getElementById('FFtoF'), configFRecorded
        );

        // render draft freelance
        const FDraft = new Chart(
            document.getElementById('FDraft'), configFRecorded
        );
        //------------------------------
    </script>

    <script>
        let cardData = function() {
            return {
                countUp: function(target, startVal, endVal, decimals, duration) {
                    const countUp = new CountUp(target, startVal || 0, endVal, decimals || 0,
                        duration || 2);
                    countUp.start();
                },
                size: 20,
                sessions: [{
                    "label": "Facebook",
                    "size": 20,
                    "color": "blue-500"
                }, {
                    "label": "Twitter",
                    "size": 10,
                    "color": "sky-400"
                }, {
                    "label": "Telegram",
                    "size": 30,
                    "color": "sky-500"
                }, {
                    "label": "Whatsapp",
                    "size": 10,
                    "color": "green-500"
                }, {
                    "label": "Pininterest",
                    "size": 20,
                    "color": "red-500"
                }, {
                    "label": "LinkedIn",
                    "size": 30,
                    "color": "sky-600"
                }]
            }
        }
    </script>
@endsection
