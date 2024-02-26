@extends('homes.social.layouts.base')
@section('title', __('Course Details'))

@section('body')
    @include('homes.social.business.navbars.institute')

    <!-- Dash Content -->
    <div class="flex w-full flex-col ">


        @livewire('course-details',['course_id' => $course_id])


    </div>
    <!-- Dash Content -->
@endsection
