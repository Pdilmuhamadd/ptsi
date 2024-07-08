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
                    <div class="col-2">
                        <div
                            class="card-travel text-center d-flex flex-column"
                        >
                            <div class="travel-location">Perencanaan</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div
                            class="card-travel text-center d-flex flex-column"
                        >
                            <div class="travel-location">Analisis & Kebutuhan</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div
                            class="card-travel text-center d-flex flex-column"
                        >
                            <div class="travel-location">Pengembangan</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div
                            class="card-travel text-center d-flex flex-column"
                        >
                            <div class="travel-location">Pengujian</div>
                            <div class="travel-button mt-auto">
                                <a href="{route('detail')}" class="btn btn-travel-details px-4">
                                    proyek 4
                                    <div class="tooltip">
                                        <p>Nama Proyek:</p>
                                        <p>Mulai:</p>
                                        <p>Target Selesai:</p>
                                        <p>PIC:</p>
                                        <p>User:</p>
                                        <p>Note:</p>
                                        <p>Status:</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div
                            class="card-travel text-center d-flex flex-column"
                        >
                            <div class="travel-location">Implementasi</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
