<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="{{ $description }}" name="description">
    <meta content="{{ $keywords }}" name="keywords">
    <meta content="Enindu Alahapperuma (enindu@gmail.com)" name="author">
    <meta content="{{ $title }} | {{ env('APP_NAME') }}" property="og:title">
    <meta content="{{ $description }}" property="og:description">
    <meta content="{{ $type }}" property="og:type">
    <meta content="{{ url()->current() }}" property="og:url">
    <meta content="{{ Vite::asset('resources/images/og-image.png') }}" property="og:image">
    {{ isset($meta) ? $meta : null }}
    <meta content="summary_large_image" name="twitter:card">
    <meta content="@Enindu" name="twitter:site">
    <meta content="@Enindu" name="twitter:creator">
    <meta content="{{ $title }} | {{ env('APP_NAME') }}" name="twitter:title">
    <meta content="{{ $description }}" name="twitter:description">
    <meta content="{{ Vite::asset('resources/images/og-image.png') }}" name="twitter:image">
    <meta content="#000000" name="theme-color">
    <meta content="{{ Vite::asset('resources/images/ms-application-tile-image.png') }}" name="msapplication-TileImage">
    <meta content="#000000" name="msapplication-TileColor">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    @if (request()->query->count() < 1)
        <link href="{{ url()->current() }}" rel="canonical">
    @endif
    <link href="https://webmention.io/enindu.com/webmention" rel="webmention">
    <link href="https://webmention.io/enindu.com/xmlrpc" rel="pingback">
    <link href="{{ url('rss.xml') }}" rel="alternate" title="{{ env('APP_NAME') }}" type="application/rss+xml">
    <link href="https://mastodon.social/@enindu" rel="me">
    <link href="https://github.com/enindu" rel="me">
    <link href="https://gitlab.com/enindu" rel="me">
    <link href="{{ Vite::asset('resources/images/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    @vite('resources/css/style.css')
</head>

<body class="ps-xxl-sbwidth">
    <x-includes.header />
    <x-includes.sidebar :id="$id" />
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{ $slot }}
                <x-includes.footer />
            </div>
        </div>
    </div>
    @vite('resources/js/script.js')
</body>

</html>
