@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Tambah Mata Kuliah</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nama_mk"
                        name="nama_mk"
                        placeholder="Masukkan nama mata kuliah"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input
                        type="number"
                        class="form-control"
                        id="sks"
                        name="sks"
                        min="1"
                        max="6"
                        placeholder="Masukkan jumlah SKS"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</div>
@endsection