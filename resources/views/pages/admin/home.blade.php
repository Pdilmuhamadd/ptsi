@extends('layouts.app')

@section('title')
    PT. Surveyor Indonesia
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Pantau Proyek dengan Mudah
        </h1>
        <p class="mt-3">
            Lacak kemajuan proyek dengan baik dan pastikan setiap langkah berjalan sesuai rencana.
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-header">
                        <h2>
                            Dashboard
                        </h2>
                        <p>
                            Dashboard Pengembangan SI
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
    </main>
@endsection
