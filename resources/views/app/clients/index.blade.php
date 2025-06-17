@php
    $id = 'clients.index';
    $title = 'My Clients';
    $description = 'I have worked with various companies and individual clients in full-time, part-time, and freelance capacities. Below are some of the companies I have collabo...';
    $keywords = 'enindu, enindu alahapperuma, freelancer, software engineer, sri lanka, back-end engineer, system administrator, website security expert';
@endphp

@extends('components.layouts.base')
@section('content')
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3">
                <h1 class="mb-0">My Clients</h1>
                <p class="mb-0">I have worked with various companies and individual clients in full-time, part-time, and freelance capacities. Below are some of the companies I have collaborated with. My services for these clients span a wide range, including web development, system administration, server maintenance, cloud services, email solutions, custom software solutions, search engine optimization, even logo design, branding, and much more.</p>
            </div>
        </div>
    </div>
    <div class="card rounded-5 p-3">
        <div class="card-body">
            <div class="d-flex flex-column gap-3 gap-lg-0">
                <a class="text-white text-decoration-none" href="https://banaano.com" target="_blank">Banaano</a>
                <a class="text-white text-decoration-none" href="https://elegantaquatics.co.uk" target="_blank">Elegant Aquatics</a>
                <a class="text-white text-decoration-none" href="https://xynosync.com" target="_blank">XynoSync</a>
                <a class="text-white text-decoration-none" href="https://crafterscollection.com" target="_blank">Crafters Collection</a>
                <a class="text-white text-decoration-none" href="https://dubsndot.com.au" target="_blank">dubsndot</a>
                <a class="text-white text-decoration-none" href="https://www.facebook.com/COLOMBOBUSINESSASSOCIATIONSRILANKA" target="_blank">Colombo Business Association</a>
                <a class="text-white text-decoration-none" href="#" target="_blank">TicketZone</a>
                <a class="text-white text-decoration-none" href="https://phyxle.com" target="_blank">Phyxle</a>
                <a class="text-white text-decoration-none" href="https://novart.lk" target="_blank">Novart</a>
            </div>
        </div>
    </div>
@endsection
