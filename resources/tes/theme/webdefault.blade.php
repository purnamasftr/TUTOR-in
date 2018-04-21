<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TUTOR-in</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('theme/dist/css/one-page-wonder.css') !!}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        @include('theme.webheader')
    </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

</body>


</html>
