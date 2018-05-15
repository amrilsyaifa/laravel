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
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <form method="POST" action="{{ route('password.email') }}">
              @csrf

            <h3>Reset Password</h3>
            <div>
              <input id="email" placeholder="E-Mail Address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

            <div class="clearfix"></div>

            <div class="separator">

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
