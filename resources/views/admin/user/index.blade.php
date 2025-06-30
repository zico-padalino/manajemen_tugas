@extends('layouts.app')

@section('content')
<!-- Custom styles for this page -->
<link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user mr-2"></i>
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
        <div class="mb-1 mr-2">
            <a href="{{ route('userCreate') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data
            </a>
        </div>
        <div class="mb-1 d-flex ml-auto">
            <a href="" class="btn btn-success btn-sm mr-2">
                <i class="fas fa-file-excel"></i>
                Export Excel
            </a>
            <a href="" class="btn btn-danger btn-sm">
                <i class="fas fa-file-pdf"></i>
                PDF
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th><i class="fas fa-cog"></i></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td class="text-center">
                            <span class="badge badge-primary">
                                {{ $item->email }}</span>
                        </td>

                        <td class="text-center">
                            @if ($item->jabatan == 'admin')
                            <span class="badge badge-dark">
                                {{ $item->jabatan }}
                            </span>
                            @else
                            <span class="badge badge-danger">
                                {{ $item->jabatan }}
                            </span>
                            @endif
                        </td>

                        <td class="text-center">
                            @if ($item->is_tugas == false)
                            <span class="badge badge-danger">
                                Belum Di Tugaskan
                            </span>
                            @else
                            <span class="badge badge-success">
                                Sudah Di Tugaskan
                            </span>
                            @endif
                        </td>

                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection