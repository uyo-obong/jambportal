<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Jamb Portal' }}</title>

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Vector CSS -->
    <link href="{{ URL::to('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ URL::to('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ URL::to('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ URL::to('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ URL::to('assets/css/app-style.css') }}" rel="stylesheet" />
    <!--Data Tables -->
    <link href="{{ URL::to('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::to('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">

    @section('header_css')
    @show
</head>

<body>
    <!-- Start wrapper-->
    <div id="wrapper">
        @include('inc.sidebar')
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
    </div>
    {{-- </div> --}}
    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>


    <!--Sweet Alerts -->
    <script src="{{ URL::to('assets/plugins/alerts-boxes/js/sweetalert.min.js') }}"></script>
    <script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>
    <!-- simplebar js -->
    <script src="{{ URL::to('assets/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- waves effect js -->
    <script src="{{ URL::to('assets/js/waves.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ URL::to('assets/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ URL::to('assets/js/app-script.js') }}"></script>

    <!-- Index js -->
    {{-- <script src="{{ URL::to('assets/js/index.js') }}"></script> --}}


    <!--Data Tables js-->
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();


      var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
    } );

      table.buttons().container()
      .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
  } );

    </script>
    @section('footer_js')
    @show
</body>

</html>