@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)

@section('bodyClass', 'antialiased bg-body text-body font-body')

@section('body')
    <div class="min-h-screen bg-white transition-colors ">
        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])

        <div class="flex w-full">

            @if (auth()->id() == request('id'))
                <div x-data="{ SMopen: true }"
                     class="sticky top-20 h-[100vh] flex-shrink-0 transition-all bg-white z-50 border-r border-slate-300">

                    @livewire('profile.profile-side-bar',['user'=>$user])

                </div>
            @endif

            <div class="w-full flex flex-col">

                @include('homes.social.layouts.partials.profile.user.header')
                <div class="relative mx-auto flex justify-between w-full">

                    <div class="w-full">
                        <ul role="list" class="space-y-4 px-5">
                            @forelse ($posts as $post)
                                @livewire('single-component.single-post',['post'=>$post] , key($post->id))
                            @empty
                                <p class="w-full flex justify-center mx-auto">no bookmarks</p>
                            @endforelse
                        </ul>
                    </div>






                </div>

            </div>

        </div>


    </div>
@endsection