<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="{{ url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}" rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Admin</title>
</head>
<body>
    <nav class="navbar navbar-dark  bg-dark justify-content-between">
        <div class="navbar-brand d-flex justify-content-center align-items-center  ">
            <img src="images/admin.jpg" alt="" class="navadmin">
            <b class="m-2 text-de font-weight-bold h2 ">Admin</b>
        </div>
    </nav>
    <div class="w-100 d-flex " style="height: 615px">
        <div class="bg-dark h-100 d-flex flex-column justify-content-between " style="width: 200px">
            <ul class="nav flex-column ">
                <li class="nav-item" id="item1">
                    <a class="nav-link text-light ">User</a>
                </li>
                <li class="nav-item" id="item2">
                    <a class="nav-link text-light  ">Feed Back User</a>
                </li>
                <li class="nav-item" id="item3">
                    <a class="nav-link text-light ">Category</a>
                </li>
                <li class="nav-item" id="item4">
                    <a class="nav-link text-light ">Product</a>
                </li>
            </ul>
            <ul class="nav flex-column ">
                <li class="nav-item d-flex m-1 align-items-center  " id="item1">
                    <i class='bx bx-log-out '></i>
                    <a class="nav-link text-light " href="{{ url('/loginview') }}">Logout</a>
                </li>
                <li class="nav-item d-flex m-1 align-items-center  " id="item1">
                    <i class='bx bx-exit'></i>
                    <a class="nav-link text-light ">Exit</a>
                </li>
                
            </ul>
        </div>
        {{-- itemshow --}}
        <div class="w-100 h-100 bg-light " id="homeview">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center ">
                <h1>Plese chose One in Menu</h1>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var item = ['#item1', '#item2', '#item3', '#item4'];

            $(item[0]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[0]).addClass('bg-danger');
                    $(item[i]).removeClass('bg-danger');
                    $('#homeview').load("{{ url('admin/user') }}");
                    
                }
            });
            $(item[1]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[1]).addClass('bg-danger');
                    $(item[i]).removeClass('bg-danger');
                    $('#homeview').load("{{ url('admin/feedback') }}");
                }
            });
            $(item[2]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[2]).addClass('bg-danger');
                    $(item[i]).removeClass('bg-danger');
                    $('#homeview').load("{{ url('admin/category') }}");
                }
            });
            $(item[3]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[i]).removeClass('bg-danger');
                    $(item[3]).addClass('bg-danger');
                    $('#homeview').load("{{ url('admin/product') }}");
                }
            });

        })
    </script>
</body>

</html>
