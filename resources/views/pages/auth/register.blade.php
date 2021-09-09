@extends('pages.layout. base')


@section('content')
<div class="card card-primary">
  <div class="card-header"><h4>Register</h4></div>

  <div class="card-body">
    <form method="POST" action="#">
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
      </div>   
      <div class="form-group">
        <div class="d-block">
          <label for="password" class="control-label">Password</label>
        </div>
        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
      </div>
      <div class="form-group">
        <div class="d-block">
          <label for="password" class="control-label">Confirm Password</label>
        </div>
        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
      </div>    
      <div class="form-group">
      <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
          <label class="custom-control-label" for="remember-me">Remember Me</label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Register
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
  Already have an account? <a href="{{ route('login') }}">Sign In</a>
</div>
@endsection