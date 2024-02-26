@extends('homes.social.layouts.base')
@section('title', __('Course Sections'))

@section('body')
    @include('homes.social.business.navbars.instructor')

@can('courses_access')

@endcan
@endsection
