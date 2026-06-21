@php
    $id = 'contact.index';
    $title = 'Contact me';
    $description = 'Let\'s get connected. You can contact me in several ways. The quickest way is to send me a message on WhatsApp, as I am usually available there. You can also ...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">Contact me.</h1>
                        <p>Let's get connected. You can contact me in several ways. The quickest way is to send me a message on WhatsApp, as I am usually available there. You can also reach me by email. For more information, please see below.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-details-section">
        <div class="container">
            <div class="details">
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Send me a message.</h2>
                        <p>The fastest way to contact me is by sending a message on WhatsApp. You can also reach me by email or connect with me through social media and developer platforms. Links to all of my profiles can be found in the footer of this website.</p>
                        <p>I do not use a traditional contact form on my website. Over the years, I have built and managed many websites, most of which included inquiry forms. In my experience, these forms rarely generate genuine leads and are often filled with spam messages. Because of that, I decided not to include a contact form on this website.</p>
                        <p>Please use one of the buttons below to get in touch with me.</p>
                        <div class="links">
                            <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}">
                                <i class="ri-whatsapp-line"></i>
                                <span>Send message</span>
                            </a>
                            <a class="button" href="mailto:{{ config('website.email') }}">
                                <i class="ri-mail-line"></i>
                                <span>Send email</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
