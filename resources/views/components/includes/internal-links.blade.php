<div class="d-none d-lg-block card rounded-5 p-3">
    <div class="card-body">
        <div class="internal-links-wrapper overflow-x-scroll">
            <div class="internal-links d-flex flex-column">
                <a class="link text-white text-decoration-none {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                <a class="link text-white text-decoration-none {{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
                <a class="link text-white text-decoration-none {{ request()->routeIs('clients.*') ? 'active' : '' }}" href="{{ route('clients.index') }}">Clients</a>
                <a class="link text-white text-decoration-none {{ request()->routeIs('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
                <a class="link text-white text-decoration-none {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                <a class="link text-white text-decoration-none" href="{{ url('sitemap.xml') }}" target="_blank">Sitemap</a>
                <a class="link text-white text-decoration-none" href="{{ url('rss.xml') }}" target="_blank">RSS</a>
            </div>
        </div>
    </div>
</div>
