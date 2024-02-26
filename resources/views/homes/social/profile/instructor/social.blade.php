@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)
@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
    <x-modal.preview.video />
    <div class="min-h-screen bg-white transition-colors ">

        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])

        @include('homes.social.layouts.partials.profile.user.header',['block_privat'=>$block_privat])
        @if ($block_privat)
        <div class="flex-warp container mx-auto flex w-full max-w-6xl">
            <div class="mb-4 w-full px-4 md:mb-0 md:w-2/3">
                <div>
                    @if ($showHints)
                    <livewire:reel :user="$user" />
                    @else
                    <p>user is hidding his Hints</p>
                    @endif
                </div>
                <div class="mt-4">
                    <ul role="list" class="space-y-4">
                        <li class="mb-20 bg-white p-4 shadow sm:rounded-lg">
                            <article aria-labelledby="question-title-81614">
  
                           @if ($showNotes)
                           @livewire('social.posts-container',['user'=>$user])
                            @else
                            <p>user is hidding his Notes</p>
                           @endif
                                

                                <!-- end comments part -->

                            </article>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-4 w-full px-4 hidden md:block md:mb-0 md:w-1/3 h-[88vh] overflow-y-auto sticky top-[150px]">
                <div class="py-3">

                    <a href="#"
                        class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-traivis-50">
                        <!-- Heroicon name: outline/fire -->
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewbox="0 0 24 24"
                            width="512" height="512" fill="currentColor"
                            class="-ml-1 mr-3 h-6 w-6 flex-shrink-0 text-gray-800 group-hover:text-gray-500">
                            <path
                                d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z">
                            </path>
                            <path
                                d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z">
                            </path>
                        </svg><span class="truncate font-bold text-gray-500">Trending Blogs</span>

                    </a>

                </div>
                <section class="bg-white"
                    style="background-image: url('https://shuffle.dev/flex-ui-assets/elements/pattern-white.svg'); background-repeat: no-repeat; background-position: left top;">
                    <div class="container mx-auto">

                      
                        <div class="-mx-4 flex flex-wrap items-center">

                            <div class="-mx-4 flex flex-wrap items-center">
                                @if ($showBlogs)
                                    
                                <livewire:blog :user="$user" />
                                @else
                                <p class="mx-4">user is hidding his blogs</p>
                                @endif
                            
                            </div>

                        </div>

                    </div>
                </section>
            </div>
        </div>
        @endif
    </div>
@endsection
