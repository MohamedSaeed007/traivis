@extends('homes.social.layouts.base')
@section('htmlClass', '')
@section('title', $title)

@section('bodyClass', 'antialiased bg-body text-body font-body')
@section('body')
<div class="transition-colors    sticky top-0 z-50">
    @include('homes.social.layouts.partials.courses.header', [
    'no_result_panel_for_global_search' => true,
    ])
</div>
@livewire('web-search-page')
@endsection