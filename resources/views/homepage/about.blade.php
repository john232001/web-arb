@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="card-group">
            <div class="card">
              <img class="card-img-top img-fluid" src="{{ asset('dist/img/bg.jpg')}}" alt="Card image cap">
            </div>
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="card-title">About Us</h5>
                </div>
              <div class="card-body">
                <p class="card-text">The Department of Agrarian Reform (DAR) Land Acquisition and Distribution (LAD) program is the core component of the Comprehensive Agrarian Reform Program (CARP). It involves the redistribution of government and private agricultural lands to landless farmers and farm workers.</p>
              </div>
            </div>
          </div>
    </div>
@endsection