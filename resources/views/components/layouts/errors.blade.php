@extends('components.layouts.base')
@section('base-content')
    <div class="x-error-container">
        <div class="x-error">
            <div class="card">
                <div class="card-body">
                    <div class="x-content">
                        <h1>{{ $title }}</h1>
                        <p>{{ $description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
