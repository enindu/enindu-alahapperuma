<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="{{ $description }}" name="description">
    <meta content="{{ $keywords }}" name="keywords">
    <meta content="Enindu Alahapperuma (enindu@gmail.com)" name="author">
    <meta content="{{ $title }} | {{ env('APP_NAME') }}" property="og:title">
    <meta content="{{ $description }}" property="og:description">
    <meta content="website" property="og:type">
    <meta content="{{ url()->current() }}" property="og:url">
    <meta content="{{ Vite::asset('resources/images/meta.png') }}" property="og:image">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="@Enindu" name="twitter:site">
    <meta content="@Enindu" name="twitter:creator">
    <meta content="{{ $title }} | {{ env('APP_NAME') }}" name="twitter:title">
    <meta content="{{ $description }}" name="twitter:description">
    <meta content="{{ Vite::asset('resources/images/meta.png') }}" name="twitter:image">
    <meta content="#000000" name="theme-color">
    <meta content="{{ Vite::asset('resources/images/ms-application-tile-image.png') }}" name="msapplication-TileImage">
    <meta content="#000000" name="msapplication-TileColor">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    <link href="{{ url()->current() }}" rel="canonical">
    <link href="https://webmention.io/enindu.com/webmention" rel="webmention">
    <link href="https://webmention.io/enindu.com/xmlrpc" rel="pingback">
    <link href="{{ url('rss.xml') }}" rel="alternate" title="{{ env('APP_NAME') }}" type="application/rss+xml">
    <link href="https://mastodon.social/@enindu" rel="me">
    <link href="https://github.com/enindu" rel="me">
    <link href="https://gitlab.com/enindu" rel="me">
    <link href="{{ Vite::asset('resources/images/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ Vite::asset('resources/css/style.css') }}" rel="stylesheet">
</head>

<body class="overflow-hidden">
    @include('components.includes.preloader')
    @include('components.includes.particles')
    <div class="container my-3">
        <div class="row g-3">
            <div class="col-12 col-lg-3 order-lg-1 order-2">
                <div class="d-flex flex-column gap-3">
                    @include('components.includes.profile')
                    @include('components.includes.links')
                    @include('components.includes.footer')
                </div>
            </div>
            <div class="col-12 col-lg-9 order-lg-2 order-1">
                <div class="d-flex flex-column gap-3">
                    @include('components.includes.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ Vite::asset('resources/js/script.js') }}" type="module"></script>
</body>

</html>
