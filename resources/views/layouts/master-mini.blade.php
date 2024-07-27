<!DOCTYPE html>
<html>
    <head>
        <title>NAMA SISTEM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="_token" content="{{ csrf_token() }}">

        @stack('plugin-styles')
        @stack('style')

        <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">

        <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">

    </head>
    <body data-base-url="{{url('/')}}">

        <div class="container-scroller" id="app">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('assets/js/jquery.js') }}"></script>

        <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/js/misc.js') }}"></script>
        <script src="{{ asset('assets/js/settings.js') }}"></script>
        <script src="{{ asset('assets/js/todolist.js') }}"></script>

        <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../../assets/js/off-canvas.js"></script>
        <script src="../../../assets/js/hoverable-collapse.js"></script>
        <script src="../../../assets/js/misc.js"></script>
        <script src="../../../assets/js/settings.js"></script>
        <script src="../../../assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../../../assets/js/data-table.js"></script>
        <!-- End custom js for this page -->


        @stack('scripts')
        @stack('plugin-scripts')
        @stack('custom-scripts')



    </body>
</html>
