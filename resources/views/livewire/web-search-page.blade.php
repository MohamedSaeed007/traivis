<div class="mx-auto flex w-full">
    <div class="relative flex w-full flex-col">
        <div class="flex flex-col md:flex-row">

            <!--Left-->
            <div class="relative sticky top-[100px] z-40 w-full bg-white p-4 md:w-1/5">

                <!--Tabs Buttons-->
                <div class="sticky top-[100px] z-40">
                    <div class="sm:block">
                        <div class="flex h-full items-center justify-center bg-white">
                            <div
                                class="md:overflow-none mb-5 flex w-full flex-row items-center justify-start gap-x-4 gap-y-7 overflow-x-auto py-3 text-sm font-semibold text-gray-600 md:flex-col md:justify-center md:py-0">

                                <a href="#hints"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                        </path>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2">Hints</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $hints ? $hints->count() : 0 }}</p>
                                    </span>
                                </a>

                                <a href="#notes"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                        </path>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2">Notes</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $notes ? $notes->count() : 0 }}</p>
                                    </span>
                                </a>

                                <a href="#courses"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0" viewBox="0 0 24 24"
                                        xml:space="preserve">
                                        <path
                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                        </path>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2">Courses</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $courses ? $courses->count() : 0 }}</p>
                                    </span>
                                </a>

                                <a href="#people"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0" x="0px"
                                        y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <circle cx="256" cy="128" r="128">
                                            </circle>
                                            <path
                                                d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2">People</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $people ? $people->count() : 0 }}</p>
                                    </span>
                                </a>

                                {{--
                                <a href="#institutions"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="m4.343 11h-4.343a5.006 5.006 0 0 1 5-5h6v-4.364a1.637 1.637 0 0 1 2.33-1.482l3.2 1.5a1 1 0 0 1 0 1.7l-3.53 1.646v1h6a5.006 5.006 0 0 1 5 5h-4.343a3 3 0 0 1 -2.092-.849l-2.736-2.979a4.074 4.074 0 0 0 -5.687.03l-2.678 2.919a3.017 3.017 0 0 1 -2.121.879zm7.657 8a1 1 0 0 0 -1 1v4h2v-4a1 1 0 0 0 -1-1zm7.657-6h4.343v8a3 3 0 0 1 -3 3h-6v-4a3 3 0 0 0 -6 0v4h-6a3 3 0 0 1 -3-3v-8h4.343a4.994 4.994 0 0 0 3.565-1.495l2.678-2.919a2.07 2.07 0 0 1 2.8-.03l2.738 2.979a4.968 4.968 0 0 0 3.533 1.465zm-13.657 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm0-4a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm8-4a2 2 0 1 0 -2 2 2 2 0 0 0 2-2zm7 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm-1-5h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2z">
                                        </path>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2">Institutions</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $institutions ? $institutions->count() : 0 }}</p>
                                    </span>
                                </a>
--}}

                                <a href="#educators"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                        </path>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2"> Educators</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $freelancers ? $freelancers->count() : 0 }}</p>
                                    </span>
                                </a>

                                <a href="#blogs"
                                    class="flex w-40 cursor-pointer flex-col items-center justify-between rounded-lg border border-gray-400 bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:flex-row md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z">
                                        </path>
                                        <path
                                            d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z">
                                        </path>
                                        <path
                                            d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z">
                                        </path>
                                    </svg>
                                    <span class="flex w-full items-center justify-between pl-1">
                                        <span class="flex flex-row items-center">
                                            <p class="px-2">Blogs</p>
                                        </span>
                                        <p class="rounded-full border px-2 text-base">
                                            {{ $blogs ? $blogs->count() : 0 }}</p>
                                    </span>
                                </a>

                                <button
                                    class="flex w-fit cursor-pointer items-center justify-center rounded-lg border border-transparent bg-white p-1.5 pl-2 font-bold text-gray-700 transition-all hover:border-traivis-500 hover:text-traivis-600 focus:border-traivis-500 focus:text-traivis-600 md:rounded-full">
                                    <svg fill="currentColor" class="h-5 w-5 shrink-0" x="0px"
                                        y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z">
                                            </path>
                                        </g>
                                    </svg>
                                    <p class="whitespace-nowrap px-2">Clear All</p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Tabs Buttons-->

            </div>
            <!--/ Left-->

            <!--Middle-->
            <div class="relative mx-auto w-full px-5 md:w-1/2 lg:w-1/2">
                <div class="hover:overflow container flex flex-col gap-y-20 lg:max-w-3xl">

                    <!--Hints Vertical-->
                    <div id="hints"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                </path>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">Hints</h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <div class="mx-auto my-5 flex flex-col justify-center gap-y-16">
                            @if ($hints)
                                @forelse ($hints as $hint)
                                    <div @click="$dispatch('vid-modal', { vidModalImgSrc: '{{ $hint->getFirstMediaUrl() }}', vidModalImgDesc: '' })"
                                        class="group relative mb-5 flex h-[720px] w-[460px] cursor-pointer items-center justify-center rounded-lg bg-gray-100 shadow-md shadow-slate-500 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                                        <!--user-->
                                        <div
                                            class="absolute bottom-5 left-1/2 z-10 flex -translate-x-1/2 items-center gap-x-3 space-x-3">

                                            <!-- User Avatar -->
                                            <div class="relative">
                                                <div class="flex-shrink-0">
                                                    <img alt="" class="h-10 w-10 rounded-full"
                                                        src="{{ $hint->business ? $hint->business?->avatar : $hint->user?->avatar }}">
                                                </div>
                                                <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                                    title="User is online"></div>
                                            </div>
                                            <!-- /User Avatar -->

                                            <!-- Username -->
                                            <div class="min-w-0 flex-1 text-white">
                                                <div class="flex h-8 flex-row">

                                                    @if ($hint->business)
                                                        <a href="{{ route('business-profile-social', $hint->business->id) }}"
                                                            target="_blank">
                                                            <h2
                                                                class="text-lg font-semibold drop-shadow-md">
                                                                {{ $hint->business->business_name }}
                                                            </h2>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('user-profile-social', $hint->user->id) }}"
                                                            target="_blank">
                                                            <h2
                                                                class="text-lg font-semibold drop-shadow-md">
                                                                {{ $hint->user->name }}</h2>
                                                        </a>
                                                    @endif
                                                    <svg class="my-auto ml-2 h-5 text-traivis-500"
                                                        fill="currentColor" height="24"
                                                        version="1.1" viewBox="0 0 24 24"
                                                        width="24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <path
                                                            d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                                        </path>
                                                    </svg>

                                                </div>
                                            </div>
                                            <!-- / Username -->

                                        </div>
                                        <!--/user-->
                                        <!--video-->
                                        <img class="pointer-events-none h-[720px] rounded-lg object-cover object-center transition-all group-hover:opacity-80"
                                            src="{{ asset('assets/images/wallpaper.jpg') }}">
                                        <!--video-->
                                        <svg class="absolute left-1/2 top-1/2 z-10 z-20 h-8 -translate-x-1/2 -translate-y-1/2 text-white transition-all group-hover:scale-125"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                            </path>
                                        </svg>
                                        <button class="absolute inset-0 focus:outline-none"
                                            type="button">
                                            <span class="sr-only">View Hint</span>
                                        </button>
                                    </div>
                                @empty
                                @endforelse
                            @endif

                        </div>
                        <!--/Content-->

                    </div>
                    <!--Hints Vertical-->

                    <!--Note-->
                    <div id="notes"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                </path>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">Notes</h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <div class="mx-auto my-5 flex flex-col justify-center gap-y-16">
                            @if ($notes)
                                @forelse ($notes as  $notePost)
                                    <ul class="" role="list">
                                        <li
                                            class="mb-20 bg-white p-4 shadow transition-colors  sm:rounded-lg">
                                            <article>
                                                <!--------- feed part--------->
                                                <div class="relative">
                                                    @if ($notePost->type == 'course')
                                                        <!--------- reibbon--------->
                                                        <div class="absolute right-10 top-0 -mt-4">
                                                            <svg baseProfile="tiny"
                                                                class="h-auto w-10 text-traivis-500"
                                                                fill="currentColor" id="Layer_1"
                                                                overflow="visible" version="1.2"
                                                                viewBox="0 0 355.6 512" x="0px"
                                                                xml:space="preserve"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                y="0px">
                                                                <path
                                                                    d="M21.9-1.2v482.1c0,23.3,25.9,37.3,45.4,24.5l93-61.1c9.7-6.4,22.3-6.4,32-0.1l96,61.9
                                                     c19.5,12.6,45.2-1.4,45.2-24.6V-1.2H21.9z M239.7,305c0,16.9-11.1,31.9-27.2,36.9c-11.3,3.2-22.9,4.8-34.7,4.7
                                                     c-11.7,0.1-23.4-1.4-34.7-4.7c-16.2-5-27.2-20-27.2-36.9v-20.9l33.9,16.2c8.6,5,18.3,7.5,28.2,7.5c9.5,0.1,18.9-2.4,27.2-7.2
                                                     l34.5-16.5V305z M270.6,323.5c0,4.2-3.5,7.7-7.7,7.7c-4.2,0-7.7-3.4-7.7-7.7v-63.8L197.9,287c-6.1,3.6-12.9,5.4-19.9,5.4
                                                     c-7.4,0-14.6-2-20.9-5.7L100,259.5c-13.9-7.5-19.1-24.8-11.6-38.6c2.5-4.7,6.3-8.6,11-11.3c0.2-0.1,0.4-0.3,0.7-0.4l57.6-27.5
                                                     c12.7-7.2,28.3-7.1,40.9,0.4l57.1,27.2c9.1,5.1,14.9,14.6,15,25.1V323.5z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        <!--------- reibbon--------->
                                                    @endif
                                                    <!---------feed header--------->
                                                    <div class="flex space-x-3">
                                                        <div class="relative">
                                                            <!-- User Avatar -->
                                                            <div class="flex-shrink-0">
                                                                <img alt=""
                                                                    class="h-10 w-10 rounded-full"
                                                                    src="{{ $notePost->business ? $notePost->business?->avatar : $notePost->user?->avatar }}">

                                                            </div>
                                                            <!-- Online Status Dot -->
                                                            <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                                                title="User is online"></div>
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <div class="flex h-8 flex-row">
                                                                <!-- Username -->
                                                                @if ($notePost->business)
                                                                    <a href="{{ route('business-profile-social', $notePost->business->id) }}"
                                                                        target="_blank">
                                                                        <h2
                                                                            class="text-lg font-semibold">
                                                                            {{ $notePost->business->business_name }}
                                                                        </h2>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('user-profile-social', $notePost->user->id) }}"
                                                                        target="_blank">
                                                                        <h2
                                                                            class="text-lg font-semibold">
                                                                            {{ $notePost->user->name }}
                                                                        </h2>
                                                                    </a>
                                                                @endif
                                                                <!-- User Verified -->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    class="my-auto ml-2 h-5 text-traivis-500"
                                                                    width="24" height="24"
                                                                    viewbox="0 0 24 24"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <p class="text-sm text-gray-500">
                                                                <a href="#"
                                                                    class="hover:underline">
                                                                    <x-tooltip-arrow-up
                                                                        :text="$notePost->created_at->format(
                                                                            'l, F j, Y \a\t g:i A',
                                                                        )">
                                                                        {{ $notePost->created_at->shortAbsoluteDiffForHumans() }}
                                                                    </x-tooltip-arrow-up>
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!---------END feed header--------->
                                                    @if ($notePost->type == 'course')
                                                        <!--------- feed content--------->
                                                        <div
                                                            class="flex flex-row items-center justify-center justify-between justify-items-center">
                                                            <h2 class="py-4 text-lg font-bold font-semibold"
                                                                id="question-title-81614">
                                                                {{ $notePost->title }}</h2>
                                                            <div
                                                                class="flex flex-row items-center justify-between justify-items-center space-x-2">
                                                                <span class="">
                                                                    <x-tooltip-arrow class="">
                                                                        <x-slot name="text">
                                                                            Trending
                                                                        </x-slot>
                                                                        <svg class="h-5 w-5 text-red-500 "
                                                                            fill="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.746,18.254c0-1.5-1.031-3.55-2.9-5.773A1.088,1.088,0,0,0,12,12.092h0a1.117,1.117,0,0,0-.854.391h0C9.1,14.88,8.1,17,8.273,18.625a3.668,3.668,0,0,0,1.582,2.557A3.622,3.622,0,0,0,12,22,3.75,3.75,0,0,0,15.746,18.254Z">
                                                                            </path>
                                                                            <path
                                                                                d="M16.629,2.9c-.786-.668-1.611-1.368-2.451-2.132A2.952,2.952,0,0,0,11.8.028a2.847,2.847,0,0,0-2.032,1.3A20.39,20.39,0,0,0,7.276,7.776,6.233,6.233,0,0,1,6.8,6.961a2,2,0,0,0-3.3-.473A9.069,9.069,0,0,0,.915,12.909,10.979,10.979,0,0,0,9.136,23.64a11.651,11.651,0,0,0,2.776.352,5.552,5.552,0,0,1-3.278-1.226,5.631,5.631,0,0,1-2.35-3.934c-.23-2.21.893-4.783,3.338-7.647h0A3.114,3.114,0,0,1,12,10.092h.01a3.1,3.1,0,0,1,2.366,1.1c1.538,1.827,3.373,4.535,3.373,7.061A5.749,5.749,0,0,1,12.39,23.98a11.056,11.056,0,0,0,10.7-11.065C23.085,8.385,20.093,5.845,16.629,2.9Z">
                                                                            </path>
                                                                        </svg>
                                                                    </x-tooltip-arrow>
                                                                </span>

                                                                <span class="">
                                                                    <x-tooltip-arrow class="">
                                                                        <x-slot name="text">
                                                                            Sponsored
                                                                        </x-slot>

                                                                        <svg class="h-5 w-5 text-traivis-500"
                                                                            fill="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M18,14.5c-.035,1.971-2.965,1.971-3,0,.035-1.971,2.965-1.971,3,0Zm-11.056-.5h2.112l-1.056-3.52-1.056,3.52ZM24,7v10c0,2.757-2.243,5-5,5H5c-2.757,0-5-2.243-5-5V7C0,4.243,2.243,2,5,2h14c2.757,0,5,2.243,5,5Zm-12.042,9.713l-3-10c-.247-.933-1.669-.932-1.916,0l-3,10c-.37,1.254,1.535,1.826,1.916,.574l.386-1.287h3.312l.386,1.287c.158,.534,.73,.83,1.245,.671,.529-.159,.83-.716,.671-1.245ZM20,7c-.006-1.308-1.994-1.307-2,0v4.351c-2.224-1.147-5.061,.638-5,3.149-.07,2.598,2.968,4.384,5.186,3.048,.49,.822,1.848,.414,1.814-.548V7Z">
                                                                            </path>
                                                                        </svg>
                                                                    </x-tooltip-arrow>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="relative w-full bg-white shadow-md  ">
                                                            <a class=""
                                                                href="{{ route('post.show', $notePost->id) }}">
                                                                <img alt="product image"
                                                                    class="mx-auto h-72 w-full object-cover"
                                                                    src="{{ $notePost->getFirstMediaUrl() }}"></a>
                                                            <!--------- course info icons--------->
                                                            <div
                                                                class="absolute bottom-0 left-0 top-0 flex flex-col justify-center justify-between border-r-2 border-gray-50 border-opacity-50 bg-gray-800 px-4 py-2 py-20 text-white opacity-70">

                                                                <div class="">
                                                                    <x-tooltip-arrow
                                                                        class="flex items-center">
                                                                        <x-slot name="text">
                                                                            Level
                                                                        </x-slot>

                                                                        <svg class="h-3 w-3"
                                                                            fill="currentColor"
                                                                            viewBox="0 0 512.051 512.051"
                                                                            xml:space="preserve"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M21.359,101.359h58.368c11.52,42.386,55.219,67.408,97.605,55.888c27.223-7.399,48.489-28.665,55.888-55.888h257.472   c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333H233.22C221.7,16.306,178.001-8.716,135.615,2.804   c-27.223,7.399-48.489,28.665-55.888,55.888H21.359c-11.782,0-21.333,9.551-21.333,21.333S9.577,101.359,21.359,101.359z">
                                                                            </path>
                                                                            <path
                                                                                d="M490.692,234.692h-58.368c-11.497-42.38-55.172-67.416-97.552-55.92c-27.245,7.391-48.529,28.674-55.92,55.92H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h257.493c11.497,42.38,55.172,67.416,97.552,55.92   c27.245-7.391,48.529-28.674,55.92-55.92h58.368c11.782,0,21.333-9.551,21.333-21.333   C512.025,244.243,502.474,234.692,490.692,234.692z">
                                                                            </path>
                                                                            <path
                                                                                d="M490.692,410.692H233.22c-11.52-42.386-55.219-67.408-97.605-55.888c-27.223,7.399-48.489,28.665-55.888,55.888H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h58.368c11.52,42.386,55.219,67.408,97.605,55.888   c27.223-7.399,48.489-28.665,55.888-55.888h257.472c11.782,0,21.333-9.551,21.333-21.333   C512.025,420.243,502.474,410.692,490.692,410.692z">
                                                                            </path>
                                                                        </svg>
                                                                        <span
                                                                            class="ml-2">Beginner</span>
                                                                    </x-tooltip-arrow>
                                                                </div>

                                                                <div class="">
                                                                    <x-tooltip-arrow
                                                                        class="flex items-center">
                                                                        <x-slot name="text">
                                                                            Trainer
                                                                        </x-slot>

                                                                        <svg class="h-3 w-3"
                                                                            fill="currentColor"
                                                                            viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path clip-rule="evenodd"
                                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                                                fill-rule="evenodd">
                                                                            </path>
                                                                        </svg>
                                                                        <span
                                                                            class="ml-2">Prasoon</span>
                                                                    </x-tooltip-arrow>
                                                                </div>

                                                                <div class="">
                                                                    <x-tooltip-arrow
                                                                        class="flex items-center">
                                                                        <x-slot name="text">
                                                                            Duration
                                                                        </x-slot>

                                                                        <svg class="h-3 w-3"
                                                                            fill="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M4,11H20c5.276-.138,5.272-7.863,0-8H4c-5.276,.138-5.272,7.863,0,8ZM22,7c0,1.103-.897,2-2,2h-4V5h4c1.103,0,2,.897,2,2Zm-2,6H4c-5.276,.138-5.272,7.863,0,8H20c5.276-.138,5.272-7.863,0-8Zm0,6H10v-4h10c2.629,.048,2.627,3.953,0,4Z">
                                                                            </path>
                                                                        </svg>
                                                                        <span class="ml-2">0</span>
                                                                    </x-tooltip-arrow>
                                                                </div>

                                                                <div class="">
                                                                    <div class="flex items-center">

                                                                        <x-tooltip-arrow class="flex">
                                                                            <x-slot name="text">
                                                                                mode
                                                                            </x-slot>

                                                                            <svg class="h-3 w-3"
                                                                                fill="currentColor"
                                                                                viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="m22 12v-7a5.006 5.006 0 0 0 -5-5h-10a5.006 5.006 0 0 0 -5 5v7z">
                                                                                </path>
                                                                                <path
                                                                                    d="m23 14h-22a1 1 0 0 0 0 2h10v4h-2a3 3 0 0 0 -3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h6a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0 -3-3h-2v-4h10a1 1 0 0 0 0-2z">
                                                                                </path>
                                                                            </svg>
                                                                        </x-tooltip-arrow>

                                                                        <x-tooltip-arrow
                                                                            class="group relative">
                                                                            <x-slot name="text">
                                                                                Live
                                                                            </x-slot>

                                                                            <span
                                                                                class="ml-1">LIV</span>,
                                                                        </x-tooltip-arrow>

                                                                        <x-tooltip-arrow
                                                                            class="group relative">
                                                                            <x-slot name="text">
                                                                                Recorded
                                                                            </x-slot>

                                                                            <span
                                                                                class="ml-1">REC</span>
                                                                        </x-tooltip-arrow>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!--------- END info icons--------->
                                                        </div>
                                                        <!---------END feed content--------->
                                                    @else
                                                        <!--------- feed content--------->
                                                        <h2 id="question-title-81614"
                                                            class="break-words py-4 text-lg font-medium text-gray-900  ">
                                                            {{ $notePost->post_content }}
                                                        </h2>
                                                        <div
                                                            class="w-full rounded-lg bg-slate-100 shadow-md transition-colors  ">
                                                            <a href="#" class="">
                                                                <img class="mx-auto h-fit w-full object-cover"
                                                                    src="{{ $notePost->getFirstMediaUrl() }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <!---------END feed content--------->
                                                    @endif
                                                </div>
                                                <!---------END feed part--------->
                                                @if ($notePost->type == 'course')
                                                    <!--------- course disc--------->
                                                    <div
                                                        class="mb-5 mt-4 flex flex-col gap-4 text-left text-gray-700 ">
                                                        <div class="flex">
                                                            <a href="#"><span
                                                                    class="font-medium">{{ $notePost->post_content }}</span></a>
                                                        </div>
                                                    </div>
                                                    <!---------END course disc--------->
                                                @endif
                                                <!--------- START Engagement part --------->
                                                <div
                                                    class="mb-5 flex flex-col justify-items-center border-b-2 border-gray-200">
                                                    <div
                                                        class="flex items-center justify-between justify-items-center gap-x-8 p-3 text-gray-400">
                                                        @if (auth()->check())
                                                            @livewire('like-button', ['post' => $notePost], key('like-button-note-' . $notePost->id))
                                                        @endif
                                                        <span
                                                            class="inline-flex items-center gap-x-8 text-sm">
                                                            <button type="button"
                                                                @click="
                                                                comments = document.getElementById('{{ strtolower(class_basename($notePost)) }}-{{ $notePost->id }}-comments')
                                                                if(comments.style.display=='none'){
                                                                    comments.style.display='block'

                                                                }
                                                                else  comments.style.display='none'

                                                                "
                                                                class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/chat-alt -->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    id="Layer_1" data-name="Layer 1"
                                                                    viewbox="0 0 24 24" width="512"
                                                                    height="512" fill="currentColor"
                                                                    aria-hidden="true" class="h-5 w-5">
                                                                    <path
                                                                        d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                                                                    </path>
                                                                </svg><span
                                                                    class="font-medium text-gray-900  ">{{ $notePost->comments->count() }}</span>
                                                                <span class="sr-only">replies</span>
                                                            </button>

                                                            <button type="button"
                                                                class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/eye -->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    x="0px" y="0px"
                                                                    viewbox="0 0 512.19 512.19"
                                                                    xml:space="preserve" width="512"
                                                                    height="512" fill="currentColor"
                                                                    aria-hidden="true" class="h-5 w-5">
                                                                    <g>
                                                                        <circle cx="256.095"
                                                                            cy="256.095"
                                                                            r="85.333"></circle>
                                                                        <path
                                                                            d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                                                        </path>
                                                                    </g>
                                                                </svg><span
                                                                    class="font-medium text-gray-900  ">{{ $notePost->postViews->count() }}</span>
                                                                <span class="sr-only">views</span>
                                                            </button>
                                                        </span>
                                                        @if (auth()->check())
                                                            @livewire('bookmark-button', ['postId' => $notePost->id], key('bookmark-button-note-' . $notePost->id))
                                                        @endif

                                                        @livewire('share-button', ['url' => route('post.show', $notePost->id), 'title' => $notePost->title], key('share-button-note-' . $notePost->id))
                                                    </div>
                                                </div>
                                                <!--------- END Engagement part--------->
                                                <!-- start comments part -->
                                                @livewire('comments', ['model' => $notePost], key('comments' . $notePost->id))
                                                <!-- end comments part -->
                                            </article>
                                        </li>
                                    </ul>
                                @empty
                                @endforelse
                            @endif

                        </div>
                        <!--/Content-->

                    </div>
                    <!--Note-->

                    <!--courses-->
                    <div id="courses"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24"
                                xml:space="preserve">
                                <path
                                    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                </path>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">courses</h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <ul class="m-6 mb-32 grid grid-cols-1 grid-cols-1 gap-6">
                            @if ($courses)
                                @forelse($courses as $course)
                                    <x-courses.card :course="$course">
                                        <x-slot name="courseIcon">
                                            <x-svg-icons.fi-brands-python class="h-6 w-6" />
                                        </x-slot>
                                    </x-courses.card>
                                @empty
                                    <li>No courses are found</li>
                                @endforelse

                            @endif

                        </ul>
                        <!--/Content-->

                    </div>
                    <!--courses-->

                    <!--people-->
                    <div id="people"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <circle cx="256" cy="128" r="128"></circle>
                                    <path
                                        d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                    </path>
                                </g>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">People</h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <div class="mx-auto my-5 flex w-full flex-col justify-center gap-y-2">
                            @if ($people)
                                @forelse ($people as $item)
                                    <div
                                        class="flex w-full items-center bg-white p-4 transition-all hover:border-l-4 hover:border-traivis-500 hover:bg-traivis-50">

                                        <img class="h-10 w-10 rounded-full" src="{{ $item?->avatar }}"
                                            alt="">
                                        <div class="ml-3 flex-1">
                                            <p class="text-sm font-medium text-gray-900">
                                                {{ $item?->first_name . ' ' . $item?->last_name }}</p>
                                            <p class="text-sm text-gray-500">{{ $item?->email }}</p>
                                        </div>

                                        <div class="relative flex flex-shrink-0 pr-4">
                                            @if (in_array($item->id, $connection))
                                                <span
                                                    class="group inline-flex justify-center rounded-full border border-gray-300 bg-green-500 p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                    type="button">
                                                    <svg class="h-5 w-5 text-gray-400 text-white"
                                                        fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <div
                                                        class="absolute top-10 z-10 hidden group-hover:inline-block">
                                                        <div
                                                            class="rounded-lg bg-gray-700 p-2 text-white">
                                                            Connected
                                                        </div>
                                                    </div>
                                                </span>
                                            @else
                                                <button wire:click="makeFollow({{ $item->id }})"
                                                    wire:key="make-follow-{{ $item->id }}"
                                                    class="group inline-flex justify-center rounded-full border border-gray-300 bg-white p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                                    type="button">
                                                    <svg class="h-5 w-5 text-gray-400 group-hover:text-white"
                                                        fill="currentColor" height="512"
                                                        id="Outline" viewBox="0 0 24 24"
                                                        width="512"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M23,11H21V9a1,1,0,0,0-2,0v2H17a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z">
                                                        </path>
                                                        <path
                                                            d="M9,12A6,6,0,1,0,3,6,6.006,6.006,0,0,0,9,12ZM9,2A4,4,0,1,1,5,6,4,4,0,0,1,9,2Z">
                                                        </path>
                                                        <path
                                                            d="M9,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,9,14Z">
                                                        </path>
                                                    </svg>

                                                    <div
                                                        class="absolute top-10 z-10 hidden group-hover:inline-block">
                                                        <div
                                                            class="rounded-lg bg-gray-700 p-2 text-white">
                                                            Connect
                                                        </div>
                                                    </div>

                                                </button>
                                            @endif

                                            <div class="relative" x-data="{ topen: false }">
                                                <button type="button" @click.away="topen = false"
                                                    @click="topen = !topen" @keydown="topen = false"
                                                    class="ml-2 inline-flex h-8 w-8 items-center justify-center rounded-full bg-transparent bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                    <span class="sr-only">Open options</span>

                                                    <svg class="h-5 w-5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <div class="absolute right-0 top-6 z-20 mt-2 w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                    x-show="topen"
                                                    x-transition:enter="transition ease-out duration-100"
                                                    x-transition:enter-end="transform opacity-100 scale-100"
                                                    x-transition:enter-start="transform opacity-0 scale-50"
                                                    x-transition:leave="transition ease-in duration-75"
                                                    x-transition:leave-end="transform opacity-0 scale-50"
                                                    x-transition:leave-start="transform opacity-100 scale-100"
                                                    style="display: none;">

                                                    <div class="py-1" role="none">

                                                        <a href="{{ route('chat-conversations', ['id' => $item->id, 'type' => 'p']) }}"
                                                            class="group flex items-center px-4 py-2 text-sm text-gray-700">

                                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                id="Layer_1" data-name="Layer 1"
                                                                viewBox="0 0 24 24" width="512"
                                                                height="512">
                                                                <path
                                                                    d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z">
                                                                </path>
                                                            </svg>
                                                            Message
                                                        </a>

                                                        <a class="group flex items-center px-4 py-2 text-sm text-gray-700"
                                                            href="{{ route('user-profile-social', ['id' => $item->id]) }}"
                                                            id="menu-item-1" role="menuitem"
                                                            tabindex="-1">

                                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                fill="currentColor" height="512"
                                                                viewBox="0 0 24 24" width="512"
                                                                xmlns="http://www.w3.org/2000/svg">
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
                                                            View Profile
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            @endif

                        </div>
                        <!--/Content-->

                    </div>
                    <!--people-->

                    {{--
                    <!--institutions -->
                    <div id="institutions"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="m4.343 11h-4.343a5.006 5.006 0 0 1 5-5h6v-4.364a1.637 1.637 0 0 1 2.33-1.482l3.2 1.5a1 1 0 0 1 0 1.7l-3.53 1.646v1h6a5.006 5.006 0 0 1 5 5h-4.343a3 3 0 0 1 -2.092-.849l-2.736-2.979a4.074 4.074 0 0 0 -5.687.03l-2.678 2.919a3.017 3.017 0 0 1 -2.121.879zm7.657 8a1 1 0 0 0 -1 1v4h2v-4a1 1 0 0 0 -1-1zm7.657-6h4.343v8a3 3 0 0 1 -3 3h-6v-4a3 3 0 0 0 -6 0v4h-6a3 3 0 0 1 -3-3v-8h4.343a4.994 4.994 0 0 0 3.565-1.495l2.678-2.919a2.07 2.07 0 0 1 2.8-.03l2.738 2.979a4.968 4.968 0 0 0 3.533 1.465zm-13.657 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm0-4a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm8-4a2 2 0 1 0 -2 2 2 2 0 0 0 2-2zm7 8a1 1 0 0 0 -1-1h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1zm-1-5h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2z">
                                </path>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">institutions </h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <div class="mx-auto my-5 flex flex-col justify-center gap-y-16">
                            @if ($institutions)
                                @forelse ($institutions as $institution)
                                    <div
                                        class="shadow-dashboard group mx-auto mt-5 w-[400px] items-center rounded-md border-b-2 border-t bg-white pt-3 text-center transition-colors hover:border-traivis-500  ">

                                        <div
                                            class="mb-[50px] flex items-center justify-between px-3 py-2 text-xs font-bold text-gray-400 transition-colors group-hover:text-cyan-500  ">
                                            <!-- Heroicon name: outline/fire -->
                                            <div class="flex flex-row items-center justify-start">

                                                <span class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        class="h-5 w-5 fill-cyan-500" version="1.1"
                                                        id="Layer_1" x="0px" y="0px"
                                                        viewBox="0 0 512 512" fill="currentColor"
                                                        data-name="Layer 1">
                                                        <path
                                                            d="M354.7,175.9h-87.4c-7.4-5.3-15.8-9.2-24.7-11.4v-7.2l65.9-30.8c8.8-5.4,11.5-16.9,6-25.7c-1.5-2.5-3.6-4.5-6-6l-59.7-28  c-15.3-7.1-33.5-0.5-40.6,14.8c-1.9,4.1-2.9,8.5-2.9,13v70.1c-8.9,2.2-17.2,6.1-24.6,11.4H93.4C41.8,176,0.1,217.8,0,269.3V456  c0,30.9,25.1,56,56,56h336.1c30.9,0,56-25.1,56-56V269.3C448,217.8,406.3,176,354.7,175.9z M407.3,250.6H367  c-14.8,0-29.1-5.9-39.6-16.4l-20.9-20.9h48.3C378.4,213.4,399.4,228.3,407.3,250.6z M93.4,213.3h48.3l-20.9,20.9  c-10.5,10.5-24.8,16.4-39.6,16.4H40.8C48.7,228.3,69.7,213.4,93.4,213.3z M242.7,474.7h-37.3v-56c0-10.3,8.4-18.7,18.7-18.7  s18.7,8.4,18.7,18.7V474.7z M392.1,474.7h-112v-56c0-30.9-25.1-56-56-56s-56,25.1-56,56v56H56c-10.3,0-18.7-8.4-18.7-18.7V288h43.7  c24.8,0.1,48.5-9.8,66-27.4l50.6-50.5c14.6-14.6,38.2-14.6,52.8,0l50.6,50.5c17.5,17.6,41.2,27.4,66,27.4h43.7v168  C410.7,466.3,402.4,474.7,392.1,474.7z M130.7,344c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7  H112C122.3,325.3,130.7,333.7,130.7,344z M130.7,418.6c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7  c0-10.3,8.4-18.7,18.7-18.7H112C122.3,400,130.7,408.3,130.7,418.6z M373.4,344c0,10.3-8.4,18.7-18.7,18.7h-18.7  c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7h18.7C365,325.3,373.4,333.7,373.4,344z M373.4,418.6c0,10.3-8.4,18.7-18.7,18.7  h-18.7c-10.3,0-18.7-8.4-18.7-18.7c0-10.3,8.4-18.7,18.7-18.7h18.7C365,400,373.4,408.3,373.4,418.6z M261.4,288  c0,20.6-16.7,37.3-37.3,37.3s-37.3-16.7-37.3-37.3s16.7-37.3,37.3-37.3S261.4,267.3,261.4,288z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="ml-2 rounded-full bg-cyan-500 p-1 px-2 text-white">Institution</span>
                                            </div>
                                            <div class="flex justify-end drop-shadow-md">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>

                                        <div
                                            class="-mt-7 mb-[10px] flex flex-col items-center justify-center border-b border-gray-100 px-4 ">
                                            <img class="mb-4 h-20 w-20 rounded-full object-cover"
                                                src="{{ $institution->avatar }}" alt="">
                                            <div
                                                class="flex min-w-0 flex-1 flex-row items-center justify-center">
                                                <a
                                                    href="{{ route('business-profile-social', ['id' => $institution->id]) }}">
                                                    <h1
                                                        class="mr-2 truncate font-bold text-gray-500 ">
                                                        {{ $institution->business_name }}</h1>
                                                </a>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    class="my-auto h-5 text-cyan-500 transition-colors "
                                                    version="1.1" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                                        class=""></path>
                                                </svg>
                                            </div>

                                            <button type="button"
                                                class="my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-400 shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-cyan-300 group-hover:border-cyan-500 group-hover:bg-cyan-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    version="1.1" id="Layer_1" x="0px"
                                                    y="0px" viewBox="0 0 512 512"
                                                    style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve" fill="currentColor"
                                                    class="-ml-1 mr-2 h-5 w-5 text-gray-400 transition-colors group-hover:text-white"
                                                    data-name="Layer 1">
                                                    <path
                                                        d="M354.7,175.9h-87.4c-7.4-5.3-15.8-9.2-24.7-11.4v-7.2l65.9-30.8c8.8-5.4,11.5-16.9,6-25.7c-1.5-2.5-3.6-4.5-6-6l-59.7-28  c-15.3-7.1-33.5-0.5-40.6,14.8c-1.9,4.1-2.9,8.5-2.9,13v70.1c-8.9,2.2-17.2,6.1-24.6,11.4H93.4C41.8,176,0.1,217.8,0,269.3V456  c0,30.9,25.1,56,56,56h336.1c30.9,0,56-25.1,56-56V269.3C448,217.8,406.3,176,354.7,175.9z M407.3,250.6H367  c-14.8,0-29.1-5.9-39.6-16.4l-20.9-20.9h48.3C378.4,213.4,399.4,228.3,407.3,250.6z M93.4,213.3h48.3l-20.9,20.9  c-10.5,10.5-24.8,16.4-39.6,16.4H40.8C48.7,228.3,69.7,213.4,93.4,213.3z M242.7,474.7h-37.3v-56c0-10.3,8.4-18.7,18.7-18.7  s18.7,8.4,18.7,18.7V474.7z M392.1,474.7h-112v-56c0-30.9-25.1-56-56-56s-56,25.1-56,56v56H56c-10.3,0-18.7-8.4-18.7-18.7V288h43.7  c24.8,0.1,48.5-9.8,66-27.4l50.6-50.5c14.6-14.6,38.2-14.6,52.8,0l50.6,50.5c17.5,17.6,41.2,27.4,66,27.4h43.7v168  C410.7,466.3,402.4,474.7,392.1,474.7z M130.7,344c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7  H112C122.3,325.3,130.7,333.7,130.7,344z M130.7,418.6c0,10.3-8.4,18.7-18.7,18.7H93.4c-10.3,0-18.7-8.4-18.7-18.7  c0-10.3,8.4-18.7,18.7-18.7H112C122.3,400,130.7,408.3,130.7,418.6z M373.4,344c0,10.3-8.4,18.7-18.7,18.7h-18.7  c-10.3,0-18.7-8.4-18.7-18.7s8.4-18.7,18.7-18.7h18.7C365,325.3,373.4,333.7,373.4,344z M373.4,418.6c0,10.3-8.4,18.7-18.7,18.7  h-18.7c-10.3,0-18.7-8.4-18.7-18.7c0-10.3,8.4-18.7,18.7-18.7h18.7C365,400,373.4,408.3,373.4,418.6z M261.4,288  c0,20.6-16.7,37.3-37.3,37.3s-37.3-16.7-37.3-37.3s16.7-37.3,37.3-37.3S261.4,267.3,261.4,288z">
                                                    </path>
                                                    <path
                                                        d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                                                    </path>
                                                </svg>
                                                <span
                                                    class="text-gray-500 transition-colors group-hover:text-white  ">Follow
                                                </span>

                                            </button>

                                        </div>

                                        <div
                                            class="flex items-center justify-between bg-gray-50 group-hover:bg-cyan-100">

                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-cyan-500">
                                                    <p
                                                        class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            id="Layer_1" data-name="Layer 1"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512" fill="currentColor"
                                                            aria-hidden="true" class="mr-2 h-3 w-3">
                                                            <path
                                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                                            </path>
                                                        </svg>
                                                        <span>420 </span>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-cyan-500   ">
                                                    <p
                                                        class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            version="1.1" id="Capa_1"
                                                            x="0px" y="0px"
                                                            viewBox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            xml:space="preserve" width="512"
                                                            height="512" fill="currentColor"
                                                            aria-hidden="true" class="mr-2 h-3 w-3">
                                                            <g>
                                                                <circle cx="256" cy="128"
                                                                    r="128">
                                                                </circle>
                                                                <path
                                                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span>20k </span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                @empty
                                @endforelse
                            @endif

                        </div>
                        <!--/Content-->

                    </div>
                    <!--institutions -->
--}}

                    <!--Educator-->
                    <div id="educators"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                </path>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">Educators</h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <div class="mx-auto my-5 flex flex-col justify-center gap-y-16">
                            @if ($freelancers)
                                @forelse ($freelancers as $freelancer)
                                    <div
                                        class="shadow-dashboard group mx-auto mt-5 w-[400px] items-center rounded-md border-b-2 border-t bg-white pt-3 text-center transition-colors hover:border-traivis-500  ">

                                        <div
                                            class="mb-[50px] flex items-center justify-between px-3 py-2 text-xs font-bold text-gray-400 transition-colors group-hover:text-indigo-500  ">
                                            <!-- Heroicon name: outline/fire -->
                                            <div class="flex flex-row items-center justify-start">

                                                <span class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 fill-indigo-500" id="Layer_1"
                                                        data-name="Layer 1" viewBox="0 0 24 24"
                                                        width="512" height="512">
                                                        <path
                                                            d="M12,9c-2.481,0-4.5-2.019-4.5-4.5S9.519,0,12,0s4.5,2.019,4.5,4.5-2.019,4.5-4.5,4.5Zm10.204,2.162c-1.141-.953-2.629-1.348-4.157-1.069l-1.764,.432c-1.902,.347-3.283,2.002-3.283,3.936v7.467c-.664,.097-1.336,.097-2,0v-7.467c0-1.934-1.381-3.589-3.226-3.923l-1.88-.457c-1.464-.263-2.956,.128-4.099,1.081-1.142,.953-1.796,2.352-1.796,3.838v2.792c0,2.417,1.727,4.486,4.105,4.919l6.285,1.143c.534,.097,1.071,.146,1.609,.146s1.075-.048,1.609-.146l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.792c0-1.487-.654-2.886-1.796-3.838Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span
                                                    class="ml-2 rounded-full bg-indigo-500 p-1 px-2 text-white">Educator</span>
                                            </div>
                                            <div class="flex justify-end drop-shadow-md">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" xml:space="preserve"
                                                    fill="currentColor" class="w-4 text-yellow-500">
                                                    <path
                                                        d="M1.327,12.4,4.887,15,3.535,19.187A3.178,3.178,0,0,0,4.719,22.8a3.177,3.177,0,0,0,3.8-.019L12,20.219l3.482,2.559a3.227,3.227,0,0,0,4.983-3.591L19.113,15l3.56-2.6a3.227,3.227,0,0,0-1.9-5.832H16.4L15.073,2.432a3.227,3.227,0,0,0-6.146,0L7.6,6.568H3.231a3.227,3.227,0,0,0-1.9,5.832Z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>

                                        <div
                                            class="-mt-7 mb-[10px] flex flex-col items-center justify-center border-b border-gray-100 px-4 ">
                                            <img class="mb-4 h-20 w-20 rounded-full object-cover"
                                                src="{{ $freelancer->avatar }}" alt="">
                                            <div
                                                class="flex min-w-0 flex-1 flex-row items-center justify-center">
                                                <a
                                                    href="{{ route('business-profile-social', ['id' => $freelancer->id]) }}">
                                                    <h1
                                                        class="mr-2 truncate font-bold text-gray-500 ">
                                                        {{ $freelancer->business_name }}</h1>
                                                </a>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    class="my-auto h-5 text-indigo-500 transition-colors "
                                                    version="1.1" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"
                                                        class=""></path>
                                                </svg>
                                            </div>

                                            <button type="button"
                                                class="my-3 inline-flex justify-center rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-400 shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-300 group-hover:border-indigo-500 group-hover:bg-indigo-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    version="1.1" id="Layer_1" x="0px"
                                                    y="0px" viewBox="0 0 512 512"
                                                    style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve" fill="currentColor"
                                                    class="-ml-1 mr-2 h-5 w-5 text-gray-400 transition-colors group-hover:text-white">
                                                    <path
                                                        d="M224.4,231.4c111-2.9,111-165.4,0-168.3C113.5,66,113.5,228.5,224.4,231.4z M224.4,100.5c61.5,1.1,61.4,92.4,0,93.5  C163,192.9,163,101.6,224.4,100.5z M415.3,271.9c-21.4-17.8-49.4-25.2-76.7-20.2l-71.5,13c-17.1,3.1-31.9,11.9-42.7,24.1  c-10.8-12.3-25.6-21-42.7-24.1l-71.5-13c-27.3-4.9-55.3,2.4-76.6,20.2S0,315.9,0,343.7v52.2c0,45.2,32.3,83.9,76.8,92l117.5,21.4  c20,3.6,40.2,3.6,60.2,0l117.6-21.4c44.5-8.1,76.8-46.8,76.8-92v-52.2C448.9,315.9,436.6,289.7,415.3,271.9L415.3,271.9z   M205.7,473.3c-1.6-0.2-3.1-0.5-4.7-0.8L83.5,451.1c-26.7-4.9-46.1-28.1-46.1-55.2v-52.2c0-16.7,7.4-32.4,20.2-43.1  c12.8-10.7,29.7-15.1,46-12.1l71.5,13c17.8,3.2,30.7,18.7,30.7,36.8V473.3z M411.5,395.9c0,27.1-19.4,50.4-46.1,55.2l-117.6,21.4  c-1.6,0.3-3.1,0.5-4.7,0.8v-135c0-18.1,12.9-33.6,30.7-36.8l71.5-13c16.4-3,33.2,1.4,46,12.1c12.8,10.7,20.1,26.4,20.1,43.1V395.9  L411.5,395.9z">
                                                    </path>
                                                    <path
                                                        d="M491,63.8h-42.1V21.7c0-11.6-9.4-21-21-21c-11.6,0-21,9.4-21,21v42.1h-42.1c-11.6,0-21,9.4-21,21s9.4,21,21,21h42.1V148  c0,11.6,9.4,21,21,21c11.6,0,21-9.4,21-21v-42.1H491c11.6,0,21-9.4,21-21S502.6,63.8,491,63.8z">
                                                    </path>
                                                </svg>
                                                <span
                                                    class="text-gray-500 transition-colors group-hover:text-white  ">Follow
                                                </span>

                                            </button>

                                        </div>

                                        <div
                                            class="flex items-center justify-between bg-gray-50 group-hover:bg-traivis-100">

                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-indigo-500   ">
                                                    <p
                                                        class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            id="Layer_1" data-name="Layer 1"
                                                            viewBox="0 0 24 24" width="512"
                                                            height="512" fill="currentColor"
                                                            aria-hidden="true" class="mr-2 h-3 w-3">
                                                            <path
                                                                d="M15.707,8.293c.189,.188,.293,.439,.293,.707s-.104,.518-.293,.707l-5.707,5.707c-.378,.378-.88,.586-1.414,.586h-.586v-.586c0-.526,.214-1.042,.586-1.414l5.707-5.707c.391-.39,1.023-.39,1.414,0Zm8.293,4.047v6.66c0,2.757-2.243,5-5,5h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312Zm-6-3.34c0-.801-.313-1.555-.879-2.121-1.17-1.17-3.072-1.17-4.242,0l-5.707,5.707c-.756,.755-1.172,1.76-1.172,2.828v1.586c0,.552,.447,1,1,1h1.586c1.068,0,2.073-.417,2.828-1.172l5.707-5.707c.566-.567,.879-1.32,.879-2.122Z">
                                                            </path>
                                                        </svg>
                                                        <span>420 </span>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="w-full md:w-1/2">

                                                <div
                                                    class="flex bg-white text-center text-gray-500 transition-colors group-hover:text-indigo-500   ">
                                                    <p
                                                        class="mx-auto mb-1 flex flex-row items-center text-sm">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            version="1.1" id="Capa_1"
                                                            x="0px" y="0px"
                                                            viewBox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            xml:space="preserve" width="512"
                                                            height="512" fill="currentColor"
                                                            aria-hidden="true" class="mr-2 h-3 w-3">
                                                            <g>
                                                                <circle cx="256" cy="128"
                                                                    r="128">
                                                                </circle>
                                                                <path
                                                                    d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <span>20k </span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                @empty
                                @endforelse
                            @endif

                        </div>
                        <!--/Content-->

                    </div>
                    <!--Educator-->

                    <!--Blog-->
                    <div id="blogs"
                        class="group/sec relative my-5 flex flex-col rounded-md bg-slate-50 p-3 pt-0 shadow">

                        <!--label-->
                        <div
                            class="sticky top-[72px] z-30 flex w-full items-center gap-x-3 bg-slate-50 px-3 py-5">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M18,19v4.7a4.968,4.968,0,0,0,1.879-1.164l2.656-2.658A4.954,4.954,0,0,0,23.7,18H19A1,1,0,0,0,18,19Z">
                                </path>
                                <path
                                    d="M7.172,13.828A4,4,0,0,0,6,16.657V18H7.343a4,4,0,0,0,2.829-1.172L21.5,5.5a2.121,2.121,0,0,0-3-3Z">
                                </path>
                                <path
                                    d="M24,4.952a4.087,4.087,0,0,1-1.08,1.962L11.586,18.243A5.961,5.961,0,0,1,7.343,20H6a2,2,0,0,1-2-2V16.657a5.957,5.957,0,0,1,1.758-4.242L17.086,1.086A4.078,4.078,0,0,1,19.037,0c-.013,0-.024,0-.037,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16V19a3,3,0,0,1,3-3h5V5C24,4.984,24,4.969,24,4.952Z">
                                </path>
                            </svg>
                            <h2 class="truncate text-lg font-bold text-gray-500">Blogs</h2>
                        </div>
                        <!--/label-->

                        <!--Content-->
                        <div class="mx-auto my-5 flex flex-col justify-center gap-y-16">
                            @if ($blogs)
                                @forelse ($blogs as $post)
                                    <ul class="space-y-4" role="list">
                                        <li class="mb-20 bg-white p-4 shadow sm:rounded-lg">
                                            <article aria-labelledby="question-title-81614">
                                                <!--------- feed part--------->
                                                <div class="relative">
                                                    <!--------- reibbon--------->
                                                    <div class="absolute right-10 top-0 -mt-4">
                                                        <svg baseProfile="tiny"
                                                            class="h-auto w-10 text-traivis-500"
                                                            fill="currentColor" id="Filled"
                                                            overflow="visible" version="1.2"
                                                            viewBox="0 0 355.6 512" x="0px"
                                                            xml:space="preserve"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            y="0px">
                                                            <path
                                                                d="M21.9-1.2v482.1c0,23.3,25.9,37.3,45.4,24.5l93-61.1c9.7-6.4,22.3-6.4,32-0.1l96,61.9c19.5,12.6,45.2-1.4,45.2-24.6V-1.2H21.9z M251.2,190c6.4,6.4,6.4,16.8,0,23.2l-87.6,87.6c-5.8,5.8-13.7,9.1-21.9,9.1h-10.4v-10.4c0-8.2,3.3-16.1,9.1-21.9L228,190C234.4,183.6,244.8,183.6,251.2,190z M259.2,324.3l-20.5,20.6c-4.1,4.1-9.1,7.1-14.5,9v-36.3c0-4.3,3.5-7.7,7.7-7.7h36.3C266.4,315.3,263.3,320.2,259.2,324.3z M270.6,209.3v85.1h-38.7c-12.8,0-23.2,10.4-23.2,23.2v38.7h-85.1c-21.3,0-38.6-17.3-38.7-38.7V209.3c0-21.3,17.3-38.6,38.7-38.7h108.3c0.1,0,0.2,0,0.3,0c-5.7,1.3-10.9,4.2-15.1,8.4l-87.6,87.6c-8.7,8.7-13.6,20.5-13.6,32.8v10.4c0,8.5,6.9,15.5,15.5,15.5h10.4c12.3,0,24.1-4.9,32.8-13.6l87.6-87.6c4.1-4.2,7-9.4,8.4-15.2C270.6,209,270.6,209.2,270.6,209.3z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <!--------- reibbon--------->
                                                    <!---------feed header--------->
                                                    <div class="flex space-x-3">
                                                        <!-- User Avatar -->
                                                        <div class="relative">
                                                            <div class="flex-shrink-0">
                                                                <img alt=""
                                                                    class="h-10 w-10 rounded-full"
                                                                    src="{{ $post->business ? $post->business?->avatar : $post->user?->avatar }}">
                                                            </div>
                                                            <!-- Online Status Dot -->
                                                            <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                                                title="User is online"></div>
                                                        </div>
                                                        <!-- feed info -->
                                                        <div class="min-w-0 flex-1">
                                                            <!-- Name.verify row-->
                                                            <div class="flex h-8 flex-row">
                                                                <!-- Username -->
                                                                @if ($post->business)
                                                                    <a href="{{ route('business-profile-social', $post->business->id) }}"
                                                                        target="_blank">
                                                                        <h2
                                                                            class="text-lg font-semibold">
                                                                            {{ $post->business->business_name }}
                                                                        </h2>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('user-profile-social', $post->user->id) }}"
                                                                        target="_blank">
                                                                        <h2
                                                                            class="text-lg font-semibold">
                                                                            {{ $post->user->name }}</h2>
                                                                    </a>
                                                                @endif
                                                                <!-- User Verified -->
                                                                <svg class="my-auto ml-2 h-5 text-traivis-500"
                                                                    fill="currentColor" height="24"
                                                                    version="1.1" viewBox="0 0 24 24"
                                                                    width="24"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <path
                                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!-- date row-->
                                                            <p class="text-sm text-gray-500">
                                                                <a class="hover:underline"
                                                                    href="#">
                                                                    <x-tooltip-arrow-up
                                                                        :text="$post->created_at->format(
                                                                            'l, F j, Y \a\t g:i A',
                                                                        )">
                                                                        {{ $post->created_at->shortAbsoluteDiffForHumans() }}
                                                                    </x-tooltip-arrow-up>
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <!--END feed info -->
                                                    </div>
                                                    <!---------END feed header--------->
                                                    <!--------- feed content--------->
                                                    <div
                                                        class="flex flex-wrap items-center justify-center justify-between justify-items-center py-4">
                                                        <div
                                                            class="mb-3 flex w-full flex-wrap justify-start">
                                                            <h2 class="text-lg font-bold font-semibold"
                                                                id="question-title-81614">
                                                                {{ $post->title }}
                                                            </h2>
                                                        </div>
                                                        {{-- <div class="flex flex-wrap w-full  justify-items-center items-center">
                                                    <div class="">
                                                        <span
                                                            class="inline-flex items-center px-3 py-1 m-1 rounded-full text-base font-medium bg-traivis-100 text-traivis-800 border border-traivis-300"><svg
                                                                class="-ml-1 mr-1.5 h-2 w-2 text-traivis-400" fill="currentColor"
                                                                viewBox="0 0 8 8">
                                                                <circle cx="4" cy="4" r="3"></circle>
                                                            </svg>
                                                            Politics
                                                        </span>
                                                        <span
                                                            class="inline-flex items-center px-3 py-1 m-1 rounded-full text-base font-medium bg-traivis-100 text-traivis-800 border border-traivis-300"><svg
                                                                class="-ml-1 mr-1.5 h-2 w-2 text-traivis-400" fill="currentColor"
                                                                viewBox="0 0 8 8">
                                                                <circle cx="4" cy="4" r="3"></circle>
                                                            </svg>
                                                            Economy
                                                        </span>
                                                        <span
                                                            class="inline-flex items-center px-3 py-1 m-1 rounded-full text-base font-medium bg-traivis-100 text-traivis-800 border border-traivis-300"><svg
                                                                class="-ml-1 mr-1.5 h-2 w-2 text-traivis-400" fill="currentColor"
                                                                viewBox="0 0 8 8">
                                                                <circle cx="4" cy="4" r="3"></circle>
                                                            </svg>
                                                            Business
                                                        </span>
                                                    </div>
                                                </div> --}}
                                                    </div>
                                                    <div
                                                        class="w-full rounded-lg bg-white shadow-md  ">
                                                        <a class=""
                                                            href="{{ route('post.show', $post->id) }}">
                                                            <img alt="product image"
                                                                class="mx-auto h-72 w-full object-cover"
                                                                src="{{ $post->getFirstMediaUrl() }}"></a>
                                                    </div>
                                                    <div
                                                        class="rounded-t-5xl absolute bottom-0 bg-white bg-opacity-80 px-4 py-3">
                                                        <h2 class="font-medium text-black"
                                                            id="question-title-81614">
                                                            {!! $post->overview !!}</h2>
                                                    </div>
                                                    <!---------END feed content--------->
                                                </div>
                                                <!---------END feed part--------->
                                                <!--------- START Engagement part --------->
                                                <div
                                                    class="mb-5 flex flex-col justify-items-center border-b-2 border-gray-200">
                                                    <div
                                                        class="flex items-center justify-between justify-items-center gap-x-8 p-3 text-gray-400">
                                                        @if (auth()->check())
                                                            @livewire('like-button', ['post' => $post], key('like-' . $post->id)))
                                                        @endif
                                                        <span
                                                            class="inline-flex items-center gap-x-8 text-sm">
                                                            <button type="button"
                                                                @click="
                                                                comments = document.getElementById('{{ strtolower(class_basename($post)) }}-{{ $post->id }}-comments')
                                                                if(comments.style.display=='none'){
                                                                    comments.style.display='block'

                                                                }
                                                                else  comments.style.display='none'

                                                                "
                                                                class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/chat-alt -->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    id="Layer_1" data-name="Layer 1"
                                                                    viewbox="0 0 24 24" width="512"
                                                                    height="512" fill="currentColor"
                                                                    aria-hidden="true" class="h-5 w-5">
                                                                    <path
                                                                        d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                                                                    </path>
                                                                </svg><span
                                                                    class="font-medium text-gray-900  ">{{ $post->comments->count() }}</span>
                                                                <span class="sr-only">replies</span>
                                                            </button>

                                                            <button type="button"
                                                                class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/eye -->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    x="0px" y="0px"
                                                                    viewbox="0 0 512.19 512.19"
                                                                    xml:space="preserve" width="512"
                                                                    height="512" fill="currentColor"
                                                                    aria-hidden="true" class="h-5 w-5">
                                                                    <g>
                                                                        <circle cx="256.095"
                                                                            cy="256.095"
                                                                            r="85.333"></circle>
                                                                        <path
                                                                            d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                                                        </path>
                                                                    </g>
                                                                </svg><span
                                                                    class="font-medium text-gray-900  ">{{ $post->postViews->count() }}</span>
                                                                <span class="sr-only">views</span>
                                                            </button>
                                                        </span>
                                                        @if (auth()->check())
                                                            @livewire('bookmark-button', ['postId' => $post->id], key('bookmark-button-' . $post->id))
                                                        @endif

                                                        @livewire('share-button', ['url' => route('post.show', $post->id), 'title' => $post->title], key('share-button-post-' . $post->id))
                                                    </div>
                                                </div>
                                                <!--------- END Engagement part--------->
                                                <!-- start comments part -->
                                                @livewire('comments', ['model' => $post], key('post-comments-' . $post->id))
                                                <!-- end comments part -->
                                            </article>
                                        </li>
                                    </ul>
                                @empty
                                @endforelse
                            @endif

                        </div>
                        <!--/Content-->

                    </div>
                    <!--Blog-->

                </div>
            </div>
            <!--/ Middle-->
        </div>

    </div>
</div>
