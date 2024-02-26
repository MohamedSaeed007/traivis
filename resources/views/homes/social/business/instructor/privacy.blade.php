@extends('homes.social.layouts.base')
@section('title', __('Trainer Dashboard'))

@section('body')
@include('homes.social.business.navbars.instructor')


<!-- Page Content -->
<div class="flex w-full flex-col px-4 sm:px-6 lg:px-8">

    <!--head-->
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Privacy & Setting</h1>
            <p class="mt-2 text-sm text-gray-700"></p>
        </div>
    </div>
    <!--END header-->


    <!--content-->
    @livewire('business-privacy')
    <!--End content-->


</div>
<!-- Page Content -->






@endsection
