<nav class="sidebar offcanvas-start offcanvas-xxl" id="sidebar" tabindex="-1">
    <div class="offcanvas-header bg-body-tertiary border-bottom border-opacity-25">
        <a class="sidebar-brand" href="{{ route('index') }}">
            <strong>{{ env('APP_NAME') }}</strong>
        </a>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-nav">
            <li>
                <h6 class="sidebar-header text-uppercase">
                    <strong>Pages</strong>
                </h6>
            </li>
            <li>
                <hr class="sidebar-divider">
            </li>
            <li class="nav-item">
                <a {!! $id == 'index' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'index' ? 'active' : '' }}" href="{{ route('index') }}">
                    <i class="fa-solid fa-home me-1"></i>
                    <strong>Home</strong>
                </a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'contact' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'contact' ? 'active' : '' }}" href="#">
                    <i class="fa-solid fa-comment me-1"></i>
                    <strong>Contact me</strong>
                </a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">
                    <strong>External links</strong>
                </h6>
            </li>
            <li>
                <hr class="sidebar-divider">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/enindu" target="_blank">
                    <i class="fa-brands fa-github me-1"></i>
                    <strong>GitHub</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://gitlab.com/enindu" target="_blank">
                    <i class="fa-brands fa-gitlab me-1"></i>
                    <strong>GitLab</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/Enindu" target="_blank">
                    <i class="fa-brands fa-x-twitter me-1"></i>
                    <strong>Twitter (X)</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://linkedin.com/in/enindu" target="_blank">
                    <i class="fa-brands fa-linkedin me-1"></i>
                    <strong>LinkedIn</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sitemap.xml') }}">
                    <i class="fa-solid fa-sitemap me-1"></i>
                    <strong>Sitemap</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/enindu/enindu-alahapperuma/blob/master/LICENSE.md" target="_blank">
                    <i class="fa-solid fa-id-card me-1"></i>
                    <strong>MIT license</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/enindu/enindu-alahapperuma" target="_blank">
                    <i class="fa-solid fa-code me-1"></i>
                    <strong>Source code</strong>
                </a>
            </li>
        </ul>
    </div>
</nav>
