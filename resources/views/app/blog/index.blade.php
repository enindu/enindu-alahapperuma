@php
    $id = 'blog.index';
    $title = 'My Blog';
    $description = 'Besides offering back-end development and system administration services, I also write articles in my spare time. These articles mainly focus on web developm...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h1>My Blog</h1>
                <p>Besides offering back-end development and system administration services, I also write articles in my spare time. These articles mainly focus on web development, software I've created, and my personal insights on various topics. Below, you can find my articles.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>How Poor Development Skills Break Internet</h2>
                <p>The most important part of a website's lifecycle is probably the development skills, with infrastructure skills coming second. I often come across websites b...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-9') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Running Shell Commands Within Shared Hosting</h2>
                <p>In a previous article, I discussed shared hosting. In this one, I'll be experimenting with a shared hosting server. My goal is to highlight a vulnerability a...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-8') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Playing With DNS Clients</h2>
                <p>In a previous article, I provided a low-level overview of DNS servers. While it wasn't an exhaustive guide, it covered the fundamentals to help you understan...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-7') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Understanding DNS</h2>
                <p>Most developers have a high-level understanding of DNS. However, for web developers, grasping DNS at a low level is crucial. Writing yet another article expl...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-6') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Shared Hosting Explained For Clients</h2>
                <p>This isn't just another article explaining shared hosting. Instead, I'll break it down from a system administrator's perspective—why you should never use sha...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-5') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Playing With HTTP Servers</h2>
                <p>In a previous article, I provided a high-level overview of HTTP. In this article, I will dive into the low-level implementation of HTTP, covering topics such...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-4') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Understanding HTTP</h2>
                <p>There are countless articles and videos on the internet explaining what HTTP is. If I were to write this post in the same way, it would just be another one a...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-3') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Ultimate Web Development Guide For Clients</h2>
                <p>I come across numerous web development groups on Facebook every day. These groups are filled with people—some searching for web developers at low prices, whi...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-2') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>I Have Revamped My Website</h2>
                <p>I have upgraded the Laravel framework to version 12, made significant improvements to the front-end design, and added service pages to the website. This mean...</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('blog.blog-1') }}">View Article</a>
                </div>
            </div>
        </div>
    </div>
@endsection
