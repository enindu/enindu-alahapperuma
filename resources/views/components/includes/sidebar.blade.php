<nav class="sidebar offcanvas-start offcanvas-xxl" id="sidebar" tabindex="-1">
    <div class="offcanvas-header bg-body-tertiary border-bottom border-opacity-25">
        <div class="h-card">
            <a class="sidebar-brand" href="{{ route('index') }}">
                <strong class="p-name">{{ env('APP_NAME') }}</strong>
            </a>
            <p class="p-category mb-0">
                <strong>Software engineer</strong>
            </p>
            <p class="p-country-name mb-0">
                <strong>Sri Lanka</strong>
            </p>
            <p class="p-note mb-0">
                <small>I'm a back-end developer, system administrator, and freelancer.</small>
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
                <a {!! $id == 'blog' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog' ? 'active' : '' }}" href="{{ route('blog.index') }}">
                    <i class="fa-solid fa-newspaper me-1"></i>
                    <strong>My blog</strong>
                </a>
            </li>
            <li class="nav-item">
                <a {!! $id == 'contact' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'contact' ? 'active' : '' }}" href="{{ route('contact.index') }}">
                    <i class="fa-solid fa-comment me-1"></i>
                    <strong>Contact me</strong>
                </a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">
                    <strong>Latest articles</strong>
                </h6>
            </li>
            <li>
                <hr class="sidebar-divider">
            </li>
            <li class="nav-item">
                <a {!! $id == 'blog.the-story-of-enindu-com' ? 'aria-current="page"' : '' !!} class="nav-link {{ $id == 'blog.the-story-of-enindu-com' ? 'active' : '' }}" href="{{ route('blog.the-story-of-enindu-com') }}">
                    <i class="fa-solid fa-bookmark me-1"></i>
                    <strong>The story of enindu.com</strong>
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
                <a class="nav-link" href="https://linkedin.com/in/enindu" target="_blank">
                    <i class="fa-brands fa-linkedin me-1"></i>
                    <strong>LinkedIn</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://mastodon.social/@enindu" target="_blank">
                    <i class="fa-brands fa-mastodon me-1"></i>
                    <strong>Mastodon</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/Enindu" target="_blank">
                    <i class="fa-brands fa-x-twitter me-1"></i>
                    <strong>Twitter (X)</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://news.ycombinator.com/user?id=Enindu" target="_blank">
                    <i class="fa-brands fa-hacker-news me-1"></i>
                    <strong>Hacker News</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://medium.com/@Enindu" target="_blank">
                    <i class="fa-brands fa-medium me-1"></i>
                    <strong>Medium</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.reddit.com/user/Enindu" target="_blank">
                    <i class="fa-brands fa-reddit me-1"></i>
                    <strong>Reddit</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.quora.com/profile/Enindu-Alahapperuma" target="_blank">
                    <i class="fa-brands fa-quora me-1"></i>
                    <strong>Quora</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.pinterest.com/enindu" target="_blank">
                    <i class="fa-brands fa-pinterest me-1"></i>
                    <strong>Pinterest</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://blogroll.org" target="_blank">
                    <i class="fa-solid fa-blog me-1"></i>
                    <strong>Blogroll</strong>
                </a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">
                    <strong>Other links</strong>
                </h6>
            </li>
            <li>
                <hr class="sidebar-divider">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sitemap.xml') }}">
                    <i class="fa-solid fa-sitemap me-1"></i>
                    <strong>Sitemap</strong>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('rss.xml') }}">
                    <i class="fa-solid fa-rss me-1"></i>
                    <strong>RSS</strong>
                </a>
            </li>
            <li class="mt-3">
                <h6 class="sidebar-header text-uppercase">
                    <strong>Repository links</strong>
                </h6>
            </li>
            <li>
                <hr class="sidebar-divider">
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
