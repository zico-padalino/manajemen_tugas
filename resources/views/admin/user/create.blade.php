@extends('layouts.app')

@section('content')
<!-- Custom styles for this page -->
<link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-plus mr-2"></i>
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
        <div class="mb-1 mr-2">
            <a href="#" class="btn btn-success btn-sm">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
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
    </div>
</div>
@endsection