<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

    <!-- Fonts -->
        <link href="https://fonts.cdnfonts.com/css/operator-mono" rel="stylesheet">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="h-full font-sans antialiased">
        <x-jet-banner />

        <!-- Navigation Menu -->
        @hasSection('navigation')
            @yield('navigation')
        @endif

        <!-- Page Heading -->
        @hasSection('header')
            @yield('header')
        @endif

        <!-- Page Content -->
        @yield('body')

        @stack('modals')

        @livewireScripts
    </body>
</html>
