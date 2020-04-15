@extends('layouts.logres')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12">
            <h1 class="head"><b>Login</b></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-l">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email anda" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password anda">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-l btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <div class="col-sm-12 text-center">
                                    <a class="btn btn-link " href="{{ route('register') }}">
                                       Dont have any account?<b>signup</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
