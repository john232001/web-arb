@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('dist/img/services1.jpg')}}" height="250px;" alt="Services1">
                    <div class="card-header bg-success">
                        <h5 class="card-title font-bold text-center w-100">Land Acquisition</h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">The DAR assists farmers and farm workers with the land acquisition process. This includes providing support with negotiations with landowners, preparing and submitting land acquisition proposals, and processing land acquisition payments.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('dist/img/services2.jpg')}}" height="250px;" alt="Services2">
                    <div class="card-header bg-success">
                        <h5 class="card-title font-bold text-center w-100">Land Identification and Prioritization</h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">The DAR helps farmers and farm workers to identify and prioritize lands for acquisition. This includes providing information on the different types of land that can be acquired, the criteria that are used to prioritize lands for acquisition, and the process for submitting land acquisition requests.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('dist/img/services3.jpg')}}" height="250px;" alt="Services3">
                    <div class="card-header bg-success">
                        <h5 class="card-title font-bold text-center w-100">Land Distribution</h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">The DAR distributes land to farmers and farm workers in the form of Certificate of Land Ownership Awards (CLOAs). The DAR also provides support with the registration of CLOAs, and with the subdivision of land into individual lots.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection