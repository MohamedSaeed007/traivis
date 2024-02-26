<!--Popups-->
<!----- EXT Request----------->
<section x-cloak x-show="ExtPop" x-transition:enter="ease-out duration-100"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

    <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[999] overflow-y-auto"
        role="dialog">
        <div
            class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

            <!---over BG---->
            <div @click="ExtPop = false" aria-hidden="true"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            </div>
            <!-- center-->
            <span aria-hidden="true"
                class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
            <!---END over BG---->

            <!-- popup content-->
            <div
                class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                <!-- label-->
                <div class="flex items-center justify-center">
                    <p
                        class="absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                        <svg fill="currentColor" class="mr-3 h-10 w-10" viewBox="0 0 24 24">
                            <path
                                d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z" />
                            <path
                                d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z" />
                        </svg>
                        Extension Request
                    </p>
                </div>
                <!--/ label-->

                <!---->
                <div class="">
                    <div class="h-full w-full overflow-y-auto">
                        <div class="container mx-auto w-full rounded-lg bg-white p-3">

                            <!-- header-->
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    </div>

                                    <div class="ml-4">
                                        <a class="whitespace-nowrap font-medium text-gray-900"
                                            href="#">Lindsay Walton</a>
                                    </div>
                                </div>
                            </div>
                            <!--END  header-->

                            <!-- Extention fields-->
                            <div class="flex flex-col gap-y-4 pt-5">

                                <div class="group relative">
                                    <textarea
                                        class="peer mt-1 w-full resize-y rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                                        cols="100" id="area2" maxlength="" required rows="4" type="text"></textarea>
                                    <label
                                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                        for="area2">
                                        Notes </label>
                                </div>

                                <div class="group relative items-center">
                                    <input
                                        class="peer mt-1 h-10 w-full rounded-lg border-gray-300 pr-0 transition-colors focus:border-traivis-400 sm:truncate"
                                        id="Numbers" required type="number"
                                        placeholder="How many days ?">
                                    <label for="Numbers"
                                        class="absolute bottom-0 right-3 top-3.5 h-fit border-l border-gray-400 px-2 text-sm">Days</label>
                                </div>

                            </div>
                            <!--END Extention fields-->

                            <!--Send-->
                            <div class="mx-auto mt-5 w-fit">
                                <button
                                    class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                    type="button">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                        height="512" viewBox="0 0 24 24" width="512">
                                        <path
                                            d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z">
                                        </path>
                                    </svg>
                                    <span>Send</span>
                                </button>
                            </div>
                            <!--/Send-->

                        </div>
                    </div>
                </div>
                <!---->

            </div>
            <!--END popup content -->

        </div>
    </div>
</section>
<!-----/ EXT Request----------->

<!----- Completed----------->
<section x-cloak x-show="ComPop" x-transition:enter="ease-out duration-100"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

    <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[999] overflow-y-auto"
        role="dialog">
        <div
            class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

            <!---over BG---->
            <div @click="ComPop = false" aria-hidden="true"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            </div>
            <!-- center-->
            <span aria-hidden="true"
                class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
            <!---END over BG---->

            <!-- popup content-->
            <div
                class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                <!-- label-->
                <div class="flex items-center justify-center">
                    <p
                        class="absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                        <svg fill="currentColor" class="mr-3 h-10 w-10 text-green-600"
                            viewBox="0 0 24 24" width="512" height="512">
                            <path
                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                        </svg>
                        Task Completed
                    </p>
                </div>
                <!--/ label-->

                <!---->
                <div class="">
                    <div class="h-full w-full overflow-y-auto">
                        <div class="container mx-auto w-full rounded-lg bg-white p-3">

                            <!-- header-->
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    </div>

                                    <div class="ml-4">
                                        <a class="whitespace-nowrap font-medium text-gray-900"
                                            href="#">Lindsay Walton</a>
                                    </div>
                                </div>
                            </div>
                            <!--END  header-->

                            <!-- Completed Fields-->
                            <div class="flex flex-col gap-y-4 pt-5">

                                <div class="group relative">
                                    <textarea
                                        class="peer mt-1 w-full resize-y rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                                        cols="100" id="area3" maxlength="" required rows="4" type="text"></textarea>
                                    <label
                                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                        for="area3">
                                        Notes </label>
                                </div>

                            </div>
                            <!--END Completed Fields-->

                            <!--Send-->
                            <div class="mx-auto mt-5 w-fit">
                                <button
                                    class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                    type="button">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                        height="512" viewBox="0 0 24 24" width="512">
                                        <path
                                            d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z">
                                        </path>
                                    </svg>
                                    <span>Send</span>
                                </button>
                            </div>
                            <!--/Send-->

                        </div>
                    </div>
                </div>
                <!---->

            </div>
            <!--END popup content -->

        </div>
    </div>
</section>
<!-----/ Completed----------->

<!----- Note----------->
<section x-cloak x-show="NotePop" x-transition:enter="ease-out duration-100"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

    <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[999] overflow-y-auto"
        role="dialog">
        <div
            class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

            <!---over BG---->
            <div @click="NotePop = false" aria-hidden="true"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            </div>
            <!-- center-->
            <span aria-hidden="true"
                class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
            <!---END over BG---->

            <!-- popup content-->
            <div
                class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                <!-- label-->
                <div class="flex items-center justify-center">
                    <p
                        class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                        <svg fill="currentColor" class="mr-3 h-7 w-7" viewBox="0 0 24 24"
                            width="512" height="512">
                            <path
                                d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z">
                            </path>
                            <path
                                d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z">
                            </path>
                        </svg>
                        Note
                    </p>
                </div>
                <!--/ label-->

                <!---->
                <div class="">
                    <div class="h-full w-full">
                        <div class="container mx-auto w-full rounded-lg bg-white p-3">

                            <!-- header-->
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    </div>

                                    <div class="ml-4">
                                        <a class="whitespace-nowrap font-medium text-gray-900"
                                            href="#">Lindsay Walton</a>
                                    </div>
                                </div>
                            </div>
                            <!--END  header-->

                            <!-- Note fields-->
                            <div class="flex flex-col gap-y-4 pt-5">

                                <div class="group relative">
                                    <textarea
                                        class="peer mt-1 w-full resize-y rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                                        cols="100" id="area" maxlength="" required rows="4" type="text"></textarea>
                                    <label
                                        class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                        for="area">
                                        Notes </label>
                                </div>

                            </div>
                            <!--END Note fields-->

                            <!--Send-->
                            <div class="mx-auto mt-5 w-fit">
                                <button
                                    class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                    type="button">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                        height="512" viewBox="0 0 24 24" width="512">
                                        <path
                                            d="M23.119.882a2.966,2.966,0,0,0-2.8-.8l-16,3.37a4.995,4.995,0,0,0-2.853,8.481L3.184,13.65a1,1,0,0,1,.293.708v3.168a2.965,2.965,0,0,0,.3,1.285l-.008.007.026.026A3,3,0,0,0,5.157,20.2l.026.026.007-.008a2.965,2.965,0,0,0,1.285.3H9.643a1,1,0,0,1,.707.292l1.717,1.717A4.963,4.963,0,0,0,15.587,24a5.049,5.049,0,0,0,1.605-.264,4.933,4.933,0,0,0,3.344-3.986L23.911,3.715A2.975,2.975,0,0,0,23.119.882ZM4.6,12.238,2.881,10.521a2.94,2.94,0,0,1-.722-3.074,2.978,2.978,0,0,1,2.5-2.026L20.5,2.086,5.475,17.113V14.358A2.978,2.978,0,0,0,4.6,12.238Zm13.971,7.17a3,3,0,0,1-5.089,1.712L11.762,19.4a2.978,2.978,0,0,0-2.119-.878H6.888L21.915,3.5Z">
                                        </path>
                                    </svg>
                                    <span>Send</span>
                                </button>
                            </div>
                            <!--/Send-->

                        </div>
                    </div>
                </div>
                <!---->

            </div>
            <!--END popup content -->

        </div>
    </div>
</section>
<!-----/ Note----------->

<!----- Publish Task----------->
<section x-cloak x-show="Publish" x-transition:enter="ease-out duration-100"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">

    <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-[999] overflow-y-auto"
        role="dialog">
        <div
            class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

            <!---over BG---->
            <div @click="Publish = false" aria-hidden="true"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            </div>
            <!-- center-->
            <span aria-hidden="true"
                class="hidden sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
            <!---END over BG---->

            <!-- popup content-->
            <div
                class="relative my-8 inline-block w-full max-w-3xl transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                <!-- label-->
                <div class="flex items-center justify-center">
                    <p
                        class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                        <svg fill="currentColor" class="mr-3 h-8" height="512" viewBox="0 0 24 24"
                            width="512">
                            <path
                                d="m12.883 15.216-7.935 7.935a2.9 2.9 0 1 1 -4.1-4.1l7.935-7.935zm4.217-8.316a2.967 2.967 0 0 0 -4.1 0l-2.8 2.8 4.1 4.1 2.8-2.8a2.9 2.9 0 0 0 0-4.1zm-12.237-1.755 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm12 12 1.55.442.442 1.55a1.191 1.191 0 0 0 2.29 0l.442-1.55 1.55-.442a1.191 1.191 0 0 0 0-2.29l-1.55-.442-.442-1.55a1.191 1.191 0 0 0 -2.29 0l-.442 1.55-1.55.442a1.191 1.191 0 0 0 0 2.29zm.893-12.645 1.355.387.389 1.357a1.042 1.042 0 0 0 2 0l.387-1.355 1.357-.389a1.042 1.042 0 0 0 0-2l-1.355-.387-.389-1.357a1.042 1.042 0 0 0 -2 0l-.387 1.355-1.357.389a1.042 1.042 0 0 0 0 2z" />
                        </svg>
                        Publish Course
                    </p>
                </div>
                <!--/ label-->

                <!---->
                <div class="">
                    <div class="h-full w-full overflow-y-auto">
                        <div class="container mx-auto w-full rounded-lg bg-white p-3">

                            <!-- header-->
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                    </div>

                                    <div class="ml-4">
                                        <a class="whitespace-nowrap font-medium text-gray-900"
                                            href="#">Lindsay Walton</a>
                                    </div>
                                </div>
                            </div>
                            <!--END  header-->

                            <!-- Publish fields-->
                            <div class="flex flex-col gap-y-4 pt-5">

                                <!---private toggle--->
                                <div class="flex items-center justify-between px-1"
                                    x-data="{ enabled: false }">
                                    <span class="mr-3" id="Qremaining">
                                        <span class="text-sm">Use Private Link</span>
                                    </span>
                                    <button @click="enabled = !enabled" type="button"
                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2"
                                        :class="enabled ? 'bg-traivis-400' : 'bg-gray-200'" role="switch"
                                        aria-checked="false">
                                        <span class="sr-only">Use setting</span>
                                        <span aria-hidden="true"
                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                                            :class="enabled && 'translate-x-5'"></span>
                                    </button>
                                </div>
                                <!---->

                                <!---private link--->
                                <div
                                    class="group flex items-center justify-between rounded-full text-sm text-gray-400 hover:text-gray-700">
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="ml-2 w-0 flex-1 truncate"> link here </span>
                                    </div>

                                    <div
                                        class="flex items-center rounded-full border border-gray-400 px-1 group-hover:border-gray-700">
                                        <a href="#"
                                            class="flex items-center justify-between space-x-2 text-base">
                                            <span>Copy</span>
                                            <svg class="h-4 w-4 flex-shrink-0" fill="currentColor"
                                                id="Layer_1" height="512" viewbox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg"
                                                data-name="Layer 1">
                                                <path
                                                    d="m15 20h-10a5.006 5.006 0 0 1 -5-5v-10a5.006 5.006 0 0 1 5-5h10a5.006 5.006 0 0 1 5 5v10a5.006 5.006 0 0 1 -5 5zm-10-18a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-10a3 3 0 0 0 -3-3zm19 17v-13a1 1 0 0 0 -2 0v13a3 3 0 0 1 -3 3h-13a1 1 0 0 0 0 2h13a5.006 5.006 0 0 0 5-5z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                                <!---->

                            </div>
                            <!--END Publish fields-->

                            <!--Publish-->
                            <div class="mx-auto mt-5 w-fit">
                                <button
                                    class="group inline-flex justify-end gap-x-2 rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                    type="button">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                        height="512" viewBox="0 0 24 24" width="512">
                                        <path
                                            d="m18 9.064a3.049 3.049 0 0 0 -.9-2.164 3.139 3.139 0 0 0 -4.334 0l-11.866 11.869a3.064 3.064 0 0 0 4.33 4.331l11.87-11.869a3.047 3.047 0 0 0 .9-2.167zm-14.184 12.624a1.087 1.087 0 0 1 -1.5 0 1.062 1.062 0 0 1 0-1.5l7.769-7.77 1.505 1.505zm11.872-11.872-2.688 2.689-1.5-1.505 2.689-2.688a1.063 1.063 0 1 1 1.5 1.5zm-10.825-6.961 1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29l-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29zm18.274 14.29-1.55.442-.442 1.55a1.191 1.191 0 0 1 -2.29 0l-.442-1.55-1.55-.442a1.191 1.191 0 0 1 0-2.29l1.55-.442.442-1.55a1.191 1.191 0 0 1 2.29 0l.442 1.55 1.55.442a1.191 1.191 0 0 1 0 2.29zm-5.382-14.645 1.356-.387.389-1.358a1.042 1.042 0 0 1 2 0l.387 1.356 1.356.387a1.042 1.042 0 0 1 0 2l-1.356.387-.387 1.359a1.042 1.042 0 0 1 -2 0l-.387-1.355-1.358-.389a1.042 1.042 0 0 1 0-2z" />
                                    </svg>
                                    <span>Publish</span>
                                </button>
                            </div>
                            <!--/ Publish-->

                        </div>
                    </div>
                </div>
                <!---->

            </div>
            <!--END popup content -->

        </div>
    </div>
</section>
<!-----/ Publish Task ----------->
<!--/ Popups-->
