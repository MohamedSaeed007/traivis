<div x-data="{
    activeTab: @entangle('activeTab'),
}" class="mb-4 w-full px-4 md:mb-0 md:w-2/3 lg:w-3/5">
    <div class="container mx-auto sm:px-0 md:px-0 lg:px-20">
        {{-- Navbar --}}
        <div class="">
            <div class="sm:block">
                <div class="flex justify-center border-b border-gray-200">
                    <nav class="-mb-px flex w-full justify-evenly space-x-8 px-4" aria-label="Tabs">
                        <span @click="activeTab= 'general'"
                            class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                            :class="activeTab == 'general' ? 'border-traivis-500 text-traivis-500' :
                                'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewbox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512"
                                height="512" fill="currentColor" class="-ml-0.5 mr-2 h-5 w-5">
                                <g>
                                    <path
                                        d="M85.333,0h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,234.667,0,196.462,0,149.333v-64C0,38.205,38.205,0,85.333,0z">
                                    </path>
                                    <path
                                        d="M362.667,0h64C473.795,0,512,38.205,512,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,38.205,315.538,0,362.667,0z">
                                    </path>
                                    <path
                                        d="M85.333,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,512,0,473.795,0,426.667v-64C0,315.538,38.205,277.333,85.333,277.333z">
                                    </path>
                                    <path
                                        d="M362.667,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64C512,473.795,473.795,512,426.667,512h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,315.538,315.538,277.333,362.667,277.333z">
                                    </path>
                                </g>

                            </svg>
                            <span>General</span>
                        </span>

                        <span @click="activeTab= 'note'"
                            class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                            :class="activeTab == 'note' ? 'border-traivis-500 text-traivis-500' :
                                'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'">
                            <!-- Heroicon name: solid/office-building -->
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                viewbox="0 0 24 24" width="512" height="512" fill="currentColor" aria-hidden="true"
                                class="-ml-0.5 mr-2 h-5 w-5 text-gray-400 group-hover:text-gray-500">
                                <path
                                    d="M8.586,18h-1.586c-.553,0-1-.448-1-1v-1.586c0-1.068,.416-2.073,1.172-2.828l5.707-5.707c1.17-1.17,3.072-1.17,4.242,0,.566,.566,.879,1.32,.879,2.121s-.313,1.555-.879,2.122l-5.707,5.707c-.755,.755-1.76,1.172-2.828,1.172Zm-.586-2h.586c.534,0,1.036-.208,1.414-.586l5.707-5.707c.189-.189,.293-.44,.293-.707s-.104-.518-.293-.707c-.391-.391-1.023-.39-1.414,0l-5.707,5.707c-.372,.373-.586,.888-.586,1.414v.586Zm11,8h-5.917C6.082,24,.471,19.208,.029,12.854-.211,9.378,1.057,5.976,3.509,3.521,5.962,1.065,9.371-.205,12.836,.029c6.261,.425,11.164,5.833,11.164,12.312v6.66c0,2.757-2.243,5-5,5ZM12.015,2.001c-2.656,0-5.209,1.048-7.091,2.933-2.043,2.046-3.1,4.883-2.898,7.782,.372,5.38,5.023,9.285,11.058,9.285h5.917c1.654,0,3-1.346,3-3v-6.66c0-5.431-4.085-9.962-9.299-10.316-.229-.016-.458-.023-.687-.023Z">
                                </path>
                            </svg>
                            <span>Notes</span>
                        </span>

                        <span @click="activeTab= 'hint'"
                            class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                            :class="activeTab == 'hint' ? 'border-traivis-500 text-traivis-500' :
                                'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'">
                            <!-- Heroicon name: solid/users -->
                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24" width="512 "
                                height="512" fill="currentColor" aria-hidden="true" class="-ml-0.5 mr-2 h-5 w-5">
                                <path
                                    d="M20.494,7.968l-9.54-7A5,5,0,0,0,3,5V19a5,5,0,0,0,7.957,4.031l9.54-7a5,5,0,0,0,0-8.064Zm-1.184,6.45-9.54,7A3,3,0,0,1,5,19V5A2.948,2.948,0,0,1,6.641,2.328,3.018,3.018,0,0,1,8.006,2a2.97,2.97,0,0,1,1.764.589l9.54,7a3,3,0,0,1,0,4.836Z">
                                </path>
                            </svg>
                            <span>Hints</span>
                        </span>

                        <span @click="activeTab= 'blog'"
                            class="group inline-flex cursor-pointer items-center border-b-2 px-1 py-4 text-sm font-medium"
                            :class="activeTab == 'blog' ? 'border-traivis-500 text-traivis-500' :
                                'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'">
                            <!-- Heroicon name: solid/users -->
                            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24" width="512"
                                height="512" fill="currentColor" aria-hidden="true" class="-ml-0.5 mr-2 h-5 w-5">
                                <path
                                    d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z">
                                </path>
                                <path
                                    d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z">
                                </path>
                            </svg>
                            <span>Blogs</span>
                        </span>
                    </nav>
                </div>
            </div>
        </div>
        {{-- Hints Horizontal --}}
        <div x-show="activeTab == 'general'">
            <ul role="list"
                class="mt-5 flex touch-pan-x snap-x snap-mandatory gap-x-4 gap-y-8 overflow-hidden p-4 hover:overflow-x-scroll sm:gap-x-6">
                @foreach ($hints as $hint)
                    <li class="snap-center">
                        <x-video-container class="w-32 rounded-lg" video-src="'{{ $hint->getFirstMediaUrl() }}'" />
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- Hints Vertical --}}
        <div x-show="activeTab == 'hint'" class="my-4 flex w-full items-center justify-center">
            @foreach ($hints as $hint)
                <div @click="$dispatch('vid-modal', { vidModalImgSrc: '{{ $hint->getFirstMediaUrl() }}', vidModalImgDesc: '' })"
                    class="group relative mb-5 flex h-[720px] w-[460px] cursor-pointer items-center justify-center rounded-lg bg-gray-100 shadow-md shadow-slate-500 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                    <!--user-->
                    <div class="absolute bottom-5 left-1/2 z-10 flex items-center -translate-x-1/2 gap-x-3 space-x-3">

                        <!-- User Avatar -->
                        <div class="relative">
                            <div class="flex-shrink-0">
                                <img loading="lazy" alt="" class="w-10 h-10 rounded-full"
                                    src="{{ $hint->business ? $hint->business?->avatar : $hint->user?->avatar }}">
                            </div>
                            <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                title="User is online"></div>
                        </div>
                        <!-- /User Avatar -->

                        <!-- Username -->
                        <div class="min-w-0 flex-1 text-white">
                            <div class="flex h-8 flex-row">

                                @if ($hint->business)
                                    <a href="{{ route('business-profile-social', $hint->business->id) }}"
                                        target="_blank">
                                        <h2 class="text-lg font-semibold drop-shadow-md">
                                            {{ $hint->business->business_name }}</h2>
                                    </a>
                                @elseif ($hint->user)
                                    <a href="{{ route('user-profile-social', $hint->user->id) }}" target="_blank">
                                        <h2 class="text-lg font-semibold drop-shadow-md">
                                            {{ $hint->user->name }}</h2>
                                    </a>
                                @endif
                                <svg class="my-auto ml-2 h-5 text-traivis-500" fill="currentColor" height="24"
                                    version="1.1" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                    </path>
                                </svg>

                            </div>
                        </div>
                        <!-- / Username -->

                    </div>
                    <!--/user-->
                    <!--video-->
                    <img loading="lazy" class="pointer-events-none h-[720px] rounded-lg object-cover object-center transition-all group-hover:opacity-80"
                        src="{{ asset('assets/images/wallpaper.jpg') }}">
                    <!--video-->
                    <svg class="absolute left-1/2 top-1/2 z-10 z-20 h-8 -translate-x-1/2 -translate-y-1/2 text-white transition-all group-hover:scale-125"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20.492,7.969,10.954.975A5,5,0,0,0,3,5.005V19a4.994,4.994,0,0,0,7.954,4.03l9.538-6.994a5,5,0,0,0,0-8.062Z">
                        </path>
                    </svg>
                    <button class="absolute inset-0 focus:outline-none" type="button">
                        <span class="sr-only">View Hint</span>
                    </button>
                </div>
            @endforeach
        </div>
        {{-- Notes & Courses --}}
        <div x-show="activeTab == 'general' || activeTab == 'note'" class="mt-4">
            <ul role="list" class="space-y-4">
                @forelse ($notes as $note)
                    @livewire('single-component.single-post', ['post' => $note], key($note->id))
                @empty
                    <p>No post yet</p>
                @endforelse
            </ul>
        </div>
        {{-- Blogs --}}
        {{-- <div x-show="activeTab == 'general' || activeTab == 'blog'" class="mt-4">
            <div class="mt-4">
                <ul class="space-y-4" role="list">
                    @foreach ($posts as $post)
                        @php
                            $is_owner = $this->isOwner($post);
                        @endphp
                        <li class="mb-20 bg-white p-4 shadow sm:rounded-lg">
                            <article aria-labelledby="question-title-81614">
                                <!--------- feed part--------->
                                <div class="relative">
                                    <!--------- reibbon--------->
                                    <div class="absolute right-10 top-0 -mt-4">
                                        <svg baseProfile="tiny" class="h-auto w-10 text-traivis-500"
                                            fill="currentColor" id="Filled" overflow="visible" version="1.2"
                                            viewBox="0 0 355.6 512" x="0px" xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                                            <path
                                                d="M21.9-1.2v482.1c0,23.3,25.9,37.3,45.4,24.5l93-61.1c9.7-6.4,22.3-6.4,32-0.1l96,61.9c19.5,12.6,45.2-1.4,45.2-24.6V-1.2H21.9z M251.2,190c6.4,6.4,6.4,16.8,0,23.2l-87.6,87.6c-5.8,5.8-13.7,9.1-21.9,9.1h-10.4v-10.4c0-8.2,3.3-16.1,9.1-21.9L228,190C234.4,183.6,244.8,183.6,251.2,190z M259.2,324.3l-20.5,20.6c-4.1,4.1-9.1,7.1-14.5,9v-36.3c0-4.3,3.5-7.7,7.7-7.7h36.3C266.4,315.3,263.3,320.2,259.2,324.3z M270.6,209.3v85.1h-38.7c-12.8,0-23.2,10.4-23.2,23.2v38.7h-85.1c-21.3,0-38.6-17.3-38.7-38.7V209.3c0-21.3,17.3-38.6,38.7-38.7h108.3c0.1,0,0.2,0,0.3,0c-5.7,1.3-10.9,4.2-15.1,8.4l-87.6,87.6c-8.7,8.7-13.6,20.5-13.6,32.8v10.4c0,8.5,6.9,15.5,15.5,15.5h10.4c12.3,0,24.1-4.9,32.8-13.6l87.6-87.6c4.1-4.2,7-9.4,8.4-15.2C270.6,209,270.6,209.2,270.6,209.3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <!--------- reibbon--------->
                                    <!---------feed header--------->
                                    <div class="flex space-x-3">
                                        <!-- User Avatar -->
                                        <div class="relative">
                                            <div class="flex-shrink-0">
                                                <img alt="" class="h-10 w-10 rounded-full"
                                                    src="{{ $post->business ? $post->business?->avatar : $post->user?->avatar }}">
                                            </div>
                                            <!-- Online Status Dot -->
                                            <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                                title="User is online"></div>
                                        </div>
                                        <!-- feed info -->
                                        <div class="min-w-0 flex-1">
                                            <!-- Name.verify row-->
                                            <div class="flex h-8 flex-row">
                                                <!-- Username -->
                                                @if ($post->business)
                                                    <a href="{{ route('business-profile-social', $post->business->id) }}"
                                                        target="_blank">
                                                        <h2 class="text-lg font-semibold">
                                                            {{ $post->business->business_name }}</h2>
                                                    </a>
                                                @elseif($post->user)
                                                    <a href="{{ route('user-profile-social', $post->user->id) }}"
                                                        target="_blank">
                                                        <h2 class="text-lg font-semibold">{{ $post->user->name }}
                                                        </h2>
                                                    </a>
                                                @endif
                                                <!-- User Verified -->
                                                <svg class="my-auto ml-2 h-5 text-traivis-500" fill="currentColor"
                                                    height="24" version="1.1" viewBox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <path
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <!-- date row-->
                                            <p class="text-sm text-gray-500">
                                                <a class="hover:underline"
                                                    href="{{ route('post.show', $post->id) }}">
                                                    <x-tooltip-arrow-up :text="$post->created_at->format('l, F j, Y \a\t g:i A')">
                                                        {{ $post->created_at->shortAbsoluteDiffForHumans() }}
                                                    </x-tooltip-arrow-up>
                                                </a>
                                            </p>
                                        </div>
                                        <!--post options-->
                                        <div x-data="{ topen: false }" class="">

                                            <button type="button" @click="topen = !topen"
                                                class="group inline-flex justify-center rounded-full border border-gray-300 bg-white p-2 text-sm font-medium text-gray-700 shadow-sm transition-colors hover:bg-traivis-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-traivis-500 ">
                                                <!-- Heroicon name: solid/mail -->
                                                <svg class="h-4 w-4 rotate-90 text-gray-400 group-hover:text-white"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                    id="Outline" viewBox="0 0 24 24" width="512"
                                                    height="512">
                                                    <circle cx="2" cy="12" r="2"> </circle>
                                                    <circle cx="12" cy="12" r="2"> </circle>
                                                    <circle cx="22" cy="12" r="2"> </circle>
                                                </svg>
                                            </button>
                                            <div x-show="topen" @click.outside="topen = false"
                                                @keydown.window.escape.stop="topen = false"
                                                class="absolute right-5 top-5 z-10 mt-2 w-40 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="transform opacity-0 scale-50"
                                                x-transition:enter-end="transform opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="transform opacity-100 scale-100"
                                                x-transition:leave-end="transform opacity-0 scale-50" x-cloak>

                                                <div class="py-1" role="none">
                                                    <button
                                                        wire:click="$emit('openIssueReport',['{{ class_basename($post) }}','{{ $post->id }}'])"
                                                        class="group flex w-full items-center gap-x-2 px-4 py-1 text-sm text-gray-500 hover:bg-traivis-500 hover:text-white"
                                                        role="menuitem" tabindex="-1" id="menu-item-0">
                                                        <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.836,.028C9.364-.204,5.96,1.066,3.509,3.521,1.057,5.977-.211,9.378,.03,12.854c.44,6.354,6.052,11.146,13.054,11.146h5.917c2.757,0,5-2.243,5-5v-6.66C24,5.861,19.096,.454,12.836,.028Zm-.836,18.972c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1-6c0,.553-.448,1-1,1s-1-.447-1-1V5c0-.553,.448-1,1-1s1,.447,1,1V13Z" />
                                                        </svg>
                                                        <span class="">Report</span>
                                                    </button>
                                                    @if ($is_owner)
                                                        <button
                                                            @click="confirm('Delete?') && @this.deletePost('{{ $post->id }}')"
                                                            class="group flex w-full items-center gap-x-2 px-4 py-1 text-sm text-gray-500 hover:bg-traivis-500 hover:text-white"
                                                            role="menuitem" tabindex="-1" id="menu-item-1">
                                                            <svg fill="currentColor" class="h-5 w-5" x="0px" y="0px"
                                                                viewBox="0 0 512 512" xml:space="preserve"
                                                                width="512" height="512">
                                                                <g>
                                                                    <path
                                                                        d="M448,85.333h-66.133C371.66,35.703,328.002,0.064,277.333,0h-42.667c-50.669,0.064-94.327,35.703-104.533,85.333H64   c-11.782,0-21.333,9.551-21.333,21.333S52.218,128,64,128h21.333v277.333C85.404,464.214,133.119,511.93,192,512h128   c58.881-0.07,106.596-47.786,106.667-106.667V128H448c11.782,0,21.333-9.551,21.333-21.333S459.782,85.333,448,85.333z    M234.667,362.667c0,11.782-9.551,21.333-21.333,21.333C201.551,384,192,374.449,192,362.667v-128   c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333V362.667z M320,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333v-128c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M174.315,85.333c9.074-25.551,33.238-42.634,60.352-42.667h42.667   c27.114,0.033,51.278,17.116,60.352,42.667H174.315z" />
                                                                </g>
                                                            </svg>
                                                            <span class="">Delete</span>
                                                        </button>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                        <!--END feed info -->
                                    </div>
                                    <!---------END feed header--------->
                                    <!--------- feed content--------->
                                    <div
                                        class="flex flex-wrap items-center justify-center justify-between justify-items-center py-4">
                                        <div class="mb-3 flex w-full flex-wrap justify-start">
                                            <h2 class="text-lg font-bold font-semibold" id="question-title-81614">
                                                <span class="text-gray-400">
                                                    @if ($post->status == 'draft')
                                                        <x-svg-icons.fi-rr-lock class="inline-block h-5 w-5" />
                                                    @else
                                                        <x-svg-icons.fi-rr-globe class="inline-block h-5 w-5" />
                                                    @endif
                                                    @if ($is_owner && $post->type == 'blog')
                                                        <x-svg-icons.fi-rr-file-edit
                                                            class="inline-block h-5 w-5 cursor-pointer"
                                                            @click="Livewire.emit('blogEdit',{{ $post->id }})" />
                                                    @endif
                                                </span>
                                                {{ $post->title }}
                                            </h2>
                                        </div>
                                    </div>
                                    <div
                                        class="w-full rounded-lg bg-white shadow-md">
                                        <a class="" href="{{ route('post.show', $post->id) }}">
                                            <img alt="product image" class="mx-auto h-72 w-full object-cover"
                                                src="{{ $post->getFirstMediaUrl() }}"></a>
                                    </div>
                                    <div class="rounded-t-5xl absolute bottom-0 bg-white bg-opacity-80 px-4 py-3">
                                        <h2 class="font-medium text-black" id="question-title-81614">
                                            {!! $post->overview !!}</h2>
                                    </div>
                                    <!---------END feed content--------->
                                </div>
                                <!---------END feed part--------->
                                <!--------- START Engagement part --------->
                                <div class="mb-5 flex flex-col justify-items-center border-b-2 border-gray-200">
                                    <div
                                        class="flex items-center justify-between justify-items-center gap-x-8 p-3 text-gray-400">
                                        @if (auth()->check())
                                            @livewire('like-button', ['post' => $post])
                                        @endif
                                        <span class="inline-flex items-center gap-x-8 text-sm">
                                            <button type="button"
                                                @click="
                                            comments = document.getElementById('{{ strtolower(class_basename($post)) }}-{{ $post->id }}-comments')
                                            if(comments.style.display=='none'){
                                                comments.style.display='block'

                                            }
                                            else  comments.style.display='none'

                                            "
                                                class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                <!-- Heroicon name: solid/chat-alt -->
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                    data-name="Layer 1" viewbox="0 0 24 24" width="512"
                                                    height="512" fill="currentColor" aria-hidden="true"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                                                    </path>
                                                </svg><span
                                                    class="font-medium text-gray-900">{{ $post->comments->count() }}</span>
                                                <span class="sr-only">replies</span>
                                            </button>

                                            <button type="button"
                                                class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                <!-- Heroicon name: solid/eye -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewbox="0 0 512.19 512.19" xml:space="preserve" width="512"
                                                    height="512" fill="currentColor" aria-hidden="true"
                                                    class="h-5 w-5">
                                                    <g>
                                                        <circle cx="256.095" cy="256.095" r="85.333">
                                                        </circle>
                                                        <path
                                                            d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                                        </path>
                                                    </g>
                                                </svg><span
                                                    class="font-medium text-gray-900">{{ $post->post_views_count }}</span>
                                                <span class="sr-only">views</span>
                                            </button>
                                        </span>
                                        @if (auth()->check())
                                            @livewire('bookmark-button', ['postId' => $post->id])
                                        @endif

                                        @livewire('share-button', ['url' => route('post.show', $post->id), 'title' => $post->title])
                                    </div>
                                </div>
                                <!--------- END Engagement part--------->
                                <!-- start comments part -->
                                @livewire('comments', ['model' => $post])
                                <!-- end comments part -->
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div> --}}
        {{-- Create Button --}}
        <livewire:social.floating-create-button />
    </div>
</div>
