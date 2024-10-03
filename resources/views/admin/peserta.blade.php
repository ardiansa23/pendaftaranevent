@extends('template.main')

@section('content')
    <h1>Data Peserta</h1>
    @if($pesertas->isEmpty())
        <p>Tidak ada data peserta ditemukan.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesertas as $peserta)
                    <tr>
                        <td>{{ $peserta->id }}</td>
                        <td>{{ $peserta->name }}</td>
                        <td>{{ $peserta->email }}</td>
                        <td>

                            <a href="{{ route('admin.detail', $peserta->id) }}" class="btn btn-warning">Detail</a>
                            {{-- <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
