@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
    @include('homes.social.business.navbars.institute')
@can('claim_rewards_access')
<!-- Dash Content -->
@livewire('rewards-component',['business'=>$business])
<!-- Dash Content -->
@endcan
@endsection
