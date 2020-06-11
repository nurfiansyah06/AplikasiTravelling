@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
<!-- header -->
<header class="text-center">
    <h1>Explore The Beautiful World <br> As Easy One Click</h1>
    <p class="mt-3">You will see beautiful <br> moment you never see before</p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<!-- statistic -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail text-left">
                    <h2>20K</h2>
                    <p>Member</p>
                </div>

                <div class="col-3 col-md-2 stats-detail text-left">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>

                <div class="col-3 col-md-2 stats-detail text-left">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>

                <div class="col-3 col-md-2 stats-detail text-left">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

            <section class="section-popular" id="popular">
                <div class="container">
                    <div class="row">
                        <div class="col text-center section-popular-heading">
                            <h2>Wisata Populer</h2>
                            <p>Something that you never try <br>
                                before in this World
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section-popular-content" id="popular-content">
               <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" 
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                            <div class="travel-country">{{ $item->title }}</div>
                            <div class="travel-location">{{ $item->location }}</div>
                            <div class="travel-button mt-auto">
                                <a href=" {{ url('/detail', $item->slug) }}" class="btn btn-travel-details">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
               </div>
            </section>

            <section class="section-network" id="network">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Our Network</h2>
                            <p>Companies are trusted us <br> more than just a trip</p>
                        </div>
                        <div class="col-md-8 text-center">
                            <img src="{{ url('frontend/images/partner.png') }}" alt="" class="img-partner">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonial" id="testimonialHeading">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>They Are Loving Us</h2>
                            <p>Moments were giving them <br>
                            the best experience</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonial-content" id="testimonialcontent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonail text-center">
                                <div class="testimonail-content">
                                    <img src="{{ url('frontend/images/avatar-1.png') }}" class="mb-4 mt-4 rounded-cicle" alt="">
                                    <h3 class="mb-4">Angga Risky</h3>
                                    <p class="testimonial">
                                        " It was glourious and i could not stop to say wohoo
                                        for every single moment Dankeee "
                                    </p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Ubud
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonail text-center">
                                <div class="testimonail-content">
                                    <img src="{{ url('frontend/images/avatar-2.png') }}" class="mb-4 mt-4 rounded-cicle" alt="">
                                    <h3 class="mb-4">Shayna</h3>
                                    <p class="testimonial">
                                        " It was glourious and i could not stop to say wohoo
                                        for every single moment Dankeee "
                                    </p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Nusa Penida
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonail text-center">
                                <div class="testimonail-content">
                                    <img src="{{ url('frontend/images/avatar-3.png') }}" class="mb-4 mt-4 rounded-cicle" alt="">
                                    <h3 class="mb-4">Marion Jola</h3>
                                    <p class="testimonial">
                                        " It was glourious and i could not stop to say wohoo
                                        for every single moment Dankeee "
                                    </p>
                                    <hr>
                                    <p class="trip-to mt-2">
                                        Trip to Dubai
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                        </div>
                    </div>
                </div>
            </section>
    </main>
@endsection