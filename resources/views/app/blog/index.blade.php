@php
    $id = 'blog.index';
    $title = 'My blog';
    $description = 'I enjoy sharing my knowledge and ideas with people around the world. In addition to providing software engineering, infrastructure administration, and cybers...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">My blog.</h1>
                        <p>I enjoy sharing my knowledge and ideas with people around the world. In addition to providing software engineering, infrastructure administration, and cybersecurity services, I also write articles in my spare time. These articles mainly cover software, infrastructure, cybersecurity, experiences I have had with people, and my thoughts on various topics. Below, you can find all the articles I have written.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog-list-section">
        <div class="container">
            <div class="list">
                <div class="box">
                    <div class="content">
                        <h2 class="h1">How poor development skills break internet.</h2>
                        <p>The most important part of a website's lifecycle is probably the development skills, with infrastructure skills coming second. I often come across websites b...</p>
                        <a class="button" href="{{ route('blog.blog-9') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Running Shell commands within shared hosting.</h2>
                        <p>In a previous article, I discussed shared hosting. In this one, I'll be experimenting with a shared hosting server. My goal is to highlight a vulnerability a...</p>
                        <a class="button" href="{{ route('blog.blog-8') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Playing with DNS clients.</h2>
                        <p>In a previous article, I provided a low-level overview of DNS servers. While it wasn't an exhaustive guide, it covered the fundamentals to help you understan...</p>
                        <a class="button" href="{{ route('blog.blog-7') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Understanding DNS.</h2>
                        <p>Most developers have a high-level understanding of DNS. However, for web developers, grasping DNS at a low level is crucial. Writing yet another article expl...</p>
                        <a class="button" href="{{ route('blog.blog-6') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Shared hosting explained for clients.</h2>
                        <p>This isn't just another article explaining shared hosting. Instead, I'll break it down from a system administrator's perspective—why you should never use sha...</p>
                        <a class="button" href="{{ route('blog.blog-5') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Playing with HTTP servers.</h2>
                        <p>In a previous article, I provided a high-level overview of HTTP. In this article, I will dive into the low-level implementation of HTTP, covering topics such...</p>
                        <a class="button" href="{{ route('blog.blog-4') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Understanding HTTP.</h2>
                        <p>There are countless articles and videos on the internet explaining what HTTP is. If I were to write this post in the same way, it would just be another one a...</p>
                        <a class="button" href="{{ route('blog.blog-3') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Ultimate web development guide for clients.</h2>
                        <p>I come across numerous web development groups on Facebook every day. These groups are filled with people—some searching for web developers at low prices, whi...</p>
                        <a class="button" href="{{ route('blog.blog-2') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">I have revamped my website.</h2>
                        <p>I have upgraded the Laravel framework to version 12, made significant improvements to the front-end design, and added service pages to the website. This mean...</p>
                        <a class="button" href="{{ route('blog.blog-1') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
