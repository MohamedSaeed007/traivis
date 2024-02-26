<div>
    <!--------- Tasks area ----------->
    <div class="container relative mx-auto text-gray-500">
        <!--Tasks header-->
        <div
            class="sticky top-0 z-20 flex flex-row items-center justify-between bg-white px-10 py-5 shadow-md">
            <div class="flex flex-row items-center gap-x-3">
                <svg fill="currentColor" class="h-5 w-5" height="512" viewBox="0 0 24 24" width="512">
                    <path d="m10 23a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1z" />
                    <path d="m1 20h6a1 1 0 0 0 0-2h-6a1 1 0 0 0 0 2z" />
                    <path d="m1 16h4a1 1 0 0 0 0-2h-4a1 1 0 0 0 0 2z" />
                    <path
                        d="m12 0a12 12 0 0 0 -12 12c0 .061.008.12.009.181a2.966 2.966 0 0 1 .991-.181h4a2.99 2.99 0 0 1 2.78 4.116 2.975 2.975 0 0 1 2 4 2.949 2.949 0 0 1 2.039 3.875c.061 0 .12.009.181.009a12 12 0 0 0 0-24zm3.707 15.707a1 1 0 0 1 -1.414 0l-3-3a1 1 0 0 1 -.293-.707v-5a1 1 0 0 1 2 0v4.586l2.707 2.707a1 1 0 0 1 0 1.414z" />
                </svg>
                <div class="text-lg font-bold">{{ $task->task_name }}</div>
            </div>

            <!-- Task Status-->
            <div class="flex items-center justify-center gap-x-3">
                @switch($task->task_status)
                    @case('progress')
                        <p
                            class="flex items-center rounded-full bg-traivis-500 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="currentColor" class="mr-3 h-5 w-5" height="30" viewBox="0 0 24 24"
                                width="30" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                <path
                                    d="m21 24h-18v-3a12.2 12.2 0 0 1 4.442-9 12.2 12.2 0 0 1 -4.442-9 3 3 0 0 1 3-3h12a3 3 0 0 1 3 3 12.221 12.221 0 0 1 -4.425 9 12.221 12.221 0 0 1 4.425 9zm-16-2h14v-1c0-3.774-2.5-6.552-4.592-8.217l-.984-.783.984-.783c2.092-1.665 4.592-4.443 4.592-8.217a1 1 0 0 0 -1-1h-12a1 1 0 0 0 -1 1c0 3.774 2.508 6.551 4.612 8.216l.988.784-.991.784c-2.101 1.665-4.609 4.442-4.609 8.216zm7.018-6.018a10.065 10.065 0 0 1 1.943 2.018h-3.893m1.946-4.487c-1.637 1.073-4.429 3.33-4.934 6.487h9.842c-.5-3.184-3.288-5.43-4.908-6.487z">
                                </path>
                            </svg>
                            In progress
                        </p>
                    @break

                    @case('completed')
                        <p
                            class="flex items-center rounded-full bg-green-600 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="currentColor" class="mr-3 h-5 w-5" viewBox="0 0 24 24" width="512"
                                height="512">
                                <path
                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                            </svg>
                            Completed
                        </p>
                    @break

                    @case ('extended')
                        <p
                            class="flex items-center rounded-full bg-green-600 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="currentColor" class="mr-3 h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                </path>
                                <path
                                    d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                </path>
                            </svg>

                            Extended
                        </p>
                    @break

                    @case ('delayed')
                        <p
                            class="flex items-center rounded-full bg-green-600 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="currentColor" class="mr-3 h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                </path>
                                <path
                                    d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                </path>
                            </svg>

                            Delayed
                        </p>
                    @break

                    @case ('extension_request')
                        <p
                            class="flex items-center rounded-full bg-yellow-500 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="currentColor" class="mr-3 h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                </path>
                                <path
                                    d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                </path>
                            </svg>

                            Extension Request
                        </p>
                    @break

                    @case ('extension_rejected')
                        <p
                            class="flex items-center rounded-full bg-red-500 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="red" class="mr-3 h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z">
                                </path>
                                <path
                                    d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z">
                                </path>
                            </svg>

                            Extension Rejected
                        </p>
                    @break

                    @case ('complete_request')
                        <p
                            class="flex items-center rounded-full bg-yellow-500 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="gray" class="mr-3 h-5 w-5" viewBox="0 0 24 24" width="512"
                                height="512">
                                <path
                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                </path>
                            </svg>

                            Completion Request
                        </p>
                    @break

                    @case ('complete_rejected')
                        <p
                            class="flex items-center rounded-full bg-red-500 px-3 py-2 text-sm font-bold text-white">
                            <svg fill="red" class="mr-3 h-5 w-5" viewBox="0 0 24 24" width="512"
                                height="512">
                                <path
                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z">
                                </path>
                            </svg>

                            Completion Rejected
                        </p>
                    @break
                @endswitch
            </div>
            <!--/ Task Status-->
        </div>
        <!--/ Tasks header-->

        <!--Task content-->
        <div class="mx-auto flex max-w-3xl flex-col gap-y-32 px-10 pb-32 pt-16">

            <!--Description-->
            <div
                class="group relative rounded-lg border border-gray-300 bg-white transition-all hover:border-traivis-400">

                <!-- label-->
                <div class="flex items-center justify-center">
                    <p
                        class="absolute -top-6 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                        <svg fill="currentColor" class="mr-3 h-7 w-7" viewBox="0 0 24 24" width="512"
                            height="512">
                            <path
                                d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z">
                            </path>
                            <path
                                d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z">
                            </path>
                        </svg>
                        Description
                    </p>
                </div>
                <!--/ label-->

                <p class="p-3">
                    {{ $task->task_desc }}
                </p>

            </div>
            <!--/ Description -->
            <div class="flex flex-col gap-y-16">
                @foreach ($extensions as $extend)
                    <!--Extension process-->
                    <div
                        class="group relative rounded-lg border border-gray-300 bg-white transition-all hover:border-traivis-400">

                        <!-- label-->
                        <div class="flex items-center justify-center">
                            @switch($extend->status)
                                @case('progress')
                                    <p
                                        class="absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                                        <svg fill="currentColor" class="mr-3 h-10 w-10 animate-pulse"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z" />
                                            <path
                                                d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z" />
                                        </svg>
                                        Extension Request
                                    </p>
                                @break

                                <!--On Act Label-->
                                @case ('extended')
                                    <p class="duration-50 absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold text-green-600 transition ease-out group-hover:border-traivis-400"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:enter-start="opacity-0 scale-0">
                                        <svg x-transition:enter-end=" -rotate-180"
                                            x-transition:enter-start=" rotate-0" fill="currentColor"
                                            class="mr-3 h-10 w-10 transition duration-500 ease-out"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z" />
                                            <path
                                                d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z" />
                                        </svg>
                                        Task Extended
                                    </p>
                                @break

                                @case ('rejected')
                                    <p class="duration-50 absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold text-red-500 transition ease-out group-hover:border-traivis-400"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:enter-start="opacity-0 scale-0">
                                        <svg x-transition:enter-end=" rotate-180"
                                            x-transition:enter-start=" rotate-0" fill="currentColor"
                                            class="mr-3 h-10 w-10 transition duration-500 ease-out"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z" />
                                            <path
                                                d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z" />
                                        </svg>
                                        Extension Rejected
                                    </p>
                                    <!--/ On Act Label-->
                                @break
                            @endswitch

                        </div>
                        <!--/ label-->

                        <!--User info-->
                        <div
                            class="sticky top-[75px] flex flex-row items-center justify-between border-b border-gray-300 bg-white p-3 pb-3">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                        src="{{ $extend->business->avatar }}">
                                </div>

                                <div class="ml-4 flex flex-col">
                                    <a class="whitespace-nowrap font-medium text-gray-900"
                                        href="#">{{ $extend->business->name }}</a>
                                </div>
                            </div>

                            <span class="" title="{{ $extend->extension_request_date ?? '' }}">
                                {{ $extend->extension_request_date->shortAbsoluteDiffForHumans() }}
                            </span>
                        </div>
                        <!--/ User info-->

                        <!--process note-->
                        <p class="p-3">
                            {{ $extend->note ?? '' }}
                        </p>
                        <!--/ process note-->
                        <!--process number_of_days-->
                        @if ($extend->number_of_days)
                            <p class="p-3">
                                The number of days of extension
                                {{ $extend->number_of_days ?? '' }} days
                            </p>
                        @endif
                        <!--/ process number_of_days-->

                        <!--Institution Act-->
                        @if ($extend->status == 'progress')
                            <div class="flex justify-evenly py-6">
                                <div class="font-bold">

                                    <button wire:click="rejectExtension('{{ $extend->id }}')"
                                        type="button"
                                        class="group inline-flex items-center space-x-2 rounded-full border border-gray-200 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-gray-400 hover:shadow-lg focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1">
                                        <svg fill="currentColor"
                                            class="h-5 w-5 text-red-500 transition-all group-focus-within:animate-pulse"
                                            x="0px" y="0px" viewBox="0 0 512 512"
                                            xml:space="preserve" width="512" height="512">
                                            <g>
                                                <path
                                                    d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z" />
                                            </g>
                                        </svg>
                                        <span class="whitespace-nowrap font-bold">Reject</span>
                                    </button>
                                </div>

                                <div class="font-bold">
                                    <button wire:click="acceptExtension('{{ $extend->id }}')"
                                        type="button"
                                        class="group inline-flex items-center space-x-2 rounded-full border border-gray-200 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-gray-400 hover:shadow-lg focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1">
                                        <svg fill="currentColor"
                                            class="h-5 w-5 text-green-600 transition-all group-focus-within:animate-pulse"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z" />
                                            <path
                                                d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z" />
                                        </svg>
                                        <span class="whitespace-nowrap font-bold">Accept</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <!--/ Institution Act-->

                        <!--on act-->
                        <div class="flex justify-center">
                            @if ($extend->status == 'rejected')
                                <p class="py-6 font-bold text-red-500">
                                    Rejected
                                </p>
                            @endif

                            @if ($extend->status == 'extended')
                                <p class="py-6 font-bold text-green-600">
                                    Extended
                                </p>
                            @endif
                        </div>
                        <!--on act-->

                    </div>
                    <!--/ Extension process-->
                @endforeach
            </div>
            <div class="flex flex-col gap-y-16">
                @foreach ($completions as $complete)
                    <!--Completed process-->
                    <div
                        class="group relative rounded-lg border border-gray-300 bg-white transition-all hover:border-traivis-400">

                        <!-- label-->
                        <div class="flex items-center justify-center">

                            @if ($complete->status == 'completed')
                                <p
                                    class="absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold group-hover:border-traivis-400">
                                    <svg fill="currentColor" class="mr-3 h-10 w-10 animate-pulse"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                                    </svg>
                                    Completed
                                </p>
                            @endif

                            <!--On Act Label-->
                            @if ($complete->status == 'completed')
                                <p class="duration-50 absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold text-green-600 transition ease-out group-hover:border-traivis-400"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:enter-start="opacity-0 scale-0">
                                    <svg x-transition:enter-end=" -scale-180"
                                        x-transition:enter-start=" scale-0" fill="currentColor"
                                        class="mr-3 h-10 w-10 transition duration-500 ease-in-out"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                                    </svg>
                                    Task Completed
                                </p>
                            @endif
                            @if ($complete->status == 'rejected')
                                <p class="duration-50 absolute -top-8 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-white px-3 py-2 text-lg font-bold text-red-500 transition ease-out group-hover:border-traivis-400"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:enter-start="opacity-0 scale-0">
                                    <svg x-transition:enter-end=" scale-180"
                                        x-transition:enter-start=" scale-0" fill="currentColor"
                                        class="mr-3 h-10 w-10 transition duration-500 ease-in-out"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                                    </svg>
                                    Task Rejected
                                </p>
                            @endif
                            <!--/ On Act Label-->

                        </div>
                        <!--/ label-->

                        <!--User info-->
                        <div
                            class="sticky top-[75px] flex flex-row items-center justify-between border-b border-gray-300 bg-white p-3 pb-3">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                        src="{{ $complete->business->avatar }}">
                                </div>

                                <div class="ml-4 flex flex-col">
                                    <a class="whitespace-nowrap font-medium text-gray-900"
                                        href="#">{{ $complete->business->name }}</a>
                                </div>
                            </div>

                            <span title="{{ $complete->complete_request_date }}">
                                {{ $complete->complete_request_date->shortAbsoluteDiffForHumans() }}
                            </span>
                        </div>
                        <!--/ User info-->

                        <!--process note-->
                        <p class="p-3">
                            {{ $complete->note }}
                        </p>
                        <!--/ process note-->

                        <!--Institution Act-->
                        @if ($complete->status == 'progress')
                            <div class="flex justify-evenly py-6">
                                <div class="font-bold">
                                    <button wire:click="rejectCompleted('{{ $complete->id }}')"
                                        type="button"
                                        class="group inline-flex items-center space-x-2 rounded-full border border-gray-200 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-gray-400 hover:shadow-lg focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1">
                                        <svg fill="currentColor"
                                            class="h-5 w-5 text-red-500 transition-all group-focus-within:animate-pulse"
                                            x="0px" y="0px" viewBox="0 0 512 512"
                                            xml:space="preserve" width="512" height="512">
                                            <g>
                                                <path
                                                    d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256C511.847,114.678,397.322,0.153,256,0z    M341.333,311.189c8.669,7.979,9.229,21.475,1.25,30.144c-7.979,8.669-21.475,9.229-30.144,1.25c-0.434-0.399-0.85-0.816-1.25-1.25   L256,286.165l-55.168,55.168c-8.475,8.185-21.98,7.95-30.165-0.525c-7.984-8.267-7.984-21.373,0-29.64L225.835,256l-55.168-55.168   c-8.185-8.475-7.95-21.98,0.525-30.165c8.267-7.984,21.373-7.984,29.64,0L256,225.835l55.189-55.168   c7.979-8.669,21.475-9.229,30.144-1.25c8.669,7.979,9.229,21.475,1.25,30.144c-0.399,0.434-0.816,0.85-1.25,1.25L286.165,256   L341.333,311.189z" />
                                            </g>
                                        </svg>
                                        <span class="whitespace-nowrap font-bold">Reject</span>
                                    </button>
                                </div>

                                <div class="font-bold">
                                    <button wire:click="acceptCompleted('{{ $complete->id }}')"
                                        type="button"
                                        class="group inline-flex items-center space-x-2 rounded-full border border-gray-200 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-gray-400 hover:shadow-lg focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-offset-1">
                                        <svg fill="currentColor"
                                            class="h-5 w-5 text-green-600 transition-all group-focus-within:animate-pulse"
                                            viewBox="0 0 24 24" width="512" height="512">
                                            <path
                                                d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                                        </svg>
                                        <span class="whitespace-nowrap font-bold">Confirm</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <!--/ Institution Act-->

                        <!--on act-->
                        <div class="flex justify-center">
                            @if ($complete->status == 'rejected')
                                <p class="py-6 font-bold text-red-500">
                                    Task Rejected
                                </p>
                            @endif
                            @if ($complete->status == 'completed')
                                <p class="py-6 font-bold text-green-600">
                                    Task Completed
                                </p>
                            @endif
                        </div>
                        <!--on act-->

                    </div>
                    <!--/ Completed process-->
                @endforeach
            </div>
            <div class="flex flex-col gap-y-16">
                @foreach ($comments as $comment)
                    <!--Note process-->
                    <div id="comment-{{ $comment->id }}" x-ref="comment-{{ $comment->id }}"
                        class="group relative rounded-lg border border-gray-300 bg-white transition-all hover:border-traivis-400">

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
                                Comment
                            </p>
                        </div>
                        <!--/ label-->

                        <!--User info-->
                        <div
                            class="sticky top-[75px] flex flex-row items-center justify-between border-b border-gray-300 bg-white p-3 pb-3">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img alt="" class="h-10 w-10 rounded-full bg-cover"
                                        src="{{ $comment->business->avatar }}">
                                </div>

                                <div class="ml-4 flex flex-col">
                                    <a class="whitespace-nowrap font-medium text-gray-900"
                                        href="#">{{ $comment->business->name }}</a>
                                </div>
                            </div>

                            <span class="" title="{{ $comment->comment_date }}">
                                {{ $comment->comment_date->shortAbsoluteDiffForHumans() }}
                            </span>
                        </div>
                        <!--/ User info-->

                        <p class="p-3">
                            {{ $comment->comment }}
                        </p>

                    </div>
                    <!--/ Note process-->
                @endforeach
            </div>
        </div>
        <!--END Task content-->

        @if ($task->task_status != 'completed')
            <!--Task Action-->
            <div
                class="group sticky bottom-16 z-20 mx-auto w-full max-w-3xl rounded-lg border border-gray-300 bg-traivis-50 bg-white py-8 pb-12 transition-all hover:border-traivis-400">
                <div class="flex flex-row items-end justify-between gap-x-3 px-10">

                    <div class="flex w-full flex-col gap-y-4">

                        <!--Actions label-->
                        <div class="flex items-center">
                            <p
                                class="absolute -top-5 left-auto right-auto z-10 mx-auto flex items-center rounded-full border border-b-0 border-gray-300 bg-traivis-50 bg-white px-3 py-2 text-lg font-bold transition-all group-hover:border-traivis-400">
                                Setting
                            </p>
                        </div>
                        <!--Actions label-->

                        <!--Actions-->
                        <div class="flex w-full flex-col gap-x-3">

                            <!-- Actions List-->
                            <div class="flex w-full flex-row items-center justify-evenly gap-x-3">

                                <!--Note-->
                                <div class="w-fit">
                                    <div class="font-bold">

                                        <button type="button"
                                            class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                            wire:click='$emit("openModal", "add-note-course-task", {{ json_encode(['task_id' => $task->id]) }})'>
                                            <svg class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M1.172,19.119A4,4,0,0,0,0,21.947V24H2.053a4,4,0,0,0,2.828-1.172L18.224,9.485,14.515,5.776Z" />
                                                <path
                                                    d="M23.145.855a2.622,2.622,0,0,0-3.71,0L15.929,4.362l3.709,3.709,3.507-3.506A2.622,2.622,0,0,0,23.145.855Z" />
                                            </svg>
                                            <span class="whitespace-nowrap font-bold">Add Comment</span>
                                        </button>

                                    </div>
                                </div>
                                <!--END Note-->

                                <!--EXT-->
                                <div class="w-fit">
                                    <div class="font-bold">

                                        <button type="button"
                                            class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                            wire:click='$emit("openModal", "extend-course-task", {{ json_encode(['task' => $task->id]) }})'>
                                            <svg class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12,0A11.972,11.972,0,0,0,4,3.073V1A1,1,0,0,0,2,1V4A3,3,0,0,0,5,7H8A1,1,0,0,0,8,5H5a.854.854,0,0,1-.1-.021A9.987,9.987,0,1,1,2,12a1,1,0,0,0-2,0A12,12,0,1,0,12,0Z" />
                                                <path
                                                    d="M12,6a1,1,0,0,0-1,1v5a1,1,0,0,0,.293.707l3,3a1,1,0,0,0,1.414-1.414L13,11.586V7A1,1,0,0,0,12,6Z" />
                                            </svg>
                                            <span class="whitespace-nowrap font-bold">Extend</span>
                                        </button>

                                    </div>
                                </div>
                                <!--END EXT-->

                                <!--Completed-->
                                <div class="w-fit">
                                    <div class="font-bold">

                                        <button type="button"
                                            class="inline-flex items-center space-x-2 rounded-full border border-gray-400 border-transparent bg-white px-3.5 py-2 text-sm font-medium leading-4 text-gray-500 shadow-sm transition focus-within:text-traivis-500 hover:border-traivis-500 hover:bg-traivis-500 hover:text-white focus:border-traivis-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-1"
                                            wire:click='$emit("openModal", "deliver-course-task", {{ json_encode(['task' => $task->id]) }})'>
                                            <svg class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M24,12c0-1.626-.714-3.16-1.925-4.124,.14-1.622-.44-3.211-1.59-4.362-1.15-1.149-2.735-1.728-4.277-1.555-2.014-2.556-6.365-2.604-8.332-.035-1.624-.144-3.211,.439-4.361,1.59-1.149,1.15-1.729,2.74-1.555,4.277-2.556,2.014-2.605,6.365-.035,8.333-.14,1.622,.44,3.211,1.59,4.362,1.15,1.149,2.737,1.73,4.277,1.555,2.014,2.556,6.365,2.604,8.332,.035,1.62,.136,3.21-.439,4.361-1.59,1.149-1.15,1.729-2.74,1.555-4.277,1.246-1.048,1.96-2.582,1.96-4.208Zm-6.46-1.434l-4.739,4.568c-1.163,1.161-3.066,1.151-4.229-.013l-2.252-2.092c-.404-.376-.428-1.009-.052-1.413,.377-.405,1.011-.427,1.413-.052l2.278,2.117c.418,.417,1.05,.416,1.44,.025l4.752-4.581c.398-.382,1.031-.371,1.414,.026,.384,.397,.372,1.031-.025,1.414Z" />
                                            </svg>
                                            <span class="whitespace-nowrap font-bold">Deliver
                                                Task</span>
                                        </button>

                                    </div>
                                </div>
                                <!--END Completed-->

                            </div>
                            <!--End Actions List-->

                        </div>
                        <!--/Actions-->

                    </div>

                </div>
            </div>
            <!--/ Task Action-->
        @endif

    </div>
    <!--END Task area -->
</div>
