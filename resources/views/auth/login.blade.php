@extends('layouts.home')

@section('content')
<div class="container">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-success">
      <div class="card-header text-center">
          <img src="{{ asset('dist/img/logo.png')}}" style="width: 150px;" alt="DAR-Logo">
      </div>
      <div class="card-body">
        @if(Session::has('error'))
          <div class="alert custom alert-danger">
            <i class="icon-warning2"></i>{{ Session::get('error') }}
          </div>
        @endif
        <form action="{{ route('post_login') }}" method="post">
          @csrf
          <div class="input-group mt-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @if($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          <div class="input-group mt-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @if($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
          <div class="row mt-3">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-success btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-0 mt-2 ">
          <p class="text-success text-center">Dont have an account? <a href="{{ route('register') }}">Signup</a></p>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
</div>
@endsection

