@extends('layouts.logres')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-login-baru">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xl-8 text-center image-section">
                        <img src="{{ asset('images/flat-login.png') }}" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-xl-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="head"><b>Log in</b></h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <div class="col-xl-12 login">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                        <label class="label" for="email">Email</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-xl-12 login">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                        <label for="password">Password</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-xl-12 ">
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
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){

        $(".form-group .form-control").blur(function(){
            if($(this).val()!=""){
                $(this).siblings(".label").addClass("inputed");
            }else{
                $(this).siblings(".label").removeClass("inputed");
            }
        });

    });
</script>
@endsection
