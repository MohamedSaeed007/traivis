<section aria-labelledby="who-to-follow-heading">
    <div class="bg-white transition-colors">
        @foreach ($ads as $ad)
        <div class="">
            <div class="flow-root">
                <div class="w-full bg-white transition-colors">
                    <a href="#"><img loading="lazy" src="{{$ad->getFirstMediaUrl()}}" alt=""></a>
                    <div class="mb-8 px-2 pb-5">

                        <a href="#">
                            <h5 class="py-3 text-lg font-bold tracking-tight text-gray-500">
                                {{$ad->title}}</h5>
                        </a>

                        {{-- <div class="flex items-center justify-between justify-items-center">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full object-contain"
                                        src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>
                                <span class="mr-2 ml-3 font-bold text-gray-500">Lima
                                    Jemise</span>
                            </div>

                            <div class="flex-shrink-0">
                                <button type="button"
                                    class="inline-flex items-center rounded-full border-2 border-gray-200 bg-gray-50 px-3 py-0.5 text-sm font-medium text-gray-700 hover:bg-gray-100">
                                    <!-- Heroicon name: solid/plus-sm -->
                                    <svg class="-ml-1 mr-0.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span> Book ! </span>
                                </button>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>