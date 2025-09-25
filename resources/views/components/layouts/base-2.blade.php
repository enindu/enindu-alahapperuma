<!doctype html>
<html class="h-100" id="html" lang="en">

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
    <link href="https://github.com/enindu" rel="me">
    <link href="https://gitlab.com/enindu" rel="me">
    <link href="https://linkedin.com/in/enindu" rel="me">
    <link href="https://x.com/Enindu" rel="me">
    <link href="https://www.facebook.com/enindu.alahapperuma.official" rel="me">
    <link href="https://www.instagram.com/enindu" rel="me">
    <link href="https://mastodon.social/@enindu" rel="me">
    <link href="https://news.ycombinator.com/user?id=Enindu" rel="me">
    <link href="https://medium.com/@Enindu" rel="me">
    <link href="https://www.reddit.com/user/Enindu" rel="me">
    <link href="https://www.quora.com/profile/Enindu-Alahapperuma" rel="me">
    <link href="https://www.pinterest.com/enindu" rel="me">
    <link href="https://indieweb.org/User:Enindu.com" rel="me">
    <link href="https://www.buymeacoffee.com/enindu" rel="me">
    <link href="{{ Vite::asset('resources/images/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ Vite::asset('resources/css/style.css') }}" rel="stylesheet">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];

            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });

            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';

            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;

            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KFRPPXVL');
    </script>
</head>

<body class="overflow-hidden h-100">
    <noscript>
        <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-KFRPPXVL" style="display: none; visibility: hidden;" width="0"></iframe>
    </noscript>
    @include('components.includes.preloader')
    @include('components.includes.particles')
    <div class="container py-3 h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-12 col-lg-6">
                <div class="d-flex flex-column gap-3">
                    @yield('content')
                    @include('components.includes.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ Vite::asset('resources/js/script.js') }}" type="module"></script>
</body>

</html>
