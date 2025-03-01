@php
    $id = 'services.index';
    $title = 'My Services';
    $description = 'As an expert back-end developer and system administrator, I offer a variety of services as a freelancer. Below, you\'ll find detailed information about the se...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">My Services</h1>
                <p class="mb-0">As an expert back-end developer and system administrator, I offer a variety of services as a freelancer. Below, you'll find detailed information about the services I provide, including pricing plans and other relevant details. Feel free to explore and reach out if you have any questions or need assistance with your project.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-3">
                    <h2 class="mb-0">Web Development</h2>
                    <p class="mb-0">As an experienced back-end developer, I offer comprehensive web development services tailored to your specific needs. My services include creating robust and scalable web applications, with a strong focus on high performance and security. Click the button below to explore my pricing plans and find the best fit for your project.</p>
                    <div>
                        <a class="btn btn-primary rounded-5 px-5 py-2" href="{{ route('services.web-development') }}">View Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-3">
                    <h2 class="mb-0">System Administration</h2>
                    <p class="mb-0">With extensive experience in system administration, I offer a wide range of services focused on cloud computing and server management. My services are designed to ensure your systems run smoothly, efficiently, and securely. Click the button below to explore my pricing plans and find the best solution for your needs.</p>
                    <div>
                        <a class="btn btn-primary rounded-5 px-5 py-2" href="{{ route('services.system-administration') }}">View Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
