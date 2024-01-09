@php
    $id = 'blog.dont-use-biometric-authentication';
    $type = 'article';
    $title = 'Don\'t use biometric authentication';
    $description = 'In my country, a company (referred to as "Company A") introduced a user-friendly payment system, allowing users to make payments using their fingerprints. In...';
    $keywords = 'enindu, personal website, domain acquisition, web development, static site generator, website revamp, halfmoon framework, laravel framework, tech stack, future plans';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <x-slot:meta>
        <meta content="{{ \Carbon\Carbon::parse('2024-01-09 at 07:55 PM')->toIso8601String() }}" property="article:published_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-09 at 07:55 PM')->toIso8601String() }}" property="article:modified_time">
        <meta content="{{ \Carbon\Carbon::parse('2024-01-09 at 07:55 PM')->add('1 year')->toIso8601String() }}" property="article:expiration_time">
        <meta content="{{ route('index') }}" property="article:author">
        <meta content="Cybersecurity" property="article:section">
        <meta content="Authentication" property="article:tag">
    </x-slot:meta>
    <div class="h-entry container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="p-name card-title" id="dont-use-biometric-authentication">{{ $title }}</h1>
                        <div class="d-flex flex-column gap-1">
                            <p class="mb-0">
                                <small>By <a class="p-author h-card" href="{{ route('contact.index') }}">Enindu Alahapperuma</a> on <a class="u-url" href="{{ url()->current() }}"><time class="dt-published" datetime="{{ \Carbon\Carbon::parse('2024-01-09 at 07:55 PM')->toIso8601String() }}">2024-01-09 at 07:55 PM</time></a></small>
                            </p>
                            <p class="mb-1">
                                <small>POSSE: <a class="u-syndication" href="https://medium.com/@Enindu/dont-use-biometric-authentication-361210bf7846" target="_blank">Medium</a>, <a class="u-syndication" href="https://mastodon.social/@enindu/111726699863263757" target="_blank">Mastodon</a>, <a class="u-syndication" href="https://twitter.com/Enindu/status/1744742621468414018" target="_blank">Twitter (X)</a></small>
                            </p>
                            <p class="d-flex align-items-center mb-0">
                                <span class="p-category badge bg-primary">Cybersecurity</span>
                                <span class="badge bg-secondary">Authentication</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="e-content card mt-3">
                    <div class="card-body">
                        <h2 id="the-reason">The reason</h2>
                        <p>In my country, a company (referred to as "Company A") introduced a user-friendly payment system, allowing users to make payments using their fingerprints. Initially, this seemed like an innovative idea, but upon closer inspection, it raised concerns for me. Biometric authentication for a payment system?</p>
                        <h2 id="centralized-payment-processing-system">Centralized payment processing system</h2>
                        <p>In my country, the majority of payments are processed through middleware owned by the Central Bank, and some other banks hold shares in it. This middleware provider, treated as a private company (referred to as "Company B"), plays a crucial role in maintaining <a href="https://www.iso.org/home.html" target="_blank">international standards</a>, offering solutions to other banks and financial institutes to implement and create their products.</p>
                        <h2 id="authentication-method">Authentication method</h2>
                        <p>Company A implemented one of Company B's solutions to create the payment app with a biometric authentication system. Upon further investigation, I discovered that Company B's solution lacks specifications regarding the authentication method. It could be biometric-based, password-based, pin-based, etc., leaving it open-ended, which I perceive as a significant oversight.</p>
                        <h2 id="biometric-vs-traditional-password">Biometric vs. traditional password</h2>
                        <p>While biometric authentication offers user-friendliness, it presents challenges for the end user. Unlike passwords that can be changed at any time, biometrics, such as fingerprints or irises, cannot be easily replaced. The ease of use comes at the cost of flexibility and security.</p>
                        <h2 id="companys-perspective">Company's perspective</h2>
                        <p>Biometric authentication also introduces a unique challenge from the company's perspective. In the event of a data breach, the company can shift the blame to the user. The responsibility for safeguarding biometric data often falls on the individual, creating a potential loophole for companies to evade accountability.</p>
                        <h2 id="forced-authentication">Forced authentication</h2>
                        <p>An additional drawback is the potential for forced authentication using biometrics, whereas passwords or pins cannot be compelled in the same way. The ownership of money or data lies with the user, and trust in the system requires the responsible handling of such sensitive information. It is essential not to compromise security under the guise of user-friendliness.</p>
                        <h2 id="security-over-user-friendliness">Security over user-friendliness</h2>
                        <p>This perspective emphasizes the importance of prioritizing security over user-friendliness. While convenient, biometric authentication introduces risks that may outweigh its benefits. Users should be cautious and consider the potential implications of relying on biometrics for authentication.</p>
                        <h2 id="disclaimer">Disclaimer</h2>
                        <p class="mb-0">The opinions expressed here are personal and carry the responsibility of the author. Individual perspectives may vary, and the author cannot be held responsible for differing opinions.</p>
                    </div>
                </div>
                <x-includes.footer />
            </div>
        </div>
    </div>
</x-layouts.base>
