@extends('homes.social.layouts.base')
@section('title', __('Course Details'))

@section('body')
    @include('homes.social.business.navbars.instructor')

    @can('courses_access')
        <!-- Dash Content -->
        <div class="flex w-full flex-col">
            @livewire('courses.edit')
        </div>
        <!-- Dash Content -->
    @endcan
@endsection
