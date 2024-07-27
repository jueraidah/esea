@extends('layouts.master-mini')

@section('content')
<style>
    .welcome-message {
        text-align: center;
        margin-top: 50px;
        font-family: Arial, sans-serif;
    }
    .welcome-message h4 {
        margin: 10px 0;
        color: #333;
    }
</style>


<style>
    .logmasuk-btn {
        background-color: #173f57;;
        /* Darker green background */
        background: linear-gradient(to right, #173f57;, #173f57;);
        /* Green gradient (optional) */
        border: none;
        color: #fff;
        border-radius: 10px;
        padding: 12px 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.5s ease-in-out;
    }

    .logmasuk-btn:hover {
        background-color: #173f57;;
        /* Slightly darker green on hover */
    }


    .card-footer {
    background-color: #ffffff; /* Change this to your desired background color */
    color: white; /* Ensure text is readable on the background color */
    text-align: center;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.card-footer .small {
    color: white; /* Ensure the text color matches your background for readability */
}
</style>



<style>
    .daftar-btn {
        border: 2px solid #173f57;;
        /* Slightly lighter green outline */
        background: linear-gradient(to right, #f0f9f0, #ffffff);
        /* Light green gradient */
        color: #173f57;;
        /* Green text */
        border-radius: 10px;
        padding: 12px 20px;
        font-weight: 500;
        /* Slightly bolder text */
        cursor: pointer;
        transition: all 0.2s ease-in-out;
    }

    .daftar-btn:hover {
        background-gradient: linear-gradient(to right, #ffffff, #ffffff);
        /* Darken gradient on hover */
        color: #173f57;
        /* Slightly darker green text on hover */
    }
</style>


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
                        <div class="welcome-message">
                            <h4>SELAMAT DATANG KE SISTEM PERMOHONAN</h4>
                            <h4>KEBENARAN MASUK KE SABAH</h4>
                        </div>
                        <br>
                        <br>
                    <p class="small" style="text-align: center;">
                        <span class="small text-white">&nbsp;</span>
                        <a class="btn daftar-btn btn-lg px-1 mb-1 mt-1" href="{{ route('register') }}"
                            title="Klik untuk Daftar" aria-label="Daftar">DAFTAR AKAUN</a>
                      </p>

                    <p class="small" style="text-align: center;">
                        {{-- <a class="text-white" href="{{ route('password.request') }}">Lupa kata laluan? Sila
                            klik sini</a>
                        <br> --}}
                        <span class="small text-white">&nbsp;</span>
                        <a class="btn daftar-btn btn-lg px-1 mb-1 mt-1" href="{{ route('loginpentadbir') }}"
                            title="Klik untuk Daftar" aria-label="Daftar">LOG MASUK PENTADBIR</a>
                    </p>

                    <p class="small" style="text-align: center;">
                        {{-- <a class="text-white" href="{{ route('password.request') }}">Lupa kata laluan? Sila
                            klik sini</a>
                        <br> --}}
                        <span class="small text-white">&nbsp;</span>
                        <a class="btn daftar-btn btn-lg px-1 mb-1 mt-1" href="{{ route('loginpengguna') }}"
                            title="Klik untuk Daftar" aria-label="Daftar">LOG MASUK PENGGUNA</a>
                    </p>


                    </div>

                    <div class="card-footer text-center py-2" style="background-color: #333; color: white;">
                        <p class="small text-white">Hak Cipta Terpelihara © 2024 Jabatan Perkhidmatan Komputer Negeri (JPKN) Sabah</p>
                        <img src="../../../assets/images/smj.png" alt="Sabah Maju Jaya" class="d-inline-block align-middle"
                             style="width: 50px; height: auto; margin-left: 10px;">
                        <img src="../../../assets/images/logojpkn.png" alt="Jabatan Perkhidmatan Komputer Negeri"
                             class="d-inline-block align-middle"
                             style="width: 80px; height: auto; margin-left: 10px;">
                    </div>


                </div>
            </div>
        </div>
    <!-- content-wrapper ends -->
    </div>
@endsection

