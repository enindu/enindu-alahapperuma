@php
    $id = 'blog';
    $type = 'website';
    $title = 'I write articles, when I get bored';
    $description = 'I write articles about software engineering, back-end development, system administration, website security, and open source software, when I get bored.';
    $keywords = 'enindu, back-end developer, web developer, php developer, go developer, system administrator, website security expert, logo designer, software engineer, freelancer';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <div class="card mt-3">
        <div class="card-body">
            <h1 class="card-title mb-0" id="i-write-articles-when-i-get-bored">{{ $title }}</h1>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center gap-md-0 gap-1">
                <div class="order-md-1 order-1 col-auto">
                    <p class="mb-0">05. <a href="{{ route('blog.the-interesting-case-of-ip-cam') }}">The interesting case of IP cam</a></p>
                </div>
                <div class="col order-md-2 mt-md-0 order-3 mt-1">
                    <p class="d-flex align-items-center mb-0">
                        <span class="badge me-1 border">Software</span>
                        <span class="badge border">Source code</span>
                    </p>
                </div>
                <div class="order-md-3 order-2 col-auto">
                    <p class="mb-0">
                        <small>Published on 2024-01-12 at 04:49 AM</small>
                    </p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center gap-md-0 mt-3 gap-1">
                <div class="order-md-1 order-1 col-auto">
                    <p class="mb-0">04. <a href="{{ route('blog.otp-less-payment-system') }}">OTP-less payment system</a></p>
                </div>
                <div class="col order-md-2 mt-md-0 order-3 mt-1">
                    <p class="d-flex align-items-center mb-0">
                        <span class="badge me-1 border">Architecture</span>
                        <span class="badge border">Idea</span>
                    </p>
                </div>
                <div class="order-md-3 order-2 col-auto">
                    <p class="mb-0">
                        <small>Published on 2024-01-11 at 04:09 PM</small>
                    </p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center gap-md-0 mt-3 gap-1">
                <div class="order-md-1 order-1 col-auto">
                    <p class="mb-0">03. <a href="{{ route('blog.decentralized-hacker-news') }}">Decentralized Hacker News</a></p>
                </div>
                <div class="col order-md-2 mt-md-0 order-3 mt-1">
                    <p class="d-flex align-items-center mb-0">
                        <span class="badge me-1 border">Architecture</span>
                        <span class="badge border">Idea</span>
                    </p>
                </div>
                <div class="order-md-3 order-2 col-auto">
                    <p class="mb-0">
                        <small>Published on 2024-01-10 at 02:05 AM</small>
                    </p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center gap-md-0 mt-3 gap-1">
                <div class="order-md-1 order-1 col-auto">
                    <p class="mb-0">02. <a href="{{ route('blog.dont-use-biometric-authentication') }}">Don't use biometric authentication</a></p>
                </div>
                <div class="col order-md-2 mt-md-0 order-3 mt-1">
                    <p class="d-flex align-items-center mb-0">
                        <span class="badge me-1 border">Cybersecurity</span>
                        <span class="badge border">Authentication</span>
                    </p>
                </div>
                <div class="order-md-3 order-2 col-auto">
                    <p class="mb-0">
                        <small>Published on 2024-01-09 at 07:55 PM</small>
                    </p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center gap-md-0 mt-3 gap-1">
                <div class="order-md-1 order-1 col-auto">
                    <p class="mb-0">01. <a href="{{ route('blog.the-story-of-enindu-com') }}">The story of enindu.com</a></p>
                </div>
                <div class="col order-md-2 mt-md-0 order-3 mt-1">
                    <p class="d-flex align-items-center mb-0">
                        <span class="badge me-1 border">General</span>
                        <span class="badge border">Website</span>
                    </p>
                </div>
                <div class="order-md-3 order-2 col-auto">
                    <p class="mb-0">
                        <small>Published on 2024-01-07 at 01:42 PM</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.base>
