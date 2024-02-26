<div x-data="{ stuQuiz: @entangle('showPopup') }">
    <section x-show="stuQuiz" class="z-[99]" x-transition:enter="ease-out duration-100"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">
        <div aria-labelledby="modal-title" aria-modal="true" class="fixed z-30 inset-0 overflow-y-auto" role="dialog">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!---over BG---->
                <div @click="stuQuiz = false" aria-hidden="true"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                </div>
                <!-- center-->
                <span aria-hidden="true" class="hidden sm:inline-block sm:align-middle sm:h-screen">​</span>
                <!---END over BG---->
                <!-- popup content-->
                <div
                    class="relative inline-block bg-white rounded-lg p-4 py-0 text-left shadow-xl transform transition-all my-8 align-middle w-full sm:w-2/3">
                    <div class="container p-6 pb-0 mx-auto bg-white">
                        <!--------- Assignment Content ----------->
                        <div class="text-gray-500" x-data="{ Status: @entangle('status'), Score: @entangle('score') }">
                            <!-- header -->
                            <div
                                class="sticky top-0 z-10 bg-white w-full py-4 gap-y-3 flex flex-1 items-center justify-between flex-wrap">
                                <!--name-->
                                <p class="bg-white text-2xl flex items-center gap-x-3 whitespace-nowrap">
                                    <svg :class="[(Status === 'Pending' || Status==='Rejected' || Status==='Accepted' ? 'hidden' :
                                        'block')]"
                                        fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                                        <path
                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                        </path>
                                    </svg>
                                    <svg x-show="Status==='Pending'" x-transition:enter-end=" scale-125"
                                        x-transition:enter-start=" scale-100" fill="currentColor"
                                        class="text-yellow-500 h-6 w-6 shrink-0 transition ease-out duration-500"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                        </path>
                                    </svg>
                                    <svg x-show="Status==='Accepted'" x-transition:enter-end=" scale-125"
                                        x-transition:enter-start=" scale-100" fill="currentColor"
                                        class="text-green-600 h-6 w-6 shrink-0 transition ease-out duration-500"
                                        viewBox="0 0 24 24" style="display: none;">
                                        <path
                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                        </path>
                                    </svg>
                                    <svg x-show="Status==='Rejected' || Status=='Closed'"
                                        x-transition:enter-end=" scale-125" x-transition:enter-start=" scale-100"
                                        fill="currentColor"
                                        class="text-red-600 h-6 w-6 shrink-0 transition ease-out duration-500"
                                        viewBox="0 0 24 24" style="display: none;">
                                        <path
                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                        </path>
                                    </svg>
                                    <span class="font-bold text-justify">{{ $assignment?->title }}</span>
                                </p>
                                <!--/name-->
                                <!--info-->
                                <div class="w-fit ">
                                    <!--info-->
                                    <div
                                        class="flex flex-row items-center justify-center gap-x-5 bg-white font-semibold xl:w-auto w-full">
                                        @if ($assignment?->options['validity_option'] == 'for')
                                            <div
                                                class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                                    </path>
                                                </svg>
                                                <p class="">{{ $assignment->options['duration'] }}<span
                                                        class="text-xs">
                                                        {{ $assignment->options['duration_type'] }}</span>
                                                </p>
                                                <span
                                                    class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                    Duration
                                                </span>
                                            </div>
                                        @endif
                                        <div
                                            class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m18,12c-3.314,0-6,2.686-6,6s2.686,6,6,6,6-2.686,6-6-2.686-6-6-6Zm3.192,6.202l-2.213,2.124c-.452.446-1.052.671-1.653.671s-1.203-.225-1.663-.674l-1.132-1.109c-.395-.387-.4-1.02-.014-1.414.386-.396,1.019-.401,1.414-.014l1.131,1.108c.144.142.379.139.522-.002l2.223-2.134c.397-.382,1.031-.371,1.414.029.382.398.369,1.031-.029,1.414Zm-11.192-.202c0-2.39,1.048-4.534,2.709-6h-7.709c-.553,0-1-.447-1-1s.447-1,1-1h8c.553,0,1,.447,1,1,0,.024-.001.048-.003.072,1.177-.682,2.544-1.072,4.003-1.072v-5c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h7.709c-1.661-1.466-2.709-3.61-2.709-6ZM5,5h8c.553,0,1,.447,1,1s-.447,1-1,1H5c-.553,0-1-.447-1-1s.447-1,1-1Zm2,12h-2c-.553,0-1-.447-1-1s.447-1,1-1h2c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                                </path>
                                            </svg>
                                            <p class="">{{ $assignment?->options['pass_points'] }}<span
                                                    class="text-xs"> Ps</span>
                                            </p>

                                            <span
                                                class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                Pass Points
                                            </span>
                                        </div>
                                        <div class="group relative flex gap-x-2 items-center whitespace-nowrap w-fit justify-center"
                                            :class="[(Status === 'Accepted' ? ' text-green-600' : ''), (Status==='Rejected' ?
                                                ' text-red-500' : '')]">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-5.276 3.826a1 1 0 0 0 -1.413-.035l-3.6 3.431a1 1 0 0 1 -1.456-.04l-1.589-1.414a1 1 0 0 0 -1.332 1.494l1.544 1.374a3 3 0 0 0 4.226.017l3.585-3.414a1 1 0 0 0 .035-1.413z">
                                                </path>
                                            </svg>
                                            <p x-show="Status==='Accepted' || Status==='Rejected'" class=""
                                                style="display: none;"><span x-text="Score"></span> /</p>
                                            <p class="">{{ $assignment?->options['total_points'] }}<span
                                                    class="text-xs"> Ps</span>
                                            </p>

                                            <span
                                                class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                Total Points
                                            </span>
                                        </div>
                                        <!--on Act labels-->
                                        <div class="flex items-center justify-center ">
                                            <span
                                                class="transition ease-out duration-50 flex items-center px-2 text-white bg-yellow-500 rounded-full text-sm font-bold"
                                                x-show="Status==='Pending'"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:enter-start="opacity-0 scale-0">
                                                Pending
                                            </span>
                                            <span
                                                class="transition ease-out duration-50 flex items-center px-2 text-white bg-green-600 rounded-full text-sm font-bold"
                                                x-show="Status==='Accepted'"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:enter-start="opacity-0 scale-0">
                                                Accepted
                                            </span>
                                            <span
                                                class="transition ease-out duration-50 flex items-center px-2 text-white bg-red-500 rounded-full text-sm font-bold"
                                                x-show="Status==='Rejected'"
                                                x-transition:enter-end="opacity-100 scale-100"
                                                x-transition:enter-start="opacity-0 scale-0">
                                                Rejected
                                            </span>
                                        </div>
                                        <!--/on Act labels-->
                                    </div>
                                    <!--/info-->
                                </div>
                                <!--/info-->
                            </div>
                            <!-- /header -->
                            @if ($assignment)
                                @if (count($assignment->getMedia('resources')) > 0)
                                    <!--Uploaded Files-->
                                    <div class="p-5">
                                        <div
                                            class="flex flex-col justify-center w-full p-5 pb-10 bg-slate-50 hover:bg-slate-100 focus-within:bg-slate-100 rounded-lg group/d transition-all">
                                            <div class="flex flex-wrap gap-3 justify-evenly relative ">
                                                <!--Download All button-->
                                                <div wire:click="downloadResource()"
                                                    class="font-bold absolute right-1/2 translate-x-1/2 -bottom-14 peer scale-75 hover:scale-95 group-focus-within/d:scale-95 transition-all">
                                                    <button type="button"
                                                        class="group transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full space-x-2 focus-within:text-traivis-500 text-gray-500 bg-slate-100 hover:bg-white focus:bg-white border-slate-300 hover:border-gray-400 focus:border-traivis-500 focus:outline-none focus:ring-0">
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
                                                @if ($assignmentUser)
                                                    @foreach ($assignment->getMedia('resources') as $resource)
                                                        <!--File-->
                                                        <div wire:click="downloadResource('{{ $resource->id }}')"
                                                            class="px-3 w-36 mx-auto flex flex-col items-center gap-3 text-slate-500 hover:text-traivis-500 hover:scale-105 peer-hover:text-traivis-500 peer-hover:scale-105 transition-all cursor-pointer">
                                                            @if (Str::before($resource->mime_type, '/') == 'audio')
                                                                <svg class="w-8 h-8" fill="currentColor"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="m18,8.5v7c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5v-7c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5ZM11.5,0c-.828,0-1.5.672-1.5,1.5v21c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V1.5c0-.828-.672-1.5-1.5-1.5Zm10,4c-.828,0-1.5.672-1.5,1.5v13c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V5.5c0-.828-.672-1.5-1.5-1.5Zm-15,1c-.828,0-1.5.672-1.5,1.5v11c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V6.5c0-.828-.672-1.5-1.5-1.5ZM1.5,9c-.828,0-1.5.672-1.5,1.5v3c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5v-3c0-.828-.672-1.5-1.5-1.5Z">
                                                                    </path>
                                                                </svg>
                                                            @endif
                                                            @if (Str::before($resource->mime_type, '/') == 'application')
                                                                <svg class="w-8 h-8" fill="currentColor" x="0px"
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
                                                                <svg class="w-8 h-8" fill="currentColor"
                                                                    viewBox="0 0 24 24">
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
                                                                <svg class="w-8 h-8" fill="currentColor"
                                                                    viewBox="0 0 24 24">
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
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!--Uploaded Files-->
                                @endif
                            @endif
                            <!--  desc -->
                            <div class="my-5">
                                <p class="bg-white  font-bold">
                                    Description
                                </p>
                                <p class="bg-white">{{ $assignment?->text }}</p>
                            </div>
                            <!--END  desc-->
                            <!-- content-->
                            <div class="px-10 max-w-4xl mx-auto flex flex-col gap-y-32 pb-32 pt-16 ">
                                @if ($assignmentUser)
                                    @foreach ($assignmentUser->responses as $response)
                                        <!--Uploaded Msg-->
                                        <div
                                            class="group/l relative rounded-lg border border-gray-300 hover:border-traivis-400 bg-white transition-all">
                                            <!--User info-->
                                            <div
                                                class="p-3 z-[5] sticky lg:top-[55px] top-[100px] bg-white pb-3 border-b border-gray-300 flex flex-row justify-between items-center rounded-lg">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                                            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80">
                                                    </div>
                                                    <div class="ml-4 flex flex-col">
                                                        <a class="whitespace-nowrap font-medium text-gray-900"
                                                            href="#">{{ get_class($response->responseable) == App\Models\Business::class
                                                                ? $response->responseable->business_name
                                                                : $response->responseable->name }}</a>
                                                    </div>
                                                </div>
                                                <span class="">
                                                    {{ $response->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                            <!--/ User info-->
                                            <!--Msg Content-->
                                            <div class="p-5">
                                                @if (count($response->getMedia('resources')) > 0)
                                                    <!--Uploaded Files-->
                                                    <div class="p-5">
                                                        <div
                                                            class="flex flex-col justify-center w-full p-5 pb-10 bg-slate-50 hover:bg-slate-100 focus-within:bg-slate-100 rounded-lg group/d transition-all">
                                                            <div class="flex flex-wrap gap-3 justify-evenly relative ">
                                                                <!--Download All button-->
                                                                <div wire:click="downloadResource()"
                                                                    class="font-bold absolute right-1/2 translate-x-1/2 -bottom-14 peer scale-75 hover:scale-95 group-focus-within/d:scale-95 transition-all">
                                                                    <button type="button"
                                                                        class="group transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full space-x-2 focus-within:text-traivis-500 text-gray-500 bg-slate-100 hover:bg-white focus:bg-white border-slate-300 hover:border-gray-400 focus:border-traivis-500 focus:outline-none focus:ring-0">
                                                                        <svg fill="currentColor"
                                                                            class="h-5 w-5 transition-all" x="0px"
                                                                            y="0px" viewBox="0 0 24 24" width="512"
                                                                            height="512">
                                                                            <path
                                                                                d="M17.974,7.146c-.332-.066-.603-.273-.742-.569-1.552-3.271-5.143-5.1-8.735-4.438-3.272,.6-5.837,3.212-6.384,6.501-.162,.971-.15,1.943,.033,2.89,.06,.309-.073,.653-.346,.901-1.145,1.041-1.801,2.524-1.801,4.07,0,3.032,2.467,5.5,5.5,5.5h11c4.136,0,7.5-3.364,7.5-7.5,0-3.565-2.534-6.658-6.026-7.354Zm-2.853,7.562l-2.707,2.707c-.387,.387-.896,.582-1.405,.584l-.009,.002-.009-.002c-.509-.002-1.018-.197-1.405-.584l-2.707-2.707c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l1.707,1.707v-5c0-.553,.448-1,1-1s1,.447,1,1v5l1.707-1.707c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Z">
                                                                            </path>
                                                                        </svg>
                                                                        <span
                                                                            class="whitespace-nowrap font-bold">Download
                                                                            All</span>
                                                                    </button>
                                                                </div>
                                                                <!--/Download All button-->
                                                                @foreach ($response->getMedia('resources') as $resource)
                                                                    <!--File-->
                                                                    <div wire:click="downloadResource('{{ $resource->id }}')"
                                                                        class="px-3 w-36 mx-auto flex flex-col items-center gap-3 text-slate-500 hover:text-traivis-500 hover:scale-105 peer-hover:text-traivis-500 peer-hover:scale-105 transition-all cursor-pointer">
                                                                        @if (Str::before($resource->mime_type, '/') == 'audio')
                                                                            <svg class="w-8 h-8" fill="currentColor"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="m18,8.5v7c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5v-7c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5ZM11.5,0c-.828,0-1.5.672-1.5,1.5v21c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V1.5c0-.828-.672-1.5-1.5-1.5Zm10,4c-.828,0-1.5.672-1.5,1.5v13c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V5.5c0-.828-.672-1.5-1.5-1.5Zm-15,1c-.828,0-1.5.672-1.5,1.5v11c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V6.5c0-.828-.672-1.5-1.5-1.5ZM1.5,9c-.828,0-1.5.672-1.5,1.5v3c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5v-3c0-.828-.672-1.5-1.5-1.5Z">
                                                                                </path>
                                                                            </svg>
                                                                        @endif
                                                                        @if (Str::before($resource->mime_type, '/') == 'application')
                                                                            <svg class="w-8 h-8" fill="currentColor"
                                                                                x="0px" y="0px" viewBox="0 0 512 512"
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
                                                                            <svg class="w-8 h-8" fill="currentColor"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M11.122,12.536a3,3,0,0,0-4.244,0l-6.84,6.84A4.991,4.991,0,0,0,5,24H19a4.969,4.969,0,0,0,2.753-.833Z">
                                                                                </path>
                                                                                <circle cx="18" cy="6"
                                                                                    r="2"></circle>
                                                                                <path
                                                                                    d="M19,0H5A5.006,5.006,0,0,0,0,5V16.586l5.464-5.464a5,5,0,0,1,7.072,0L23.167,21.753A4.969,4.969,0,0,0,24,19V5A5.006,5.006,0,0,0,19,0ZM18,10a4,4,0,1,1,4-4A4,4,0,0,1,18,10Z">
                                                                                </path>
                                                                            </svg>
                                                                        @endif
                                                                        @if (Str::before($resource->mime_type, '/') == 'video')
                                                                            <svg class="w-8 h-8" fill="currentColor"
                                                                                viewBox="0 0 24 24">
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
                                                    </div>
                                                    <!--Uploaded Files-->
                                                @endif
                                                <!--Comment-->
                                                <p class="p-3 mt-8">
                                                    {{ $response->notes }}
                                                </p>
                                                <!--/Comment-->
                                            </div>
                                            <!--/Msg Content-->
                                        </div>
                                        <!--/ Uploaded Msg-->
                                    @endforeach
                                @endif
                            </div>
                            <!--END  content-->
                            <!--Instructor Action-->
                            <div x-show="Status=='Pending'"
                                class="group max-w-5xl w-full sticky hover:-bottom-5 focus-within:-bottom-5 -bottom-14 z-40 mx-auto py-4 hover:pb-12 focus-within:pb-12 rounded-lg border border-slate-300 bg-gradient-to-tr from-traivis-100 to-violet-50 hover:border-traivis-400 focus-within:border-traivis-400 ease-out duration-300 transition-all">
                                <div class="px-4 flex flex-row gap-x-3 items-end justify-between">
                                    <div class="w-full flex flex-col gap-y-4">
                                        <!-- label-->
                                        <div class="flex items-center  ">
                                            <p
                                                class="transition-all flex items-center absolute z-10 -top-5 left-auto right-auto mx-auto px-3 py-2 rounded-full border border-b-0 border-slate-300 group-hover:border-traivis-400 group-focus-within:border-traivis-400 text-sm font-bold shadow-sm bg-gradient-to-tr from-traivis-100 to-violet-50">
                                                Send your Feedback
                                            </p>
                                        </div>
                                        <!--/label-->
                                        <!--Actions-->
                                        <div class="flex flex-col w-full">
                                            <!-- Note-->
                                            <div class="">
                                                <div class="relative group/n ">
                                                    <textarea wire:model="response"
                                                        class="resize-none w-full h-20 overflow-y-auto rounded-lg border-gray-300 focus:border-traivis-400 transition-colors peer"
                                                        cols="100" id="area" maxlength="" required="" rows="2" type="text"></textarea>
                                                    <label
                                                        class="transform transition-all absolute top-5 h-2 py-2 rounded-full left-2 px-2 bg-white flex items-center group-focus-within/n:text-xs peer-valid:text-xs group-focus-within/n:top-2 peer-valid:top-2 group-focus-within/n:-translate-y-full peer-valid:-translate-y-full  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                        for="area">
                                                        Notes </label>
                                                    @error('response')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--END Note-->
                                            <!-- buttons-->
                                            <div class=" mt-5">
                                                <!--Instructor Buttons-->
                                                <form class="flex items-center justify-evenly"
                                                    :class="[(Status === 'Accepted' || Status==='Rejected' ? 'hidden' : '')]">
                                                    <div class="relative group/sc ">
                                                        <input x-model="Score" id="ScoreAs" required=""
                                                            type="number" max="10" min="0"
                                                            class="pr-0 h-10 w-[120px] rounded-lg mt-1 sm:truncate border-gray-300 focus:border-traivis-400 transition-colors peer">
                                                        <label for="ScoreAs"
                                                            class="transform transition-all absolute top-5 h-2 left-2 px-2 bg-white flex items-center group-focus-within/sc:text-xs peer-valid:text-xs group-focus-within/sc:top-2 peer-valid:top-2 group-focus-within/sc:-translate-y-full peer-valid:-translate-y-full peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium">
                                                            Score</label>
                                                        <p class="absolute right-5 top-3">/
                                                            {{ $assignment?->options['total_points'] }}</p>
                                                    </div>
                                                    @error('score')
                                                        {{ $message }}
                                                    @enderror
                                                    <div class="font-bold">
                                                        <button type="button"
                                                            class="text-gray-500 bg-white group transition inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm space-x-2 focus-within:text-traivis-500 border-gray-200 hover:shadow-lg hover:border-gray-400 focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1"
                                                            wire:click="submit()">
                                                            <svg fill="currentColor"
                                                                class="h-5 w-5 text-green-600 group-focus-within:animate-pulse transition-all"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                                                </path>
                                                            </svg>
                                                            <span class="whitespace-nowrap font-bold">Submit</span>
                                                        </button>
                                                    </div>
                                                </form>
                                                <!--/ Instructor Buttons-->
                                                <!--on act-->
                                                <div class="flex justify-center">
                                                    <p x-show="Status==='Rejected'" class="text-red-500 font-bold">
                                                        Rejected
                                                    </p>
                                                    <p x-show="Status==='Accepted'" class="text-green-600 font-bold">
                                                        Accepted
                                                    </p>
                                                </div>
                                                <!--on act-->
                                            </div>
                                            <!--/buttons-->
                                        </div>
                                        <!--/Actions-->
                                    </div>
                                </div>
                            </div>
                            <!--/ Instructor Action-->
                        </div>
                        <!--END Assignment Content -->
                    </div>
                </div>
                <!--END popup content -->
            </div>
        </div>
    </section>
</div>
