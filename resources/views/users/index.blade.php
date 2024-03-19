@extends('layouts.app')

@section('title', 'Manajemen User')

@section('content')
    <h2>Manajemen User</h2>
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahUserModal">Tambah User</button>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut -->
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        @if ($user->status == "active")
                        <span class="badge badge-success">Aktif</span>
                        @else
                        <span class="badge badge-danger">Tidak Aktif</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editUserModal{{ $user->id }}">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @include('users.create')
    @include('users.edit')
@endsection