@extends('homes.social.layouts.base')
@section('title', __('Enterprise Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')
    <!-- Dash Content -->

        @livewire('biddings.show-biddings')
    <!-- Dash Content -->
@endsection
