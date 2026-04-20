@php
    $id = 'services.index';
    $title = 'My Services';
    $description = 'As a skilled back-end developer and system administrator, I offer a range of freelance services. Below, you will find detailed information about the services...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h1>My Services</h1>
                <p>As a skilled back-end developer and system administrator, I offer a range of freelance services. Below, you will find detailed information about the services I provide, including pricing plans and other relevant details. Feel free to explore and contact me if you have any questions or need assistance with your project.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>Web Development</h2>
                <p>I provide professional web development services, focusing on creating robust and secure web applications tailored to your needs. Click the button below to view my pricing plans and find the best option for your project.</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('services.service-1') }}">View Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="x-content">
                <h2>System Administration</h2>
                <p>With extensive experience in system administration, I offer a variety of services in cloud computing and server management. My goal is to ensure your systems operate smoothly, efficiently, and securely. Click the button below to view my pricing plans and find the best solution for your needs.</p>
                <div>
                    <a class="btn btn-primary" href="{{ route('services.service-2') }}">View Service</a>
                </div>
            </div>
        </div>
    </div>
@endsection
