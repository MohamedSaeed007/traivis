<div x-data="{ DeletePost: @entangle('showDeletePost') }">
    <!--Delete Post Popup-->
    <section x-show="DeletePost" x-transition:enter="ease-out duration-100"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" class="" style="">
        <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[999] overflow-y-auto"
            role="dialog">
            <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                <!---over BG---->
                <div @click="DeletePost = false" aria-hidden="true"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!-- center-->
                <span aria-hidden="true" class="hidden sm:inline-block sm:h-screen sm:align-middle">​</span>
                <!---END over BG---->

                <!-- popup content-->
                <div
                    class="relative my-8 inline-block w-full max-w-2xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                    <!---->
                    <div class="">
                        <div class="h-full w-full overflow-y-auto">
                            <div class="container mx-auto flex w-full flex-col gap-y-4 rounded-lg bg-white p-3">

                                <!-- header-->
                                <p class="py-3 text-center text-lg font-semibold text-slate-500">
                                    Are you sure you want to delete this post
                                    <span
                                        class="mx-1 cursor-pointer rounded-full border border-slate-300 bg-slate-100 px-2 font-bold focus:border-0">{{ $post->title ?? $post->post_content }}</span>
                                    ?
                                </p>
                                <!--END  header-->

                                <!--Button-->
                                <div class="flex w-full items-center justify-evenly">

                                    <button type="button" @click="DeletePost = false"
                                        class="inline-flex w-1/4 items-center justify-center gap-x-2 rounded-full border border-transparent bg-gray-100 px-4 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                        <span class="whitespace-nowrap font-bold">Cancel</span>
                                    </button>

                                    <button type="button" wire:click="deletePost"
                                        class="inline-flex w-1/4 items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                        <span class="whitespace-nowrap font-bold"> Yes
                                            <x-svg-icons.fi-rr-rotate-right wire:loading wire:target="deletePost"
                                                class="h-5 w-5 animate-spin" /></span>
                                    </button>
                                </div>
                                <!--/ Button-->

                            </div>
                        </div>
                    </div>
                    <!---->

                </div>
                <!--END popup content -->

            </div>
        </div>
    </section>
    <!--/Delete Post Popup-->

    <li x-cloak class="group/post mb-20 bg-white p-4 drop-shadow-[0_1px_1px_rgba(0,0,0,0.15)] transition-colors sm:rounded-lg"
        data-id="post-{{ $post->id }}" x-intersect.once="console.error('Post ID #{{ $post->id }} viewed')">

        <article>
            <!--------- feed part--------->
            <div class="relative">
                @if ($post->type == 'course')
                    <!--------- reibbon--------->
                    <div class="absolute right-10 top-0 -mt-4">
                        <svg baseProfile="tiny" class="h-auto w-10 text-traivis-500" fill="currentColor" id="Layer_1"
                            overflow="visible" version="1.2" viewBox="0 0 355.6 512" x="0px" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                            <path d="M21.9-1.2v482.1c0,23.3,25.9,37.3,45.4,24.5l93-61.1c9.7-6.4,22.3-6.4,32-0.1l96,61.9
                 c19.5,12.6,45.2-1.4,45.2-24.6V-1.2H21.9z M239.7,305c0,16.9-11.1,31.9-27.2,36.9c-11.3,3.2-22.9,4.8-34.7,4.7
                 c-11.7,0.1-23.4-1.4-34.7-4.7c-16.2-5-27.2-20-27.2-36.9v-20.9l33.9,16.2c8.6,5,18.3,7.5,28.2,7.5c9.5,0.1,18.9-2.4,27.2-7.2
                 l34.5-16.5V305z M270.6,323.5c0,4.2-3.5,7.7-7.7,7.7c-4.2,0-7.7-3.4-7.7-7.7v-63.8L197.9,287c-6.1,3.6-12.9,5.4-19.9,5.4
                 c-7.4,0-14.6-2-20.9-5.7L100,259.5c-13.9-7.5-19.1-24.8-11.6-38.6c2.5-4.7,6.3-8.6,11-11.3c0.2-0.1,0.4-0.3,0.7-0.4l57.6-27.5
                 c12.7-7.2,28.3-7.1,40.9,0.4l57.1,27.2c9.1,5.1,14.9,14.6,15,25.1V323.5z" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <!--------- reibbon--------->
                @endif
                <!---------feed header--------->
                <div class="flex space-x-3">
                    <div class="relative">
                        <!-- User Avatar -->
                        <div class="flex-shrink-0">
                            <img loading="lazy" alt="" class="h-10 w-10 rounded-full"
                                src="{{ $post->business ? $post->business?->avatar : $post->user?->avatar }}">
                        </div>
                        <!-- Online Status Dot -->
                        <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                            title="User is online"></div>
                    </div>

                    <div class="min-w-0 flex-1">
                        <div class="flex h-8 flex-row">
                            <!-- Username -->
                            @if ($post->business)
                                <a href="{{ route('business-profile-social', $post->business->id) }}" target="_blank">
                                    <h2 class="text-lg font-semibold">
                                        {{ $post->business->business_name }}</h2>
                                </a>
                            @elseif ($post->user)
                                <a href="{{ route('user-profile-social', $post->user->id) }}" target="_blank">
                                    <h2 class="text-lg font-semibold">{{ $post->user->name }}</h2>
                                </a>
                            @endif
                            <!-- User Verified -->
                            @if ($post->business)
                                @if ($post->business->is_verified)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        class="my-auto ml-2 h-5 text-traivis-500" width="24" height="24"
                                        viewbox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                        </path>
                                    </svg>
                                @endif
                            @endif
                        </div>
                        <p class="text-sm text-gray-500">
                            <a href="{{ route('post.show', $post->id) }}" class="hover:underline">
                                <x-tooltip-arrow-up :text="$post->created_at->format('l, F j, Y \a\t g:i A')">
                                    {{ $post->created_at->shortAbsoluteDiffForHumans() }}
                                </x-tooltip-arrow-up>
                            </a>
                        </p>
                    </div>

                    <!--post options-->
                    <div x-data="{ tOpen: false }" class="">

                        <button type="button" @click="tOpen = !tOpen"
                            class="group inline-flex justify-center rounded-full border border-gray-300 bg-white p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500">
                            <!-- Heroicon name: solid/mail -->
                            <svg class="h-4 w-4 rotate-90 text-gray-400 group-hover:text-white" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512"
                                height="512">
                                <circle cx="2" cy="12" r="2"> </circle>
                                <circle cx="12" cy="12" r="2"> </circle>
                                <circle cx="22" cy="12" r="2"> </circle>
                            </svg>
                        </button>

                        <div x-show="tOpen" @click.outside="tOpen = false" @keydown.window.escape.stop="tOpen = false"
                            class="absolute right-5 top-5 z-10 mt-2 hidden w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-50"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-50" x-cloak>

                            <div class="py-1" role="none">
                                <button
                                    wire:click="$emit('openIssueReport',['{{ class_basename($post) }}','{{ $post->id }}'])"
                                    class="group flex w-full items-center gap-x-2 px-4 py-1 text-sm text-gray-500 hover:bg-traivis-500 hover:text-white"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path
                                            d="M12.836,.028C9.364-.204,5.96,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.836,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1-6c0,.553-.448,1-1,1s-1-.447-1-1V5c0-.553,.448-1,1-1s1,.447,1,1V13Z" />
                                    </svg>
                                    <span class="">Report</span>
                                </button>
                                @if ($is_owner)
                                    <button @click="DeletePost=true"
                                        class="group flex w-full items-center gap-x-2 px-4 py-1 text-sm text-gray-500 hover:bg-traivis-500 hover:text-white"
                                        role="menuitem" tabindex="-1" id="menu-item-1">
                                        <svg fill="currentColor" class="h-5 w-5" x="0px" y="0px"
                                            viewBox="0 0 512 512" xml:space="preserve" width="512"
                                            height="512">
                                            <g>
                                                <path
                                                    d="M448,85.333h-66.133C371.66,35.703,328.002,0.064,277.333,0h-42.667c-50.669,0.064-94.327,35.703-104.533,85.333H64   c-11.782,0-21.333,9.551-21.333,21.333S52.218,128,64,128h21.333v277.333C85.404,464.214,133.119,511.93,192,512h128   c58.881-0.07,106.596-47.786,106.667-106.667V128H448c11.782,0,21.333-9.551,21.333-21.333S459.782,85.333,448,85.333z    M234.667,362.667c0,11.782-9.551,21.333-21.333,21.333C201.551,384,192,374.449,192,362.667v-128   c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333V362.667z M320,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333v-128c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M174.315,85.333c9.074-25.551,33.238-42.634,60.352-42.667h42.667   c27.114,0.033,51.278,17.116,60.352,42.667H174.315z" />
                                            </g>
                                        </svg>
                                        <span class="">Delete</span>
                                    </button>
                                @endif
                            </div>

                        </div>

                    </div>
                    <!--/post options-->

                </div>
                <!---------END feed header--------->

                @if ($post->type == 'course')
                    <!--------- feed content--------->
                    <div class="flex flex-row items-center justify-center justify-between justify-items-center">
                        <h2 class="py-4 text-lg font-bold font-semibold" id="question-title-81614">
                            {{ $post->title }}</h2>
                        <div class="flex flex-row items-center justify-between justify-items-center space-x-2">
                            <span class="">

                                <x-tooltip-arrow class="">
                                    <x-slot name="text">
                                        Trending
                                    </x-slot>
                                    <svg class="h-5 w-5 text-red-500"
                                        fill="currentColor" viewBox="0 0 24 24"
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
                                    <svg class="h-5 w-5 text-traivis-500" fill="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18,14.5c-.035,1.971-2.965,1.971-3,0,.035-1.971,2.965-1.971,3,0Zm-11.056-.5h2.112l-1.056-3.52-1.056,3.52ZM24,7v10c0,2.757-2.243,5-5,5H5c-2.757,0-5-2.243-5-5V7C0,4.243,2.243,2,5,2h14c2.757,0,5,2.243,5,5Zm-12.042,9.713l-3-10c-.247-.933-1.669-.932-1.916,0l-3,10c-.37,1.254,1.535,1.826,1.916,.574l.386-1.287h3.312l.386,1.287c.158,.534,.73,.83,1.245,.671,.529-.159,.83-.716,.671-1.245ZM20,7c-.006-1.308-1.994-1.307-2,0v4.351c-2.224-1.147-5.061,.638-5,3.149-.07,2.598,2.968,4.384,5.186,3.048,.49,.822,1.848,.414,1.814-.548V7Z">
                                        </path>
                                    </svg>
                                </x-tooltip-arrow>

                            </span>
                        </div>
                    </div>
                    @if ($post->hasMedia())
                        <div class="relative w-full bg-white shadow-md">
                            <a class="" href="{{ route('post.show', $post->id) }}">
                                <img loading="lazy" alt="product image" class="mx-auto h-72 w-full object-cover"
                                    src="{{ $post->getFirstMediaUrl() }}">
                            </a>
                            <!--------- course info icons--------->
                            <div
                                class="absolute bottom-0 left-0 top-0 flex flex-col justify-center justify-between border-r-2 border-gray-50 border-opacity-50 bg-gray-800 px-4 py-2 py-20 text-white opacity-70">

                                <div class="">

                                    <x-tooltip-arrow class="flex items-center">
                                        <x-slot name="text">
                                            Level
                                        </x-slot>
                                        <svg class="h-3 w-3" fill="currentColor"
                                            viewBox="0 0 512.051 512.051" xml:space="preserve"
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
                                        <span class="ml-2">Beginner</span>
                                    </x-tooltip-arrow>
                                </div>

                                <div class="">

                                    <x-tooltip-arrow class="group relative flex items-center">
                                        <x-slot name="text">
                                            Trainer
                                        </x-slot>
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-2">Prasoon</span>
                                    </x-tooltip-arrow>
                                </div>

                                <div class="">
                                    <x-tooltip-arrow class="flex items-center">
                                        <x-slot name="text">
                                            Duration
                                        </x-slot>
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4,11H20c5.276-.138,5.272-7.863,0-8H4c-5.276,.138-5.272,7.863,0,8ZM22,7c0,1.103-.897,2-2,2h-4V5h4c1.103,0,2,.897,2,2Zm-2,6H4c-5.276,.138-5.272,7.863,0,8H20c5.276-.138,5.272-7.863,0-8Zm0,6H10v-4h10c2.629,.048,2.627,3.953,0,4Z">
                                            </path>
                                        </svg><span class="ml-2">0</span>
                                    </x-tooltip-arrow>
                                </div>

                                <div class="">
                                    <div class="flex items-center">

                                        <x-tooltip-arrow class="flex">
                                            <x-slot name="text">
                                                Delivery mode
                                            </x-slot>
                                            <svg class="h-3 w-3" fill="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m22 12v-7a5.006 5.006 0 0 0 -5-5h-10a5.006 5.006 0 0 0 -5 5v7z">
                                                </path>
                                                <path
                                                    d="m23 14h-22a1 1 0 0 0 0 2h10v4h-2a3 3 0 0 0 -3 3 1 1 0 0 0 2 0 1 1 0 0 1 1-1h6a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0 -3-3h-2v-4h10a1 1 0 0 0 0-2z">
                                                </path>
                                            </svg>
                                        </x-tooltip-arrow>

                                        <x-tooltip-arrow class="">
                                            <x-slot name="text">
                                                Live
                                            </x-slot>
                                            <span class="ml-1">LIV</span>,
                                        </x-tooltip-arrow>

                                        <x-tooltip-arrow class="group relative">
                                            <x-slot name="text">
                                                Recorded
                                            </x-slot>
                                            <span class="ml-1">REC</span>
                                        </x-tooltip-arrow>

                                    </div>
                                </div>

                            </div>
                            <!--------- END info icons--------->
                        </div>
                    @endif
                    <!---------END feed content--------->
                @else
                    <!--------- feed content--------->
                    <h2 id="question-title-81614" class="break-words py-4 text-lg font-medium text-gray-900">
                        {!! $post->post_content !!}
                    </h2>
                    @if ($post->hasMedia())
                        <div
                            class="w-full rounded-lg bg-slate-100 shadow-md transition-colors">
                            <a {{ route('post.show', $post->id) }} class="">
                                <img loading="lazy" class="mx-auto h-fit w-full object-cover" src="{{ $post->getFirstMediaUrl() }}"
                                    alt=""></a>
                        </div>
                    @endif
                    <!---------END feed content--------->
                @endif

                @if ($post->type == 'course')
                    <!--------- course disc--------->
                    <div class="mb-5 mt-4 flex flex-col gap-4 text-left text-gray-700">
                        <div class="flex">
                            <a {{ route('post.show', $post->id) }}><span
                                    class="font-medium">{{ $post->post_content }}</span></a>
                        </div>
                    </div>
                    <!---------END course disc--------->
                @endif

                <!--------- START Engagement part --------->
                <div class="flex w-full flex-col justify-items-center border-b-2 border-gray-200 transition-all"
                    x-data="{ LikeAct: false, DislikeAct: false, CommentAct: false, BookmarkAct: false }">

                    <div class="flex items-center justify-between justify-items-center gap-x-8 text-slate-500">

                        <span
                            class="absolute bottom-3 left-0 inline-flex items-center gap-x-8 rounded-r-full bg-white bg-opacity-90 p-2 text-sm shadow-xl transition-all hover:p-3 hover:font-bold group-hover/post:bg-opacity-100">

                            <!--Views-->
                            <button type="button"
                                class="group/act inline-flex items-center gap-x-2 rounded-full outline-none ring-0 transition-all hover:text-traivis-500 focus:outline-none focus:ring-0">

                                <!-- Heroicon name: solid/eye -->
                                <svg x="0px" y="0px" viewbox="0 0 512.19 512.19" xml:space="preserve"
                                    fill="currentColor" aria-hidden="true" class="h-5 w-5">
                                    <g>
                                        <circle cx="256.095" cy="256.095" r="85.333"></circle>
                                        <path
                                            d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                        </path>
                                    </g>
                                </svg>

                                <span class="">{{ $post->post_views_count }}</span>
                                <span class="">views</span>

                            </button>
                            <!--/Views-->

                        </span>

                        <span
                            class="absolute bottom-3 right-1/2 inline-flex translate-x-1/2 items-center gap-x-8 rounded-full bg-white bg-opacity-90 p-2 text-sm shadow-xl transition-all hover:p-3 hover:font-bold group-hover/post:bg-opacity-100">
                            @if ($canComment)
                                <!--Comments-->
                                <button type="button"
                                    @click="CommentAct = !CommentAct, comments = document.getElementById('{{ strtolower(class_basename($post)) }}-{{ $post->id }}-comments')

                             if(comments.style.display=='none'){
                                comments.style.display='block'
                             }
                             else  comments.style.display='none'
                            "
                                    class="group/act inline-flex items-center gap-x-2 rounded-full outline-none ring-0 transition-all hover:text-traivis-500 focus:outline-none focus:ring-0">

                                    <!-- Heroicon name: solid/chat-alt -->
                                    <svg x-show="CommentAct" viewbox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="block h-5 w-5 group-hover/act:hidden">
                                        <path
                                            d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                                        </path>
                                    </svg>

                                    <svg x-show="CommentAct" viewbox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true"
                                        class="hidden h-5 w-5 text-traivis-500 group-hover/act:block">
                                        <path
                                            d="M12.009,23.665c-.476,0-.956-.168-1.338-.508l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0h16c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.361,.322-.825,.485-1.292,.485Z" />
                                    </svg>

                                    <svg x-show="!CommentAct" viewbox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-5 w-5 text-traivis-500">
                                        <path
                                            d="M12.009,23.665c-.476,0-.956-.168-1.338-.508l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0h16c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.361,.322-.825,.485-1.292,.485Z" />
                                    </svg>

                                    <span class="">{{ $post->comments->count() }}</span>
                                    <span class="sr-only">Comments</span>

                                </button>
                                <!--/Comments-->
                            @endif
                            <!--like -dislike-->
                            @if (auth()->check())
                                @livewire('like-button', ['post' => $post], key('like-button' . $post->id))
                            @endif
                            <!--/like -dislike-->

                        </span>

                        <span
                            class="absolute bottom-3 right-0 inline-flex items-center gap-x-8 rounded-l-full bg-white bg-opacity-90 p-2 text-sm shadow-xl transition-all hover:p-3 hover:font-bold group-hover/post:bg-opacity-100">
                            @if (auth()->check())
                                <!--Bookmark-->
                                @livewire('bookmark-button', ['postId' => $post->id])
                                <!--/Bookmark-->
                                <!--Share-->
                                @livewire('share-button', ['url' => route('post.show', ['id' => $post->id, 'user_id' => auth()->id()]), 'title' => $post->title])
                                <!--/Share-->
                            @else
                                <!--Share-->
                                @livewire('share-button', ['url' => route('post.show', ['id' => $post->id]), 'title' => $post->title])
                                <!--/Share-->
                            @endif
                        </span>

                    </div>
                </div>
                <!--------- END Engagement part--------->

            </div>
            <!---------END feed part--------->

            @if ($canComment)
                <!-- start comments part -->
                @livewire('comments', ['model' => $post])
                <!-- end comments part -->
            @endif
        </article>
    </li>

</div>
