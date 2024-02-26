@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')
    @can('calenders_access')
        <!-- Dash Content -->
        <div class="w-full">
            @livewire('business-events-calendar-component')
        </div>
        {{--        @livewire('business-calender-event-component') --}}
        <!-- Dash Content -->
    @endcan
@endsection
