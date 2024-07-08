@extends('layouts.app')

@section('title',' Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Proyek
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                    <h1>
                        {{-- {{ $item->title}} --}}
                    </h1>
                    <p>
                        {{-- {{ $item->location}} --}}
                    </p>
                    {{-- @if ($item->galleries->count())
                    <div class="gallery">
                        <div class="xzoom-container">
                            <img src="{{Storage::url($item->galleries->first()->image)}}"
                            class="xzoom"
                            id="xzoom-default"
                            xoriginal="{{Storage::url($item->galleries->first()->image)}}"/>
                        </div>
                        <div class="xzoom-thumbs">
                            @foreach ($item->galleries as $gallery)
                                <a href="{{Storage::url($gallery->image)}}">
                                    <img src="{{Storage::url($gallery->image)}}"
                                    class="xzoom-gallery"
                                    width="128"
                                    xpreview="{{Storage::url($gallery->image)}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    @endif --}}
                    <h2>
                        Tentang Proyek
                    </h2>
                    {{-- {!! $item->about !!} --}}
                </div>
                <div class="features row">
                    <div class="col-md-4">
                        <div class="description">
                            <img src="{{url('frontend/images/lc-unit.svg')}}"
                            alt=""
                            class="features-image"/>
                            <div class="description">
                                <h3>
                                    Unit
                                </h3>
                                <p>
                                    {{-- {{$item->featured_event}} --}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <div class="description">
                            <img src="{{url('frontend/images/lc-PIC.svg')}}"
                            alt=""
                            class="features-image"/>
                            <div class="description">
                                <h3>
                                    PIC
                                </h3>
                                <p>
                                    {{-- {{$item->language}} --}}
                                </p>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <div class="description">
                            <img src="{{url('frontend/images/lc-status.svg')}}"
                            alt=""
                            class="features-image"/>
                            <div class="description">
                                <h3>
                                    Status
                                </h3>
                                <p>
                                    {{-- {{$item->foods}} --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>
                            Informasi Proyek
                        </h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">
                                    Tanggal Mulai
                                </th>
                                <td width="50%" class="text-right">
                                    {{-- {{\Carbon\Carbon::create($item->date_of_departure)->format('F n, Y')}} --}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">
                                    Target Selesai
                                </th>
                                <td width="50%" class="text-right">
                                    {{-- {{$item->duration}} --}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">
                                    Anggaran
                                </th>
                                <td width="50%" class="text-right">
                                    {{-- Rp.{{$item->price}},00 --}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/dist/xzoom.css')}}">
@endpush

@push('additional-script')
<script src="{{ url('frontend/libraries/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
