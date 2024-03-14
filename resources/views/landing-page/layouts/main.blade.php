@extends('landing-page.layouts.master')

@section('content')
    <!-- HEADER START -->
    @include('landing-page.components.header')
    <!-- HEADER END -->

    @yield('page-content')

    {{-- FOOTER START --}}
    @include('landing-page.components.footer')
    {{-- FOOTER END --}}

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
@endsection