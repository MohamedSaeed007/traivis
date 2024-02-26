<div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">
    <!--head-->
    {{-- <div>
        <input 
            @can('edit')
                wire:model='70z0mbol'
            @endcan
            @cannot('edit'))
                value="{$70z0mbol}" readonly
            @endcannot        
        >
    </div> --}}
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Biddings &Tenders</h1>
            <p class="flex flex-row  items-center mt-2 mb-5  text-sm font-semibold">
                @lang('Total')
                <span
                    class=" rounded-full p-3.5 px-1.5 w-fit h-5 flex justify-center items-center mx-2 bg-gray-400  font-bold text-white">
                    {{ $offers->count() }}
                </span>
                @lang('Offers for')
                <span class="ml-1 ">
                    {{ $singleBid->name }}
                </span>
            </p>
        </div>
    </div>
    <!--END header-->


    <!--content-->
    <section class="">
        <div class="container mx-auto">

            <!--tender header-->

            <!---->

            <!--tender header-->
            <div
                class="pb-5 px-4 whitespace-nowrap font-semibold text-gray-500 flex flex-row flex-wrap justify-between items-start">

                <div class="flex flex-col w-full md:w-1/2 lg:w-1/3 space-y-1">
                    <div class=" text-3xl flex flex-row items-center">
                        <div>
                            {{ $singleBid->name }}
                        </div>
                        <div class="whitespace-nowrap px-4 text-sm font-semibold text-coolGray-800 ">
                            @if ($singleBid->status)
                                <p
                                    class="inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-green-500 focus:outline-none">
                                    <span>@lang('Active')</span>
                                </p>
                            @else
                                <p
                                    class="inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-red-500 focus:outline-none">
                                    <span>@lang('not Active')</span>
                                </p>
                            @endif

                        </div>
                    </div>

                    <div class="flex flex-row space-x-5">
                        <div class="">
                            @forelse ($singleBid->categories as $category)
                                {{ $category->slug }} ,
                            @empty
                            @endforelse
                        </div>

                    </div>


                    <div class="flex flex-row space-x-5">
                        <div class="">
                            @lang('From') :-
                            {{ $singleBid->bidding_start_date ? date('jS M Y', strtotime($singleBid->bidding_start_date)) : '-' }}
                        </div>

                        <div class="">
                            @lang('To') :-
                            {{ $singleBid->bidding_end_date ? date('jS M Y', strtotime($singleBid->bidding_end_date)) : '-' }}
                        </div>
                    </div>


                </div>


                <!--bid winner-->
                @php
                    $hiredOffer = $offers->where('status', 'hired')->first();
                @endphp
                @if ($hiredOffer)
                <div class="flex flex-col w-full md:w-1/2 lg:w-1/3 space-y-3 py-5 md:py-0">

                    <!--Item-->
                    <li class=" flex shadow-sm rounded-full w-full relative group  hover:shadow-lg focus-within:shadow-md transition-all"
                        x-data="{ Topen: false, Fopen: false }">
                        <div
                            class="-mr-5 flex-shrink-0 flex items-center justify-center w-20 h-20 bg-green-500 group-hover:bg-green-400 rounded-full z-10 transition-all">
                            <img alt=""
                                class="rounded-full w-16 h-16 group-hover:w-20 group-hover:h-20 group-focus-within:w-16 group-focus-within:h-16 transition-all duration-100 bg-cover"
                                src="{{ asset('assets/images/cover.jpg') }}" />
                        </div>

                        <div
                            class=" pl-5 flex-1 flex items-center justify-end border-t border-r border-b border-gray-300 bg-traivis-50 group-hover:bg-white group-focus-within:bg-white group-hover:border-gray-200 rounded-r-full truncate ">


                            <!--label-->
                            <div class="">
                                <p
                                    class="absolute -top-5 right-8 w-fit inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-green-500 border-4 border-white focus:outline-none">
                                    Hired Bid</p>
                            </div>
                            <!---->

                            <!--item default-->
                            <div @click="Fopen = !Fopen"
                                class="relative flex flex-row items-center justify-between flex-1 px-4 py-2 text-lg font-semibold truncate">

                                <div class=" truncate">
                                    <a 
                                        class="text-gray-900 group-hover:text-gray-600">{{ $hiredOffer->business->business_name }}
                                    </a>
                                    <p class="text-gray-500 ">${{ $hiredOffer->price }}</p>
                                </div>

                                <!--popup iconmenu-->
                                <div class="z-10 flex-shrink-0">
                                    <button type="button"
                                        class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                        <span class="sr-only">Open options</span>
                                        <svg class="w-5 h-5" fill="currentColor" id="Layer_1" height="512"
                                            viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1">
                                            <path
                                                d="m17 14a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm-4 3h-5a1 1 0 0 0 0 2h5a1 1 0 0 0 0-2zm9-6.515v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515a6.958 6.958 0 0 1 4.95 2.05l3.484 3.486a6.951 6.951 0 0 1 2.051 4.949zm-6.949-7.021a5.01 5.01 0 0 0 -1.051-.78v4.316a1 1 0 0 0 1 1h4.316a4.983 4.983 0 0 0 -.781-1.05zm4.949 7.021c0-.165-.032-.323-.047-.485h-4.953a3 3 0 0 1 -3-3v-4.953c-.162-.015-.321-.047-.485-.047h-4.515a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3z" />
                                        </svg>
                                    </button>
                                </div>
                                <!---->
                            </div>
                            <!--END item default-->


                            <!--popup-->
                            <div class="fixed top-24 left-0 right-0 lg:w-2/5 md:w-3/5 w-4/5 h-fit p-6 mx-auto bg-white rounded-2xl shadow-2xl"
                                style="z-index: 99" x-show="Fopen" x-cloak @keydown.window.escape.stop="Fopen = false"
                                @click.outside="Fopen = false">
                                <div class="flex flex-col w-full justify-items-center relative text-gray-500">



                                    <div class="">
                                        <p
                                            class="absolute -top-9 -right-3 w-fit inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-green-500 border-4 border-white focus:outline-none">
                                            Hired</p>
                                    </div>

                                    <div class="flex flex-row justify-between items-center text-xl font-bold">
                                        <div class="items-center flex flex-row mr-5">
                                            <div class="flex-shrink-0 flex items-center justify-center rounded-full">
                                                <img alt="" class="rounded-full w-16 h-16 bg-cover"
                                                    src="avatar.png" />
                                            </div>
                                            <div class="px-3 truncate  ">



                                                <p class=" truncate whitespace-pre-wrap"><span>
                                                        {{ $hiredOffer->business->business_name }} </span>
                                                    <span class="font-medium">Offer</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="text-3xl">${{ $hiredOffer->price }}</p>
                                    </div>


                                    <!--bid info-->
                                    <div class="flex flex-col space-y-2 font-semibold py-5 text-base ">
                                        <div
                                            class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                            <div class="col-span-3 truncate ">
                                                <div class="mx-auto flex flex-row items-center ">
                                                    <svg fill="currentColor" class="mr-3  w-5 h-5" id="Layer_1"
                                                        height="512" viewBox="0 0 24 24" width="512"
                                                        xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                                        <path
                                                            d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                    </svg>
                                                    <span>{{ $singleBid->name }}</span>
                                                </div>
                                            </div>
                                            <div class="col-span-3 truncate">
                                                <div class="mx-auto flex flex-row items-center ">
                                                    <svg fill="currentColor" class="mr-3  w-5 h-5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                        id="Capa_1" x="0px" y="0px"
                                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                        xml:space="preserve" width="512" height="512">
                                                        <g>
                                                            <path
                                                                d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z" />
                                                            <path
                                                                d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z" />
                                                        </g>
                                                    </svg>
                                                    <span>  @forelse ($singleBid->categories as $category)
                                                        {{ $category->slug }} ,
                                                    @empty
                                                    @endforelse</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                            <div class="col-span-3 relative">
                                                <p class="peer"><span class="text-black font-medium text-xs"> From
                                                    </span>{{ $singleBid->bidding_start_date ? date('jS M Y', strtotime($singleBid->bidding_start_date)) : '-' }}
                                                </p>
                                                <p
                                                    class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    Start Date</p>

                                            </div>
                                            <div class="col-span-3 relative">
                                                <p class="peer"><span class="text-black font-medium text-xs"> To
                                                    </span>{{ $singleBid->bidding_end_date ? date('jS M Y', strtotime($singleBid->bidding_start_date)) : '-' }}
                                                </p>
                                                <p
                                                    class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    End Date</p>
                                            </div>
                                        </div>

                                        <div
                                            class="py-2 mt-5 flex flex-col cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2 text-justify">
                                            <div class="text-sm text-black">
                                                Bider Note
                                            </div>
                                            <div class="truncate whitespace-pre-wrap">{{ $hiredOffer->description }}</div>
                                        </div>
                                    </div>


                                    <!--bid files-->
                                    <div class="flex flex-row justify-between items-center mb-3 truncate">
                                        <div
                                            class="flex flex-row flex-1 border-2 p-5 mr-5 truncate rounded-lg items-center space-x-10 hover:overflow-x-scroll">
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>
                                            <a 
                                                class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                <svg fill="currentColor" class="h-8 peer"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                </svg>
                                                <p
                                                    class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                    File Name</p>
                                            </a>


                                        </div>
                                        <a  class="text-traivis-500 hover:text-traivis-400">
                                            <svg fill="currentColor" class="h-8"
                                                xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                                viewBox="0 0 24 24" width="512" height="512">
                                                <path
                                                    d="M18.348,7.23c-1.311-3.151-4.395-5.23-7.848-5.23C5.813,2,2,5.813,2,10.5c0,.551,.053,1.097,.157,1.633-1.347,1.032-2.157,2.646-2.157,4.367,0,3.032,2.243,5.5,5,5.5h11.5c4.136,0,7.5-3.364,7.5-7.5,0-3.467-2.344-6.437-5.652-7.27Zm-4.934,10.184c-.39,.39-.902,.585-1.414,.585s-1.024-.195-1.414-.585l-3.293-3.293,1.414-1.414,2.293,2.293v-6h2v6l2.293-2.293,1.414,1.414-3.293,3.293Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <!--END bid files-->


                                </div>

                            </div>
                            <div x-show="Fopen" x-cloak class="bg-black opacity-50 inset-0 fixed h-screen z-50"></div>
                            <!--END popup-->



                        </div>
                    </li>
                    <!--END Item-->
                </div>
                @endif
               
                <!--end bid winner-->


            </div>
            <!--End tender header-->




            <!--Bids Details-->
            <section class="bg-coolGray-50 py-4">
                <div class="container mx-auto">

                    <section>
                        <div class="container px-4 mx-auto">
                            <div class="flex flex-wrap -m-4 relative">
                                @php
                                    $receivedOffers = $offers->where('status', 'received');
                                @endphp
                                <div class="w-full lg:w-1/3 p-2">
                                    <div class="pt-3 px-6  bg-white rounded border-t-4 border-traivis-500 shadow">
                                        <div class="flex justify-between items-center pb-3" contenteditable="false">
                                            <h3 class="font-medium" contenteditable="false">Received Bids </h3><span
                                                class="flex justify-center items-center w-6 h-6 rounded bg-traivis-500 text-white text-xs">{{ $receivedOffers->count() }}</span>
                                        </div>
                                    </div>



                                    <div class="relative">

                                        <ul role="list"
                                            class="pt-3 flex flex-col space-y-3 pr-3 h-96 overflow-y-auto">


                                            @forelse ($receivedOffers as $receivedOffer )
                                                <li class=" flex shadow-sm rounded-full w-full relative group  hover:shadow-lg focus-within:shadow-md transition-all"
                                                    x-data="{ Topen: false, Fopen: false }">
                                                    <div
                                                        class="-mr-5 flex-shrink-0 flex items-center justify-center w-16 h-16 bg-traivis-500 group-hover:bg-traivis-400 rounded-full z-10 transition-all">
                                                        <img alt=""
                                                            class="rounded-full w-14 h-14 group-hover:w-16 group-hover:h-16 group-focus-within:w-16 group-focus-within:h-16 transition-all duration-100 bg-cover"
                                                            src="{{ asset('assets/images/cover.jpg') }}" />
                                                    </div>

                                                    <div
                                                        class="pl-5 flex-1 flex items-center justify-end border-t border-r border-b border-gray-300 bg-traivis-50 group-hover:bg-white group-focus-within:bg-white group-hover:border-gray-200 rounded-r-full truncate ">


                                                        <!--item default-->
                                                        <div :class="Topen ? ' hidden' : ' block'"
                                                            @click="Fopen = !Fopen"
                                                            class="relative flex flex-row items-center justify-between flex-1 px-4 py-2 text-sm font-semibold truncate">

                                                            <div class=" truncate">
                                                                <a 
                                                                    class="text-gray-900 group-hover:text-gray-600">{{ $receivedOffer->business->business_name }}</a>
                                                                <p class="text-gray-500 ">${{ $receivedOffer->price }}
                                                                </p>
                                                            </div>

                                                            <!--popup iconmenu-->
                                                           
                                                            <div class="z-10 flex-shrink-0">
                                                                <button type="button"
                                                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                                                    <span class="sr-only">Open options</span>
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                        id="Layer_1" height="512"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1">
                                                                        <path
                                                                            d="m17 14a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm-4 3h-5a1 1 0 0 0 0 2h5a1 1 0 0 0 0-2zm9-6.515v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515a6.958 6.958 0 0 1 4.95 2.05l3.484 3.486a6.951 6.951 0 0 1 2.051 4.949zm-6.949-7.021a5.01 5.01 0 0 0 -1.051-.78v4.316a1 1 0 0 0 1 1h4.316a4.983 4.983 0 0 0 -.781-1.05zm4.949 7.021c0-.165-.032-.323-.047-.485h-4.953a3 3 0 0 1 -3-3v-4.953c-.162-.015-.321-.047-.485-.047h-4.515a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                         
                                                            <!---->
                                                        </div>
                                                        <!--END item default-->


                                                        <!--popup-->
                                                        <div class="fixed top-24 left-0 right-0 lg:w-2/5 md:w-3/5 w-4/5 h-fit p-6 mx-auto bg-white rounded-2xl shadow-2xl"
                                                            style="z-index: 99" x-show="Fopen" x-cloak
                                                            @keydown.window.escape.stop="Fopen = false"
                                                            @click.outside="Fopen = false">
                                                            <div
                                                                class="flex flex-col w-full justify-items-center relative text-gray-500">



                                                                <div class="">
                                                                    <p
                                                                        class="absolute -top-9 -right-3 w-fit inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-traivis-500 border-4 border-white focus:outline-none">
                                                                        Received</p>
                                                                </div>

                                                                <div
                                                                    class="flex flex-row justify-between items-center text-xl font-bold">
                                                                    <div class="items-center flex flex-row mr-5">
                                                                        <div
                                                                            class="flex-shrink-0 flex items-center justify-center rounded-full">
                                                                            <img alt=""
                                                                                class="rounded-full w-16 h-16 bg-cover"
                                                                                src="{{ asset('assets/images/cover.jpg') }}" />
                                                                        </div>
                                                                        <div class="px-3 truncate  ">
                                                                            <p
                                                                                class="font-bold truncate whitespace-pre-wrap">
                                                                                <span>{{ $receivedOffer->business->business_name }}</span>
                                                                                <span class="font-medium">Offer</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-3xl">${{ $receivedOffer->price }}
                                                                    </p>
                                                                </div>


                                                                <!--bid info-->
                                                                <div
                                                                    class="flex flex-col space-y-2 font-semibold py-5 text-base ">
                                                                    <div
                                                                        class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                                                        <div class="col-span-3 truncate ">
                                                                            <div
                                                                                class="mx-auto flex flex-row items-center ">
                                                                                <svg fill="currentColor"
                                                                                    class="mr-3  w-5 h-5"
                                                                                    id="Layer_1" height="512"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    data-name="Layer 1">
                                                                                    <path
                                                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                                                </svg>
                                                                                <span> {{ $singleBid->name }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-span-3 truncate">
                                                                            <div
                                                                                class="mx-auto flex flex-row items-center ">
                                                                                <svg fill="currentColor"
                                                                                    class="mr-3  w-5 h-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    version="1.1" id="Capa_1"
                                                                                    x="0px" y="0px"
                                                                                    viewBox="0 0 512 512"
                                                                                    style="enable-background:new 0 0 512 512;"
                                                                                    xml:space="preserve"
                                                                                    width="512" height="512">
                                                                                    <g>
                                                                                        <path
                                                                                            d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z" />
                                                                                        <path
                                                                                            d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z" />
                                                                                    </g>
                                                                                </svg>
                                                                                <span>
                                                                                    @forelse ($singleBid->categories as $category)
                                                                                        {{ $category->slug }} ,
                                                                                    @empty
                                                                                    @endforelse
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                                                        <div class="col-span-3 relative">



                                                                            <p class="peer">
                                                                                <span
                                                                                    class="text-black font-medium text-xs">
                                                                                    From </span>
                                                                                {{ $singleBid->bidding_start_date ? date('jS M Y', strtotime($singleBid->bidding_start_date)) : '-' }}
                                                                            </p>
                                                                            <p
                                                                                class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                Start Date</p>

                                                                        </div>
                                                                        <div class="col-span-3 relative">
                                                                            <p class="peer"><span
                                                                                    class="text-black font-medium text-xs">
                                                                                    To
                                                                                </span>{{ $singleBid->bidding_end_date ? date('jS M Y', strtotime($singleBid->bidding_end_date)) : '-' }}
                                                                            </p>
                                                                            <p
                                                                                class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                End Date</p>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="py-2 mt-5  flex flex-col cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2 text-justify">
                                                                        <div class="text-sm text-black">
                                                                            Offer Note
                                                                        </div>
                                                                        <div class="truncate whitespace-pre-wrap">
                                                                            {{ $singleBid->note }}
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!--bid files-->
                                                                <div
                                                                    class="flex flex-row justify-between items-center mb-3 truncate">
                                                                    <div
                                                                        class="flex flex-row flex-1 border-2 p-5 mr-5 truncate rounded-lg items-center space-x-10 hover:overflow-x-scroll">
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>


                                                                    </div>
                                                                    <a 
                                                                        class="text-traivis-500 hover:text-traivis-400">
                                                                        <svg fill="currentColor" class="h-8"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            height="512">
                                                                            <path
                                                                                d="M18.348,7.23c-1.311-3.151-4.395-5.23-7.848-5.23C5.813,2,2,5.813,2,10.5c0,.551,.053,1.097,.157,1.633-1.347,1.032-2.157,2.646-2.157,4.367,0,3.032,2.243,5.5,5,5.5h11.5c4.136,0,7.5-3.364,7.5-7.5,0-3.467-2.344-6.437-5.652-7.27Zm-4.934,10.184c-.39,.39-.902,.585-1.414,.585s-1.024-.195-1.414-.585l-3.293-3.293,1.414-1.414,2.293,2.293v-6h2v6l2.293-2.293,1.414,1.414-3.293,3.293Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <!--END bid files-->



                                                                <!--act buttons-->
                                                                
                                                                @can('bidding_offer_edit')
                                                                    <div
                                                                        class="flex flex-row justify-evenly items-center px-3 pt-5 ">
                                                                        <button 
                                                                            class="px-2 py-1 font-bold text-md rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-indigo-500 hover:border-white transition-all"wire:click='changeOfferStatus( "shortlisted",{{ $receivedOffer->id }})'>Shortlist</button>
                                                                        <button 
                                                                            class="px-2 py-1 font-bold text-md rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-500 hover:border-white transition-all" wire:click='changeOfferStatus("rejected",{{ $receivedOffer->id }})' >Reject</button>
                                                                        @if (!$hiredOffer)
                                                                        
                                                                            <button 
                                                                            class="px-2 py-1 font-bold text-md rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-green-500 hover:border-white transition-all" wire:click='changeOfferStatus("hired",{{ $receivedOffer->id }})' >Hire</button>
                                                                        
                                                                        @endif
                                                                    </div>
                                                                @endcan
                                                            </div>

                                                        </div>
                                                        <div x-show="Fopen" x-cloak
                                                            class="bg-black opacity-50 inset-0 fixed h-screen z-50">
                                                        </div>
                                                        <!--END popup-->


                                                        @can('bidding_offer_edit')
                                                        <!--quick act-->
                                                        <div class="z-0 flex flex-1 flex-row py-2 text-sm h-14 items-center justify-evenly space-x-2"
                                                            x-show="Topen" x-cloak
                                                            @keydown.window.escape.stop="Topen = false"
                                                            @click.outside="Topen = false">

                                                            <button 
                                                                class="px-2 py-1 font-bold text-sm rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-indigo-500 hover:border-white transition-all" wire:click='changeOfferStatus("shortlisted",{{ $receivedOffer->id }})'>Shortlist</button>
                                                            <button 
                                                                class="px-2 py-1 font-bold text-sm rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-500 hover:border-white transition-all" wire:click='changeOfferStatus("rejected",{{ $receivedOffer->id }})' >Reject</button>
                                                            @if (!$hiredOffer)
                                                            
                                                                <button 
                                                                class="px-2 py-1 font-bold text-sm rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-green-500 hover:border-white transition-all" wire:click='changeOfferStatus("hired",{{ $receivedOffer->id }})' >Hire</button>
                                                            
                                                            @endif
                                                        </div>
                                                        @endcan
                                                        <!--END quick act-->


                                                        <!--Option button-->
                                                        @can('bidding_offer_edit')
                                                        <div class="z-10 flex-shrink-0 pr-2 ">
                                                            <button @click="Topen = !Topen" type="button"
                                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                                                <span class="sr-only">Open options</span>
                                                                <svg class="w-5 h-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        @endcan
                                                        <!--END Option button-->

                                                    </div>
                                                </li>
                                            @empty

                                            @endforelse
                                            <!--Item-->

                                            <!--END Item-->





                                        </ul>
                                    </div>


                                </div>








                                @php
                                    $shortListedOffers = $offers->where('status', 'shortlisted');
                                @endphp
                                <div class="w-1/2 lg:w-1/3  p-2 ">
                                    <div class="pt-3 px-6 bg-white rounded border-t-4 shadow border-indigo-500">
                                        <div class="flex justify-between items-center pb-3">
                                            <h3 class="font-medium" contenteditable="false">Shortlisted </h3><span
                                                class="flex justify-center items-center w-6 h-6 rounded text-white text-xs bg-indigo-500"
                                                contenteditable="false">{{ $shortListedOffers->count() }}</span>
                                        </div>
                                    </div>

                                    <div class="relative">
                                        <ul role="list"
                                            class="pt-3 flex flex-col space-y-2 w-full  h-96 overflow-y-auto">


                                            @forelse ($shortListedOffers as $shortListedOffer )
                                                <li class=" flex shadow-sm rounded-full w-full relative group  hover:shadow-lg focus-within:shadow-md transition-all"
                                                    x-data="{ Topen: false, Fopen: false }">
                                                    <div
                                                        class="-mr-5 flex-shrink-0 flex items-center justify-center w-16 h-16 bg-traivis-500 group-hover:bg-traivis-400 rounded-full z-10 transition-all">
                                                        <img alt=""
                                                            class="rounded-full w-14 h-14 group-hover:w-16 group-hover:h-16 group-focus-within:w-16 group-focus-within:h-16 transition-all duration-100 bg-cover"
                                                            src="{{ asset('assets/images/cover.jpg') }}" />
                                                    </div>

                                                    <div
                                                        class="pl-5 flex-1 flex items-center justify-end border-t border-r border-b border-gray-300 bg-traivis-50 group-hover:bg-white group-focus-within:bg-white group-hover:border-gray-200 rounded-r-full truncate ">


                                                        <!--item default-->
                                                        <div :class="Topen ? ' hidden' : ' block'"
                                                            @click="Fopen = !Fopen"
                                                            class="relative flex flex-row items-center justify-between flex-1 px-4 py-2 text-sm font-semibold truncate">

                                                            <div class=" truncate">
                                                                <a 
                                                                    class="text-gray-900 group-hover:text-gray-600">{{ $shortListedOffer->business->business_name }}</a>
                                                                <p class="text-gray-500 ">
                                                                    ${{ $shortListedOffer->price }}
                                                                </p>
                                                            </div>

                                                            <!--popup iconmenu-->
                                                         
                                                            <div class="z-10 flex-shrink-0">
                                                                <button type="button"
                                                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                                                    <span class="sr-only">Open options</span>
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                        id="Layer_1" height="512"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1">
                                                                        <path
                                                                            d="m17 14a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm-4 3h-5a1 1 0 0 0 0 2h5a1 1 0 0 0 0-2zm9-6.515v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515a6.958 6.958 0 0 1 4.95 2.05l3.484 3.486a6.951 6.951 0 0 1 2.051 4.949zm-6.949-7.021a5.01 5.01 0 0 0 -1.051-.78v4.316a1 1 0 0 0 1 1h4.316a4.983 4.983 0 0 0 -.781-1.05zm4.949 7.021c0-.165-.032-.323-.047-.485h-4.953a3 3 0 0 1 -3-3v-4.953c-.162-.015-.321-.047-.485-.047h-4.515a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            
                                                           
                                                            <!---->
                                                        </div>
                                                        <!--END item default-->


                                                        <!--popup-->
                                                        <div class="fixed top-24 left-0 right-0 lg:w-2/5 md:w-3/5 w-4/5 h-fit p-6 mx-auto bg-white rounded-2xl shadow-2xl"
                                                            style="z-index: 99" x-show="Fopen" x-cloak
                                                            @keydown.window.escape.stop="Fopen = false"
                                                            @click.outside="Fopen = false">
                                                            <div
                                                                class="flex flex-col w-full justify-items-center relative text-gray-500">



                                                                <div class="">
                                                                    <p
                                                                        class="absolute -top-9 -right-3 w-fit inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-traivis-500 border-4 border-white focus:outline-none">
                                                                        shortlisted</p>
                                                                </div>

                                                                <div
                                                                    class="flex flex-row justify-between items-center text-xl font-bold">
                                                                    <div class="items-center flex flex-row mr-5">
                                                                        <div
                                                                            class="flex-shrink-0 flex items-center justify-center rounded-full">
                                                                            <img alt=""
                                                                                class="rounded-full w-16 h-16 bg-cover"
                                                                                src="{{ asset('assets/images/cover.jpg') }}" />
                                                                        </div>
                                                                        <div class="px-3 truncate  ">
                                                                            <p
                                                                                class="font-bold truncate whitespace-pre-wrap">
                                                                                <span>{{ $shortListedOffer->business->business_name }}</span>
                                                                                <span class="font-medium">Offer</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-3xl">
                                                                        ${{ $shortListedOffer->price }}</p>
                                                                </div>


                                                                <!--bid info-->
                                                                <div
                                                                    class="flex flex-col space-y-2 font-semibold py-5 text-base ">
                                                                    <div
                                                                        class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                                                        <div class="col-span-3 truncate ">
                                                                            <div
                                                                                class="mx-auto flex flex-row items-center ">
                                                                                <svg fill="currentColor"
                                                                                    class="mr-3  w-5 h-5"
                                                                                    id="Layer_1" height="512"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    data-name="Layer 1">
                                                                                    <path
                                                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                                                </svg>
                                                                                <span> {{ $singleBid->name }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-span-3 truncate">
                                                                            <div
                                                                                class="mx-auto flex flex-row items-center ">
                                                                                <svg fill="currentColor"
                                                                                    class="mr-3  w-5 h-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    version="1.1" id="Capa_1"
                                                                                    x="0px" y="0px"
                                                                                    viewBox="0 0 512 512"
                                                                                    style="enable-background:new 0 0 512 512;"
                                                                                    xml:space="preserve"
                                                                                    width="512" height="512">
                                                                                    <g>
                                                                                        <path
                                                                                            d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z" />
                                                                                        <path
                                                                                            d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z" />
                                                                                    </g>
                                                                                </svg>
                                                                                <span>
                                                                                    @forelse ($singleBid->categories as $category)
                                                                                        {{ $category->slug }} ,
                                                                                    @empty
                                                                                    @endforelse
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                                                        <div class="col-span-3 relative">



                                                                            <p class="peer">
                                                                                <span
                                                                                    class="text-black font-medium text-xs">
                                                                                    From </span>
                                                                                {{ $singleBid->bidding_start_date ? date('jS M Y', strtotime($singleBid->bidding_start_date)) : '-' }}
                                                                            </p>
                                                                            <p
                                                                                class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                Start Date</p>

                                                                        </div>
                                                                        <div class="col-span-3 relative">
                                                                            <p class="peer"><span
                                                                                    class="text-black font-medium text-xs">
                                                                                    To
                                                                                </span>{{ $singleBid->bidding_end_date ? date('jS M Y', strtotime($singleBid->bidding_end_date)) : '-' }}
                                                                            </p>
                                                                            <p
                                                                                class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                End Date</p>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="py-2 mt-5  flex flex-col cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2 text-justify">
                                                                        <div class="text-sm text-black">
                                                                            Offer Note
                                                                        </div>
                                                                        <div class="truncate whitespace-pre-wrap">
                                                                            {{ $singleBid->note }}
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!--bid files-->
                                                                <div
                                                                    class="flex flex-row justify-between items-center mb-3 truncate">
                                                                    <div
                                                                        class="flex flex-row flex-1 border-2 p-5 mr-5 truncate rounded-lg items-center space-x-10 hover:overflow-x-scroll">
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>


                                                                    </div>
                                                                    <a 
                                                                        class="text-traivis-500 hover:text-traivis-400">
                                                                        <svg fill="currentColor" class="h-8"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            height="512">
                                                                            <path
                                                                                d="M18.348,7.23c-1.311-3.151-4.395-5.23-7.848-5.23C5.813,2,2,5.813,2,10.5c0,.551,.053,1.097,.157,1.633-1.347,1.032-2.157,2.646-2.157,4.367,0,3.032,2.243,5.5,5,5.5h11.5c4.136,0,7.5-3.364,7.5-7.5,0-3.467-2.344-6.437-5.652-7.27Zm-4.934,10.184c-.39,.39-.902,.585-1.414,.585s-1.024-.195-1.414-.585l-3.293-3.293,1.414-1.414,2.293,2.293v-6h2v6l2.293-2.293,1.414,1.414-3.293,3.293Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <!--END bid files-->



                                                                <!--act buttons-->
                                                                @can('bidding_offer_edit')
                                                                <div
                                                                    class="flex flex-row justify-evenly items-center px-3 pt-5 ">

                                                                    <button 
                                                                        class="px-2 py-1 font-bold text-md rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-500 hover:border-white transition-all" wire:click='changeOfferStatus("rejected",{{ $shortListedOffer->id }})' >Reject</button>
                                                                    @if (!$hiredOffer)
                                                                    
                                                                        <button 
                                                                        class="px-2 py-1 font-bold text-md rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-green-500 hover:border-white transition-all" wire:click='changeOfferStatus("hired",{{ $shortListedOffer->id  }})' >Hire</button>
                                                                    
                                                                    @endif
                                                                </div>
                                                                @endcan
                                                            </div>

                                                        </div>
                                                        <div x-show="Fopen" x-cloak
                                                            class="bg-black opacity-50 inset-0 fixed h-screen z-50">
                                                        </div>
                                                        <!--END popup-->


                                                        <!--quick act-->
                                                        @can('bidding_offer_edit')
                                                            <div class="z-0 flex flex-1 flex-row py-2 text-sm h-14 items-center justify-evenly space-x-2"
                                                                x-show="Topen" x-cloak
                                                                @keydown.window.escape.stop="Topen = false"
                                                                @click.outside="Topen = false">

                                                                <button 
                                                                    class="px-2 py-1 font-bold text-sm rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-500 hover:border-white transition-all" wire:click='changeOfferStatus("rejected",{{ $shortListedOffer->id }})' >Reject</button>
                                                                @if (!$hiredOffer)
                                                                
                                                                    <button 
                                                                    class="px-2 py-1 font-bold text-sm rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-green-500 hover:border-white transition-all" wire:click='changeOfferStatus("hired",{{ $shortListedOffer->id }})' >Hire</button>
                                                                
                                                                @endif
                                                            </div>
                                                        @endcan
                                                        <!--END quick act-->

                                                        <!--Option button-->
                                                        @can('bidding_offer_edit')
                                                            <div class="z-10 flex-shrink-0 pr-2 ">
                                                                <button @click="Topen = !Topen" type="button"
                                                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                                                    <span class="sr-only">Open options</span>
                                                                    <svg class="w-5 h-5"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        @endcan
                                                        <!--END Option button-->


                                                    </div>
                                                </li>
                                            @empty

                                            @endforelse



                                        </ul>
                                    </div>
                                </div>



                                @php
                                    
                                    $rejectedOffers = $offers->where('status', 'rejected');

                                @endphp
                                <div class="w-1/2 lg:w-1/3  p-2">
                                    <div class="pt-3 px-6 bg-white rounded border-t-4 shadow border-pink-500">
                                        <div class="flex justify-between items-center pb-3">
                                            <h3 class="font-medium" contenteditable="false">Rejected</h3><span
                                                class="flex justify-center items-center w-6 h-6 rounded text-xs bg-pink-500 text-white">{{ $rejectedOffers->count() }}</span>
                                        </div>
                                    </div>


                                    <div class="relative">
                                        <ul role="list"
                                            class="pt-3 flex flex-col space-y-2 w-full  h-96 overflow-y-auto">


                                            @forelse ($rejectedOffers as $rejectedOffer)
                                                <li class=" flex shadow-sm rounded-full w-full relative group  hover:shadow-lg focus-within:shadow-md transition-all"
                                                    x-data="{ Topen: false, Fopen: false }">
                                                    <div
                                                        class="-mr-5 flex-shrink-0 flex items-center justify-center w-16 h-16 bg-traivis-500 group-hover:bg-traivis-400 rounded-full z-10 transition-all">
                                                        <img alt=""
                                                            class="rounded-full w-14 h-14 group-hover:w-16 group-hover:h-16 group-focus-within:w-16 group-focus-within:h-16 transition-all duration-100 bg-cover"
                                                            src="{{ asset('assets/images/cover.jpg') }}" />
                                                    </div>

                                                    <div
                                                        class="pl-5 flex-1 flex items-center justify-end border-t border-r border-b border-gray-300 bg-traivis-50 group-hover:bg-white group-focus-within:bg-white group-hover:border-gray-200 rounded-r-full truncate ">


                                                        <!--item default-->
                                                        <div :class="Topen ? ' hidden' : ' block'"
                                                            @click="Fopen = !Fopen"
                                                            class="relative flex flex-row items-center justify-between flex-1 px-4 py-2 text-sm font-semibold truncate">

                                                            <div class=" truncate">
                                                                <a 
                                                                    class="text-gray-900 group-hover:text-gray-600">{{ $rejectedOffer->business->business_name }}</a>
                                                                <p class="text-gray-500 ">
                                                                    ${{ $rejectedOffer->price }}
                                                                </p>
                                                            </div>

                                                            <!--popup iconmenu-->
                                                            <div class="z-10 flex-shrink-0">
                                                                <button type="button"
                                                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                                                    <span class="sr-only">Open options</span>
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                        id="Layer_1" height="512"
                                                                        viewBox="0 0 24 24" width="512"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1">
                                                                        <path
                                                                            d="m17 14a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 1 1zm-4 3h-5a1 1 0 0 0 0 2h5a1 1 0 0 0 0-2zm9-6.515v8.515a5.006 5.006 0 0 1 -5 5h-10a5.006 5.006 0 0 1 -5-5v-14a5.006 5.006 0 0 1 5-5h4.515a6.958 6.958 0 0 1 4.95 2.05l3.484 3.486a6.951 6.951 0 0 1 2.051 4.949zm-6.949-7.021a5.01 5.01 0 0 0 -1.051-.78v4.316a1 1 0 0 0 1 1h4.316a4.983 4.983 0 0 0 -.781-1.05zm4.949 7.021c0-.165-.032-.323-.047-.485h-4.953a3 3 0 0 1 -3-3v-4.953c-.162-.015-.321-.047-.485-.047h-4.515a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!--END item default-->


                                                        <!--popup-->
                                                        <div class="fixed top-24 left-0 right-0 lg:w-2/5 md:w-3/5 w-4/5 h-fit p-6 mx-auto bg-white rounded-2xl shadow-2xl"
                                                            style="z-index: 99" x-show="Fopen" x-cloak
                                                            @keydown.window.escape.stop="Fopen = false"
                                                            @click.outside="Fopen = false">
                                                            <div
                                                                class="flex flex-col w-full justify-items-center relative text-gray-500">



                                                                <div class="">
                                                                    <p
                                                                        class="absolute -top-9 -right-3 w-fit inline-flex justify-center px-2 py-1 text-sm font-semibold rounded-full text-white bg-traivis-500 border-4 border-white focus:outline-none">
                                                                        shortlisted</p>
                                                                </div>

                                                                <div
                                                                    class="flex flex-row justify-between items-center text-xl font-bold">
                                                                    <div class="items-center flex flex-row mr-5">
                                                                        <div
                                                                            class="flex-shrink-0 flex items-center justify-center rounded-full">
                                                                            <img alt=""
                                                                                class="rounded-full w-16 h-16 bg-cover"
                                                                                src="{{ asset('assets/images/cover.jpg') }}" />
                                                                        </div>
                                                                        <div class="px-3 truncate  ">
                                                                            <p
                                                                                class="font-bold truncate whitespace-pre-wrap">
                                                                                <span>{{ $rejectedOffer->business->business_name }}</span>
                                                                                <span class="font-medium">Offer</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-3xl">
                                                                        ${{ $rejectedOffer->price }}</p>
                                                                </div>


                                                                <!--bid info-->
                                                                <div
                                                                    class="flex flex-col space-y-2 font-semibold py-5 text-base ">
                                                                    <div
                                                                        class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                                                        <div class="col-span-3 truncate ">
                                                                            <div
                                                                                class="mx-auto flex flex-row items-center ">
                                                                                <svg fill="currentColor"
                                                                                    class="mr-3  w-5 h-5"
                                                                                    id="Layer_1" height="512"
                                                                                    viewBox="0 0 24 24" width="512"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    data-name="Layer 1">
                                                                                    <path
                                                                                        d="m24 8.48v11.52a1 1 0 0 1 -2 0v-8.248l-7.4 3.536a5 5 0 0 1 -2.577.694 5.272 5.272 0 0 1 -2.7-.739l-7.38-3.513a3.691 3.691 0 0 1 -.084-6.455c.027-.016.056-.031.084-.045l7.457-3.558a5.226 5.226 0 0 1 5.282.045l7.375 3.513a3.767 3.767 0 0 1 1.943 3.25zm-11.978 9.5a7.26 7.26 0 0 1 -3.645-.972l-4.377-2.089v2.7a5.007 5.007 0 0 0 3.519 4.778 15.557 15.557 0 0 0 4.481.603 15.557 15.557 0 0 0 4.481-.607 5.007 5.007 0 0 0 3.519-4.778v-2.691l-4.459 2.13a6.983 6.983 0 0 1 -3.519.928z" />
                                                                                </svg>
                                                                                <span> {{ $singleBid->name }}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-span-3 truncate">
                                                                            <div
                                                                                class="mx-auto flex flex-row items-center ">
                                                                                <svg fill="currentColor"
                                                                                    class="mr-3  w-5 h-5"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    version="1.1" id="Capa_1"
                                                                                    x="0px" y="0px"
                                                                                    viewBox="0 0 512 512"
                                                                                    style="enable-background:new 0 0 512 512;"
                                                                                    xml:space="preserve"
                                                                                    width="512" height="512">
                                                                                    <g>
                                                                                        <path
                                                                                            d="M0,191.808V384c0.071,58.881,47.786,106.596,106.667,106.667h298.667C464.214,490.596,511.93,442.881,512,384V189.44   L0,191.808z" />
                                                                                        <path
                                                                                            d="M405.333,64H266.069c-3.299,0.022-6.56-0.708-9.536-2.133l-67.328-33.792c-8.888-4.426-18.679-6.733-28.608-6.741h-53.931   C47.786,21.404,0.071,69.119,0,128v21.141l509.077-2.368C497.961,98.408,454.959,64.099,405.333,64z" />
                                                                                    </g>
                                                                                </svg>
                                                                                <span>
                                                                                    @forelse ($singleBid->categories as $category)
                                                                                        {{ $category->slug }} ,
                                                                                    @empty
                                                                                    @endforelse
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="grid grid-cols-6 cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2">
                                                                        <div class="col-span-3 relative">



                                                                            <p class="peer">
                                                                                <span
                                                                                    class="text-black font-medium text-xs">
                                                                                    From </span>
                                                                                {{ $singleBid->bidding_start_date ? date('jS M Y', strtotime($singleBid->bidding_start_date)) : '-' }}
                                                                            </p>
                                                                            <p
                                                                                class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                Start Date</p>

                                                                        </div>
                                                                        <div class="col-span-3 relative">
                                                                            <p class="peer"><span
                                                                                    class="text-black font-medium text-xs">
                                                                                    To
                                                                                </span>{{ $singleBid->bidding_end_date ? date('jS M Y', strtotime($singleBid->bidding_end_date)) : '-' }}
                                                                            </p>
                                                                            <p
                                                                                class="text-xs absolute bottom-6 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                End Date</p>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="py-2 mt-5  flex flex-col cursor-pointer border-l border-gray-300 hover:border-traivis-500 hover:bg-traivis-50 px-2 text-justify">
                                                                        <div class="text-sm text-black">
                                                                            Offer Note
                                                                        </div>
                                                                        <div class="truncate whitespace-pre-wrap">
                                                                            {{ $singleBid->note }}
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!--bid files-->
                                                                <div
                                                                    class="flex flex-row justify-between items-center mb-3 truncate">
                                                                    <div
                                                                        class="flex flex-row flex-1 border-2 p-5 mr-5 truncate rounded-lg items-center space-x-10 hover:overflow-x-scroll">
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a 
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                        <a
                                                                            class="relative hover:text-traivis-500 flex flex-col justify-center">
                                                                            <svg fill="currentColor"
                                                                                class="h-8 peer"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 384 512">
                                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                                <path
                                                                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                                            </svg>
                                                                            <p
                                                                                class="text-xs absolute -top-5 -left-3 hidden peer-hover:block py-1 px-2 rounded-full bg-black text-white">
                                                                                File Name</p>
                                                                        </a>
                                                                    </div>
                                                                    <a 
                                                                        class="text-traivis-500 hover:text-traivis-400">
                                                                        <svg fill="currentColor" class="h-8"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="512"
                                                                            height="512">
                                                                            <path
                                                                                d="M18.348,7.23c-1.311-3.151-4.395-5.23-7.848-5.23C5.813,2,2,5.813,2,10.5c0,.551,.053,1.097,.157,1.633-1.347,1.032-2.157,2.646-2.157,4.367,0,3.032,2.243,5.5,5,5.5h11.5c4.136,0,7.5-3.364,7.5-7.5,0-3.467-2.344-6.437-5.652-7.27Zm-4.934,10.184c-.39,.39-.902,.585-1.414,.585s-1.024-.195-1.414-.585l-3.293-3.293,1.414-1.414,2.293,2.293v-6h2v6l2.293-2.293,1.414,1.414-3.293,3.293Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <!--END bid files-->



                                                                <!--act buttons-->
                                                                @can('bidding_offer_edit')
                                                                <div
                                                                    class="flex flex-row justify-evenly items-center px-3 pt-5 ">

                                                                    <button 
                                                                        class="px-2 py-1 font-bold text-md rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-pink-500 hover:border-white transition-all" wire:click='changeOfferStatus("shortlisted",{{ $rejectedOffer->id }})'>Reconsider</button>

                                                                </div>
                                                                @endcan
                                                            </div>

                                                        </div>
                                                        <div x-show="Fopen" x-cloak
                                                            class="bg-black opacity-50 inset-0 fixed h-screen z-50">
                                                        </div>
                                                        <!--END popup-->


                                                        <!--quick act-->
                                                        @can('bidding_offer_edit')
                                                        <div class="z-0 flex flex-1 flex-row py-2 text-sm h-14 items-center justify-evenly space-x-2"
                                                            x-show="Topen" x-cloak
                                                            @keydown.window.escape.stop="Topen = false"
                                                            @click.outside="Topen = false">

                                                            <button 
                                                                class="px-2 py-1 font-bold text-sm rounded-full bg-white border border-gray-500 text-gray-500 hover:text-white hover:bg-green-500 hover:border-white transition-all" wire:click='changeOfferStatus("recieved",{{ $rejectedOffer->id }})'>Reconsider</button>
                                                        </div>
                                                        @endcan
                                                        <!--END quick act-->


                                                        <!--Option button-->
                                                        @can('bidding_offer_edit')
                                                        <div class="z-10 flex-shrink-0 pr-2 ">
                                                            <button @click="Topen = !Topen" type="button"
                                                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none ">
                                                                <span class="sr-only">Open options</span>
                                                                <svg class="w-5 h-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        @endcan
                                                        <!--END Option button-->

                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                            <!--Item-->

                                            <!--END Item-->


                                        </ul>
                                    </div>
                                </div>









                            </div>

                        </div>
                    </section>
                </div>
            </section>
            <!--End bids details-->


        </div>
    </section>
    <!--End content-->


</div>
