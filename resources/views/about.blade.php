@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">About SS Industries</h1>
            <p class="text-muted">Innovating for a healthier Pakistan</p>
        </div>

        <div class="row g-5">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h3 class="text-primary"><i class="fas fa-flask me-2"></i> Our Mission</h3>
                    <p class="mt-3">
                        To manufacture superior quality pharmaceutical products that improve the quality of life for our patients.
                        We represent the future of medicine manufacturing in Islamabad, adhering to strict regulatory standards.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h3 class="text-primary"><i class="fas fa-eye me-2"></i> Our Leadership</h3>
                    <p class="mt-3">
                        Guided by <strong>our management team</strong>, SS Industries is built on a foundation of medical expertise and ethical business practices.
                        Our vision is to create a manufacturing hub in Rawat that stands for trust and reliability in the pharma sector.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-5 p-5 bg-light rounded-3">
            <h3>Manufacturing Capabilities</h3>
            <p>We are equipped to manufacture medicines of different kinds, including:</p>
            <ul>
                <li>Tablets and Capsules</li>
                <li>Syrups and Suspensions</li>
                <li>General Medicines</li>
                <li>Specialized Pharmaceutical formulations</li>
            </ul>
        </div>
    </div>
@endsection
