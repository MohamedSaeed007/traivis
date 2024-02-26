@extends('homes.social.layouts.base')
@section('title', __('Course Quizes'))

@section('body')
    @include('homes.social.business.navbars.institute')
@can('courses_access')
@endcan
@endsection
