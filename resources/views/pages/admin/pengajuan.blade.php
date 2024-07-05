@extends('layouts.app')

@section('title', 'Form Pengajuan')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        body {
            background: rgb(255,255,255);
            background: linear-gradient(0deg, rgba(255,255,255,1) 20%, rgba(2,19,77,1) 48%, rgba(2,19,77,1) 52%, rgba(255,255,255,1) 80%);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <main>
        <h1 class="text-center">Form Pengajuan Proyek</h1>
        <style>
            .body{
                position: relative;
                background: rgb(255,255,255);
            }
        </style>
        @if(session('success'))
            <div style="color: #071C4D;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('submit_proposal.php') }}" method="POST" class="form-pengajuan">
            @csrf

            <div class="form-group">
                <label for="unit">Nama Unit:</label>
                <input type="text" id="unit" name="unit" class="form-control" placeholder="Nama Unit">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" class="form-control" placeholder="Deskripsi Proyek"></textarea>
            </div>

            <div class="form-group">
                <label for="PIC">PIC:</la>
                <input type="text" id="unit" name="unit" class="form-control" placeholder="PIC">
            </div>

            <div class="form-group">
                <label for="User">User:</la>
                <input type="text" id="unit" name="unit" class="form-control" placeholder="User">
            </div>

            <div class="form-group">
                <label for="Anggaran dan Kebutuhan">Anggaran dan Kebutuhan:</la>
                <textarea id="Anggaran dan Kebutuhan" name="Anggaran dan Kebutuhan" rows="4" cols="50" class="form-control" placeholder="Anggaran dan Kebutuhan Proyek"></textarea>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Mulai:</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control">
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Selesai:</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control" placeholder="pilih status">
                    <option value="Diterima">Diterima</option>
                    <option value="Diproses Studi Kelayakan">Diproses Studi Kelayakan</option>
                    <option value="Pengembangan">Pengembangan</option>
                    <option value="Selesai">selesai</option>
                </select>
            </div>

            <div class="form-submit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
