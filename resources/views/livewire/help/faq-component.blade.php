<div class="transition-colors ">
    <div class="mx-auto flex h-screen">
        <aside
            class="sticky top-[72px] z-20 h-[90vh] flex-shrink-0 border-r border-slate-300 bg-white transition-all"
            x-data="{ SMopen: true }">
            <div class="">
                <button
                    :class="SMopen ?
                        'text-traivis-500 hover:text-gray-500 bg-traivis-50 hover:bg-slate-100 -right-5' :
                        'text-gray-500 hover:text-traivis-500 hover:bg-traivis-50 -right-16 shadow-md'"
                    class="group absolute -right-5 bottom-1/2 z-50 block h-fit w-fit translate-y-1/2 rounded-full border border-slate-300 bg-traivis-50 bg-white p-3 text-traivis-500 transition-all duration-200 focus-within:ring-0 hover:bg-slate-100 hover:text-gray-500 hover:shadow-md"
                    x-on:click="SMopen = ! SMopen">

                    <svg class="block h-5 w-5" fill="currentColor" height="512"
                        style="enable-background:new 0 0 512.051 512.051;" viewBox="0 0 512.051 512.051"
                        width="512" x="0px" xml:space="preserve" y="0px">
                        <g>
                            <path
                                d="M21.359,101.359h58.368c11.52,42.386,55.219,67.408,97.605,55.888c27.223-7.399,48.489-28.665,55.888-55.888h257.472   c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333H233.22C221.7,16.306,178.001-8.716,135.615,2.804   c-27.223,7.399-48.489,28.665-55.888,55.888H21.359c-11.782,0-21.333,9.551-21.333,21.333S9.577,101.359,21.359,101.359z">
                            </path>
                            <path
                                d="M490.692,234.692h-58.368c-11.497-42.38-55.172-67.416-97.552-55.92c-27.245,7.391-48.529,28.674-55.92,55.92H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h257.493c11.497,42.38,55.172,67.416,97.552,55.92   c27.245-7.391,48.529-28.674,55.92-55.92h58.368c11.782,0,21.333-9.551,21.333-21.333   C512.025,244.243,502.474,234.692,490.692,234.692z">
                            </path>
                            <path
                                d="M490.692,410.692H233.22c-11.52-42.386-55.219-67.408-97.605-55.888c-27.223,7.399-48.489,28.665-55.888,55.888H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h58.368c11.52,42.386,55.219,67.408,97.605,55.888   c27.223-7.399,48.489-28.665,55.888-55.888h257.472c11.782,0,21.333-9.551,21.333-21.333   C512.025,420.243,502.474,410.692,490.692,410.692z">
                            </path>
                        </g>
                    </svg>

                    <div
                        class="pointer-events-none absolute -left-[10px] bottom-full z-10 ml-2 w-32 rounded-lg bg-black px-1 py-2 text-center text-xs text-white opacity-0 group-hover:opacity-100">
                        Show/Hide Navigator
                        <svg class="absolute left-0 top-full h-2 w-full text-black" viewBox="0 0 255 255"
                            x="0px" xml:space="preserve" y="0px">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div>
                </button>
            </div>
            <div :class="SMopen ? 'shadow-none' : '-ml-80 opacity-0'"
                class="relative -ml-0 block flex h-full w-80 flex-col overflow-y-auto pb-20 opacity-100 shadow-none transition-all duration-200">
                <div
                    class="mt-2 flex flex-grow flex-col overflow-y-auto border-gray-200 bg-white pb-4 transition-colors ">
                    <div class="flex flex-grow flex-col">
                        <nav aria-label="Sidebar"
                            class="flex-1 space-y-1 bg-white px-7 pt-1 transition-colors "
                            x-data="">

                            @foreach ($faqGroups as $faqGroup)
                                <div class="space-y-1" x-data="{ open: false }"
                                    @if ($selectedFaqPage) x-init="open = '{{ $faqGroup->id }}' === '{{ $selectedFaqPage->faqGroup->id }}'" @endif>
                                    <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                    <button :aria-expanded="open.toString()" @click="open= !open"
                                        aria-controls="sub-menu-1" aria-expanded="false"
                                        class="group flex w-full items-center rounded-md bg-white py-2 pl-2 pr-1 text-left text-sm font-medium text-gray-600 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-traivis-500  "
                                        type="button">
                                        <!-- Heroicon name: outline/users -->

                                        <span class="flex-1 font-bold"> {{ $faqGroup->title }} </span>
                                        <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                                        <svg :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !open }"
                                            class="ml-3 h-4 w-4 flex-shrink-0 transform text-gray-300 transition-all duration-150 ease-in-out group-hover:text-gray-400"
                                            fill="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z">
                                            </path>
                                        </svg>

                                    </button>

                                    <!-- Expandable link section, show/hide based on state. -->
                                    <div class="space-y-1" id="sub-menu-3" x-collapse="" x-show="open">
                                        @foreach ($faqGroup->faqPages as $faqPage)
                                            <span
                                                class="@if ($selectedFaqPage && $selectedFaqPage->id == $faqPage->id) font-bold text-traivis-600 @else font-medium text-gray-600 @endif group flex w-full cursor-pointer items-center rounded-md py-2 pl-11 pr-2 text-sm hover:bg-gray-50 hover:text-gray-900"
                                                wire:click="selectPage({{ $faqPage->id }})">
                                                {{ $faqPage->title }} </span>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                        </nav>
                    </div>
                </div>

            </div>
        </aside>
        <main class="container mx-auto h-screen overflow-y-scroll pb-20 lg:col-span-9 xl:col-span-10">
            <div>
                <input type="text" wire:model.defer="search" wire:keydown.enter="doSearch">
                <button wire:click="doSearch"> Search </button>
                @error('search')
                    <span class="bg-red-100 text-red-800">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end p-4">

                <div class="group relative w-1/4">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg aria-hidden="true" class="h-5 w-5 text-gray-500 "
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2">
                            </path>
                        </svg>
                    </div>
                    <button
                        class="absolute bottom-0 right-0 top-0 hidden h-10 rounded-r-full bg-traivis-500 px-3 text-sm font-medium text-white transition-all hover:bg-traivis-400 focus:outline-none focus:ring-1 focus:ring-traivis-300 group-focus-within:opacity-100 sm:block">
                        Search
                    </button>
                    <input
                        class="h-10 w-10 w-full cursor-pointer rounded-full border border-gray-300 bg-white py-2 text-sm text-white placeholder-gray-500 transition-all duration-300 ease-in-out after:hidden focus-within:pl-8 focus:w-full focus:cursor-auto focus:border-traivis-500 focus:text-gray-800 focus:text-gray-800 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-traivis-500 peer-focus-within:pl-8 peer-focus:text-gray-800 sm:text-sm"
                        id="globalSearch" placeholder="" type="search">

                </div>

            </div>
            <div class="faqResult">
                @if ($searchResult)
                    @if ($searchResult->count())
                        <div> Found {{ $searchResult->count() }} records </div>
                    @endif

                    @forelse ($searchResult as $searchFaqSection)
                        <div class="p-6">
                            <h2 class="font-bold">
                                {!! $this->highlight($searchFaqSection->question, \App\Models\FaqSection::$q) !!}
                            </h2>
                            <div class="faqAnswer mt-6">
                                {!! $this->highlight($searchFaqSection->answer, \App\Models\FaqSection::$q) !!}
                            </div>
                        </div>
                    @empty
                        <div>The search has no result.</div>
                    @endforelse
                @elseif(!$selectedFaqPage)
                    <div> Select a page from the side menu.</div>
                @else
                    @foreach ($selectedFaqPage->faqSections as $faqSection)
                        <div class="p-6">
                            <h2 class="font-bold">{{ $faqSection->question }}</h2>
                            <div class="faqAnswer mt-6">
                                {!! $faqSection->answer !!}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </main>
    </div>

</div>
