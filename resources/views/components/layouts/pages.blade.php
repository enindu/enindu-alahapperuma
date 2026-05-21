@extends('components.layouts.base')
@section('base-content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="x-container">
                    @include('components.includes.profile-desktop')
                    @include('components.includes.links')
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="x-container">
                    @include('components.includes.header')
                    @include('components.includes.profile-mobile')
                    @yield('content')
                    @include('components.includes.footer')
                </div>
            </div>
        </div>
    </div>
    @include('components.includes.top')
@endsection
