@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')
@can('claim_rewards_access')
    <!-- Dash Content -->
   @livewire('rewards-component',['business'=>$business])
    <!-- Dash Content -->
@endcan

@endsection
