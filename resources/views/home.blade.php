@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-ss-blue text-white text-center py-5" style="background: linear-gradient(135deg, #0056b3 0%, #002a5c 100%);">
        <div class="container py-5">
            <h1 class="display-3 fw-bold">SS Industries</h1>
            <p class="lead mb-4">Excellence in Pharmaceutical Manufacturing</p>
            <p class="fs-5">Providing high-quality medicines from Rawat, Islamabad to the world.</p>
            <a href="{{ route('contact') }}" class="btn btn-light text-primary btn-lg rounded-pill px-5 mt-3 fw-bold">Get in Touch</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid p-5" alt="SS Industries Logo">
            </div>
            <div class="col-md-6">
                <h6 class="text-uppercase text-primary fw-bold">Who We Are</h6>
                <h2 class="fw-bold mb-4">Dedicated to Health, Driven by Quality</h2>
                <p class="text-muted">
                    SS Industries is a premier pharmaceutical manufacturing company based in Rawat, Islamabad.
                    We specialize in producing a wide range of medicines designed to meet the highest standards of safety and efficacy.
                </p>
                <p>
                    Under the visionary leadership of our management team, we strive to bridge the gap between quality healthcare and accessibility.
                </p>
                <a href="{{ route('about') }}" class="btn btn-primary mt-3">Read More About Us</a>
            </div>
        </div>
    </div>
@endsection
