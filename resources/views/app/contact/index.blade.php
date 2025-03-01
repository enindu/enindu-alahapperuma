@php
    $id = 'contact.index';
    $title = 'Contact Me';
    $description = 'There are several ways to contact me, with the fastest method being my preferred choice. If you\'re already a client, you can reach me via WhatsApp. For addit...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Contact Me</h1>
                <p class="mb-0">There are several ways to contact me, with the fastest method being my preferred choice. If you're already a client, you can reach me via WhatsApp. For additional contact details, please see below.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Contact Information</h2>
                <h3 class="mb-0">Contact Methods</h3>
                <p class="mb-0">The quickest way to reach me is by sending an email to <a class="text-decoration-none" href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a> from your preferred email client. I check my email regularly, which is why it's the fastest method. You can also find me on various social media platforms listed in the left bar. While I do monitor my social media, please note that responses may not be as prompt, as I don't check those accounts as often.</p>
                <h3 class="mb-0">Contact Form</h3>
                <p class="mb-0">Throughout my career, I have developed and managed hundreds of websites, most of which included a contact form. However, I found that genuine inquiries through these forms were extremely rare, with the majority of submissions being spam. Despite implementing various anti-spam measures, the issue persisted. As a result, I made the decision to remove the contact form entirely. In my experience, contact forms are often ineffective, as they are rarely used for their intended purpose.</p>
            </div>
        </div>
    </div>
@endsection
