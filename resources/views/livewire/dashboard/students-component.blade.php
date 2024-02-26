<div class="flex w-[calc(100%-5rem)] flex-col">
    <!-- Dash Content -->
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">My Students</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the students in your courses .</p>
            </div>
        </div>
        <div class="container mx-auto mt-8 flex flex-col overflow-y-auto">
            <div class="min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead
                            class="truncate whitespace-nowrap bg-gray-50 text-left text-sm font-semibold text-gray-500">
                            <tr>
                                <th class="px-3 py-3.5 text-center" contenteditable="false" scope="col">Name
                                </th>
                                <th class="px-3 py-3.5 text-center" contenteditable="false" scope="col">Email
                                </th>
                                <th class="px-3 py-3.5 text-center" contenteditable="false" scope="col">Courses
                                </th>
                                <th class="px-3 py-3.5 text-center" contenteditable="false" scope="col">Completion
                                    Rate
                                </th>
                                <th class="hidden px-3 py-3.5 text-center sm:inline-block" contenteditable="false"
                                    scope="col">Assignments
                                </th>
                                <th class="hidden px-3 py-3.5 text-center sm:inline-block" contenteditable="false"
                                    scope="col">Quizzes
                                </th>
                                {{-- <th class="px-3 py-3.5 text-center" scope="col">
                                Outstanding Tasks
                            </th> --}}
                                <th class="px-3 py-3.5 text-center" scope="col">
                                    <span class="sr-only">View</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @if ($students)
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <img alt="" class="h-10 w-10 rounded-full"
                                                        src="{{ $student->avatar }}">
                                                </div>
                                                <div class="ml-4">
                                                    <a class="font-medium text-gray-900"
                                                        href="#">{{ $student->name }} </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">

                                                <div class="ml-4">
                                                    <a class="font-medium text-gray-900"
                                                        href="#">{{ $student->email }} </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="group relative whitespace-nowrap px-3 py-4">
                                            <div class="text-center">
                                                {{ count($student->courses) }} Courses
                                            </div>
                                            <div class="absolute z-10 hidden group-hover:inline-block">
                                                <div class="rounded-lg bg-gray-700 p-2 text-white">
                                                    @foreach ($student->courses->pluck('title', 'id')->toArray() as $course)
                                                        {{ Str::limit($course, 20) }}
                                                        @if (!$loop->last)
                                                            <br>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-center">
                                            {{ (count($student->completes) / count($student->courses)) * 100 }} %
                                        </td>
                                        <td class="hidden whitespace-nowrap px-3 py-4 text-center sm:inline-block">
                                            <span class="flex items-center justify-center gap-x-3">
                                                {{-- <span class="group relative">
                                                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor"
                                                             viewBox="0 0 24 24">
                                                                <path id="Vector"
                                                                      d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 8V8.1L11.9502 8.1002V8H12.0498Z"
                                                                      stroke="#ffffff" stroke-width="2"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round">
                                                                </path>
                                                        </svg>
                                                        <span class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                            {{$student->assignments()->where('assignment_user.status','Pending')->count()}} Needs Action
                                                        </span>
                                                </span> --}}
                                                {{-- @if ($acceptedAssignments = $student->assignments->where('assignment_user.status', 'Accepted')->count()) --}}
                                                <span class="group relative">
                                                    <svg class="block h-5 w-5 text-green-600" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                        {{ $student->assignments->where('assignment_user.status', 'Accepted')->count() }}
                                                        Accepted
                                                    </span>
                                                </span>
                                                {{-- @endif --}}
                                                {{-- @if ($rejectedAssignments = $student->assignments->where('assignment_user.status', 'Rejected')->count()) --}}
                                                <span class="group relative">
                                                    <svg class="block h-5 w-5 text-red-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.836,.028C9.356-.207,5.961,1.067,3.509,3.521,1.057,5.977-.211,9.378,.029,12.854c.441,6.354,6.053,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.097,.454,12.836,.028Zm2.871,14.265c.391,.391,.391,1.023,0,1.414-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414l-2.293,2.293,2.293,2.293Z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                        {{ $student->assignments->where('assignment_user.status', 'Rejected')->count() }}
                                                        Rejected
                                                    </span>
                                                </span>
                                                {{-- @endif --}}
                                                {{-- @if ($pendingAssignments = $student->assignments->where('assignment_user.status', 'Pending')->count()) --}}
                                                <span class="group relative">
                                                    <svg class="block h-5 w-5 text-yellow-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                        {{ $student->assignments->where('assignment_user.status', 'Pending')->count() }}
                                                        Pending
                                                    </span>
                                                </span>
                                                {{-- @endif --}}
                                                {{-- @if (!$acceptedAssignments && !$rejectedAssignments && !$pendingAssignments)
                                                    N/A
                                                @endif --}}
                                            </span>
                                        </td>
                                        <td class="hidden whitespace-nowrap px-3 py-4 text-center sm:inline-block">
                                            <span class="flex items-center justify-center gap-x-3">
                                                {{-- <span class="group relative">
                                                        <svg class="w-8 h-8 text-yellow-500" fill="currentColor"
                                                             viewBox="0 0 24 24">
                                                                <path id="Vector"
                                                                      d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 8V8.1L11.9502 8.1002V8H12.0498Z"
                                                                      stroke="#ffffff" stroke-width="2"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round">
                                                                </path>
                                                        </svg>
                                                        <span class="z-50 font-normal text-xs pointer-events-none absolute top-8 left-1/2 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-white opacity-0 transition-all before:absolute before:left-1/2 before:-top-2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                            {{$student->attempts()->whereStatus('pending')->count()}} Needs Action
                                                        </span>
                                                </span> --}}
                                                {{-- @if ($passedAttempts = $student->attempts->where('status', 'Passed')->count()) --}}
                                                <span class="group relative">
                                                    <svg class="block h-5 w-5 text-green-600" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.836.028A12,12,0,0,0,.029,12.855C.47,19.208,6.082,24,13.083,24H19a5.006,5.006,0,0,0,5-5V12.34A12.209,12.209,0,0,0,12.836.028ZM18.7,9.712l-6.793,6.707a2,2,0,0,1-2.823,0L5.3,12.715a1,1,0,0,1,1.4-1.43l3.793,3.707,6.806-6.7a1,1,0,0,1,1.4,1.424Z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                        {{ $student->attempts->where('status', 'Passed')->count() }}
                                                        Passed
                                                    </span>
                                                </span>
                                                {{-- @endif --}}
                                                {{-- @if ($failedAttempts = $student->attempts->where('status', 'Failed')->count()) --}}
                                                <span class="group relative">
                                                    <svg class="block h-5 w-5 text-red-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12.836,.028C9.356-.207,5.961,1.067,3.509,3.521,1.057,5.977-.211,9.378,.029,12.854c.441,6.354,6.053,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.097,.454,12.836,.028Zm2.871,14.265c.391,.391,.391,1.023,0,1.414-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195,.195-.451,.293-.707,.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414l-2.293,2.293,2.293,2.293Z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                        {{ $student->attempts->where('status', 'Failed')->count() }}
                                                        Not Passed
                                                    </span>
                                                </span>
                                                {{-- @endif --}}
                                                {{-- @if ($pendingAttempts = $student->attempts->where('status', 'Pending')->count()) --}}
                                                <span class="group relative">
                                                    <svg class="block h-5 w-5 text-yellow-500" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="m16.551 12a12.556 12.556 0 0 0 4.406-7.449 3.943 3.943 0 0 0 -.918-3.151 4.017 4.017 0 0 0 -3.039-1.4h-9.995a4.014 4.014 0 0 0 -3.044 1.4 3.94 3.94 0 0 0 -.917 3.158 12.522 12.522 0 0 0 4.401 7.442 12.522 12.522 0 0 0 -4.4 7.444 3.94 3.94 0 0 0 .916 3.156 4.014 4.014 0 0 0 3.044 1.4h9.995a4.017 4.017 0 0 0 3.044-1.4 3.944 3.944 0 0 0 .918-3.156 12.557 12.557 0 0 0 -4.411-7.444zm1.277 8.559a1 1 0 0 1 -.828.441h-10a1 1 0 0 1 -.928-1.374 14.856 14.856 0 0 1 4.6-5.656l.7-.559a1 1 0 0 1 1.245 0l.69.551a15.013 15.013 0 0 1 4.61 5.662 1 1 0 0 1 -.089.935zm-2.479-1.559h-6.7a14.962 14.962 0 0 1 3.271-3.462l.08-.066.071.055a15.3 15.3 0 0 1 3.278 3.473z">
                                                        </path>
                                                    </svg>
                                                    <span
                                                        class="pointer-events-none absolute left-1/2 top-8 z-50 -translate-x-1/2 whitespace-nowrap rounded bg-black px-2 py-1 text-xs font-normal text-white opacity-0 transition-all before:absolute before:-top-2 before:left-1/2 before:-translate-x-1/2 before:border-4 before:border-transparent before:border-b-black before:content-[''] group-hover:opacity-100">
                                                        {{ $student->attempts->where('status', 'Pending')->count() }}
                                                        Pending
                                                    </span>
                                                </span>
                                                {{-- @endif --}}
                                            </span>
                                        </td>

                                        {{-- <td class="whitespace-nowrap px-3 py-4 text-center">
                                        {{ $student->assignments->where('pivot.assignment_submission_date', '<', 'assignment_due_date')->count() }}
                                    </td> --}}
                                        <td class="relative whitespace-nowrap py-4 pl-3 text-center">
                                            <div class="">
                                                <!--View Student -->
                                                <div @click.outside="stuOpen = false"
                                                    @keydown.window.escape.stop="stuOpen = false"
                                                    class="flex justify-center" x-data="{ stuOpen: false }">
                                                    <!----- button----------->
                                                    <button @click="stuOpen = !stuOpen" class="flex justify-center"
                                                        href="#" type="button">
                                                        <svg class="h-6 w-6" height="512" viewbox="0 0 24 24"
                                                            width="512" xmlns="http://www.w3.org/2000/svg">
                                                            <g data-name="01 align center" id="_01_align_center">
                                                                <path
                                                                    d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                </path>
                                                                <path
                                                                    d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <!-----END button----------->
                                                    <!-----Start popup window----------->
                                                    <section x-cloak x-show="stuOpen"
                                                        x-transition:enter="ease-out duration-100"
                                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:leave="ease-in duration-200"
                                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100">
                                                        <div aria-labelledby="modal-title" aria-modal="true"
                                                            class="fixed inset-0 z-30 overflow-y-auto" role="dialog">
                                                            <div
                                                                class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
                                                                <!---over BG---->
                                                                <div aria-hidden="true"
                                                                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                                                                </div>
                                                                <!-- center-->
                                                                <span aria-hidden="true"
                                                                    class="sm:inline-block sm:h-screen sm:align-middle">&#8203;</span>
                                                                <!---END over BG---->
                                                                <!-- popup content-->
                                                                <div
                                                                    class="relative my-8 inline-block w-[90%] w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all lg:w-2/3">
                                                                    <div class="">
                                                                        <div class="h-full w-full overflow-y-auto">
                                                                            <div
                                                                                class="container mx-auto w-full rounded-lg bg-white p-6">
                                                                                <!--Student header-->
                                                                                <div
                                                                                    class="flex flex-row items-center justify-between">
                                                                                    <div class="flex items-center">
                                                                                        <div class="flex-shrink-0">
                                                                                            <img alt=""
                                                                                                class="h-10 w-10 rounded-full bg-cover"
                                                                                                src="{{ $student->avatar }}">
                                                                                        </div>
                                                                                        <div class="ml-4">
                                                                                            <a class="whitespace-nowrap font-medium text-gray-900"
                                                                                                href="#">{{ $student->name }}</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <a
                                                                                        href="{{ route('chat-conversations', ['id' => $student->id, 'type' => 'p']) }}">
                                                                                        <button
                                                                                            class="group inline-flex justify-end rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">
                                                                                            <svg aria-hidden="true"
                                                                                                class="-ml-1 mr-2 h-5 w-5 text-gray-400 group-hover:text-white"
                                                                                                fill="currentColor"
                                                                                                height="512"
                                                                                                id="Outline"
                                                                                                viewBox="0 0 24 24"
                                                                                                width="512"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M24,16v5a3,3,0,0,1-3,3H16a8,8,0,0,1-6.92-4,10.968,10.968,0,0,0,2.242-.248A5.988,5.988,0,0,0,16,22h5a1,1,0,0,0,1-1V16a5.988,5.988,0,0,0-2.252-4.678A10.968,10.968,0,0,0,20,9.08,8,8,0,0,1,24,16ZM17.977,9.651A9,9,0,0,0,8.349.023,9.418,9.418,0,0,0,0,9.294v5.04C0,16.866,1.507,18,3,18H8.7A9.419,9.419,0,0,0,17.977,9.651Zm-4.027-5.6a7.018,7.018,0,0,1,2.032,5.46A7.364,7.364,0,0,1,8.7,16H3c-.928,0-1-1.275-1-1.666V9.294A7.362,7.362,0,0,1,8.49,2.018Q8.739,2,8.988,2A7.012,7.012,0,0,1,13.95,4.051Z">
                                                                                                </path>
                                                                                            </svg>
                                                                                            <span>Message</span>
                                                                                        </button>
                                                                                    </a>
                                                                                </div>
                                                                                <!--END student header-->
                                                                                <!--student summary-->
                                                                                <div class="">
                                                                                    <div
                                                                                        class="mt-5 flex flex-row flex-wrap items-center justify-between">
                                                                                        <div
                                                                                            class="w-full p-3 md:w-1/2 xl:w-1/4">
                                                                                            <div
                                                                                                class="shadow-dashboard items-center rounded-lg border bg-traivis-50 p-10 transition-all hover:bg-white">
                                                                                                <div
                                                                                                    class="-m-2 mb-7 flex flex-wrap items-end justify-center">
                                                                                                    <div
                                                                                                        class="w-auto">
                                                                                                        <h3
                                                                                                            class="text-3xl font-thin text-gray-900">
                                                                                                            Courses
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h2
                                                                                                    class="text-center text-5xl font-medium tracking-tighter text-gray-700">
                                                                                                    {{ count($student->courses) }}
                                                                                                </h2>
                                                                                                <p
                                                                                                    class="mx-auto mt-3 w-fit rounded-full border border-traivis-500 bg-traivis-50 px-2 py-1 text-center text-xs font-bold text-traivis-500">
                                                                                                    Total
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="w-full p-3 md:w-1/2 xl:w-1/4">
                                                                                            <div
                                                                                                class="shadow-dashboard items-center rounded-lg border bg-traivis-50 p-10 transition-all hover:bg-white">
                                                                                                <div
                                                                                                    class="-m-2 mb-7 flex flex-wrap items-end justify-center">
                                                                                                    <div
                                                                                                        class="w-auto">
                                                                                                        <h3
                                                                                                            class="text-3xl font-thin text-gray-900">
                                                                                                            Grade
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h2
                                                                                                    class="text-center text-5xl font-medium tracking-tighter text-gray-700">
                                                                                                    @php
                                                                                                        $calcScores = $student->attempts->sum('earned_percentage');
                                                                                                        $attemptsCount = count($student->attempts);
                                                                                                    @endphp
                                                                                                    {{ $attemptsCount ? $calcScores / $attemptsCount : 0 }}
                                                                                                    <span
                                                                                                        class="text-3xl">
                                                                                                        %
                                                                                                    </span>
                                                                                                </h2>
                                                                                                <p
                                                                                                    class="mx-auto mt-3 w-fit rounded-full border border-pink-500 bg-pink-50 px-2 py-1 text-center text-xs font-bold text-pink-500">
                                                                                                    Avg
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="w-full p-3 md:w-1/2 xl:w-1/4">
                                                                                            <div
                                                                                                class="shadow-dashboard items-center rounded-lg border bg-traivis-50 p-10 transition-all hover:bg-white">
                                                                                                <div
                                                                                                    class="-m-2 mb-7 flex flex-wrap items-end justify-center">
                                                                                                    <div
                                                                                                        class="w-auto">
                                                                                                        <h3
                                                                                                            class="truncate whitespace-nowrap text-3xl font-thin text-gray-900">
                                                                                                            Test
                                                                                                            Attempts
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h2
                                                                                                    class="text-center text-5xl font-medium tracking-tighter text-gray-700">
                                                                                                    {{ $attemptsCount }}
                                                                                                </h2>
                                                                                                <p
                                                                                                    class="mx-auto mt-3 w-fit rounded-full border border-green-500 bg-green-50 px-2 py-1 text-center text-xs font-bold text-green-500">
                                                                                                    Total
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="w-full p-3 md:w-1/2 xl:w-1/4">
                                                                                            <div
                                                                                                class="shadow-dashboard items-center rounded-lg border bg-traivis-50 p-10 transition-all hover:bg-white">
                                                                                                <div
                                                                                                    class="-m-2 mb-7 flex flex-wrap items-end justify-center">
                                                                                                    <div
                                                                                                        class="w-auto">
                                                                                                        <h3
                                                                                                            class="text-3xl font-thin text-gray-900">
                                                                                                            Payments
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <h2
                                                                                                    class="text-center text-5xl font-medium tracking-tighter text-gray-700">
                                                                                                    {{ number_format($student->payerTransactions->sum('product_price'), 1) ?? 0 }}
                                                                                                    <span
                                                                                                        class="text-3xl">
                                                                                                        $
                                                                                                    </span>
                                                                                                </h2>
                                                                                                <p
                                                                                                    class="mx-auto mt-3 w-fit rounded-full border border-indigo-500 bg-indigo-50 px-2 py-1 text-center text-xs font-bold text-indigo-500">
                                                                                                    Total
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--END student summary-->

                                                                                <!--Student Courses-->
                                                                                @foreach ($student->courses as $course)
                                                                                    {{-- @dd($course,$student->assignments,$student->lectures->where('course_id', 15)) --}}
                                                                                    <div class="px-2 text-gray-700">
                                                                                        <div class="mt-5 rounded-lg border border-gray-200"
                                                                                            x-data="{ open: false, openTab: false }">
                                                                                            <!--header-->
                                                                                            <div @click="open = !open"
                                                                                                class="flex cursor-pointer items-center bg-traivis-50 p-5 text-gray-500">
                                                                                                <div class="mr-5">
                                                                                                    <svg class="h-5 w-5"
                                                                                                        fill="currentColor"
                                                                                                        height="512"
                                                                                                        id="Layer_1"
                                                                                                        style="enable-background:new 0 0 512 512;"
                                                                                                        version="1.1"
                                                                                                        viewBox="0 0 512 512"
                                                                                                        width="512"
                                                                                                        x="0px"
                                                                                                        xml:space="preserve"
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                        y="0px">
                                                                                                        <path
                                                                                                            d="M470.549,111.573L313.237,36.629c-34.628-20.684-77.728-21.051-112.704-0.96L41.451,111.573  c-0.597,0.299-1.216,0.619-1.792,0.96c-37.752,21.586-50.858,69.689-29.272,107.441c7.317,12.798,18.08,23.284,31.064,30.266  l43.883,20.907V375.68c0.026,46.743,30.441,88.039,75.072,101.931c31.059,8.985,63.264,13.384,95.595,13.056  c32.326,0.362,64.531-4,95.595-12.949c44.631-13.891,75.046-55.188,75.072-101.931V271.104l42.667-20.395v175.957  c0,11.782,9.551,21.333,21.333,21.333c11.782,0,21.333-9.551,21.333-21.333v-256C512.143,145.615,492.363,122.473,470.549,111.573z   M384,375.787c0.011,27.959-18.129,52.69-44.8,61.077c-27.046,7.728-55.073,11.479-83.2,11.136  c-28.127,0.343-56.154-3.408-83.2-11.136c-26.671-8.388-44.811-33.118-44.8-61.077v-84.309l70.763,33.707  c17.46,10.368,37.401,15.816,57.707,15.765c19.328,0.137,38.331-4.98,54.976-14.805L384,291.477V375.787z M452.267,211.733  l-160.896,76.8c-22.434,13.063-50.241,12.693-72.32-0.96l-157.419-74.88c-17.547-9.462-24.101-31.357-14.639-48.903  c3.2-5.934,7.998-10.853,13.85-14.201l159.893-76.373c22.441-13.034,50.233-12.665,72.32,0.96l157.312,74.944  c11.569,6.424,18.807,18.555,18.965,31.787C469.354,193.441,462.9,205.097,452.267,211.733L452.267,211.733z" />
                                                                                                    </svg>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex-grow overflow-hidden font-bold">
                                                                                                    <a
                                                                                                        href="{{ route('instructor-dashboard-courseDetails', $course->id) }}">
                                                                                                        {{ Str::limit($course->title, 80) }}</a>
                                                                                                </div>
                                                                                                <div class="ml-5">
                                                                                                    <svg :class="open ?
                                                                                                        'rotate-90' :
                                                                                                        'rotate-0'"
                                                                                                        class="h-5 w-5 rotate-0 transition-transform"
                                                                                                        fill="currentColor"
                                                                                                        viewbox="0 0 24 24"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9,17.879V6.707A1,1,0,0,1,10.707,6l5.586,5.586a1,1,0,0,1,0,1.414l-5.586,5.586A1,1,0,0,1,9,17.879Z">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--End header-->

                                                                                            <!--course-->
                                                                                            <div class="p-5"
                                                                                                style="display: none;"
                                                                                                x-show="open"
                                                                                                x-transition:enter="transition-opacity ease-linear"
                                                                                                x-transition:enter-end="opacity-100"
                                                                                                x-transition:enter-start="opacity-0"
                                                                                                x-transition:leave="transition-opacity ease-linear"
                                                                                                x-transition:leave-end="opacity-0"
                                                                                                x-transition:leave-start="opacity-100">

                                                                                                <!--collapse content-->
                                                                                                <div
                                                                                                    class="flex flex-row flex-wrap p-2">

                                                                                                    <!--course information-->
                                                                                                    <div
                                                                                                        class="mb-5 w-full whitespace-nowrap md:w-1/2">
                                                                                                        <div
                                                                                                            class="mb-2 p-1 text-sm font-bold text-gray-500">
                                                                                                            Enroll
                                                                                                            Info
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="space-y-3 px-3">

                                                                                                            <div
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Booked
                                                                                                                    on
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    {{ Carbon\Carbon::parse($course->launch_at)->format('Y-m-d') }}
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Completed
                                                                                                                    on
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    @if ($complete = $student->completes->where('completable_id', $course->id)->first())
                                                                                                                        {{ Carbon\Carbon::parse($complete->completed_at)->format('Y-m-d') }}
                                                                                                                    @endif
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Highest
                                                                                                                    Score
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    {{ $student->attempts->where('course_id', $course->id)->max('earned_percentage') }}
                                                                                                                    %
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Course
                                                                                                                    Price
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    @php
                                                                                                                        $course_price = optional($student->payerTransactions->where('productable_id', $course->id))->product_price ?? 0;
                                                                                                                    @endphp
                                                                                                                    <span
                                                                                                                        class="text-sm font-bold text-green-500">
                                                                                                                        {{ $course_price > 0 ? '$' . $course_price : 'Free' }}
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div @click="openTab = 'quiz'"
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Quiz
                                                                                                                    Attempts
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    {{ $student->attempts->where('course_id', $course->id)->count() }}
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div @click="openTab = 'assign'"
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Assignments
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    {{ $student->assignments->where('course_id', $course->id)->count() }}
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div @click="openTab = 'attends'"
                                                                                                                wire:click="loadAttendanceRate({{ $student->id }},{{ $course->id }})"
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Attendance
                                                                                                                    Rate
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    @php
                                                                                                                        $lecture_durations = 0;
                                                                                                                        $total_student_attended_minutes = 0;
                                                                                                                        $attending_lectures = $student->lectures->where('course_id', $course->id);
                                                                                                                        $total_student_attended_minutes_ratio = 0;
                                                                                                                        foreach ($attending_lectures as $single_lecture) {
                                                                                                                            // if (!isset($single_lecture->users[0])) {
                                                                                                                            //     continue;
                                                                                                                            // }
                                                                                                                            $lecture_durations = $lecture_durations + ($single_lecture->instructor_attended_minutes == 0 ? $single_lecture->duration : $single_lecture->instructor_attended_minutes);
                                                                                                                            $total_student_attended_minutes = $total_student_attended_minutes + $single_lecture->pivot->attended_minutes;
                                                                                                                            $total_student_attended_minutes_ratio = $lecture_durations == 0 ? 0 : $total_student_attended_minutes / $lecture_durations;
                                                                                                                        }
                                                                                                                    @endphp
                                                                                                                    <span
                                                                                                                        title="Attended: {{ $total_student_attended_minutes }} minutes of Lecture total durations: {{ $lecture_durations }} minutes">
                                                                                                                        {{ number_format($total_student_attended_minutes_ratio * 100, 2) }}
                                                                                                                    </span>
                                                                                                                    %
                                                                                                                </p>
                                                                                                            </div>

                                                                                                            <div @click="openTab = 'cert'"
                                                                                                                wire:click="loadCertificate({{ $student->id }},{{ $course->id }})"
                                                                                                                class="flex cursor-pointer border-l border-gray-300 px-3 py-1 hover:border-traivis-500 hover:bg-traivis-50">
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                    Certificate
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="w-1/2">
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <!--tables-->
                                                                                                    <div
                                                                                                        class="w-full whitespace-nowrap md:w-1/2">

                                                                                                        <!--Quiz Attempts-->
                                                                                                        <div x-show="openTab === 'quiz'"
                                                                                                            class="overflow-y-auto"
                                                                                                            x-data="{ stuQuiz: false }">
                                                                                                            <p
                                                                                                                class="mb-3 font-bold">
                                                                                                                Quiz
                                                                                                                Attempts
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="shadow-dashboard rounded-xl border">
                                                                                                                <table
                                                                                                                    class="min-w-full text-center">
                                                                                                                    <thead
                                                                                                                        class="border-b-4 border-gray-300">
                                                                                                                        <tr
                                                                                                                            class="bg-traivis-50 font-medium">
                                                                                                                            <td
                                                                                                                                class="px-6 py-3">
                                                                                                                                Quiz
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="hidden px-6 py-3 lg:inline-block">
                                                                                                                                Attempt
                                                                                                                                Date
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="px-6 py-3">
                                                                                                                                Score
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="px-6 py-3">
                                                                                                                                Status
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </thead>

                                                                                                                    <tbody
                                                                                                                        class="cursor-pointer">
                                                                                                                        @foreach ($student->attempts->where('course_id', $course->id) as $attempt)
                                                                                                                            <tr class="hover:bg-traivis-50"
                                                                                                                                wire:click="$emit('openQuizReviewModal','{{ $attempt->id }}')">
                                                                                                                                <td
                                                                                                                                    class="p3-6 py-3">
                                                                                                                                    {{ $attempt->quiz->title ?? '' }}
                                                                                                                                </td>
                                                                                                                                <td
                                                                                                                                    class="hidden px-3 py-3 lg:inline-block">
                                                                                                                                    {{ \Carbon\Carbon::parse($attempt->created_at)->format('Y-m-d') }}
                                                                                                                                </td>
                                                                                                                                <td
                                                                                                                                    class="px-3 py-3">
                                                                                                                                    {{ $attempt->status != 'pending' ? $attempt->earned_percentage : 0 }}
                                                                                                                                    %
                                                                                                                                </td>
                                                                                                                                <td
                                                                                                                                    class="{{ $attempt->status == 'passed' ? 'text-green-500 font-bold' : '' }} {{ $attempt->status == 'failed' ? 'text-red-500 font-bold' : '' }} {{ $attempt->status == 'pending' ? 'text-yellow-500 font-bold' : '' }} px-6 py-3">
                                                                                                                                    {{ $attempt->status }}
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        @endforeach
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!---->

                                                                                                        <!-- Assignments-->
                                                                                                        <div x-show="openTab === 'assign'"
                                                                                                            class="overflow-y-auto">
                                                                                                            <p
                                                                                                                class="mb-3 font-bold">
                                                                                                                Assignments
                                                                                                            </p>
                                                                                                            <div
                                                                                                                class="shadow-dashboard rounded-xl border">
                                                                                                                <table
                                                                                                                    class="min-w-full text-center">
                                                                                                                    <thead
                                                                                                                        class="border-b-4 border-gray-300">
                                                                                                                        <tr
                                                                                                                            class="bg-traivis-50 font-medium">
                                                                                                                            <td
                                                                                                                                class="px-3 py-3">
                                                                                                                                Assignment
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="px-3 py-3">
                                                                                                                                Due
                                                                                                                                Date
                                                                                                                            </td>
                                                                                                                            <td
                                                                                                                                class="px-3 py-3">
                                                                                                                                Status
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </thead>
                                                                                                                    <tbody
                                                                                                                        class="cursor-pointer">
                                                                                                                        @foreach ($student->assignments->where('course_id', $course->id) as $assignment)
                                                                                                                            <tr wire:click="openAssignmentReviewModal({{ $assignment->id }},{{ $student->id }})"
                                                                                                                                class="hover:bg-traivis-50">
                                                                                                                                <td
                                                                                                                                    class="p3-6 py-3">
                                                                                                                                    {{ $assignment->title ?? '' }}
                                                                                                                                </td>
                                                                                                                                <td
                                                                                                                                    class="px-3 py-3">
                                                                                                                                    @if ($assignment->options['validity_option'] == 'until')
                                                                                                                                        {{ \Carbon\Carbon::parse($assignment->options['until'])->format('Y-m-d') }}
                                                                                                                                    @else
                                                                                                                                        {{ $assignment->pivot->end_time ? \Carbon\Carbon::parse($assignment->pivot->end_time)->format('Y-m-d') : 'Not Started' }}
                                                                                                                                    @endif
                                                                                                                                </td>
                                                                                                                                <td
                                                                                                                                    class="px-3 py-3">
                                                                                                                                    @if ($assignment->pivot?->assignment_submission_date)
                                                                                                                                        @if ($assignment->pivot->status == 'Accepted')
                                                                                                                                            <p
                                                                                                                                                class="font-bold text-green-500">
                                                                                                                                                Passed
                                                                                                                                                <br>
                                                                                                                                                Grade
                                                                                                                                                :
                                                                                                                                                {{ $assignment->pivot->grade }}
                                                                                                                                            </p>
                                                                                                                                        @endif
                                                                                                                                        @if ($assignment->pivot->status == 'Rejected')
                                                                                                                                            <p
                                                                                                                                                class="font-bold text-red-500">
                                                                                                                                                Failed
                                                                                                                                                <br>
                                                                                                                                                Grade
                                                                                                                                                :
                                                                                                                                                {{ $assignment->pivot->grade }}
                                                                                                                                            </p>
                                                                                                                                        @endif
                                                                                                                                        @if ($assignment->pivot->status == 'Pending')
                                                                                                                                            <p
                                                                                                                                                class="font-bold text-yellow-500">
                                                                                                                                                Submitted
                                                                                                                                                <br>
                                                                                                                                                {{ \Carbon\Carbon::parse($assignment->pivot->assignment_submission_date)->format('Y-m-d') }}
                                                                                                                                            </p>
                                                                                                                                        @endif
                                                                                                                                    @else
                                                                                                                                        @if ($assignment->pivot->end_time && \Carbon\Carbon::parse($assignment->pivot->end_time)->format('Y-m-d') < now())
                                                                                                                                            <p
                                                                                                                                                class="font-bold text-red-500">
                                                                                                                                                Expired
                                                                                                                                            </p>
                                                                                                                                        @else
                                                                                                                                            <p
                                                                                                                                                class="font-bold">
                                                                                                                                                Viewed
                                                                                                                                                by
                                                                                                                                                student<br>
                                                                                                                                                but
                                                                                                                                                not
                                                                                                                                                submitted
                                                                                                                                                yet
                                                                                                                                            </p>
                                                                                                                                        @endif
                                                                                                                                    @endif
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        @endforeach
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!---->
                                                                                                        @if ($loadAttendanceRates[$student->id][$course->id])
                                                                                                            <!--Attendance Rate-->
                                                                                                            <div x-show="openTab === 'attends'"
                                                                                                                class="overflow-y-auto">
                                                                                                                <livewire:dashboard.students.course-enroll-info-attendance-rate-component
                                                                                                                    :course_id="$course->id"
                                                                                                                    :student_id="$student->id"
                                                                                                                    wire:key="c-{{ $course->id }}-s-{{ $student->id }}-attends" />
                                                                                                            </div>
                                                                                                            <!---->
                                                                                                        @endif

                                                                                                        @if ($loadCertificates[$student->id][$course->id])
                                                                                                            <!-- Certificates-->
                                                                                                            <div x-show="openTab === 'cert'"
                                                                                                                class="">
                                                                                                                <livewire:dashboard.students.course-enroll-info-certificate-component
                                                                                                                    :courseId="$course->id"
                                                                                                                    :studentId="$student->id"
                                                                                                                    wire:key="c-{{ $course->id }}-s-{{ $student->id }}-certs" />
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                @endif
                                                                            </div>
                                                                            <!--End Tables-->

                                                                        </div>
                                                                        <!--END collapse content-->
                                                                    </div>

                                                                    <!--end course-->

                                                                </div>
                                                            </div>
                                @endforeach
                                <!--more courses-->
                                <!--End student courses-->

                                <button @click="stuOpen = false"
                                    class="group inline-flex justify-end rounded-full border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500  ">

                                    <span>Close</span>
                                </button>
                </div>
            </div>
        </div>
        <!---->
    </div>
    <!--END popup content -->
</div>
</div>
</section>
<!-----END popup window----------->
</div>
<!--END View student-->
</div>
</td>
</tr>
@endforeach
@endif
</tbody>
</table>

</div>
</div>
</div>
</div>
<!--Add Question-->
{{--    <div x-data="{ qopen: false }" @keydown.window.escape.stop="qopen = false" --}}
{{--         @click.outside="qopen = false" class="flex justify-center"> --}}
{{--        <!----- button-----------> --}}
{{--        <button @click="qopen = !qopen" type="button" class="relative w-full flex justify-center items-center px-2 h-32 transition hover:bg-traivis-500 hover:text-white hover:border-white border-gray-300 border-2 border-dashed rounded-lg cursor-pointer --}}
{{--                                                hover:bg-traivis-500 hover:text-white hover:border-traivis-500  focus:bg-traivis-500 focus:outline-none focus-within:text-white"> --}}
{{--            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" --}}
{{--                 aria-hidden="true"> --}}
{{--                <path fill-rule="evenodd" --}}
{{--                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" --}}
{{--                      clip-rule="evenodd"/> --}}
{{--            </svg> --}}
{{--            <span> Question</span> --}}
{{--        </button> --}}

{{--        <div class="fixed bottom-16 right-16 z-10 rounded-full bg-white p-2"> --}}
{{--            <div class="sr-only"> --}}
{{--                New student ! --}}
{{--            </div> --}}
{{--             <a href="{{route('instructor-dashboard-courseDetails')}}"> --}}

{{--                            <button  class="text-traivis-500 transition-colors hover:text-gray-500  md:right-60 lg:right-1/4"> --}}
{{--                                <svg class="h-12 w-12" data-name="Layer 1" fill="currentColor" height="512" id="Layer_1" stroke="" --}}
{{--                                     viewBox="0 0 24 24" --}}
{{--                                     width="512" xmlns="http://www.w3.org/2000/svg"> --}}
{{--                                    <path d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-6 6.515a1 1 0 0 0 -1-1h-2v-2a1 1 0 0 0 -2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 1-1z"/> --}}
{{--                                </svg> --}}
{{--                            </button> --}}

{{--                <button @click="qopen = !qopen" class="text-traivis-500 transition-colors hover:text-gray-500  md:right-60 lg:right-1/4"> --}}
{{--                    <svg class="h-12 w-12" data-name="Layer 1" fill="currentColor" height="512" id="Layer_1" stroke="" --}}
{{--                         viewBox="0 0 24 24" --}}
{{--                         width="512" xmlns="http://www.w3.org/2000/svg"> --}}
{{--                        <path d="m14 7v-6.54a6.977 6.977 0 0 1 2.465 1.59l3.484 3.486a6.954 6.954 0 0 1 1.591 2.464h-6.54a1 1 0 0 1 -1-1zm8 3.485v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515c.163 0 .324.013.485.024v6.976a3 3 0 0 0 3 3h6.976c.011.161.024.322.024.485zm-6 6.515a1 1 0 0 0 -1-1h-2v-2a1 1 0 0 0 -2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 1-1z"/> --}}
{{--                    </svg> --}}
{{--                </button> --}}
{{--             </a> --}}

{{--        </div> --}}

{{--        <button onclick="Livewire.emit('openModal', 'create-question', {{ json_encode(["quiz" => $quiz]) }})" --}}
{{--                type="button" class="relative w-full flex justify-center items-center px-2 h-32 transition hover:bg-traivis-500 hover:text-white hover:border-white border-gray-300 border-2 border-dashed rounded-lg cursor-pointer --}}
{{--                                                hover:bg-traivis-500 hover:text-white hover:border-traivis-500  focus:bg-traivis-500 focus:outline-none focus-within:text-white"> --}}
{{--            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" --}}
{{--                 aria-hidden="true"> --}}
{{--                <path fill-rule="evenodd" --}}
{{--                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" --}}
{{--                      clip-rule="evenodd"/> --}}
{{--            </svg> --}}
{{--            <span> Question</span> --}}
{{--        </button> --}}
{{--        <!-----END button-----------> --}}
{{--        = --}}
{{--        <!-----Start Question window-----------> --}}
{{--        <section x-cloak x-show="qopen" x-transition:enter="ease-out duration-100" --}}
{{--                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" --}}
{{--                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" --}}
{{--                 x-transition:leave="ease-in duration-200" --}}
{{--                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" --}}
{{--                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"> --}}

{{--            <div class="fixed inset-0 z-30 overflow-y-auto" aria-labelledby="modal-title" --}}
{{--                 role="dialog" aria-modal="true"> --}}
{{--                <div --}}
{{--                        class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0"> --}}

{{--                    <!---over BG----> --}}
{{--                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" --}}
{{--                         aria-hidden="true" @click="qopen = false"> --}}
{{--                    </div> --}}
{{--                    <!-- center--> --}}
{{--                    <span class="hidden sm:inline-block sm:h-screen sm:align-middle" --}}
{{--                          aria-hidden="true">&#8203;</span> --}}
{{--                    <!---END over BG----> --}}

{{--                    <!-- Question Box --> --}}
{{--                    <div --}}
{{--                            class="relative my-8 inline-block w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3"> --}}
{{--                        <form wire:submit.prevent="addStudent"> --}}

{{--                            <!--question row--> --}}
{{--                            <div class="flex flex-row space-x-2"> --}}

{{--                                <!--Question title--> --}}
{{--                                <div class="w-3/4 flex-col font-bold"> --}}
{{--                                    <div class="group relative"> --}}
{{--                                        <input type="text" id="qtitle" required --}}
{{--                                               wire:model="student.name" --}}
{{--                                               class="peer mt-1 h-10 w-full rounded-full border-gray-300 transition-colors focus:border-traivis-400 sm:truncate"> --}}
{{--                                        <label for="qtitle" --}}
{{--                                               class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"> --}}
{{--                                            Student Name </label> --}}

{{--                                    </div> --}}

{{--                                </div> --}}

{{--                                <div class="w-3/4 flex-col font-bold"> --}}
{{--                                    <div class="group relative"> --}}
{{--                                        <input type="text" id="qtitle" required --}}
{{--                                               wire:model="student.email" --}}
{{--                                               class="peer mt-1 h-10 w-full rounded-full border-gray-300 transition-colors focus:border-traivis-400 sm:truncate"> --}}
{{--                                        <label for="qtitle" --}}
{{--                                               class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"> --}}
{{--                                            Student Email </label> --}}

{{--                                    </div> --}}

{{--                                </div> --}}

{{--                                <div class="w-3/4 flex-col font-bold"> --}}
{{--                                    <div class="group relative"> --}}
{{--                                        <input type="text" id="qtitle" required --}}
{{--                                               wire:model="student.phone" --}}
{{--                                               class="peer mt-1 h-10 w-full rounded-full border-gray-300 transition-colors focus:border-traivis-400 sm:truncate"> --}}
{{--                                        <label for="qtitle" --}}
{{--                                               class="absolute left-2 top-5 flex h-2 transform items-center bg-white px-2 transition-all group-focus-within:top-2 group-focus-within:-translate-y-full group-focus-within:text-xs group-focus-within:font-medium peer-valid:top-2 peer-valid:-translate-y-full peer-valid:text-xs peer-valid:font-medium  peer-disabled:top-2 peer-disabled:-translate-y-full peer-disabled:text-xs peer-disabled:font-medium"> --}}
{{--                                            Student Phone </label> --}}

{{--                                    </div> --}}

{{--                                </div> --}}
{{--                                <!--END Question title--> --}}

{{--                            </div> --}}
{{--                            <!--end question content--> --}}

{{--                            <!-- Box buttons --> --}}
{{--                            <div class="flex-warp mt-5 flex space-x-5 sm:mt-6"> --}}
{{--                                <button type="button" --}}
{{--                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-gray-200 px-4 py-2 text-base font-medium text-black shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 sm:text-sm"> --}}
{{--                                    Cancel --}}
{{--                                </button> --}}

{{--                                <button type="submit" --}}
{{--                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-traivis-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-traivis-600 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 sm:text-sm"> --}}
{{--                                    Save --}}
{{--                                </button> --}}
{{--                            </div> --}}
{{--                            <!--END Box buttons --> --}}
{{--                        </form> --}}
{{--                    </div> --}}
{{--                    <!--END Question Box --> --}}

{{--                </div> --}}
{{--            </div> --}}
{{--        </section> --}}
{{--        <!-----END Question window-----------> --}}

{{--    </div> --}}
<!--END Add Question-->
@livewire('student-attempt-review')
@livewire('student-assignment-review')
<!-- Dash Content -->
</div>
