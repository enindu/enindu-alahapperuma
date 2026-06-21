@php
    $id = 'services.service-1';
    $title = 'Web development | My services';
    $description = 'I offer several web development plans, along with a custom plan to meet different requirements. Please review the pricing options below to choose the one tha...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">Web development.</h1>
                        <p>I offer several web development plans, along with a custom plan to meet different requirements. Please review the pricing options below to choose the one that best fits your needs. If you are not sure which plan to choose, you can send me a message on WhatsApp, and I will help you select the right one based on your requirements.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <a href="{{ route('services.index') }}">Services</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Web development</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-plans-section">
        <div class="container">
            <div class="plans">
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Static plan.</h2>
                            <strong>$100 one-time ($50 annually)</strong>
                        </div>
                        <p>This plan is ideal for static websites that display fixed content. It is suitable for small businesses, personal portfolios, or informational websites. This plan does not include an admin panel.</p>
                        <ul>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Front-end based on template</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Back-end based on Laravel</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Mobile responsive design</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to 10 static pages</span>
                            </li>
                            <li>
                                <i class="ri-close-circle-line"></i>
                                <span>Dynamic pages</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Contact form integration</span>
                            </li>
                            <li>
                                <i class="ri-close-circle-line"></i>
                                <span>Shopping cart integration</span>
                            </li>
                            <li>
                                <i class="ri-close-circle-line"></i>
                                <span>Payment gateway integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Social media integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Basic SEO</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Standard .com domain</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>500MB cloud hosting</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to 1 email account</span>
                            </li>
                        </ul>
                        <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Send inquiry</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Dynamic plan.</h2>
                            <strong>$500 one-time ($75 annually)</strong>
                        </div>
                        <p>This plan is a starter package for dynamic websites, including blogs, corporate websites, and other sites that require an admin panel to manage content. It includes a custom admin panel to manage all dynamic content.</p>
                        <ul>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Front-end based on template</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Back-end based on Laravel</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Mobile responsive design</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to 10 static pages</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to unlimited dynamic pages</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Contact form integration</span>
                            </li>
                            <li>
                                <i class="ri-close-circle-line"></i>
                                <span>Shopping cart integration</span>
                            </li>
                            <li>
                                <i class="ri-close-circle-line"></i>
                                <span>Payment gateway integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Social media integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Basic SEO</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Standard .com domain</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>1GB cloud hosting</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to 4 email accounts</span>
                            </li>
                        </ul>
                        <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Send inquiry</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">E-commerce plan.</h2>
                            <strong>$750 one-time ($100 annually)</strong>
                        </div>
                        <p>This plan is for for e-commerce websites and for sites that require shopping cart functionality or online payment integration, such as hotel or restaurant websites with booking systems. It includes a custom admin panel to manage all content and orders.</p>
                        <ul>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Front-end based on template</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Back-end based on Laravel</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Mobile responsive design</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to 10 static pages</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to unlimited dynamic pages</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Contact form integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Shopping cart integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Payment gateway integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Social media integration</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Basic SEO</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Standard .com domain</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>10GB cloud hosting</span>
                            </li>
                            <li>
                                <i class="ri-checkbox-circle-line"></i>
                                <span>Up to 4 email accounts</span>
                            </li>
                        </ul>
                        <p>If you are interested in this plan, click the button below to send an inquiry.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Send inquiry</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-custom-plan-section">
        <div class="container">
            <div class="custom-plan">
                <div class="box">
                    <div class="content">
                        <div class="title">
                            <h2 class="h2">Custom plan.</h2>
                            <strong>Contact me for pricing</strong>
                        </div>
                        <p>If you have any requirements that do not fit into the predefined plans above, we can discuss a custom solution. In such cases, you will likely need a custom plan. Unlike the predefined options, custom plans are highly flexible and can be tailored specifically to your business needs.</p>
                        <p>Please send a message by clicking the button below.</p>
                        <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                            <span>Contact me</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
