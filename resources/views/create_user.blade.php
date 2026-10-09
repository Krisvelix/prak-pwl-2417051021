@extends('layouts.app')

@section('content')

<h2>{{ $title }}</h2>

<form action="{{ route('user.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" id="npm" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="kelas_id" class="form-label">Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-select" required>
            <option value="">-- Pilih Kelas --</option>

            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
