@extends('homes.social.layouts.base')
@section('title', __('Course Assignments'))

@section('body')
    @include('homes.social.business.navbars.institute')
@can('courses_access')
    <!-- Dash Content -->
    <div class="flex w-full flex-col ">

        @livewire('course-assignments',['course' => $course,'assignment'=>$assignment])

    </div>
    <!-- Dash Content -->
@endcan
@endsection