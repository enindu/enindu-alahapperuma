@php
    $id = 'index';
    $title = 'I am a freelancing software engineer from Sri Lanka';
    $description = 'I am a freelance software engineer, cloud infrastructure engineer, and cybersecurity expert with years of experience in web development, Linux system adminis...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="home-hero-section">
        <div class="container">
            <div class="hero">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">
                            <i class="ri-arrow-right-circle-line"></i>
                            <span>I am a freelancing software engineer from Sri Lanka.</span>
                        </h1>
                        <p>I am a freelance software engineer, cloud infrastructure engineer, and cybersecurity expert with years of experience in web development, Linux system administration, and cybersecurity. By combining strong back-end development skills with expertise in Linux system administration, server and application security, I build reliable, efficient, and secure solutions from the ground up.</p>
                        <p>Please scroll down to learn more about my professional background, technical skills, and the freelance services I provide.</p>
                        <div class="links">
                            <a class="button" href="https://wa.me/{{ str(config('website.whatsapp'))->replace(' ', '') }}" target="_blank">
                                <span>Hire me</span>
                                <i class="ri-arrow-right-up-line"></i>
                            </a>
                            <a class="button" href="{{ route('services.index') }}">
                                <span>My services</span>
                                <i class="ri-arrow-right-up-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-facts-section">
        <div class="container">
            <div class="facts">
                <div class="box">
                    <img alt="experience" height="80" src="{{ Vite::asset('resources/images/experience.svg') }}" width="80">
                    <div>
                        <p class="h1">{{ now()->format('Y') - 2018 }}+</p>
                        <p>Experience</p>
                        <p>in years</p>
                    </div>
                </div>
                <div class="box">
                    <img alt="websites" height="80" src="{{ Vite::asset('resources/images/websites.svg') }}" width="80">
                    <div>
                        <p class="h1">86+</p>
                        <p>Websites</p>
                        <p>developed</p>
                    </div>
                </div>
                <div class="box">
                    <img alt="servers" height="80" src="{{ Vite::asset('resources/images/servers.svg') }}" width="80">
                    <div>
                        <p class="h1">8+</p>
                        <p>Servers</p>
                        <p>managed</p>
                    </div>
                </div>
                <div class="box">
                    <img alt="clients" height="80" src="{{ Vite::asset('resources/images/clients.svg') }}" width="80">
                    <div>
                        <p class="h1">84+</p>
                        <p>Collaborated</p>
                        <p>clients</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="box">
                <div class="content">
                    <h2 class="h1">Brief introduction about me.</h2>
                    <p>I am Enindu Alahapperuma, a freelance software engineer and infrastructure administrator based in Sri Lanka with over {{ now()->format('Y') - 2018 }} years of experience. I started my career in web development, and my passion for learning gradually led me into cloud infrastructure, Linux system administration, and cybersecurity. Today, I combine expertise across these fields to design, build, and manage reliable, secure, and high-performance digital systems from the ground up.</p>
                    <p>My broad experience across the entire web technology stack allows me to provide complete end-to-end solutions for clients. By combining secure back-end development with resilient cloud infrastructure and strong security practices, I ensure that every system I build is efficient, scalable, and protected against modern cyber threats.</p>
                    <p>To learn more about my background, technical skills, and the professional services I offer, please click the button below.</p>
                    <a class="button" href="{{ route('about.index') }}">
                        <span>About me</span>
                        <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="home-services-section">
        <div class="container">
            <div class="services">
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Explore my web development services.</h2>
                        <p>I provide complete web development services designed to help businesses build and maintain a strong online presence. My expertise covers every stage of the process, including custom website development, content creation, graphic design, website maintenance, and secure cloud infrastructure management.</p>
                        <p>To find the best solution for your project, please use the button below to explore my web development packages and pricing plans.</p>
                        <a class="button" href="{{ route('services.service-1') }}">
                            <span>View pricing</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Explore my infrastructure administration services.</h2>
                        <p>I provide complete infrastructure administration services to keep your platforms secure, reliable, and scalable. My services cover the entire server lifecycle, including server setup, application deployment, security hardening, performance optimization, monitoring, and ongoing maintenance.</p>
                        <p>Please use the link below to explore my infrastructure administration packages and pricing plans to find the right solution for your needs.</p>
                        <a class="button" href="{{ route('services.service-2') }}">
                            <span>View pricing</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home-faq-section">
        <div class="container">
            <div class="faq">
                <div class="box">
                    <div class="content">
                        <p class="h3">Who are you?</p>
                        <p>I am a freelance software engineer specializing in web development, an infrastructure engineer focused on Linux-based cloud system administration, and a cybersecurity specialist focused on application and network security.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">What services do you offer?</p>
                        <p>I provide freelance services in web development, infrastructure administration, cloud solutions, and cybersecurity for businesses and individuals worldwide.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">What sets you apart?</p>
                        <p>With more than {{ now()->format('Y') - 2018 }} years of professional experience, I bring together expertise in software engineering, infrastructure management, and cybersecurity. This combination allows me to design, build, secure, and maintain reliable systems from the ground up.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">What web development services do you offer?</p>
                        <p>I design, develop, and maintain websites throughout their entire lifecycle. I also provide support with content creation, graphic design, domain registration, hosting setup, business email configuration, and cloud-based infrastructure solutions tailored to your needs.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">What infrastructure administration services do you offer?</p>
                        <p>I provide infrastructure solutions ranging from shared hosting environments to cloud and bare-metal servers. My services include server setup, application deployment, performance optimization, security hardening, monitoring, and ongoing system administration.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <p class="h3">What cybersecurity services do you offer?</p>
                        <p>I help secure networks, servers, and applications through security assessments, monitoring, vulnerability remediation, and system hardening. I also provide cybersecurity consulting, risk assessments, and guidance on security best practices for businesses and individuals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.includes.cta')
    <section id="home-blog-section">
        <div class="container">
            <div class="blog">
                <div class="box">
                    <div class="content">
                        <h2 class="h1">How poor development skills break internet.</h2>
                        <p>The most important part of a website's lifecycle is probably the development skills, with infrastructure skills coming second. I often come across websites b...</p>
                        <a class="button" href="{{ route('blog.blog-9') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Running Shell commands within shared hosting.</h2>
                        <p>In a previous article, I discussed shared hosting. In this one, I'll be experimenting with a shared hosting server. My goal is to highlight a vulnerability a...</p>
                        <a class="button" href="{{ route('blog.blog-8') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Playing with DNS clients.</h2>
                        <p>In a previous article, I provided a low-level overview of DNS servers. While it wasn't an exhaustive guide, it covered the fundamentals to help you understan...</p>
                        <a class="button" href="{{ route('blog.blog-7') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2 class="h1">Understanding DNS.</h2>
                        <p>Most developers have a high-level understanding of DNS. However, for web developers, grasping DNS at a low level is crucial. Writing yet another article expl...</p>
                        <a class="button" href="{{ route('blog.blog-6') }}">
                            <span>Read article</span>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
