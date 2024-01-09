@extends('layouts.app')

@section('content')
    <section class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contcat-card-area pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card align-items-center d-flex">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Our Location</h5>
                            <p>
                                {{ $branch->street }}
                                <br>
                                {{ $branch->city->state->name }},
                                {{ $branch->city->name }} <br>
                                <strong>ZIP Code: </strong>{{ $branch->zip_code }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card align-items-center d-flex">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h5>Our Work Hours</h5>
                            <h6 class="mb-0">From Monday to Saturday</h6>
                            <p class="mb-2">
                                {{ date('h:i A', strtotime($branch->open_workday)) }} -
                                {{ date('h:i A', strtotime($branch->close_workday)) }}
                            </p>
                            <h6 class="mb-0">Sunday</h6>
                            <p>
                                {{ date('h:i A', strtotime($branch->open_sunday)) }} -
                                {{ date('h:i A', strtotime($branch->close_sunday)) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card align-items-center d-flex">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h5>Our Phone Number</h5>
                            <p>
                                ({{ $branch->code_phone }}) {{ $branch->phone }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="content-card">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-form-area pb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Get In Touch</h3>
            </div>
            <div class="section-content">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="google-map pr-20">
                            <iframe class="g-map" src="{{ $branch->google_maps }}"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        @include('includes.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
