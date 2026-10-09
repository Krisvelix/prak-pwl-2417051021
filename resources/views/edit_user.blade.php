@extends('layouts.app')

@section('content')

<div class="container mt-4">

```
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Edit User</h2>

    <a href="{{ route('user.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    class="form-control"
                    value="{{ old('nama', $user->nama) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input
                    type="text"
                    name="npm"
                    id="npm"
                    class="form-control"
                    value="{{ old('npm', $user->nim) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    <option value="">-- Pilih Kelas --</option>

                    @foreach ($kelas as $item)
                        <option
                            value="{{ $item->id }}"
                            {{ old('kelas_id', $user->kelas_id) == $item->id ? 'selected' : '' }}
                        >
                            {{ $item->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="{{ route('user.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>
</div>
```

</div>
@endsection
