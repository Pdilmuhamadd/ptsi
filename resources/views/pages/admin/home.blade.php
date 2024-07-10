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
                        <h2>Dashboard</h2>
                        <p>Dashboard Pengembangan SI</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-proyek-content" id="proyekContent">
            <div class="container">
                <div class="section-proyek-travel row justify-content-center">
                    @php
                        $categories = [
                            'PERENCANAAN' => 'Perencanaan',
                            'ANALISIS DESAIN' => 'Analisis Desain',
                            'PENGEMBANGAN' => 'Pengembangan',
                            'PENGUJIAN' => 'Pengujian',
                            'IMPLEMENTASI' => 'Implementasi'
                        ];
                    @endphp

                    @foreach ($categories as $key => $category)
                        <div class="col-2">
                            <div class="card-proyek text-center d-flex flex-column">
                                <div class="tahap-proyek">{{ $category }}</div>
                                <div class="project-list">
                                    @foreach ($proyeks->where('kategori', $key) as $proyek)
                                        <div class="project" onclick="location.href='{{ route('detail', $proyek->id_proyek) }}'">
                                            <a>Proyek : {{ $proyek->id_proyek }}</a>
                                            <div class="project-details">
                                                <p>Nama Proyek: {{ $proyek->nama_proyek }}</p>
                                                <p>Mulai: {{ \Carbon\Carbon::parse($proyek->tanggal_mulai)->format('d-m-Y') }}</p>
                                                <p>Target Selesai: {{ \Carbon\Carbon::parse($proyek->target_selesai)->format('d-m-Y') }}</p>
                                                <p>PM: {{ $proyek->pic }}</p>
                                                <p>User: {{ $proyek->user ?? 'N/A' }}</p>
                                                <p>Nilai: Rp. {{ number_format($proyek->estimasi_biaya, 0, ',', '.') }}</p>
                                                <p>Status: {{ $proyek->status ?? 'In Progress' }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!--main end-->
@endsection
