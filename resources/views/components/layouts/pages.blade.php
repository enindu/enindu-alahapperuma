@extends('components.layouts.base')
@section('base-content')
    <main>
        @include('components.includes.header')
        @yield('pages-content')
        @include('components.includes.footer')
    </main>
@endsection
