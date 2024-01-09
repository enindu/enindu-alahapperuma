@php
    $id = 'blog';
    $type = 'website';
    $title = 'I write articles, when I get bored';
    $description = 'I write articles about software engineering, back-end development, system administration, website security, and open source software, when I get bored.';
    $keywords = 'enindu, back-end developer, web developer, php developer, go developer, system administrator, website security expert, logo designer, software engineer, freelancer';
@endphp

<x-layouts.base :description="$description" :id="$id" :keywords="$keywords" :title="$title" :type="$type">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="card-title mb-0" id="i-write-articles-when-i-get-bored">{{ $title }}</h1>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center gap-md-0 gap-1">
                            <div class="order-md-1 order-1 col-auto">
                                <p class="mb-0">01. <a href="{{ route('blog.the-story-of-enindu-com') }}">The story of enindu.com</a></p>
                            </div>
                            <div class="col order-md-2 order-3">
                                <p class="d-flex align-items-center mb-0">
                                    <span class="badge bg-primary">General</span>
                                    <span class="badge bg-secondary">Website</span>
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
                <x-includes.footer />
            </div>
        </div>
    </div>
</x-layouts.base>
