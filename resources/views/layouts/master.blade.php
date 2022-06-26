<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- TITLE OF SITE -->
    <title>Travel</title>


    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />


    <!--datepicker.css-->
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">



    <!-- range css-->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}" />

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />


</head>

<body>


@include('partials.header')
@yield('content')
@include('partials.footer')














    <br>
    <br>
    <br><br><br>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>





    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset('js/jquery.filterizr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>

    <!--owl.carousel.js-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>

    <!--datepicker.js-->
    <script src="{{ asset('js/datepicker.js') }}"></script>

    <!--Custom JS-->
    <script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
