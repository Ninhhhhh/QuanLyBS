@extends('admin.layouts.Login');

@section('login')
@include('admin.message')
<div class="row align-items-center">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h2 class="m-t-20">Sign In</h2>                                  
                <p class="m-b-30">Enter your credential to get access</p>
                <form action="{{ route('admin.authenticate') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-semibold" for="userName">Username:</label>
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-user"></i>
                            <input type="text" 
                            value="{{ old('email') }}"
                            name="email" id="email" 
                            placeholder="Username"  
                            class="form-control @error('email') is-invalid @enderror">
                        </div>
                    </div>
                    @error('email')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <label class="font-weight-semibold" for="password">Password:</label>
                        <a class="float-right font-size-13 text-muted" href="#">Forget Password?</a>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-lock"></i>
                            <input type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Password"
                            class="form-control 
                            @error('password')
                            is-invalid
                            @enderror" 
                            >
                        </div>
                    </div>
                    @error('password')
                    <p>
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="form-group">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="font-size-13 text-muted">
                                Don't have an account? 
                                <a class="small" href="{{ route('admin.addAccount') }}"> Signup</a>
                            </span>
                            <button class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="offset-md-1 col-md-6 d-none d-md-block">
        <img class="img-fluid" src="{{ asset('admin-assets/assets/images/others/login-2.png') }}" alt="">
    </div>
</div>
@endsection