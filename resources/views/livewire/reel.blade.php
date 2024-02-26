<div>
    <ul role="list" class="flex touch-pan-x snap-x snap-mandatory gap-x-4 gap-y-8 overflow-hidden p-4 hover:overflow-x-scroll sm:gap-x-6">

    @foreach ($user->reels as $reel)
    <li class="snap-center">
    <div class="group relative block overflow-hidden bg-gray-100 focus-within:ring-2 focus-within:ring-traivis-500
                focus-within:ring-offset-2 focus-within:ring-offset-gray-100 cursor-pointer w-32 rounded-lg items-center flex" vidmodalimgsrc:="" vidmodalimgdesc:="">
        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-8 w-auto  z-10 text-white group-hover:opacity-25 transition-opacity">
            <path d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z"></path>
        </svg>
        <img src="https://dummyimage.com/640x360/000/fff.jpg" alt=""
                class="pointer-events-none object-cover group-hover:opacity-75 transition-opacity">
        <button type="button" class="absolute inset-0 focus:outline-none">
            <span class="sr-only">View details for IMG_4985.HEIC</span>
        </button>
    </div>
    </li>
    @endforeach
    </ul>
</div>
