<div class="card d-none d-lg-block">
    <div class="card-body">
        <div class="x-profile-container">
            <div class="x-profile h-card">
                <div class="x-profile-logo">
                    <a href="{{ route('index') }}">
                        <img alt="{{ config('app.name') }} logo" class="u-photo" src="{{ Vite::asset('resources/images/logo.svg') }}">
                    </a>
                </div>
                <div class="x-profile-meta">
                    <p class="p-name">
                        <a href="{{ route('index') }}">{{ config('app.name') }}</a>
                    </p>
                    <p class="p-category">Software Engineer</p>
                    <p class="p-country-name">Sri Lanka</p>
                </div>
                <div class="x-profile-content">
                    <p class="p-note">I'm a back-end engineer, system administrator, and website security expert.</p>
                </div>
                <div class="x-profile-links">
                    <a class="u-url" href="{{ config('app.url') }}">{{ config('app.url') }}</a>
                    <a class="u-email" href="mailto:{{ config('website.email') }}">{{ config('website.email') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
