<div class="card d-none d-lg-block">
    <div class="card-body">
        <div class="x-internal-links-container">
            <div class="x-internal-links">
                <p>Internal Links</p>
                <a class="{{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                <a class="{{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
                <a class="{{ request()->routeIs('clients.*') ? 'active' : '' }}" href="{{ route('clients.index') }}">Clients</a>
                <a class="{{ request()->routeIs('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
                <a class="{{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                <a href="{{ url('sitemap.xml') }}" target="_blank">Sitemap</a>
                <a href="{{ url('rss.xml') }}" target="_blank">RSS</a>
            </div>
        </div>
    </div>
</div>
