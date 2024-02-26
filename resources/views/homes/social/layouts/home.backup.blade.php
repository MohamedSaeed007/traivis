<!DOCTYPE html>
<html class="h-full bg-gray-50" lang="">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset(mix('css/app.css'), true)}}">
    <script src="{{asset(mix('js/app.js'), true)}}"></script>

    <title>App Name - @yield('title')</title>

    {{--    <link rel="stylesheet" href="css/main.css" />--}}
</head>

<body class="py-16 bg-white h-full">
{{--<h1 class="mb-4 text-4xl text-center text-gray-800 font-bold font-sans">--}}
{{--    Tailwind CSS Boilerplate--}}
{{--</h1>--}}
{{--<p class="text-sm text-center text-gray-600 font-sans">--}}
{{--    Get started by editing index.html--}}
{{--</p>--}}

@include('homes.social.layouts.components.header')

@section('body')
    body
@show

@includeUnless(isset($noFooter), 'homes.social.layouts.components.footer')
</body>
</html>
