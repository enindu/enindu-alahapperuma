<div class="card rounded-5 p-3">
    <div class="card-body">
        <header>
            <div class="d-flex justify-content-between flex-row">
                <div class="d-flex flex-column flex-lg-row gap-lg-3 gap-0">
                    <a class="text-decoration-none {{ request()->routeIs('index') ? 'active' : '' }} text-white" href="{{ route('index') }}">Home</a>
                    <a class="text-decoration-none {{ request()->routeIs('services.*') ? 'active' : '' }} text-white" href="{{ route('services.index') }}">Services</a>
                    <a class="text-decoration-none {{ request()->routeIs('contact.*') ? 'active' : '' }} text-white" href="{{ route('contact.index') }}">Contact</a>
                </div>
                <div class="d-flex flex-column flex-lg-row gap-lg-3 gap-0">
                    <a class="text-decoration-none text-white" href="#">Sitemap</a>
                </div>
            </div>
        </header>
    </div>
</div>
