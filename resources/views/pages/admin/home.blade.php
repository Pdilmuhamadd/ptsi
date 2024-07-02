@extends('layouts.app')

@section('title')
    PT. Surveyor Indonesia
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Pantau Proyek Anda dengan Mudah
        </h1>
        <p class="mt-3">
            Lacak kemajuan proyek dengan baik dan pastikan setiap langkah berjalan sesuai rencana.
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        20K
                    </h2>
                    <p>
                        Members
                    </p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        28
                    </h2>
                    <p>
                        Cabang
                    </p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        3K
                    </h2>
                    <p>
                        Proyek
                    </p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        72
                    </h2>
                    <p>
                        Partner
                    </p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-header">
                        <h2>
                            Unit Cabang
                        </h2>
                        <p>
                            Deskripsi
                            <br />
                            Deskripsi
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div
                                class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');"
                            >
                                <div class="travel-country">{{ $item->location}}</div>
                                <div class="travel-location">{{ $item->title}}</div>
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

        <section class="section-testimonial-heading" id="testimonialheading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            Testimoni
                        </h2>
                        <p>
                            Beberapa Proyek
                            <br />
                            yang ditampung
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimoniContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url ('frontend/images/testimonial-1.png')}}"
                                     alt="User"
                                     class="mb-4 rounded-circle" />
                                <h3 class="mb-4">
                                    Unit 1
                                </h3>
                                <p class="testimonial">
                                    "Deskripsi 1"
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Proyek 1
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url ('frontend/images/testimonial-2.png')}}"
                                     alt="User"
                                     class="mb-4 rounded-circle" />
                                <h3 class="mb-4">
                                    Unit 2
                                </h3>
                                <p class="testimonial">
                                    "Deskripsi 2"
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Proyek 2
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url ('frontend/images/testmonial-3.png')}}"
                                     alt="User"
                                     class="mb-4 rounded-circle" />
                                <h3 class="mb-4">
                                    Unit 3
                                </h3>
                                <p class="testimonial">
                                    "Deskripsi 3"
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Proyek 3
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
