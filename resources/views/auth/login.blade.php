@extends('inspinia::layouts.auth')

@section('content')
<style>
.loginscreen.middle-box {
    width: 320px;
}
</style>
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
      <h2><strong>TooNesia</strong></h2>
      <p>Login in. To see it in action.</p>

      <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
       <div class="col-md-12">
           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
           </div>
           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
           </div>
       </div>
       <div class="col-md-12">
           <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
       </div>

       <div class="col-md-6">
           <button type="submit" class="btn btn-success block full-width m-b">Facebook</button>
       </div>

       <div class="col-md-6">
           <button type="submit" class="btn btn-danger block full-width m-b">Google + </button>
       </div>

       <div class="col-md-12">
           <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
           <p class="text-muted text-center"><small>Do not have an account?</small></p>
           <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
       </div>
      </form>
      <p class="m-t"> <small>TooNesia &copy; {{ date('Y') }}</small> </p>
    </div>
</div>
@endsection
