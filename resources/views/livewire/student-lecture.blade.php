<div>
    @if ($isMaker)
        <div class="bg-green-50 py-1 text-center capitalize text-green-500">The Instructor’s view
        </div>
    @endif

    @if ($content->content->section->id == $content->course->sections()->first()->id)
        <div class="relative px-6 text-gray-500">
            <!--name-->
            <p class="flex items-center gap-x-3 truncate bg-white text-2xl font-bold">
                <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                    <path
                        d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                    </path>
                </svg>
                You will be eligible for course refund after this content
            </p>
            <!--/name-->
        </div>
    @else
        @if ($content->course->transactions()->where('payerable_id', $user->id)->first()->is_refundable)
            @livewire('confirm-continue-course', ['courseId' => $content->course->id])
        @endif
    @endif
    <!-- Lecture -->
    <div class="relative px-6 text-gray-500">
        <!-- header -->
        <div
            class="sticky top-0 z-10 flex w-full flex-col items-center justify-between gap-x-3 gap-y-3 bg-white py-4 sm:flex-row">
            <!--name-->
            <p class="flex items-center gap-x-3 truncate bg-white text-2xl font-bold">
                <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                    <path
                        d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                    </path>
                </svg>
                {{ $content->title }}
            </p>
            <!--/name-->
            <!--Start Date-->
            <div class="flex flex-row items-center justify-between gap-x-5 bg-white font-semibold">
                <x-tooltip-arrow direction="up">
                    <div
                        class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z">
                            </path>
                        </svg>
                        <p class="">
                            {{ $content->drip_datetime }}
                        </p>
                    </div>
                    <x-slot name="text">
                        Start Date
                    </x-slot>
                </x-tooltip-arrow>
            </div>
            <!--/Start Date-->
            <!--Duration-->
            <div class="flex flex-row items-center justify-between gap-x-5 bg-white font-semibold">
                <x-tooltip-arrow direction="up">
                    <div
                        class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z">
                            </path>
                        </svg>
                        <p class="">
                            {{ $content->formatted_duration }}
                        </p>
                    </div>
                    <x-slot name="text">
                        Duration
                    </x-slot>
                </x-tooltip-arrow>
            </div>
            <!--/Duration-->
            <!--info-->
            <div class="flex flex-row items-center justify-between gap-x-5 bg-white font-semibold">
                <x-tooltip-arrow direction="up">
                    <div
                        class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M5,20H13c2.757,0,5-2.243,5-5v-6c0-2.757-2.243-5-5-5H5C2.243,4,0,6.243,0,9v6C0,17.757,2.243,20,5,20ZM24,8.313v7.319c0,.757-.42,1.437-1.097,1.775-.283,.141-.587,.211-.889,.211-.421,0-.837-.135-1.189-.399-.037-.028-.825-.81-.825-.81V7.544s.786-.789,.825-.818c.604-.454,1.399-.527,2.078-.188s1.097,1.018,1.097,1.775Z">
                            </path>
                        </svg>
                        <p class="">
                            {{ config('enums.delivery_modes.' . $content->delivery_mode . '.name') }}
                        </p>
                    </div>
                    <x-slot name="text">
                        Delivery Mode
                    </x-slot>
                </x-tooltip-arrow>
            </div>
            <!--/info-->
        </div>
        <!-- /header -->
        <!--Content-->
        <div class="container mx-auto mt-5 flex flex-col gap-y-10">
            <!--  desc -->
            <div class="">
                <p class="bg-white font-bold">
                    Description
                </p>
                <p class="bg-white">
                    {{ $content->content_lecture }} </p>
            </div>
            <!--END  desc-->
            @if ($enrolled || $isMaker)
                @if ($content->video)
                    <!-- Media-->
                    <div class="w-full">
                        <div class="group relative flex w-full cursor-pointer justify-center overflow-hidden rounded-lg bg-gray-100"
                            @click="$dispatch('vid-modal', {  vidModalImgSrc: '{{ $content->video->getUrl() }}', vidModalImgDesc: '' })">
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
                            <img src="{{ $content->video->preview_url }}"
                                class="pointer-events-none rounded-lg object-cover object-center transition-all">
                            <!--/Video Here-->
                        </div>
                    </div>
                    <!--END Media-->
                @endif

                @if ($content->hasMedia('resources'))

                    <!--Resources-->
                    <div
                        class="group/d my-8 flex w-full flex-col justify-center rounded-lg border border-slate-300 bg-slate-50 p-5 py-10 transition-all focus-within:bg-slate-100 hover:bg-slate-100">
                        <div class="relative flex flex-wrap justify-evenly gap-3">
                            <!--Label-->
                            <div
                                class="absolute -top-14 right-1/2 translate-x-1/2 font-bold transition-all">
                                <p
                                    class="group inline-flex items-center space-x-2 rounded-full border border-b-0 border-slate-300 bg-slate-100 px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 transition">
                                    <svg fill="currentColor" class="h-5 w-5 transition-all"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <circle cx="12" cy="17" r="6"></circle>
                                        <path
                                            d="M11.383,9.024,7.706,2.653a1,1,0,0,0-1.732,0L0,13H5.074A8.008,8.008,0,0,1,11.383,9.024Z">
                                        </path>
                                        <path d="M13,4V9.062A8.022,8.022,0,0,1,19.747,15H24V4Z"></path>
                                    </svg>
                                    <span class="whitespace-nowrap font-bold">Lecture Resources</span>
                                </p>
                            </div>
                            <!--/Label-->
                            <!--Download All button-->
                            <div wire:click="downloadResource()"
                                class="peer absolute -bottom-14 right-1/2 translate-x-1/2 scale-75 font-bold transition-all hover:scale-95 group-focus-within/d:scale-95">
                                <button type="button"
                                    class="group inline-flex items-center space-x-2 rounded-full border border-slate-300 border-transparent bg-slate-100 px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 transition focus-within:text-traivis-500 hover:border-gray-400 hover:bg-white focus:border-traivis-500 focus:bg-white focus:outline-none focus:ring-0">
                                    <svg fill="currentColor" class="h-5 w-5 transition-all"
                                        x="0px" y="0px" viewBox="0 0 24 24" width="512"
                                        height="512">
                                        <path
                                            d="M17.974,7.146c-.332-.066-.603-.273-.742-.569-1.552-3.271-5.143-5.1-8.735-4.438-3.272,.6-5.837,3.212-6.384,6.501-.162,.971-.15,1.943,.033,2.89,.06,.309-.073,.653-.346,.901-1.145,1.041-1.801,2.524-1.801,4.07,0,3.032,2.467,5.5,5.5,5.5h11c4.136,0,7.5-3.364,7.5-7.5,0-3.565-2.534-6.658-6.026-7.354Zm-2.853,7.562l-2.707,2.707c-.387,.387-.896,.582-1.405,.584l-.009,.002-.009-.002c-.509-.002-1.018-.197-1.405-.584l-2.707-2.707c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l1.707,1.707v-5c0-.553,.448-1,1-1s1,.447,1,1v5l1.707-1.707c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Z">
                                        </path>
                                    </svg>
                                    <span class="whitespace-nowrap font-bold">Download All</span>
                                </button>
                            </div>
                            <!--/Download All button-->
                            @foreach ($content->getMedia('resources') as $resource)
                                <!--File-->
                                <div wire:click="downloadResource('{{ $resource->id }}')"
                                    class="mx-auto flex w-36 cursor-pointer flex-col items-center gap-3 px-3 text-slate-500 transition-all hover:scale-105 hover:text-traivis-500 peer-hover:scale-105 peer-hover:text-traivis-500">
                                    @if (Str::before($resource->mime_type, '/') == 'audio')
                                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="m18,8.5v7c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5v-7c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5ZM11.5,0c-.828,0-1.5.672-1.5,1.5v21c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V1.5c0-.828-.672-1.5-1.5-1.5Zm10,4c-.828,0-1.5.672-1.5,1.5v13c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V5.5c0-.828-.672-1.5-1.5-1.5Zm-15,1c-.828,0-1.5.672-1.5,1.5v11c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V6.5c0-.828-.672-1.5-1.5-1.5ZM1.5,9c-.828,0-1.5.672-1.5,1.5v3c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5v-3c0-.828-.672-1.5-1.5-1.5Z">
                                            </path>
                                        </svg>
                                    @endif
                                    @if (Str::before($resource->mime_type, '/') == 'application')
                                        <svg class="h-8 w-8" fill="currentColor" x="0px"
                                            y="0px" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M320,170.667h139.52c-7.448-19.736-19.019-37.656-33.941-52.565l-74.325-74.368c-14.927-14.905-32.852-26.468-52.587-33.92   v139.52C298.667,161.115,308.218,170.667,320,170.667z">
                                                </path>
                                                <path
                                                    d="M468.821,213.333H320c-35.346,0-64-28.654-64-64V0.512C252.565,0.277,249.131,0,245.653,0h-96.32   C90.452,0.071,42.737,47.786,42.667,106.667v298.667C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667V223.68C469.333,220.203,469.056,216.768,468.821,213.333z">
                                                </path>
                                            </g>
                                        </svg>
                                    @endif
                                    @if (Str::before($resource->mime_type, '/') == 'image')
                                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M11.122,12.536a3,3,0,0,0-4.244,0l-6.84,6.84A4.991,4.991,0,0,0,5,24H19a4.969,4.969,0,0,0,2.753-.833Z">
                                            </path>
                                            <circle cx="18" cy="6" r="2">
                                            </circle>
                                            <path
                                                d="M19,0H5A5.006,5.006,0,0,0,0,5V16.586l5.464-5.464a5,5,0,0,1,7.072,0L23.167,21.753A4.969,4.969,0,0,0,24,19V5A5.006,5.006,0,0,0,19,0ZM18,10a4,4,0,1,1,4-4A4,4,0,0,1,18,10Z">
                                            </path>
                                        </svg>
                                    @endif
                                    @if (Str::before($resource->mime_type, '/') == 'video')
                                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="m19.051 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm1 11h2v2h-2zm0-2v-2h2v2zm-16 4h-2v-2h2zm1.949 0v-2h12v2zm-1.949-4h-2v-2h2zm-2 6h2v2h-2zm18 0h2v2h-2zm2-10h-2v-2.816a3 3 0 0 1 2 2.816zm-18-2.816v2.816h-2a3 3 0 0 1 2-2.816zm-2 16.816h2v2.816a3 3 0 0 1 -2-2.816zm18 2.816v-2.816h2a3 3 0 0 1 -2 2.816z">
                                            </path>
                                        </svg>
                                    @endif
                                    <p class="text-center text-sm">
                                        {{ Str::limit($resource->file_name, 25) . '.' . Str::after($resource->mime_type, '/') }}
                                    </p>
                                </div>
                                <!--/File-->
                            @endforeach
                        </div>
                    </div>
                    <!--End Resources-->

                @endif
            @else
                @auth

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
                                <p class="font-bold">Please enroll first to access this part of the course
                                </p>
                                <!--Book-->
                                <div class="">
                                    <button type="button"
                                        wire:click.prevent="$emit('addToCartEmit',{{ $course->id }})"
                                        class="inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                                        <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 512 512">
                                            <path
                                                d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                                            </path>
                                        </svg>
                                        <span class="whitespace-nowrap font-bold">Enroll Now</span>
                                    </button>
                                </div>
                                <!--/Book-->
                            </div>
                        </div>
                        <!-- End Enroll section -->
                    @endif
                @endauth

            @endif
            <!--End-->
            <div class="h-screen">
                <p class="text-center">End of Content</p>
            </div>
            <!--/End-->
            <!--Navigation-->
            <div
                class="group sticky bottom-16 z-10 mx-auto w-full max-w-3xl rounded-t-3xl border border-slate-400 bg-white bg-white bg-opacity-20 px-5 py-3 pb-4 transition-all duration-300 ease-out hover:pb-7">
                <div class="flex flex-row items-center justify-between">
                    <!--Previous-->
                    <div class="">
                        <button type="button" wire:click="prev()"
                            class="{{ !$content->content->previous ? 'bg-gray-500 focus:ring-gray-600 hover:bg-gray-700' : 'bg-traivis-500 hover:bg-traivis-600 focus:ring-traivis-500' }} peer z-20 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:scale-110 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                            <svg fill="currentColor" class="-ml-2 h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M13.293,18.586,7.707,13a1,1,0,0,1,0-1.414L13.293,6A1,1,0,0,1,15,6.707V17.879A1,1,0,0,1,13.293,18.586Z">
                                </path>
                            </svg>
                            <span class="whitespace-nowrap font-bold">Prev</span>
                        </button>
                    </div>
                    <!--/Previous-->
                    <!--Read-->
                    {{-- <div class="" x-data="{read:false}">
                        <button @click="read = true" type="button"
                            class="group/r z-20 peer transition hover:scale-110 inline-flex items-center px-2 hover:px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm gap-x-2 justify-center text-white bg-traivis-500 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-traivis-500"
                            :class="read ? 'bg-green-600 focus:ring-green-600 hover:bg-green-700' : 'focus:ring-traivis-500'">
                            <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="m18,12c-3.314,0-6,2.686-6,6s2.686,6,6,6,6-2.686,6-6-2.686-6-6-6Zm3.192,6.202l-2.213,2.124c-.452.446-1.052.671-1.653.671s-1.203-.225-1.663-.674l-1.132-1.109c-.395-.387-.4-1.02-.014-1.414.386-.396,1.019-.401,1.414-.014l1.131,1.108c.144.142.379.139.522-.002l2.223-2.134c.397-.382,1.031-.371,1.414.029.382.398.369,1.031-.029,1.414Zm-11.192-.202c0-2.39,1.048-4.534,2.709-6h-7.709c-.553,0-1-.447-1-1s.447-1,1-1h8c.553,0,1,.447,1,1,0,.024-.001.048-.003.072,1.177-.682,2.544-1.072,4.003-1.072v-5c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h7.709c-1.661-1.466-2.709-3.61-2.709-6ZM5,5h8c.553,0,1,.447,1,1s-.447,1-1,1H5c-.553,0-1-.447-1-1s.447-1,1-1Zm2,12h-2c-.553,0-1-.447-1-1s.447-1,1-1h2c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                </path>
                            </svg>
                            <span class="whitespace-nowrap font-bold invisible hidden w-0"
                                :class="read ? 'visible block' : 'invisible hidden w-0'">Completed</span>
                            <span class="whitespace-nowrap font-bold hidden group-hover:block"
                                :class="read ? 'group-hover:hidden' : 'group-hover:block'">Mark as
                                Read</span>
                        </button>
                    </div> --}}
                    <!--/Read-->
                    <!--Next-->
                    <div class="">
                        <button type="button" wire:click="next()"
                            class="{{ !$content->content->next ? 'bg-gray-500 focus:ring-gray-600 hover:bg-gray-700' : 'bg-traivis-500 hover:bg-traivis-600 focus:ring-traivis-500' }} peer z-20 inline-flex items-center justify-center gap-x-2 rounded-full border border-transparent bg-traivis-500 px-4 py-2 text-sm font-medium leading-4 text-white shadow-sm transition hover:scale-110 hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1">
                            <span class="whitespace-nowrap font-bold">Next</span>
                            <svg fill="currentColor" class="-mr-2 h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <!--/Next-->
                </div>
            </div>
            <!--/Navigation-->
        </div>
        <!--/Content-->
    </div>
    <!-- END Lecture -->
</div>
