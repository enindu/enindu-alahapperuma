<section id="header-section">
    <div class="container">
        <header class="header">
            <div class="logo">
                <a aria-label="Go to home" href="{{ route('index') }}">
                    <img alt="logo" height="80" src="{{ Vite::asset('resources/images/logo.svg') }}" width="80">
                </a>
            </div>
            <div class="links">
                <a class="{{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                <a class="{{ request()->routeIs('about.*') ? 'active' : '' }}" href="{{ route('about.index') }}">About</a>
                <a class="{{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
                <a class="{{ request()->routeIs('clients.*') ? 'active' : '' }}" href="{{ route('clients.index') }}">Clients</a>
                <a class="{{ request()->routeIs('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
                <a class="{{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                    <span>Hire me</span>
                    <i class="ri-arrow-right-up-line"></i>
                </a>
            </div>
        </header>
    </div>
</section>
