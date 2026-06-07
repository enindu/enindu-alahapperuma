@extends('components.layouts.base')
@section('base-content')
    <section id="error-section">
        <div class="container">
            <div class="box">
                <div class="content">
                    <h1 class="display-1">
                        <i class="ri-error-warning-line"></i>
                        <span>{{ $title }}.</span>
                    </h1>
                    <p>{{ $description }}</p>
                    <a class="button" href="{{ url()->previous() }}">
                        <i class="ri-arrow-left-down-line"></i>
                        <span>Go back</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
