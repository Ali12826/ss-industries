@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container my-5">

        {{-- Success Message Alert --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="text-center mb-5">
            <h1 class="fw-bold">Contact Us</h1>
            <p class="text-muted">We are here to discuss business inquiries and work together to achieve your goals.</p>
        </div>

        <div class="row">
            {{-- Left Side: Contact Info Card --}}
            <div class="col-lg-5 mb-4">
                <div class="card border-0 shadow-sm bg-primary text-white h-100">
                    <div class="card-body p-5">
                        <h3 class="mb-4">Get In Touch</h3>

                        <div class="mb-4">
                            <h5><i class="fas fa-map-marker-alt me-2"></i> Address</h5>
                            <p>Plot no. 10, Street no. N5<br>RIE-5956, Rawat<br>Islamabad, Pakistan</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-phone me-2"></i> Phone</h5>
                            <p>+92 305-5408278</p>
                        </div>

                        <div class="mb-4">
                            <h5><i class="fas fa-envelope me-2"></i> Email</h5>
                            <p>ssindustriespharma@gmail.com</p>
                        </div>

                        <div class="mt-4">
                            <small>Chairperson: Dr. Jabeen Amin</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Side: The Form --}}
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-5">
                    <h3 class="mb-4 text-primary">Send us a Message</h3>

                    {{-- FORM START --}}
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf {{-- THIS TOKEN PREVENTS THE 419 ERROR --}}

                        <div class="row g-3">

                            {{-- Name Field --}}
                            <div class="col-md-6">
                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="Ali Hamza"
                                       value="{{ old('name') }}"
                                       required>
                                @error('name')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Phone Field --}}
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       placeholder="+92..."
                                       value="{{ old('phone') }}">
                            </div>

                            {{-- Email Field --}}
                            <div class="col-12">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email"
                                       name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="name@example.com"
                                       value="{{ old('email') }}"
                                       required>
                                @error('email')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Message Field --}}
                            <div class="col-12">
                                <label class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea name="message"
                                          class="form-control @error('message') is-invalid @enderror"
                                          rows="5"
                                          placeholder="How can we help you?"
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Submit Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5 py-2">Send Message</button>
                            </div>
                        </div>
                    </form>
                    {{-- FORM END --}}

                </div>
            </div>
        </div>
    </div>
@endsection
