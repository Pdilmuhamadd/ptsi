@extends('layouts.app')

@section('title')
    PT. Surveyor Indonesia
@endsection

@section('content')


    <!-- main -->
    <main>
        <section class="section-proyek" id="proyek">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-proyek-header">
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

        <section class="section-proyek-content" id="proyekContent">
            <div class="container">
                <div class="section-proyek-travel row justify-content-center">
                    <div class="col-2">
                        <div class="card-proyek text-center d-flex flex-column">
                            <div class="tahap-proyek">PERENCANAAN</div>
                            <div class="project-list">
                                <div class="project" onclick="location.href='{{ route('detail') }}'">
                                    Proyek#7
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#7</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                                <div class="project" onclick="location.href='{{ route('detail') }}'">
                                    Proyek#1
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#1</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-proyek text-center d-flex flex-column">
                            <div class="tahap-proyek">ANALISIS DESAIN</div>
                            <div class="project-list">
                                <div class="project" onclick="location.href='{{ route('detail') }}'">Proyek#6
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#6</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status:</p>
                                    </div>
                                </div>
                                <div class="project" onclick="location.href='{{ route('detail') }}'">Proyek#9
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#9</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-proyek text-center d-flex flex-column">
                            <div class="tahap-proyek">PENGEMBANGAN</div>
                            <div class="project-list">
                                <div class="project5" onclick="location.href='{{ route('detail') }}'">Proyek #5
                                <div class="project-details5">
                                        <p>Nama Proyek: Proyek#5</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status:</p>
                                    </div>
                                </div>
                                <div class="project" onclick="location.href='{{ route('detail') }}'">Proyek#8
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#8</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-proyek text-center d-flex flex-column">
                            <div class="tahap-proyek">PENGUJIAN</div>
                            <div class="project-list">
                                <div class="project" onclick="location.href='{{ route('detail') }}'">Proyek#2
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#2</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status:</p>
                                    </div>
                                </div>
                                <div class="project4">Proyek#4
                                    <div class="project-details4" onclick="location.href='{{ route('detail') }}'">
                                        <p>Nama Proyek: Proyek#4</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                                <div class="project">Proyek#10
                                    <div class="project-details" onclick="location.href='{{ route('detail') }}'">
                                        <p>Nama Proyek: Proyek#10</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card-proyek text-center d-flex flex-column">
                            <div class="tahap-proyek">IMPLEMENTASI</div>
                            <div class="project-list">
                                <div class="project" onclick="location.href='{{ route('detail') }}'">Proyek#11
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#11</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                                <div class="project" onclick="location.href='{{ route('detail') }}'">Proyek#3
                                    <div class="project-details">
                                        <p>Nama Proyek: Proyek#3</p>
                                        <p>Mulai: 00-00-0000</p>
                                        <p>Target Selesai: 00-00-0000</p>
                                        <p>PM: </p>
                                        <p>User: </p>
                                        <p>Nilai: 000</p>
                                        <p>Status: </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--main end-->
@endsection
