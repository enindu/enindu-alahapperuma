@php
    $id = 'blog.index';
    $title = 'My Blog';
    $description = 'Besides offering back-end development and system administration services, I also write articles in my spare time. These articles mainly focus on web developm...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">My Blog</h1>
                <p class="mb-0">Besides offering back-end development and system administration services, I also write articles in my spare time. These articles mainly focus on web development, software I've created, and my personal insights on various topics. Below, you can find my articles.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3 gap-lg-0">
                <a class="text-white text-decoration-none" href="{{ route('blog.article-2') }}">Ultimate Web Development Guide For Clients</a>
                <a class="text-white text-decoration-none" href="{{ route('blog.article-1') }}">I Have Revamped My Website</a>
            </div>
        </div>
    </div>
@endsection
