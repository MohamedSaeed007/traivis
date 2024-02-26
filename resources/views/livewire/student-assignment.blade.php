<div>
    @if ($isMaker)
        <div class="bg-green-50 py-1 text-center capitalize text-green-500">The Instructor’s view</div>
    @endif

    @if ($enrolled || $isMaker)
        @if ($content->content->section->id == $content->course->sections()->first()->id)
            <div class="relative px-6 text-gray-500">
                <!--name-->
                <p class="flex items-center gap-x-3 truncate bg-white text-2xl font-bold">
                    <svg fill="currentColor" class="h-6 w-6 shrink-0" viewBox="0 0 24 24">
                        <path
                            d="M20,10.5a10.01,10.01,0,0,0-2,.273A5.006,5.006,0,0,0,13,6h-.272A9.929,9.929,0,0,0,13,4,4,4,0,0,0,5,4a9.929,9.929,0,0,0,.272,2H5a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5H6.224a.772.772,0,0,0,.748-.975C6.623,21.766,6,21,6,20a3,3,0,0,1,6,0c0,1-.632,1.768-.973,3.029a.772.772,0,0,0,.748.971H13a5,5,0,0,0,5-5v-.772a10.02,10.02,0,0,0,2,.272,4,4,0,0,0,0-8Z">
                        </path>
                    </svg>
                    You will be eligable for coruse refund after this content
                </p>
                <!--/name-->
            </div>
        @else
            @if ($content->course->transactions()->where('payerable_id', $user->id)->first()->is_refundable)
                @livewire('confirm-continue-course', ['courseId' => $content->course->id])
            @endif
        @endif
        <!---------Assignment Content----------->
        <div class="relative px-6 text-gray-500" x-data="{
            Status: @entangle('status'),
            start: @entangle('assignmentStarted'),
            endTimeValue: @entangle('endTime'),
            Score: '',
            assignmentEnded: 0,
            remaining: null,
            endTime: null,
            init() {
                this.endTime = new Date(this.endTimeValue * 1000);
                this.setRemaining();
                if (this.start) {
                    this.startTimer();
                }
            },
            startTimer() {
                setInterval(() => {
                    if (!this.assignmentEnded) {
                        this.setRemaining();
                    } else {
                        this.Status = 'Closed';
                    }
                }, 1000);
            },
            setRemaining() {
                const diff = this.endTime - new Date().getTime();
                this.remaining = parseInt(diff / 1000);
                if (diff <= 0) {
                    this.remaining = 0;
                    this.assignmentEnded = 1;
                }
            },
            days() {
                return {
                    value: this.remaining / 86400,
                    remaining: this.remaining % 86400
                };
            },
            hours() {
                return {
                    value: this.days().remaining / 3600,
                    remaining: this.days().remaining % 3600
                };
            },
            minutes() {
                return {
                    value: this.hours().remaining / 60,
                    remaining: this.hours().remaining % 60
                };
            },
            seconds() {
                return {
                    value: this.minutes().remaining,
                };
            },
            format(value) {
                return ('0' + parseInt(value)).slice(-2)
            },
            time() {
                return {
                    days: this.format(this.days().value),
                    hours: this.format(this.hours().value),
                    minutes: this.format(this.minutes().value),
                    seconds: this.format(this.seconds().value),
                }
            }
        }">
            <!-- header -->
            <div
                class="sticky top-0 z-10 flex w-full flex-1 flex-wrap items-center justify-between gap-y-3 bg-white py-4">
                <!--name-->
                <p class="flex items-center gap-x-3 whitespace-nowrap bg-white text-2xl">
                    <svg x-show="Status==null" fill="currentColor" class="h-6 w-6 shrink-0"
                        viewBox="0 0 24 24">
                        <path
                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                        </path>
                    </svg>
                    <svg x-show="Status=='Pending'" x-transition:enter-end=" scale-125"
                        x-transition:enter-start=" scale-100" fill="currentColor"
                        class="h-6 w-6 shrink-0 text-yellow-500 transition duration-500 ease-out"
                        viewBox="0 0 24 24">
                        <path
                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                        </path>
                    </svg>
                    <svg x-show="Status=='Accepted'" x-transition:enter-end=" scale-125"
                        x-transition:enter-start=" scale-100" fill="currentColor"
                        class="h-6 w-6 shrink-0 text-green-600 transition duration-500 ease-out"
                        viewBox="0 0 24 24" style="display: none;">
                        <path
                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                        </path>
                    </svg>
                    <svg x-show="Status=='Rejected' || Status=='Closed'"
                        x-transition:enter-end=" scale-125" x-transition:enter-start=" scale-100"
                        fill="currentColor"
                        class="h-6 w-6 shrink-0 text-red-600 transition duration-500 ease-out"
                        viewBox="0 0 24 24" style="display: none;">
                        <path
                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                        </path>
                    </svg>
                    <span class="text-justify font-bold">{{ $content->title }}</span>
                </p>
                <!--/name-->
                <!--info-->
                <div class="w-fit">
                    <!--info-->
                    <div
                        class="flex w-full flex-row items-center justify-center gap-x-5 bg-white font-semibold xl:w-auto">
                        @if ($content->option('duration'))
                            <x-tooltip-arrow direction="up">
                                <div
                                    class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm4,13h-4c-.552,0-1-.447-1-1V6c0-.553,.448-1,1-1s1,.447,1,1v5h3c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                        </path>
                                    </svg>
                                    <p class="">{{ $content->option('duration') }}<span
                                            class="text-xs">
                                            {{ $content->option('weeks') }}</span>
                                    </p>
                                </div>
                                <x-slot name="text">
                                    Duration
                                </x-slot>
                            </x-tooltip-arrow>
                        @endif

                        <x-tooltip-arrow direction="up">
                            <div
                                class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m18,12c-3.314,0-6,2.686-6,6s2.686,6,6,6,6-2.686,6-6-2.686-6-6-6Zm3.192,6.202l-2.213,2.124c-.452.446-1.052.671-1.653.671s-1.203-.225-1.663-.674l-1.132-1.109c-.395-.387-.4-1.02-.014-1.414.386-.396,1.019-.401,1.414-.014l1.131,1.108c.144.142.379.139.522-.002l2.223-2.134c.397-.382,1.031-.371,1.414.029.382.398.369,1.031-.029,1.414Zm-11.192-.202c0-2.39,1.048-4.534,2.709-6h-7.709c-.553,0-1-.447-1-1s.447-1,1-1h8c.553,0,1,.447,1,1,0,.024-.001.048-.003.072,1.177-.682,2.544-1.072,4.003-1.072v-5c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h7.709c-1.661-1.466-2.709-3.61-2.709-6ZM5,5h8c.553,0,1,.447,1,1s-.447,1-1,1H5c-.553,0-1-.447-1-1s.447-1,1-1Zm2,12h-2c-.553,0-1-.447-1-1s.447-1,1-1h2c.553,0,1,.447,1,1s-.447,1-1,1Z">
                                    </path>
                                </svg>
                                <p class="">{{ $content->option('pass_points') }}<span
                                        class="text-xs">
                                        Ps</span>
                                </p>

                            </div>
                            <x-slot name="text">
                                Pass Points
                            </x-slot>
                        </x-tooltip-arrow>

                        <x-tooltip-arrow direction="up">
                            <div class="group relative flex w-fit items-center justify-center gap-x-2 whitespace-nowrap"
                                :class="[(Status == 'Accepted' ? ' text-green-600' : ''), (Status == 'Rejected' ?
                                    ' text-red-500' : '')]">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-5.276 3.826a1 1 0 0 0 -1.413-.035l-3.6 3.431a1 1 0 0 1 -1.456-.04l-1.589-1.414a1 1 0 0 0 -1.332 1.494l1.544 1.374a3 3 0 0 0 4.226.017l3.585-3.414a1 1 0 0 0 .035-1.413z">
                                    </path>
                                </svg>
                                <p x-show="Status=='Accepted' || Status=='Rejected'" class=""
                                    style="display: none;"><span x-text="Score"></span> /
                                </p>
                                <p class="">{{ $content->option('total_points') }}<span
                                        class="text-xs">
                                        Ps</span>
                                </p>

                            </div>
                            <x-slot name="text">
                                Total Points
                            </x-slot>
                        </x-tooltip-arrow>

                        <!--on Act labels-->
                        <div class="flex items-center justify-center">
                            <span
                                class="duration-50 flex items-center rounded-full bg-yellow-500 px-2 text-sm font-bold text-white transition ease-out"
                                x-show="Status=='Pending'" x-transition:enter-end="opacity-100 scale-100"
                                x-transition:enter-start="opacity-0 scale-0">
                                Pending
                            </span>
                            <span
                                class="duration-50 flex items-center rounded-full bg-green-600 px-2 text-sm font-bold text-white transition ease-out"
                                x-show="Status=='Accepted'"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:enter-start="opacity-0 scale-0" style="display: none;">
                                Accepted
                            </span>
                            <span x-text="Status"
                                class="duration-50 flex items-center rounded-full bg-red-500 px-2 text-sm font-bold text-white transition ease-out"
                                x-show="Status=='Rejected' || Status=='Closed'"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:enter-start="opacity-0 scale-0" style="display: none;">

                            </span>
                        </div>
                        <!--/on Act labels-->
                    </div>
                    <!--/info-->
                </div>
                <!--/info-->
                <!--Countdown-->
                <div class="w-full md:w-auto">
                    <x-tooltip-arrow direction="up">
                        <div
                            class="group relative cursor-pointer rounded-lg border border-slate-300 bg-slate-100 bg-opacity-50 px-3 transition-all hover:scale-105 hover:bg-white">
                            <!--Percentage-->
                            <div
                                class="group-hover: absolute inset-0 -z-10 w-[80%] rounded-lg bg-gradient-to-r from-traivis-200 via-violet-200 to-pink-200 transition-all">
                            </div>
                            <!--/Percentage-->

                            <!--Counts-->
                            <div class="z-0 flex w-full items-center justify-between gap-x-6">
                                <div class="flex items-center justify-center gap-x-1">
                                    <p class="text-lg font-bold" x-text="time().days">00</p>
                                    <p class="text-sm font-semibold">Days</p>
                                </div>
                                <div class="flex items-center justify-center gap-x-1">
                                    <p class="text-lg font-bold" x-text="time().hours">20</p>
                                    <p class="text-sm font-semibold">Hrs</p>
                                </div>
                                <div class="flex items-center justify-center gap-x-1">
                                    <p class="text-lg font-bold" x-text="time().minutes">19</p>
                                    <p class="text-sm font-semibold">Mins</p>
                                </div>
                                <div class="flex items-center justify-center gap-x-1">
                                    <p class="text-lg font-bold" x-text="time().seconds">33</p>
                                    <p class="text-sm font-semibold">Secs</p>
                                </div>
                            </div>
                            <!--/Counts-->
                        </div>
                        <x-slot name="text">
                            Remaining Time
                        </x-slot>
                    </x-tooltip-arrow>
                </div>
                <!--/Countdown-->
            </div>
            <!-- /header -->

            @auth
                <div x-show="!start" class="mt-10 flex justify-center">
                    <button wire:click="startAssignment"
                        class="group/r peer z-0 mx-auto inline-flex w-fit items-center justify-center gap-x-2 rounded-full border border-transparent bg-gradient-to-br from-traivis-500 to-violet-500 px-2 py-2 text-base font-medium leading-4 text-white shadow-sm transition hover:scale-110 hover:to-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                        type="button">
                        <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                            </path>
                        </svg>
                        <span class="whitespace-nowrap font-bold">Start Assignment</span>
                    </button>
                </div>
            @endauth

            <!--  desc -->
            <div class="my-5">
                <p class="bg-white font-bold">
                    Description
                </p>
                <p class="bg-white">
                    {{ $content->text }}
                </p>
            </div>

            @auth

                <div x-show="start">
                    @if ($content->hasMedia('resources'))
                        <!--Uploaded Files-->
                        <div class="p-5">
                            <div
                                class="group/d flex w-full flex-col justify-center rounded-lg bg-slate-50 p-5 pb-10 transition-all focus-within:bg-slate-100 hover:bg-slate-100">
                                <div class="relative flex flex-wrap justify-evenly gap-3">
                                    <!--Download All button-->
                                    <div wire:click="downloadResource()"
                                        class="peer absolute -bottom-14 right-1/2 translate-x-1/2 scale-75 font-bold transition-all hover:scale-95 group-focus-within/d:scale-95">
                                        <button type="button"
                                            class="group inline-flex items-center space-x-2 rounded-full border border-slate-300 border-transparent bg-slate-100 px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 transition focus-within:text-traivis-500 hover:border-gray-400 hover:bg-white focus:border-traivis-500 focus:bg-white focus:outline-none focus:ring-0">
                                            <svg fill="currentColor" class="h-5 w-5 transition-all"
                                                x="0px" y="0px" viewBox="0 0 24 24"
                                                width="512" height="512">
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
                                                <svg class="h-8 w-8" fill="currentColor"
                                                    viewBox="0 0 24 24">
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
                                                <svg class="h-8 w-8" fill="currentColor"
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
                                                <svg class="h-8 w-8" fill="currentColor"
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
                    <!--END  desc-->
                    @if ($assignmentUser)
                        <!--Assignment label-->
                        <p class="mb-8 mt-20 py-4 text-center text-lg font-bold text-slate-500">Please
                            upload
                            the required files</p>
                        <!--/Assignment label-->
                        <!-- content-->
                        <div class="mx-auto flex max-w-4xl flex-col gap-y-32 px-10 pb-32 pt-16">
                            @foreach ($assignmentUser->responses as $response)
                                <!--Uploaded Msg-->
                                <div
                                    class="group/l relative rounded-lg border border-gray-300 bg-white transition-all hover:border-traivis-400">
                                    <!--User info-->
                                    <div
                                        class="sticky top-[100px] z-[5] flex flex-row items-center justify-between rounded-lg border-b border-gray-300 bg-white p-3 pb-3 lg:top-[55px]">
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
                                        <!--Uploaded Files-->
                                        <div class="p-5">
                                            <div
                                                class="group/d flex w-full flex-col justify-center rounded-lg bg-slate-50 p-5 pb-10 transition-all focus-within:bg-slate-100 hover:bg-slate-100">
                                                <div class="relative flex flex-wrap justify-evenly gap-3">
                                                    <!--Download All button-->
                                                    <div wire:click="downloadResource()"
                                                        class="peer absolute -bottom-14 right-1/2 translate-x-1/2 scale-75 font-bold transition-all hover:scale-95 group-focus-within/d:scale-95">
                                                        <button type="button"
                                                            class="group inline-flex items-center space-x-2 rounded-full border border-slate-300 border-transparent bg-slate-100 px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 transition focus-within:text-traivis-500 hover:border-gray-400 hover:bg-white focus:border-traivis-500 focus:bg-white focus:outline-none focus:ring-0">
                                                            <svg fill="currentColor"
                                                                class="h-5 w-5 transition-all"
                                                                x="0px" y="0px"
                                                                viewBox="0 0 24 24" width="512"
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
                                                            class="mx-auto flex w-36 cursor-pointer flex-col items-center gap-3 px-3 text-slate-500 transition-all hover:scale-105 hover:text-traivis-500 peer-hover:scale-105 peer-hover:text-traivis-500">
                                                            @if (Str::before($resource->mime_type, '/') == 'audio')
                                                                <svg class="h-8 w-8" fill="currentColor"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="m18,8.5v7c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5v-7c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5ZM11.5,0c-.828,0-1.5.672-1.5,1.5v21c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V1.5c0-.828-.672-1.5-1.5-1.5Zm10,4c-.828,0-1.5.672-1.5,1.5v13c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V5.5c0-.828-.672-1.5-1.5-1.5Zm-15,1c-.828,0-1.5.672-1.5,1.5v11c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V6.5c0-.828-.672-1.5-1.5-1.5ZM1.5,9c-.828,0-1.5.672-1.5,1.5v3c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5v-3c0-.828-.672-1.5-1.5-1.5Z">
                                                                    </path>
                                                                </svg>
                                                            @endif
                                                            @if (Str::before($resource->mime_type, '/') == 'application')
                                                                <svg class="h-8 w-8" fill="currentColor"
                                                                    x="0px" y="0px"
                                                                    viewBox="0 0 512 512"
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
                                                                <svg class="h-8 w-8" fill="currentColor"
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
                                                                <svg class="h-8 w-8" fill="currentColor"
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

                                        <!--Comment-->
                                        <p class="mt-8 p-3">
                                            {{ $response->notes }}
                                        </p>
                                        <!--/Comment-->

                                    </div>
                                    <!--/Msg Content-->

                                </div>
                                <!--/ Uploaded Msg-->
                            @endforeach
                        </div>
                        <!--END  content-->
                    @endif
                    <!--Student Action-->
                    <div x-show="(Status=='Rejected' || Status==null) && assignmentEnded==0"
                        class="group sticky bottom-3 z-40 mx-auto w-full max-w-5xl rounded-lg border border-slate-300 bg-gradient-to-tr from-traivis-100 to-violet-50 py-4 transition-all duration-300 ease-out focus-within:bottom-16 focus-within:border-traivis-400 focus-within:pb-12 hover:bottom-16 hover:border-traivis-400 hover:pb-12">
                        <div class="flex flex-row items-end justify-between gap-x-3 px-4">
                            <div class="flex w-full flex-col gap-y-4">
                                <!--Actions label-->
                                <div class="flex items-center">
                                    <p
                                        class="absolute -top-5 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-slate-300 bg-gradient-to-tr from-traivis-100 to-violet-50 px-3 py-2 text-sm font-bold shadow-sm transition-all group-focus-within:border-traivis-400 group-hover:border-traivis-400">
                                        Send your response
                                    </p>
                                </div>
                                <!--Actions label-->
                                <!--Actions-->
                                <div class="flex w-full flex-col gap-x-3">
                                    <!-- Msg-->
                                    <div class="flex w-full flex-row items-start justify-between gap-x-3">
                                        <!-- Note-->
                                        <div class="flex w-2/3 flex-col">
                                            <div class="group/n relative">
                                                <textarea wire:model="response.notes"
                                                    class="peer h-20 w-full resize-none overflow-y-auto rounded-lg border-gray-300 transition-colors focus:border-traivis-400"
                                                    cols="100" id="area" maxlength="" required="" rows="2" type="text"
                                                    spellcheck="false"></textarea>
                                                <label
                                                    class="absolute left-2 top-5 flex h-2 transform items-center rounded-full bg-white px-2 py-2 transition-all group-focus-within/n:top-2 group-focus-within/n:-translate-y-full group-focus-within/n:text-xs peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"
                                                    for="area">
                                                    Notes </label>
                                            </div>
                                        </div>
                                        <!--END Note-->
                                        <!--upload -->
                                        <div class="flex w-1/3 flex-col">
                                            <div x-data="{ files: null }" id="FileUpload"
                                                class="relative flex h-20 w-full cursor-pointer appearance-none justify-between overflow-y-auto rounded-md border-2 border-dashed border-gray-300 bg-white px-3 py-3 hover:border-gray-400 focus:outline-none">
                                                <!--Upload Input-->
                                                <input type="file" multiple=""
                                                    wire:model="response.resources"
                                                    class="absolute inset-0 z-50 m-0 h-full w-full p-0 opacity-0 outline-none"
                                                    x-on:change="files = $event.target.files; console.log($event.target.files);"
                                                    x-on:dragover="$el.classList.add('active')"
                                                    x-on:dragleave="$el.classList.remove('active')"
                                                    x-on:drop="$el.classList.remove('active')">
                                                <!--/Upload Input-->
                                                <!--Uploaded-->
                                                {{-- <template x-if="files !== null" class="">
                                            <div class="flex flex-col space-y-1">
                                                <template x-for="(_,index) in Array.from({ length: files.length })">
                                                    <div class="flex flex-row items-center space-x-2">
                                                        <template x-if="files[index].type.includes('audio/')">
                                                            <svg class="w-5 h-5 text-slate-500" fill="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="m18,8.5v7c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5v-7c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5ZM11.5,0c-.828,0-1.5.672-1.5,1.5v21c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V1.5c0-.828-.672-1.5-1.5-1.5Zm10,4c-.828,0-1.5.672-1.5,1.5v13c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V5.5c0-.828-.672-1.5-1.5-1.5Zm-15,1c-.828,0-1.5.672-1.5,1.5v11c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V6.5c0-.828-.672-1.5-1.5-1.5ZM1.5,9c-.828,0-1.5.672-1.5,1.5v3c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5v-3c0-.828-.672-1.5-1.5-1.5Z">
                                                                </path>
                                                            </svg>
                                                        </template>
                                                        <template x-if="files[index].type.includes('application/')">
                                                            <svg class="w-5 h-5 text-slate-500" fill="currentColor"
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
                                                        </template>

                                                        <template x-if="files[index].type.includes('image/')">
                                                            <svg class="w-5 h-5 text-slate-500" fill="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M11.122,12.536a3,3,0,0,0-4.244,0l-6.84,6.84A4.991,4.991,0,0,0,5,24H19a4.969,4.969,0,0,0,2.753-.833Z">
                                                                </path>
                                                                <circle cx="18" cy="6" r="2"></circle>
                                                                <path
                                                                    d="M19,0H5A5.006,5.006,0,0,0,0,5V16.586l5.464-5.464a5,5,0,0,1,7.072,0L23.167,21.753A4.969,4.969,0,0,0,24,19V5A5.006,5.006,0,0,0,19,0ZM18,10a4,4,0,1,1,4-4A4,4,0,0,1,18,10Z">
                                                                </path>
                                                            </svg>
                                                        </template>

                                                        <template x-if="files[index].type.includes('video/')">
                                                            <svg class="w-5 h-5 text-slate-500" fill="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="m19.051 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm1 11h2v2h-2zm0-2v-2h2v2zm-16 4h-2v-2h2zm1.949 0v-2h12v2zm-1.949-4h-2v-2h2zm-2 6h2v2h-2zm18 0h2v2h-2zm2-10h-2v-2.816a3 3 0 0 1 2 2.816zm-18-2.816v2.816h-2a3 3 0 0 1 2-2.816zm-2 16.816h2v2.816a3 3 0 0 1 -2-2.816zm18 2.816v-2.816h2a3 3 0 0 1 -2 2.816z">
                                                                </path>
                                                            </svg>
                                                        </template>

                                                        <span class="font-medium text-gray-900"
                                                            x-text="files[index].name">Uploading</span>
                                                        <span class="text-xs self-end text-gray-500"
                                                            x-text="filesize(files[index].size)">...</span>
                                                    </div>

                                                </template>
                                            </div>
                                        </template>
                                        <div class="flex flex-col space-y-1">
                                            <template x-for="(_,index) in Array.from({ length: files.length })">
                                                <div class="flex flex-row items-center space-x-2">
                                                    <template x-if="files[index].type.includes('audio/')">
                                                        <svg class="w-5 h-5 text-slate-500" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m18,8.5v7c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5v-7c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5ZM11.5,0c-.828,0-1.5.672-1.5,1.5v21c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V1.5c0-.828-.672-1.5-1.5-1.5Zm10,4c-.828,0-1.5.672-1.5,1.5v13c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V5.5c0-.828-.672-1.5-1.5-1.5Zm-15,1c-.828,0-1.5.672-1.5,1.5v11c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5V6.5c0-.828-.672-1.5-1.5-1.5ZM1.5,9c-.828,0-1.5.672-1.5,1.5v3c0,.828.672,1.5,1.5,1.5s1.5-.672,1.5-1.5v-3c0-.828-.672-1.5-1.5-1.5Z">
                                                            </path>
                                                        </svg>
                                                    </template>
                                                    <template x-if="files[index].type.includes('application/')">
                                                        <svg class="w-5 h-5 text-slate-500" fill="currentColor" x="0px"
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
                                                    </template>
                                                    <template x-if="files[index].type.includes('image/')">
                                                        <svg class="w-5 h-5 text-slate-500" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M11.122,12.536a3,3,0,0,0-4.244,0l-6.84,6.84A4.991,4.991,0,0,0,5,24H19a4.969,4.969,0,0,0,2.753-.833Z">
                                                            </path>
                                                            <circle cx="18" cy="6" r="2"></circle>
                                                            <path
                                                                d="M19,0H5A5.006,5.006,0,0,0,0,5V16.586l5.464-5.464a5,5,0,0,1,7.072,0L23.167,21.753A4.969,4.969,0,0,0,24,19V5A5.006,5.006,0,0,0,19,0ZM18,10a4,4,0,1,1,4-4A4,4,0,0,1,18,10Z">
                                                            </path>
                                                        </svg>
                                                    </template>
                                                    <template x-if="files[index].type.includes('video/')">
                                                        <svg class="w-5 h-5 text-slate-500" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="m19.051 0h-14a5.006 5.006 0 0 0 -5 5v14a5.006 5.006 0 0 0 5 5h14a5.006 5.006 0 0 0 5-5v-14a5.006 5.006 0 0 0 -5-5zm1 11h2v2h-2zm0-2v-2h2v2zm-16 4h-2v-2h2zm1.949 0v-2h12v2zm-1.949-4h-2v-2h2zm-2 6h2v2h-2zm18 0h2v2h-2zm2-10h-2v-2.816a3 3 0 0 1 2 2.816zm-18-2.816v2.816h-2a3 3 0 0 1 2-2.816zm-2 16.816h2v2.816a3 3 0 0 1 -2-2.816zm18 2.816v-2.816h2a3 3 0 0 1 -2 2.816z">
                                                            </path>
                                                        </svg>
                                                    </template>
                                                    <span class="font-medium text-gray-900"
                                                        x-text="files[index].name">Uploading</span>
                                                    <span class="text-xs self-end text-gray-500"
                                                        x-text="filesize(files[index].size)">...</span>
                                                </div>
                                            </template>
                                        </div> --}}
                                                <!--/Uploaded-->
                                                <!--upload form-->
                                                <template x-if="files === null">
                                                    <div
                                                        class="mx-auto flex flex-col items-center justify-center space-y-2 text-center">
                                                        <svg class="h-6 w-6 text-gray-600" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                            </path>
                                                        </svg>
                                                        <p class="text-gray-700">Click or Drag here</p>
                                                    </div>
                                                </template>
                                                <!--upload form-->
                                            </div>
                                        </div>
                                        <!--/upload -->
                                    </div>
                                    <!--End Msg-->
                                    <!--Send-->
                                    <div class="mx-auto mt-5 w-fit">
                                        <button wire:click="sendResponse"
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
                                <!--/Actions-->
                            </div>
                        </div>
                    </div>
                    <!--/ Student Action-->
                </div>
            @endauth
        </div>
        <!--END Assignment Content-->
    @else
        @auth
            <!-- Enroll section -->
            <div class="container relative mx-auto px-10 pb-32 text-gray-500">
                <div
                    class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                    <p class="font-bold">Please enroll first to access this part of the course
                    </p>
                    <!--Book-->
                    <div class="">
                        <button type="button"
                            wire:click.prevent="$emit('addToCartEmit',{{ $content->course->id }})"
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
        @endauth
        @guest
            <div class="container relative mx-auto px-10 text-gray-500">
                <div
                    class="mt-5 flex h-52 flex-col items-center justify-evenly gap-y-3 rounded-lg border border-traivis-200 bg-traivis-100 p-5">
                    <a class="font-bold"
                        href="{{ route('login', ['_redirect_back_to' => request()->fullUrl()]) }}">Login</a>
                </div>
            </div>
        @endguest
    @endif
</div>
