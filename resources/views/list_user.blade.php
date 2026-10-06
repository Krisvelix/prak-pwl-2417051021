@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Daftar User</h2>
        <p class="text-muted mb-0">Data mahasiswa Praktikum Web Lanjut</p>
    </div>

    <a href="{{ route('user.create') }}" class="btn btn-primary">
        + Tambah User
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="px-4">No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($users as $index => $user)
                        <tr>
                            <td class="px-4">{{ $index + 1 }}</td>
                            <td class="fw-semibold">{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>
                                <span class="badge bg-primary">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">
                                Belum ada data user.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
