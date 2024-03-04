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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-dark  bg-dark justify-content-between">
        <div class="navbar-brand d-flex justify-content-center align-items-center  ">
            <img src="images/admin.jpg" alt="" class="navadmin">
            <b class="m-2 text-de font-weight-bold h2 ">Admin</b>
        </div>
        <form class="form-inline d-flex m-2">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div class="w-100 d-flex" style="height: 700px">
        <div class="bg-dark h-100 " style="width: 200px">
            <ul class="nav flex-column">
                <li class="nav-item" id="item1">
                    <a class="nav-link ">User</a>
                </li>
                <li class="nav-item" id="item2">
                    <a class="nav-link ">Feed Back User</a>
                </li>
                <li class="nav-item" id="item3">
                    <a class="nav-link">Category</a>
                </li>
                <li class="nav-item" id="item4">
                    <a class="nav-link">Product</a>
                </li>
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
