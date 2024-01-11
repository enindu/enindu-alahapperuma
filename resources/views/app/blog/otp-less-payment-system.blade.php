@php
    $id = 'blog.otp-less-payment-system';
    $type = 'article';
    $title = 'OTP-less payment system';
    $description = 'One of my friends needed a project, the final project for his bachelor\'s degree. Since he already worked in the financial sector, his idea was to create som...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-01-11 at 04:09 PM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-11 at 04:09 PM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-11 at 04:09 PM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="Architecture" property="article:section">
        <meta content="Idea" property="article:tag">
    </x-slot:meta>
    <div class="h-entry container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="p-name card-title" id="otp-less-payment-system">{{ $title }}</h1>
                        <div class="d-flex flex-column gap-1">
                            <p class="mb-0">
                                <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-01-11 at 04:09 PM')->toIso8601String() }}">2024-01-11 at 04:09 PM</time></a></small>
                            </p>
                            {{-- <p class="mb-1">
                                <small>POSSE: <a class="u-syndication" href="https://medium.com/@Enindu/decentralized-hacker-news-e0fd8424dcb1" target="_blank">Medium</a>, <a class="u-syndication" href="https://mastodon.social/@enindu/111728070625359671" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1744831420206579735" target="_blank">Twitter (X)</a>, <a class="u-syndication" href="https://news.ycombinator.com/item?id=38932459" target="_blank">Hacker News</a></small>
                            </p> --}}
                            <p class="d-flex align-items-center mb-0">
                                <span class="p-category badge bg-primary">Architecture</span>
                                <span class="badge bg-secondary">Idea</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="e-content card mt-3">
                    <div class="card-body">
                        <h2 id="beginning">Beginning</h2>
                        <p>One of my friends needed a project, the final project for his bachelor's degree. Since he already worked in the financial sector, his idea was to create something related to it, be it a banking system, payment system, or the like. The project requirements were clear: it must solve a problem in the sector. That's all.</p>
                        <h2 id="problem-with-otp">Problem with OTP</h2>
                        <p>Given his familiarity with issues in his field, we decided to develop a payment system without a <a href="https://en.wikipedia.org/wiki/One-time_password" target="_blank">One-Time Password (OTP)</a>. I don't know about other countries, but in my country, OTP is mandatory for fraud protection. However, the problem persisted because, despite OTP being designed to protect users from fraud, some attackers still managed to bypass the system by deceiving users. Most users were unaware of OTPs or frauds, viewing the OTP process as troublesome. Almost all OTPs were sent to their phone number or email address. If a phone number isn't used for more than 6 months, service providers may cancel it without notification, potentially allowing unknown individuals to access OTPs, constituting a significant security breach. Additionally, network coverage issues caused delays and unresponsiveness. From my perspective, the actual solution was to educate people and service providers rather than building a new payment system.</p>
                        <p>Given his daily interactions with such customers, my friend was well aware of this issue. Hence, we decided to create a payment system, specifically a payment process without OTPs. So, I designed the architecture.</p>
                        <h2 id="diagram">Diagram</h2>
                        <p>
                            <img alt="{{ str(env('APP_NAME')) }} otp-less payment system" class="img-fluid" src="{{ Vite::asset('resources/images/otp-less-payment-system.svg') }}" width="100%">
                        </p>
                        <p>Let me break this down.</p>
                        <p>This system has four components. The fourth component, the core component, is managed by the bank. Although not directly depicted in this architecture, it's included to avoid any confusion.</p>
                        <ol>
                            <li>Client component: The monolithic web application acts as a client, communicating only with authentication and middleware components.</li>
                            <li>Authentication component: It acts as both client and server, communicating only with the client and middleware components.</li>
                            <li>Middleware component: It acts as both client and server, communicating with the client, authentication, and core components.</li>
                            <li>Core component: This belongs to the bank and communicates only with the middleware component.</li>
                        </ol>
                        <p>Every component communicates with each other via <a href="https://en.wikipedia.org/wiki/HTTP" target="_blank">Hypertext Transfer Protocol (HTTP)</a> with <a href="https://en.wikipedia.org/wiki/Transport_Layer_Security" target="_blank">Transport Layer Security (TLS)</a> v1.2 or v1.3 and basic authentication. All requests are passed as <a href="https://en.wikipedia.org/wiki/JSON" target="_blank">JavaScript Object Notation (JSON)</a>.</p>
                        <h2 id="create-transaction-flow">Create transaction flow</h2>
                        <p>Let me break down how the "Create transaction" method would work step-by-step, as demonstrated in the above diagram.</p>
                        <ol>
                            <li>If a user wants to use the system, they need to register by invoking the "Register" method. Note that the "Register" method is not demonstrated in the diagram. When the "Register" method is invoked, a "Device ID" will be created and stored in the client. The "Device ID" is a unique ID created only for the current device the user uses to register.</li>
                            <li>The client sends a request to the authentication with the "Device ID".</li>
                            <li>The authentication creates an "Authentication key".</li>
                            <li>The authentication sends a request to the middleware with "Device ID" and "Authentication key".</li>
                            <li>The middleware creates a "Middleware key" and stores "Device ID", "Authentication key", and "Middleware key" in its database.</li>
                            <li>The middleware sends a response to the authentication with "Middleware key".</li>
                            <li>The authentication sends a response to the client with the "Middleware key".</li>
                            <li>The client sends a request to the middleware with "Device ID", "Middleware key", and "Transaction".</li>
                            <li>The middleware validates "Device ID", "Authentication key", and "Middleware key".</li>
                            <li>If the above validation was successful, the middleware sends a request to the core with "Transaction". If unsuccessful, the middleware sends a response to the client with an error message.</li>
                            <li>The core processes "Transaction", managed by the bank.</li>
                            <li>If the above process was either successful or unsuccessful, the core sends a response to the middleware with "Transaction details" and "Account details".</li>
                            <li>The middleware sends a response to the client with "Transaction details" and "Account details".</li>
                            <li>The client stores "Account details" in its database.</li>
                        </ol>
                        <p>That's the overview of the "Create transaction" method. The authentication component serves as an alternative to the OTP system, working similarly to the OTP system but without requiring users to type OTP manually; the system validates it during the process.</p>
                        <h2 id="demonstration">Demonstration</h2>
                        <p>I also created a demonstrative system in Go and PHP languages, which you can find in the link below. Note that back in the day, I had a homemade MVC framework written on top of the Slim framework. I used it to build the client component. Don't get confused with it.</p>
                        <p>Link: <a href="https://github.com/enindu/otp-less-payment-system" target="_blank">https://github.com/enindu/otp-less-payment-system</a></p>
                        <p>You will need to create required SSL certificates manually to run this code. Read the <code>README.md</code> file for more details.</p>
                        <p>Note that this is just a demonstration. <a href="https://en.wikipedia.org/wiki/Basic_access_authentication" target="_blank">Basic authentication</a> is done in plain text. This system is not secure at all.</p>
                        <h2 id="how-will-this-solve-the-otp-issue">How will this solve the OTP issue?</h2>
                        <p>The combination of the authentication and middleware components does the job. The Authentication component creates the "Authentication key", and the middleware component creates the "Middleware key." Both keys are stored in the middleware component. Only the "Middleware key" goes through the client component, specifically, the "Middleware key" process in the back-end of the client component, making it inaccessible for users but still functioning as an OTP system.</p>
                        <h2 id="changes">Changes</h2>
                        <p>That system was built a long time ago. As I see it today, I would like to change the system like this.</p>
                        <ol>
                            <li>Both "Authentication key" and "Middleware key" should be created in the authentication component. The middleware component must only handle validation.</li>
                            <li>The "Device ID" should be dynamic for each request to enhance the security of the system.</li>
                            <li>Perhaps, add password-less authentication for the client component, like using email. This would enhance security and pass liability to the customer, similar to an OTP system. However, this might introduce more difficulties; let's consider it.</li>
                        </ol>
                        <h2 id="disclaimer">Disclaimer</h2>
                        <p class="mb-0">I didn't conduct any case studies to create this system. So, this might already be created somewhere. Also, I don't claim that this is the best system. At least, this was the best system I could think of back in the day. Finally, this idea is purely mine. I have no intention of revealing someone else's ideas, as I don't know if they had the same idea.</p>
                    </div>
                </div>
                <x-includes.footer />
            </div>
        </div>
    </div>
</x-layouts.base>
