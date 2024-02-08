@php
    $id = 'blog.bestweb-lk';
    $type = 'article';
    $title = 'BestWeb.lk';
    $description = 'In Sri Lanka, we have BestWeb.lk, a competition for websites organised annually by the LK Domain Registry. The rules are simple. If you have a website with a...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-02-08 at 09:12 PM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-02-08 at 09:12 PM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-02-08 at 09:12 PM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="Discussion" property="article:section">
        <meta content="Website competition" property="article:tag">
    </x-slot:meta>
    <div class="h-entry">
        <div class="card mt-3">
            <div class="card-body">
                <h1 class="p-name card-title" id="bestweb-lk">{{ $title }}</h1>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex flex-column gap-1">
                    <p class="mb-0">
                        <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-02-08 at 09:12 PM')->toIso8601String() }}">2024-02-08 at 09:12 PM</time></a></small>
                    </p>
                    <p class="mb-1">
                        <small>POSSE: <a class="u-syndication" href="https://medium.com/@Enindu/bestweb-lk-12da77223f9e" target="_blank">Medium</a>, <a class="u-syndication" href="https://mastodon.social/@enindu/111896768566333465" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1755628128859255105" target="_blank">X (Twitter)</a></small>
                    </p>
                    <p class="d-flex align-items-center mb-0">
                        <span class="p-category badge me-1 border">Discussion</span>
                        <span class="badge me-1 border">Website competition</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="e-content card mt-3">
            <div class="card-body">
                <p>In Sri Lanka, we have BestWeb.lk, a competition for websites organised annually by the <a href="https://www.domains.lk" target="_blank">LK Domain Registry</a>. The rules are simple. If you have a website with a <a href="https://en.wikipedia.org/wiki/.lk" target="_blank">.lk domain</a>, you can apply. According to their website, winning websites are judged on creativity, quality of graphic design, artistry, technological expertise, and content quality. They have a full list of criteria on their website. I just prefer not to create a <a href="https://en.wikipedia.org/wiki/Backlink" target="_blank">backlink</a> by posting the URL here, you can find it easily.</p>
                <p>When you submit your website to BestWeb.lk, they run tests on it. However, I have doubts about their process because my employer submitted websites several years ago. Surprisingly, instead of checking the websites themselves, the BestWeb.lk "experts" checked the network and sent a huge list of reports claiming we needed to fix issues to stay in the competition.</p>
                <p>I don't know what tool they use today, but back then they clearly used <a href="https://www.tenable.com/products/nessus" target="_blank">Nessus</a>, a proprietary network vulnerability scanning tool developed by <a href="https://www.tenable.com" target="_blank">Tenable</a>. So, technically, these "experts" used a network vulnerability scanner to assess "creativity, quality of graphic design, artistry, technological expertise, and content quality." I simply cannot understand how this approach identifies the best website.</p>
                <p>Here's a list of vulnerabilities found on one of our websites:</p>
                <ul>
                    <li>DNS server spoofed request amplification DDoS</li>
                    <li>SSL medium strength cipher suites supported (SWEET32)</li>
                    <li>SSL certificate with wrong hostname</li>
                    <li>TLS version 1.0 protocol detection</li>
                </ul>
                <p>As you can see, these are common vulnerabilities on most <a href="https://en.wikipedia.org/wiki/Shared_web_hosting_service" target="_blank">shared servers</a>. Typically, shared server users lack the access needed to fix them. The solutions usually involve moving your website to a <a href="https://en.wikipedia.org/wiki/Dedicated_hosting_service" target="_blank">dedicated</a> or <a href="https://en.wikipedia.org/wiki/Virtual_private_server" target="_blank">virtual cloud server</a>, or using a <a href="https://en.wikipedia.org/wiki/Reverse_proxy" target="_blank">reverse proxy server</a> for caching the origin server, which is a relatively affordable and simple option.</p>
                <p>The solution is straightforward, but as mentioned, that's not the real problem. If BestWeb.lk aims to find the best website based on their criteria, why on earth do they scan the network? Additionally, what purpose do the criteria even serve?</p>
                <p>My conclusion: BestWeb.lk is simply a <a href="https://en.wikipedia.org/wiki/Marketing" target="_blank">marketing</a> ploy for web design agencies.</p>
                <p>While developers certainly need to adhere to proper standards, BestWeb.lk's standards are a joke. They neither reflect the challenges of modern websites nor offer any real solutions. Most web development companies exploit this opportunity to win awards and showcase them to clients with claims like "Hey, see this? We're the best web development agency because we won these awards for our websites!" Unfortunately, since BestWeb.lk holds no real value, these agencies gain nothing from such awards. As I mentioned, some even dedicate teams to updating websites based on BestWeb.lk criteria just before the competition. Clients, however, remain unaware of this charade. They don't waste money on random web design agencies; they seek facts, and they perceive BestWeb.lk as a credible source, not because it is, but because web development companies have conditioned them to believe it is.</p>
                <p class="mb-0">I hold no personal grudge against any of these practices. My sole concern is the web design and development industry. These nonsensical competitions do not contribute to progress within the field. Developers need proper standards and guidelines, not self-serving platforms for marketing tactics. Perhaps that was the original intent? If so, then disregard everything I've said.</p>
            </div>
        </div>
    </div>
</x-layouts.base>
