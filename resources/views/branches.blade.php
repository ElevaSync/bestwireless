@extends('layouts.app')

@section('title', 'Branches | ' . env('APP_NAME'))

@section('content')
    <section class="uni-banner">
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Our Branches
                    @if(Route::currentRouteName() == 'branches.state')
                        in {{ $state->name }}
                    @endif
                </h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    @if(Route::currentRouteName() == 'branches.state')
                        <li><a href="{{ route('branches') }}">Branches</a></li>
                        <li>{{ $state->name }}</li>
                    @else
                        <li>Branches</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

    <section class="service pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($branches as $branch)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-card">
                        <div class="service-card-img">
                            <a href="{{ route('branch', $branch->id) }}"><img data-src="{{ asset('storage/'. $branch->image) }}" class="lazyload" alt="{{ $branch->name }}"></a>
                        </div>
                        <div class="service-card-text">
                            <h4><a href="{{ route('branch', $branch->id) }}">{{ $branch->name }}</a></h4>
                            <p>
                                <i class="fas fa-map-marker-alt me-3"></i> {{ $branch->city->state->name }}, {{ $branch->city->name }} <br/>
                                <i class="fas fa-phone-alt me-2"></i> &nbsp;({{ $branch->code_phone }}) {{ $branch->phone }}
                                <br />
                                <i class="fas fa-map-marker-alt me-3"></i>
                                {{ $branch->street }}
                            </p>
                            <a class="default-button" href="{{ route('branch', $branch->id) }}">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/lozad@1.14.0/dist/lozad.min.js"></script>
    <script>
    const observer = lozad('.lazyload', {
        loaded: function(el) {
        el.classList.add('loaded'); // Optional: Add a class when the image is loaded
        }
    });
    observer.observe();
    </script>
@endsection
