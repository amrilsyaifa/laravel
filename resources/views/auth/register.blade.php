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
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <h1>Login Form</h1>
          <div>
            <input id="name" placeholder="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div>
            <input id="username" placeholder="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
            @if ($errors->has('username'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif
          </div>
          <div>
            <input id="email" placeholder="email adress" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
            <input id="password-confirm" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
            </button>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
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