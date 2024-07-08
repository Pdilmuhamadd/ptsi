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
                        <div class="card-travel text-center d-flex flex-column">
                            <div class="travel-location">Perencanaan</div>
                            <div class="project-list">
                                <div class="project">
                                    Proyek#7
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#7</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: In Progress</p>
                                    </div>
                                </div>
                                <div class="project">
                                    Proyek#1
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#7</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: In Progress</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-travel text-center d-flex flex-column">
                            <div class="travel-location">Analisis & Desain</div>
                            <div class="project-list">
                                <div class="project">Proyek#6</div>
                                <div class="project">Proyek#9</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-travel text-center d-flex flex-column">
                            <div class="travel-location">Pengembangan</div>
                            <div class="project-list">
                                <div class="project">Proyek#5</div>
                                <div class="project">Proyek#8</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-travel text-center d-flex flex-column">
                            <div class="travel-location">Pengujian</div>
                            <div class="project-list">
                                <div class="project">Proyek#2</div>
                                <div class="project">Proyek#4</div>
                                <div class="project">Proyek#10</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-travel text-center d-flex flex-column">
                            <div class="travel-location">Implementasi</div>
                            <div class="project-list">
                                <div class="project">Proyek#1</div>
                                <div class="project">Proyek#3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
