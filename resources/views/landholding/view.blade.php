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
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                        <div class="card-header bg-success">
                            <h3>Basic Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                @foreach ($landholdings as $data)
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <span>Landholding ID: {{ $data->lhid }}</span><br>
                                        <span>Landowner: {{ $data->firstname }}, {{ $data->middlename }}, {{ $data->familyname }}</span><br>
                                        <span>OCT/TCT Number: {{ $data->octNo }}</span><br>
                                        <span>Survey Number: {{ $data->surveyNo }}</span><br>
                                        <span>Lot Number: {{ $data->lotNo }}</span><br>
                                        <span>Title/Survey Area: {{ $data->surveyArea }}</span><br>
                                        <span>Tax Declaration Number: {{ $data->taxNo }}</span><br>
                                        <span>CF/DF Number: {{ $data->dfNo }}</span><br>
                                        <span>Mode of Acquisition: {{ $data->modeOfAcquisition }}</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <span>Coverable Area: {{ $data->coverableArea }}</span><br>
                                        <span>Carpable Area: {{ $data->carpableArea }}</span><br>
                                        <span>Non-Carpable Area: {{ $data->noncarpableArea }}</span><br>
                                        <span>Retained Area: {{ $data->retainedArea }}</span><br>
                                        <span>Distributed Area: {{ $data->distributeArea }}</span><br>
                                        <span>Land Size: {{ $data->landsize }}</span><br>
                                        <span>Phase: {{ $data->phase }}</span><br>
                                        <span>UPALS: {{ $data->upals }}</span><br>
                                        <span>Major Crops Area: {{ $data->majorCrops }}</span><br>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <span>Coverable Area: {{ $data->yearAdded }}</span><br>
                                        <span>Carpable Area: {{ $data->pipeline }}</span><br>
                                        <span>Non-Carpable Area: {{ $data->targetyear }}</span><br>
                                        <span>Retained Area: {{ $data->projectedDelivery }}</span><br>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h3>Manage ARBs</h3>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addmodalarb">Add ARB</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Initial</th>
                                        <th>Extension</th>
                                        <th>Spouse Name</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Date of Oathtaking</th>
                                        <th>Action</th>
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
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                        <div class="card-header">
                            <h3>Manage Lots</h3>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addmodallot">Add Lot</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="managelots" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Lot Number</th>
                                        <th>Lot Type</th>
                                        <th>Lot Area</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lots as $data)
                                    <tr>
                                        <td>{{ $data->lotNo}}</td>
                                        <td>{{ $data->lotType}}</td>
                                        <td>{{ $data->lotArea}}</td>
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
                        <div class="card-header">
                            <h3>Manage ASP</h3>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addmodalasp">Add Lot</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="manageasp" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ASP Number</th>
                                        <th>ASP Date Approved</th>
                                        <th>ASP Area</th>
                                        <th>Action</th>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h3>Manage Valuation</h3>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addmodalvaluation">Add Valuation</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="managevaluations" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>AOC Number</th>
                                        <th>LBP Claim Number</th>
                                        <th>Date Transmitted to LBP/AOC</th>
                                        <th>Date of MOV</th>
                                        <th>Date NVLA Served to LO</th>
                                        <th>Transmittal Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valuation as $data)
                                        <tr>
                                            <td>{{ $data->aocNo }}</td>
                                            <td>{{ $data->claimNo }}</td>
                                            <td>{{ $data->dateTransmitted }}</td>
                                            <td>{{ $data->dateofMov }}</td>
                                            <td>{{ $data->dateServed }}</td>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h3>Manage Manage EP/CLOA</h3>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addmodalawardtitle">Add Valuation</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="manageawardtitles" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Lot Number</th>
                                        <th>FB/Collective Name</th>
                                        <th>CLOA Serial #</th>
                                        <th>Award Type</th>
                                        <th>Generation Date</th>
                                        <th>CLOA EPEB #</th>
                                        <th>CLOA EPEB Date</th>
                                        <th>Registered Date</th>
                                        <th>Award Title #</th>
                                        <th>Distribution Date</th>
                                        <th>Action</th>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h3>Manage Sub-Activities</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="subactivities" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Form No.</th>
                                        <th>Form Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($landholdings as $data)
                                    <tr>
                                        <td>1</td>
                                        <td>Conduct of Preliminary Ocular Inspection</td>
                                        <td>
                                          <a href="{{ route('form1', $data->id ) }}">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                              Select Form
                                            </button>
                                          </a>
                                        </td>
                                      <tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Certificate of Preliminary Projection</td>
                                            <td>
                                              <a href="{{ route('form2', $data->id ) }}">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                  Select Form
                                                </button>
                                              </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Notice of Coverage</td>
                                            <td>
                                                <a href="{{ route('form3', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>18</td>
                                            <td>LO Letter Offer</td>
                                            <td>
                                                <a href="{{ route('form18', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Acceptance Letter for VOS</td>
                                            <td>
                                                <a href="{{ route('form20', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>42</td>
                                            <td>Certification on LOs Failure to submit BIR-Filed Audited Financial Statement</td>
                                            <td>
                                                <a href="{{ route('form42', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>46</td>
                                            <td>Revised 2022 Field Investigation Report</td>
                                            <td>
                                                <a href="{{ route('form46', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>49</td>
                                            <td>Revised 2022 Request to Value Land and Pay Landowner</td>
                                            <td>
                                                <a href="{{ route('form49', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>37</td>
                                            <td>APFU</td>
                                            <td>
                                                <a href="{{ route('form37', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>47</td>
                                            <td>Land Distribution and Information Schedule</td>
                                            <td>
                                                <a href="{{ route('form47', $data->id ) }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Select Form
                                                    </button>
                                                </a>
                                            </td>
                                        <tr>
                                        <tr>
                                            <td>54</td>
                                            <td>Order to Deposit Landowner Compensation</td>
                                                <td>
                                                    <a href="{{ route('form54', $data->id ) }}">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            Select Form
                                                        </button>
                                                    </a>
                                                </td>
                                            <tr>
                                            <tr>
                                                <td>51</td>
                                                <td>Notice of LVA</td>
                                                <td>
                                                    <a href="{{ route('form51', $data->id ) }}">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            Select Form
                                                        </button>
                                                    </a>
                                                </td>
                                            <tr>
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