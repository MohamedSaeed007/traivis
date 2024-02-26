@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')

@can('courses_access')
    @livewire('courses-component')
@endcan
@endsection
