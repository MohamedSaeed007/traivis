@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
    @include('homes.social.business.navbars.instructor')
    <!-- Dash Content -->
    <div class="flex w-full flex-col">
        <livewire:help.faq-component />

    </div>
    <!-- Dash Content -->
@endsection
