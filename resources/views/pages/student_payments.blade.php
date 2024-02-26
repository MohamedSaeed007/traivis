@extends('homes.social.layouts.base')
@section('title', __('Student Payments'))

@section('body')
@include('homes.social.layouts.partials.courses.header')

@livewire('payments-component')
@endsection