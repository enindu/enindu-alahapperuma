<nav class="sidebar offcanvas-start offcanvas-xxl" id="sidebar" tabindex="-1">
    <div class="offcanvas-header border-bottom">
        <div class="h-card">
            <a class="sidebar-brand p-name" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
            <p class="p-category mb-0">Software engineer</p>
            <p class="p-country-name">Sri Lanka</p>
            <p>
                <small class="p-note">I'm a back-end developer, system administrator, and freelancer.</small>
            </p>
            <p class="mb-0">
                <a class="u-url" href="{{ route('index') }}">
                    <small>{{ env('APP_URL') }}</small>
                </a>
            </p>
            <p class="mb-0">
                <a class="u-email" href="mailto:enindu@gmail.com">
                    <small>enindu@gmail.com</small>
                </a>
            </p>
        </div>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-nav">
            <li>
                <h6 class="sidebar-header text-uppercase">Pages</h6>
            </li>
            <li class="nav-item">
                <a {!! $id == 'index' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'index' ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog' ? 'active' : '' }}" href="{{ route('blog.index') }}">My blog</a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'contact' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'contact' ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.buymeacoffee.com/enindu" target="_blank">Buy me a coffee</a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">Latest articles</h6>
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog.bestweb-lk' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog.bestweb-lk' ? 'active' : '' }}" href="{{ route('blog.bestweb-lk') }}">BestWeb.lk</a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog.the-interesting-case-of-ip-cam' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog.the-interesting-case-of-ip-cam' ? 'active' : '' }}" href="{{ route('blog.the-interesting-case-of-ip-cam') }}">The interesting case of...</a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog.otp-less-payment-system' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog.otp-less-payment-system' ? 'active' : '' }}" href="{{ route('blog.otp-less-payment-system') }}">OTP-less payment system</a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog.decentralized-hacker-news' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog.decentralized-hacker-news' ? 'active' : '' }}" href="{{ route('blog.decentralized-hacker-news') }}">Decentralized Hacker News</a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog.dont-use-biometric-authentication' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog.dont-use-biometric-authentication' ? 'active' : '' }}" href="{{ route('blog.dont-use-biometric-authentication') }}">Don't use biometric auth...</a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">External links</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/enindu" target="_blank">GitHub</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://gitlab.com/enindu" target="_blank">GitLab</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://linkedin.com/in/enindu" target="_blank">LinkedIn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://mastodon.social/@enindu" target="_blank">Mastodon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/Enindu" target="_blank">X (Twitter)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://news.ycombinator.com/user?id=Enindu" target="_blank">Hacker News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://medium.com/@Enindu" target="_blank">Medium</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.reddit.com/user/Enindu" target="_blank">Reddit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.quora.com/profile/Enindu-Alahapperuma" target="_blank">Quora</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.pinterest.com/enindu" target="_blank">Pinterest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://indieweb.org/User:Enindu.com" target="_blank">IndieWeb</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://xynosync.com" target="_blank">XynoSync</a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">Other links</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sitemap.xml') }}">Sitemap</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('rss.xml') }}">RSS</a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">Repository links</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/enindu/enindu-alahapperuma/blob/master/LICENSE.md" target="_blank">MIT license</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/enindu/enindu-alahapperuma" target="_blank">Source code</a>
            </li>
        </ul>
    </div>
</nav>
