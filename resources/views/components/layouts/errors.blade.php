@extends('components.layouts.base')
@section('base-content')
    <section id="error-section">
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1 class="display-1">
                        <span>{{ $title }}.</span>
                    </h1>
                    <p>{{ $description }}</p>
                    <p>If you're looking for something, don't waste your time. Check out <a href="https://github.com/enindu/enindu-alahapperuma">this website's source code</a>.</p>
                    <a class="button" href="{{ url()->previous() }}">
                        <i class="ri-arrow-left-down-line"></i>
                        <span>Go back</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
