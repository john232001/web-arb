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
                    <h1>MANAGE LANDHOLDING</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('landholding')}}" class="btn btn-primary">
                                Go back
                            </a>
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
                        <div class="card-header bg-success">
                            <h3>BASIC INFORMATION</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                @foreach ($landholdings as $data)
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <strong>LANDHOLDING ID:</strong><span class="text-success"> {{ $data->lhid }}</span><br>
                                        <strong>LANDOWNER:</strong><span class="text-success"> {{ $data->firstname }} {{ $data->middlename }} {{ $data->familyname }}</span><br>
                                        <strong>OCT/TCT NUMBER:</strong><span class="text-success"> {{ $data->octNo }}</span><br>
                                        <strong>SURVEY NUMBER:</strong><span class="text-success"> {{ $data->surveyNo }}</span><br>
                                        <strong>LOT NUMBER:</strong><span class="text-success"> {{ $data->lotNo }}</span><br>
                                        <strong>TITLE/SURVEY AREA:</strong><span class="text-success"> {{ $data->surveyArea }}</span><br>
                                        <strong>TAX DECLARATION NUMBER: </strong><span class="text-success"> {{ $data->taxNo }}</span><br>
                                        <strong>MODE OF ACQUISITION:</strong><span class="text-success"> {{ $data->modeOfAcquisition }}</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <strong>COVERABLE AREA:</strong><span class="text-success"> {{ $data->coverableArea }}</span><br>
                                        <strong>CARPABLE AREA:</strong><span class="text-success"> {{ $data->carpableArea }}</span><br>
                                        <strong>NON-CARPABLE AREA:</strong><span class="text-success"> {{ $data->noncarpableArea }}</span><br>
                                        <strong>RETAINED AREA:</strong><span class="text-success"> {{ $data->retainedArea }}</span><br>
                                        <strong>DISTRIBUTED AREA:</strong><span class="text-success"> {{ $data->distributeArea }}</span><br>
                                        <strong>LAND SIZE:</strong><span class="text-success"> {{ $data->landsize }}</span><br>
                                        <strong>PHASE:</strong><span class="text-success"> {{ $data->phase }}</span><br>
                                        <strong>UPALS:</strong><span class="text-success"> {{ $data->upals }}</span><br>
                                        <strong>MAJOR CROPS AREA:</strong><span class="text-success"> {{ $data->majorCrops }}</span><br>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <strong>YEAR ADDED:</strong><span class="text-success"> {{ $data->yearAdded }}</span><br>
                                        <strong>PIPE LINE:</strong><span class="text-success"> {{ $data->pipeline }}</span><br>
                                        <strong>TARGET YEAR:</strong><span class="text-success"> {{ $data->targetyear }}</span><br>
                                        <strong>PROJECTED DELIVERY:</strong><span class="text-success"> {{ $data->projectedDelivery }}</span><br>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header bg-success">
                            <h3>MANAGE ARBS</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addmodalarb">ADD ARB</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dar_tables" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>MIDDLE INITIAL</th>
                                        <th>EXTENSION</th>
                                        <th>SPOUSE NAME</th>
                                        <th>DATE OF BIRTH</th>
                                        <th>GENDER</th>
                                        <th>ADDRESS</th>
                                        <th>OWNERSHIP PREFERENCE</th>
                                        <th>DATE OF OATHTAKING</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arb as $data)
                                        <tr>
                                            <td>{{ $data->fname }}</td>
                                            <td>{{ $data->lname }}</td>
                                            <td>{{ $data->mname }}</td>
                                            <td>{{ $data->extension }}</td>
                                            <td>{{ $data->spousename }}</td>
                                            <td>{{ $data->datebirth }}</td>
                                            <td>{{ $data->gender }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->ownership}}</td>
                                            <td>{{ $data->dateOfOath }}</td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#editmodalarb{{ $data->id }}">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="" data-toggle="modal" data-target="#deletemodalarb{{ $data->id }}">
                                                    <button class="btn btn-danger btn-sm" >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('arb.edit')
                                        @include('arb.delete')
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
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="card">
                        <div class="card-header bg-success">
                            <h3>MANAGE LOTS</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addmodallot">ADD LOT</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dar_tables2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ARB NAME</th>
                                        <th>LOT NUMBER</th>
                                        <th>LOT TYPE</th>
                                        <th>LOT AREA</th>
                                        <th>CROP</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lots as $data)
                                    <tr>
                                        <td>{{ $data->fname }}</td>
                                        <td>{{ $data->lotNo}}</td>
                                        <td>{{ $data->lotType}}</td>
                                        <td>{{ $data->lotArea}}</td>
                                        <td>{{ $data->crop}}</td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#editmodallot{{ $data->id }}">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="" data-toggle="modal" data-target="#deletemodallot{{ $data->id }}">
                                                <button class="btn btn-danger btn-sm" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('lot.edit')
                                    @include('lot.delete')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <div class="card">
                        <div class="card-header bg-success">
                            <h3>NEW APPROVED SURVEY PLAN</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addmodalasp">ADD SURVEY PLAN</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dar_tables3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ASP NUMBER</th>
                                        <th>ASP DATE APPROVED</th>
                                        <th>ASP AREA</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asp as $data)
                                    <tr>
                                        <td>{{ $data->aspNo}}</td>
                                        <td>{{ $data->aspDate}}</td>
                                        <td>{{ $data->aspArea}}</td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#editmodalasp{{ $data->id }}">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="" data-toggle="modal" data-target="#deletemodalasp{{ $data->id }}">
                                                <button class="btn btn-danger btn-sm" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('asp.edit')
                                    @include('asp.delete')
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
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header bg-success">
                            <h3>MANAGE VALUATION</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addmodalvaluation">ADD VALUATION</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dar_tables4" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>LOT NUMBER</th>
                                        <th>AOC NUMBER</th>
                                        <th>LBP CLAIM NUMBER</th>
                                        <th>AMOUNT</th>
                                        <th>DATE TRANSMITTED TO LBP/AOC</th>
                                        <th>DATE OF MOV</th>
                                        <th>DATE NVLA SERVED TO LO</th>
                                        <th>DATE OF FI</th>
                                        <th>DATE of CF RECEIPT</th>
                                        <th>TRANSMITTAL STATUS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valuation as $data)
                                        <tr>
                                            <td>{{ $data->lotNo }}</td>
                                            <td>{{ $data->aocNo }}</td>
                                            <td>{{ $data->claimNo }}</td>
                                            <td>{{ $data->amount }}</td>
                                            <td>{{ $data->dateTransmitted }}</td>
                                            <td>{{ $data->dateofMov }}</td>
                                            <td>{{ $data->dateServed }}</td>
                                            <td>{{ $data->dateofFI }}</td>
                                            <td>{{ $data->dateofCF }}</td>
                                            <td>{{ $data->transmittalStatus }}</td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#editmodalvaluation{{ $data->id }}">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="" data-toggle="modal" data-target="#deletemodalvaluation{{ $data->id }}">
                                                    <button class="btn btn-danger btn-sm" >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('valuation.edit')
                                        @include('valuation.delete')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header bg-success">
                            <h3>MANAGE EP/CLOA</h3>
                            <button type="button" class="btn btn-primary  float-right" data-toggle="modal" data-target="#addmodalawardtitle">Add Award Title</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dar_tables5" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>LOT NUMBER</th>
                                        <th>FB/COLLECTIVE NAME</th>
                                        <th>CLOA SERIAL #</th>
                                        <th>AWARD TYPE</th>
                                        <th>GENERATION DATE</th>
                                        <th>CLOA EPEB #</th>
                                        <th>CLOA EPEB DATE</th>
                                        <th>REGISTERED DATE</th>
                                        <th>AWARD TITLE #</th>
                                        <th>DISTRIBUTION DATE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($awardtitle as $data)
                                        <tr>
                                            <td>{{ $data->lotNo }}</td>
                                            <td>{{ $data->fbOrcname }}</td>
                                            <td>{{ $data->serialNo }}</td>
                                            <td>{{ $data->awardType }}</td>
                                            <td>{{ $data->genDate }}</td>
                                            <td>{{ $data->epebNo }}</td>
                                            <td>{{ $data->epebDate }}</td>
                                            <td>{{ $data->registerDate }}</td>
                                            <td>{{ $data->awardtitleNo }}</td>
                                            <td>{{ $data->distributeDate }}</td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#editmodalawardtitle{{ $data->id }}">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="" data-toggle="modal" data-target="#deletemodalawardtitle{{ $data->id }}">
                                                    <button class="btn btn-danger btn-sm" >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('awardtitle.edit')
                                        @include('awardtitle.delete')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header bg-success">
                            <h3>MANAGE SUB-ACTIVITIES</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dar_tables6" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>FORM NO.</th>
                                        <th>FORM NAME</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($landholdings as $data)
                                        <tr>
                                            <td>1</td>
                                            <td>CONDUCT OF PRELIMINARY OCULAR INSPECTION</td>
                                            <td>
                                                <a href="{{ route('form1', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>CERTIFICATE OF PRELIMINARY PROJECTION</td>
                                            <td>
                                                <a href="{{ route('form2', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                    SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>NOTICE OF COVERAGE</td>
                                            <td>
                                                <a href="{{ route('form3', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                    SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>LO LETTER OFFER</td>
                                            <td>
                                                <a href="{{ route('form18', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                    SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>ACCEPTANCE LETTER FOR VOS</td>
                                            <td>
                                                <a href="{{ route('form20', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>37</td>
                                            <td>APFU</td>
                                            <td>
                                                <a href="{{ route('form37', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>42</td>
                                            <td>CERTIFICATION ON LOs FAILURE TO SUBMIT BIR-FILED AUDITED FINANCIAL STATEMENT</td>
                                            <td>
                                                <a href="{{ route('form42', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>46</td>
                                            <td>REVISED 2022 FIELD INVESTIGATION REPORT</td>
                                            <td>
                                                <a href="{{ route('form46', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>47</td>
                                            <td>LAND DISTRIBUTION AND INFORMATION SCHEDULE</td>
                                            <td>
                                                <a href="{{ route('form47', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>49</td>
                                            <td>REVISED 2022 REQUEST TO VALUE LAND AND PAY LANDOWNER</td>
                                            <td>
                                                <a href="{{ route('form49', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>51</td>
                                            <td>NOTICE OF LVA</td>
                                            <td>
                                                <a href="{{ route('form51', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>52B</td>
                                            <td>POSTING ON THE ISSUANCE OF NLVA</td>
                                            <td>
                                                <a href="{{ route('form52B', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>53</td>
                                            <td>LAND OWNERS'S REPLY TO NOTICE OF LAND VALUATION AND AQUISITION</td>
                                            <td>
                                                <a href="{{ route('form53', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>54</td>
                                            <td>ORDER TO DEPOSIT LANDOWNER COMPENSATION</td>
                                            <td>
                                                <a href="{{ route('form54', $data->id ) }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        SELECT FORM
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
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
@include('arb.create')
@include('lot.create')
@include('asp.create')
@include('valuation.create')
@include('awardtitle.create')
@endsection