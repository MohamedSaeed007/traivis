<!DOCTYPE html>
<html class="@yield('htmlClass')" lang="">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic,latin"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(mix('css/app.css'), true) }}">
    <script src="{{ asset(mix('js/app.js'), true) }}" defer></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        * {
            font-family: cairo;
        }

        /*-------scroll bar-------*/
        /* width */
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f2f2f2;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #bfbfbf;
            border-radius: 100px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
    </style>
    @livewireStyles
</head>
<body x-data :class="{ 'dark': $store.darkMode.on === true }"
      class="@yield('bodyClass')" x-cloak>
@yield('content')
@livewireScripts
</body>
</html>