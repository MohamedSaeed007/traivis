<section x-data="{ OfferList: 'Current' }" class="">
    <div class="container mx-auto">
        <!--stats-->
        <div class=" ">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-x-8 text-gray-500">

                <!--Offers-->
                <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                    <div class="w-fit items-center flex mx-auto rounded-lg gap-x-5">

                        <button class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2 flex flex-col items-center">
                            <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                <svg fill="currentColor" class=" w-10 h-10" viewBox="0 0 24 24"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                                <span>{{ $campaignsAccepted->count()  + $campaignsRejected->count()  + $campaignsActive->count()  }}</span>
                            </h2>
                            <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">
                                Offers
                            </h3>
                        </button>

                        <div class="flex flex-col gap-x-3">

                            <button class="flex justify-between whitespace-nowrap w-28 mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-red-50 hover:text-red-500 hover:border-red-500 border border-gray-300 font-bold text-sm">

                                <span class="pr-2">{{ $campaignsRejected->count() }}</span>
                                <div class="flex items-center gap-x-1 ">
                                    <svg fill="currentColor" class="h-3 w-3" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z"></path></g></svg>
                                    <span>Rejected</span>
                                </div>
                            </button>

                            <butto class="flex justify-between whitespace-nowrap w-28 mx-auto mt-3 text-center px-2 py-1 rounded-full hover:bg-indigo-50 hover:text-indigo-500 hover:border-indigo-500 border border-gray-300 font-bold text-sm">

                                <span class="pr-2">{{ $campaignsAccepted->count() }}</span>
                                <div class="flex items-center gap-x-1 ">
                                    <svg fill="currentColor" class="h-3 w-3" viewBox="0 0 24 24"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm6.2,10.512l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013.387.394.381,1.027-.014,1.414Z"></path></svg>
                                    <span>Accepted</span>
                                </div>
                            </butto>
                        </div>

                    </div>
                </div>
                <!--/Offers-->

                <!--Reach-->
                <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                    <div class="w-fit items-center flex mx-auto rounded-lg gap-x-5">

                        <div class="flex flex-col md:mr-5 md:mb-0 md:mt-0 mb-2 flex flex-col items-center">
                            <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                <svg fill="currentColor" class="h-10 w-10" x="0px" y="0px" viewBox="0 0 512.19 512.19" style="enable-background:new 0 0 512.19 512.19;" xml:space="preserve" width="512" height="512"><g><circle cx="256.095" cy="256.095" r="85.333"></circle><path d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z"></path></g></svg>
                                <span>{{ $offers->sum('reached') }}</span>
                            </h2>
                            <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">
                                Reached People
                            </h3>
                        </div>


                    </div>
                </div>
                <!--/Reach-->

                <!--Enrolled-->
                <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                    <div class="w-fit items-center flex flex-col mx-auto rounded-lg ">
                        <div class="flex flex-col items-center">
                            <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                <svg fill="currentColor" class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg>
                                <span>{{ $offers->sum('enrolled') }}</span>
                            </h2>
                            <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">Enrolled Students</h3>
                        </div>
                    </div>
                </div>
                <!--/Enrolled-->

                <!--Earnings-->
                <div class="cursor-pointer w-full xl:w-1/4 p-3 mb-16 border-b-4 border-transparent hover:border-indigo-500 transition-all">
                    <div class="w-fit items-center flex flex-col mx-auto rounded-lg ">
                        <div class="flex flex-col items-center">
                            <h2 class="text-center font-semibold text-6xl tracking-tighter flex justify-center items-center gap-x-2">
                                <svg class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24" width="512" height="512"><path d="M9,4c0-2.209,3.358-4,7.5-4s7.5,1.791,7.5,4-3.358,4-7.5,4-7.5-1.791-7.5-4Zm7.5,6c-1.027,0-2.001-.115-2.891-.315-1.359-1.019-3.586-1.685-6.109-1.685-4.142,0-7.5,1.791-7.5,4s3.358,4,7.5,4,7.5-1.791,7.5-4c0-.029-.007-.057-.008-.086h.008v2.086c0,2.209-3.358,4-7.5,4S0,16.209,0,14v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v2c0,2.209-3.358,4-7.5,4S0,20.209,0,18v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v-.08c.485,.052,.986,.08,1.5,.08,4.142,0,7.5-1.791,7.5-4v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.209-3.358,4-7.5,4Z"></path></svg>
                                <span>{{ $offers->sum('earnings') }}</span>
                            </h2>
                            <h3 class="whitespace-nowrap text-3xl text-gray-600 font-light">Earnings</h3>
                        </div>
                    </div>
                </div>
                <!--/Earnings-->
            </div>
        </div>
        <!--/stats-->
        <!--Offers tabs-->
        <div class="w-full p-3 mb-5 transition-all">
            <div class="w-full items-center justify-between flex mx-auto rounded-lg gap-x-5">


                <ul class="w-full flex mb-4 justify-between text-lg space-x-5 border-b-2">
                    <li @click="OfferList = 'Current'" class="-mb-[2px] group">
                        <div class="cursor-pointer text-gray-500 hover:text-indigo-500 py-2 flex items-center text-indigo-500  border-indigo-500 font-bold" :class="OfferList === 'Current' ? 'text-indigo-500 border-b-2 border-indigo-500 font-bold' : 'font-semibold'">

                            <svg :class="OfferList === 'Current' ? 'hidden' : ''" class="h-5 w-5 mr-2 fill-current hidden" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z"></path></svg>
                            <svg :class="OfferList === 'Current' ? '' : 'hidden'" class="h-5 w-5 mr-2 fill-current" viewBox="0 0 24 24"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>

                            Available offers
                        </div>
                    </li>


                    <li @click="OfferList = 'Accepted'" class="-mb-[2px] group">
                        <div class="cursor-pointer text-gray-500 hover:text-indigo-500 py-2 flex items-center font-semibold" :class="OfferList === 'Accepted' ? 'text-indigo-500 border-b-2 border-indigo-500 font-bold' : 'font-semibold'">

                            <svg :class="OfferList === 'Accepted' ? 'hidden' : ''" class="h-5 w-5 mr-2 fill-current" viewBox="0 0 24 24"><path d="m18.214,9.098c.387.394.381,1.027-.014,1.414l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013Zm5.786,2.902c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-2,0c0-5.514-4.486-10-10-10S2,6.486,2,12s4.486,10,10,10,10-4.486,10-10Z"></path></svg>
                            <svg :class="OfferList === 'Accepted' ? '' : 'hidden'" class="h-5 w-5 mr-2 fill-current hidden" viewBox="0 0 24 24"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm6.2,10.512l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013.387.394.381,1.027-.014,1.414Z"></path></svg>

                            Accepted
                        </div>
                    </li>

                    <li @click="OfferList = 'Rejected'" class="-mb-[2px] group">
                        <div class="cursor-pointer text-gray-500 hover:text-red-600 py-2 flex items-center font-semibold" :class="OfferList === 'Rejected' ? 'text-red-600 border-b-2 border-red-600 font-bold' : 'font-semibold'">

                            <svg :class="OfferList === 'Rejected' ? 'hidden' : ''" class="h-5 w-5 mr-2 fill-current" viewBox="0 0 24 24"><path d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z"></path><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"></path></svg>
                            <svg :class="OfferList === 'Rejected' ? '' : 'hidden'" class="h-5 w-5 mr-2 fill-current hidden" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z"></path></g></svg>

                            Rejected
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!--/Offers tabs-->
        <!--Offer lists-->
        <div class="flex w-full md:flex-row flex-col">

            <!--Current Offers list-->
            <div x-show="OfferList === 'Current'" class="w-full">
                <ul class="grid xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-x-14 gap-y-3" role="list">
                    @foreach($campaignsActive as $activeCamp)
                        <li x-data="{ Accepted:false, Rejected:false, OfferOpt:false, ConfirmRej:false }" :class="{ 'order-first bg-indigo-50 border-indigo-500 hover:border-indigo-500 hover:bg-indigo-50':  Accepted, 'order-last border-red-600 hover:border-red-600 hover:bg-red-50':  Rejected, 'border-gray-300 bg-white hover:border-gray-500 hover:bg-gray-50':  !Rejected &amp;&amp; !Accepted}" class="order-none relative group flex flex-col items-center gap-x-2 w-full p-2 text-gray-500 transition-all rounded-lg hover:shadow-sm border hover:scale-105 overflow-hidden border-gray-300 bg-white hover:border-gray-500 hover:bg-gray-50">

                            <!--Option Button-->
                            <button @click="OfferOpt = !OfferOpt" class="inset-0 absolute"></button>
                            <!--/Option Button-->

                            <!--Offer Card-->
                            <div class="flex flex-col w-full gap-y-3">
                                <!--Card Top-->
                                <div class="flex justify-between items-center gap-x-3">
                                    <!--Course name + Offer date-->
                                    <div class="flex items-center gap-x-3">
                                        <svg fill="currentColor" class=" w-8 h-8" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>

                                        <div class="flex flex-col">
                                            <p class="font-bold flex-1 truncate  w-48">{{ $activeCamp->course->title }}</p>
                                            <p class="font-semibold text-sm text-gray-900">{{ \Carbon\Carbon::parse($activeCamp->created_at)->format('d/m/Y') }}<span class="sr-only">Offer Date</span></p>
                                        </div>
                                    </div>
                                    <!--/Course name + Offer date-->
                                    <!--prices + Ex Date-->
                                    <div class="flex flex-col items-end">
                                        <!--Prices-->
                                        <div class="flex  items-center font-bold">
                                            <p :class="{ 'bg-indigo-500 border-indigo-500':  Accepted, 'bg-red-600 border-red-500':  Rejected, 'bg-slate-500 border-slate-500':  !Rejected &amp;&amp; !Accepted }" class="group relative whitespace-nowrap text-sm text-white border rounded-full px-1 pr-6 py-0 bg-slate-500 border-slate-500">
                                                <span class="text-xs">$</span>
                                                <span>{{ $activeCamp->course->sale_price }}</span>
                                            </p>
                                            <p :class="{ 'text-indigo-500 border-indigo-500':  Accepted, 'text-red-600 border-red-600':  Rejected, 'text-gray-500 border-gray-500':  !Rejected &amp;&amp; !Accepted}" class="group relative whitespace-nowrap text-sm bg-white border rounded-full px-1 -ml-5 py-0 text-gray-500 border-gray-500">
                                                <span>{{ $activeCamp->commission }}</span>
                                                <span class="text-xs">%</span>
                                            </p>
                                        </div>
                                        <!--/Prices-->
                                        <!--Ex Date-->
                                        <p class="font-semibold text-sm text-gray-900"><span class="px-1 ">Ex</span>{{ \Carbon\Carbon::parse($activeCamp->offer_end_date)->format('d/m/Y') }}</p>
                                        <!--/Ex Date-->
                                    </div>
                                    <!--/prices + Ex Date-->

                                </div>
                                <!--Card Top-->

                                <!--Card Middle-->
                                <div class="flex justify-between items-center gap-x-3">
                                    <!--Discount-->
                                    <p :class="{ 'text-indigo-500':  Accepted, 'text-red-600':  Rejected, 'text-gray-500':  !Rejected &amp;&amp; !Accepted}" class="group relative whitespace-nowrap font-semibold px-1 py-0 text-gray-500">

                                        <span class="">Student Discount</span>
                                        <span>{{ $activeCamp->student_discount }}</span>
                                        <span class="text-xs">%</span>
                                    </p>
                                    <!--/Discount-->
                                </div>
                                <!--/Card Middle-->
                                <!-- Card bottom-->
                                <div class="flex justify-between items-center gap-x-3">

                                    <!--instructor-->
                                    <div class="flex items-center gap-x-3 ml-2 rtl:mr-2">
                                        <img alt="" class="h-6 w-6 rounded-full bg-cover" src="{{ $activeCamp->user?->avatar }}">
                                        <p class="font-semibold flex-1 truncate">{{ $activeCamp->user?->name }}</p>
                                    </div>
                                    <!--/instructor-->

                                    <!--Status Labels-->
                                    <div class="flex items-center">
                                        <div class="w-fit text-sm border border-slate-400 rounded-full px-2 py-0">
                                            No Action!
                                        </div>
                                    </div>
                                    <!--/Status Labels-->
                                </div>
                                <!--/ Card bottom-->
                            </div>
                            <!--Offer Card-->

                            <!--option window-->
                            <div @click.away="OfferOpt = false" x-show="OfferOpt" class=" inset-0 z-20 absolute border rounded-lg p-2 bg-white bg-opacity-80" style="display: none;">
                                <div class="group flex h-full items-center justify-evenly text-sm font-bold" style="">
                                    <div class="flex items-center rounded-full px-2 py-1 bg-slate-100 hover:bg-slate-200 border border-gray-300 hover:border-gray-400 text-gray-500 hover:text-gray-800 transition-all">
                                        <button @click="ConfirmRej = true, OfferOpt = false" class="flex items-center justify-between space-x-2 text-base">
                                            <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z"></path><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"></path></svg>
                                            <span>Reject</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center rounded-full px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white transition-all">
                                        <button wire:click="accept_offer({{ $activeCamp->id }})" class="flex items-center justify-between space-x-2 text-base">
                                            <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="m18.214,9.098c.387.394.381,1.027-.014,1.414l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013Zm5.786,2.902c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-2,0c0-5.514-4.486-10-10-10S2,6.486,2,12s4.486,10,10,10,10-4.486,10-10Z"></path></svg>
                                            <span>Accept</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--/option window-->

                            <!--Reject window-->
                            <div @click.away="ConfirmRej = false" x-show="ConfirmRej" class=" inset-0 z-20 absolute border rounded-lg p-2 bg-white bg-opacity-80" style="display: none;">
                                <p class="w-full text-center font-bold -mb-3">Are you sure ?</p>
                                <div class="group flex h-full items-center justify-evenly text-sm font-bold" style="">
                                    <div class="flex items-center rounded-full px-5 py-1 bg-slate-100 hover:bg-slate-200 border border-gray-300 hover:border-gray-400 text-gray-500 hover:text-gray-800 transition-all">
                                        <button @click="ConfirmRej = false" class="flex items-center justify-between space-x-2 text-base">
                                            <span>Cancel</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center rounded-full px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white transition-all">
                                        <button wire:click="reject_offer({{ $activeCamp->id }})"  class="flex items-center justify-between space-x-2 text-base">
                                            <svg fill="currentColor" class="shrink-0 h-5 w-5" viewBox="0 0 24 24" width="512" height="512"><path d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z"></path><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"></path></svg>
                                            <span>Reject</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--/Reject window-->
                        </li>
                    @endforeach

                </ul>
            </div>
            <!--/Current Offers list-->

            <!--Accepted List-->
            <div x-show="OfferList === 'Accepted'" class="w-full" style="display: none;">
                <ul class="grid xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-x-14 gap-y-3" role="list">
                    @foreach($campaignsAccepted as $acceptCampaigns)
                    <li x-data="{ Accepted:true, Rejected:false, OfferOpt:false, ConfirmRej:false }" :class="{ 'order-first bg-indigo-50 border-indigo-500 hover:border-indigo-500 hover:bg-indigo-50':  Accepted, 'order-last border-red-600 hover:border-red-600 hover:bg-red-50':  Rejected, 'border-gray-300 bg-white hover:border-gray-500 hover:bg-gray-50':  !Rejected &amp;&amp; !Accepted}" class="order-none relative group flex flex-col items-center gap-x-2 w-full p-2 text-gray-500 transition-all rounded-lg hover:shadow-sm border hover:scale-105 overflow-hidden order-first bg-indigo-50 border-indigo-500 hover:border-indigo-500 hover:bg-indigo-50">

                        <!--Offer Card-->
                        <div class="flex flex-col w-full gap-y-3">
                            <!--Card Top-->
                            <div class="flex justify-between items-center gap-x-3">
                                <!--Course name + Offer date-->
                                <div class="flex items-center gap-x-3">
                                    <svg fill="currentColor" class=" w-8 h-8" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>
                                    <div class="flex flex-col">
                                        <p class="font-bold flex-1 truncate  w-48">{{ $acceptCampaigns->course->title }}</p>
                                        <p class="font-semibold text-sm text-gray-900">{{ \Carbon\Carbon::parse($acceptCampaigns->created_at)->format('d/m/Y') }}<span class="sr-only">Offer Date</span></p>
                                    </div>
                                </div>
                                <!--/Course name + Offer date-->
                                <!--prices + Ex Date-->
                                <div class="flex flex-col items-end">

                                    <!--Prices-->
                                    <div class="flex  items-center font-bold">
                                        <p :class="{ 'bg-indigo-500 border-indigo-500':  Accepted, 'bg-red-600 border-red-500':  Rejected, 'bg-slate-500 border-slate-500':  !Rejected &amp;&amp; !Accepted }" class="group relative whitespace-nowrap text-sm text-white border rounded-full px-1 pr-6 py-0 bg-indigo-500 border-indigo-500">

                                            <span class="text-xs">$</span>
                                            <span>{{ $acceptCampaigns->course->sale_price }}</span>
                                        </p>

                                        <p :class="{ 'text-indigo-500 border-indigo-500':  Accepted, 'text-red-600 border-red-600':  Rejected, 'text-gray-500 border-gray-500':  !Rejected &amp;&amp; !Accepted}" class="group relative whitespace-nowrap text-sm bg-white border rounded-full px-1 -ml-5 py-0 text-indigo-500 border-indigo-500">

                                            <span>{{ $acceptCampaigns->commission }}</span>
                                            <span class="text-xs">%</span>
                                        </p>
                                    </div>
                                    <!--/Prices-->

                                    <!--Ex Date-->
                                    <p class="font-semibold text-sm text-gray-900"><span class="px-1 ">Ex</span>{{ \Carbon\Carbon::parse($acceptCampaigns->offer_end_date)->format('d/m/Y') }}</p>
                                    <!--/Ex Date-->

                                </div>
                                <!--/prices + Ex Date-->
                            </div>
                            <!--Card Top-->

                            <!--Card Middle-->
                            <div class="flex justify-between items-center gap-x-3">
                                <!--Discount-->
                                <p :class="{ 'text-indigo-500':  Accepted, 'text-red-600':  Rejected, 'text-gray-500':  !Rejected &amp;&amp; !Accepted}" class="group relative whitespace-nowrap font-semibold px-1 py-0 text-indigo-500">
                                    <span class="">Student Discount</span>
                                    <span>{{ $acceptCampaigns->student_discount }}</span>
                                    <span class="text-xs">%</span>
                                </p>
                                <!--/Discount-->

                                <?php $acceptedOffer = $offers->where('influencer_campaign_id',$acceptCampaigns->id )->first();?>
                                <!--Accepted Stats-->
                                <div x-show="Accepted" class=" flex items-center justify-end gap-x-2">
                                    <div class="whitespace-nowrap group/t relative flex items-center gap-x-1">
                                        <svg fill="currentColor" class="shrink-0 h-3 w-3" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><circle cx="256" cy="128" r="128"></circle><path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"></path></g></svg>
                                        <p class="">{{ !empty($acceptedOffer) ? $acceptedOffer->enrolled : 0 }}</p>
                                        <span class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute -top-6 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Enrolled students
                                        </span>
                                    </div>
                                    <div class="whitespace-nowrap group/t relative flex items-center gap-x-1">
                                        <svg class="shrink-0 h-3 w-3" fill="currentColor" viewBox="0 0 24 24"><path d="M9,4c0-2.209,3.358-4,7.5-4s7.5,1.791,7.5,4-3.358,4-7.5,4-7.5-1.791-7.5-4Zm7.5,6c-1.027,0-2.001-.115-2.891-.315-1.359-1.019-3.586-1.685-6.109-1.685-4.142,0-7.5,1.791-7.5,4s3.358,4,7.5,4,7.5-1.791,7.5-4c0-.029-.007-.057-.008-.086h.008v2.086c0,2.209-3.358,4-7.5,4S0,16.209,0,14v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v2c0,2.209-3.358,4-7.5,4S0,20.209,0,18v2c0,2.209,3.358,4,7.5,4s7.5-1.791,7.5-4v-.08c.485,.052,.986,.08,1.5,.08,4.142,0,7.5-1.791,7.5-4v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.119-3.092,3.849-7,3.987v-2c3.908-.138,7-1.867,7-3.987v-2c0,2.209-3.358,4-7.5,4Z"></path></svg>
                                        <p class=""><span class="text-xs">$</span>{{ !empty($acceptedOffer) ? $acceptedOffer->course->transactions()->where('influencer_id',auth()->user()->id)->sum('mkt_commission') : 0 }}</p>
                                        <span class="flex flex-col group-hover/t:opacity-100 group-hover/t:scale-100 scale-50 z-50 font-normal text-xs pointer-events-none absolute -top-6 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-bottom-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-t-black before:content-[''] ">
                                            Earnings
                                        </span>
                                    </div>
                                </div>
                                <!--/Accepted Stats-->
                            </div>
                            <!--/Card Middle-->

                            <!-- Card bottom-->
                            <div class="flex justify-between items-center gap-x-3">

                                <!--instructor-->
                                <div class="flex items-center gap-x-3 ml-2 rtl:mr-2">
{{--                                    <img alt="" class="h-6 w-6 rounded-full bg-cover" src="{{ $acceptCampaigns->user?->avatar }}">--}}
                                    <x-tooltip-arrow >
                                        <x-svg-icons.fi-sr-book-open-reader class="h-3 w-3" />
                                        <x-slot name="text">
                                            {{ __('Trainer') }}
                                        </x-slot>
                                    </x-tooltip-arrow>
                                    <p class="font-semibold flex-1 truncate">{{ optional($acceptCampaigns->course->maker)->name }}</p>
                                </div>
                                <!--/instructor-->


                                <div class="flex items-center">
                                    <div  class="flex items-center gap-x-1 w-fit text-sm text-white bg-indigo-500 rounded-full px-2 py-0">
                                        <svg fill="currentColor" class="h-3 w-3" viewBox="0 0 24 24"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm6.2,10.512l-4.426,4.345c-.783.768-1.791,1.151-2.8,1.151-.998,0-1.996-.376-2.776-1.129l-1.899-1.867c-.394-.387-.399-1.02-.012-1.414.386-.395,1.021-.4,1.414-.012l1.893,1.861c.776.75,2.001.746,2.781-.018l4.425-4.344c.393-.388,1.024-.381,1.414.013.387.394.381,1.027-.014,1.414Z"></path></svg>
                                        <p>Accepted</p>
                                    </div>

                                </div>
                            </div>
                            <!--/ Card bottom-->
                        </div>
                        <!--Offer Card-->
                        <div x-show="Accepted" class="origin-bottom z-10 mt-2  w-full flex flex-row items-center justify-between border rounded-lg gap-x-3 p-2 text-sm font-semibold bg-white transition-all">

                            <div class="w-full group flex items-center justify-between text-sm text-gray-400 hover:text-gray-700 rounded-full">
                                <div class="flex-1 flex items-center">
                                    <svg class="flex-shrink-0 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                    <span class="ml-2 flex-1 w-0 truncate">{{ route('course', $acceptCampaigns->course->slug) . '?karma='. auth()->user()->user_karma_key }} </span>
                                </div>

                                <div class="flex rounded-full px-1 border border-gray-400 group-hover:border-gray-700 items-center">
                                    <a href="#" class="flex items-center justify-between space-x-2 text-base"  onclick="CopyCourseUrlToClipboard('{{route('course',$acceptCampaigns->course->slug). '?karma='. auth()->user()->user_karma_key }}')">
                                        <span>Copy</span>
                                        <svg class="flex-shrink-0 h-4 w-4" fill="currentColor" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z"></path></svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </li>
                    @endforeach
                </ul>
            </div>
            <!--/Accepted List-->

            <!--Rejected List-->
            @foreach($campaignsRejected as $rejectCampaigns)
            <div x-show="OfferList === 'Rejected'" class="w-full" style="display: none;">
                <ul class="grid xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-x-14 gap-y-3" role="list">

                    <li x-data="{ Accepted:false, Rejected:true, OfferOpt:false, ConfirmRej:false }" :class="{ 'order-first bg-indigo-50 border-indigo-500 hover:border-indigo-500 hover:bg-indigo-50':  Accepted, 'order-last border-red-600 hover:border-red-600 hover:bg-red-50':  Rejected, 'border-gray-300 bg-white hover:border-gray-500 hover:bg-gray-50':  !Rejected &amp;&amp; !Accepted}" class="order-none relative group flex flex-col items-center gap-x-2 w-full p-2 text-gray-500 transition-all rounded-lg hover:shadow-sm border hover:scale-105 overflow-hidden order-last border-red-600 hover:border-red-600 hover:bg-red-50">

                        <!--Offer Card-->
                        <div class="flex flex-col w-full gap-y-3">

                            <!--Card Top-->
                            <div class="flex justify-between items-center gap-x-3">

                                <!--Course name + Offer date-->
                                <div class="flex items-center gap-x-3">
                                    <svg fill="currentColor" class=" w-8 h-8" id="Layer_1" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z"></path></svg>

                                    <div class="flex flex-col">
                                        <p class="font-bold flex-1 truncate  w-48">{{ $rejectCampaigns->course->title }}</p>
                                        <p class="font-semibold text-sm text-gray-900">{{ \Carbon\Carbon::parse($rejectCampaigns->created_at)->format('d/m/Y') }}<span class="sr-only">Offer Date</span></p>
                                    </div>
                                </div>
                                <!--/Course name + Offer date-->


                                <!--prices + Ex Date-->
                                <div class="flex flex-col items-end">

                                    <!--Prices-->
                                    <div class="flex  items-center font-bold">
                                        <p :class="{ 'bg-indigo-500 border-indigo-500':  Accepted, 'bg-red-600 border-red-500':  Rejected, 'bg-slate-500 border-slate-500':  !Rejected &amp;&amp; !Accepted }" class="group relative whitespace-nowrap text-sm text-white border rounded-full px-1 pr-6 py-0 bg-red-600 border-red-500">

                                            <span class="text-xs">$</span>
                                            <span>{{ $rejectCampaigns->course->sale_price }}</span>
                                        </p>

                                        <p :class="{ 'text-indigo-500 border-indigo-500':  Accepted, 'text-red-600 border-red-600':  Rejected, 'text-gray-500 border-gray-500':  !Rejected &amp;&amp; !Accepted}" class="group relative whitespace-nowrap text-sm bg-white border rounded-full px-1 -ml-5 py-0 text-red-600 border-red-600">

                                            <span>{{ $rejectCampaigns->commission }}</span>
                                            <span class="text-xs">%</span>
                                        </p>
                                    </div>
                                    <!--/Prices-->

                                    <!--Ex Date-->
                                    <p class="font-semibold text-sm text-gray-900"><span class="px-1 ">Ex</span>{{ \Carbon\Carbon::parse($rejectCampaigns->offer_end_date)->format('d/m/Y') }}</p>
                                    <!--/Ex Date-->

                                </div>
                                <!--/prices + Ex Date-->

                            </div>
                            <!--Card Top-->

                            <!--Card Middle-->
                            <div class="flex justify-between items-center gap-x-3">

                                <!--Discount-->
                                <p :class="{ 'text-indigo-500':  Accepted, 'text-red-600':  Rejected, 'text-gray-500':  !Rejected &amp;&amp; !Accepted}" class="group relative whitespace-nowrap font-semibold px-1 py-0 text-red-600">

                                    <span class="">Student Discount</span>
                                    <span>{{ $rejectCampaigns->student_discount }}</span>
                                    <span class="text-xs">%</span>

                                </p>
                                <!--/Discount-->
                            </div>
                            <!--/Card Middle-->

                            <!-- Card bottom-->
                            <div class="flex justify-between items-center gap-x-3">

                                <!--instructor-->
                                <div class="flex items-center gap-x-3 ml-2 rtl:mr-2">
                                    <img alt="" class="h-6 w-6 rounded-full bg-cover" src="{{ $rejectCampaigns->user?->avatar }}">
                                    <p class="font-semibold flex-1 truncate">{{ $rejectCampaigns->user?->name }}</p>
                                </div>
                                <!--/instructor-->

                                <!--Status Labels-->
                                <div class="flex items-center">
                                    <div   class="flex items-center gap-x-1 w-fit text-sm text-white bg-red-600 rounded-full px-2 py-0">
                                        <svg fill="currentColor" class="h-3 w-3" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512"><g><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z"></path></g></svg>
                                        <p>Rejected</p>
                                    </div>
                                </div>
                                <!--/Status Labels-->
                            </div>
                            <!--/ Card bottom-->
                        </div>
                        <!--Offer Card-->


                    </li>

                </ul>
            </div>
            @endforeach
            <!--/Rejected List-->
        </div>
        <!--/Offer lists-->
    </div>
</section>
