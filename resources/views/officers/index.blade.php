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
                    <h1>MANAGE OFFICERS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">DASHBOARD</a></li>
                    <li class="breadcrumb-item active">OFFICERS</li>
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
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addofficer">ADD OFFICER</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dar_tables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>OFFICER NAME</th>
                            <th>POSITION</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($officers as $data)
                            <tr>
                                <td>{{ $data->officer_name }}</td>
                                <td>{{ $data->position_type }}</td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#editofficer{{ $data->id }}">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#deleteofficer{{ $data->id }}">
                                        <button class="btn btn-danger btn-sm" >
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                                @include('officers.edit')
                                @include('officers.delete')
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
    @include('officers.create');
@endsection