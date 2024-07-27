<!DOCTYPE html>
<html>
<head>
    <title>NAMA SISTEM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />

    @stack('plugin-styles')
    @stack('style')
</head>

<body data-base-url="{{url('/')}}">

    <div class="container-scroller" id="app">
        @include('layouts.header')
        <div class="container-fluid page-body-wrapper">

            @if(Auth::check())
            @include('layouts.sidebar')
            @endif

            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session('error'))
                    <div class="alert alert-fill-danger" role="alert">
                        <i class="icon-info"></i>{{ session('error') }}
                    </div>
                    @elseif (session('status'))
                    <div class="alert alert-fill-success" role="alert">
                        <i class="icon-info"></i>{{ session('status') }}
                    </div>
                    @elseif($errors->any())
                    <div class="alert alert-fill-danger" role="alert">
                        <span>{!! implode('<br/>', $errors->all(':message')) !!}</span>
                    </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>

    @stack('scripts')
    @stack('plugin-scripts')
    @stack('custom-scripts')
</body>
</html>
