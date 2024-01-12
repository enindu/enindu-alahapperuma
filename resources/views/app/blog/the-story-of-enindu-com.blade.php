@php
    $id = 'blog.the-story-of-enindu-com';
    $type = 'article';
    $title = 'The story of enindu.com';
    $description = 'In the year 2021, the decision to acquire the domain enindu.com was motivated by a rather unique reason. Until then, my first name had been somewhat exclusiv...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-01-07 at 01:42 PM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-12 at 06:16 AM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-12 at 06:16 AM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="General" property="article:section">
        <meta content="Website" property="article:tag">
    </x-slot:meta>
    <div class="h-entry">
        <div class="card mt-3">
            <div class="card-body">
                <h1 class="p-name card-title" id="the-story-of-enindu-com">{{ $title }}</h1>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex flex-column gap-1">
                    <p class="mb-0">
                        <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-01-07 at 01:42 PM')->toIso8601String() }}">2024-01-07 at 01:42 PM</time></a></small>
                    </p>
                    <p class="mb-1">
                        <small>POSSE: <a class="u-syndication" href="https://medium.com/@Enindu/the-story-of-enindu-com-273fcc6c8ba5" target="_blank">Medium</a>, <a class="u-syndication" href="https://mastodon.social/@enindu/111726673128373880" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1744738386152489202" target="_blank">X (Twitter)</a></small>
                    </p>
                    <p class="d-flex align-items-center mb-0">
                        <span class="p-category badge me-1 border">General</span>
                        <span class="badge border">Website</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="e-content card mt-3">
            <div class="card-body">
                <h2 id="the-name-enindu">The name, Enindu</h2>
                <p>In the year 2021, the decision to acquire the domain <a href="https://enindu.com">enindu.com</a> was motivated by a rather unique reason. Until then, my first name had been somewhat exclusive in <a href="https://en.wikipedia.org/wiki/Sri_Lanka" target="_blank">Sri Lanka</a>, or so I believed. I had successfully claimed handles for my first name across various online platforms, such as "<a href="mailto:enindu@gmail.com">enindu@gmail.com</a>", "<a href="mailto:enindu@yahoo.com">enindu@yahoo.com</a>", and "<a href="mailto:enindu@hotmail.com">enindu@hotmail.com</a>". In those days, <a href="https://en.wikipedia.org/wiki/Outlook.com#Transition_to_Outlook.com" target="_blank">there was no "@outlook.com" available</a>. I even secured the handles <a href="https://twitter.com/Enindu" target="_blank">"@Enindu" on X (Twitter)</a> and <a href="https://www.instagram.com/enindu" target="_blank">"@enindu" on Instagram</a>. These were simpler times, making it easier to establish my online presence. Although I seldom used most of these accounts, my primary objective was to establish my domain across the vast expanse of the internet. Admittedly, it was a bit of a selfish endeavor.</p>
                <p>In 2021, the revelation of another individual sharing my first name piqued my curiosity. This prompted me to conduct some social engineering, revealing a few more individuals with the same name. Fearing that someone might grab the domain, I decided to take proactive measures and acquired enindu.com. Thus, another selfish move was made, and the domain became mine. In short, that's the story.</p>
                <h2 id="the-first-website">The first website</h2>
                <p>Despite being a <a href="https://en.wikipedia.org/wiki/Web_developer" target="_blank">web developer</a>, initially, the purpose of enindu.com eluded me. I had no intention of showcasing my works or posting articles on the website. As mentioned earlier, my primary goal was to secure the domain before someone else did. However, I decided to make use of it, hosting the domain on a testing server at the company I was working for. This setup continues to this day.</p>
                <p>With little time to spare, I aimed to present my website to the public. Lacking experience with other static site generators like <a href="https://gohugo.io" target="_blank">Hugo</a> or <a href="https://jekyllrb.com" target="_blank">Jekyll</a>, I opted to create a simple static generator for my website using <a href="https://go.dev" target="_blank">Go</a>. This served a dual purpose—while my website was serving its purpose, I could contribute something to <a href="https://github.com/enindu" target="_blank">my GitHub account</a>. The <a href="https://github.com/enindu/enindu-alahapperuma/commits/master" target="_blank">commit history of my website's repository</a> reveals the development of this basic static site generator. It was a straightforward and somewhat rudimentary tool, but the idea was clear—to generate enindu.com as needed. Thus, my first website went public.</p>
                <h2 id="the-second-website">The second website</h2>
                <p>The exact timeline eludes me, and I must confess to being too lazy to scroll through the commit history. However, during one of my casual scrolls through the website, the realization struck that a revamp was in order. In its original design, the website employed a minimal set of CSS rules, featuring a black and green color scheme reminiscent of a retro terminal. The <code>style.css</code> file had only three or four lines, keeping it incredibly simple. The website lacked mobile responsiveness. So, when time allowed, I decided to revamp it. The dark theme persisted but with a different black shade, and the green color transitioned to a material blue shade from the <a href="https://m2.material.io/design/color/the-color-system.html#tools-for-picking-colors" target="_blank">material v2 color set</a>. Additionally, I introduced hovering animations. While not a <a href="https://en.wikipedia.org/wiki/Front-end_web_development" target="_blank">front-end developer</a>, the result was a more aesthetically pleasing, albeit still relatively simple, second website.</p>
                <h2 id="this-the-third-website">This, the third website</h2>
                <p>Despite the revamp, I remained reluctant to post articles or showcase my work on the website. Laziness prevailed, and the site retained its old content until the end of 2023. However, on the first day of the new year in 2024, a new idea surfaced. Despite being the same lazy individual behind the creation of the previous two websites, I decided to construct a new website using the <a href="https://www.gethalfmoon.com" target="_blank">Halfmoon</a> framework. This choice was influenced by my frequent use of the framework for creating the <a href="https://github.com/phyxle/admin-panel" target="_blank">Admin Panel</a> boilerplate at my workplace. Essentially, this website followed the same codebase as the Admin Panel, with a different <a href="https://www.gethalfmoon.com/docs/customize-and-theme/#core-themes" target="_blank">theme</a> and <a href="https://github.com/coz-m/MPLUS_FONTS" target="_blank">font</a>. The most significant change was my decision to drop my trusted static site generator and work with the Laravel framework. Despite being built on Laravel, I continued the lazy practice of hardcoding everything—from articles to the website's sidebar, <a href="{{ url('sitemap.xml') }}">sitemap</a>, <a href="{{ url('rss.xml') }}">RSS</a>, and more.</p>
                <p>On the positive side, I decided to embark on <a href="{{ route('blog.index') }}">writing articles</a>. This marks a notable improvement in my approach.</p>
                <h2 id="the-technology-stack">The technology stack</h2>
                <p>In terms of technology, there's nothing particularly groundbreaking about this website—it's a good old-fashioned website. Here's the complete list:</p>
                <ul>
                    <li><strong>Front-end languages:</strong> <a href="https://en.wikipedia.org/wiki/HTML" target="_blank">HTML</a>, <a href="https://en.wikipedia.org/wiki/CSS" target="_blank">CSS</a>, <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a></li>
                    <li><strong>Front-end frameworks:</strong> Halfmoon, <a href="https://getbootstrap.com" target="_blank">Bootstrap</a></li>
                    <li><strong>Front-end libraries:</strong> <a href="https://vitejs.dev" target="_blank">Vite</a>, <a href="https://fonts.google.com" target="_blank">Google Fonts</a>, <s><a href="https://fontawesome.com" target="_blank">Font Awesome</a></s><sup>[<a href="{{ url()->current() }}#reference-1">1</a>]</sup></li>
                    <li><strong>Back-end languages:</strong> <a href="https://www.php.net" target="_blank">PHP</a></li>
                    <li><strong>Back-end frameworks:</strong> <a href="https://laravel.com" target="_blank">Laravel</a></li>
                    <li><strong>Server:</strong> <s><a href="https://www.kernel.org" target="_blank">Linux</a>-based <a href="https://en.wikipedia.org/wiki/Shared_web_hosting_service" target="_blank">shared server</a> with <a href="https://cpanel.net" target="_blank">cPanel</a></s><sup>[<a href="{{ url()->current() }}#reference-2">2</a>]</sup> <a href="https://aws.amazon.com/ec2" target="_blank">Elastic Compute Cloud (EC2)</a></li>
                    <li><strong>HTTP server:</strong> <a href="https://httpd.apache.org" target="_blank">Apache HTTP server</a></li>
                    <li><strong>Proxy server:</strong> <a href="https://www.cloudflare.com/en-gb" target="_blank">Cloudflare</a></li>
                </ul>
                <p>I've also integrated <a href="https://marketingplatform.google.com/about/analytics" target="_blank">Google Analytics</a> into this website for traffic analysis. Yes, I confess, I'm too lazy to explore alternatives and have stuck with a <a href="https://en.wikipedia.org/wiki/Google" target="_blank">Google</a> product. While I have no intention of tracking or storing your data, be cautious while scrolling through this website—Google might have other plans.</p>
                <h2 id="the-branding">The branding</h2>
                <p><s>I use the default colors of the Halfmoon framework. There is nothing new or exciting on this website in terms of colors. Perhaps, I will change them in the future, but who knows.</s><sup>[<a href="{{ url()->current() }}#reference-3">3</a>]</sup> <s>I tend to follow one branding tip for sure—I will never use images in the middle of website content. I decided to stick with the <a href="https://en.wikipedia.org/wiki/Minimalism" target="_blank">principle of minimalism</a>. So, this website will serve only text and nothing else.</s><sup>[<a href="{{ url()->current() }}#reference-4">4</a>]</sup></p>
                <p>However, I have used images for the favicon, Apple touch icon, MS application tile image, and the <a href="https://ogp.me" target="_blank">Open Graph (OG)</a> image. I use only one OG image across the website. All of the images have only one symbol—the symbol of <a href="https://en.wikipedia.org/wiki/Jolly_Roger" target="_blank">Jolly Roger</a>, the flag of pirates. Specifically, the flag of <a href="https://en.wikipedia.org/wiki/Samuel_Bellamy" target="_blank">Samuel Bellamy</a>, also known as "The Black Sam," "The Prince of Pirates," or <a href="https://en.wikipedia.org/wiki/Samuel_Bellamy#cite_note-ForbesRank-2" target="_blank">the wealthiest pirate of all time, according to Forbes</a>. So, I don't hold the copyright for that image. I obtained it from <a href="https://en.wikipedia.org/wiki/Main_Page" target="_blank">Wikipedia</a>. This image is licensed under <a href="https://creativecommons.org/licenses/by-sa/3.0" target="_blank">CC BY-SA 3.0</a>. You can see the original work and artists from <a href="https://commons.wikimedia.org/wiki/File:Flag_of_Edward_England.svg" target="_blank">this link</a>. Regarding the license, I must define the changes I made. I just cropped it, nothing more.</p>
                <h2 id="disclaimer">Disclaimer</h2>
                <p>All provided links are legitimate. Each of them is linked to either their Wikipedia pages or their official pages. These links are provided to help readers grasp the content more effectively. I have no intention to track you, steal your information, redirect you to annoying advertisements, or anything of the sort. However, please be reminded that I have integrated Google Analytics, and Google might track your activity.</p>
                <h2 id="future-plans">Future plans</h2>
                <p>As of now, I don't have any specific plans for the future of this website. Who knows, I might integrate a database system, create an advanced system, establish a brand using my name, or convert this website into a freelancer's portfolio. One thing is certain—I will continue to write articles because I get bored very easily. Stay tuned for more updates.</p>
                <h2 id="reference">Reference</h2>
                <ol class="mb-0">
                    <li id="reference-1">I have removed the Font Awesome library.</li>
                    <li id="reference-2">I had to move to an EC2 server because the company's testing server had expired.</li>
                    <li id="reference-3">I have changed the theme color. This time, I chose <a href="https://tailwindcss.com/docs/customizing-colors" target="_blank">Tailwind colors</a> instead of Halfmoon colors. So, this will be my branding.</li>
                    <li id="reference-4">This website will serve images on certain pages, such as the portfolio page (If I ever create one), certain articles (Whenever diagrams are necessary), and so on. However, I prefer to adhere to the principle of minimalism. Therefore, there will be images, but only a few.</li>
                </ol>
            </div>
        </div>
    </div>
</x-layouts.base>
