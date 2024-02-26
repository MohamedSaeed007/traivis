@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
@include('homes.social.business.navbars.institute')

<!-- Dash Content -->
@can('calenders_access')
<!-- Dash Content -->

@livewire('business-calender-event-component')

<!-- Dash Content -->
@endcan
    @endsection
