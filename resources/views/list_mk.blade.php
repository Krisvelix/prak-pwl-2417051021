@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Daftar Mata Kuliah</h4>

        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">
            + Tambah Mata Kuliah
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            @if ($data->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $mk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mk->nama_mk }}</td>
                                    <td>{{ $mk->sks }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info mb-0">
                    Belum ada data mata kuliah.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection