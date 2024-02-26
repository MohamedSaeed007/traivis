@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')
    <!-- Dash Content -->
    @livewire('rewards-component',['business'=>$business])
    <!-- Dash Content -->
@endsection
