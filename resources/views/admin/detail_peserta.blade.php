@extends('template.main') <!-- Pastikan untuk menggunakan layout yang sesuai -->

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Peserta</h1>
    </div>

    <div class="container mt-4">
        <h3>Informasi Peserta</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pesertas->name }}</h5>
                        <p class="card-text">Email: {{ $pesertas->email }}</p>
                        <p class="card-text">No Handphone: {{ $pesertas->phone }}</p>
                        <p class="card-text">Afiliasi: {{ $pesertas->afiliasi }}</p>
                        @if ($pesertas->afiliasi == 'lainnya')
                            <p class="card-text">Afiliasi Lainnya: {{ $pesertas->afiliasi_lain }}</p>
                        @endif
                        <p class="card-text">Jabatan/Program Studi: {{ $pesertas->jabatan }}</p>
                        <p class="card-text">Pengalaman dengan AI/Programming: {{ $pesertas->pengalaman }}</p>
                        @if ($pesertas->pengalaman == 'lainnya')
                            <p class="card-text">Pengalaman Lainnya: {{ $pesertas->pengalaman_lain }}</p>
                        @endif
                        <p class="card-text">Tujuan Mengikuti Workshop: {{ $pesertas->tujuanwo }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Jika ingin menampilkan gambar profil peserta -->
                <img height="200" src="{{ $pesertas->gambar ? asset('storage/images/'.$pesertas->gambar) : asset('storage/images/no-image.jpg') }}" class="img-fluid" alt="Gambar Peserta">
            </div>
        </div>
    </div>

    <a href="{{ route('admin.peserta') }}" class="btn btn-primary mt-3">Kembali</a> <!-- Tombol Kembali -->
</main>
@endsection
