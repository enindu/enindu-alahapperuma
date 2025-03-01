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
                <p class="mb-0">You can contact me in various ways, with the quickest being my preferred method. If you are an existing client, you can reach me via WhatsApp. For more contact details, please see below.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Contact Information</h2>
                <h3 class="mb-0">Contact Methods</h3>
                <p class="mb-0">The fastest way to contact me is by sending an email to <a class="text-decoration-none" href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>. I check my email frequently, ensuring a quick response. You can also reach out to me on social media platforms listed on the left. However, please note that I may not respond as quickly on social media as I do not check those accounts as often.</p>
                <h3 class="mb-0">Contact Form</h3>
                <p class="mb-0">Over my career, I have created and managed many websites, most of which included a contact form. However, I found that genuine inquiries through these forms were very rare, with most submissions being spam. Despite using various anti-spam measures, the problem persisted. Therefore, I decided to remove the contact form entirely. In my experience, contact forms are often ineffective and rarely used for their intended purpose.</p>
            </div>
        </div>
    </div>
@endsection
