<div class="border-b border-gray-200 py-5">

    <div class="space-y-1">

        <a href="#"
            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 transition-colors hover:bg-traivis-100 ">
            <x-svg-icons.fi-rr-users
                class="-ml-1 mr-3 h-6 w-6 flex-shrink-0 text-gray-800 transition-colors group-hover:text-gray-500 " />
            <span class="truncate text-base font-bold text-gray-500">Connections</span>

        </a>

    </div>

    <div class="mt-3 space-y-2" aria-labelledby="communities-headline">
        @foreach ($connections as $connection)
            <a href="{{ route('user-profile-social', $connection->id) }}"
                class="group flex items-center rounded-md px-2 py-1 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-50 hover:text-gray-900  ">
                <div class="flex-shrink-0">
                    <img loading="lazy" class="mr-4 h-5 w-5 rounded-full" src="{{ $connection->avatar }}" alt="">
                </div>
                <div class="relative">
                    <!-- Online Status Dot -->
                    <div class="absolute -right-0 bottom-0 h-4 w-4 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                        title="User is online">
                    </div>
                </div>
                <span class="truncate"> {{ $connection->name }} </span>
            </a>
        @endforeach
    </div>

</div>
