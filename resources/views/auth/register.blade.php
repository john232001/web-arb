@extends('layouts.home')

@section('content')
<div class="container">
    <div class="register-box">
      <div class="card card-outline card-success">
        <div class="card-header text-center">
          <img src="{{ asset('dist/img/logo.png')}}" style="width: 150px;" alt="DAR-Logo">
        </div>
        <div class="card-body">
          <form action="{{ route('post_register')}}" method="post">
            @csrf
            <div class="input-group mt-3">
              <input type="text" class="form-control" name="name" placeholder="Name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            @if($errors->has('name'))
              <div class="text-danger">{{ $errors->first('name') }}</div>
            @endif
            <div class="input-group mt-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            @if($errors->has('email'))
              <div class="text-danger">{{ $errors->first('email') }}</div>
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
              <div class="text-danger">{{ $errors->first('password') }}</div>
            @endif
            <div class="input-group mt-3">
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            @if($errors->has('confirm_password'))
              <div class="text-danger">{{ $errors->first('confirm_password') }}</div>
            @endif
            <div class="row mt-3">
              <div class="col-12">
                <button type="submit" class="btn btn-success btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
            <p class="mb-0 mt-2">
              <p class="text-success text-center">Already have an account? <a href="{{ route('login') }}" class="text-center">Login</a></p>
            </p>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</div>
@endsection
