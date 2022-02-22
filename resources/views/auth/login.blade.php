@extends('layouts.app')
@section('content')
<!-- Sign In Start -->
<div class="container-fluid" >
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;z-index:100;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="" class="">
                        <h3 class="text-primary text-danger">Viettel</h3>
                    </a>
                    <h3>Đăng nhập</h3>
                </div>
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                    <div class="form-floating mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản  </label>
                        </div>
                        <a href="">Quên mật khẩu </a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Đăng nhập </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In End -->
@endsection
