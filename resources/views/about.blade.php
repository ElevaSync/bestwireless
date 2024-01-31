@extends('layouts.app')

@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>About Us</h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>

<section class="about py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="why-we-text-area about-text-area-2">
                    <div class="why-we-text-list ps-0">
                        <h4>Best Wireless 1 is a Cricket Wireless Authorized Retailer Since 2011.</h4>
                        <ul>
                            <li>Our first Location was in Lexington NC, now we are operating 39 locations in North Carolina and Virginia.</li>
                            <li>We pride ourselves in providing Cricket Wireless' affordable, no-contract plans that offer reliable voice, and fast unlimited 5G & 4G LTE data backed by exceptional customer service.</li>
                            <li>We focus on creating a customer experience that distinguishes us from others.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
