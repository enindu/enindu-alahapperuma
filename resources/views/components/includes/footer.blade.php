<section id="footer-section">
    <div class="container">
        <footer class="footer">
            <div class="top">
                <div class="box h-card">
                    <div class="content">
                        <div class="title">
                            <img alt="logo" class="u-photo" height="80" src="{{ Vite::asset('resources/images/logo.svg') }}" width="80">
                            <div class="meta">
                                <p class="h3 p-name">{{ config('app.name') }}</p>
                                <p class="p-category">{{ config('website.designation') }}</p>
                                <p class="p-country-name">{{ config('website.country') }}</p>
                            </div>
                        </div>
                        <div class="body">
                            <p class="p-note">I am a freelance software engineer specializing in web development, a cloud infrastructure engineer focused on Linux system administration, and a cybersecurity specialist focused on application and network security.</p>
                        </div>
                        <div class="links">
                            <div class="link">
                                <i class="ri-whatsapp-line"></i>
                                <a class="u-phone" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}">{{ config('website.whatsapp') }}</a>
                            </div>
                            <div class="link">
                                <i class="ri-mail-line"></i>
                                <a class="u-email" href="mailto:{{ config('website.email') }}">{{ config('website.email') }}</a>
                            </div>
                            <div class="link">
                                <i class="ri-global-line"></i>
                                <a class="u-url" href="{{ config('app.url') }}">{{ config('app.url') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">Navigate website.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="{{ route('about.index') }}">About</a>
                            <a href="{{ route('services.index') }}">Services</a>
                            <a href="{{ route('clients.index') }}">Clients</a>
                            <a href="{{ route('blog.index') }}">Blog</a>
                            <a href="{{ route('contact.index') }}">Contact</a>
                            <a href="{{ url('sitemap.xml') }}">Sitemap</a>
                            <a href="{{ url('rss.xml') }}">RSS</a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">Find me on.</p>
                        <div class="links">
                            <a href="https://facebook.com/enindu.alahapperuma.official" target="_blank">Facebook</a>
                            <a href="https://github.com/enindu" target="_blank">GitHub</a>
                            <a href="https://gitlab.com/enindu" target="_blank">GitLab</a>
                            <a href="https://news.ycombinator.com/user?id=Enindu" target="_blank">Hacker News</a>
                            <a href="https://indieweb.org/User:Enindu.com" target="_blank">IndieWeb</a>
                            <a href="https://instagram.com/enindu" target="_blank">Instagram</a>
                            <a href="https://linkedin.com/in/enindu" target="_blank">LinkedIn</a>
                            <a href="https://mastodon.social/@enindu" target="_blank">Mastodon</a>
                            <a href="https://medium.com/@Enindu" target="_blank">Medium</a>
                            <a href="https://pinterest.com/enindu" target="_blank">Pinterest</a>
                            <a href="https://quora.com/profile/Enindu-Alahapperuma" target="_blank">Quora</a>
                            <a href="https://reddit.com/user/Enindu" target="_blank">Reddit</a>
                            <a href="https://x.com/Enindu" target="_blank">X</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; 2021-{{ now()->format('Y') }} <a href="{{ route('index') }}">{{ config('app.name') }}</a>.</p>
                <p>The <a href="https://github.com/enindu/enindu-alahapperuma" target="_blank">source code</a> of this website is licensed under <a href="https://github.com/enindu/enindu-alahapperuma/blob/master/LICENSE.md" target="_blank">MIT</a>.</p>
            </div>
        </footer>
    </div>
</section>
