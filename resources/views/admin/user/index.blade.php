@extends('layouts.app')

@section('content')

    <h1 class="h3 mb-4 text-gray-800">
         <i class="fas fa-user mr-2"></i>
        {{ $title }}
    </h1>

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


<div class="card">
    <div class="card-header">
        <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>
                                                <i class="fas fa-cog"></i>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-crash"></i>
                                                </a>
                                            </td>
                                            
                                        </tr>
        </div>
    </div>
</div>
       
                        
    @endsection