@extends('admin_master')

@section('main_content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('login') }}">Welcome to Sonamandi.com</a>
  </div><!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up to get started</p>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password" />
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div> --><!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div><!-- /.col -->
      </div>
    </form>

    <!-- <a href="#">I forgot my password</a> -->
    <br>
    <a href="{{ url('login') }}" class="text-center">Already a member, Login</a>

  </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@endsection
