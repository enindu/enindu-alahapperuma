@php
    $id = 'blog.xynosync-web-design-and-development-company-in-sri-lanka';
    $type = 'article';
    $title = 'XynoSync - Web design and development company in Sri Lanka';
    $description = 'I co-founded a web design and software development company! As of the time of writing this article, I remain a director at Phyxle Infotech (Pvt) Ltd, a well...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-05-05 at 09:32 AM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-05-05 at 09:32 AM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-05-05 at 09:32 AM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="Web design" property="article:section">
        <meta content="Company" property="article:tag">
    </x-slot:meta>
    <div class="h-entry">
        <div class="card mt-3">
            <div class="card-body">
                <h1 class="p-name card-title" id="xynosync-web-design-and-development-company-in-sri-lanka">{{ $title }}</h1>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex flex-column gap-1">
                    <p class="mb-0">
                        <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-05-05 at 09:32 AM')->toIso8601String() }}">2024-05-05 at 09:32 AM</time></a></small>
                    </p>
                    <p class="mb-1">
                        {{-- <small>POSSE: <a class="u-syndication" href="https://mastodon.social/@enindu/111726673128373880" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1744738386152489202" target="_blank">X (Twitter)</a>, <a class="u-syndication" href="https://www.linkedin.com/feed/update/urn:li:activity:7162147009934610433" target="_blank">LinkedIn</a></small> --}}
                    </p>
                    <p class="d-flex align-items-center mb-0">
                        <span class="p-category badge me-1 border">Web design</span>
                        <span class="badge border">Company</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="e-content card mt-3">
            <div class="card-body">
                <p>I co-founded a <a href="https://en.wikipedia.org/wiki/Web_design" target="_blank">web design</a> and <a href="https://en.wikipedia.org/wiki/Software_development" target="_blank">software development</a> company!</p>
                <p>As of the time of writing this article, I remain a director at <a href="https://phyxle.com" target="_blank">Phyxle Infotech (Pvt) Ltd</a>, a well-known web design and development company in <a href="https://en.wikipedia.org/wiki/Sri_Lanka" target="_blank">Sri Lanka</a>. I joined the company as a junior developer and dedicated a significant portion of my time to it, gaining valuable experience along the way. From starting as a junior developer, I have progressed to the role of director.</p>
                <p>During my active tenure, I identified several significant issues within the web design and development field, including those within Phyxle itself. Among these issues, three major problems stand out:</p>
                <ol>
                    <li>Many companies merely fulfill customer requirements without considering them as potential problems. This stems from these companies prioritizing their own business interests over those of their clients. Consequently, the web design and development industry becomes primarily focused on <a href="https://en.wikipedia.org/wiki/Marketing" target="_blank">marketing</a>, with companies failing to utilize programmatic solutions to address customer issues. Instead, solutions are often provided by marketing personnel, business development teams, or even small business owners, which is not ideal. Software engineering should focus on problem-solving through programming.</li>
                    <li>Another prevalent issue is the lack of transparency in many companies' dealings with their customers. Hidden workflows and undisclosed payment details create a sense of mistrust. Since we are creating solutions for customers using their funds, transparency should be prioritized to foster good customer relationships.</li>
                    <li>Security is a frequently overlooked aspect in many companies. This ties back to the first issue, as it is often not the responsibility of marketing personnel to consider security measures. Small business owners prioritize meeting customer requirements at any cost, while business developers and analysts aim to complete their workload, often overlooking security standards. Consequently, many companies cut corners in development, neglecting even basic user acceptance testing.</li>
                </ol>
                <p>In my opinion, such practices have tarnished the reputation of web development in Sri Lanka over the years. Even government websites have fallen victim to hacking, indicating the severity of the issue. Neglecting basic security measures leaves websites vulnerable to attacks, with some even failing to load properly due to inefficient coding practices.</p>
                <p>Many companies opt to hire inexperienced developers, such as undergraduates or fresh graduates, to cut costs. This results in a lack of experienced developers in the industry. Even senior developers may struggle with basic tasks like integrating payment gateways into websites. The prevalence of <a href="https://wordpress.org" target="_blank">WordPress</a> developers, who may not possess the skills of traditional software engineers, further exacerbates the problem.</p>
                <p>This situation prompted the establishment of <a href="https://xynosync.com" target="_blank">XynoSync</a>, the web design and software development company that I co-founded. XynoSync emerged as a solution to these industry-wide issues. We strive to address these problems by offering a wide range of web-related services, including website development, web app development, and software development. Our primary goal is to standardize web practices and enhance the web experience for all users.</p>
                <p>XynoSync is a <a href="https://en.wikipedia.org/wiki/Startup_company" target="_blank">startup</a> dedicated to solving customer problems while adhering to industry standards and adopting a security-centric approach. We prioritize providing programmatic solutions over mere requirement fulfillment, value transparency with our customers, and ensure that our highly skilled developers deliver secure solutions in a timely manner. This commitment sets XynoSync apart from other companies. Our mission is simple: to improve the web experience for everyone.</p>
                <p>If you ever need to contact XynoSync, you can find our contact details below. Feel free to reach out to us for guidance on your online journey.</p>
                <ol class="mb-0">
                    <li>Website: <a href="https://xynosync.com" target="_blank">https://xynosync.com</a></li>
                    <li>Email address: <a href="mailto:info@xynosync.com">info@xynosync.com</a></li>
                    <li>Phone number: <a href="tel:+94772557776">+94 77 255 7776</a></li>
                    <li>WhatsApp number: <a href="https://wa.me/94772557776" target="_blank">+94 77 255 7776</a></li>
                </ol>
            </div>
        </div>
    </div>
</x-layouts.base>
