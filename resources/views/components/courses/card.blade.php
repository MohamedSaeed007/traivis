<li
    {{ $attributes->class([
        'group/crs col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg border-t border-b-2 border-gray-200 bg-white text-center shadow hover:scale-[1.02] hover:border-traivis-300 hover:bg-slate-50 transition-all',
    ]) }}>
    @push('scripts')
        <script src="{{ asset('assets/js/likely.js') }}" type="text/javascript"></script>
    @endpush
    <!---------item content--------->

    <div class="flex flex-1 flex-col">
        <!---------Item Header--------->
        <!--------- badges --------->
        <div
            class="z-10 -mb-8 flex h-8 w-full flex-row items-center bg-white bg-opacity-90 text-gray-500 transition-colors hover:text-gray-900">

            <!-- Views badge ----->

            <div class="flex flex-1">
                <x-tooltip-arrow class="text-sm">
                    <div class="ml-3 flex items-center">
                        <x-svg-icons.fi-sr-eye class="h-4 w-4" />
                        <span class="ml-2 text-sm">{{ $course->course_views_count }}</span>
                    </div>
                    <x-slot name="text">
                        {{ __('Views:') }} {{ $course->course_views_count }}
                    </x-slot>
                </x-tooltip-arrow>

                {{-- <div class="group relative ml-3 flex items-center">

                    <span
                        class="pointer-events-none absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 font-normal text-white opacity-0 transition before:absolute before:left-1/2 before:top-full before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] group-hover:opacity-100">
                        Views:
                    </span>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path
                            d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419ZM12,18a6,6,0,1,1,6-6A6.006,6.006,0,0,1,12,18Z">
                        </path>
                    </svg>


                </div> --}}
            </div>

            <!-- right badges ----->
            <div class="relative flex items-center">
                @if ($course->is_popular)
                    <!-- Trending ----->
                    <span class="group relative mr-3">
                        <span
                            class="pointer-events-none absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 font-normal text-white opacity-0 transition before:absolute before:left-1/2 before:top-full before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] group-hover:opacity-100">
                            Trending
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4 text-pink-600">
                            <path
                                d="M15.746,18.254c0-1.5-1.031-3.55-2.9-5.773A1.088,1.088,0,0,0,12,12.092h0a1.117,1.117,0,0,0-.854.391h0C9.1,14.88,8.1,17,8.273,18.625a3.668,3.668,0,0,0,1.582,2.557A3.622,3.622,0,0,0,12,22,3.75,3.75,0,0,0,15.746,18.254Z">
                            </path>
                            <path
                                d="M16.629,2.9c-.786-.668-1.611-1.368-2.451-2.132A2.952,2.952,0,0,0,11.8.028a2.847,2.847,0,0,0-2.032,1.3A20.39,20.39,0,0,0,7.276,7.776,6.233,6.233,0,0,1,6.8,6.961a2,2,0,0,0-3.3-.473A9.069,9.069,0,0,0,.915,12.909,10.979,10.979,0,0,0,9.136,23.64a11.651,11.651,0,0,0,2.776.352,5.552,5.552,0,0,1-3.278-1.226,5.631,5.631,0,0,1-2.35-3.934c-.23-2.21.893-4.783,3.338-7.647h0A3.114,3.114,0,0,1,12,10.092h.01a3.1,3.1,0,0,1,2.366,1.1c1.538,1.827,3.373,4.535,3.373,7.061A5.749,5.749,0,0,1,12.39,23.98a11.056,11.056,0,0,0,10.7-11.065C23.085,8.385,20.093,5.845,16.629,2.9Z">
                            </path>
                        </svg>
                    </span>
                @endif
                @if ($course->is_featured)
                    <!-- Sponsored --->
                    <span class="group relative mr-3">
                        <span
                            class="pointer-events-none absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 font-normal text-white opacity-0 transition before:absolute before:left-1/2 before:top-full before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] group-hover:opacity-100">
                            Sponsored
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4 text-traivis-500">
                            <path
                                d="M18,14.5c-.035,1.971-2.965,1.971-3,0,.035-1.971,2.965-1.971,3,0Zm-11.056-.5h2.112l-1.056-3.52-1.056,3.52ZM24,7v10c0,2.757-2.243,5-5,5H5c-2.757,0-5-2.243-5-5V7C0,4.243,2.243,2,5,2h14c2.757,0,5,2.243,5,5Zm-12.042,9.713l-3-10c-.247-.933-1.669-.932-1.916,0l-3,10c-.37,1.254,1.535,1.826,1.916,.574l.386-1.287h3.312l.386,1.287c.158,.534,.73,.83,1.245,.671,.529-.159,.83-.716,.671-1.245ZM20,7c-.006-1.308-1.994-1.307-2,0v4.351c-2.224-1.147-5.061,.638-5,3.149-.07,2.598,2.968,4.384,5.186,3.048,.49,.822,1.848,.414,1.814-.548V7Z">
                            </path>
                        </svg>
                    </span>
                @endif
            </div>
        </div>
        <!---------END badges --------->

        <!--------- cover--------->
        @if (\Request::routeIs('instructor-dashboard*'))
            <a
                @if (request()->routeIs('instructor-dashboard-courses')) href="{{ route('instructor-dashboard-courseDetails', ['id' => $course->id]) }}"
                    @else
                        href="{{ route('course', $course->slug) }}" @endif " >
@else
<a @if (request()->routeIs('institute-dashboard-courses')) href="{{ route('institute-dashboard-courseDetails', ['id' => $course->id]) }}"
               @else
                   href="{{ route('course', $course->slug) }}" @endif ">
        @endif

        <img src="{{ $course->thumbnail_url }}" class="mx-auto h-60 w-full object-cover"
            alt="{{ $course->title }}"></a>
        <!---------END cover--------->

        <!-----end item header------>

        <div class="flex flex-col gap-4 py-2 text-left text-gray-700">

            <!---------Item Name and price --------->
            <div class="group relative flex items-center justify-between px-2">

                <a href="{{ route('course', $course->slug) }}" class="flex w-3/4">
                    <p class="truncate text-lg font-bold text-gray-500" title="{{ $course->title }}">
                        {{ $course->title }}</p>
                </a>

                <p
                    class="align-right flex w-1/4 flex-col justify-end truncate text-center text-xl font-bold text-traivis-400 transition-all group-hover/crs:text-traivis-500">
                    @if ($course->price)
                        @if ($course->sale_price)
                            <span class="line-through">
                                ${{ $course->price }}
                            </span>

                            <span
                                class="absolute right-0 mb-8 rounded-l-md bg-traivis-400 px-2 text-base text-white transition-all group-hover/crs:bg-traivis-500">
                                ${{ $course->sale_price }}
                            </span>
                        @else
                            <span class="block">
                                ${{ $course->price }}
                            </span>
                        @endif
                    @else
                        {{ __('free') }}
                    @endif
                    {{-- {!! $course->price_html(false, false) !!} --}}
                    {{-- <span class="text-md ml-1 font-bold">$</span> --}}

                </p>
            </div>
            <!----------END name and price ------>

            <!---------Info bar--------->
            <div class="text-small flex px-4 text-sm text-gray-500 group-hover/crs:text-gray-900">

                <!---------Info bar Left--------->
                <div class="grow">

                    <!---------level--------->
                    <div class="flex items-center">
                        <x-tooltip-arrow>
                            <x-svg-icons.fi-sr-settings-sliders class="h-3 w-3" />
                            <x-slot name="text">
                                {{ __('Level') }}
                            </x-slot>
                        </x-tooltip-arrow>
                        <span class="ml-2">{{ $course->course_level }}</span>

                    </div>
                    <!---------END level--------->

                    <!--------- Trainer --------->
                    <div class="flex items-center">
                        <x-tooltip-arrow>
                            <x-svg-icons.fi-sr-book-open-reader class="h-3 w-3" />
                            <x-slot name="text">
                                {{ __('Trainer') }}
                            </x-slot>
                        </x-tooltip-arrow>
                        <span class="ml-2">{{ optional($course->maker)->name }}</span>
                        {{-- <span class="ml-2">{{$course->trainer}}</span> --}}
                    </div>
                    <!---------END Trainer--------->

                </div>
                <!---------END Info bar Left--------->

                <!---------Info bar center--------->
                <div class="grow">

                    <!---------Duration--------->
                    <div class="flex items-center">
                        <x-tooltip-arrow class="">
                            <x-svg-icons.fi-sr-clock-three class="h-3 w-3" />
                            <x-slot name="text">
                                {{ __('Duration') }}
                            </x-slot>
                        </x-tooltip-arrow>
                        <span class="ml-2">{{ $course->duration }}</span>

                    </div>
                    <!---------END Duration--------->

                    <!---------DM--------->
                    {{-- <div class="">
                        <div class="flex items-center">
                            <x-tooltip-arrow>
                                <x-svg-icons.fi-sr-presentation class="h-3 w-3" />
                                <x-slot name="text">
                                    {{ __('Delivery mode') }}
                                </x-slot>
                            </x-tooltip-arrow-down>
                            @foreach ($course->sections->pluck('section_type') as $section_type)
                                <x-tooltip-arrow>
                                    <span
                                        class="ml-1">{{ config('enums.delivery_modes.' . $section_type)['code'] }}</span>
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                    <x-slot name="text">
                                        {{ __(config('enums.delivery_modes.' . $section_type)['name']) }}
                                    </x-slot>
                                </x-tooltip-arrow-down>
                            @endforeach
                        </div>
                    </div> --}}
                    <!---------END DM--------->

                </div>
                <!---------END Info bar center--------->

                <!--------- Share Button --------->
                @livewire('share-button', ['url' => route('course', $course->slug), 'title' => $course->title], key('share-button-course-' . $course->id))
                <!---------END Share Button --------->

            </div>
            <!---------END Info bar--------->

        </div>
    </div>
    <!---------END item content--------->
    @if (auth()->check() && $course?->maker?->owner->id != auth()->id())
        <!---------item footer--------->
        <div>
            <div class="flex flex-row justify-center justify-between bg-gray-50 px-4 transition-colors">
                @if (auth()->user()->isEnrolled($course->id))
                    <!--Booked-->
                    <div class="w-100 flex">
                        <a href="#"
                            class="relative -mr-px inline-flex flex-1 items-center justify-center py-4 text-sm font-medium text-traivis-500 hover:text-traivis-500">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 512 512"
                                xml:space="preserve" fill="currentColor" class="h-6 w-6">
                                <path
                                    d="M302,404c-28.9-14.7-63.1-14.7-92,0l-93.3,47.4c12,11.9,26.8,21.2,43.7,26.4c31.1,8.9,63.3,13.3,95.6,12.9  c32.3,0.4,64.5-4,95.6-12.9c16.9-5.3,31.7-14.4,43.7-26.4L302,404z M470.5,111.6l-157.3-75c-34.6-20.7-77.7-21-112.7-1l-159,76  c-0.6,0.3-1.2,0.6-1.8,1c-12.8,7.3-23.3,18.1-30.3,31.1c-20.6,38.3-6.2,86,32.1,106.6l43.9,20.9v47.1v17.6v40c0,13.2,2.5,26,7,37.9  L210,354c28.9-14.7,63.1-14.7,92,0l117.7,59.8c4.5-11.9,7-24.7,7-38v-40v-17.4v-47.3l42.7-20.4v176c0,11.8,9.6,21.3,21.3,21.3  s21.3-9.6,21.3-21.3V180.9l0,0C511.6,152,495.8,125.6,470.5,111.6z">
                                </path>
                            </svg>
                            <span class="ml-3">Booked</span>
                        </a>
                    </div>
                    <!--/Booked-->
                @else
                    <!--Book-->
                    <div class="flex basis-1/4">
                        @if (!$course->isEnrollable())
                            <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                                <div
                                    class="flex flex-col items-center justify-evenly gap-y-3 bg-traivis-100 p-5">
                                    <p class="font-bold">
                                        No seats.</p>
                                </div>
                            </div>
                        @else
                            <a href="#"
                                wire:click.prevent="$emit('addToCartEmit',{{ $course->id }})"
                                class="relative -mr-px inline-flex flex-1 items-center justify-center py-4 text-sm font-medium text-gray-500 hover:text-traivis-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 512 512"
                                    xml:space="preserve" fill="currentColor" class="h-6 w-6">
                                    <path
                                        d="M302,404c-28.9-14.7-63.1-14.7-92,0l-93.3,47.4c12,11.9,26.8,21.2,43.7,26.4c31.1,8.9,63.3,13.3,95.6,12.9  c32.3,0.4,64.5-4,95.6-12.9c16.9-5.3,31.7-14.4,43.7-26.4L302,404z M470.5,111.6l-157.3-75c-34.6-20.7-77.7-21-112.7-1l-159,76  c-0.6,0.3-1.2,0.6-1.8,1c-12.8,7.3-23.3,18.1-30.3,31.1c-20.6,38.3-6.2,86,32.1,106.6l43.9,20.9v47.1v17.6v40c0,13.2,2.5,26,7,37.9  L210,354c28.9-14.7,63.1-14.7,92,0l117.7,59.8c4.5-11.9,7-24.7,7-38v-40v-17.4v-47.3l42.7-20.4v176c0,11.8,9.6,21.3,21.3,21.3  s21.3-9.6,21.3-21.3V180.9l0,0C511.6,152,495.8,125.6,470.5,111.6z">
                                    </path>
                                </svg>
                                <span class="ml-3">Book</span>
                            </a>
                        @endif
                    </div>
                    <!--/ Book-->

                    <!--Save - Saved-->
                    <div class="flex basis-1/4">
                        <a href="#"
                            wire:click.prevent="$emit('toggleWishlistEmit',{{ $course->id }})"
                            class="relative inline-flex flex-1 items-center justify-center py-4 text-sm font-medium text-gray-500 hover:text-pink-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                fill="currentColor" class="h-6 w-6">
                                <path
                                    d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                </path>
                            </svg>
                            <span
                                class="ml-3">{{ \App\Models\Wishlist::whereCourseId($course->id)->whereUserId(auth()->user()->id)->exists()? 'Saved': 'Save' }}</span>
                        </a>
                    </div>
                    <!--/Save - Saved-->
                @endif

            </div>
        </div>
    @else
        <div>
            <div class="flex flex-row justify-center bg-gray-50 px-4 transition-colors">
                <div class="flex basis-1/4">
                    <a href="#" wire:click.prevent="editCourse('{{ $course->id }}')"
                        class="relative -mr-px inline-flex flex-1 items-center justify-center py-4 text-sm font-medium text-traivis-500 hover:text-traivis-400">
                        <span class="ml-3">Edit</span>
                    </a>
                </div>
                {{-- <div class="flex basis-1/4">
                    <a href="#"
                       class="relative inline-flex flex-1 items-center justify-center py-4 text-sm font-medium text-pink-600 hover:text-pink-500">
                        <span class="ml-3">Delete</span>
                    </a>
                </div> --}}
            </div>
        </div>
    @endif
    <!---------END item footer--------->

</li>
