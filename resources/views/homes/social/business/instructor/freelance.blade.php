@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')
@can('freelances_access')
   @livewire('freelance-portal')
@endcan
@endsection
