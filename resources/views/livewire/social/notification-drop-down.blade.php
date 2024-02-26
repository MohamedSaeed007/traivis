<div x-data="{ open: false }" @keydown.window.escape.stop="open = false" @click.outside="open = false"
    class="relative flex">
    {{--    <span wire:click="testFCM" class="cursor-pointer text-red-500">Test FCM</span> --}}
    <span
        class="group/x ml-2 inline-block flex-shrink-0 cursor-pointer rounded-full bg-white p-1 text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2  md:ml-5"
        @click="open = !open">
        <span class="sr-only">View Notifications</span>
        <x-svg-icons.fi-rr-bell class="h-5 w-5" />
        @if ($notifications->count())
            <span
                class="absolute right-0 top-0 inline-flex -translate-y-1/2 translate-x-1/2 transform items-center justify-center rounded-full bg-traivis-500 px-2 py-1 text-xs font-bold leading-none text-white group-hover/x:bg-traivis-600">
                {{ $notifications->count() }}
            </span>
        @endif
    </span>

    <!--menu-->
    <div class="absolute right-0 top-7 z-10 transform" x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">

        <div class="mt-4 w-full md:mb-0">
            <div
                class="container mx-auto mx-auto flex w-96 flex-col justify-center rounded-b-lg bg-white shadow-lg ">

                @foreach ($notifications as $notification)
                    <div
                        class="flex items-start justify-start border-l-2 border-transparent bg-gray-200 bg-white py-4 transition-colors ease-in-out hover:border-traivis-500 hover:bg-traivis-50    ">
                        <div class="flex w-full items-start items-center">

                            <div
                                class="group flex inline-flex justify-start px-4 py-2 group-hover:font-bold md:justify-center md:py-0">
                                @php
                                    $notifierable = $notification->notifierable;
                                    switch (get_class($notifierable)) {
                                        case \App\Models\User::class:
                                            $routeName = 'user-profile-social';
                                            break;
                                        case \App\Models\Business::class:
                                            $routeName = 'business-profile-social';
                                            break;
                                    }
                                @endphp
                                <a href="{{ route($routeName, ['id' => $notifierable->id]) }}"
                                    class="flex items-center justify-center hover:w-auto group-hover:font-bold">
                                    <img class="group mr-4 h-8 w-8 rounded-full object-cover hover:ring-gray-700"
                                        src="{{ $notifierable ? $notifierable->avatar : 'https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80' }}"
                                        alt="">
                                    <div contenteditable="false" class="flex"></div>
                                    <p class="-ml-2 flex items-center truncate text-base font-bold font-medium text-gray-500 transition-colors hover:text-gray-700  "
                                        contenteditable="false">
                                        {{ $notifierable ? $notifierable->name : '' }}
                                    </p>
                                </a>
                            </div>
                            <a href="{{ $notification->url ?? 'javascript:void(0);' }}"
                                class="-ml-2 flex truncate text-gray-500 ">
                                {{ $notification->note_type }}
                            </a>
                            <span
                                class="ml-2">{{ $notification->created_at->shortAbsoluteDiffForHumans() }}</span>
                        </div>
                    </div>
                @endforeach

                <div class="mt-2 flex justify-center text-center ">
                    <a class="-ml-2 flex items-center truncate text-base font-bold font-medium text-gray-500 transition-colors hover:border-b-2 hover:border-traivis-500 hover:text-gray-700  "
                        href="#">Show more </a>
                </div>

            </div>
        </div>

    </div>
    <!--end menu-->

</div>
