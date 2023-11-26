@extends('layouts.app')

@section('content')
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-9">
                <h1>FORM NO. 20 - ACCEPTANCE LETTER FOR VOS</h1>
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        @foreach ($landholdings as $data)
                            <a href="{{ route('landholding_view', $data->id )}}" class="btn btn-primary">
                                Go back
                            </a>
                        @endforeach
                    </li>
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
                <div class="card-body">
                    <table id="dar_tables7" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>MIDDLE NAME</th>
                        <th>MUNICIPALITY</th>
                        <th>BARANGAY</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($landholdings as $data)
                            <tr>
                                <td>{{ $data->firstname}}</td>
                                <td>{{ $data->familyname}}</td>
                                <td>{{ $data->middlename}}</td>
                                <td>{{ $data->municipality}}</td>
                                <td>{{ $data->barangay}}</td>
                                <td>
                                    <a href="{{ route('form20_generate', $data->id )}}">
                                        <button class="btn btn-success btn-sm">
                                            <i class="icon-export"></i>GENERATE FORM
                                        </button>
                                    </a>
                                </td>
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
@endsection