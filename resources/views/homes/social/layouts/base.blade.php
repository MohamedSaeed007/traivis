<!DOCTYPE html>
<html class="@yield('htmlClass')" lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- select2 package for multiselect --}}
    <link href="https://fastly.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://fastly.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- --}}
    <link rel="stylesheet" href="{{ asset(mix('css/app.css'), true) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic,latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    <script src="{{ asset(mix('js/app.js'), true) }}" defer></script>
    {{-- <script defer src="https://unpkg.com/alpinejs@2.x.x/dist/cdn.min.js"></script> --}}
    {{-- <script src="https://fastly.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    {{-- <script src="https://fastly.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script> --}}
    {{-- <script defer src="https://fastly.jsdelivr.net/npm/pinecone-router@1.x.x/dist/index.umd.js"></script> --}}

    {{-- <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script> --}}
    {{-- <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script> --}}

    {{--
    <link href="https://fastly.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

    {{-- <title>Traivis - @yield('title')</title> --}}

    {!! SEO::generate() !!}

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <link href="https://vjs.zencdn.net/8.5.2/video-js.css" rel="stylesheet" />

    @yield('styles')
    {{--
    <link rel="stylesheet" href="css/main.css" /> --}}
    @livewireStyles
    @stack('header_scripts')
    @stack('header_styles')

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- My FireBase Scripts -->
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-functions.js"></script>

    @include('firebase.notifications')
</head>

{{--

<body x-data="{darkMode:false}" :class="{'dark': darkMode === true}" class="@yield('bodyClass')"> --}}

    <body x-data :class="{ 'dark': $store.darkMode.on === true }"
        class="@yield('bodyClass') overflow-x-hidden bg-white transition-colors " x-cloak>
        <livewire:toasts />
    @include('components.impersonate-banner')
    @section('body')

    @show
    {{--    @livewire('login-register-popup') --}}
    @auth
        @livewire('issue-report-component')
        @endauth
        <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
        @livewireScripts
        {{-- @yield('scripts') --}}
        @livewire('livewire-ui-modal')
        @stack('scripts')
    <script>
        function CopyCourseUrlToClipboard(value) {
            navigator.clipboard.writeText(value);
        }
    </script>
</body>

</html>
