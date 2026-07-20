@php
    $id = 'blog.blog-11';
    $title = 'Don\'t use WebAssembly for security | My blog';
    $description = 'WebAssembly is fast, portable, and increasingly popular, but many developers mistakenly treat it as a security feature. In this case study, I examine how an ...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">Don't use WebAssembly for security.</h1>
                        <p>WebAssembly is fast, portable, and increasingly popular, but many developers mistakenly treat it as a security feature. In this case study, I examine how an overengineered authentication mechanism created a false sense of protection. The lesson is simple, once a secret reaches the client, it is no longer a secret, regardless of the technology used to hide it.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <a href="{{ route('blog.index') }}">Blog</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Don't use WebAssembly for security</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="box">
                <div class="content">
                    <p>I'm writing a slightly different article today. This is a cybersecurity case study. To be precise, it isn't a success story, but a major mistake made by a developer.</p>
                    <p>One day, I stumbled upon a web application built by a solo developer in Sri Lanka. As an independent security researcher, I generally enjoy analysing software built by solo developers.</p>
                    <p>At first, I didn't find any major issues with the application. However, after further analysis, I discovered a medium-severity vulnerability affecting one of its core security mechanisms. Since the back-end was implemented correctly, user data wasn't directly compromised. However, the application's own data security policy was violated because of this design flaw. That's why this article is important not only for developers, but also for users who trust such applications with their data.</p>
                    <p>This was an overengineered application. Overengineering is a mistake often made by inexperienced developers as well as solo developers. To make this easier to understand, let me explain the application's high-level architecture.</p>
                    <p>This is a simple client-server architecture. At the application layer, communication takes place over HTTP. The developer uses JWTs to authenticate HTTP requests. These tokens are securely generated on the back end, so there is no issue with that part.</p>
                    <p>JWT authentication is only required for requests made by authenticated users. This raises the question, are the remaining endpoints public? No, they aren't. Instead of following well-established security practices, the developer used a fancy, overengineered approach. They wrote Rust code to generate an authentication token, compiled it to WebAssembly, and executed it inside the browser. To bridge the WebAssembly module with the browser, they wrote a JavaScript wrapper and obfuscated it.</p>
                    <p>The developer makes two incorrect assumptions here.</p>
                    <strong>The developer assumes an attacker cannot understand obfuscated JavaScript.</strong>
                    <p>While obfuscated code may look like Greek to an average user or developer, reverse-engineering obfuscated JavaScript is routine work for an attacker.</p>
                    <strong>The developer assumes an attacker cannot analyse WebAssembly.</strong>
                    <p>In reality, analysing WebAssembly is often easier than reverse-engineering heavily obfuscated JavaScript. In this case, the compiled WebAssembly unintentionally exposed the Rust compiler version along with the versions of several crates used during compilation. From that alone, an attacker could narrow down the libraries and algorithms used to generate the token.</p>
                    <p>Furthermore, the hash salt and the raw JSON structure used to generate the token were hard-coded into the WebAssembly module. To make matters worse, debugging information exposed the operating system used for compilation, along with the developer's local username. While this information does not directly compromise the application, it can be valuable when combined with other information during a targeted attack.</p>
                    <p>Because of this overengineering, the developer overlooked a fundamental security principle, if a secret exists on the client, it is no longer a secret. This entire mechanism relied on client-side token generation, which simply cannot provide meaningful security. The basics were forgotten.</p>
                    <p>What I'm describing here are fundamental principles every developer should keep in mind. In this particular case, you don't even need advanced reverse-engineering skills. We're talking about a web application. You can generate the same token directly from the browser's DevTools console without reverse-engineering anything. If you wanted to automate the process, you could do it with a few lines of Deno code and build a complete client for the application's back end.</p>
                    <p>I notified the developer about the issue. Their response was that they were already aware of it and that the mechanism was intended to discourage copycats rather than secure the system. However, this mechanism was also presented as part of the application's data security. To me, that demonstrated a misunderstanding of what security controls actually are. At that point, I closed the case and moved on.</p>
                    <p>At least that developer responded. That alone counts for something. When I sent this responsible disclosure, I also reported another vulnerability to a different developer. Unlike this case, that vulnerability was high severity and directly affected user data. So far, however, that developer hasn't responded at all. Once that case is closed, I'll write an article about it as well.</p>
                    <p>In conclusion, what I want to tell developers is this, WebAssembly is a powerful technology with many legitimate use cases, but it must be used carefully when security is involved. WebAssembly is not a security boundary. It cannot protect secrets that are delivered to the client. At best, it can slow an attacker down slightly - but it cannot stop one.</p>
                    <p>To users of such applications, when you entrust your data to a third party, make sure they provide the level of protection they claim. I know that 99% of people in Sri Lanka never check this, but I still encourage you to do so. If an application fails to meet its own security or privacy commitments, that is a serious problem.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
