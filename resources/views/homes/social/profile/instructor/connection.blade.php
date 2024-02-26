@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)

@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
<div class="min-h-screen bg-white transition-colors ">
    @include('homes.social.layouts.partials.courses.header', [
        'no_result_panel_for_global_search' => true,
    ])
    @include('homes.social.layouts.partials.profile.user.header')
    @livewire('business-followers',['business'=>$user])
</div>
@endsection
