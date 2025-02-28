@php
    $id = 'contact.index';
    $title = 'Need To Get In Touch With Me?';
    $description = 'I am Enindu Alahapperuma, a freelancing software engineer from Sri Lanka, specializes in back-end engineering, system administration, and website security.';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-0 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">{{ $title }}</h1>
                <h2 class="mb-0">Contact Information</h2>
                <h3 class="mb-0">How To Contact Me?</h3>
                <p class="mb-0">The fastest way to contact me is to simply send an email from your favorite email client to <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>. I say it is the fastest way because I check my email very often. Additionally, you can find me on all the social media platforms mentioned in the left bar. While you can reach out to me there, please note that a response is not guaranteed as I do not check my social media accounts as frequently.</p>
                <h3 class="mb-0">Why There Is No Contact Form?</h3>
                <p class="mb-0">Throughout my career, I have created and managed hundreds of websites, and almost every one of them had a contact form. However, in my experience, genuine inquiries through these forms were extremely rare. The majority of submissions were spam. Despite implementing various anti-spam measures, the problem persisted. Consequently, I decided to remove the contact form altogether. From my perspective, contact forms are ineffective as they are seldom used for their intended purpose, at least in my experience.</p>
            </div>
        </div>
    </div>
@endsection
