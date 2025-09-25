@php
    $id = 'google-ads.submit-contacts';
    $title = 'Thank You!';
    $description = 'Your contact details have been submitted successfully! I will contact you as soon as possible to discuss your requirements. In the meantime, feel free to exp...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base-2')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">Thank You!</h1>
                <p class="mb-0">Your contact details have been submitted successfully. I will contact you as soon as possible to discuss your requirements. In the meantime, feel free to explore my website and the services I offer. Thank you for contacting me!</p>
                <div>
                    <a class="btn btn-primary rounded-pill px-5 py-2" href="{{ route('index') }}">View Homepage</a>
                </div>
            </div>
        </div>
    </div>
@endsection
