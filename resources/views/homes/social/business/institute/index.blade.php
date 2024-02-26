@extends('homes.social.layouts.base')
@section('title', __('Institute Dashboard'))

@section('body')
@include('homes.social.business.navbars.institute')
<!-- Dash Content -->
    <div class="flex w-full flex-col">

        @livewire('over-view')

    </div>
    <!-- Dash Content -->
    @endsection