@if(session('super_admin_id'))

<style>
    html {
        margin-top: 50px;
    }

    body.filament-body>div.filament-app-layout>aside.filament-sidebar {
        padding-top: 50px;
    }

    #impersonate-banner {
        position: fixed;
        height: 50px;
        top: 0;
        width: 100%;
        display: flex;
        column-gap: 20px;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        background-color: #1f2937;
        color: #f3f4f6;
        border-bottom: 1px solid #374151;
    }

    #impersonate-banner a {
        display: block;
        padding: 4px 20px;
        background-color: #d1d5db;
        color: #000;
        border-radius: 5px;
    }

    #impersonate-banner a:hover {
        background-color: #f3f4f6;
    }

    @media print {

        aside,
        body {
            margin-top: 0;
        }

        #impersonate-banner {
            display: none;
        }
    }
</style>

<div id="impersonate-banner">
    <div>
        {{ __('Impersonating user') }} <strong>{{ auth()->user()->name }}</strong>
    </div>
    <a href="{{ route('impersonate-leave') }}">{{ __('Leave') }}</a>
</div>
@endIf