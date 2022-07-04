<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreamchat - Dashboard</title>



    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper">

        @include('Backend.Admin.AdminNavbar')
        @include('Backend.Admin.AdminSidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">
            
      
            @yield('admin-content')
            </div>
        </div>

    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/tour.js')}}"></script>
<script>
window.onload = () => {

            fetch("/api/tour/category").then(res => {
                console.log(res);
                res.json().then(payload => {
                    console.log(payload, 'this is payload')
                })
            })
        }
</script>
</body>

</html>