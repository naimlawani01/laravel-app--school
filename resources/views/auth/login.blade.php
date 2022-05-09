@extends('layouts.app2')

@section('title')
    Connexion
@endsection

@section('page')
login-page
@endsection

@section('content')
<div class="login-box">
  <div class="login-logo">
    <div class="row">
        <div class="col-md-5">
          <img src="{{ asset('logo/Logoci.png') }}" class="float-left ml-2" alt="">
        </div>
        <div class="col-md-7">
            <div class="float-left">
              <b>Centre<br>
              Informatique</b>
            </div>
          
        </div>
    </div>
    {{-- <a href="../../index2.html"><b>Admin</b>LTE</a> --}}
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">connectez-vous pour démarrer votre session</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Mot de passe" name="password" required autocomplete="current-password">
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
         @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
              <label for="remember">
                Se souvenir de moi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Valider</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      <p class="mb-1">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a>
        @endif
      </p>
      <p class="mb-1">
          <a href="/">Revenir à la page d'accueil</a>
      </p>
      {{-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> --}}
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection