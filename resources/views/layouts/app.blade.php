<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>{{ config('app.name', 'Dev CRM') }}</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicon-16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon-32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('public/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('public/android-192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('public/android-512.png') }}">


    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @livewireStyles
</head>
<body class="">
    
    <x-header />
    <x-theme-switcher />
    <x-sidebar />
   
    {{ $slot ?? '' }}
    
    @stack('modals')
    
    @include('modals.offcanvas')
	@include('modals.modal')

    <footer class="footer mt-auto xl:ps-[15rem] font-normal font-inter bg-white leading-normal !text-[0.875rem] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
        <div class="container">
            <span class="text-gray dark:text-defaulttextcolor/50">Copyright &copy;<span id="year">{{ date('Y') }}</span><a href="javascript:void(0);" class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor">&nbsp;{{ config('app.name') }}</a> All rights reserved.
            </span>
        </div>
    </footer> 

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    @livewireScripts

    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/defaultmenu.js') }}" defer></script>
    <script src="{{ asset('assets/libs/tabulator-tables/js/tabulator.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/datatable.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom-switcher.js') }}" defer></script>
    <script src="{{ asset('assets/js/switch.js') }}"></script>
    
</body>
</html>
