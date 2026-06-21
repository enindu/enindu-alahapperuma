@php
    $id = 'services.index';
    $title = 'My services';
    $description = 'With experience in software engineering, infrastructure administration, and cybersecurity, I offer a wide range of freelance services. Below, you will find d...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, web developer, infrastructure engineer, linux system administrator, cybersecurity expert, sri lanka';
@endphp

@extends('components.layouts.pages')
@section('pages-content')
    <section id="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <div class="box">
                    <div class="content">
                        <h1 class="display-1">My services.</h1>
                        <p>With experience in software engineering, infrastructure administration, and cybersecurity, I offer a wide range of freelance services. Below, you will find detailed information about the services I provide, including pricing plans and other relevant details. Feel free to explore and contact me if you have any questions or need help with your project.</p>
                        <div class="links">
                            <a href="{{ route('index') }}">Home</a>
                            <i class="ri-arrow-right-s-line"></i>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-list-section">
        <div class="container">
            <div class="list">
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
@endsection
