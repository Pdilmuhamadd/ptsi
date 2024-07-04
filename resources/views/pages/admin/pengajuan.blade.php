@extends('layouts.app')

@section('title', 'Form Pengajuan')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <main>
        <h1 class="text-center">Form Pengajuan Proyek</h1>

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
                <label for="pic">PIC:</label>
                <select id="pic" name="pic" class="form-control">
                    <option value="AVP">AVP</option>
                    <option value="VP">VP</option>
                    <!-- Tambahkan pilihan lain jika diperlukan -->
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
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
