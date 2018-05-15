@extends('layouts.app')
@section('login')
  @section('judulbody')
    login
  @endsection
<div>
  <a class="hiddenanchor" id="signin"></a>
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>Login Form</h1>
          <div>
            <input id="email" placeholder="email or username" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div>
            <input id="password" placeholder="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div>
            <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
            </button>
          </div>
          <div class="col-md-10">
            <a class="reset_pass" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
            </label>
            <div class="clearfix"></div>
            <br />
            <div>
              <h1><i class="fa fa-paw"></i> Sisaper</h1>
              <p>©2018 All Rights Reserved. Sisaper Team!</p>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>
@endsection