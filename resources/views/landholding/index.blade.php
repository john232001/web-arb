@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Landholding</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Landholding</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addlandholding">Add Landholding</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>LHID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Middle Name</th>
                            <th>Municipality</th>
                            <th>Barangay</th>
                            <th>OCT/TCT No.</th>
                            <th>Lot No.</th>
                            <th>Survey No.</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($landholdings as $data)
                                <tr>
                                    <td><a href="{{ route('landholding_view', $data->id )}}" class="btn btn-link">{{ $data->lhid}}</a></td>
                                    <td>{{ $data->firstname}}</td>
                                    <td>{{ $data->familyname}}</td>
                                    <td>{{ $data->middlename}}</td>
                                    <td>{{ $data->municipality}}</td>
                                    <td>{{ $data->barangay}}</td>
                                    <td>{{ $data->octNo}}</td>
                                    <td>{{ $data->lotNo}}</td>
                                    <td>{{ $data->surveyNo}}</td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#editlandholding{{ $data->id }}">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="" data-toggle="modal" data-target="#deletelandholding{{ $data->id }}">
                                            <button class="btn btn-danger btn-sm" >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('landholding_download', $data->id )}}">
                                            <button class="btn btn-secondary btn-sm">
                                                <i class="fas fa-download"></i>
                                            </button>
                                        </a>
                                    </td>
                                    @include('landholding.edit')
                                    @include('landholding.delete')
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
@include('landholding.create')
@endsection