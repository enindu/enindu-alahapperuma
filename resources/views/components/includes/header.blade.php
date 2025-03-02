<div class="card rounded-5 p-3">
    <div class="card-body">
        <header class="header-wrapper">
            <div class="d-flex justify-content-between flex-row gap-3">
                <div class="d-flex flex-row gap-3">
                    <a class="text-decoration-none {{ request()->routeIs('index') ? 'active' : '' }} text-white" href="{{ route('index') }}">Home</a>
                    <a class="text-decoration-none {{ request()->routeIs('services.*') ? 'active' : '' }} text-white" href="{{ route('services.index') }}">Services</a>
                    <a class="text-decoration-none {{ request()->routeIs('contact.*') ? 'active' : '' }} text-white" href="{{ route('contact.index') }}">Contact</a>
                </div>
                <div class="d-flex flex-row gap-3">
                    <a class="text-decoration-none text-white" href="{{ url('sitemap.xml') }}">Sitemap</a>
                </div>
            </div>
        </header>
    </div>
</div>
