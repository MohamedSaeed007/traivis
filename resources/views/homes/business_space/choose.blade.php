@extends('homes.social.layouts.base')
@section('title', __('Enterprise Dashboard'))

@section('body')
    <div class="transition-colors   ">
        @include('homes.social.layouts.partials.courses.header', [
        'no_result_panel_for_global_search' => true,
        ])
    </div>


    @livewire('business-space-operations')
    <link href="https://fastly.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
          rel="stylesheet"/>
    <script src="https://fastly.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.selectw2').select2();
        });
    </script>
@endsection
