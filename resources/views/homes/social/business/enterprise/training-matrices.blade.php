@extends('homes.social.layouts.base')
@section('title', __('Enterprise Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')
    <!-- Dash Content -->
    
    @livewire('training-matricess.training-matricess')

    <!-- Dash Content -->
@endsection