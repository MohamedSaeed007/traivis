@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
    @include('homes.social.business.navbars.institute')

    @can('students_access')
        @livewire('dashboard.students-component')
    @endcan

@endsection
