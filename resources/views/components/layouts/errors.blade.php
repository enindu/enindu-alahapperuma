@extends('components.layouts.base')
@section('base-content')
    <div class="error">
        <div class="box">
            <div class="content">
                <h1 class="display-1">
                    <i class="ri-error-warning-line"></i>
                    <span>{{ $title }}</span>
                </h1>
                <p>{{ $description }}</p>
            </div>
        </div>
    </div>
@endsection
