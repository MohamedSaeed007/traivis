@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
    @include('homes.social.business.navbars.institute')

@can('instructors_access')
<!-- Dash Content -->
@livewire('institute-free-lancers')
<!-- Dash Content -->

@endcan

@endsection
