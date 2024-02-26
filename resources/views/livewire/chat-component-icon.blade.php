<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div x-data="{ open: false }" @keydown.window.escape.stop="open = false" @click.outside="open = false"
        class="relative flex">

        <a href="#"
            class="group/x ml-2 md:ml-5 inline-block flex-shrink-0 rounded-full bg-white p-1 text-gray-400 transition-colors hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-traivis-500 focus:ring-offset-2 "
            @click="open = !open">
            <span class="sr-only">View Messages</span>

            <x-svg-icons.fi-rr-comments class="h-5 w-5" />
            @if ($unreadMessagesCount)
                <span
                    class="group-hover/x:bg-traivis-600 absolute top-0 right-0 inline-flex translate-x-1/2 -translate-y-1/2 transform items-center justify-center rounded-full bg-traivis-500 px-2 py-1 text-xs font-bold leading-none text-white">
                    {{ $unreadMessagesCount }}</span>
            @endif
        </a>

        <!--menu-->
        <div class="absolute right-0 top-7 z-10 transform" x-show="open"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95">

            <div class="mb-4 w-full md:mb-0">
                <div
                    class="h-100 container mx-auto flex w-96 flex-col justify-center overflow-y-auto rounded-b-lg rounded-b-lg bg-white py-4 shadow-lg ">
                    @forelse ($unreadMessages->take(5) as $unreadMessage)
                        <div
                            class="flex items-start justify-start border-l-2 border-transparent border-gray-200 bg-white bg-gray-200 py-4 transition-colors ease-in-out hover:border-traivis-500 hover:bg-traivis-50 ">
                            <div class="flex w-full items-start items-center">

                                <div
                                    class="group flex inline-flex justify-start px-4 py-2 group-hover:font-bold md:justify-center md:py-0">
                                    <a class="flex items-center justify-center hover:w-auto group-hover:font-bold"
                                        href="{{ route('chat-conversations', ['cid' => $unreadMessage->chatConversation->uuid]) }}">
                                        <img alt=""
                                            class="group mr-4 h-8 rounded-full object-cover hover:ring-gray-700"
                                            src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80">
                                        <div class="flex" contenteditable="false">
                                        </div>
                                        <p class="-ml-2 flex items-center truncate text-base font-medium font-bold text-gray-500 transition-colors hover:text-gray-700  "
                                            contenteditable="false">
                                            {{ $unreadMessage->chatParticipant->chatParticipant->name }}
                                        </p>
                                    </a>
                                </div>
                                <div class="-ml-2 flex truncate text-gray-500 ">
                                    {{ $unreadMessage->message }}
                                </div>

                            </div>
                        </div>
                    @empty
                        <div
                            class="flex items-center justify-center border-l-2 border-transparent border-gray-200 bg-white bg-gray-200 py-4 text-center transition-colors ease-in-out">
                            No unread messages
                        </div>
                    @endforelse

                    <div class="mt-2 flex justify-center text-center ">
                        <a class="-ml-2 flex items-center truncate text-base font-medium font-bold text-gray-500 transition-colors hover:border-b-2 hover:border-traivis-500 hover:text-gray-700  "
                            href="{{ route('chat-conversations') }}">{{ __('Show more') }}</a>
                    </div>

                </div>
            </div>

        </div>
        <!--end menu-->

    </div>
</div>
