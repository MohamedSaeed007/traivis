@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)

@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
    <div class="min-h-screen bg-white transition-colors ">

        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])

        @include('homes.social.layouts.partials.profile.user.header')

        <ul
                class="container m-6 mx-auto mb-32 grid w-full max-w-6xl grid-cols-1 gap-x-6 gap-y-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse ($courses as $course)
                <x-courses.card :course="$course">
                    <x-slot name="courseIcon">
                        <x-svg-icons.fi-brands-python class="h-6 w-6" />
                    </x-slot>
                </x-courses.card>
            @empty
                <p>You do not have any course yet</p>
            @endforelse
        </ul>

        <div class="flex-warp container mx-auto flex w-full max-w-6xl">
            <div class="mb-4 w-full px-4 pt-5 md:mb-0 md:w-2/3"></div>
            <div class="mb-4 w-full px-4 pt-5 md:mb-0 md:w-1/3"></div>
        </div>
    </div>
@endsection
