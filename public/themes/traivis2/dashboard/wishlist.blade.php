@extends(theme('dashboard.layouts.dashboard'))
<link rel="stylesheet" href="{{ theme_asset('website/css/style.css') }}">
<style>
    .navbar-brand img {
    max-width: 100% !important;
}
    </style>
@section('content')


<div class="page-header">
    <h5 class="page-header-left mt5"> Wishlist </h5>
    <i class="float-right far fa-question-circle" style="color: grey ; font-size:30px" data-toggle="tooltip"
    data-placement="bottom" title="Find all courses you have liked here ."></i>
    <hr>
</div>


    @php
        $courses = $auth_user->wishlist()->publish()->get();
    @endphp

    @if($courses->count())
        <div class="row">
            @foreach($courses as $course)
                {!! course_card($course, 'col-md-3') !!}
            @endforeach
        </div>
    @else
        {!! no_data(null, null, 'my-5' ) !!}
    @endif

@endsection
