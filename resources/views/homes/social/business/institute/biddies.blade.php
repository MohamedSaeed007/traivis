@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
@include('homes.social.business.navbars.institute')

@livewire('institution-biddies')

@endsection