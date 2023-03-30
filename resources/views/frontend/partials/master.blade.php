<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CCHNORTH') }}</title>
    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="CCHNORTH - chal chalain north">
    <meta name="author" content="showkat ali">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    @include('frontend.partials.links')

</head>

<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">

        @include('frontend.partials.navbar')

        <div role="main" class="main">

            @yield('content')

            @include('frontend.partials.footer')
        </div>
    </div>

    {{-- script --}}
        @include('frontend.partials.scripts')

</body>

</html>
