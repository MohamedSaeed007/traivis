@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.enterprise')
    <!-- Dash Content -->
    <div class="flex w-full flex-col">
{{--        <livewire:instructor-courses-list/>--}}
        @livewire('courses-component')
    </div>
    <!-- Dash Content -->
@endsection
