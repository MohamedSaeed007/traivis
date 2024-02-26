<div x-data="{ divSize: window.innerWidth }" x-on:resize.window="divSize = window.innerWidth">
    <div :style="divSize > 700 && { margin: 'auto', width: '63%' }">
        @if ($canSeeFollowers)
        <h3 class="p-4">Followers ( {{ $followers->total() }})</h3>
        <hr />
        <div class="container mx-auto w-full">
            <ul role="list" class="grid grid-cols-1 gap-x-5 md:grid-cols-2">
                @forelse ($followers as $connection)
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
                        </div>
                    </li>
                
                @empty
                @endforelse

            </ul>
        </div>
        @if ($followers)
            {{ $followers->links() }}
        @endif
        @else
            <p>this page is blocked</p>
        @endif
        
        
        <div style="min-height: 50px;">

        </div>
    </div>
</div>
