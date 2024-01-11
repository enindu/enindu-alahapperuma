@php
    $id = 'blog.decentralized-hacker-news';
    $type = 'article';
    $title = 'Decentralized Hacker News';
    $description = 'While scrolling through Hacker News, I randomly got this idea! I\'m not talking about only Hacker News, but a combination of Hacker News, Mastodon, and Reddit...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-01-10 at 02:05 AM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-10 at 02:05 AM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-10 at 02:05 AM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="Architecture" property="article:section">
        <meta content="Idea" property="article:tag">
    </x-slot:meta>
    <div class="h-entry container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="p-name card-title" id="decentralized-hacker-news">{{ $title }}</h1>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="d-flex flex-column gap-1">
                            <p class="mb-0">
                                <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-01-10 at 02:05 AM')->toIso8601String() }}">2024-01-10 at 02:05 AM</time></a></small>
                            </p>
                            <p class="mb-1">
                                <small>POSSE: <a class="u-syndication" href="https://medium.com/@Enindu/decentralized-hacker-news-e0fd8424dcb1" target="_blank">Medium</a>, <a class="u-syndication" href="https://mastodon.social/@enindu/111728070625359671" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1744831420206579735" target="_blank">Twitter (X)</a>, <a class="u-syndication" href="https://news.ycombinator.com/item?id=38932459" target="_blank">Hacker News</a></small>
                            </p>
                            <p class="d-flex align-items-center mb-0">
                                <span class="p-category badge bg-primary">Architecture</span>
                                <span class="badge bg-secondary">Idea</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="e-content card mt-3">
                    <div class="card-body">
                        <p>While scrolling through <a href="https://news.ycombinator.com" target="_blank">Hacker News</a>, I randomly got this idea! I'm not talking about only Hacker News, but a combination of Hacker News, <a href="https://joinmastodon.org" target="_blank">Mastodon</a>, and <a href="https://www.reddit.com" target="_blank">Reddit</a>. Do you need it? I don't know. Maybe this idea is nothing but rubbish. However, I have a business plan too. So let's get into the idea.</p>
                        <p>This system has three main components:</p>
                        <ol>
                            <li>Client</li>
                            <li>API server</li>
                            <li>Courier server</li>
                        </ol>
                        <h2 id="the-client">The client</h2>
                        <p>The user is the client. There will be two types of clients for this system:</p>
                        <ol>
                            <li>Website</li>
                            <li>Mobile application</li>
                        </ol>
                        <p>The website is just a front-end that connects to the API server. We can build the website from any technology. I prefer something like <a href="https://vuejs.org" target="_blank">Vue</a> or <a href="https://react.dev" target="_blank">React</a>. Anyway, I'm not a front-end developer, so any front-end developer can suggest the technology.</p>
                        <p>The mobile application is just a front-end as well as the website. We can build it using any technology that a front-end developer suggests. I haven't framed into any technologies for both the website and mobile application yet. This is just a high-level explanation of the system that I'm talking about.</p>
                        <p>From the client-side, users are allowed to register into the system, log in to their accounts, and post anything like in Reddit. So they can post articles or links. When saying articles, I'm not talking about <a href="https://en.wikipedia.org/wiki/Microblogging" target="_blank">microblogging</a> but real <a href="https://en.wikipedia.org/wiki/Blog" target="_blank">blogging</a>. This is where Reddit-ness comes into play. In Hacker News, we can't do blogging. I have a reason to post articles in this system. Let's talk about that later.</p>
                        <p>The client, website, or mobile application is joined to the API server through a <a href="https://en.wikipedia.org/wiki/REST" target="_blank">REST API</a>. This is my idea. If you have other alternatives, suggestions are always welcome. Whatever technology we use here, anyone should have the freedom to create clients on their own. So the API server should be publicly accessible. This means, as a decentralized system, anyone should be able to create their own client for any instance. This should be an open network. That's what was in my mind. If the instance owner needs to make their instance private, they should host it in a private network, where outsiders don't have access.</p>
                        <h2 id="the-api-server">The API server</h2>
                        <p>This is the engine of this system. In the API server, there will be three primary components:</p>
                        <ol>
                            <li>API</li>
                            <li>Database</li>
                            <li>Cache</li>
                        </ol>
                        <p>Again, the API can be written in any technology. I have <a href="https://go.dev" target="_blank">Go</a>, <a href="https://www.python.org" target="_blank">Python</a>, <a href="https://nodejs.org/en" target="_blank">Node.js</a>, <a href="https://www.php.net" target="_blank">PHP</a>, and <a href="https://www.ruby-lang.org" target="_blank">Ruby</a> in my mind. Since this is the engine of this system, the API must be able to process lots of data. So, not like in the front-end, the technology will be crucial here. We should use maintainable, solid technology for this.</p>
                        <p>All the user's data will be stored in the database. We can use separate storages, something like an <a href="https://aws.amazon.com/s3" target="_blank">S3</a> bucket, for storing files. I don't have any specific technology to use as the database. We can use <a href="https://www.postgresql.org" target="_blank">PostgreSQL</a>, <a href="https://mariadb.org" target="_blank">MariaDB</a>, or even a no-SQL database like <a href="https://www.mongodb.com" target="_blank">MongoDB</a>. This is open to suggestions as well.</p>
                        <p>We need a cache to optimize the user experience as well as the federation across the instances. When an outer instance sends a request to this system, the cache server will serve the data. The internal database is not open to the outer instances. Maybe we can use something like <a href="https://redis.io" target="_blank">Redis</a> for this. I don't know.</p>
                        <p>The API server is connected to the courier server via something like a REST API. And again, the mentioned technology is just an example. We can use whatever we like.</p>
                        <h2 id="the-courier-server">The courier server</h2>
                        <p>We use the courier server to do the federation among the instances. Mastodon uses the <a href="https://www.w3.org/TR/activitypub" target="_blank">ActivityPub</a> protocol to do this. We also can use that or we can just use a REST API with a standardized structure. As always, I'm open to any suggestion.</p>
                        <p>The courier server is a two-way server, which means it sends requests and receives requests at the same time. When an external instance requests data from this instance, the request is sent from the courier server of the external instance. That request was received by the courier server of this instance. After that, the internal requests made within the internal courier server, internal API server, cache, and database. After that, the response will be sent to the external courier server. Only courier servers communicate with each other. Endpoints, which are not available for the front-end, will be only opened to the internal courier server. External courier servers can't communicate directly with other API servers.</p>
                        <p>We might need to use some kind of authentication system across the internal API server and internal courier server. Since courier servers are externally accessible from other courier servers, we also might need to add an authentication layer for courier servers. Courier servers should not be publicly accessible for anyone but other courier servers. I'm still working on what kind of authentication system we should implement for this. Suggestions are always welcome.</p>
                        <h2 id="the-business-idea">The business idea</h2>
                        <p>I'm not talking about a commercial system here, but an open-source project. So when I say business, I'm not talking about money.</p>
                        <p>There are several ways for someone to use this system:</p>
                        <ul>
                            <li>We can use this for blogging. We already know about <a href="https://indieweb.org" target="_blank">IndieWeb</a>, <a href="https://www.w3.org/TR/webmention" target="_blank">Webmention</a>, and other stuff. We can do things like Webmention in this system. Each instance will act like an independent blog. Just like Mastodon, but for blogging.</li>
                            <li>We can use this as an internal system of a company. The company has to set up instances for each component. Each instance has a certain set of employees, but due to the decentralized nature, all employees can work together.</li>
                            <li>Hacker News stands for one reason and one reason only. We can use this system to make hundreds or thousands of Hacker News sites for various categories.</li>
                        </ul>
                        <p>I have more use cases for this system. I'm just too lazy to mention them all. By the way, you get the idea. But three things are always speaking in my mind.</p>
                        <ol>
                            <li>Am I just talking about Mastodon? Well, maybe.</li>
                            <li>What is the difference between this system and Mastodon? I'm not so sure.</li>
                            <li>Do we need this system? I don't know.</li>
                        </ol>
                        <p>However, we can find the correct answers for them, together.</p>
                        <h2 id="disclaimer">Disclaimer</h2>
                        <p class="mb-0">This is a pure idea of mine. I didn't copy it from anywhere. If someone has an idea like this, I don't intend to reveal it because I didn't know that they had an idea like this.</p>
                    </div>
                </div>
                <x-includes.footer />
            </div>
        </div>
    </div>
</x-layouts.base>
