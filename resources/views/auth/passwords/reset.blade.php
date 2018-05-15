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
          <form method="POST" action="{{ route('password.request') }}">
              @csrf

            <h1>Reset Password</h1>
            <input type="hidden" name="token" value="{{ $token }}">
            <div>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

              @if ($errors->has('email'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>



            <div>
              <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

              @if ($errors->has('password_confirmation'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
            </div>
            <div>
              <button type="submit" class="btn btn-primary">
                  {{ __('Reset Password') }}
              </button>
            </div>

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
