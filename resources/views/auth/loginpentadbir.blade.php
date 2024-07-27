@extends('layouts.master-mini')

@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">

                        @if (session('error'))
                            <div class="alert alert-fill-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @elseif (session('status'))
                            <div class="alert alert-fill-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="brand-logo text-center">
                            <img src="../../../assets/images/esea.png">
                        </div>
                        <h4>LOGIN PENTADBIR!</h4>
                        <h6 class="font-weight-light">Log masuk untuk meneruskan sesi.</h6>
                        <form class="pt-3" action="{{ route('dologin') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="ID Pentadbir">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Kata Laluan">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="width: 100%"> LOG MASUK </a>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                </div>
                                <a href="#" class="auth-link text-black">Lupa kata laluan? </a>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Anda pengguna baru? Sila <a href="{{ route('register') }}" class="text-primary">daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- content-wrapper ends -->
    </div>
@endsection
