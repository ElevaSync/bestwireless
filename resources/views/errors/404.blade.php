@extends('layouts.app')

@section('content')
<section class="error ptb-100">
    <div class="container">
        <div class="error-content">
            <img src="{{ asset('assets/images/error.png') }}" alt="image">
            <h4>Sorry We Can`t Find That Page!</h4>
            <p>The page you are looking for was moved, removed, renamed or never existed.</p>
            <a class="default-button" href="{{ route('home') }}">Back To Home <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section>
@endsection
