<div class="card rounded-0 p-3">
    <div class="card-body">
        <div class="h-card">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column">
                    <a class="p-name text-decoration-none h4 mb-0" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
                    <p class="p-category mb-0">Software Engineer</p>
                    <p class="p-country-name mb-0">Sri Lanka</p>
                </div>
                <div class="d-flex flex-column">
                    <p class="p-note mb-0">I'm a back-end engineer, system administrator, and website security expert.</p>
                </div>
                <div class="d-flex flex-column">
                    <a class="u-url text-decoration-none" href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
                    <a class="u-email text-decoration-none" href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
