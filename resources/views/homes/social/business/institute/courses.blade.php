@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.institute')
@can('courses_access')
    <!-- Dash Content -->
    <div class="flex w-full flex-col">
        @livewire('courses-component')
    </div>
    <!-- Dash Content -->
@endcan
@endsection
