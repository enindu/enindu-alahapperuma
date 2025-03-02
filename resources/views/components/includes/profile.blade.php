<div class="card rounded-5 p-3">
    <div class="card-body p-3">
        <div class="h-card">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <img alt="{{ env('APP_NAME') }} Logo" class="img-fluid u-photo" src="{{ Vite::asset('resources/images/logo.svg') }}">
                </div>
                <div class="d-flex flex-column">
                    <p class="p-name h2 mb-0" href="{{ route('index') }}">{{ env('APP_NAME') }}</p>
                    <p class="p-category mb-0">Software Engineer</p>
                    <p class="p-country-name mb-0">Sri Lanka</p>
                </div>
                <div class="d-flex flex-column">
                    <p class="p-note mb-0">I'm a back-end engineer, system administrator, and website security expert.</p>
                </div>
                <div class="d-flex flex-column">
                    <a class="u-url text-decoration-none text-white" href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
                    <a class="u-email text-decoration-none text-white" href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
