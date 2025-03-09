<div class="card rounded-5 p-3">
    <div class="card-body">
        <header class="header-wrapper overflow-x-scroll">
            <div class="header d-flex flex-row justify-content-between gap-3">
                <div class="d-flex flex-row gap-3">
                    <a class="link text-white text-decoration-none {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                    <a class="link text-white text-decoration-none {{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
                    <a class="link text-white text-decoration-none {{ request()->routeIs('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
                    <a class="link text-white text-decoration-none {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                </div>
                <div class="d-flex flex-row gap-3">
                    <a class="link text-white text-decoration-none" href="{{ url('sitemap.xml') }}" target="_blank">Sitemap</a>
                    <a class="link text-white text-decoration-none" href="{{ url('rss.xml') }}" target="_blank">RSS</a>
                </div>
            </div>
        </header>
    </div>
</div>
