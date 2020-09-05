@extends('layouts.logres')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-register-baru">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-6 order-md-12 order-xl-1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="headr"><b>Register</b></h1>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-12 login">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                    <label >Email</label>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
             
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-12 login">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  required autocomplete="name">
                                                    <label >Nama Lengkap</label>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-12 login">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  autocomplete="new-password">
                                                    <label >Password</label>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-12 login">
                                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required  autocomplete="address">
                                                    <label >Alamat</label>
                                                    @error('alamat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-12 login">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <label >Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-12 login">
                                                    <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" required autocomplete="telp">
                                                    <label >telp</label>
                                                    @error('telp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btnr btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12 text-center">
                                                <a class="btn btn-link" href="{{ route('login') }}">
                                                   Already have an account?<b>login</b>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                        <div class="col-sm-12 col-md-12 col-xl-6 order-md-first order-xl-12 text-center image-section">
                            <img src="{{ asset('images/flat-login.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
