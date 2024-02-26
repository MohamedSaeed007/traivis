<div x-data="{ divSize: window.innerWidth }" x-on:resize.window="divSize = window.innerWidth">
    <div :style="divSize > 700 && { margin: 'auto', width: '63%' }">
        <h3 class="p-4">Connection</h3>
        <hr />
        <div class="container mx-auto w-full">
            <ul role="list" class="grid grid-cols-1 gap-x-5 md:grid-cols-2">
                @forelse ($connections as $connection)
                @if($connection->connection?->id == $user?->id)
                <li
                        class="group flex w-full border-l-4 border-transparent p-4 hover:border-traivis-500 hover:bg-traivis-50">
                        <img class="h-10 w-10 rounded-full" src="{{ $connection->user?->avatar }}"
                            alt="">
                        <div class="ml-3 flex-1">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $connection->user?->name }}</p>
                            <p class="text-sm text-gray-500">{{ $connection->user?->email }}</p>
                        </div>
                        <div class="relative flex-shrink-0 pr-2" x-data="{ open: false }">
                            <button @click="open = !open" type="button"
                                class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-transparent bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg></button>
                            @if ($canBlock)
                                <div x-show="open" @click.outside="open = false"
                                    class="class="absolute bottom-0 right-10 mt-2 w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none""
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-50"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-50">

                                    <div class="py-1 text-center" role="none">
                                        <button wire:click="block({{ $connection->id }})">block</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </li>
                @else
                    <li
                        class="group flex w-full border-l-4 border-transparent p-4 hover:border-traivis-500 hover:bg-traivis-50">
                        <img class="h-10 w-10 rounded-full" src="{{ $connection->connection?->avatar }}"
                            alt="">
                        <div class="ml-3 flex-1">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $connection->connection?->name }}</p>
                            <p class="text-sm text-gray-500">{{ $connection->connection?->email }}</p>
                        </div>
                        <div class="relative flex-shrink-0 pr-2" x-data="{ open: false }">
                            <button @click="open = !open" type="button"
                                class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-transparent bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg></button>
                            @if ($canBlock)
                                <div x-show="open" @click.outside="open = false"
                                    class="class="absolute bottom-0 right-10 mt-2 w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none""
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-50"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-50">

                                    <div class="py-1 text-center" role="none">
                                        <button wire:click="block({{ $connection->id }})">block</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </li>
                @endif
                @empty
                @endforelse

            </ul>
        </div>
        @if ($connections)
            {{ $connections->links() }}
        @endif
        <!-- //////pending -->
        @if ($connectionsPending)
            <h3 class="p-4">Pending</h3>
            <hr />
            <div class="container mx-auto w-full">
                <ul role="list" class="grid grid-cols-1 gap-x-5 md:grid-cols-2">
                    @forelse ($connectionsPending as $connection)
                        <li
                            class="group flex w-full border-l-4 border-transparent p-4 hover:border-traivis-500 hover:bg-traivis-50">
                            <img class="h-10 w-10 rounded-full"
                                src="{{ $connection->connection?->avatar }}" alt="">
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    {{ $connection->connection?->name }}</p>
                                <p class="text-sm text-gray-500">{{ $connection->connection?->email }}
                                </p>
                            </div>
                            <div class="relative flex-shrink-0 pr-2">
                                <button class="m-1 p-1" wire:click="accept({{ $connection->id }})">
                                    <i class="las la-check-circle text-lg text-traivis-500"></i>
                                </button>
                                <button class="m-1 p-1" wire:click="block({{ $connection->id }})">
                                    <i class="lar la-times-circle text-lg text-red-500"></i>
                                </button>
                            </div>
                            {{--  <div class="flex-shrink-0 pr-2 relative" x-data="{ open: false }">
                        <button @click="open = !open" type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg></button>
                        @if ($canBlock)
                        <div x-show="open"
                        @click.outside="open = false"
                        class="absolute left-10 bottom-5 mt-2 w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-50"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-50">

                            <div class="py-1 text-center" role="none">
                                <button wire:click="block({{ $connection->id }})">block</button>
                            </div>
                            <div class="py-1 text-center" role="none">
                                <button wire:click="accept({{ $connection->id }})">accept</button>
                            </div>
                        </div>
                        @endif
                    </div>  --}}
                        </li>
                    @empty
                    @endforelse

                </ul>
            </div>
            @if ($connectionsPending)
                {{ $connectionsPending->links() }}
            @endif
        @endif
        <!-- ////////blocked  -->
        @if ($connectionsblocked)
            <h3 class="p-4">Blocked</h3>
            <hr />
            <div class="container mx-auto w-full">
                <ul role="list" class="grid grid-cols-1 gap-x-5 md:grid-cols-2">
                    @forelse ($connectionsblocked as $connection)
                        <li
                            class="group flex w-full border-l-4 border-transparent p-4 hover:border-traivis-500 hover:bg-traivis-50">
                            <img class="h-10 w-10 rounded-full"
                                src="{{ $connection->connection?->avatar }}" alt="">
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    {{ $connection->connection?->name }}</p>
                                <p class="text-sm text-gray-500">{{ $connection->connection?->email }}
                                </p>
                            </div>
                            <div class="relative flex-shrink-0 pr-2" x-data="{ open: false }">
                                <button @click="open = !open" type="button"
                                    class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-transparent bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <span class="sr-only">Open options</span>
                                    <!-- Heroicon name: solid/dots-vertical -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg></button>
                                @if ($canBlock)
                                    <div x-show="open" @click.outside="open = false"
                                        class="class="absolute bottom-0 right-10 mt-2 w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none""
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-50"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-50">

                                        <div class="py-1 text-center" role="none">
                                            <button
                                                wire:click="accept({{ $connection->id }})">unblock</button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </li>
                    @empty
                    @endforelse

                </ul>
            </div>
            @if ($connectionsblocked)
                {{ $connectionsblocked->links() }}
            @endif
        @endif
        <div style="min-height: 50px;">

        </div>
    </div>
</div>
