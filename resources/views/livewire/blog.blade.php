<div>
    @forelse ($user->blogs()->take(5)->latest()->get() as $blog)
    <!--blog thumb-->
    <div class="container mx-auto my-5">
        <div class="-mx-4 flex flex-wrap items-center">
            <!--blog-->
            <div class="group mb-8 flex w-full flex-wrap px-8">
                <!--blog image-->
                <div class="w-full">
                    <a class="mb-6 inline-block w-full overflow-hidden rounded-md md:mb-0"
                        href="#">
                        <img class="h-32 w-full object-cover"
                            src="{{ $blog->getFirstMediaUrl() }}">
                    </a>
                </div>
                <!--/Read image-->
                <!--blog content-->
                <div class="w-full px-2 md:w-2/3 md:flex-1 md:flex-wrap">

                    <!--blog title-->
                    <a class="w-full font-semibold leading-tight text-gray-500 group-hover:text-gray-900"
                        href="#">
                        {{ $blog->title }}
                    </a>
                    <!--/ blog title-->

                    <!--Read Blog-->
                    <a class="mt-2 inline-flex items-center rounded-full border border-gray-200 text-base font-bold text-slate-500 hover:bg-gray-50 hover:text-traivis-500"
                        href="{{ route('post_proxy',['id'=>$blog->id]) }}">
                        <span class="mr-3">Read Blog</span>
                        <svg class="h-5 w-5" data-name="Layer 1" fill="currentColor"
                            height="512" id="Layer_1" viewBox="0 0 24 24" width="512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.836,.029C9.371-.205,5.962,1.065,3.509,3.521,1.057,5.976-.211,9.378,.029,12.854c.441,6.354,6.053,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.097,.454,12.836,.029Zm4.164,13.971c0,.552-.447,1-1,1s-1-.448-1-1v-3.559l-6.294,6.268c-.195,.194-.451,.292-.706,.292-.257,0-.514-.098-.709-.294-.39-.391-.388-1.024,.003-1.414l6.318-6.292h-3.612c-.553,0-1-.448-1-1s.447-1,1-1h4c1.654,0,3,1.346,3,3v4Z">
                            </path>
                        </svg>
                    </a>
                    <!--/Read Blog-->

                </div>
                <!--blog content-->
            </div>
            <!--/blog-->

        </div>
    </div>
    <!--blog thumb-->

    @empty
    @endforelse
</div>
