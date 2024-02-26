<div class="relative mx-auto flex justify-between w-full">

    <div class="mb-4 w-full px-4 lg:px-20 md:mb-0 mx-auto">
        <div class="flex w-full justify-center">
            <section class="flex w-full p-1 py-4 ">
                <div class="container mx-auto w-full flex-col">

                    <!----------Reward row------------>
                    {{-- @dd($selectedUser->load('courses')->toArray()) --}}

                    {{-- <x-courses.card /> --}}

                    <ul role="list"
                        class="m-6 mb-32 grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        @forelse($user->courses as $course)
                            <x-courses.card :course="$course">
                                <x-slot name="courseIcon">
                                    <x-svg-icons.fi-brands-python class="h-6 w-6" />
                                </x-slot>
                            </x-courses.card>
                        @empty
                            <p class="w-full flex justify-center col-span-3">No courses are found</p>
                        @endforelse
                    </ul>

                    <!----------END Reward row------------>

                    {{-- <!----------Reward row------------>

                    <div
                        class="group border-l-2 border-transparent py-4 hover:border-traivis-500 hover:bg-traivis-50 ">
                        <div
                            class="flex flex-row flex-wrap items-center justify-center justify-between">

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <svg id="Layer_1" height="512" viewbox="0 0 24 24"
                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1" fill="currentColor"
                                    class="mr-4 h-8 text-gray-800 transition-colors ">
                                    <path
                                        d="m14.09 16h.91c6.643 0 9-3.5 9-6.5a3.5 3.5 0 0 0 -2.84-3.433 7.564 7.564 0 0 0 .409-1 3.887 3.887 0 0 0 -.626-3.458 3.979 3.979 0 0 0 -3.214-1.609h-11.458a3.979 3.979 0 0 0 -3.214 1.612 3.887 3.887 0 0 0 -.626 3.458 7.564 7.564 0 0 0 .409 1 3.5 3.5 0 0 0 -2.84 3.43c0 3 2.357 6.5 9 6.5h.91a5.027 5.027 0 0 1 .09.921v3.079a1.883 1.883 0 0 1 -2 2h-2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2h-1.994a1.885 1.885 0 0 1 -2.006-2v-3.08a5.025 5.025 0 0 1 .09-.92zm1.636-2.851a23.486 23.486 0 0 0 4.4-5.225 1 1 0 0 0 .374.076 1.5 1.5 0 0 1 1.5 1.5c0 2.176-1.839 4.5-7 4.5h-.056a4.805 4.805 0 0 1 .782-.851zm-6.726.851c-5.161 0-7-2.324-7-4.5a1.5 1.5 0 0 1 1.5-1.5 1 1 0 0 0 .375-.076 23.486 23.486 0 0 0 4.4 5.225 4.805 4.805 0 0 1 .781.851z">
                                    </path>
                                </svg>
                                <div class="flex">
                                    <p class="texy-base flex items-center justify-center truncate font-medium text-gray-400 transition-colors group-hover:text-gray-700   "
                                        contenteditable="false">reward name</p>
                                </div>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a href="#" class="flex justify-center">
                                    <img class="mr-4 h-8 rounded-full object-cover"
                                        src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                        alt="">
                                    <div contenteditable="false" class="flex">
                                        <p class="texy-base flex items-center truncate font-medium text-gray-400 transition-colors   "
                                            contenteditable="false">Provider name</p>
                                    </div>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z">
                                        </path>
                                        <circle cx="12" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="7" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="17" cy="15" r="1.5">
                                        </circle>
                                    </svg>
                                    <h3
                                        class="rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        22/05/22</h3>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                        height="512" fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M7.835,16.17c-.23-.23-.446-.482-.641-.748-.325-.446-.227-1.072,.22-1.397,.446-.325,1.071-.227,1.397,.219,.129,.178,.274,.349,.437,.511,.803,.803,1.87,1.245,3.005,1.245s2.203-.442,3.005-1.245l5.5-5.5c1.657-1.657,1.657-4.354,0-6.011s-4.354-1.657-6.011,0l-1.058,1.058c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l1.058-1.058c2.437-2.438,6.402-2.438,8.839,0,2.437,2.437,2.437,6.402,0,8.839l-5.5,5.5c-1.18,1.181-2.75,1.831-4.419,1.831s-3.239-.65-4.418-1.83Zm-1.582,7.83c1.67,0,3.239-.65,4.419-1.831l1.058-1.058c.391-.39,.391-1.023,0-1.414-.39-.391-1.023-.39-1.414,0l-1.059,1.058c-.803,.803-1.87,1.245-3.005,1.245s-2.202-.442-3.005-1.245-1.245-1.87-1.245-3.005,.442-2.203,1.245-3.005l5.5-5.5c.803-.803,1.87-1.245,3.005-1.245s2.203,.442,3.005,1.245c.16,.161,.306,.332,.436,.51,.324,.447,.949,.547,1.397,.221,.447-.325,.546-.95,.221-1.397-.19-.262-.405-.513-.639-.747-1.181-1.182-2.751-1.832-4.42-1.832s-3.239,.65-4.419,1.831L1.834,13.331C.653,14.511,.003,16.081,.003,17.75c0,1.669,.65,3.239,1.831,4.419,1.18,1.181,2.749,1.831,4.419,1.831Z">
                                        </path>
                                    </svg>
                                    <h3
                                        class="truncate rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        related link</h3>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!----------END Reward row------------>

                    <!----------Reward row------------>

                    <div
                        class="group border-l-2 border-transparent py-4 hover:border-traivis-500 hover:bg-traivis-50 ">
                        <div
                            class="flex flex-row flex-wrap items-center justify-center justify-between">

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <svg id="Layer_1" height="512" viewbox="0 0 24 24"
                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1" fill="currentColor"
                                    class="mr-4 h-8 text-gray-800 transition-colors ">
                                    <path
                                        d="m14.09 16h.91c6.643 0 9-3.5 9-6.5a3.5 3.5 0 0 0 -2.84-3.433 7.564 7.564 0 0 0 .409-1 3.887 3.887 0 0 0 -.626-3.458 3.979 3.979 0 0 0 -3.214-1.609h-11.458a3.979 3.979 0 0 0 -3.214 1.612 3.887 3.887 0 0 0 -.626 3.458 7.564 7.564 0 0 0 .409 1 3.5 3.5 0 0 0 -2.84 3.43c0 3 2.357 6.5 9 6.5h.91a5.027 5.027 0 0 1 .09.921v3.079a1.883 1.883 0 0 1 -2 2h-2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2h-1.994a1.885 1.885 0 0 1 -2.006-2v-3.08a5.025 5.025 0 0 1 .09-.92zm1.636-2.851a23.486 23.486 0 0 0 4.4-5.225 1 1 0 0 0 .374.076 1.5 1.5 0 0 1 1.5 1.5c0 2.176-1.839 4.5-7 4.5h-.056a4.805 4.805 0 0 1 .782-.851zm-6.726.851c-5.161 0-7-2.324-7-4.5a1.5 1.5 0 0 1 1.5-1.5 1 1 0 0 0 .375-.076 23.486 23.486 0 0 0 4.4 5.225 4.805 4.805 0 0 1 .781.851z">
                                    </path>
                                </svg>
                                <div class="flex">
                                    <p class="texy-base flex items-center justify-center truncate font-medium text-gray-400 transition-colors   "
                                        contenteditable="false">reward name</p>
                                </div>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a href="#" class="flex justify-center">
                                    <img class="mr-4 h-8 rounded-full object-cover"
                                        src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                        alt="">
                                    <div contenteditable="false" class="flex">
                                        <p class="texy-base flex items-center truncate font-medium text-gray-400 transition-colors   "
                                            contenteditable="false">Provider name</p>
                                    </div>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z">
                                        </path>
                                        <circle cx="12" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="7" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="17" cy="15" r="1.5">
                                        </circle>
                                    </svg>
                                    <h3
                                        class="rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        22/05/22</h3>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                        height="512" fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M7.835,16.17c-.23-.23-.446-.482-.641-.748-.325-.446-.227-1.072,.22-1.397,.446-.325,1.071-.227,1.397,.219,.129,.178,.274,.349,.437,.511,.803,.803,1.87,1.245,3.005,1.245s2.203-.442,3.005-1.245l5.5-5.5c1.657-1.657,1.657-4.354,0-6.011s-4.354-1.657-6.011,0l-1.058,1.058c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l1.058-1.058c2.437-2.438,6.402-2.438,8.839,0,2.437,2.437,2.437,6.402,0,8.839l-5.5,5.5c-1.18,1.181-2.75,1.831-4.419,1.831s-3.239-.65-4.418-1.83Zm-1.582,7.83c1.67,0,3.239-.65,4.419-1.831l1.058-1.058c.391-.39,.391-1.023,0-1.414-.39-.391-1.023-.39-1.414,0l-1.059,1.058c-.803,.803-1.87,1.245-3.005,1.245s-2.202-.442-3.005-1.245-1.245-1.87-1.245-3.005,.442-2.203,1.245-3.005l5.5-5.5c.803-.803,1.87-1.245,3.005-1.245s2.203,.442,3.005,1.245c.16,.161,.306,.332,.436,.51,.324,.447,.949,.547,1.397,.221,.447-.325,.546-.95,.221-1.397-.19-.262-.405-.513-.639-.747-1.181-1.182-2.751-1.832-4.42-1.832s-3.239,.65-4.419,1.831L1.834,13.331C.653,14.511,.003,16.081,.003,17.75c0,1.669,.65,3.239,1.831,4.419,1.18,1.181,2.749,1.831,4.419,1.831Z">
                                        </path>
                                    </svg>
                                    <h3
                                        class="truncate rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        related link</h3>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!----------END Reward row------------>

                    <!----------Reward row------------>

                    <div
                        class="group border-l-2 border-transparent py-4 hover:border-traivis-500 hover:bg-traivis-50 ">
                        <div
                            class="flex flex-row flex-wrap items-center justify-center justify-between">

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <svg id="Layer_1" height="512" viewbox="0 0 24 24"
                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1" fill="currentColor"
                                    class="mr-4 h-8 text-gray-800 transition-colors ">
                                    <path
                                        d="m14.09 16h.91c6.643 0 9-3.5 9-6.5a3.5 3.5 0 0 0 -2.84-3.433 7.564 7.564 0 0 0 .409-1 3.887 3.887 0 0 0 -.626-3.458 3.979 3.979 0 0 0 -3.214-1.609h-11.458a3.979 3.979 0 0 0 -3.214 1.612 3.887 3.887 0 0 0 -.626 3.458 7.564 7.564 0 0 0 .409 1 3.5 3.5 0 0 0 -2.84 3.43c0 3 2.357 6.5 9 6.5h.91a5.027 5.027 0 0 1 .09.921v3.079a1.883 1.883 0 0 1 -2 2h-2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2h-1.994a1.885 1.885 0 0 1 -2.006-2v-3.08a5.025 5.025 0 0 1 .09-.92zm1.636-2.851a23.486 23.486 0 0 0 4.4-5.225 1 1 0 0 0 .374.076 1.5 1.5 0 0 1 1.5 1.5c0 2.176-1.839 4.5-7 4.5h-.056a4.805 4.805 0 0 1 .782-.851zm-6.726.851c-5.161 0-7-2.324-7-4.5a1.5 1.5 0 0 1 1.5-1.5 1 1 0 0 0 .375-.076 23.486 23.486 0 0 0 4.4 5.225 4.805 4.805 0 0 1 .781.851z">
                                    </path>
                                </svg>
                                <div class="flex">
                                    <p class="texy-base flex items-center justify-center truncate font-medium text-gray-400 transition-colors   "
                                        contenteditable="false">reward name</p>
                                </div>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a href="#" class="flex justify-center">
                                    <img class="mr-4 h-8 rounded-full object-cover"
                                        src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                        alt="">
                                    <div contenteditable="false" class="flex">
                                        <p class="texy-base flex items-center truncate font-medium text-gray-400 transition-colors   "
                                            contenteditable="false">Provider name</p>
                                    </div>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z">
                                        </path>
                                        <circle cx="12" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="7" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="17" cy="15" r="1.5">
                                        </circle>
                                    </svg>
                                    <h3
                                        class="rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        22/05/22</h3>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                        height="512" fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M7.835,16.17c-.23-.23-.446-.482-.641-.748-.325-.446-.227-1.072,.22-1.397,.446-.325,1.071-.227,1.397,.219,.129,.178,.274,.349,.437,.511,.803,.803,1.87,1.245,3.005,1.245s2.203-.442,3.005-1.245l5.5-5.5c1.657-1.657,1.657-4.354,0-6.011s-4.354-1.657-6.011,0l-1.058,1.058c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l1.058-1.058c2.437-2.438,6.402-2.438,8.839,0,2.437,2.437,2.437,6.402,0,8.839l-5.5,5.5c-1.18,1.181-2.75,1.831-4.419,1.831s-3.239-.65-4.418-1.83Zm-1.582,7.83c1.67,0,3.239-.65,4.419-1.831l1.058-1.058c.391-.39,.391-1.023,0-1.414-.39-.391-1.023-.39-1.414,0l-1.059,1.058c-.803,.803-1.87,1.245-3.005,1.245s-2.202-.442-3.005-1.245-1.245-1.87-1.245-3.005,.442-2.203,1.245-3.005l5.5-5.5c.803-.803,1.87-1.245,3.005-1.245s2.203,.442,3.005,1.245c.16,.161,.306,.332,.436,.51,.324,.447,.949,.547,1.397,.221,.447-.325,.546-.95,.221-1.397-.19-.262-.405-.513-.639-.747-1.181-1.182-2.751-1.832-4.42-1.832s-3.239,.65-4.419,1.831L1.834,13.331C.653,14.511,.003,16.081,.003,17.75c0,1.669,.65,3.239,1.831,4.419,1.18,1.181,2.749,1.831,4.419,1.831Z">
                                        </path>
                                    </svg>
                                    <h3
                                        class="truncate rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        related link</h3>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!----------END Reward row------------>

                    <!----------Reward row------------>

                    <div
                        class="group border-l-2 border-transparent py-4 hover:border-traivis-500 hover:bg-traivis-50 ">
                        <div
                            class="flex flex-row flex-wrap items-center justify-center justify-between">

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <svg id="Layer_1" height="512" viewbox="0 0 24 24"
                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1" fill="currentColor"
                                    class="mr-4 h-8 text-gray-800 transition-colors ">
                                    <path
                                        d="m14.09 16h.91c6.643 0 9-3.5 9-6.5a3.5 3.5 0 0 0 -2.84-3.433 7.564 7.564 0 0 0 .409-1 3.887 3.887 0 0 0 -.626-3.458 3.979 3.979 0 0 0 -3.214-1.609h-11.458a3.979 3.979 0 0 0 -3.214 1.612 3.887 3.887 0 0 0 -.626 3.458 7.564 7.564 0 0 0 .409 1 3.5 3.5 0 0 0 -2.84 3.43c0 3 2.357 6.5 9 6.5h.91a5.027 5.027 0 0 1 .09.921v3.079a1.883 1.883 0 0 1 -2 2h-2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2h-1.994a1.885 1.885 0 0 1 -2.006-2v-3.08a5.025 5.025 0 0 1 .09-.92zm1.636-2.851a23.486 23.486 0 0 0 4.4-5.225 1 1 0 0 0 .374.076 1.5 1.5 0 0 1 1.5 1.5c0 2.176-1.839 4.5-7 4.5h-.056a4.805 4.805 0 0 1 .782-.851zm-6.726.851c-5.161 0-7-2.324-7-4.5a1.5 1.5 0 0 1 1.5-1.5 1 1 0 0 0 .375-.076 23.486 23.486 0 0 0 4.4 5.225 4.805 4.805 0 0 1 .781.851z">
                                    </path>
                                </svg>
                                <div class="flex">
                                    <p class="texy-base flex items-center justify-center truncate font-medium text-gray-400 transition-colors   "
                                        contenteditable="false">reward name</p>
                                </div>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a href="#" class="flex justify-center">
                                    <img class="mr-4 h-8 rounded-full object-cover"
                                        src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                        alt="">
                                    <div contenteditable="false" class="flex">
                                        <p class="texy-base flex items-center truncate font-medium text-gray-400 transition-colors   "
                                            contenteditable="false">Provider name</p>
                                    </div>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z">
                                        </path>
                                        <circle cx="12" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="7" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="17" cy="15" r="1.5">
                                        </circle>
                                    </svg>
                                    <h3
                                        class="rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        22/05/22</h3>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                        height="512" fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M7.835,16.17c-.23-.23-.446-.482-.641-.748-.325-.446-.227-1.072,.22-1.397,.446-.325,1.071-.227,1.397,.219,.129,.178,.274,.349,.437,.511,.803,.803,1.87,1.245,3.005,1.245s2.203-.442,3.005-1.245l5.5-5.5c1.657-1.657,1.657-4.354,0-6.011s-4.354-1.657-6.011,0l-1.058,1.058c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l1.058-1.058c2.437-2.438,6.402-2.438,8.839,0,2.437,2.437,2.437,6.402,0,8.839l-5.5,5.5c-1.18,1.181-2.75,1.831-4.419,1.831s-3.239-.65-4.418-1.83Zm-1.582,7.83c1.67,0,3.239-.65,4.419-1.831l1.058-1.058c.391-.39,.391-1.023,0-1.414-.39-.391-1.023-.39-1.414,0l-1.059,1.058c-.803,.803-1.87,1.245-3.005,1.245s-2.202-.442-3.005-1.245-1.245-1.87-1.245-3.005,.442-2.203,1.245-3.005l5.5-5.5c.803-.803,1.87-1.245,3.005-1.245s2.203,.442,3.005,1.245c.16,.161,.306,.332,.436,.51,.324,.447,.949,.547,1.397,.221,.447-.325,.546-.95,.221-1.397-.19-.262-.405-.513-.639-.747-1.181-1.182-2.751-1.832-4.42-1.832s-3.239,.65-4.419,1.831L1.834,13.331C.653,14.511,.003,16.081,.003,17.75c0,1.669,.65,3.239,1.831,4.419,1.18,1.181,2.749,1.831,4.419,1.831Z">
                                        </path>
                                    </svg>
                                    <h3
                                        class="truncate rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        related link</h3>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!----------END Reward row------------>

                    <!----------Reward row------------>

                    <div
                        class="group bg-white py-4 transition-colors hover:border-l-2 hover:border-traivis-500 hover:bg-traivis-50  ">
                        <div
                            class="flex flex-row flex-wrap items-center justify-center justify-between">

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <svg id="Layer_1" height="512" viewbox="0 0 24 24"
                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                    data-name="Layer 1" fill="currentColor"
                                    class="mr-4 h-8 text-gray-800 transition-colors ">
                                    <path
                                        d="m14.09 16h.91c6.643 0 9-3.5 9-6.5a3.5 3.5 0 0 0 -2.84-3.433 7.564 7.564 0 0 0 .409-1 3.887 3.887 0 0 0 -.626-3.458 3.979 3.979 0 0 0 -3.214-1.609h-11.458a3.979 3.979 0 0 0 -3.214 1.612 3.887 3.887 0 0 0 -.626 3.458 7.564 7.564 0 0 0 .409 1 3.5 3.5 0 0 0 -2.84 3.43c0 3 2.357 6.5 9 6.5h.91a5.027 5.027 0 0 1 .09.921v3.079a1.883 1.883 0 0 1 -2 2h-2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2h-1.994a1.885 1.885 0 0 1 -2.006-2v-3.08a5.025 5.025 0 0 1 .09-.92zm1.636-2.851a23.486 23.486 0 0 0 4.4-5.225 1 1 0 0 0 .374.076 1.5 1.5 0 0 1 1.5 1.5c0 2.176-1.839 4.5-7 4.5h-.056a4.805 4.805 0 0 1 .782-.851zm-6.726.851c-5.161 0-7-2.324-7-4.5a1.5 1.5 0 0 1 1.5-1.5 1 1 0 0 0 .375-.076 23.486 23.486 0 0 0 4.4 5.225 4.805 4.805 0 0 1 .781.851z">
                                    </path>
                                </svg>
                                <div class="flex">
                                    <p class="texy-base flex items-center justify-center truncate font-medium text-gray-400 transition-colors   "
                                        contenteditable="false">reward name</p>
                                </div>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a href="#" class="flex justify-center">
                                    <img class="mr-4 h-8 rounded-full object-cover"
                                        src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                        alt="">
                                    <div contenteditable="false" class="flex">
                                        <p class="texy-base flex items-center truncate font-medium text-gray-400 transition-colors   "
                                            contenteditable="false">Provider name</p>
                                    </div>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewbox="0 0 24 24" width="512" height="512"
                                        fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z">
                                        </path>
                                        <circle cx="12" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="7" cy="15" r="1.5">
                                        </circle>
                                        <circle cx="17" cy="15" r="1.5">
                                        </circle>
                                    </svg>
                                    <h3
                                        class="rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        22/05/22</h3>
                                </a>
                            </div>

                            <div
                                class="flex w-1/2 justify-start px-4 py-2 md:w-1/4 md:justify-center md:py-0">
                                <a class="texy-base mr-2 mb-1 inline-block flex items-center justify-center py-1 px-2 text-gray-400 transition-colors group-hover:text-gray-700  lg:mb-0"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                        data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                        height="512" fill="currentColor" class="mr-2 h-5 w-5">
                                        <path
                                            d="M7.835,16.17c-.23-.23-.446-.482-.641-.748-.325-.446-.227-1.072,.22-1.397,.446-.325,1.071-.227,1.397,.219,.129,.178,.274,.349,.437,.511,.803,.803,1.87,1.245,3.005,1.245s2.203-.442,3.005-1.245l5.5-5.5c1.657-1.657,1.657-4.354,0-6.011s-4.354-1.657-6.011,0l-1.058,1.058c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l1.058-1.058c2.437-2.438,6.402-2.438,8.839,0,2.437,2.437,2.437,6.402,0,8.839l-5.5,5.5c-1.18,1.181-2.75,1.831-4.419,1.831s-3.239-.65-4.418-1.83Zm-1.582,7.83c1.67,0,3.239-.65,4.419-1.831l1.058-1.058c.391-.39,.391-1.023,0-1.414-.39-.391-1.023-.39-1.414,0l-1.059,1.058c-.803,.803-1.87,1.245-3.005,1.245s-2.202-.442-3.005-1.245-1.245-1.87-1.245-3.005,.442-2.203,1.245-3.005l5.5-5.5c.803-.803,1.87-1.245,3.005-1.245s2.203,.442,3.005,1.245c.16,.161,.306,.332,.436,.51,.324,.447,.949,.547,1.397,.221,.447-.325,.546-.95,.221-1.397-.19-.262-.405-.513-.639-.747-1.181-1.182-2.751-1.832-4.42-1.832s-3.239,.65-4.419,1.831L1.834,13.331C.653,14.511,.003,16.081,.003,17.75c0,1.669,.65,3.239,1.831,4.419,1.18,1.181,2.749,1.831,4.419,1.831Z">
                                        </path>
                                    </svg>
                                    <h3
                                        class="truncate rounded-full border border-gray-400 px-2 text-base font-medium transition-colors group-hover:border-gray-700 ">
                                        related link</h3>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!----------END Reward row------------> --}}

                </div>
            </section>
        </div>
    </div>

</div>




