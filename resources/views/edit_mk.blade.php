@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Edit Mata Kuliah</h4>

```
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                <input
                    type="text"
                    name="nama_mk"
                    id="nama_mk"
                    class="form-control"
                    value="{{ old('nama_mk', $mk->nama_mk) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">Jumlah SKS</label>
                <input
                    type="number"
                    name="sks"
                    id="sks"
                    class="form-control"
                    value="{{ old('sks', $mk->sks) }}"
                    min="1"
                    max="6"
                    required
                >
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>
```

</div>
@endsection
