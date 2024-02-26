@extends('homes.social.layouts.base')
@section('title', __('Courses'))

@section('body')
    <div class="min-h-screen">
        <livewire:social.blog :blog="null" />
    </div>
@endsection
