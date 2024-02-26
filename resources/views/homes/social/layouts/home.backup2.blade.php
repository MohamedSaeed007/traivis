<!DOCTYPE html>
<html class="h-full bg-gray-50" lang="">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset(mix('css/app.css'), true)}}">

    {{--    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>--}}
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <script src="{{asset(mix('js/app.js'), true)}}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>App Name - @yield('title')</title>

    {{--    <link rel="stylesheet" href="css/main.css" />--}}
</head>

<body class="">

<div class="bg-white ">
    @include('homes.social.layouts.partials.courses.header')

    <main>
        <!-- Hero section -->
        <!-- Logo Cloud -->


        <!-- Alternating Feature Sections -->
        <div class="relative pt-16 pb-32 overflow-hidden">


        </div>
    </main>

    @include('homes.social.layouts.partials.footer')
</div>


</body>
</html>
