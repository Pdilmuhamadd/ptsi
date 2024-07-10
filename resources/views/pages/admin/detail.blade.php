@extends('layouts.app')

@section('title', 'Detail Proyek')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Proyek</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->nama_proyek }}</h1>
                        <p>{{ $item->location }}</p>

                        {{-- Commented out the gallery section as it might not be needed
                        @if ($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ Storage::url($item->galleries->first()->image) }}"
                                    class="xzoom"
                                    id="xzoom-default"
                                    xoriginal="{{ Storage::url($item->galleries->first()->image) }}" />
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                <a href="{{ Storage::url($gallery->image) }}">
                                    <img src="{{ Storage::url($gallery->image) }}"
                                        class="xzoom-gallery"
                                        width="128"
                                        xpreview="{{ Storage::url($gallery->image) }}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif --}}

                        <p>{{ $item->deskripsi_proyek }}</p>

                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('frontend/images/lc-unit.svg') }}"
                                        alt=""
                                        class="features-image" />
                                    <div class="description">
                                        <h3>Unit</h3>
                                        <p>{{ $item->mp }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/images/lc-PIC.svg') }}"
                                        alt=""
                                        class="features-image" />
                                    <div class="description">
                                        <h3>PIC</h3>
                                        <p>{{ $item->pic }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/images/lc-status.svg') }}"
                                        alt=""
                                        class="features-image" />
                                    <div class="description">
                                        <h3>Status</h3>
                                        <p>In Progress</p> {{-- Assuming status is hardcoded for now --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Informasi Proyek</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Tanggal Mulai</th>
                                <td width="50%" class="text-right">{{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('F d, Y') }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Target Selesai</th>
                                <td width="50%" class="text-right">{{ \Carbon\Carbon::parse($item->target_selesai)->format('F d, Y') }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Anggaran</th>
                                <td width="50%" class="text-right">Rp. {{ number_format($item->estimasi_biaya, 0, ',', '.') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
