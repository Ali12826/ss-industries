@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-5">
            <h6 class="text-uppercase text-primary fw-bold" style="letter-spacing: 2px;">What We Manufacture</h6>
            <h1 class="fw-bold mb-3">Our Manufacturing Capabilities</h1>
            <p class="text-muted col-lg-7 mx-auto">
                From essential tablets to specialized formulations, our facility is equipped to manufacture a wide range of pharmaceutical products to the highest quality standards.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/tablets.jpg') }}" alt="Tablets manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-tablets"></i></div>
                        <h5 class="fw-bold mb-2">Tablets</h5>
                        <p class="text-muted mb-0">High-capacity manufacturing of coated and uncoated tablets tailored for various therapeutic needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/syrups.jpg') }}" alt="Syrups manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-prescription-bottle"></i></div>
                        <h5 class="fw-bold mb-2">Syrups</h5>
                        <p class="text-muted mb-0">Advanced liquid filling lines ensuring precise dosage and stability for pediatric and adult syrups.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/capsule.jpg') }}" alt="Capsules manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-capsules"></i></div>
                        <h5 class="fw-bold mb-2">Capsules</h5>
                        <p class="text-muted mb-0">State-of-the-art encapsulation technology for both gelatin and vegetarian options.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/injections.jpg') }}" alt="Injections manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-syringe"></i></div>
                        <h5 class="fw-bold mb-2">Injections</h5>
                        <p class="text-muted mb-0">Sterile, precision-filled injectable formulations manufactured under strict quality-controlled conditions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/antibiotics.jpg') }}" alt="Antibiotics manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-shield-virus"></i></div>
                        <h5 class="fw-bold mb-2">Antibiotics</h5>
                        <p class="text-muted mb-0">Dedicated antibiotic manufacturing lines ensuring potency, purity, and compliance with international standards.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/nutraceuticals.jpg') }}" alt="Nutraceuticals manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-leaf"></i></div>
                        <h5 class="fw-bold mb-2">Nutraceuticals</h5>
                        <p class="text-muted mb-0">A growing range of health supplements and nutraceutical products supporting everyday wellness.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="product-card h-100 rounded-4 overflow-hidden shadow-sm">
                    <div class="product-img-wrap">
                        <img src="{{ asset('images/products/beauty products.jpg') }}" alt="Beauty products manufacturing">
                    </div>
                    <div class="p-4">
                        <div class="product-icon mb-3"><i class="fas fa-spa"></i></div>
                        <h5 class="fw-bold mb-2">Beauty Products</h5>
                        <p class="text-muted mb-0">Quality-driven personal care and beauty formulations manufactured to consistent cosmetic industry standards.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
