@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
<header class="text-center">
    <h1>
        Explore The Beautiful World<br>
        As Easy One Click
    </h1>
    <p class="mt-3">You will see beautiful
        <br>
        moment you never see before
    </p>

    <a href="#popular" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<!-- content -->
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20k</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Contries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3k</h2>
                <p>Hotel</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata popular</h2>
                    <p>
                        Something that you never try
                        <br>
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="poularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image:url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : "" }}');">
                        <div class="travel-country">{{ $item->location }}</div>
                        <div class="travel-location">{{ $item->title }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br>
                        more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{ url('frontend/images/partner.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them
                        <br>
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img class="mb-4 rounded-circle" src="{{ url('frontend/images/human1.png') }}" alt="User">
                            <h3 class="mb-4">Ading</h3>
                            <p class="testimonial">
                                “ It was glorious and I could
                                not stop to say wohooo for
                                every single moment
                                Dankeeeeee “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to bandung
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img class="mb-4 rounded-circle" src="{{ url('frontend/images/human2.png') }}" alt="User">
                            <h3 class="mb-4">alifiyana</h3>
                            <p class="testimonial">
                                “ The trip was amazing and
                                I saw something beautiful in
                                that Island that makes me
                                want to learn more “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to bali
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img class="mb-4 rounded-circle" src="{{ ('frontend/images/human3.png') }}" alt="User">
                            <h3 class="mb-4">Putri</h3>
                            <p class="testimonial">
                                “ I loved it when the waves
                                was shaking harder — I was
                                scared too “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to yogyakarta
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection