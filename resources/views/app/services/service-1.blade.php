@php
    $id = 'services.service-1';
    $title = 'Web Development | My Services';
    $description = 'I provide two detailed pricing plans to meet your needs. Currently, custom plans are not available. Please review the options below to choose the one that be...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h1>Web Development</h1>
                <p>I provide two detailed pricing plans to meet your needs. Currently, custom plans are not available. Please review the options below to choose the one that best fits your requirements.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <div class="x-title">
                    <h2>Basic Plan</h2>
                    <p>$100/one-time</p>
                </div>
                <p>This plan is ideal for static websites that display fixed content. It suits small businesses, personal portfolios, or informational sites. Note that this plan does not include an admin panel.</p>
                <ul>
                    <li>Includes up to 5 static pages ($10 per additional page)</li>
                    <li>No dynamic pages included</li>
                    <li>Terms and privacy policy pages included</li>
                    <li>Contact or inquiry form included</li>
                    <li>No major front-end changes</li>
                    <li>Front-end built using template (HTML/CSS/JS) design</li>
                    <li>Back-end built using Laravel (PHP) framework</li>
                    <li>Responsive design included</li>
                    <li>Basic search engine optimization (SEO) included</li>
                    <li>Social media integrations included</li>
                    <li>Domain not included</li>
                    <li>Hosting not included</li>
                    <li>Delivery within 1-2 weeks</li>
                </ul>
                <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary" href="mailto:{{ config('website.email') }}">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <div class="x-title">
                    <h2>Standard Plan</h2>
                    <p>$500/one-time</p>
                </div>
                <p>This plan is tailored for dynamic websites like blogs and business portfolios. It includes a custom admin panel to manage all dynamic content, providing you with greater control and flexibility over your site's content.</p>
                <ul>
                    <li>Includes up to 10 static pages ($10 per additional page)</li>
                    <li>Unlimited dynamic pages with a custom admin panel</li>
                    <li>Terms and privacy policy pages included</li>
                    <li>Contact or inquiry form included</li>
                    <li>No major front-end changes</li>
                    <li>Front-end built using template (HTML/CSS/JS) design</li>
                    <li>Back-end built using Laravel (PHP) framework</li>
                    <li>Responsive design included</li>
                    <li>Basic search engine optimization (SEO) included</li>
                    <li>Social media integrations included</li>
                    <li>Domain not included</li>
                    <li>Hosting not included</li>
                    <li>Delivery within 2-3 weeks</li>
                </ul>
                <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary" href="mailto:{{ config('website.email') }}">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
@endsection
