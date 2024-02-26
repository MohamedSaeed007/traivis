@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')

    @can('students_enrolled_access')
        @livewire('dashboard.students-component')
    @endcan

@endsection
