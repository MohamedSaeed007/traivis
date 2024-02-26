<section class="">
    <div x-data="{ qopen: @entangle('openModal') }" @keydown.window.escape.stop="qopen = false" @click.outside="qopen = false"
        class="flex">
        <!----- popup----------->
        <section x-show="qopen" x-transition:enter="ease-out duration-100"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" class="">
            <div aria-labelledby="modal-title" aria-modal="true"
                class="fixed inset-0 z-30 overflow-y-auto" role="dialog">
                <div
                    class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
                    <!---over BG---->
                    <div @click="qopen = false" aria-hidden="true"
                        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <!-- center-->
                    <span aria-hidden="true"
                        class="hidden sm:inline-block sm:h-screen sm:align-middle">​</span>
                    <!---END over BG---->
                    <!-- popup content-->
                    <div
                        class="relative my-8 inline-block w-full transform rounded-lg bg-gradient-to-t from-traivis-50 to-white p-4 text-left align-middle shadow-xl transition-all sm:w-5/6 lg:w-2/3">
                        <div class="">
                            <div class="h-full w-full">
                                <div class="container mx-auto w-full rounded-lg xl:p-6">
                                    <!--Teaser header-->
                                    <div x-data="{ openSetting: false }"
                                        class="flex flex-row items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="ml-4 flex flex-col">
                                                <a class="whitespace-nowrap font-bold text-gray-500"
                                                    href="#">Teaser
                                                    Campaign for:</a>
                                                <b class="font-medium text-gray-900">
                                                    {{-- @dd($course->title) --}}
                                                    {{ optional($course)->title }}</b>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Teaser header-->
                                    <!--Statistics-->
                                    <div class="">
                                        <div
                                            class="my-5 flex flex-row flex-wrap items-center justify-between">
                                            <!--Waiting-->
                                            <div class="w-full md:w-1/3">
                                                <div
                                                    class="via-bg-traivis-50 to-bg-white shadow-dashboard flex scale-75 cursor-pointer items-center items-center justify-between rounded-lg border border-slate-300 bg-gradient-to-br from-slate-100 p-3 px-5 transition-all hover:from-white">
                                                    <div
                                                        class="flex w-auto items-center justify-center gap-x-3">
                                                        <svg class="h-8 w-8 text-slate-400"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                            </path>
                                                        </svg>
                                                        <h3
                                                            class="truncate whitespace-nowrap text-2xl font-medium text-slate-600">
                                                            In Progress
                                                        </h3>
                                                    </div>
                                                    <h2
                                                        class="text-3xl font-medium tracking-tighter text-slate-500">
                                                        {{ $stats['in_progress'] ?? null }}
                                                    </h2>
                                                </div>
                                            </div>
                                            <!--Waiting-->
                                            <!--Published-->
                                            <div class="w-full md:w-1/3">
                                                <div
                                                    class="via-bg-traivis-50 to-bg-white shadow-dashboard flex scale-75 cursor-pointer items-center items-center justify-between rounded-lg border border-green-400 bg-gradient-to-br from-green-50 p-3 px-5 transition-all hover:from-white">
                                                    <div
                                                        class="flex w-auto items-center justify-center gap-x-3">
                                                        <svg class="h-8 w-8 text-green-600"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                            </path>
                                                        </svg>
                                                        <h3
                                                            class="truncate whitespace-nowrap text-2xl font-medium text-slate-600">
                                                            Published
                                                        </h3>
                                                    </div>
                                                    <h2
                                                        class="text-3xl font-medium tracking-tighter text-slate-500">
                                                        {{ $stats['published'] ?? null }}
                                                    </h2>
                                                </div>
                                            </div>
                                            <!--/Published-->
                                            <!--Declined-->
                                            <div class="w-full md:w-1/3">
                                                <div
                                                    class="via-bg-traivis-50 to-bg-white shadow-dashboard flex scale-75 cursor-pointer items-center items-center justify-between rounded-lg border border-red-300 bg-gradient-to-br from-red-50 p-3 px-5 transition-all hover:from-white">
                                                    <div
                                                        class="flex w-auto items-center justify-center gap-x-3">
                                                        <svg class="h-8 w-8 text-red-600"
                                                            fill="currentColor" x="0px"
                                                            y="0px" viewBox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512;"
                                                            xml:space="preserve">
                                                            <g>
                                                                <path
                                                                    d="M256,512c141.385,0,256-114.615,256-256S397.385,0,256,0S0,114.615,0,256C0.153,397.322,114.678,511.847,256,512z    M234.667,128c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333v170.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V128z M256,384c11.782,0,21.333,9.551,21.333,21.333   s-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333S244.218,384,256,384z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <h3
                                                            class="truncate whitespace-nowrap text-2xl font-medium text-slate-600">
                                                            Declined
                                                        </h3>
                                                    </div>
                                                    <h2
                                                        class="text-3xl font-medium tracking-tighter text-slate-500">
                                                        {{ $stats['declined'] ?? null }}
                                                    </h2>
                                                </div>
                                            </div>
                                            <!--Declined-->
                                        </div>
                                    </div>
                                    <!--/Statistics-->
                                    <!--Posts Section-->
                                    <div class="my-3 px-0 text-gray-500 transition-all">
                                        <!-- Posts header-->
                                        <div class="mb-4 flex flex-row items-center justify-between">
                                            <h2 class="block text-2xl font-bold text-gray-500">Campaign
                                                Posts (Slots : {{ $slots }}/20)</h2>
                                            <!--add Posts Buttons -->
                                            <div class="flex gap-x-5">
                                                <button wire:click="addPost()"
                                                    class="mr-1 mt-4 block w-auto rounded-full bg-traivis-500 p-2 px-4 text-white hover:bg-traivis-700">+
                                                    Post</button>
                                            </div>
                                            <!--/ add Posts Buttons -->
                                        </div>
                                        <!--/ Posts header-->
                                        @if ($posts)
                                            @foreach ($posts as $postKey => $post)
                                                <!-- Post # -->
                                                <div class="group/c relative mt-5 rounded-lg border-2 border-gray-200 transition-all hover:border-gray-300"
                                                    :class="open ? 'border-gray-300' : 'border-gray-200'"
                                                    x-data="{ open: @entangle('posts.'.$postKey.'.postCollabseOpened'), activeSocialCounts: @entangle('posts.'.$postKey.'.activeSocialCounts'), activFace: @entangle('activeSocial.' . $postKey . '.facebook'), activTwit: @entangle('activeSocial.' . $postKey . '.twitter'), activPint: @entangle('activeSocial.' . $postKey . '.pinterest'), activLinked: @entangle('activeSocial.' . $postKey . '.linkedin'), activTraivis: @entangle('activeSocial.' . $postKey . '.traivis'), facebookTab: @entangle('socialTab.' . $postKey . '.facebook'), twitterTab: @entangle('socialTab.' . $postKey . '.twitter'), pinterestTab: @entangle('socialTab.' . $postKey . '.pinterest'), linkedinTab: @entangle('socialTab.' . $postKey . '.linkedin'), traivisTab: @entangle('socialTab.' . $postKey . '.traivis') }">
                                                    <!--Collapse header-->
                                                    <div @click="open = !open"
                                                        class="flex cursor-pointer items-center gap-x-5 rounded-lg bg-white p-5 text-gray-500 transition-all">
                                                        <!--Post Icon-->
                                                        <div class="">
                                                            <svg class="h-5 w-5" fill="currentColor"
                                                                x="0px" y="0px"
                                                                viewBox="0 0 512.629 512.629"
                                                                style="enable-background:new 0 0 512.629 512.629;"
                                                                xml:space="preserve">
                                                                <g>
                                                                    <path
                                                                        d="M0.006,256.014c-0.218,54.774,44.009,99.354,98.784,99.572c25.226,0.1,49.543-9.416,68-26.612l147.797,66.731   c-1.027,5.526-1.59,11.127-1.685,16.747c-0.174,55.152,44.393,100.002,99.545,100.177s100.002-44.393,100.177-99.545   s-44.393-100.002-99.545-100.177c-32.951-0.104-63.832,16.053-82.534,43.182L191.686,293.39   c9.863-23.816,9.901-50.567,0.107-74.411l138.667-63.019c31.225,45.161,93.148,56.457,138.309,25.232S525.225,88.045,494,42.884   s-93.148-56.457-138.309-25.232c-26.895,18.596-42.926,49.227-42.875,81.925c0.09,5.628,0.661,11.237,1.707,16.768L167.11,183.331   c-39.939-37.503-102.718-35.528-140.221,4.411C9.532,206.228-0.088,230.657,0.006,256.014z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!--Post Icon-->
                                                        <!--Post Title-->
                                                        <div
                                                            class="flex flex-1 flex-grow items-center justify-start gap-x-5 font-bold">
                                                            <div class="group/d relative">
                                                                <div class="w-28 truncate xl:w-44">
                                                                    <span class="whitespace-nowrap">Post
                                                                        #{{ $postKey + 1 }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/Post Title-->
                                                        <!--Collapse Button-->
                                                        <div class="ml-5">
                                                            <svg :class="open ? 'rotate-90' : 'rotate-0'"
                                                                class="h-5 w-5 rotate-0 transition-transform"
                                                                fill="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--Collapse Button-->
                                                    </div>
                                                    <!--/ Collapse header-->
                                                    <!-----Header Absolute Items----->
                                                    <!--Activate Slots buttons-->
                                                    <div
                                                        class="absolute right-[50%] top-3 z-50 translate-x-1/2 p-3">
                                                        <!--Slots Bar-->
                                                        <div class="flex w-fit items-center gap-x-3">
                                                            @if ($checkConnection['facebook'])
                                                                <!--face-->
                                                                <x-tooltip-arrow direction="down">
                                                                    <button
                                                                        wire:click="toggleSocialChannelToPost('{{ $postKey }}','facebook')"
                                                                        :class="activFace ? 'text-facebook scale-125' :
                                                                            'text-slate-500'"
                                                                        class="group relative focus-within:z-10">
                                                                        <div
                                                                            class="pointer-events-none inset-y-0 flex items-center">
                                                                            <svg class="h-4 w-4"
                                                                                fill="currentColor"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 24 24"
                                                                                style="enable-background:new 0 0 24 24;"
                                                                                xml:space="preserve"
                                                                                width="512"
                                                                                height="512">
                                                                                <g>
                                                                                    <path
                                                                                        d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                            <span
                                                                                class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                Active on Facebook </span>
                                                                        </div>
                                                                    </button>
                                                                    <x-slot name="text">
                                                                        Facebook
                                                                    </x-slot>
                                                                </x-tooltip-arrow>
                                                                <!--/ face-->
                                                            @endif
                                                            @if ($checkConnection['twitter'])
                                                                <!--twitter-->
                                                                <x-tooltip-arrow direction="down">
                                                                    <button
                                                                        wire:click="toggleSocialChannelToPost('{{ $postKey }}','twitter')"
                                                                        :class="activTwit ? 'text-twitter scale-125' :
                                                                            'text-slate-500'"
                                                                        class="group relative focus-within:z-10">
                                                                        <div
                                                                            class="pointer-events-none inset-y-0 flex items-center">
                                                                            <svg class="h-4 w-4"
                                                                                fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                id="Capa_1"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 24 24"
                                                                                style="enable-background:new 0 0 24 24;"
                                                                                xml:space="preserve"
                                                                                width="512"
                                                                                height="512">
                                                                                <path
                                                                                    id="Logo_00000038394049246713568260000012923108920998390947_"
                                                                                    d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z">
                                                                                </path>
                                                                            </svg>
                                                                            <span
                                                                                class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                Active on Twitter </span>
                                                                        </div>
                                                                    </button>
                                                                    <x-slot name="text">
                                                                       Twitter
                                                                    </x-slot>
                                                                </x-tooltip-arrow>
                                                                <!--/twitter-->
                                                            @endif
                                                            @if ($checkConnection['pinterest'])
                                                                <!--Pinter-->
                                                                <x-tooltip-arrow direction="down">
                                                                    <button
                                                                        wire:click="toggleSocialChannelToPost('{{ $postKey }}','pinterest')"
                                                                        :class="activPint ? 'text-pinterest scale-125' :
                                                                            'text-slate-500'"
                                                                        class="group relative focus-within:z-10">
                                                                        <div
                                                                            class="pointer-events-none inset-y-0 flex items-center">
                                                                            <svg class="h-4 w-4"
                                                                                fill="currentColor"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 24 24"
                                                                                style="enable-background:new 0 0 24 24;"
                                                                                xml:space="preserve"
                                                                                width="512"
                                                                                height="512">
                                                                                <g>
                                                                                    <path
                                                                                        d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                            <span
                                                                                class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                Active on Pinterest </span>
                                                                        </div>
                                                                    </button>
                                                                    <x-slot name="text">
                                                                        Pinterest
                                                                    </x-slot>
                                                                </x-tooltip-arrow>
                                                                <!--/Pinter-->
                                                            @endif
                                                            @if ($checkConnection['linkedin'])
                                                                <!--Linked-->
                                                                <x-tooltip-arrow direction="down">
                                                                    <button
                                                                        wire:click="toggleSocialChannelToPost('{{ $postKey }}','linkedin')"
                                                                        :class="activLinked ? 'text-linkedIn scale-125' :
                                                                            'text-slate-500'"
                                                                        class="group relative focus-within:z-10">
                                                                        <div
                                                                            class="pointer-events-none inset-y-0 flex items-center">
                                                                            <svg class="h-4 w-4"
                                                                                fill="currentColor"
                                                                                x="0px"
                                                                                y="0px"
                                                                                viewBox="0 0 24 24"
                                                                                style="enable-background:new 0 0 24 24;"
                                                                                xml:space="preserve"
                                                                                width="512"
                                                                                height="512">
                                                                                <g>
                                                                                    <path id="Path_2525"
                                                                                        d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262">
                                                                                    </path>
                                                                                    <path id="Path_2520"
                                                                                        d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463">
                                                                                    </path>
                                                                                    <path id="Path_2526"
                                                                                        d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                            <span
                                                                                class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                Active on LinkedIn </span>
                                                                        </div>
                                                                    </button>
                                                                    <x-slot name="text">
                                                                        LinkedIn
                                                                    </x-slot>
                                                                </x-tooltip-arrow>
                                                                <!--/Linked-->
                                                            @endif
                                                            <!--Traivis-->
                                                                <x-tooltip-arrow direction="down">
                                                                    <button
                                                                        wire:click="toggleSocialChannelToPost('{{ $postKey }}','traivis')"
                                                                        :class="activTraivis ? 'text-blue-500' :
                                                                            'text-slate-400'"
                                                                        class="group relative focus-within:z-10">
                                                                        <div
                                                                            class="pointer-events-none inset-y-0 flex items-center">
                                                                            <svg class="h-4 w-4"
                                                                                fill="currentColor"
                                                                                viewBox="0 0 488.3 488.3"
                                                                                xml:space="preserve">
                                                                                <g>
                                                                                    <path class="st0"
                                                                                        d="M33.7,324.8c-5.4,2.3-8,8.5-5.7,13.9c2.3,5.4,8.6,7.9,14,5.6c5.4-2.3,8-8.5,5.7-13.9C45.4,325,39.1,322.5,33.7,324.8z">
                                                                                    </path>
                                                                                    <path class="st0"
                                                                                        d="M458.9,74.9C424.2,40.6,285.8,0,260.6,0C238,0,126.4,35.3,81.2,65.1c-26.1,13.6-44,41.2-44,71.4c0,0,0,17.5,0,41.4v132.8c6-129.5,6.4-166.2,16.7-180c0.4-0.4,0.7-0.9,1.1-1.3c0.5-0.6,1.1-1.3,1.6-1.9c0.4-0.4,0.7-0.8,1.1-1.2c0.6-0.7,1.3-1.3,1.9-2c0.3-0.3,0.6-0.6,0.9-0.9c1-0.9,2-1.9,3-2.8c0.2-0.2,0.4-0.3,0.6-0.5c0.8-0.7,1.7-1.4,2.6-2.1c0.4-0.3,0.8-0.6,1.2-0.9c0.7-0.5,1.4-1.1,2.1-1.6c0.4-0.3,0.9-0.6,1.4-0.9c0.7-0.5,1.4-0.9,2.1-1.4c0.5-0.3,1-0.6,1.4-0.9c0.7-0.4,1.4-0.9,2.2-1.3c0.5-0.3,1-0.5,1.5-0.8c0.8-0.4,1.6-0.8,2.4-1.2c0.5-0.2,0.9-0.5,1.4-0.7c1-0.5,2-0.9,2.9-1.3c0.3-0.1,0.6-0.3,0.9-0.4c1.3-0.5,2.5-1,3.8-1.5c33.6,19.4,94.9,39.7,136.5,48.9v238.1c0,53,43.5,96,97.2,96h56.8c-23.9,0-88.4-1.2-88.4-96V154.6C357.7,140.1,479.2,95.2,458.9,74.9z M263.3,121.8c-31.7,0-171.9-41.1-151.1-61.2C135.7,38,244.6,6.2,263.3,6.2c18.8,0,130,29.4,155.8,54.4C437.4,78.2,295,121.8,263.3,121.8z">
                                                                                    </path>
                                                                                </g>
                                                                                <path class="st0"
                                                                                    d="M263.9,35.6c-9,0-61.5,15.3-72.8,26.3c-10,9.7,57.5,29.6,72.8,29.6c15.3,0,83.8-21,75-29.6C326.5,49.8,272.9,35.6,263.9,35.6z">
                                                                                </path>
                                                                            </svg>
                                                                            <span
                                                                                class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                Active on Traivis </span>
                                                                        </div>

                                                                    </button>
                                                                    <x-slot name="text">
                                                                        Traivis
                                                                    </x-slot>
                                                                </x-tooltip-arrow>
                                                            <!--/Traivis-->
                                                        </div>
                                                        <!--/ Slots Bar-->
                                                    </div>
                                                    <!--Activate Slots buttons-->
                                                    <!--Edit Post buttons-->
                                                    <div>

                                                        <div class="absolute right-12 top-2 z-50 ">
                                                            <x-tooltip-arrow class="">
                                                                <x-slot name="text">
                                                                    Save
                                                                </x-slot>
                                                                <button wire:click="savePost('{{ $postKey }}')"
                                                                        class="group/x visible cursor-pointer rounded-full fill-green-600 p-3 transition-all hover:bg-traivis-500 hover:fill-white">
                                                                    <svg viewBox="0 0 24 24" width="25"
                                                                         height="25">
                                                                        <path
                                                                                d="M12,24c-1.626,0-3.16-.714-4.208-1.959-1.54,.176-3.127-.405-4.277-1.555-1.149-1.15-1.729-2.74-1.59-4.362-1.211-.964-1.925-2.498-1.925-4.124s.714-3.16,1.96-4.208c-.175-1.537,.405-3.127,1.555-4.277,1.15-1.15,2.737-1.733,4.361-1.59,.964-1.21,2.498-1.925,4.124-1.925s3.16,.714,4.208,1.959c1.542-.173,3.127,.405,4.277,1.555,1.149,1.15,1.729,2.74,1.59,4.362,1.211,.964,1.925,2.498,1.925,4.124s-.714,3.16-1.96,4.208c.175,1.537-.405,3.127-1.555,4.277-1.151,1.15-2.741,1.726-4.361,1.59-.964,1.21-2.498,1.925-4.124,1.925Zm-4.127-3.924c.561,0,1.081,.241,1.448,.676,.668,.793,1.644,1.248,2.679,1.248s2.011-.455,2.679-1.248c.403-.479,.99-.721,1.616-.67,1.034,.087,2.044-.28,2.776-1.012,.731-.731,1.1-1.743,1.012-2.776-.054-.624,.19-1.213,.67-1.617,.792-.667,1.247-1.644,1.247-2.678s-.455-2.011-1.247-2.678c-.479-.403-.724-.993-.67-1.617,.088-1.033-.28-2.045-1.012-2.776s-1.748-1.094-2.775-1.012c-.626,.056-1.214-.191-1.617-.669-.668-.793-1.644-1.248-2.679-1.248s-2.011,.455-2.679,1.248c-.404,.479-.993,.719-1.616,.67-1.039-.09-2.044,.28-2.776,1.012-.731,.731-1.1,1.743-1.012,2.776,.054,.624-.19,1.213-.67,1.617-.792,.667-1.247,1.644-1.247,2.678s.455,2.011,1.247,2.678c.479,.403,.724,.993,.67,1.617-.088,1.033,.28,2.045,1.012,2.776,.732,.731,1.753,1.095,2.775,1.012,.057-.005,.113-.007,.169-.007Zm4.928-4.941l4.739-4.568c.397-.383,.409-1.017,.025-1.414-.383-.397-1.016-.409-1.414-.026l-4.752,4.581c-.391,.391-1.022,.391-1.44-.025l-2.278-2.117c-.402-.375-1.036-.353-1.413,.052-.376,.404-.353,1.037,.052,1.413l2.252,2.092c.586,.586,1.357,.879,2.126,.879,.765,0,1.526-.289,2.104-.866Z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </x-tooltip-arrow>
                                                        </div>


                                                        @if (!$post['hasPublished'])
                                                         <div class="absolute right-24 top-2 z-50">
                                                            <x-tooltip-arrow class="">
                                                                <x-slot name="text">
                                                                    Delete
                                                                </x-slot>
                                                                <button wire:click="deletePost('{{ $postKey }}')"
                                                                    class="group/x visible mx-2 cursor-pointer rounded-full fill-red-500 p-3 transition-all hover:bg-traivis-500 hover:fill-white">
                                                                    <svg viewBox="0 0 24 24" width="25"
                                                                        height="25">
                                                                        <path
                                                                            d="M16,8a1,1,0,0,0-1.414,0L12,10.586,9.414,8A1,1,0,0,0,8,9.414L10.586,12,8,14.586A1,1,0,0,0,9.414,16L12,13.414,14.586,16A1,1,0,0,0,16,14.586L13.414,12,16,9.414A1,1,0,0,0,16,8Z">
                                                                        </path>
                                                                        <path
                                                                            d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </x-tooltip-arrow>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <!--/ Edit Post buttons-->
                                                    <!-----Header Absolute Items----->
                                                    <!--collapse content-->
                                                    @if ($errors->any())
                                                    <div class="bg-white text-red-500">
                                                        <ul>
                                                            @foreach ($errors->all() as $key => $error)
                                                                <li> - {{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                    {{-- @if ($selectedChannelHasPublishedDateErrorMessage)
                                                    <div class="bg-white text-red-500">
                                                        <ul>
                                                                <li> - {{ $selectedChannelHasPublishedDateErrorMessage }}</li>
                                                        </ul>
                                                    </div>
                                                    @endif --}}
                                                    {{-- @if ($post['status'] == 'saved')
                                                        <div
                                                            class="bg-white text-green-500">{{ $postSavedMessage }}</div>
                                                    @endif --}}
                                                    {{-- @if ($post['errorMessage'])
                                                    <div class="bg-white text-red-500">
                                                        <ul>
                                                                <li> - {{ $post['errorMessage'] }}</li>
                                                        </ul>
                                                    </div>
                                                    @endif --}}
                                                    <div class="rounded-b-lg bg-white p-2 pt-5"
                                                        x-show="open && activeSocialCounts"
                                                        x-transition:enter="transition-opacity ease-linear"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:leave="transition-opacity ease-linear"
                                                        x-transition:leave-end="opacity-0"
                                                        x-transition:leave-start="opacity-100"
                                                        style="display: none;">
                                                        <!--the Post-->
                                                        <div x-data="{ imageUrl: @entangle('posts.' . $postKey . '.image'), content: @entangle('posts.' . $postKey . '.text'), socialMediaDate: @entangle('socialMediaDate'), idk: 0, charSive: 0, dateId: 0, date: '', file: '', update: false, post: false, media2: false }"
                                                            class="flex flex-row flex-wrap items-start justify-between gap-x-3 gap-y-6 md:flex-nowrap">
                                                            <!--Original Post-->
                                                            <div
                                                                class="relative w-full whitespace-normal rounded-lg border border-gray-300 px-5 py-3">
                                                                <!--label-->
                                                                <span
                                                                    class="absolute -top-2.5 left-2 flex h-fit items-center gap-x-3 bg-white px-3 pl-0 text-sm font-bold text-gray-500">
                                                                    <svg class="h-3 w-3"
                                                                        fill="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        width="512" height="512">
                                                                        <path
                                                                            d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z">
                                                                        </path>
                                                                    </svg>
                                                                    Original Post
                                                                </span>
                                                                <!--/label-->
                                                                <!--Form-->
                                                                <div
                                                                    class="relative h-auto w-full bg-white p-2">
                                                                    <!-- post-->
                                                                    <div
                                                                        class="flex w-full flex-col items-center justify-center bg-white">
                                                                        <!--Post Text-->
                                                                        <div class="relative w-full">
                                                                            <span
                                                                                class="absolute right-0 top-0 rounded-bl-lg rounded-tr-lg bg-slate-400 px-2 py-0 text-white"
                                                                                x-text="charSive">0</span>
                                                                            <textarea
                                                                                class="mb-2 w-full cursor-pointer resize-none overflow-hidden rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm font-medium leading-none text-gray-600 placeholder-slate-500 transition-colors placeholder:pl-3 placeholder:text-lg placeholder:font-bold valid:border-white valid:bg-white valid:py-[19px] focus-within:placeholder-white hover:border-traivis-300 hover:bg-white focus:cursor-auto focus:border-traivis-300 focus:bg-white focus:text-gray-800 focus:outline-none focus:ring-0 active:transition-none"
                                                                                placeholder="What’s in your mind..." cols="50" rows="" required=""
                                                                                :class="media ? '' : 'mb-2'" x-on:input.change="charSive = content.length"
                                                                                x-model.debounce.500ms="content" x-data="{ resize: () => { $el.style.height = '10px', $el.style.height = $el.scrollHeight + 'px' } }" @input="resize()"> </textarea>
                                                                            {{-- @error('posts.' . $postKey .
                                                                                '.text')
                                                                                <p class="text-red-500">
                                                                                    {{ $message }}</p>
                                                                            @enderror --}}
                                                                        </div>
                                                                        <!--Post Text-->
                                                                        <!--Post Image-->
                                                                        <div class="m-3 mt-0 w-full">
                                                                            <!--upload image-->
                                                                            <div class="flex py-1">
                                                                                <div
                                                                                    class="relative mb-2 w-full cursor-pointer">
                                                                                    <!-- image -->
                                                                                    @if (array_key_exists('image', $post))
                                                                                        <template
                                                                                            x-if="imageUrl">
                                                                                            {{-- @dd($post) --}}
                                                                                            <img @click="$refs.emp_avatar.click()"
                                                                                                src="{{ is_string($post['image']) ? $post['image'] : optional($post['image'])->temporaryUrl() }}"
                                                                                                class="w-full rounded-lg border border-slate-300 object-cover">
                                                                                        </template>
                                                                                    @endif
                                                                                    <!-- /image -->
                                                                                    <!-- when image is not available -->
                                                                                    <template
                                                                                        x-if="!imageUrl">
                                                                                        <div @click="$refs.emp_avatar.click()"
                                                                                            class="flex h-[250px] w-full content-center justify-center rounded-lg border border-slate-300 bg-slate-50 align-middle transition-all hover:bg-white">
                                                                                            <label
                                                                                                class="m-auto mx-auto text-center align-middle">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="60"
                                                                                                    height="60"
                                                                                                    class="fill-slate-400">
                                                                                                    <path
                                                                                                        d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </label>
                                                                                        </div>
                                                                                    </template>
                                                                                    <!-- /when image is not available -->
                                                                                    <!-- Image file selector -->
                                                                                    <div
                                                                                        class="absolute bottom-5 left-0 right-0 text-center text-sm font-bold">
                                                                                        <p :class="imageUrl ?
                                                                                            'hidden' : ''"
                                                                                            class="text-slate-500">
                                                                                            Upload Media
                                                                                        </p>
                                                                                        <p :class="imageUrl ? '' :
                                                                                            'hidden'"
                                                                                            class="hidden text-white shadow-md">
                                                                                            Change Media
                                                                                        </p>
                                                                                    </div>
                                                                                    <input
                                                                                        x-ref="emp_avatar"
                                                                                        wire:model="posts.{{ $postKey }}.image"
                                                                                        {{-- x-model="imageUrl" --}}
                                                                                        class="mt-2 hidden"
                                                                                        type="file"
                                                                                        accept="gif/*,video/*,image/*"
                                                                                        @change="fileChosen">
                                                                                    <!-- /Image file selector -->
                                                                                </div>
                                                                            </div>
                                                                            {{-- @error('posts.' . $postKey .
                                                                                '.image')
                                                                                <p class="text-red-500">
                                                                                    {{ $message }}</p>
                                                                            @enderror --}}
                                                                            <!--/upload image-->
                                                                        </div>
                                                                        <!--Post Image-->
                                                                    </div>
                                                                    <!--/ post-->
                                                                </div>
                                                                <!--/Form-->
                                                            </div>
                                                            <!--/ Original Post-->
                                                            <!--Slots Post-->
                                                            <div
                                                                class="relative w-full whitespace-normal rounded-lg border border-gray-300 px-5 py-3">
                                                                <!--label-->
                                                                <span
                                                                    class="absolute -top-2.5 left-2 flex h-fit items-center gap-x-3 bg-white px-3 pl-0 text-sm font-bold text-gray-500">
                                                                    <svg class="h-3 w-3"
                                                                        fill="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        width="512" height="512">
                                                                        <path
                                                                            d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5Z">
                                                                        </path>
                                                                    </svg>
                                                                    Active Slots
                                                                </span>
                                                                <!--/label-->
                                                                <!--Slots tabs-->
                                                                <div
                                                                    class="absolute -top-2.5 right-[10px] flex h-fit w-auto bg-white px-3 text-sm font-bold text-gray-500">
                                                                    <div
                                                                        class="flex w-fit items-center gap-x-6">
                                                                        <!--face-->
                                                                        <x-tooltip-arrow direction="down">
                                                                            <button
                                                                                wire:click="setActiveSocialMedia('{{ $postKey }}','facebook')"
                                                                                @click="facebookTab = true, twitterTab = false, pinterestTab = false, linkedinTab = false, traivisTab = false"
                                                                                x-show="activFace"
                                                                                :class="facebookTab ?
                                                                                    'text-facebook scale-125' :
                                                                                    'text-slate-500'"
                                                                                class="group relative transition-all focus-within:z-10"
                                                                                style="display: none;">
                                                                                <div
                                                                                    class="pointer-events-none inset-y-0 flex items-center">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor"
                                                                                        id="Capa_1"
                                                                                        x="0px"
                                                                                        y="0px"
                                                                                        viewBox="0 0 24 24"
                                                                                        style="enable-background:new 0 0 24 24;"
                                                                                        xml:space="preserve"
                                                                                        width="512"
                                                                                        height="512">
                                                                                        <g>
                                                                                            <path
                                                                                                d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                        Active on Facebook
                                                                                    </span>
                                                                                </div>
                                                                            </button>
                                                                            <x-slot name="text">
                                                                                Facebook
                                                                            </x-slot>
                                                                        </x-tooltip-arrow>
                                                                        <!--/ face-->
                                                                        <!--twitter-->
                                                                        <x-tooltip-arrow direction="down">
                                                                            <button
                                                                                wire:click="setActiveSocialMedia('{{ $postKey }}','twitter')"
                                                                                @click="facebookTab = false, twitterTab = true, pinterestTab = false, linkedinTab = false, traivisTab = false"
                                                                                x-show="activTwit"
                                                                                :class="twitterTab ?
                                                                                    'text-twitter scale-125' :
                                                                                    'text-gray-500'"
                                                                                class="group relative transition-all focus-within:z-10"
                                                                                style="display: none;">
                                                                                <div
                                                                                    class="pointer-events-none inset-y-0 flex items-center">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        id="Capa_1"
                                                                                        x="0px"
                                                                                        y="0px"
                                                                                        viewBox="0 0 24 24"
                                                                                        style="enable-background:new 0 0 24 24;"
                                                                                        xml:space="preserve"
                                                                                        width="512"
                                                                                        height="512">
                                                                                        <path
                                                                                            id="Logo_00000038394049246713568260000012923108920998390947_"
                                                                                            d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                        Active on Twitter
                                                                                    </span>
                                                                                </div>
                                                                            </button>
                                                                            <x-slot name="text">
                                                                                Twitter
                                                                            </x-slot>
                                                                        </x-tooltip-arrow>
                                                                        <!--/twitter-->
                                                                        <!--Pinter-->
                                                                        <x-tooltip-arrow direction="down">
                                                                            <button
                                                                                wire:click="setActiveSocialMedia('{{ $postKey }}','pinterest')"
                                                                                @click="facebookTab = false, twitterTab = false, pinterestTab = true, linkedinTab = false, traivisTab = false"
                                                                                x-show="activPint"
                                                                                :class="pinterestTab ?
                                                                                    'text-pinterest scale-125' :
                                                                                    'text-slate-500'"
                                                                                class="group relative transition-all focus-within:z-10"
                                                                                style="display: none;">
                                                                                <div
                                                                                    class="pointer-events-none inset-y-0 flex items-center">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor"
                                                                                        x="0px"
                                                                                        y="0px"
                                                                                        viewBox="0 0 24 24"
                                                                                        style="enable-background:new 0 0 24 24;"
                                                                                        xml:space="preserve"
                                                                                        width="512"
                                                                                        height="512">
                                                                                        <g>
                                                                                            <path
                                                                                                d="M12.01,0C5.388,0,0.02,5.368,0.02,11.99c0,5.082,3.158,9.424,7.618,11.171c-0.109-0.947-0.197-2.408,0.039-3.444   c0.217-0.938,1.401-5.961,1.401-5.961s-0.355-0.72-0.355-1.776c0-1.668,0.967-2.911,2.171-2.911c1.026,0,1.52,0.77,1.52,1.688   c0,1.026-0.651,2.566-0.997,3.997c-0.286,1.194,0.602,2.171,1.776,2.171c2.132,0,3.77-2.25,3.77-5.487   c0-2.872-2.062-4.875-5.013-4.875c-3.414,0-5.418,2.556-5.418,5.201c0,1.026,0.395,2.132,0.888,2.734   C7.52,14.615,7.53,14.724,7.5,14.842c-0.089,0.375-0.296,1.194-0.336,1.362c-0.049,0.217-0.178,0.266-0.405,0.158   c-1.5-0.701-2.438-2.882-2.438-4.648c0-3.78,2.743-7.253,7.924-7.253c4.155,0,7.391,2.961,7.391,6.928   c0,4.135-2.605,7.461-6.217,7.461c-1.214,0-2.359-0.632-2.743-1.382c0,0-0.602,2.289-0.75,2.852   c-0.266,1.046-0.997,2.349-1.49,3.148C9.562,23.812,10.747,24,11.99,24c6.622,0,11.99-5.368,11.99-11.99C24,5.368,18.632,0,12.01,0   z">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                        Active on Pinterest
                                                                                    </span>
                                                                                </div>
                                                                            </button>
                                                                            <x-slot name="text">
                                                                                Pinterest
                                                                            </x-slot>
                                                                        </x-tooltip-arrow>
                                                                        <!--/Pinter-->
                                                                        <!--Linked-->
                                                                        <x-tooltip-arrow direction="down">
                                                                            <button
                                                                                wire:click="setActiveSocialMedia('{{ $postKey }}','linkedin')"
                                                                                @click="facebookTab = false, twitterTab = false, pinterestTab = false, linkedinTab = true, traivisTab = false"
                                                                                x-show="activLinked"
                                                                                :class="linkedinTab ?
                                                                                    'text-linkedIn scale-125' :
                                                                                    'text-slate-500'"
                                                                                class="group relative transition-all focus-within:z-10"
                                                                                style="display: none;">
                                                                                <div
                                                                                    class="pointer-events-none inset-y-0 flex items-center">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor"
                                                                                        x="0px"
                                                                                        y="0px"
                                                                                        viewBox="0 0 24 24"
                                                                                        style="enable-background:new 0 0 24 24;"
                                                                                        xml:space="preserve"
                                                                                        width="512"
                                                                                        height="512">
                                                                                        <g>
                                                                                            <path
                                                                                                id="Path_2525"
                                                                                                d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262">
                                                                                            </path>
                                                                                            <path
                                                                                                id="Path_2520"
                                                                                                d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463">
                                                                                            </path>
                                                                                            <path
                                                                                                id="Path_2526"
                                                                                                d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                        Active on LinkedIn
                                                                                    </span>
                                                                                </div>
                                                                            </button>
                                                                            <x-slot name="text">
                                                                                LinkedIn
                                                                            </x-slot>
                                                                        </x-tooltip-arrow>
                                                                        <!--/Linked-->
                                                                        <!--Traivis-->
                                                                        <x-tooltip-arrow direction="down">
                                                                            <button
                                                                                wire:click="setActiveSocialMedia('{{ $postKey }}','traivis')"
                                                                                @click="facebookTab = false, twitterTab = false, pinterestTab = false, linkedinTab = false, traivisTab = true"
                                                                                x-show="activTraivis"
                                                                                :class="traivisTab ?
                                                                                    'text-traivis-500 scale-125' :
                                                                                    'text-slate-500'"
                                                                                class="group relative transition-all focus-within:z-10">
                                                                                <div
                                                                                    class="pointer-events-none inset-y-0 flex items-center">
                                                                                    <svg class="h-5 w-5"
                                                                                        fill="currentColor"
                                                                                        viewBox="0 0 488.3 488.3"
                                                                                        xml:space="preserve">
                                                                                        <g>
                                                                                            <path
                                                                                                class="st0"
                                                                                                d="M33.7,324.8c-5.4,2.3-8,8.5-5.7,13.9c2.3,5.4,8.6,7.9,14,5.6c5.4-2.3,8-8.5,5.7-13.9C45.4,325,39.1,322.5,33.7,324.8z">
                                                                                            </path>
                                                                                            <path
                                                                                                class="st0"
                                                                                                d="M458.9,74.9C424.2,40.6,285.8,0,260.6,0C238,0,126.4,35.3,81.2,65.1c-26.1,13.6-44,41.2-44,71.4c0,0,0,17.5,0,41.4v132.8c6-129.5,6.4-166.2,16.7-180c0.4-0.4,0.7-0.9,1.1-1.3c0.5-0.6,1.1-1.3,1.6-1.9c0.4-0.4,0.7-0.8,1.1-1.2c0.6-0.7,1.3-1.3,1.9-2c0.3-0.3,0.6-0.6,0.9-0.9c1-0.9,2-1.9,3-2.8c0.2-0.2,0.4-0.3,0.6-0.5c0.8-0.7,1.7-1.4,2.6-2.1c0.4-0.3,0.8-0.6,1.2-0.9c0.7-0.5,1.4-1.1,2.1-1.6c0.4-0.3,0.9-0.6,1.4-0.9c0.7-0.5,1.4-0.9,2.1-1.4c0.5-0.3,1-0.6,1.4-0.9c0.7-0.4,1.4-0.9,2.2-1.3c0.5-0.3,1-0.5,1.5-0.8c0.8-0.4,1.6-0.8,2.4-1.2c0.5-0.2,0.9-0.5,1.4-0.7c1-0.5,2-0.9,2.9-1.3c0.3-0.1,0.6-0.3,0.9-0.4c1.3-0.5,2.5-1,3.8-1.5c33.6,19.4,94.9,39.7,136.5,48.9v238.1c0,53,43.5,96,97.2,96h56.8c-23.9,0-88.4-1.2-88.4-96V154.6C357.7,140.1,479.2,95.2,458.9,74.9z M263.3,121.8c-31.7,0-171.9-41.1-151.1-61.2C135.7,38,244.6,6.2,263.3,6.2c18.8,0,130,29.4,155.8,54.4C437.4,78.2,295,121.8,263.3,121.8z">
                                                                                            </path>
                                                                                        </g>
                                                                                        <path class="st0"
                                                                                            d="M263.9,35.6c-9,0-61.5,15.3-72.8,26.3c-10,9.7,57.5,29.6,72.8,29.6c15.3,0,83.8-21,75-29.6C326.5,49.8,272.9,35.6,263.9,35.6z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="sr-only ml-3 block hidden truncate font-normal md:block">
                                                                                        Active on Traivis
                                                                                    </span>
                                                                                </div>
                                                                            </button>
                                                                            <x-slot name="text">
                                                                                Traivis
                                                                            </x-slot>
                                                                        </x-tooltip-arrow>
                                                                        <!--/Traivis-->
                                                                    </div>
                                                                </div>
                                                                <!--/Slots tabs-->
                                                                <!--Slots Tab Forms-->
                                                                <div
                                                                    class="relative h-auto w-full bg-white p-2">
                                                                        <!--social media channel Tab-->
                                                                        <div class="flex w-full flex-col items-center justify-center bg-white">
                                                                            <!--Post Text-->
                                                                            <div class="relative w-full">
                                                                                <span class="absolute right-0 top-0 rounded-bl-lg rounded-tr-lg bg-slate-400 px-2 py-0 text-white" x-text="charSive">0</span>
                                                                            </div>
                                                                            <textarea class="mb-2 w-full cursor-pointer resize-none overflow-hidden rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm font-medium leading-none text-gray-600 placeholder-slate-500 transition-colors placeholder:pl-3 placeholder:text-lg placeholder:font-bold valid:border-white valid:bg-white valid:py-[19px] focus-within:placeholder-white hover:border-traivis-300 hover:bg-white focus:cursor-auto focus:border-traivis-300 focus:bg-white focus:text-gray-800 focus:outline-none focus:ring-0 active:transition-none"
                                                                            disabled
                                                                            placeholder="What’s in your mind..." cols="50" rows="" required=""
                                                                            x-on:input.change="charSive = content.length" x-model.debounce.500ms="content"
                                                                            x-data="{ resize: () => { $el.style.height = '10px', $el.style.height = $el.scrollHeight + 'px' } }"
                                                                            @input="resize()" spellcheck="false"> </textarea>
                                                                            <!--Post Text-->
                                                                            <!--Post Image-->
                                                                            <div class="m-3 mt-0 w-full">
                                                                                <!--upload image-->
                                                                                <div class="flex py-1">
                                                                                    <div
                                                                                        class="relative mb-2 w-full cursor-pointer">
                                                                                        <!-- image -->
                                                                                        @if (array_key_exists('image', $post))
                                                                                            <template
                                                                                                x-if="imageUrl">
                                                                                                <img
                                                                                                    src="{{ is_string($post['image']) ? $post['image'] : optional($post['image'])->temporaryUrl() }}"
                                                                                                    class="w-full rounded-lg border border-slate-300 object-cover">
                                                                                            </template>
                                                                                        @endif
                                                                                        <!-- /image -->
                                                                                        <!-- when image is not available -->
                                                                                        <template
                                                                                            x-if="!imageUrl">
                                                                                            <div
                                                                                                class="flex h-[250px] w-full content-center justify-center rounded-lg border border-slate-300 bg-slate-50 align-middle transition-all hover:bg-white">
                                                                                                <label
                                                                                                    class="m-auto mx-auto text-center align-middle">
                                                                                                    <svg viewBox="0 0 24 24"
                                                                                                        width="60"
                                                                                                        height="60"
                                                                                                        class="fill-slate-400">
                                                                                                        <path
                                                                                                            d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </label>
                                                                                            </div>
                                                                                        </template>
                                                                                        <!-- /when image is not available -->
                                                                                    </div>
                                                                                </div>
                                                                                <!--/upload image-->
                                                                            </div>
                                                                            <!--Post Image-->
                                                                            @if ($facebookPages)
                                                                                <div x-show="facebookTab"
                                                                                    class="m-1 mt-5 flex w-full flex-col justify-center">
                                                                                    <div class="">
                                                                                        Choose Page
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex w-full items-center justify-between gap-x-1">
                                                                                        <div
                                                                                            class="w-full">
                                                                                            <select
                                                                                                wire:model="posts.{{ $postKey }}.social_channels.facebook.page"
                                                                                                class="datepicker-input my-2 h-10 w-full rounded-lg border border-gray-300 p-2 pl-3 text-sm font-medium leading-none text-gray-600 shadow-sm hover:border-traivis-500 focus:outline-none"
                                                                                                x-model="date"
                                                                                                type="">
                                                                                                @foreach ($facebookPages as $page)
                                                                                                    <option
                                                                                                        value="{{ $page['id'] }}">
                                                                                                        {{ $page['name'] }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            @if ($linkedinPages)
                                                                                <div x-show="linkedinTab"
                                                                                    class="m-1 mt-5 flex w-full flex-col justify-center">
                                                                                    <div class="">
                                                                                        Choose Page
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex w-full items-center justify-between gap-x-1">
                                                                                        <div
                                                                                            class="w-full">
                                                                                            <select
                                                                                                wire:model="posts.{{ $postKey }}.social_channels.linkedin.page"
                                                                                                class="datepicker-input my-2 h-10 w-full rounded-lg border border-gray-300 p-2 pl-3 text-sm font-medium leading-none text-gray-600 shadow-sm hover:border-traivis-500 focus:outline-none"
                                                                                                x-model="date"
                                                                                                type="">
                                                                                                <option
                                                                                                    value="">
                                                                                                    None
                                                                                                </option>
                                                                                                @foreach ($linkedinPages as $linkedinOrganizationId => $linkedinOrganizationName)
                                                                                                    <option
                                                                                                        value="{{ $linkedinOrganizationId }}">
                                                                                                        {{ $linkedinOrganizationName }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            @if ($pinterestBoards)
                                                                                <div x-show="pinterestTab"
                                                                                    class="m-1 mt-5 flex w-full flex-col justify-center">
                                                                                    <div class="">
                                                                                        Choose Board
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex w-full items-center justify-between gap-x-1">
                                                                                        <div
                                                                                            class="w-full">
                                                                                            <select
                                                                                                wire:model="posts.{{ $postKey }}.social_channels.pinterest.board"
                                                                                                class="datepicker-input my-2 h-10 w-full rounded-lg border border-gray-300 p-2 pl-3 text-sm font-medium leading-none text-gray-600 shadow-sm hover:border-traivis-500 focus:outline-none"
                                                                                                x-model="date"
                                                                                                type="">
                                                                                                @foreach ($pinterestBoards as $board)
                                                                                                    <option
                                                                                                        value="{{ $board['value'] }}">
                                                                                                        {{ $board['name'] }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            {{-- @foreach ($post['social_channels'] as $channelKey => $channel) --}}
                                                                            <!--Slot Dates-->
                                                                            <div
                                                                                class="m-1 mt-5 flex w-full flex-col justify-center">
                                                                                <div class="">
                                                                                    Publishing Schedule
                                                                                </div>
                                                                                <div
                                                                                    class="flex w-full items-center justify-between gap-x-1">
                                                                                    <div class="w-full">
                                                                                        <input
                                                                                            class="datepicker-input my-2 h-10 w-full rounded-lg border border-gray-300 p-2 pl-3 text-sm font-medium leading-none text-gray-600 shadow-sm hover:border-traivis-500 focus:outline-none"
                                                                                            x-model="socialMediaDate"
                                                                                            type="datetime-local">
                                                                                    </div>
                                                                                    <button
                                                                                        wire:click="addDateToSocialMedia('{{ $postKey }}','{{ $post['selectedSocialMedia'] }}')"
                                                                                        class="block h-10 w-auto whitespace-nowrap rounded-lg bg-traivis-500 px-4 py-0 text-white hover:bg-traivis-700">Add</button>
                                                                                </div>
                                                                            </div>
                                                                            <!--/ Slot Dates-->

                                                                            <!--Selected Dates-->

                                                                            <div class="group relative flex w-full flex-wrap justify-start gap-x-3 gap-y-2">
                                                                                {{-- @error('posts.' .
                                                                                    $postKey .
                                                                                    '.social_channels.' .
                                                                                    $post['selectedSocialMedia'] . '.dates')
                                                                                    <p class="text-red-500">
                                                                                        {{ $message }}
                                                                                    </p>
                                                                                @enderror --}}
                                                                                {{-- @if (array_key_exists($postKey, $dateErrorMessage))
                                                                                    @if (array_key_exists($post['selectedSocialMedia'], $dateErrorMessage[$postKey]))
                                                                                        <p class="text-red-500">
                                                                                            {{ $dateErrorMessage[$postKey][$post['selectedSocialMedia']] ?? '' }}
                                                                                        </p>
                                                                                    @endif
                                                                                @endif --}}
                                                                                <!--dates-->
                                                                                @if (array_key_exists($post['selectedSocialMedia'], $post['social_channels']))
                                                                                @if (array_key_exists('dates', $post['social_channels'][$post['selectedSocialMedia']]))
                                                                                    @foreach ($post['social_channels'][$post['selectedSocialMedia']]['dates'] as $dateKey => $date)
                                                                                        @if ($date['status'] == 'declined')
                                                                                           <x-tooltip-arrow direction="down">
                                                                                                <svg class="h-4 w-4 text-red-600"
                                                                                                    fill="currentColor"
                                                                                                    x="0px"
                                                                                                    y="0px"
                                                                                                    viewBox="0 0 512 512"
                                                                                                    style="enable-background:new 0 0 512 512;"
                                                                                                    xml:space="preserve">
                                                                                                    <g>
                                                                                                        <path
                                                                                                            d="M256,512c141.385,0,256-114.615,256-256S397.385,0,256,0S0,114.615,0,256C0.153,397.322,114.678,511.847,256,512z    M234.667,128c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333v170.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V128z M256,384c11.782,0,21.333,9.551,21.333,21.333   s-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333S244.218,384,256,384z">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>
                                                                                                <x-slot name="text">
                                                                                                    Declined
                                                                                                </x-slot>
                                                                                           </x-tooltip-arrow>
                                                                                        @endif
                                                                                        @if ($date['status'] == 'published')
                                                                                            <x-tooltip-arrow direction="down">
                                                                                                <svg class="h-4 w-4 text-green-600"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path
                                                                                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                <x-slot name="text">
                                                                                                    Post Published
                                                                                                </x-slot>
                                                                                            </x-tooltip-arrow>
                                                                                        @endif
                                                                                        @if ($date['status'] == 'in_progress')
                                                                                            <x-tooltip-arrow direction="down">
                                                                                                <svg class="h-4 w-4 text-slate-400"
                                                                                                        fill="currentColor"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path
                                                                                                            d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                <x-slot name="text">
                                                                                                    in progress
                                                                                                </x-slot>
                                                                                            </x-tooltip-arrow>
                                                                                        @endif

                                                                                        <button
                                                                                            wire:click="removeDateFromSocialMedia('{{ $postKey }}','{{ $post['selectedSocialMedia'] }}','{{ $dateKey }}')"
                                                                                            class="bg-{{ $date['color'] }} border-{{ $date['color'] }} flex w-fit items-center justify-between rounded-full border text-sm text-white">
                                                                                            <div class="mx-2">
                                                                                                {{ \Carbon\Carbon::parse($date['value'])->format('d/m/Y') }}
                                                                                            </div>
                                                                                            <div class="rounded-full bg-slate-200 px-2 py-1 font-bold text-slate-600">
                                                                                                {{ \Carbon\Carbon::parse($date['value'])->format('h:i
                                                                                                                                                                                                                                                                                                                                                                            A') }}
                                                                                            </div>
                                                                                        </button>
                                                                                        <!--dates-->
                                                                                        <!--instructions Tooltip-->
                                                                                        <p
                                                                                            class="pointer-events-none absolute -bottom-10 left-0 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 font-normal text-white opacity-0 transition before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                                                            Click to Remove
                                                                                        </p>
                                                                                        <!--instructions Tooltip-->
                                                                                    @endforeach
                                                                                @endif
                                                                                @endif
                                                                                <!--dates-->
                                                                            </div>
                                                                            <!--Selected Dates-->
                                                                            {{-- @endforeach --}}
                                                                        </div>
                                                                        <!--/social media channel Tab-->
                                                                </div>
                                                                <!--/Slots Tab Forms-->
                                                            </div>
                                                            <!--/ Slots Post-->
                                                        </div>
                                                        <!--/the Post-->
                                                    </div>
                                                    <!--/ collapse content-->
                                                </div>
                                                <!--/ Post #  -->
                                            @endforeach
                                        @endif
                                        <div class="mb-4 flex flex-row items-center justify-center">
                                            <!--add Posts Buttons -->
                                            <div class="flex gap-x-5">
                                                <button @click="qopen = false"
                                                    class="bg-white-500 hover:bg-white-700 mr-1 mt-4 block w-auto rounded-full p-2 px-4 text-black">
                                                    Close</button>
                                            </div>
                                            <!--/ add Posts Buttons -->
                                        </div>
                                    </div>
                                    <!--/Posts Section-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END popup content -->
                </div>
            </div>
        </section>
        <!-----/ popup----------->
    </div>
</section>
