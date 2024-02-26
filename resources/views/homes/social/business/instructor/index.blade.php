@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
@include('homes.social.business.navbars.instructor')
<!-- Dash Content -->
    <div class="flex w-full flex-col">

      @livewire('over-view')

    </div>
    <!-- Dash Content -->
    @endsection