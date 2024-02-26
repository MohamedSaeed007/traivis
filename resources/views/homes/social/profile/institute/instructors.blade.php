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

        <div
            class="container m-6 mx-auto mb-32 grid w-full max-w-6xl grid-cols-1 gap-x-6 gap-y-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @if ($block_env)
                @forelse ($instructors as $instructor)
                    <div
                        class="group w-full rounded-lg border-b-2 border-t border-gray-200 bg-white px-4 py-8 transition-colors hover:border-traivis-300 hover:bg-traivis-50  ">
                        <div class="mx-auto max-w-xs text-center">
                            <img class="mx-auto mb-6 h-24 w-24 rounded-full object-cover"
                                src="{{ $instructor?->instructor?->avatar }}" alt=""><a
                                href="{{ route('business-profile-social', [$instructor?->instructor?->id]) }}"
                                class="mb-1 flex w-full justify-center text-lg font-bold text-gray-700 transition-colors ">
                                {{ $instructor?->instructor?->business_name }}</a>
                            <span
                                class="inline-block flex inline-flex w-auto rounded-full border border-gray-500 px-2 text-xs font-bold text-gray-500 transition-colors group-hover:border-traivis-400 group-hover:border-traivis-500 group-hover:text-traivis-500  ">
                                {{ $instructor->task_status }}
                            </span>

                        </div>
                    </div>
                @empty
                    <p>No instructor</p>
                @endforelse
            @else
                <p>this page is a private page </p>
            @endif

        </div>

        <div class="-mx-4 -mb-4 flex flex-wrap md:mb-0">

        </div>

    </div>
@endsection
