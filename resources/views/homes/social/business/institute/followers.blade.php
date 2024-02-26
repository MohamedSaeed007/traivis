@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
    @include('homes.social.business.navbars.institute')
@can('followers_access')
@livewire('followers-component')
@endcan
@endsection
