@php
    $id = 'blog.the-interesting-case-of-ip-cam';
    $type = 'article';
    $title = 'The interesting case of IP cam';
    $description = 'I had a problem. I wanted to monitor my baby while I wasn\'t in the room; she was a newborn back then. In general, I work all over the house. If she cries, i...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-01-12 at 04:49 AM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-12 at 04:49 AM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-12 at 04:49 AM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="Software" property="article:section">
        <meta content="Source code" property="article:tag">
    </x-slot:meta>
    <div class="h-entry container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="p-name card-title" id="the-interesting-case-of-ip-cam">{{ $title }}</h1>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="d-flex flex-column gap-1">
                            <p class="mb-0">
                                <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-01-12 at 04:49 AM')->toIso8601String() }}">2024-01-12 at 04:49 AM</time></a></small>
                            </p>
                            <p class="mb-1">
                                <small>POSSE: <a class="u-syndication" href="https://medium.com/@Enindu/the-interesting-case-of-ip-cam-33c95164e37a" target="_blank">Medium</a>, <a class="u-syndication" href="https://mastodon.social/@enindu/111739974984422394" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1745593518234710082" target="_blank">X (Twitter)</a></small>
                            </p>
                            <p class="d-flex align-items-center mb-0">
                                <span class="p-category badge me-1 border">Software</span>
                                <span class="badge me-1 border">Source code</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="e-content card mt-3">
                    <div class="card-body">
                        <h2 id="problem">Problem</h2>
                        <p>I had a problem. I wanted to monitor my baby while I wasn't in the room; she was a newborn back then. In general, I work all over the house. If she cries, it's difficult to hear her in most parts of the house. So, either I stay in the room while she's sleeping, or I need to come up with an idea. I could have set up an <a href="https://en.wikipedia.org/wiki/IP_camera" target="_blank">IP camera</a>, but I was too lazy to do so, and I also didn't want any IP camera in my house. On the other hand, even if I don't want any IP camera, I can build an alternative IP camera for the sake of my problem. So I came up with this idea.</p>
                        <h2 id="solution">Solution</h2>
                        <p>I often use my laptop and mobile phone in my house, and both of them are connected to the same <a href="https://en.wikipedia.org/wiki/Wi-Fi" target="_blank">WiFi</a> network. So, I can use one device as an IP camera and the other device as the client from anywhere in the house. The only thing I needed was a server for the IP camera. Even though I'm a <a href="https://en.wikipedia.org/wiki/Frontend_and_backend#Backend_focused" target="_blank">back-end developer</a>, I didn't have any experience creating such a server.</p>
                        <p>Since I'm using a <a href="https://en.wikipedia.org/wiki/Linux_distribution" target="_blank">Linux distribution</a> as my <a href="https://en.wikipedia.org/wiki/Operating_system" target="_blank">operating system</a>, I know that I can use the <a href="https://en.wikipedia.org/wiki/Video4Linux" target="_blank">V4L2</a> subsystem from the <a href="https://www.kernel.org" target="_blank">Linux kernel</a> to render images from my <a href="https://en.wikipedia.org/wiki/Webcam" target="_blank">webcam</a>. The only thing I needed was a <a href="https://en.wikipedia.org/wiki/Programming_language" target="_blank">programming language</a> that has the ability to communicate with the webcam and work with the V4L2 subsystem. After some digging, I found <a href="https://github.com/blackjack/webcam" target="_blank">this library</a> for the <a href="https://go.dev" target="_blank">Go language</a>.</p>
                        <p>The next problem was how I should stream data for the client. Since this should be done in real-time, it was a pretty straightforward solution. I chose <a href="https://en.wikipedia.org/wiki/WebSocket" target="_blank">WebSocket</a>. The <a href="https://gorilla.github.io" target="_blank">Gorilla Web Toolkit</a> has <a href="https://github.com/gorilla/websocket" target="_blank">this great library</a> to work with WebSocket.</p>
                        <p>Here's an overview of how this works:</p>
                        <p>I run the IP camera server on my laptop. It turns on my camera and gets images frame by frame. At the same time, there will be an <a href="https://en.wikipedia.org/wiki/Web_server" target="_blank">HTTP server</a> running with WebSocket. All frames will be passed to the endpoint of that HTTP server so the client can capture frames by connecting to the same WebSocket server from the other side. Vanilla <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> will do the rest to render the data as an image on the front-end side. Every time a frame passes to the front-end, the front-end will automatically update by rendering the new image instead of the current image. So, you will see it as a video. This is the best I can do to describe the process.</p>
                        <h2 id="source-code">Source code</h2>
                        <p>You can find the source code for this system at the following link.</p>
                        <p>Link: <a href="https://github.com/enindu/ipcam" target="_blank">https://github.com/enindu/ipcam</a></p>
                        <p class="mb-0">Note that this system will only work with the V4L2 subsystem, so it will probably work with a Linux distribution only. Even if you're using a Linux distribution, this might not work for you. I didn't check this system with any device other than my own devices or operating systems.</p>
                    </div>
                </div>
                <x-includes.footer />
            </div>
        </div>
    </div>
</x-layouts.base>
