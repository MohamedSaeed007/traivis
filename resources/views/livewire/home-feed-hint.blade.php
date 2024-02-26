<div>
    @if ($display == 'horizontal')
        <ul role="list"
            class="mt-5 flex touch-pan-x snap-x snap-mandatory gap-x-4 gap-y-8 overflow-hidden p-4 hover:overflow-x-scroll sm:gap-x-6">
            @foreach ($hints as $hint)
                <li class="snap-center">
                    {{--
            <x-video-container class="w-32 rounded-lg" video-src="{{$hint->getFirstMediaUrl().'?autoplay=1'}}" /> --}}

                    <x-video-container class="w-32 rounded-lg"
                        video-src="'{{ $hint->getFirstMediaUrl() }}'" />
                    {{-- <div
                class="group relative block overflow-hidden bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 cursor-pointer w-32 rounded-lg items-center flex"
                vidmodalimgsrc:="" vidmodalimgdesc:="">

                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-auto  z-10 text-white group-hover:opacity-25 transition-opacity">
                    <path
                        d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                    </path>
                </svg>
                <img src="https://dummyimage.com/640x360/000/fff.jpg" alt=""
                    class="pointer-events-none object-cover group-hover:opacity-75 transition-opacity">
                <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                </button>

            </div> --}}
                </li>
            @endforeach
        </ul>
    @endif
    @if ($display == 'vertical')
        @foreach ($hints as $hint)
            <div @click="$dispatch('vid-modal', { vidModalImgSrc: '{{ $hint->getFirstMediaUrl() }}', vidModalImgDesc: '' })"
                class="group relative mb-5 flex h-[720px] w-[460px] cursor-pointer items-center justify-center rounded-lg bg-gray-100 shadow-md shadow-slate-500 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                <!--user-->
                <div class="absolute bottom-5 left-1/2 z-10 flex items-center -translate-x-1/2 gap-x-3 space-x-3">

                    <!-- User Avatar -->
                    <div class="relative">
                        <div class="flex-shrink-0">
                            <img loading="lazy" alt="" class="w-10 h-10 rounded-full"
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
                                    <h2 class="text-lg font-semibold drop-shadow-md">
                                        {{ $hint->business->business_name }}</h2>
                                </a>
                            @elseif ($hint->user)
                                <a href="{{ route('user-profile-social', $hint->user->id) }}"
                                    target="_blank">
                                    <h2 class="text-lg font-semibold drop-shadow-md">
                                        {{ $hint->user->name }}</h2>
                                </a>
                            @endif
                            <svg class="my-auto ml-2 h-5 text-traivis-500" fill="currentColor"
                                height="24" version="1.1" viewBox="0 0 24 24" width="24"
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
                <img loading="lazy" class="pointer-events-none h-[720px] rounded-lg object-cover object-center transition-all group-hover:opacity-80"
                    src="{{ asset('assets/images/wallpaper.jpg') }}">
                <!--video-->
                <svg class="absolute left-1/2 top-1/2 z-10 z-20 h-8 -translate-x-1/2 -translate-y-1/2 text-white transition-all group-hover:scale-125"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                    </path>
                </svg>
                <button class="absolute inset-0 focus:outline-none" type="button">
                    <span class="sr-only">View Hint</span>
                </button>
            </div>
        @endforeach
    @endif
</div>
