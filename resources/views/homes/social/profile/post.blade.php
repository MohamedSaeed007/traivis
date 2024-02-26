@extends('homes.social.layouts.base')
@section('title', $title)
@section('bodyClass', 'antialiased bg-body text-body font-body overflow-x-hidden')
@section('body')

    <div class="min-h-screen">
        @include('homes.social.layouts.partials.courses.header')
        <div class="transition-colors ">
            <div class="mx-auto flex">
                <main class="container mx-auto lg:col-span-9 xl:col-span-10">
                    <!-- Your content -->
                    <!-- new -->
                    <div class="relative mx-auto w-full px-5 md:w-2/3 lg:w-3/5">
                        <div class="container mx-auto lg:max-w-3xl">

                            <!--Note-->
                            <div class="mt-4">
                                <ul class="space-y-4" role="list">
                                    <li class="mb-20 bg-white p-4 shadow sm:rounded-lg">
                                        <article aria-labelledby="question-title-81614">

                                            <!--------- feed part--------->
                                            <div>
                                                <!---------feed header--------->
                                                <div class="flex space-x-3">

                                                    <div class="relative">
                                                        <!-- User Avatar -->
                                                        <div class="flex-shrink-0">
                                                            <img alt=""
                                                                class="h-10 w-10 rounded-full"
                                                                src="{{ $post->business ? $post->business?->avatar : $post->user?->avatar }}">
                                                        </div>
                                                        <!-- Online Status Dot -->
                                                        <div class="absolute -right-3 bottom-5 h-5 w-5 rounded-full border-4 border-white bg-green-400 sm:invisible sm:top-2 md:visible"
                                                            title="User is online"></div>
                                                    </div>

                                                    <div class="min-w-0 flex-1">
                                                        <div class="flex h-8 flex-row">
                                                            <!-- Username -->
                                                            @if ($post->business)
                                                                <a href="{{ route('business-profile-social', $post->business->id) }}"
                                                                    target="_blank">
                                                                    <h2 class="text-lg font-semibold">
                                                                        {{ $post->business->business_name }}
                                                                    </h2>
                                                                </a>
                                                            @elseif ($post->user)
                                                                <a href="{{ route('user-profile-social', $post->user->id) }}"
                                                                    target="_blank">
                                                                    <h2 class="text-lg font-semibold">
                                                                        {{ $post->user->name }}</h2>
                                                                </a>
                                                            @endif

                                                            <!-- User Verified -->
                                                            <svg class="my-auto ml-2 h-5 text-blue-500"
                                                                fill="currentColor" height="24"
                                                                version="1.1" viewbox="0 0 24 24"
                                                                width="24"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <path
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-gray-500">
                                                            <a class="hover:underline"
                                                                href="{{ route('post.show', $post->id) }}">
                                                                <x-tooltip-arrow-up :text="$post->created_at->format(
                                                                    'l, F j, Y \a\t g:i A',
                                                                )">
                                                                    {{ $post->created_at->shortAbsoluteDiffForHumans() }}
                                                                </x-tooltip-arrow-up>
                                                            </a>
                                                        </p>
                                                    </div>

                                                    <!--------- feed Dropdown--------->
                                                    <div class="flex flex-shrink-0 self-center">
                                                        <div class="relative inline-block text-left">

                                                            <!--- Dropdown button---->
                                                            <div>
                                                                <button aria-expanded="false"
                                                                    aria-haspopup="true"
                                                                    class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600"
                                                                    id="post-menu-button" type="button">
                                                                    <span class="sr-only">Open options</span>
                                                                    <!-- Heroicon name: solid/dots-vertical -->
                                                                    <svg aria-hidden="true" class="h-5 w-5"
                                                                        fill="currentColor"
                                                                        viewbox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!---END Dropdown button---->

                                                            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                            Dropdown menu, show/hide based on menu state.
                                                                                                                                                                                                                                                                                                                                                                                                                                            Entering: "transition ease-out duration-100"
                                                                                                                                                                                                                                                                                                                                                                                                                                            From: "transform opacity-0 scale-95"
                                                                                                                                                                                                                                                                                                                                                                                                                                            To: "transform opacity-100 scale-100"
                                                                                                                                                                                                                                                                                                                                                                                                                                            Leaving: "transition ease-in duration-75"
                                                                                                                                                                                                                                                                                                                                                                                                                                            From: "transform opacity-100 scale-100"
                                                                                                                                                                                                                                                                                                                                                                                                                                            To: "transform opacity-0 scale-95"  -->

                                                            <!--- Dropdown content ---->

                                                            <div aria-labelledby="options-menu-0-button"
                                                                aria-orientation="vertical"
                                                                class="absolute right-0 mt-2 hidden w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                id="post-dropdown" role="menu"
                                                                tabindex="-1">

                                                                <div class="py-1" role="none">

                                                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->

                                                                    <a class="flex px-4 py-2 text-sm text-gray-700"
                                                                        href="#"
                                                                        id="options-menu-0-item-1"
                                                                        role="menuitem" tabindex="-1">
                                                                        <!-- Heroicon name: solid/code -->
                                                                        <svg aria-hidden="true"
                                                                            class="mr-3 h-5 w-5 text-gray-400"
                                                                            fill="currentColor"
                                                                            viewbox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path clip-rule="evenodd"
                                                                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span>Embed</span>
                                                                    </a>
                                                                    <a class="flex px-4 py-2 text-sm text-gray-700"
                                                                        href="#"
                                                                        id="options-menu-0-item-2"
                                                                        role="menuitem" tabindex="-1">
                                                                        <!-- Heroicon name: solid/flag -->
                                                                        <svg aria-hidden="true"
                                                                            class="mr-3 h-5 w-5 text-gray-400"
                                                                            fill="currentColor"
                                                                            viewbox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path clip-rule="evenodd"
                                                                                d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span>Report content</span>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <!---END Dropdown content ---->

                                                        </div>
                                                    </div>
                                                    <!---END feed Dropdown ---->

                                                </div>
                                                <!---------END feed header--------->

                                                <!--------- feed content--------->
                                                <h2 class="py-4 text-lg font-bold font-semibold">
                                                    <span class="text-gray-400">
                                                        @if ($post->status == 'draft')
                                                            <x-svg-icons.fi-rr-lock
                                                                class="inline-block h-5 w-5" />
                                                        @else
                                                            <x-svg-icons.fi-rr-globe
                                                                class="inline-block h-5 w-5" />
                                                        @endif
                                                        @if (
                                                            ($post->business &&
                                                                $post->business->is(\App\Classes\Helper::getCurrentEntity()) &&
                                                                auth()->user()
                                                                    ?->can('blog_edit') &&
                                                                $post->type == 'blog') ||
                                                                (!$post->business &&
                                                                    auth()->user()
                                                                        ?->can('blog_edit')))
                                                            <x-svg-icons.fi-rr-file-edit
                                                                class="inline-block h-5 w-5 cursor-pointer"
                                                                @click="Livewire.emit('blogEdit',{{ $post->id }})" />
                                                        @endif
                                                    </span>
                                                    {{ $post->title }}
                                                </h2>
                                                <div
                                                    class="w-full rounded-lg bg-white shadow-md  ">
                                                    <a class=""
                                                        href="{{ route('post.show', $post->id) }}">
                                                        <img alt=""
                                                            class="h-auto max-h-[500px] w-full object-cover"
                                                            src="{{ $post->getFirstMediaUrl() }}">
                                                    </a>
                                                </div>
                                                <div class="mt-5">
                                                    {!! $post->post_content !!}
                                                </div>
                                                <!---------END feed content--------->
                                            </div>
                                            <!---------END feed part--------->

                                            <!--------- START Engagement part --------->
                                            <div
                                                class="flex flex-col justify-between justify-items-center space-x-8 border-b-2 border-gray-200">
                                                <div
                                                    class="flex items-center justify-between justify-items-center p-3">

                                                    @if (auth()->check())
                                                        @livewire('like-button', ['post' => $post])
                                                    @endif

                                                    <span class="inline-flex items-center text-sm">
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
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                id="Layer_1" data-name="Layer 1"
                                                                viewbox="0 0 24 24" width="512"
                                                                height="512" fill="currentColor"
                                                                aria-hidden="true" class="h-5 w-5">
                                                                <path
                                                                    d="M12.009,23.665c-.476,0-.955-.168-1.337-.507l-3.748-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0H20c2.206,0,4,1.794,4,4v12c0,2.206-1.794,4-4,4h-2.852l-3.847,3.18c-.362,.322-.825,.484-1.293,.484ZM4,2c-1.103,0-2,.897-2,2v12c0,1.103,.897,2,2,2h3.289c.236,0,.464,.083,.645,.235l4.047,3.41,4.17-3.416c.18-.148,.405-.229,.638-.229h3.212c1.103,0,2-.897,2-2V4c0-1.103-.897-2-2-2H4Z">
                                                                </path>
                                                            </svg><span
                                                                class="font-medium text-gray-900  ">{{ $post->comments->count() }}</span>
                                                            <span class="sr-only">replies</span>
                                                        </button>
                                                    </span>

                                                    <span
                                                        class="inline-flex items-center text-sm md:w-32 lg:w-52 2xl:w-72">
                                                        <button type="button"
                                                            class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                            <!-- Heroicon name: solid/eye -->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                id="Capa_1" x="0px"
                                                                y="0px" viewbox="0 0 512.19 512.19"
                                                                xml:space="preserve" width="512"
                                                                height="512" fill="currentColor"
                                                                aria-hidden="true" class="h-5 w-5">
                                                                <g>
                                                                    <circle cx="256.095" cy="256.095"
                                                                        r="85.333">
                                                                    </circle>
                                                                    <path
                                                                        d="M496.543,201.034C463.455,147.146,388.191,56.735,256.095,56.735S48.735,147.146,15.647,201.034   c-20.862,33.743-20.862,76.379,0,110.123c33.088,53.888,108.352,144.299,240.448,144.299s207.36-90.411,240.448-144.299   C517.405,277.413,517.405,234.777,496.543,201.034z M256.095,384.095c-70.692,0-128-57.308-128-128s57.308-128,128-128   s128,57.308,128,128C384.024,326.758,326.758,384.024,256.095,384.095z">
                                                                    </path>
                                                                </g>
                                                            </svg><span
                                                                class="font-medium text-gray-900  ">{{ $post->postViews->count() }}</span>
                                                            <span class="sr-only">views</span>
                                                        </button>
                                                    </span>

                                                    @if (auth()->check())
                                                        @livewire('bookmark-button', ['postId' => $post->id])
                                                    @endif

                                                    @livewire('share-button', ['url' => route('post.show', $post->id), 'title' => $post->title], key('share-button-' . $post->id))

                                                </div>
                                            </div>
                                            <!--------- END Engagement part--------->

                                            <!-- start comments part -->
                                            @livewire('comments', ['model' => $post])
                                            <!-- end comments part -->

                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <!--Note-->

                            <!--create-->
                            <livewire:social.floating-create-button />
                            <!--create-->

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
