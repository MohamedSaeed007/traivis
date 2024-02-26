@extends('homes.social.layouts.base')
@section('title', __('Conversations'))

@section('body')
    <div class="flex h-full flex-col bg-white">
        @include('homes.social.layouts.partials.courses.header', [
            'no_result_panel_for_global_search' => true,
        ])
        @livewire('chat-component')
    </div>
@endsection
