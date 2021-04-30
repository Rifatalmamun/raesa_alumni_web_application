@extends('admin.log_master')
@section('content')
    
<div class="login-box">
    <form class="login-form" method="POST" action="{{ route('admin.login') }}">
        @csrf
      <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Alumni Admin</h3>
      <div class="form-group">
        <label class="control-label">EMAIL</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label class="control-label">PASSWORD</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      <div class="form-group btn-container">
        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Log in</button>
      </div>
    </form>

  </div>


@endsection