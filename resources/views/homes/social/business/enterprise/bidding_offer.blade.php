@extends('homes.social.layouts.base')
@section('title', __('Enterprise Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')
    <!-- Dash Content -->
    
    @livewire('bidding-offer.bidding-offer',['id'=>$id])

    <!-- Dash Content -->
@endsection