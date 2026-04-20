@php
    $id = 'contact.index';
    $title = 'Contact Me';
    $description = 'You can contact me in various ways, with the quickest being my preferred method. If you are an existing client, you can reach me via WhatsApp. For more conta...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h1>Contact Me</h1>
                <p>You can contact me in various ways, with the quickest being my preferred method. If you are an existing client, you can reach me via WhatsApp. For more contact details, please see below.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Contact Information</h2>
                <h3>Contact Methods</h3>
                <p>The fastest way to contact me is by sending an email to <a href="mailto:{{ config('website.email') }}">{{ config('website.email') }}</a>. I check my email frequently, ensuring a quick response. You can also reach out to me on social media platforms listed on the left. However, please note that I may not respond as quickly on social media as I do not check those accounts as often.</p>
                <h3>Contact Form</h3>
                <p>Over my career, I have created and managed many websites, most of which included a contact form. However, I found that genuine inquiries through these forms were very rare, with most submissions being spam. Despite using various anti-spam measures, the problem persisted. Therefore, I decided to remove the contact form entirely. In my experience, contact forms are often ineffective and rarely used for their intended purpose.</p>
            </div>
        </div>
    </div>
@endsection
