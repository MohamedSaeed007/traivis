<div class="relative flex w-full flex-col" x-data="{ SMopen: true, TRopen: true }">

    <!-- Course-->
    <div class="mx-auto flex w-full">
        <main class="flex min-w-0 flex-1 border-t border-gray-200">
            @include('homes.social.layouts.partials.courses.student-course-side-menu')
            <!-- Primary column (Content area)-->
            <section aria-labelledby="primary-heading"
                class="relative flex h-screen min-w-0 flex-1 lg:order-last">
                <h1 id="primary-heading" class="sr-only">Course</h1>
                <div class="flex min-w-0 flex-1">
                    <!-- Content area -->
                    <div class="flex-grow overflow-x-hidden">
                        <!--------- Course Header ----------->
                        @include('homes.social.layouts.partials.courses.student-course-header')
                        <!--------- End course Header ----------->
                        @if ($content == 'course-details')
                            @auth

                                @if (!$enrolled && !$isMaker)
                                    @if (!$course->isEnrollable())
                                        <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                                            <div
                                                class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                                                <p class="font-bold">
                                                    No seats available.</p>
                                            </div>
                                        </div>
                                    @else
                                        <!-- Enroll section -->
                                        <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                                            <div
                                                class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                                                <p class="font-bold">Please Enroll First to Access this
                                                    Course
                                                </p>
                                                <!--Book-->
                                                <div class="">
                                                    <button type="button"
                                                        wire:click.prevent="$emit('addToCartEmit',{{ $course->id }})"
                                                        class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                                        <svg fill="currentColor" class="h-5 w-5"
                                                            viewBox="0 0 512 512">
                                                            <path
                                                                d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                                            </path>
                                                        </svg>
                                                        <span class="whitespace-nowrap font-bold">Enroll
                                                            Now</span>
                                                    </button>
                                                </div>
                                                <!--/Book-->
                                            </div>
                                        </div>
                                        <!-- End Enroll section -->
                                    @endif
                                @else
                                    @if ($isMaker)
                                        <div class="bg-green-50 py-1 text-center capitalize text-green-500">
                                            The Instructor’s view</div>
                                    @endif
                                @endif
                            @endauth
                            @guest
                                <div class="container relative mx-auto px-10 text-gray-500">
                                    <div
                                        class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                                        <a class="font-bold"
                                            href="{{ route('login', ['_redirect_back_to' => request()->fullUrl()]) }}">Login</a>
                                    </div>
                                </div>
                            @endguest

                            <!--Public-->
                            <div class="relative p-6 text-gray-500">

                                @if ($overview_video)
                                    <x-course-details-field title="Overview video">
                                        <div class="w-full">
                                            <div class="group relative flex w-full cursor-pointer justify-center overflow-hidden rounded-lg bg-gray-100"
                                                @click="$dispatch('vid-modal', {  vidModalImgSrc: '{{ $overview_video->getUrl() }}', vidModalImgDesc: '' })">
                                                <svg class="absolute left-1/2 top-1/2 z-10 h-8 w-8 -translate-x-1/2 -translate-y-1/2 text-white transition-all group-hover:scale-125"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                                    </path>
                                                </svg>
                                                <!--Video Here-->
                                                <div
                                                    class="absolute inset-0 rounded-lg bg-black opacity-40 bg-blend-color-burn transition-all group-hover:opacity-0">
                                                </div>
                                                <img src="{{ $overview_video->preview_url }}"
                                                    class="pointer-events-none rounded-lg object-cover object-center transition-all">
                                                <!--/Video Here-->
                                            </div>
                                        </div>
                                    </x-course-details-field>
                                @endif
                                <x-course-details-field title="Description" id="ddddd">
                                    {{ $course->short_description }}
                                </x-course-details-field>
                                <x-course-details-field title="What you will learn">
                                    {{ $course->description }}
                                </x-course-details-field>

                                <x-course-details-field title="What's Included">
                                    {{ $course->benefits }}
                                </x-course-details-field>
                                <x-course-details-field title="Curriculum">
                                    {{ $course->cert_accr }}
                                </x-course-details-field>
                                <x-course-details-field title="Requirements">
                                    {{ $course->requirements }}
                                </x-course-details-field>
                                <!-------Reviews section-------->
                                <x-course-details-field title="Reviews">
                                    <!--reviews-->
                                    <div class="mx-auto h-full w-full rounded-lg">
                                        <div
                                            class="flex w-full flex-col gap-5 rounded-lg bg-white p-5 pb-52 text-gray-500">

                                            <!--Review stats-->
                                            <div
                                                class="mb-6 flex w-full flex-col items-center justify-center gap-y-10 md:flex-row">

                                                <div
                                                    class="flex w-full flex-col items-center justify-between md:w-1/2">
                                                    <div class="flex flex-col items-center">
                                                        <svg fill="currentColor" class="h-10 w-10"
                                                            viewBox="0 0 24 24" xml:space="preserve">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                        <h1 class="text-center text-lg font-bold">
                                                            Total reviews</h1>
                                                    </div>

                                                    <div class="mt-3 flex items-center">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            @if ($i < intval($course->rating_value))
                                                                <svg class="mr-1 h-4 w-4 text-yellow-500"
                                                                    aria-hidden="true"
                                                                    fill="currentColor"
                                                                    viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @else
                                                                <svg class="mr-1 h-4 w-4 text-gray-300  "
                                                                    aria-hidden="true"
                                                                    fill="currentColor"
                                                                    viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                            @endif
                                                        @endfor
                                                        <p class="text-sm font-medium text-gray-900">
                                                            {{ $course->rating_value }} out of 5</p>
                                                    </div>
                                                    <p class="mt-1 text-sm font-medium text-gray-500">
                                                        {{ $course->rating_count }} global ratings
                                                    </p>
                                                </div>

                                                <div
                                                    class="flex w-full flex-col items-center justify-between md:w-1/2">
                                                    <div class="flex w-full flex-col gap-y-4 md:px-10">
                                                        @php
                                                            $star_5 = number_format($course->rating_count ? ($course->five_star_count / $course->rating_count) * 100 : 0, 1);
                                                            $star_4 = number_format($course->rating_count ? ($course->four_star_count / $course->rating_count) * 100 : 0, 1);
                                                            $star_3 = number_format($course->rating_count ? ($course->three_star_count / $course->rating_count) * 100 : 0, 1);
                                                            $star_2 = number_format($course->rating_count ? ($course->two_star_count / $course->rating_count) * 100 : 0, 1);
                                                            $star_1 = number_format($course->rating_count ? ($course->one_star_count / $course->rating_count) * 100 : 0, 1);
                                                        @endphp
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Great</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: {{ $star_5 }}%">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">{{ $star_5 }}%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Good</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: {{ $star_4 }}%">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">{{ $star_4 }}%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Okay</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: {{ $star_3 }}%">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">{{ $star_3 }}%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Bad</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: {{ $star_2 }}%">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">{{ $star_2 }}%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Terrible</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: {{ $star_1 }}%">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">{{ $star_1 }}%</span>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--/Review stats-->

                                            <!--user review box-->
                                            @if (Auth::check() && $enrolled && !$isMaker)
                                                <div
                                                    class="mb-4 w-full rounded-lg border border-gray-200 bg-slate-100 p-4 pb-0 transition-all focus-within:border-blue-300 focus-within:bg-slate-50 hover:bg-slate-50">
                                                    <form>
                                                        <div>

                                                            <!--/review header-->
                                                            <div
                                                                class="flex items-center justify-between">
                                                                <!--user avatar-->
                                                                <div
                                                                    class="mb-3 flex items-center gap-3">
                                                                    <div
                                                                        class="h-10 w-10 rounded-full bg-white text-center">
                                                                        <img alt=""
                                                                            class="h-10 w-10 rounded-full object-cover"
                                                                            src="{{ Auth::user()->avatar }}">
                                                                    </div>
                                                                    <span
                                                                        class="font-bold">{{ Auth::user()->name }}</span>
                                                                </div>
                                                                <!--/user avatar-->

                                                                <!--stars box-->
                                                                <div class="">
                                                                    <div id="RatingStars"
                                                                        x-data="{
                                                                            rating: @entangle('reviewRate').defer,
                                                                            hoverRating: 0,
                                                                            ratings: [
                                                                                { 'amount': 1, 'label': 'Terrible' },
                                                                                { 'amount': 2, 'label': 'Bad' },
                                                                                { 'amount': 3, 'label': 'Okay' },
                                                                                { 'amount': 4, 'label': 'Good' },
                                                                                { 'amount': 5, 'label': 'Great' }
                                                                            ],
                                                                            rate(amount) {
                                                                                if (this.rating == amount) {
                                                                                    this.rating = null;
                                                                                } else this.rating = amount;
                                                                            },
                                                                            currentLabel() {
                                                                                let r = this.rating;
                                                                                if (this.hoverRating != this.rating) r = this.hoverRating;
                                                                                let i = this.ratings.findIndex(e => e.amount == r);
                                                                                if (i >= 0) { return this.ratings[i].label; } else { return '' };
                                                                            }
                                                                        }"
                                                                        class="flex items-start justify-center gap-x-3">

                                                                        <!--Stars label-->
                                                                        <div class="">
                                                                            <template
                                                                                x-if="rating || hoverRating">
                                                                                <p class="text-center"
                                                                                    x-text="currentLabel()">
                                                                                </p>
                                                                            </template>
                                                                            <template
                                                                                x-if="!rating && !hoverRating">
                                                                                <p class="text-center">
                                                                                    Your rate</p>
                                                                            </template>
                                                                        </div>
                                                                        <!--/Stars label-->

                                                                        <!--Stars SVG-->
                                                                        <div class="whitespace-nowrap">
                                                                            <template
                                                                                x-for="(star, index) in ratings"
                                                                                :key="index">

                                                                                <button type="button"
                                                                                    @click="rate(star.amount)"
                                                                                    @mouseover="hoverRating = star.amount"
                                                                                    @mouseleave="hoverRating = rating"
                                                                                    aria-hidden="true"
                                                                                    :title="star.label"
                                                                                    class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                                    :class="{
                                                                                        'text-gray-600': hoverRating >=
                                                                                            star
                                                                                            .amount,
                                                                                        'text-yellow-400': rating >=
                                                                                            star
                                                                                            .amount &&
                                                                                            hoverRating >=
                                                                                            star
                                                                                            .amount
                                                                                    }">
                                                                                    <svg class="w-6 transition duration-150"
                                                                                        viewBox="0 0 20 20"
                                                                                        fill="currentColor">
                                                                                        <path
                                                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                                    </svg>
                                                                                </button>

                                                                            </template>
                                                                        </div>
                                                                        <!--/Stars SVG-->
                                                                    </div>
                                                                    @error('reviewRate')
                                                                        <x-tooltip-arrow-up-validation-error
                                                                            :message="$message" />
                                                                    @enderror

                                                                </div>
                                                                <!--/stars box-->
                                                            </div>
                                                            <!--/review header-->

                                                            <!--Review text-->
                                                            <div
                                                                class="flex flex-row items-start gap-x-5">
                                                                <textarea wire:model.defer="reviewText"
                                                                    class="w-full overflow-hidden rounded-lg border-0 bg-white bg-opacity-50 text-base text-gray-700 placeholder-gray-700 transition-all hover:bg-opacity-75 focus:bg-opacity-100"
                                                                    placeholder="Leave a review..." rows="2" required></textarea>
                                                            </div>
                                                            @error('reviewText')
                                                                <x-tooltip-arrow-up-validation-error
                                                                    :message="$message" />
                                                            @enderror

                                                            <!--/Review text-->

                                                            <!--Review button-->
                                                            <div
                                                                class="flex items-center justify-between border-t py-2">
                                                                <button type="button"
                                                                    wire:click="postReview()"
                                                                    class="inline-flex items-center rounded-full bg-blue-500 px-4 py-2.5 text-center text-sm font-bold text-white hover:bg-blue-600 focus:ring-4 focus:ring-blue-200">
                                                                    Post review
                                                                </button>
                                                            </div>
                                                            <!--/Review button-->

                                                        </div>
                                                    </form>
                                                </div>
                                            @endif
                                            <!--/user review box-->
                                            <!-- All reviews -->
                                            <div class="grid grid-cols-2 gap-3">
                                                @foreach ($course->reviewsProcess()->get() as $review)
                                                    <div
                                                        class="relative col-span-2 flex flex-col gap-4 rounded-lg border border-gray-200 bg-slate-100 p-4 transition-all hover:bg-slate-50 md:col-span-1">
                                                        <a id="review-{{ $review->id }}"></a>
                                                        @if ($review->status == 'hold')
                                                            <div
                                                                class="absolute right-1 top-1 rounded-md bg-red-500 bg-opacity-40 p-2 text-sm text-white">
                                                                Under approval
                                                            </div>
                                                        @endif

                                                        <!-- Profile and Rating -->
                                                        <div class="justify flex justify-between">
                                                            <div class="flex items-center gap-2">
                                                                <div
                                                                    class="bg-white-500 h-8 w-8 rounded-full text-center">
                                                                    <img alt=""
                                                                        class="h-8 w-8 rounded-full object-cover"
                                                                        src="{{ $review->user?->avatar }}">
                                                                </div>
                                                                <span
                                                                    class="font-bold">{{ $review->user?->name }}</span>
                                                            </div>

                                                            <div class="flex items-center space-x-1">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    @if ($i < $review->rating)
                                                                        <svg class="h-4 w-4 text-yellow-500"
                                                                            aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="currentColor"
                                                                            viewBox="0 0 22 20">
                                                                            <path
                                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                        </svg>
                                                                    @else
                                                                        <svg class="h-4 w-4 text-gray-300  "
                                                                            aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="currentColor"
                                                                            viewBox="0 0 22 20">
                                                                            <path
                                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                        </svg>
                                                                    @endif
                                                                @endfor
                                                            </div>

                                                        </div>

                                                        <div>
                                                            {{ $review->review }}
                                                        </div>

                                                        <div class="flex justify-between">
                                                            <span
                                                                title="{{ $review->updated_at->format('M d, Y') }}">{{ $review->updated_at->diffForHumans() }}</span>
                                                            <!--<button class="border border-gray-950 bg-white bg-opacity-60 p-1 px-2 hover:bg-slate-200">
                                                                                        <ion-icon name="share-outline"></ion-icon> Share
                                                                                    </button>-->

                                                        </div>
                                                        <div class="pl-10">
                                                            @if ($review->reply)
                                                                <div class="relative">
                                                                    <div>
                                                                        <a
                                                                            id="review-{{ $review->reply->id }}"></a>
                                                                        @if ($review->reply->status == 'hold')
                                                                            <div
                                                                                class="absolute right-1 top-1 rounded-md bg-red-500 bg-opacity-40 p-2 text-sm text-white">
                                                                                Under approval
                                                                            </div>
                                                                        @endif

                                                                    </div>
                                                                    <div>
                                                                        <div
                                                                            class="flex items-center justify-between">
                                                                            <!--user avatar-->
                                                                            <div
                                                                                class="mb-3 flex items-center gap-3">
                                                                                <div
                                                                                    class="h-10 w-10 rounded-full bg-white text-center">
                                                                                    <img alt=""
                                                                                        class="h-10 w-10 rounded-full object-cover"
                                                                                        src="{{ $review->reply->user->avatar }}">
                                                                                </div>
                                                                                <span
                                                                                    class="font-bold">{{ $review->reply->user->name }}</span>
                                                                            </div>
                                                                            <!--/user avatar-->
                                                                        </div>
                                                                        <!--/review header-->

                                                                        <!--Review text-->
                                                                        <div>
                                                                            {{ $review->reply->review }}
                                                                        </div>
                                                                        <div
                                                                            class="flex justify-between">
                                                                            <span
                                                                                title="{{ $review->reply->updated_at->format('M d, Y') }}">{{ $review->reply->updated_at->diffForHumans() }}</span>
                                                                        </div>
                                                                        <!--/Review text-->
                                                                    </div>
                                                                </div>
                                                            @elseif($isMaker)
                                                                <div>
                                                                    <!--/review header-->
                                                                    <div
                                                                        class="flex items-center justify-between">
                                                                        <!--user avatar-->
                                                                        <div
                                                                            class="mb-3 flex items-center gap-3">
                                                                            <div
                                                                                class="h-10 w-10 rounded-full bg-white text-center">
                                                                                <img alt=""
                                                                                    class="h-10 w-10 rounded-full object-cover"
                                                                                    src="{{ Auth::user()->avatar }}">
                                                                            </div>
                                                                            <span
                                                                                class="font-bold">{{ Auth::user()->name }}</span>
                                                                        </div>
                                                                        <!--/user avatar-->
                                                                    </div>
                                                                    <!--/review header-->

                                                                    <!--Review text-->
                                                                    <div
                                                                        class="flex flex-row items-start gap-x-5">
                                                                        <textarea wire:model.defer="reviewReplyText"
                                                                            class="w-full overflow-hidden rounded-lg border-0 bg-white bg-opacity-50 text-base text-gray-700 placeholder-gray-700 transition-all hover:bg-opacity-75 focus:bg-opacity-100"
                                                                            placeholder="Leave a reply..." rows="2" required></textarea>
                                                                    </div>
                                                                    @error('reviewReplyText')
                                                                        <x-tooltip-arrow-up-validation-error
                                                                            :message="$message" />
                                                                    @enderror

                                                                    <!--/Review text-->

                                                                    <!--Review button-->
                                                                    <div
                                                                        class="flex items-center justify-between border-t py-2">
                                                                        <button type="button"
                                                                            wire:click="postReviewReply('{{ encrypt($review->id) }}')"
                                                                            class="inline-flex items-center rounded-full bg-blue-500 px-4 py-2.5 text-center text-sm font-bold text-white hover:bg-blue-600 focus:ring-4 focus:ring-blue-200">
                                                                            Post reply
                                                                        </button>
                                                                    </div>
                                                                    <!--/Review button-->

                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <!--/All reviews-->

                                        </div>
                                    </div>
                                    <!--/reviews-->

                                </x-course-details-field>
                                <!-------END Reviews section-------->

                                {{--
                                <x-course-details-field title="Reviews">
                                    --}}
                                {{--                                        --------------------- --}}{{--


                                    <!--reviews-->
                                    <div class="mx-auto h-full rounded-lg">
                                        <div
                                            class="flex w-full flex-col gap-5 rounded-lg bg-white p-5 pb-52 text-gray-500">

                                            <!--Review stats-->
                                            <div
                                                class="mb-6 flex w-full flex-col items-center justify-center gap-y-10 md:flex-row">

                                                <div
                                                    class="flex w-full flex-col items-center justify-between md:w-1/2">
                                                    <div class="flex flex-col items-center">
                                                        <svg fill="currentColor" class="h-10 w-10"
                                                            viewBox="0 0 24 24" xml:space="preserve">
                                                            <path
                                                                d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
                                                            </path>
                                                        </svg>
                                                        <h1 class="text-center text-lg font-bold">
                                                            Total reviews</h1>
                                                    </div>

                                                    <div class="mt-3 flex items-center">
                                                        <svg class="mr-1 h-4 w-4 text-yellow-500"
                                                            aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="mr-1 h-4 w-4 text-yellow-500"
                                                            aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="mr-1 h-4 w-4 text-yellow-500"
                                                            aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="mr-1 h-4 w-4 text-yellow-500"
                                                            aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="mr-1 h-4 w-4 text-gray-300  "
                                                            aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 22 20">
                                                            <path
                                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                            </path>
                                                        </svg>
                                                        <p class="text-sm font-medium text-gray-900">
                                                            4.95 out of 5</p>
                                                    </div>

                                                    <p
                                                        class="mt-1 text-sm font-medium text-gray-500">
                                                        1,745 global ratings</p>
                                                </div>

                                                <div
                                                    class="flex w-full flex-col items-center justify-between md:w-1/2">
                                                    <div
                                                        class="flex w-full flex-col gap-y-4 md:px-10">
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Great</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: 70%"></div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">70%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Good</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: 17%"></div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">17%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Okay</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: 8%"></div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">8%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Bad</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: 4%"></div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">4%</span>
                                                        </div>
                                                        <div class="flex w-full items-center">
                                                            <a href="#"
                                                                class="w-[10%] text-sm font-medium text-blue-600 hover:underline ">Terrible</a>
                                                            <div
                                                                class="mx-4 h-5 w-[85%] rounded bg-gray-200 ">
                                                                <div class="h-5 rounded bg-yellow-500"
                                                                    style="width: 1%"></div>
                                                            </div>
                                                            <span
                                                                class="w-[5%] text-sm font-medium text-gray-500 ">1%</span>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--/Review stats-->

                                            <!--user review box-->
                                            <div
                                                class="mb-4 w-full rounded-lg border border-gray-200 bg-slate-100 p-4 pb-0 transition-all focus-within:border-blue-300 focus-within:bg-slate-50 hover:bg-slate-50">
                                                <form>
                                                    <div>

                                                        <!--/review header-->
                                                        <div
                                                            class="flex items-center justify-between">
                                                            <!--user avatar-->
                                                            <div
                                                                class="mb-3 flex items-center gap-3">
                                                                <div
                                                                    class="h-10 w-10 rounded-full bg-white text-center">
                                                                    <img alt=""
                                                                        class="h-10 w-10 rounded-full object-cover"
                                                                        src="{{ Auth::user()->avatar }}">
                                                                </div>
                                                                <span
                                                                    class="font-bold">{{ Auth::user()->name }}</span>
                                                            </div>
                                                            <!--/user avatar-->

                                                            <!--stars box-->
                                                            <div class="">
                                                                <div x-data="{
                                                                    rating: 0,
                                                                    hoverRating: 0,
                                                                    ratings: [{ 'amount': 1, 'label': 'Terrible' }, { 'amount': 2, 'label': 'Bad' }, { 'amount': 3, 'label': 'Okay' }, { 'amount': 4, 'label': 'Good' }, { 'amount': 5, 'label': 'Great' }],
                                                                    rate(amount) {
                                                                        if (this.rating == amount) {
                                                                            this.rating = 0;
                                                                        } else this.rating = amount;
                                                                    },
                                                                    currentLabel() {
                                                                        let r = this.rating;
                                                                        if (this.hoverRating != this.rating) r = this.hoverRating;
                                                                        let i = this.ratings.findIndex(e => e.amount == r);
                                                                        if (i >= 0) { return this.ratings[i].label; } else { return '' };
                                                                    }
                                                                }"
                                                                    class="flex items-start justify-center gap-x-3">

                                                                    <!--Stars label-->
                                                                    <div class="">
                                                                        <template
                                                                            x-if="rating || hoverRating">
                                                                            <p class="text-center"
                                                                                x-text="currentLabel()">
                                                                            </p>
                                                                        </template>
                                                                        <template
                                                                            x-if="!rating && !hoverRating">
                                                                            <p class="text-center">
                                                                                Your rate</p>
                                                                        </template>
                                                                        <p class="text-center">
                                                                            Your rate</p>
                                                                    </div>
                                                                    <!--/Stars label-->

                                                                    <!--Stars SVG-->
                                                                    <div class="whitespace-nowrap">
                                                                        <template
                                                                            x-for="(star, index) in ratings"
                                                                            :key="index">

                                                                            <button type="button"
                                                                                @click="rate(star.amount)"
                                                                                @mouseover="hoverRating = star.amount"
                                                                                @mouseleave="hoverRating = rating"
                                                                                aria-hidden="true"
                                                                                :title="star.label"
                                                                                class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                                :class="{
                                                                                    'text-gray-600': hoverRating >=
                                                                                        star
                                                                                        .amount,
                                                                                    'text-yellow-400': rating >=
                                                                                        star
                                                                                        .amount &
                                                                                        amp; &
                                                                                    amp;hoverRating >=
                                                                                    star.amount
                                                                                }">
                                                                                <svg class="w-6 transition duration-150"
                                                                                    viewBox="0 0 20 20"
                                                                                    fill="currentColor">
                                                                                    <path
                                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                    </path>
                                                                                </svg>
                                                                            </button>

                                                                        </template><button
                                                                            type="button"
                                                                            @click="rate(star.amount)"
                                                                            @mouseover="hoverRating = star.amount"
                                                                            @mouseleave="hoverRating = rating"
                                                                            aria-hidden="true"
                                                                            :title="star.label"
                                                                            class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                            :class="{
                                                                                'text-gray-600': hoverRating >=
                                                                                    star
                                                                                    .amount,
                                                                                'text-yellow-400': rating >=
                                                                                    star.amount &
                                                                                    amp; &
                                                                                amp;hoverRating >=
                                                                                star.amount
                                                                            }"
                                                                            title="Terrible">
                                                                            <svg class="w-6 transition duration-150"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor">
                                                                                <path
                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                </path>
                                                                            </svg>
                                                                        </button><button
                                                                            type="button"
                                                                            @click="rate(star.amount)"
                                                                            @mouseover="hoverRating = star.amount"
                                                                            @mouseleave="hoverRating = rating"
                                                                            aria-hidden="true"
                                                                            :title="star.label"
                                                                            class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                            :class="{
                                                                                'text-gray-600': hoverRating >=
                                                                                    star
                                                                                    .amount,
                                                                                'text-yellow-400': rating >=
                                                                                    star.amount &
                                                                                    amp; &
                                                                                amp;hoverRating >=
                                                                                star.amount
                                                                            }"
                                                                            title="Bad">
                                                                            <svg class="w-6 transition duration-150"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor">
                                                                                <path
                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                </path>
                                                                            </svg>
                                                                        </button><button
                                                                            type="button"
                                                                            @click="rate(star.amount)"
                                                                            @mouseover="hoverRating = star.amount"
                                                                            @mouseleave="hoverRating = rating"
                                                                            aria-hidden="true"
                                                                            :title="star.label"
                                                                            class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                            :class="{
                                                                                'text-gray-600': hoverRating >=
                                                                                    star
                                                                                    .amount,
                                                                                'text-yellow-400': rating >=
                                                                                    star.amount &
                                                                                    amp; &
                                                                                amp;hoverRating >=
                                                                                star.amount
                                                                            }"
                                                                            title="Okay">
                                                                            <svg class="w-6 transition duration-150"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor">
                                                                                <path
                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                </path>
                                                                            </svg>
                                                                        </button><button
                                                                            type="button"
                                                                            @click="rate(star.amount)"
                                                                            @mouseover="hoverRating = star.amount"
                                                                            @mouseleave="hoverRating = rating"
                                                                            aria-hidden="true"
                                                                            :title="star.label"
                                                                            class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                            :class="{
                                                                                'text-gray-600': hoverRating >=
                                                                                    star
                                                                                    .amount,
                                                                                'text-yellow-400': rating >=
                                                                                    star.amount &
                                                                                    amp; &
                                                                                amp;hoverRating >=
                                                                                star.amount
                                                                            }"
                                                                            title="Good">
                                                                            <svg class="w-6 transition duration-150"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor">
                                                                                <path
                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                </path>
                                                                            </svg>
                                                                        </button><button
                                                                            type="button"
                                                                            @click="rate(star.amount)"
                                                                            @mouseover="hoverRating = star.amount"
                                                                            @mouseleave="hoverRating = rating"
                                                                            aria-hidden="true"
                                                                            :title="star.label"
                                                                            class="focus:shadow-outline w-fit cursor-pointer rounded-sm fill-current text-gray-300 focus:outline-none"
                                                                            :class="{
                                                                                'text-gray-600': hoverRating >=
                                                                                    star
                                                                                    .amount,
                                                                                'text-yellow-400': rating >=
                                                                                    star.amount &
                                                                                    amp; &
                                                                                amp;hoverRating >=
                                                                                star.amount
                                                                            }"
                                                                            title="Great">
                                                                            <svg class="w-6 transition duration-150"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor">
                                                                                <path
                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <!--/Stars SVG-->

                                                                </div>
                                                            </div>
                                                            <!--/stars box-->
                                                        </div>
                                                        <!--/review header-->

                                                        <!--Review text-->
                                                        <div
                                                            class="flex flex-row items-start gap-x-5">
                                                            <textarea wire:model.defer="reviewText"
                                                                class="w-full overflow-hidden rounded-lg border-0 bg-white bg-opacity-50 text-base text-gray-700 placeholder-gray-700 transition-all hover:bg-opacity-75 focus:bg-opacity-100"
                                                                placeholder="Leave a review..." rows="2" required=""></textarea>

                                                        </div>
                                                        @error('reviewText')
                                                            <x-tooltip-arrow-up-validation-error
                                                                :message="$message" />
                                                        @enderror
                                                        <!--/Review text-->

                                                        <!--Review button-->
                                                        <div
                                                            class="flex items-center justify-between border-t py-2">
                                                            <button type="button"
                                                                wire:click="postReview()"
                                                                class="inline-flex items-center rounded-full bg-blue-500 px-4 py-2.5 text-center text-sm font-bold text-white hover:bg-blue-600 focus:ring-4 focus:ring-blue-200">
                                                                Post review
                                                            </button>
                                                        </div>
                                                        <!--/Review button-->

                                                    </div>
                                                </form>
                                            </div>
                                            <!--/user review box-->

                                            <!-- All reviews -->
                                            <div class="flex grid grid-cols-2 gap-3">

                                                <div
                                                    class="col-span-2 flex flex-col gap-4 rounded-lg border border-gray-200 bg-slate-100 p-4 transition-all hover:bg-slate-50 md:col-span-1">
                                                    <!-- Profile and Rating -->
                                                    <div class="justify flex justify-between">

                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="bg-white-500 h-8 w-8 rounded-full text-center">
                                                                <img alt=""
                                                                    class="h-8 w-8 rounded-full object-cover"
                                                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                            </div>
                                                            <span class="font-bold">Jess
                                                                Hopkins</span>
                                                        </div>

                                                        <div class="flex items-center space-x-1">
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-gray-300  "
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        Gorgeous design! Even more responsive
                                                        than the previous version. A pleasure to
                                                        use!
                                                    </div>

                                                    <div class="flex justify-between">

                                                        <span>Feb 13, 2021</span>

                                                        <!--<button class="border border-gray-950 bg-white bg-opacity-60 p-1 px-2 hover:bg-slate-200">
                                                                <ion-icon name="share-outline"></ion-icon> Share
                                                            </button>-->

                                                    </div>
                                                </div>

                                                <div
                                                    class="col-span-2 flex flex-col gap-4 rounded-lg border border-gray-200 bg-slate-100 p-4 transition-all hover:bg-slate-50 md:col-span-1">
                                                    <!-- Profile and Rating -->
                                                    <div class="justify flex justify-between">

                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="bg-white-500 h-8 w-8 rounded-full text-center">
                                                                <img alt=""
                                                                    class="h-8 w-8 rounded-full object-cover"
                                                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                            </div>
                                                            <span class="font-bold">Jess
                                                                Hopkins</span>
                                                        </div>

                                                        <div class="flex items-center space-x-1">
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-gray-300  "
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        Gorgeous design! Even more responsive
                                                        than the previous version. A pleasure to
                                                        use!
                                                    </div>

                                                    <div class="flex justify-between">

                                                        <span>Feb 13, 2021</span>

                                                        <!--<button class="border border-gray-950 bg-white bg-opacity-60 p-1 px-2 hover:bg-slate-200">
                                                                <ion-icon name="share-outline"></ion-icon> Share
                                                            </button>-->

                                                    </div>
                                                </div>

                                                <div
                                                    class="col-span-2 flex flex-col gap-4 rounded-lg border border-gray-200 bg-slate-100 p-4 transition-all hover:bg-slate-50 md:col-span-1">
                                                    <!-- Profile and Rating -->
                                                    <div class="justify flex justify-between">

                                                        <div class="flex items-center gap-2">
                                                            <div
                                                                class="bg-white-500 h-8 w-8 rounded-full text-center">
                                                                <img alt=""
                                                                    class="h-8 w-8 rounded-full object-cover"
                                                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                            </div>
                                                            <span class="font-bold">Jess
                                                                Hopkins</span>
                                                        </div>

                                                        <div class="flex items-center space-x-1">
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-yellow-500"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="h-4 w-4 text-gray-300  "
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z">
                                                                </path>
                                                            </svg>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        Gorgeous design! Even more responsive
                                                        than the previous version. A pleasure to
                                                        use!
                                                    </div>

                                                    <div class="flex justify-between">

                                                        <span>Feb 13, 2021</span>

                                                        <!--<button class="border border-gray-950 bg-white bg-opacity-60 p-1 px-2 hover:bg-slate-200">
                                                                <ion-icon name="share-outline"></ion-icon> Share
                                                            </button>-->

                                                    </div>
                                                </div>

                                            </div>
                                            <!--/All reviews-->

                                        </div>
                                    </div>
                                    <!--/reviews-->

                                    --}}
                                {{--                                        --------------------- --}}{{--


                                </x-course-details-field>
--}}
                            </div>
                            <!--/Public-->
                        @elseif ($content == 'Certificates')
                            @livewire('student-certificate', ['course' => $course], key('certificates'))
                        @else
                            <!-- Content -->
                            @if (get_class($content) == App\Models\Lecture::class)
                                @livewire('student-lecture', ['content' => $content, 'course' => $course], key('Lecture-' . $content->id))
                            @endif
                            @if (get_class($content) == App\Models\Assignment::class)
                                @livewire('student-assignment', ['content' => $content], key('Assignment-' . $content->id))
                            @endif
                            @if (get_class($content) == App\Models\Quiz::class)
                                @livewire('student-quiz', ['content' => $content], key('Quiz-' . $content->id))
                            @endif
                            <!-- END Content -->
                        @endif
                    </div>
                    <!--END Content area -->
                </div>
                @if (!$enrolled && !$isMaker)
                    <!--Right Col-->
                    <div class="order-last hidden w-72 overflow-y-scroll md:block">
                        <div class="max-w group relative block cursor-pointer overflow-hidden bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100"
                            @click="$dispatch('vid-modal', {  vidModalImgSrc: '{{ $course->video?->getUrl() }}', vidModalImgDesc: '' })">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="absolute left-1/2 top-1/2 z-10 h-8 w-auto -translate-x-1/2 -translate-y-1/2 text-white transition-opacity group-hover:opacity-25">
                                <path
                                    d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                                </path>
                            </svg>
                            <img src="{{ $course->video?->preview_url }}" alt=""
                                class="pointer-events-none object-cover transition-opacity group-hover:opacity-75">
                            <button type="button" class="absolute inset-0 focus:outline-none">
                                <span class="sr-only">View details for IMG_4985.HEIC</span>
                            </button>
                        </div>

                        {{-- <div class="col-span-1 flex h-16 mt-4">
<div
class="flex w-16 flex-shrink-0 items-center justify-center text-sm font-medium text-gray-500">
<img class="h-8 w-8 rounded-full object-contain" src="{{$course->maker?->avatar}}" alt="">
</div>
<div class="flex flex-1 items-center justify-between truncate">
<div class="flex-1 truncate px-4 py-2 text-sm">
<a href="#" class="font-bold text-gray-900 hover:text-gray-600 ">{{$course->title}}</a>
</div>
</div>
</div> --}}

                        {{-- <ul role="list" class="mt-3 grid grid-cols-1 gap-3">
@foreach ($relatedCourses as $course)
<li class="col-span-1 flex shadow-sm border-t border-r border-b border-gray-200 h-16">
<div
class="flex w-16 flex-shrink-0 items-center justify-center border-l-2  text-sm font-medium text-gray-500">
<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
fill="currentColor" class="h-6 w-6">
<path
    d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z">
</path>
</svg>
</div>
<div class="flex flex-1 items-center justify-between truncate">
<div class="flex-1 truncate px-4 py-2 text-sm">
<a href="#"
    class="font-medium text-gray-900 hover:text-gray-600">{{$course->title}}</a>
<p class="text-gray-500">{{$course->sale_price ?? $course->price}}</p>
</div>
<div class="flex-shrink-0 pr-2">
<button type="button"
    class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white bg-transparent text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
    <span class="sr-only">Open options</span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
        xml:space="preserve" fill="currentColor" class="h-5 w-5">
        <g>
            <circle cx="256" cy="42.667" r="42.667"></circle>
            <circle cx="256" cy="256" r="42.667"></circle>
            <circle cx="256" cy="469.333" r="42.667"></circle>
        </g>
    </svg>
</button>
</div>
</div>
</li>
@endforeach
</ul> --}}

                    </div>
                    <!--End Right Col-->
                @endif
            </section>
            <!--END Primary column (Content area)-->
        </main>
    </div>
    <!--End Course-->
</div>
