@extends('homes.social.layouts.base')
@section('title', __('Enterprise Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')
    <!-- Dash Content -->
    
    @livewire('organization-stracture.organiztion-structure')

    <!-- Dash Content -->
@endsection