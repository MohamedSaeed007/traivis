<div>
    {{--    {{ var_dump($is_online) }} --}}
    @if ($is_allowed)
        @if ($is_instructor && $is_online)
            <script>
                const bc = new BroadcastChannel("lecture-{{ $lecture->id }}-{{ $lecture->meeting_id }}");
                bc.onmessage = (event) => {
                    if (event.data === `lecture-{{ $lecture->id }}-{{ $lecture->meeting_id }}.first`) {
                        bc.postMessage(`lecture-{{ $lecture->id }}-{{ $lecture->meeting_id }}.not`);
                    }
                    if (event.data === `lecture-{{ $lecture->id }}-{{ $lecture->meeting_id }}.not`) {
                        alert(`An instance of this page is already running`);
                        window.location = '/';
                    }
                };
                bc.postMessage(`lecture-{{ $lecture->id }}-{{ $lecture->meeting_id }}.first`);
            </script>

            <div wire:poll.300s="update_attendance"></div>
        @endif
        <div x-data="meeting" x-cloak>
            <audio src=""
                x-effect=" if( document.meetingSession) {document.meetingSession.audioVideo.bindAudioElement($el);} ">
            </audio>
            <div :class="status ? 'flex ' : 'hidden'"
                class="relative w-full flex-wrap-reverse items-end justify-between">
                <div x-show="side"
                    class="fixed bottom-0 left-0 top-0 z-[999999] h-[80vh] w-full overflow-y-auto overflow-x-hidden md:relative md:w-2/5 lg:w-1/5">

                    <!-- Background backdrop, show/hide based on slide-over state. -->

                    <div class="inset-0 overflow-x-auto overflow-y-auto">
                        <div class="inset-0 overflow-x-auto overflow-y-auto">
                            <div
                                class="pointer-events-none flex max-w-full overflow-x-auto overflow-y-auto">

                                <div class="pointer-events-auto w-full overflow-x-auto overflow-y-auto">
                                    <div class="flex h-full flex-col overflow-x-auto bg-white shadow-xl">
                                        <div class="p-2">
                                            <div class="flex items-start justify-between">
                                                <h2 class="mr-9 text-base font-semibold leading-6 text-gray-900"
                                                    id="slide-over-title">People</h2>
                                                <div class="ml-3 flex h-7 items-center">
                                                    <button type="button" @click="side=false"
                                                        class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500">
                                                        <span class="sr-only">Close panel</span>
                                                        <svg class="h-6 w-6" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-5 flex flex-grow flex-col">
                                            <nav class="flex-1 space-y-1 bg-white" aria-label="Sidebar">
                                                &nbsp; &nbsp;

                                                <ul role="list"
                                                    class="flex-1 divide-y divide-gray-200 overflow-hidden">
                                                    <li>
                                                        <div class="">

                                                            <!--Collapse button-->
                                                            <div class="z-10 bg-white leading-7">
                                                                <button
                                                                    @click="collapseInCall = !collapseInCall"
                                                                    class="group flex w-full items-start justify-between border-b border-gray-200 bg-white text-left transition-colors hover:border-gray-500 hover:text-gray-700 focus:text-gray-900 focus:outline-none group-hover:text-gray-700">
                                                                    <span
                                                                        class="text-grey-600 group inline-flex items-center border-transparent px-6 py-4 text-sm font-medium transition-colors group-hover:text-gray-700">
                                                                        IN CALL
                                                                    </span>
                                                                    <span
                                                                        class="ml-6 flex h-7 items-center">
                                                                        <svg :class="collapseInCall ? 'rotate-0' :
                                                                            '-rotate-90'"
                                                                            class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M19 9l-7 7-7-7">
                                                                            </path>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <!--/Collapse button-->

                                                            <!--Collapse Content-->
                                                            <div x-show="collapseInCall" class=""
                                                                x-transition:enter="transition "
                                                                x-transition:enter-start="transform scale-y-0 "
                                                                x-transition:enter-end="transform scale-y-100 "
                                                                x-transition:leave="transition"
                                                                x-transition:leave-start="transform scale-y-100 "
                                                                x-transition:leave-end="transform scale-y-0 "
                                                                style="display: none;">

                                                                <!--Education Info Content-->
                                                                <div contenteditable="false">

                                                                    <template
                                                                        x-for="(element,i) in attendees">
                                                                        <div :id="element.ExternalUserId"
                                                                            class="attendee-element group relative flex items-center px-2 py-4">

                                                                            <div
                                                                                class="-m-1 block flex-1 p-1">
                                                                                <div
                                                                                    class="relative flex min-w-0 flex-1 items-center">
                                                                                    <span
                                                                                        class="relative inline-block flex-shrink-0">
                                                                                        <img class="h-10 w-10 rounded-full"
                                                                                            :src="element
                                                                                                .Avatar"
                                                                                            alt="">
                                                                                        <!-- Online: "bg-green-400", Offline: "bg-gray-300" -->
                                                                                        <span
                                                                                            class="absolute right-0 top-0 block h-2.5 w-2.5 rounded-full bg-green-400 ring-2 ring-white"
                                                                                            aria-hidden="true">
                                                                                        </span>
                                                                                    </span>
                                                                                    <div
                                                                                        class="ml-4 truncate">
                                                                                        <p x-text="element.FullName"
                                                                                            class="truncate text-sm font-medium text-gray-900">
                                                                                        </p>
                                                                                    </div>

                                                                                    <span
                                                                                        class="absolute right-0">
                                                                                        <!-- onclick="toggleMuteAudio()" -->

                                                                                        <!-- <button
                                                                                @click="@this.disallowUser(element.ExternalUserId)">
                                                                                block</button>
                                                                            <button
                                                                                @click="@this.allowUser(element.ExternalUserId)">
                                                                                unblock</button> -->

                                                                                        <button
                                                                                            type="button"
                                                                                            x-show="element.ExternalUserId != currentUserId"
                                                                                            :class="isInstructor
                                                                                                ?
                                                                                                'cursor-pointer ' :
                                                                                                'pointer-events-none'"
                                                                                            class="inline-block rounded-full bg-white px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 transition duration-150 ease-in-out hover:bg-gray-300 focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:flex-row lg:flex-row">
                                                                                            <svg x-show="!element.isMuted"
                                                                                                @click="muteUser(element.ExternalUserId)"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="currentColor"
                                                                                                class="h-6 w-4">
                                                                                                <path
                                                                                                    d="M8.25 4.5a3.75 3.75 0 117.5 0v8.25a3.75 3.75 0 11-7.5 0V4.5z" />
                                                                                                <path
                                                                                                    d="M6 10.5a.75.75 0 01.75.75v1.5a5.25 5.25 0 1010.5 0v-1.5a.75.75 0 011.5 0v1.5a6.751 6.751 0 01-6 6.709v2.291h3a.75.75 0 010 1.5h-7.5a.75.75 0 010-1.5h3v-2.291a6.751 6.751 0 01-6-6.709v-1.5A.75.75 0 016 10.5z" />
                                                                                            </svg>
                                                                                            <svg x-show="element.isMuted"
                                                                                                @click="unmuteUser(element.ExternalUserId)"
                                                                                                :fill=" isMutedByInstructor
                                                                                                     ?
                                                                                                     'gray' :
                                                                                                     'red'"
                                                                                                class="h-6 w-4"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                                <path
                                                                                                    d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
                                                                                            </svg>
                                                                                        </button>
                                                                                        <button
                                                                                            type="button"
                                                                                            x-show="element.ExternalUserId != currentUserId"
                                                                                            :class="isInstructor
                                                                                                ?
                                                                                                'cursor-pointer ' :
                                                                                                'pointer-events-none'"
                                                                                            class="inline-block rounded-full bg-white px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 transition duration-150 ease-in-out hover:bg-gray-300 focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:flex-row lg:flex-row">
                                                                                            <!-- <svg x-show="!element.isDisallowed"
                                                                                    @click="muteUser(element.ExternalUserId)"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="currentColor"
                                                                                    class="h-6 w-4">
                                                                                    <path
                                                                                        d="M8.25 4.5a3.75 3.75 0 117.5 0v8.25a3.75 3.75 0 11-7.5 0V4.5z" />
                                                                                    <path
                                                                                        d="M6 10.5a.75.75 0 01.75.75v1.5a5.25 5.25 0 1010.5 0v-1.5a.75.75 0 011.5 0v1.5a6.751 6.751 0 01-6 6.709v2.291h3a.75.75 0 010 1.5h-7.5a.75.75 0 010-1.5h3v-2.291a6.751 6.751 0 01-6-6.709v-1.5A.75.75 0 016 10.5z" />
                                                                                </svg> -->
                                                                                            <svg x-show="!element.isDisallowed"
                                                                                                @click="disallowUser(element.ExternalUserId)"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                version="1.1"
                                                                                                id="Capa_1"
                                                                                                x="0px"
                                                                                                y="0px"
                                                                                                viewBox="0 0 512 512"
                                                                                                style="enable-background:new 0 0 512 512;"
                                                                                                xml:space="preserve"
                                                                                                class="h-6 w-4">
                                                                                                <g>
                                                                                                    <circle
                                                                                                        cx="256"
                                                                                                        cy="128"
                                                                                                        r="128" />
                                                                                                    <path
                                                                                                        d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z" />
                                                                                                </g>

                                                                                            </svg>
                                                                                            <svg x-show="element.isDisallowed"
                                                                                                @click="@this.allowUser(element.ExternalUserId)"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                id="Layer_1"
                                                                                                data-name="Layer 1"
                                                                                                viewBox="0 0 24 24"
                                                                                                class="h-6 w-4">
                                                                                                <path
                                                                                                    d="M23.707,22.293L13.275,11.861c2.698-.586,4.725-2.99,4.725-5.861,0-3.309-2.691-6-6-6-2.871,0-5.274,2.028-5.861,4.725L1.707,.293C1.316-.098,.684-.098,.293,.293S-.098,1.316,.293,1.707L22.293,23.707c.195,.195,.451,.293,.707,.293s.512-.098,.707-.293c.391-.391,.391-1.023,0-1.414ZM9.977,14.238l9.762,9.762H4c-.552,0-1-.448-1-1,0-4.266,2.987-7.841,6.977-8.762Z" />
                                                                                            </svg>
                                                                                            <!-- <svg x-show="element.isMuted"
                                                                                    @click="unmuteUser(element.ExternalUserId)"
                                                                                    fill="red"
                                                                                    class="h-6 w-4"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 640 512">
                                                                                    <path
                                                                                        d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
                                                                                </svg> -->
                                                                                        </button>
                                                                                    </span>
                                                                                    <span
                                                                                        x-show="element.isUpraised"
                                                                                        class="absolute right-[85px]">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 20 20"
                                                                                            fill="gray"
                                                                                            class="h-6 w-4">
                                                                                            <path
                                                                                                fill-rule="evenodd"
                                                                                                d="M11 2a1 1 0 10-2 0v6.5a.5.5 0 01-1 0V3a1 1 0 10-2 0v5.5a.5.5 0 01-1 0V5a1 1 0 10-2 0v7a7 7 0 1014 0V8a1 1 0 10-2 0v3.5a.5.5 0 01-1 0V3a1 1 0 10-2 0v5.5a.5.5 0 01-1 0V2z"
                                                                                                clip-rule="evenodd" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </template>

                                                                </div>

                                                            </div>
                                                            <!--/ Education Info Content-->

                                                        </div>

                                                        <div x-show="isInstructor" class="">

                                                            <!--Collapse button-->
                                                            <div class="z-10 bg-white leading-7">
                                                                <button
                                                                    @click="collapseInvited = !collapseInvited"
                                                                    class="group flex w-full items-start justify-between border-b border-gray-200 bg-white text-left transition-colors hover:border-gray-500 hover:text-gray-700 focus:text-gray-900 focus:outline-none group-hover:text-gray-700">
                                                                    <span
                                                                        class="text-grey-600 group inline-flex items-center border-transparent px-6 py-4 text-sm font-medium transition-colors group-hover:text-gray-700">
                                                                        ALSO INVITED
                                                                    </span>
                                                                    <span
                                                                        class="ml-6 flex h-7 items-center">
                                                                        <svg :class="collapseInvited ?
                                                                            'rotate-0' :
                                                                            '-rotate-90'"
                                                                            class="mt-10 h-6 w-6 -rotate-90 transform text-lg font-bold text-gray-500 transition-all group-hover:text-gray-700"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M19 9l-7 7-7-7">
                                                                            </path>
                                                                        </svg></span>
                                                                </button>
                                                            </div>
                                                            <!--/Collapse button-->

                                                            <!--Collapse Content-->
                                                            <div x-show="collapseInvited"
                                                                class=""
                                                                x-transition:enter="transition "
                                                                x-transition:enter-start="transform scale-y-0 "
                                                                x-transition:enter-end="transform scale-y-100 "
                                                                x-transition:leave="transition"
                                                                x-transition:leave-start="transform scale-y-100 "
                                                                x-transition:leave-end="transform scale-y-0 "
                                                                style="display: none;">

                                                                <!--Education Info Content-->
                                                                <div contenteditable="false">

                                                                    <template
                                                                        x-for="(element,i) in listOfflineStudents">
                                                                        <div :id="element.ExternalUserId"
                                                                            class="attendee-element group relative flex items-center px-2 py-4">

                                                                            <div
                                                                                class="-m-1 block flex-1 p-1">
                                                                                <div
                                                                                    class="relative flex min-w-0 flex-1 items-center">
                                                                                    <span
                                                                                        class="relative inline-block flex-shrink-0">
                                                                                        <img class="h-10 w-10 rounded-full"
                                                                                            :src="element
                                                                                                .Avatar"
                                                                                            alt="">

                                                                                    </span>
                                                                                    <div
                                                                                        class="ml-4 truncate">
                                                                                        <p x-text="element.name"
                                                                                            class="truncate text-sm font-medium text-gray-900">
                                                                                        </p>
                                                                                    </div>

                                                                                    <span
                                                                                        class="absolute right-0">

                                                                                        <button
                                                                                            type="button"
                                                                                            x-show="'User.' + element.id "
                                                                                            :class="isInstructor
                                                                                                ?
                                                                                                'cursor-pointer ' :
                                                                                                'pointer-events-none'"
                                                                                            class="inline-block rounded-full bg-white px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 transition duration-150 ease-in-out hover:bg-gray-300 focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:flex-row lg:flex-row">

                                                                                            <svg x-show="!element.pivot.disallowed"
                                                                                                @click="@this.disallowUser('User.' + element.id  )"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                version="1.1"
                                                                                                id="Capa_1"
                                                                                                x="0px"
                                                                                                y="0px"
                                                                                                viewBox="0 0 512 512"
                                                                                                style="enable-background:new 0 0 512 512;"
                                                                                                xml:space="preserve"
                                                                                                class="h-6 w-4">
                                                                                                <g>
                                                                                                    <circle
                                                                                                        cx="256"
                                                                                                        cy="128"
                                                                                                        r="128" />
                                                                                                    <path
                                                                                                        d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z" />
                                                                                                </g>

                                                                                            </svg>
                                                                                            <svg x-show="element.pivot.disallowed"
                                                                                                @click="@this.allowUser('User.' + element.id )"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                id="Layer_1"
                                                                                                data-name="Layer 1"
                                                                                                viewBox="0 0 24 24"
                                                                                                class="h-6 w-4 fill-red-500">
                                                                                                <path
                                                                                                    d="M23.707,22.293L13.275,11.861c2.698-.586,4.725-2.99,4.725-5.861,0-3.309-2.691-6-6-6-2.871,0-5.274,2.028-5.861,4.725L1.707,.293C1.316-.098,.684-.098,.293,.293S-.098,1.316,.293,1.707L22.293,23.707c.195,.195,.451,.293,.707,.293s.512-.098,.707-.293c.391-.391,.391-1.023,0-1.414ZM9.977,14.238l9.762,9.762H4c-.552,0-1-.448-1-1,0-4.266,2.987-7.841,6.977-8.762Z" />
                                                                                            </svg>

                                                                                        </button>
                                                                                    </span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </template>

                                                                </div>

                                                            </div>
                                                            <!--/ Education Info Content-->

                                                        </div>

                                                    </li>

                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section :class="side ? 'lg:w-4/5 md:w-3/5 ' : 'md:w-full'"
                    class="relative flex w-full items-center justify-center overflow-y-auto p-2 text-neutral-700">

                    <div class="w-5/5 flex h-[90%] w-full flex-col items-center justify-center">
                        <div class="flex w-[90%] flex-wrap">
                            <div class="w-full">
                                <video class="w-full" src=""
                                    x-effect=" if( queue && document.meetingSession && queue.first) { console.error(queue.first); document.meetingSession.audioVideo.bindVideoElement(queue.first.element, $el);} ">
                                </video>

                            </div>
                        </div>
                        <div x-show="status"
                            class="attendees mb-10 flex justify-start overflow-x-auto bg-white px-4">
                            <!-- loopExceptFirst -->
                            <template x-for="(ele, i) in queue.loopExceptFirst "
                                :key="i">
                                <video
                                    src=""x-effect="if( queue && document.meetingSession && queue.length() > 0) { document.meetingSession.audioVideo.bindVideoElement(ele.element, $el);}"
                                    x-init="if (queue && document.meetingSession && queue.length() > 0) { document.meetingSession.audioVideo.bindVideoElement(ele.element, $el); }"
                                    @click.self="swap(ele.element );console.error(ele)"
                                    class="atendee-vid m-2 h-[80px] w-[140px] bg-slate-900"></video>

                            </template>
                        </div>

                    </div>

                </section>

            </div>

            <div class="grid grid-cols-9 content-end gap-10">
                <div
                    class="sm: fixed inset-x-0 bottom-0 z-[999999] flex h-16 items-center justify-center bg-gray-400 pt-3">
                    <div
                        class="justigy-center relative flex w-fit grid-cols-7 content-center gap-3 sm:flex-row sm:gap-5 md:flex-row md:gap-7 lg:flex-row lg:gap-9 xl:gap-9 2xl:gap-9">

                        <button type="button" @click="side=!side" x-show="status"
                            class="inline-block rounded-full bg-gray-200 px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 shadow-md transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:ml-5 sm:flex-col sm:flex-col md:flex-row md:flex-row lg:ml-28 lg:flex-row lg:flex-row xl:ml-28">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="h-6 w-4">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />

                            </svg>
                        </button>
                        <div class="relative" x-show="status">
                            <button type="button" @click="tOpen=!tOpen;"
                                class="inline-block rounded-full bg-gray-200 px-2 py-2 text-xs font-medium uppercase leading-tight text-gray-700 shadow-md transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:mr-11 sm:flex-col md:mr-24 md:flex-row lg:mr-80 lg:flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor" class="h-6 w-6">
                                    <path
                                        d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 01-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 016.126 3.537zM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 010 .75l-1.732 3.001c-.229.396-.76.498-1.067.16A5.231 5.231 0 016.75 12c0-1.362.519-2.603 1.37-3.536zM10.878 17.13c-.447-.097-.623-.608-.394-1.003l1.733-3.003a.75.75 0 01.65-.375h3.465c.457 0 .81.408.672.843a5.252 5.252 0 01-6.126 3.538z" />
                                    <path fill-rule="evenodd"
                                        d="M21 12.75a.75.75 0 000-1.5h-.783a8.22 8.22 0 00-.237-1.357l.734-.267a.75.75 0 10-.513-1.41l-.735.268a8.24 8.24 0 00-.689-1.191l.6-.504a.75.75 0 10-.964-1.149l-.6.504a8.3 8.3 0 00-1.054-.885l.391-.678a.75.75 0 10-1.299-.75l-.39.677a8.188 8.188 0 00-1.295-.471l.136-.77a.75.75 0 00-1.477-.26l-.136.77a8.364 8.364 0 00-1.377 0l-.136-.77a.75.75 0 10-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 00-1.3.75l.392.678a8.29 8.29 0 00-1.054.885l-.6-.504a.75.75 0 00-.965 1.149l.6.503a8.243 8.243 0 00-.689 1.192L3.8 8.217a.75.75 0 10-.513 1.41l.735.267a8.222 8.222 0 00-.238 1.355h-.783a.75.75 0 000 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 10.513 1.41l.735-.268c.197.417.428.816.69 1.192l-.6.504a.75.75 0 10.963 1.149l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 101.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.771a.75.75 0 101.477.26l.137-.772a8.376 8.376 0 001.376 0l.136.773a.75.75 0 101.477-.26l-.136-.772a8.19 8.19 0 001.294-.47l.391.677a.75.75 0 101.3-.75l-.393-.679a8.282 8.282 0 001.054-.885l.601.504a.75.75 0 10.964-1.15l-.6-.503a8.24 8.24 0 00.69-1.191l.735.268a.75.75 0 10.512-1.41l-.734-.268c.115-.438.195-.892.237-1.356h.784zm-2.657-3.06a6.744 6.744 0 00-1.19-2.053 6.784 6.784 0 00-1.82-1.51A6.704 6.704 0 0012 5.25a6.801 6.801 0 00-1.225.111 6.7 6.7 0 00-2.15.792 6.784 6.784 0 00-2.952 3.489.758.758 0 01-.036.099A6.74 6.74 0 005.251 12a6.739 6.739 0 003.355 5.835l.01.006.01.005a6.706 6.706 0 002.203.802c.007 0 .014.002.021.004a6.792 6.792 0 002.301 0l.022-.004a6.707 6.707 0 002.228-.816 6.781 6.781 0 001.762-1.483l.009-.01.009-.012a6.744 6.744 0 001.18-2.064c.253-.708.39-1.47.39-2.264a6.74 6.74 0 00-.408-2.308z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="tOpen"
                                class="absolute bottom-[50px] right-0 mt-2 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-50"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-50">

                                <h2 class="p-1 text-center">Audio Devices</h2>
                                <div @click="tOpen=!tOpen" class="py-1" role="none">
                                    <template x-for="(device,i) in audioInputDevices"
                                        :key="i">
                                        <span x-text="device.label"
                                            @click="await changeAudioDevice(device.deviceId)"
                                            class="group block flex cursor-pointer items-center px-4 py-2 text-sm text-gray-700 hover:bg-traivis-500 hover:text-white">
                                        </span>
                                    </template>
                                </div>
                                <h2 class="p-1 text-center">Camera Devices</h2>
                                <div @click="tOpen=!tOpen" class="py-1" role="none">
                                    <template x-for="(device,i) in videoInputDevices"
                                        :key="i">
                                        <span x-text="device.label"
                                            @click="await changeVideoDevice(device.deviceId)"
                                            class="group block flex cursor-pointer items-center px-4 py-2 text-sm text-gray-700 hover:bg-traivis-500 hover:text-white">
                                        </span>
                                    </template>
                                </div>

                            </div>
                        </div>

                        <button @click="status=false; leaveMeeting();" x-show="status" type="button"
                            class="ml-0inline-block rounded-full bg-red-600 px-3 py-2 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-900 hover:shadow-lg focus:bg-red-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg sm:ml-4 sm:flex-col md:ml-8 md:flex-row lg:ml-12 lg:flex-row xl:ml-12">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>

                        </button>
                        <button @click="status=true ; startMeeting(); " x-show="!status"
                            type="button"
                            class="ml-0 inline-block rounded-full bg-green-600 px-3 py-2 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-green-900 hover:shadow-lg focus:bg-green-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg sm:ml-4 sm:flex-col md:ml-8 md:flex-row lg:ml-12 lg:flex-row xl:ml-12">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>

                        </button>

                        <button @click="shareScreen();" type="button" x-show="status"
                            class="inline-block rounded-full bg-gray-200 px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 shadow-md transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:flex-row lg:flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                            </svg>
                        </button>

                        <button type="button" @click="raiseHand()" x-show="status"
                            class="hidden rounded-full bg-gray-200 px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 shadow-md transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:block md:flex-row lg:flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" class="h-6 w-4">
                                <path fill-rule="evenodd"
                                    d="M11 2a1 1 0 10-2 0v6.5a.5.5 0 01-1 0V3a1 1 0 10-2 0v5.5a.5.5 0 01-1 0V5a1 1 0 10-2 0v7a7 7 0 1014 0V8a1 1 0 10-2 0v3.5a.5.5 0 01-1 0V3a1 1 0 10-2 0v5.5a.5.5 0 01-1 0V2z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>

                        <button type="button" @click="await toggleCamera()" x-show="status"
                            class="inline-block rounded-full bg-gray-200 px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 shadow-md transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:flex-row lg:flex-row">
                            <svg id="openCamera" x-show="videoStatus"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="h-6 w-4">
                                <path
                                    d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                            </svg>
                            <svg x-show="!videoStatus" id="closeCamera"
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="red"
                                viewBox="0 0 640 512">
                                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7l-86.4-67.7 13.8 9.2c9.8 6.5 22.4 7.2 32.9 1.6s16.9-16.4 16.9-28.2V128c0-11.8-6.5-22.6-16.9-28.2s-23-5-32.9 1.6l-96 64L448 174.9V192 320v5.8l-32-25.1V128c0-35.3-28.7-64-64-64H113.9L38.8 5.1zM407 416.7L32.3 121.5c-.2 2.1-.3 4.3-.3 6.5V384c0 35.3 28.7 64 64 64H352c23.4 0 43.9-12.6 55-31.3z" />
                            </svg>

                        </button>
                        <template x-if="indexOfCurrentUser >-1">
                            <button
                                :class="isMutedByInstructor && !isInstructor ?
                                    ' pointer-events-none ' :
                                    'cursor-pointer'"
                                type="button" @click="await toggleAudio()" x-show="status"
                                class="inline-block cursor-pointer rounded-full bg-gray-200 px-3 py-2 text-xs font-medium uppercase leading-tight text-gray-700 shadow-md transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg sm:flex-col md:flex-row lg:flex-row">
                                <svg id="unmutedIcon"
                                    x-show="attendees && !attendees[indexOfCurrentUser].isMuted"xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="h-6 w-4">
                                    <path
                                        d="M8.25 4.5a3.75 3.75 0 117.5 0v8.25a3.75 3.75 0 11-7.5 0V4.5z" />
                                    <path
                                        d="M6 10.5a.75.75 0 01.75.75v1.5a5.25 5.25 0 1010.5 0v-1.5a.75.75 0 011.5 0v1.5a6.751 6.751 0 01-6 6.709v2.291h3a.75.75 0 010 1.5h-7.5a.75.75 0 010-1.5h3v-2.291a6.751 6.751 0 01-6-6.709v-1.5A.75.75 0 016 10.5z" />
                                </svg>
                                <svg id="mutedIcon"
                                    x-show="attendees && attendees[indexOfCurrentUser].isMuted"
                                    :fill=" isMutedByInstructor ? 'gray' : 'red'" class="h-6 w-4"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
                                </svg>

                            </button>
                        </template>

                    </div>
                </div>
            </div>

            <div>
                <div x-data="{
                    show: false,
                    userAvatar: null,
                    userName: null,
                    messageText: null
                }"
                    @notify.window="
            if(currentUserId==$event.detail.userId){return;};
            console.log(currentUserId);
            console.log($event.detail.userId);
            userAvatar=$event.detail.userAvatar;
            userName=$event.detail.userName;
            messageText = $event.detail.message;
            show=true;
            setTimeout(() => show = false, 5000)"
                    aria-live="assertive"
                    class="pointer-events-none fixed inset-0 z-50 flex items-end px-4 py-6 sm:items-start sm:p-6">
                    <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
                        <!-- Notification panel, dynamically insert this into the live region when it needs to be displayed -->

                        <div x-show="show"
                            x-transition:enter="transform ease-out duration-300 transition"
                            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="p-4">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 pt-0.5">
                                        <img class="h-10 w-10 rounded-full" :src="userAvatar"
                                            alt="">
                                    </div>
                                    <div class="ml-3 w-0 flex-1">
                                        <p class="text-sm font-medium text-gray-900" x-text="userName">
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500" x-text="messageText">
                                        </p>
                                    </div>
                                    <div class="ml-4 flex flex-shrink-0">
                                        <button type="button" @click="show = false"
                                            class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            <span class="sr-only">Close</span>
                                            <svg class="h-5 w-5"
                                                x-description="Heroicon name: mini/x-mark"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @push('scripts')
                <script>
                    let meetingResponse = @js($this->chime_meeting());
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('meeting', () => ({
                            audioStatus: true,
                            currentUserId: @entangle('current_user_id'),
                            isInstructor: @entangle('is_instructor'),
                            isMuted: @entangle('is_muted'),
                            isMutedByInstructor: @js($is_muted_by_instructor),
                            listStudents: @entangle('students'),
                            listOfflineStudents: @entangle('offline_students_array'),
                            videoStatus: true,
                            isReconnecting: false,
                            attendees: [],
                            tOpen: false,
                            collapseInCall: true,
                            collapseInvited: false,
                            indexOfCurrentUser: -1,
                            side: true,
                            status: true,
                            isRaiseHand: false,
                            audioInputDevices: [],
                            videoInputDevices: [],
                            queue: new PriorityQueue(),
                            swap(element) {
                                this.queue.enqueue(element, this.queue.front().priority + 1)
                            },
                            async init() {
                                console.error('init');
                                console.error(this.listOfflineStudents);
                                console.error(this.listStudents);
                                console.error(this.currentUserId);
                                console.error(this.attendees);
                                // let list = await this.listStudents()
                                window.Echo.private('App.Models.Lecture.{{ $lecture->id }}')
                                    .listen('firstWindow', (e) => {})
                                    .listen('firstWindowNot', (e) => {})
                                    .listen('LectureUserDisallowed', (e) => {
                                        this.getAllAttendees().then(response => {
                                            this.attendees = response
                                                .AttendeeFullNames;
                                        });
                                        // console.log('LectureUserDisallowed');
                                        // console.error(e);
                                        // const index = this.attendees.findIndex((element) =>
                                        //     element.ExternalUserId == e.userId);
                                        // console.error('index', index);

                                        // if (index > -1) {
                                        //     // console.error('ExternalUserId');
                                        //     // console.error(this.attendees[index]
                                        //     //     .ExternalUserId);
                                        //     // return;
                                        //
                                        //     this.attendees[index].isDisallowed = e.status
                                        //     if (this.currentUserId == this.attendees[index]
                                        //         .ExternalUserId) {
                                        //         location.reload();
                                        //     }
                                        //
                                        // }

                                        // console.error(this.attendees[index]);
                                        // if (this.attendees[index].isDisallowed) {
                                        //     this.attendees[index].isDisallowed = false
                                        // } else this.attendees[index].isDisallowed = true




                                    })
                                    .listen('LectureUserMuted', (e) => {
                                        console.error('LectureUserMuted');
                                        console.error(e);
                                        console.error(this.attendees);
                                        // console.error(this.isMutedByInstructor);
                                        const index = this.attendees.findIndex((element) =>
                                            element.ExternalUserId == e.userId);
                                        console.error('index', index);


                                        // if (this.attendees[index].isMuted) {
                                        //     this.attendees[index].isMuted = false
                                        // } else this.attendees[index].isMuted = true
                                        // console.error(this.currentUserId  ,e.userId );
                                        if (this.currentUserId == e.userId) {
                                            // console.error(11111);
                                            // console.error(this.isMutedByInstructor );
                                            // console.error( @this.is_muted_by_instructor);

                                            // this.isMutedByInstructor =  @this.is_muted_by_instructor;
                                            // console.error(22222);
                                            // console.error(this.isMutedByInstructor );
                                            // console.error( @this.is_muted_by_instructor);
                                            // console.error(33333);
                                            if (!e.status) {
                                                //unmute
                                                // document.meetingSession.audioVideo.realtimeSetCanUnmuteLocalAudio(true);

                                                if (this.isMutedByInstructor && !this
                                                    .isInstructor) {
                                                    return;
                                                } else if (this.isMutedByInstructor && this
                                                    .isInstructor) {

                                                } else {

                                                    this.attendees[index].isMuted = e.status
                                                    console.error('unmute')
                                                    document.meetingSession.audioVideo
                                                        .realtimeUnmuteLocalAudio();
                                                }

                                                //  document.meetingSession.audioVideo.startAudioInput(this
                                                // .audioInputDevices[0].deviceId);
                                                //  document.meetingSession.audioVideo.start();
                                                this.isMutedByInstructor = false
                                            } else {
                                                //mute
                                                console.error('mute')
                                                this.attendees[index].isMuted = e.status
                                                document.meetingSession.audioVideo
                                                    .realtimeMuteLocalAudio();

                                            }

                                        }

                                    })
                                    .listen('LectureUserUpraised', (e) => {
                                        console.log('LectureUserUpraised');
                                        console.log(e);
                                        const index = this.attendees.findIndex((element) =>
                                            element.ExternalUserId == e.userId);
                                        this.attendees[index].isUpraised = e.status
                                        // console.error(index);
                                        // if (this.attendees[index].isUpraised) {
                                        //     this.attendees[index].isUpraised = false
                                        // } else this.attendees[index].isUpraised = true
                                        // Livewire.emit('chat-message-sent');
                                    })
                                    .listen('LectureUserJoined', (e) => {
                                        this.getAllAttendees().then(response => {
                                            this.attendees = response
                                                .AttendeeFullNames;
                                        })

                                        window.dispatchEvent(new CustomEvent("notify", {
                                            bubbles: true,
                                            cancelable: true,
                                            detail: {
                                                userId: 'user.' + e.userId,
                                                userAvatar: e.userAvatar,
                                                userName: e.userName,
                                                message: "Joined",
                                            }
                                        }));
                                        // this.attendees = (this.getAllAttendees())
                                        //     .AttendeeFullNames;
                                        // console.error('LectureUserJoined');
                                        // console.error(e);
                                    })
                                    .listen('LectureUserLeft', (e) => {
                                        this.getAllAttendees().then(response => {
                                            this.attendees = response
                                                .AttendeeFullNames;
                                        })
                                        window.dispatchEvent(new CustomEvent("notify", {
                                            bubbles: true,
                                            cancelable: true,
                                            detail: {
                                                userId: 'user.' + e.userId,
                                                userAvatar: e.userAvatar,
                                                userName: e.userName,
                                                message: "Left"
                                            }
                                        }));

                                        // this.attendees = (this.getAllAttendees())
                                        //     .AttendeeFullNames;
                                        // console.error('LectureUserLeft');
                                        // console.error(e);
                                    })
                                await this.initMeeting();

                            },
                            async leaveMeeting() {
                                await @this.leave_chime_meeting();
                                document.meetingSession.audioVideo.stopLocalVideoTile();
                                document.meetingSession.audioVideo.stopVideoInput();
                                document.meetingSession.audioVideo.removeLocalVideoTile();

                            },
                            async startMeeting() {
                                await this.initMeeting()

                            },
                            async shareScreen() {
                                await document.meetingSession.audioVideo
                                    .startContentShareFromScreenCapture();
                            },
                            async toggleCamera() {
                                this.videoStatus = !this.videoStatus;
                                if (this.videoStatus)
                                    await document.meetingSession.audioVideo
                                    .startLocalVideoTile();
                                else
                                    await document.meetingSession.audioVideo
                                    .stopLocalVideoTile();
                            },
                            async toggleAudio() {

                                this.attendees.forEach(attendee => {
                                    if (attendee.ExternalUserId == this.currentUserId) {
                                        attendee.isMuted = !attendee.isMuted
                                    }

                                })
                                if (!this.attendees[this.indexOfCurrentUser].isMuted) {
                                    console.error('i want to unmute')
                                    // console.error(this.attendees[this.indexOfCurrentUser].isMuted)
                                    // console.error(document.meetingSession.audioVideo.realtimeUnmuteLocalAudio())
                                    // await document.meetingSession.audioVideo.realtimeUnmuteLocalAudio(false)
                                    // console.error(document.meetingSession.audioVideo.realtimeUnmuteLocalAudio())

                                    // document.meetingSession.audioVideo.realtimeSetCanUnmuteLocalAudio(true);
                                    // await document.meetingSession.audioVideo
                                    //     .realtimeUnmuteLocalAudio();
                                    // await document.meetingSession.audioVideo.startAudioInput(this
                                    // .audioInputDevices[0].deviceId);
                                    // await document.meetingSession.audioVideo.start();
                                    // console.error(document.meetingSession.audioVideo.realtimeUnmuteLocalAudio())
                                    // this.attendees[this.indexOfCurrentUser].isMuted=false
                                    await @this.unmuteUser(this.currentUserId);
                                    console.error(this.attendees[this.indexOfCurrentUser]
                                        .isMuted)
                                } else {
                                    console.error('i want to mute')
                                    // console.error(this.attendees[this.indexOfCurrentUser].isMuted)
                                    // await document.meetingSession.audioVideo
                                    //     .realtimeMuteLocalAudio();
                                    // this.attendees[this.indexOfCurrentUser].isMuted=true
                                    await @this.muteUser(this.currentUserId);
                                    // console.error(this.attendees[this.indexOfCurrentUser].isMuted)
                                }

                            },

                            async getAllAttendees() {
                                return await @this.chime_list_attendees();
                            },
                            async muteUser(externalUserId) {
                                return await @this.muteUser(externalUserId);
                            },
                            async unmuteUser(externalUserId) {
                                return await @this.unmuteUser(externalUserId);
                            },
                            async allowUser(externalUserId) {
                                return await @this.allowUser(externalUserId);
                            },
                            async disallowUser(externalUserId) {
                                return await @this.disallowUser(externalUserId);
                            },
                            async raiseHand(currentUserId) {
                                this.isRaiseHand = !this.isRaiseHand
                                if (this.isRaiseHand) {

                                    return await @this.lower(currentUserId);
                                } else {
                                    return await @this.upraise(currentUserId);
                                }


                            },

                            async changeVideoDevice(deviceId) {
                                await document.meetingSession.audioVideo.startVideoInput(
                                    deviceId);
                                await document.meetingSession.audioVideo.startLocalVideoTile();
                            },
                            async changeAudioDevice(deviceId) {
                                await document.meetingSession.audioVideo.startAudioInput(
                                    deviceId);
                            },
                            async initMeeting() {

                                let attendeeResponse = await @this.join_chime_meeting();
                                // In the usage examples below, you will use this meetingSession object.
                                let configuration = new window.chime.MeetingSessionConfiguration(
                                    meetingResponse.Meeting,
                                    attendeeResponse.Attendee);

                                // In the usage examples below, you will use this meetingSession object.
                                const logger = new window.chime.ConsoleLogger("ChimeMeetingLogs",
                                    window.chime.LogLevel.WARN);
                                const deviceController = new window.chime
                                    .DefaultDeviceController(logger);
                                document.meetingSession = new window.chime.DefaultMeetingSession(
                                    configuration,
                                    logger,
                                    deviceController
                                );
                                this.audioInputDevices = await document.meetingSession.audioVideo
                                    .listAudioInputDevices();
                                this.videoInputDevices = await document.meetingSession.audioVideo
                                    .listVideoInputDevices();

                                // await document.meetingSession.audioVideo.stopVideoInput();

                                document.meetingSession.audioVideo.addObserver({
                                    audioVideoDidStartConnecting: reconnecting => {
                                        this.reconnecting = reconnecting;
                                    },
                                    // videoTileDidUpdate is called whenever a new tile is created or tileState changes.
                                    videoTileDidUpdate: tileState => {
                                        if (this.queue.length() == 0) {
                                            console.error(tileState);
                                            this.queue.enqueue(tileState.tileId,
                                                500);
                                            //    document.meetingSession.audioVideo.bindVideoElement( tileState.tileId , document.getElementById("test-main"))
                                        } else if (this.queue.items.filter((qel) =>
                                                qel.element == tileState.tileId)
                                            .length == 0) {
                                            console.error(tileState);


                                            this.queue.enqueue(tileState.tileId,
                                                tileState.isContent || !
                                                tileState.localTile ? this.queue
                                                .front().priority + 1 : this
                                                .queue.rear().priority - 1)
                                        }


                                    },
                                    videoTileWasRemoved: tileId => {
                                        this.toggleCamera();
                                        this.queue.removeByValue(tileId);
                                        this.toggleCamera()
                                    },
                                });

                                await document.meetingSession.audioVideo.startAudioInput(this
                                    .audioInputDevices[0].deviceId);

                                await document.meetingSession.audioVideo.start();
                                this.audioStatus = await document.meetingSession.audioVideo
                                    .realtimeIsLocalAudioMuted();
                                if (this.videoInputDevices.length > 0) {
                                    await this.changeVideoDevice(this.videoInputDevices[0]
                                        .deviceId);
                                    this.videoStatus = true;
                                }
                                this.attendees = (await this.getAllAttendees())
                                    .AttendeeFullNames;
                                console.error(this.currentUserId)
                                console.error(this.attendees)
                                this.indexOfCurrentUser = await this.attendees.findIndex((
                                        element) => element.ExternalUserId == this
                                    .currentUserId)

                                console.error('hhhhhhh', this.indexOfCurrentUser)
                                console.error('hhhhhhh', this.attendees[this.indexOfCurrentUser]
                                    .isMuted)


                            }

                        }));
                    })
                    class QElement {
                        constructor(element, priority) {
                            this.element = element;
                            this.priority = priority;
                        }
                    }
                    class PriorityQueue {
                        constructor() {
                            this.items = [];
                            this.loopExceptFirst = [];
                            this.first = null;
                        }
                        enqueue(element, priority) {
                            let ele = this.items.filter((qe) => element == qe.element)[0] ?? null;
                            if (ele) {
                                ele.priority = priority;
                                this.items.sort((a, b) => b.priority - a.priority);
                                this.first = this.items[0];
                                this.updateLoopExceptFirst();
                                return;
                            }


                            let qElement = new QElement(element, priority);
                            let contain = false;
                            for (let i = 0; i < this.items.length; i++) {
                                if (this.items[i].priority < qElement.priority) {
                                    this.items.splice(i, 0, qElement);

                                    contain = true;
                                    break;
                                }
                            }
                            if (!contain) {
                                this.
                                items.push(qElement);
                            }
                            this.first = this.items[0];
                            this.updateLoopExceptFirst();

                        }
                        removeByValue(element) {
                            this.items = this.items.filter((qel) => qel.element != element)
                            this.first = this.items[0] ?? null;
                            this.updateLoopExceptFirst();

                        }
                        updateLoopExceptFirst() {
                            this.loopExceptFirst = [...this.items].slice(1)
                        }

                        dequeue() {
                            if (this.isEmpty())
                                return null;
                            let ele = this.items.shift();
                            this.first = this.items[0] ?? null;
                            this.updateLoopExceptFirst();
                            return ele;
                        }
                        front() {
                            if (this.isEmpty())
                                return null;
                            return this.items[0];
                        }
                        rear() {
                            if (this.isEmpty())
                                return null;
                            return this.items[this.items.length - 1];

                        }

                        isEmpty() {
                            return this.items.length == 0;

                        }

                        length() {
                            return this.items.length;
                        }
                    }
                </script>
            @endpush

        </div>
    @else
        <div x-data x-init="subscribeToChannel()" class="flex h-screen items-center justify-center">
            <p class="text-2xl">Not allowed</p>
        </div>

        <script>
            function subscribeToChannel() {
                window.Echo.private('App.Models.Lecture.{{ $lecture->id }}')
                    .listen('LectureUserDisallowed', (event) => {
                        location.reload();
                    });
            }
        </script>
    @endif
</div>
