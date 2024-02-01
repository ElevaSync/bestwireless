@extends('layouts.app')

@section('content')
    <section class="home-banner ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="banner-text-area">
                        <h1>Best Wireless 1, Inc.</h1>
                        <h5 class="text-white">
                            Cricket Wireless Authorized Retailer.
                        </h5>
                        <a class="default-button" href="{{ route('branches.state', 'NC') }}"><span>North Carolina</span></a>
                        <a class="default-button" href="{{ route('branches.state', 'VA') }}"><span>Virginia</span></a>
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


    <section class="services pt-100 pb-70">
        <div class="container">
            <div class="section-content">
                <div class="service-slider-area-1 owl-carousel">
                    @for($i = 1; $i <= 4; $i++)
                    <div class="service-card mlr-15 mb-30">
                        <div class="service-card-img">
                            <img src="{{ asset('assets/images/slider/' . $i .'.jpg') }}" alt="image">
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <section class="precess ptb-100 mt-10">
        <div class="container">
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="process-card process-card-2">
                            <i class="flaticon-google-docs"></i>
                            <h4>Apply for a job</h4>
                            <p><a href="mailto:HR@BestWireless1.com">HR@BestWireless1.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
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


    <section class="contact-form-area pb-100" id="contact">
        <div class="container">
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
