@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')

    @livewire('followers-component')

@endsection
