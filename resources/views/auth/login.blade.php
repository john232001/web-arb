@extends('layouts.home')

@section('content')
<div class="bg-cover min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-md-6 m-auto">
        <div class="card">
          <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle">
              <img src="dist/img/dar-logo.png" alt="" style="width: 100px;">
            </div>
          </div>
          <div class="card-body mt-5 mb-3">
            <h2 class="text-center mb-3">LOGIN</h2>
            
            @if(Session::has('error'))
              <div class="alert custom alert-danger">
                <i class="icon-warning2"></i>{{ Session::get('error') }}
              </div>
            @endif
            <form action="{{ route('post_login') }}" method="post">
              @csrf
              <div class="input-field mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username">
                @if($errors->has('username'))
                  <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
              </div>
              <div class="input-field mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                @if($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </div>
              <div class="text-center mt-3">
                <button type="submit" class="btn btn-success w-100">LOGIN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection

