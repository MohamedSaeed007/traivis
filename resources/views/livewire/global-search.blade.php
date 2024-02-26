<div class="flex w-full flex-1 justify-start">
    <div class="flex w-full items-center lg:w-full">
        <div class="w-full">
            <form wire:submit.prevent="searchFunction">
                <label for="default-search"
                    class="sr-only mb-2 text-sm font-medium text-gray-900 ">Search</label>
                <div class="group relative">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-500 "
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <button type="submit"
                        class="absolute bottom-0 right-0 top-0 hidden h-10 rounded-r-full bg-traivis-500 px-3 text-sm font-medium text-white transition-all hover:bg-traivis-400 focus:outline-none focus:ring-1 focus:ring-traivis-300 group-focus-within:opacity-100 sm:block">
                        Search
                    </button>
                    <input type="search" wire:model.defer="search" id="globalSearch"
                        class="h-10 w-10 w-full cursor-pointer rounded-full border border-gray-300 bg-white py-2 pl-8 text-sm text-gray-800 placeholder-gray-500 transition-all duration-300 ease-in-out after:hidden focus:w-full focus:cursor-auto focus:border-traivis-500 focus:text-gray-800 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-traivis-500 peer-focus-within:pl-8 peer-focus:text-gray-800 sm:text-sm"
                        {{--                        oldclass="h-10 w-10 w-full cursor-pointer rounded-full border border-gray-300 bg-white py-2 text-sm text-white placeholder-gray-500 transition-all duration-300 ease-in-out after:hidden focus-within:pl-8 focus:w-full focus:cursor-auto focus:border-traivis-500 focus:text-gray-800 text-gray-800 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-traivis-500 peer-focus-within:pl-8 peer-focus:text-gray-800 sm:text-sm" --}} placeholder="">
                </div>
            </form>
        </div>
    </div>
</div>
