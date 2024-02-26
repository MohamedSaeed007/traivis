<!--Influencer Campaigns-->
<div class="w-full md:w-1/2  group/s p-5 shadow-sm hover:shadow-lg rounded-lg shadow-dashboard items-center text-gray-500 hover:scale-[105%] focus-within:bg-white hover:text-indigo-500 focus-within:text-indigo-500 transition-all">
    <div class="flex justify-center ">

        <div class="w-3/5 p-5 flex flex-col text-center justify-center">
            <p class="w-full self-center font-semibold text-6xl mx-auto tracking-tighter p-1">
                {{ $influencerCompaign }}
            </p >
            <p class="w-full text-3xl p-1">Influencer Campaigns</p>
        </div>

        <div class="w-2/5 p-4 mx-6 space-y-8 whitespace-nowrap">

            <!--Waiting-->
            <a href="#" class="w-[140px] px-3 py-1 flex justify-between text-slate-500 font-bold bg-white items-center rounded-full transition-all border border-slate-300 hover:text-blue-500 focus:text-blue-500 hover:border-blue-300 focus:border-blue-500 focus:bg-blue-50">

                <svg class="h-4 w-4 group-hover/s:text-blue-500 shrink-0 fill-current" viewBox="0 0 24 24"><path d="m23 16a1 1 0 0 1 -.446-.105l-2-1a1 1 0 0 1 .894-1.79l2 1a1 1 0 0 1 -.448 1.895zm-1.553-9.1 2-1a1 1 0 1 0 -.894-1.79l-2 1a1 1 0 0 0 .894 1.79zm2.553 3.1a1 1 0 0 0 -1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1zm-6 9v-18a1 1 0 0 0 -2 0c0 2.949-2.583 4-5 4h-7a4 4 0 0 0 -4 4v2a4 4 0 0 0 4 4h7c2.417 0 5 1.051 5 4a1 1 0 0 0 2 0zm-9.814-2h-4.186a6 6 0 0 1 -1.382-.167l2.5 5.582a2.671 2.671 0 0 0 2.44 1.585 2.462 2.462 0 0 0 2.242-3.472z"/></svg>

                <div class="w-full pl-2 justify-between flex items-center gap-x1">
                    <p class=" text-sm ">Influencer </p>
                    <p class="">{{ $influencerOffers->count()  }}</p>
                </div>
            </a>
            <!--/Waiting-->

            <!--Published-->
            <a href="#" class="w-[140px] px-3 py-1 flex justify-between text-slate-500 font-bold bg-white items-center rounded-full transition-all border border-slate-300 hover:text-blue-600 focus:text-blue-600 hover:border-blue-300 focus:border-blue-600 focus:bg-blue-50">

                <svg class="h-4 w-4 group-hover/s:text-blue-600 shrink-0 fill-current" x="0px" y="0px" viewBox="0 0 512.19 512.19" style="enable-background:new 0 0 512.19 512.19;" xml:space="preserve" width="512" height="512"><g><circle cx="256.095" cy="256.095" r="85.333"></circle><path d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z"></path></g></svg>

                <div class="w-full pl-2 justify-between flex items-center gap-x1">
                    <p class=" text-sm ">Reach </p>
                    <p class="">{{ $influencerOffers->sum('reached')  }}</p>
                </div>
            </a>
            <!--/Published-->

            <!--Declined-->
            <a href="#" class="w-[140px] px-3 py-1 flex justify-between text-slate-500 font-bold bg-white items-center rounded-full transition-all border border-slate-300 hover:text-indigo-500 focus:text-indigo-500 hover:border-indigo-300 focus:border-indigo-500 focus:bg-indigo-50">

                <svg class="h-4 w-4 group-hover/s:text-indigo-600 shrink-0 fill-current" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg>

                <div class="w-full pl-2 justify-between flex items-center gap-x1">
                    <p class=" text-sm ">Enrolled </p>
                    <p class="">{{ $influencerOffers->sum('enrolled')  }}</p>
                </div>
            </a>
            <!--/Declined-->

        </div>

    </div>
</div>
<!--/Influencer Campaigns-->