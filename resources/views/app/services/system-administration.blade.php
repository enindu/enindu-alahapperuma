@php
    $id = 'services.system-administration';
    $title = 'System Administration | My Services';
    $description = 'I am Enindu Alahapperuma, a freelancing software engineer from Sri Lanka, specializes in back-end engineering, system administration, and website security.';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Web Development</h1>
                <p class="mb-0">I offer two comprehensive pricing plans to cater to your specific needs. Unfortunately, I do not provide custom plans at this time. Please review the options below to find the one that best suits your requirements.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Basic Plan - $100</h2>
                <p class="mb-0">This plan is suitable for static websites that need to display static content. It is ideal for small businesses, personal portfolios, or informational sites. Note that no admin panel will be developed in this plan.</p>
                <ul class="mb-0 ps-3">
                    <li>Up to 5 static pages ($10/additional page)</li>
                    <li>No dynamic pages</li>
                    <li>Terms and privacy policy pages</li>
                    <li>Contact or inquiry form</li>
                    <li>No major changes will apply on front-end</li>
                    <li>Front-end based on template (HTML/CSS/JS) design</li>
                    <li>Back-end based on Laravel (PHP) framework</li>
                    <li>Responsive design</li>
                    <li>Basic search engine optimization (SEO)</li>
                    <li>Social media integrations</li>
                    <li>No domain</li>
                    <li>No hosting</li>
                    <li>1-2 weeks for delivery</li>
                </ul>
                <p class="mb-0">I you are interested in this plan, click below button to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=Web%20Development%20Inquiry&body=Basic%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Standard Plan - $500</h2>
                <p class="mb-0">This plan is suitable for dynamic websites such as blogs, business portfolios, and more. It includes a bespoke admin panel to manage all dynamic content within the website, providing you with greater control and flexibility over your site's content.</p>
                <ul class="mb-0 ps-3">
                    <li>Up to 10 static pages ($10/additional page)</li>
                    <li>Unlimited dynamic pages with bespoke admin panel</li>
                    <li>Terms and privacy policy pages</li>
                    <li>Contact or inquiry form</li>
                    <li>No major changes will apply on front-end</li>
                    <li>Front-end based on template (HTML/CSS/JS) design</li>
                    <li>Back-end based on Laravel (PHP) framework</li>
                    <li>Responsive design</li>
                    <li>Basic search engine optimization (SEO)</li>
                    <li>Social media integrations</li>
                    <li>No domain</li>
                    <li>No hosting</li>
                    <li>2-3 weeks for delivery</li>
                </ul>
                <p class="mb-0">I you are interested in this plan, click below button to send an inquiry.</p>
                <div>
                    <a class="btn btn-primary rounded-5 px-5 py-2" href="mailto:{{ env('APP_EMAIL') }}?subject=Web%20Development%20Inquiry&body=Standard%20Plan">Send Inquiry</a>
                </div>
            </div>
        </div>
    </div>
@endsection
