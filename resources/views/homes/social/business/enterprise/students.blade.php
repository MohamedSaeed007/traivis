@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')

    @livewire('dashboard.students-component')

@endsection
