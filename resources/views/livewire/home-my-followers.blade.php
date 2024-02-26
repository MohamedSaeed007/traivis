<div x-data="{ openModel: @entangle('openModal') }">

    @if ($openModal)
        <section x-show="openModel" class="mt-10">

            <div aria-labelledby="modal-title" aria-modal="true" class="fixed inset-0 z-30 overflow-y-auto" role="dialog">
                <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">

                    <!---over BG---->
                    <div @click="openModel = false" aria-hidden="true"
                        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                    </div>
                    <!-- center-->
                    <span aria-hidden="true"
                        class="hidden sm:inline-block sm:h-screen sm:align-middle">&ZeroWidthSpace;</span>
                    <!---END over BG---->

                    <!-- popup content-->
                    <div
                        class="relative my-8 inline-block w-full transform rounded-lg bg-white p-4 text-left align-middle shadow-xl transition-all sm:w-2/3">

                        <!---->

                        <div class="">

                            <div class="h-screen w-full overflow-y-scroll scroll-smooth">
                                <div
                                    class="container mx-auto flex w-full flex-wrap justify-center rounded-lg bg-white p-6">
                                    <h1 class="w-full text-xl font-semibold text-gray-900">My Personal
                                        Profile Views</h1>

                                    <div
                                        class="mb-6 w-full max-w-fit cursor-pointer border-b-4 border-transparent p-0 transition-all hover:border-traivis-500 lg:w-1/3">
                                        <div class="flex w-fit flex-col items-center rounded-lg md:flex-row">
                                            <div class="mb-6 flex flex-col md:mb-6 md:mr-5 md:mt-6">
                                                <h2 class="text-6xl font-semibold tracking-tighter">
                                                    {{ $userViewsCount }}</h2>
                                                <h3 class="text-3xl font-light text-gray-600">
                                                    Views </h3>
                                                <p>In Last 90 Days</p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="container mx-auto w-full">
                                        <ul class="grid grid-cols-1 gap-x-5 md:grid-cols-2" role="list">

                                            @forelse ($userViews as $user)
                                                <li
                                                    class="flex w-full flex-row items-center rounded-sm px-4 py-2 transition-all hover:border-l-4 hover:border-traivis-500 hover:bg-traivis-50 hover:shadow-md">

                                                    <img loading="lazy" alt=""
                                                        class="h-16 w-16 rounded-full bg-cover object-cover"
                                                        src="{{ $user[0]->user?->avatar }}">

                                                    <div class="ml-3 flex-1 space-y-1">
                                                        <p class="text-sm font-medium text-gray-900">
                                                            {{ $user[0]->user?->first_name . ' ' . $user[0]->user?->last_name }}
                                                        </p>

                                                        <p class="text-sm text-gray-500">Viewed On :
                                                            {{ $user[0]->created_at?->format('Y-m-d') }}</p>

                                                        <div class="group relative text-sm text-gray-500">
                                                            <p>{{ count($user) }} Views</p>

                                                        </div>
                                                    </div>

                                                    <div class="relative flex flex-shrink-0 items-center pr-4">
                                                        @if (count($connection) == 0 || !in_array($user[0]->user_id, $connection))
                                                            <button wire:click="connect({{ $user[0]->user_id }})"
                                                                class="group inline-flex justify-center rounded-full border border-gray-300 bg-white p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500"
                                                                type="button">
                                                                <svg class="h-5 w-5 text-gray-400 group-hover:text-white"
                                                                    fill="currentColor" height="512" id="Outline"
                                                                    viewBox="0 0 24 24" width="512"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M23,11H21V9a1,1,0,0,0-2,0v2H17a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z">
                                                                    </path>
                                                                    <path
                                                                        d="M9,12A6,6,0,1,0,3,6,6.006,6.006,0,0,0,9,12ZM9,2A4,4,0,1,1,5,6,4,4,0,0,1,9,2Z">
                                                                    </path>
                                                                    <path
                                                                        d="M9,14a9.01,9.01,0,0,0-9,9,1,1,0,0,0,2,0,7,7,0,0,1,14,0,1,1,0,0,0,2,0A9.01,9.01,0,0,0,9,14Z">
                                                                    </path>
                                                                </svg>

                                                                <div
                                                                    class="absolute top-10 z-10 hidden group-hover:inline-block">
                                                                    <div class="rounded-lg bg-gray-700 p-2 text-white">
                                                                        Connect
                                                                    </div>
                                                                </div>

                                                            </button>
                                                        @else
                                                            <span
                                                                class="group inline-flex justify-center rounded-full border border-gray-300 bg-green-500 p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500"
                                                                type="button">
                                                                <svg class="h-5 w-5 text-gray-400 text-white"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                                    </path>
                                                                </svg>
                                                                <div
                                                                    class="absolute top-10 z-10 hidden group-hover:inline-block">
                                                                    <div class="rounded-lg bg-gray-700 p-2 text-white">
                                                                        Connected
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        @endif

                                                        <div x-data="{ topen: false }" class="relative">
                                                            <button type="button" @click.away="topen = false"
                                                                @click="topen = !topen" @keydown="topen = false"
                                                                class="ml-2 inline-flex h-8 w-8 items-center justify-center rounded-full bg-transparent bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                <span class="sr-only">Open options</span>

                                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <div class="absolute right-0 top-6 z-10 mt-2 w-40 divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                x-show="topen"
                                                                x-transition:enter="transition ease-out duration-100"
                                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                                x-transition:enter-start="transform opacity-0 scale-50"
                                                                x-transition:leave="transition ease-in duration-75"
                                                                x-transition:leave-end="transform opacity-0 scale-50"
                                                                x-transition:leave-start="transform opacity-100 scale-100"
                                                                style="display: none;">

                                                                <div class="py-1" role="none">

                                                                    <a href="{{ route('chat-conversations', ['id' => $user[0]->user_id, 'type' => 'p']) }}"
                                                                        class="group flex items-center px-4 py-2 text-sm text-gray-700">

                                                                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            height="512">
                                                                            <path
                                                                                d="M8.7,18H3c-1.493,0-3-1.134-3-3.666V9.294A9.418,9.418,0,0,1,8.349.023a9,9,0,0,1,9.628,9.628A9.419,9.419,0,0,1,8.7,18ZM20,9.08h-.012c0,.237,0,.474-.012.712C19.59,15.2,14.647,19.778,9.084,19.981l0,.015A8,8,0,0,0,16,24h5a3,3,0,0,0,3-3V16A8,8,0,0,0,20,9.08Z">
                                                                            </path>
                                                                        </svg>
                                                                        Message
                                                                    </a>

                                                                    @if ($user[0]->user_id)
                                                                        <a class="group flex items-center px-4 py-2 text-sm text-gray-700"
                                                                            href="{{ route('user-profile-social', $user[0]->user_id) }}"
                                                                            id="menu-item-1" role="menuitem"
                                                                            tabindex="-1">

                                                                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                                                fill="currentColor" height="512"
                                                                                viewBox="0 0 24 24" width="512"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g data-name="01 align center"
                                                                                    id="_01_align_center">
                                                                                    <path
                                                                                        d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z">
                                                                                    </path>
                                                                                </g>
                                                                            </svg>
                                                                            View Profile
                                                                        </a>
                                                                    @endif

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            @empty
                                            @endforelse

                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!---->

                    </div>
                    <!--END popup content -->

                    <!--END popup content -->

                </div>
            </div>
        </section>
    @endif
</div>
