<div>
    <div class="pt-5">

        <a href="#"
            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 transition-colors hover:bg-traivis-100 ">
            <!-- Heroicon name: outline/fire -->
            <x-svg-icons.fi-rr-graduation-cap
                class="-ml-1 mr-3 h-6 w-6 flex-shrink-0 text-gray-800 transition-colors group-hover:text-gray-500 " />
            <span class="truncate font-bold text-gray-500"> My Courses </span>

        </a>

    </div>
    <div class="space-y-1 border-b border-gray-200 pb-5">
        <section aria-labelledby="trending-heading">
            <div class="rounded-lg bg-white transition-colors ">
                <div class="">
                    <!-- menu-list style 2 start -->
                    <ul role="list" class="grid grid-cols-1">
                        @foreach ($courses as $course)
                            <!-- menu-button style 2 start -->
                            <li
                                class="col-span-1 flex h-12 border-l-2 border-transparent shadow-sm hover:border-traivis-500 hover:bg-traivis-100">
                                <div
                                    class="flex w-10 flex-shrink-0 items-center justify-center text-sm font-medium text-gray-500">
                                    <x-svg-icons.fi-sr-graduation-cap class="h-6 w-6" />
                                </div>

                                <div class="flex flex-1 items-center justify-between truncate">

                                    <div class="flex-1 truncate px-4 py-2 text-sm">
                                        <a href="{{ route('course', $course->slug) }}"
                                            class="font-medium text-gray-900 transition-colors hover:text-gray-600  ">{{ $course->title }}</a>

                                        <span class="text-sm text-gray-400">
                                            [{{ ucfirst($course->publish_status) }}]</span>
                                        <p class="text-gray-500"></p>
                                    </div>

                                    {{-- <div class="flex-shrink-0 pr-2">
                                    <button type="button"
                                        class="inline-flex h-8 items-center justify-center rounded-full bg-white bg-transparent text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 ">
                                        <span class="sr-only">Open options</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"
                                            xml:space="preserve" fill="currentColor" class="h-5 w-5">
                                            <g>
                                                <circle cx="256" cy="42.667" r="42.667"></circle>
                                                <circle cx="256" cy="256" r="42.667"></circle>
                                                <circle cx="256" cy="469.333" r="42.667"></circle>
                                            </g>
                                        </svg>
                                    </button>
                                </div> --}}

                                </div>
                            </li>
                            <!-- menu-button style 2 end -->
                        @endforeach
                    </ul><!-- menu-list style 2 end -->
                </div>
            </div>
        </section>
    </div>
</div>
