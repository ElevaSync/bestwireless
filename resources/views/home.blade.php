@extends('layouts.app')

@section('content')
    <section class="home-banner ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text-area">
                        <h6>DISCOVER OUR BRANCHES</h6>
                        <h1>Stress less.<br/>Smile more.</h1>
                        <h5 class="text-white">You're covered with Cricket!</h5>
                        <a class="default-button" href="{{ route('branches') }}">Our Branches</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-banner-area">
                        <img src="{{ asset('assets/images/banner/banner.jpg') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fun-facts pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card fun-facts-card-2">
                        <i class="flaticon-smart-city"></i>
                        <h2><span class="odometer" data-count="{{ $cities }}">00</span></h2>
                        <p>Cities Of Our Branches</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card fun-facts-card-2">
                        <i class="flaticon-location-1"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $states }}">00</span>
                        </h2>
                        <p>States Of Our Branches</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card fun-facts-card-2">
                        <i class="flaticon-park-1"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $branches }}">00</span>
                        </h2>
                        <p>Branches</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card last-card fun-facts-card-2">
                        <i class="flaticon-award"></i>
                        <h2>
                            <span class="odometer" data-count="5890">00</span>
                            <span class="sign-icon">+</span>
                        </h2>
                        <p>Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="precess ptb-100 mt-10">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Our Emails</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="process-card process-card-2">
                            <i class="flaticon-google-docs"></i>
                            <h4>Apply for a job</h4>
                            <p><a href="mailto:HR@BestWireless1.com">HR@BestWireless1.com</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="process-card process-card-2">
                            <i class="flaticon-process"></i>
                            <h4>Contact Us</h4>
                            <p><a href="mailto:support@BestWireless1.com">support@BestWireless1.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(false)
    <section class="about pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-img">
                            <img class="a-img-1" src="assets/images/about/a1.jpg" alt="image">
                            <img class="a-img-2" src="assets/images/about/a2.jpg" alt="image">
                            <img class="a-img-3" src="assets/images/about/a3.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="why-we-text-area about-text-area-2">
                            <div class="default-section-title">
                                <span>WHO WE ARE</span>
                                <h3>Medzo Is An Inner Metropolitan Municipality Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="why-we-text-list">
                                <i class="flaticon-government-building"></i>
                                <h4>Our Role Is To:</h4>
                                <p>Nulla porttitor accumsan tincidunt lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien massa convallis.</p>
                                <ul>
                                    <li>Praesent sapien massa, convallis a pellentesque nec.</li>
                                    <li>Nulla porttitor accumsan tincidunt.</li>
                                    <li>Ivamus suscipit tortor eget felis porttitor volutpat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="contact-form-area pb-100" id="contact">
        <div class="container">
            <div class="default-section-title default-section-title-middle mb-5">
                <h3>Get In Touch</h3>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        @include('includes.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
