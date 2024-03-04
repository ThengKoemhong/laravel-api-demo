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
    <title>Home Page</title>
</head>
<body class="w-100 justify-content-center  d-flex  flex-column  align-items-center ">
    <div class=" d-flex justify-content-between w-100 flex-column ">
        <ul class="nav d-flex bg-dark w-100 ">
            <li class="nav-item" id="item1">
                <a class="nav-link text-light ">Computer</a>
            </li>

            <li class="nav-item" id="item2">
                <a class="nav-link text-light  ">Phone</a>
            </li>

            <li class="nav-item" id="item3">
                <a class="nav-link text-light ">Airpot</a>
            </li>
            <li class="nav-item" id="item4">
                <a class="nav-link text-light ">Game Console</a>
            </li>
        </ul>
        <h1 class="text-danger ">
            Product
        </h1>
        <div id="homeview" class="justify-content-evenly flex-wrap d-flex " >
            <div class="card" style="width: 18rem;">
                <img src="images/gameconsole.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-subtitle ">Disciption</p>
                    <p class="card-subtitle text-danger ">Price</p>
                    <div class="d-flex ">
                        <input type="text" placeholder="Comment" class="form-control ">
                        <input type="submit" class="btn btn-primary " value="comment">
                    </div>
                    <br>
                  <button class="d-flex btn btn-light form-control justify-content-center  " type="submit">
                    <i class='bx bx-cart-download text-dark ' style="font-size: 25px;padding-right: 10px"></i>
                    <b>
                        Add to card
                    </b>
                  </button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/airpod.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-subtitle ">Disciption</p>
                    <p class="card-subtitle text-danger ">Price</p>
                    <div class="d-flex ">
                        <input type="text" placeholder="Comment" class="form-control ">
                        <input type="submit" class="btn btn-primary " value="comment">
                    </div>
                    <br>
                  <button class="d-flex btn btn-light form-control justify-content-center  " type="submit">
                    <i class='bx bx-cart-download text-dark ' style="font-size: 25px;padding-right: 10px"></i>
                    <b>
                        Add to card
                    </b>
                  </button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/iphone.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-subtitle ">Disciption</p>
                    <p class="card-subtitle text-danger ">Price</p>
                    <div class="d-flex ">
                        <input type="text" placeholder="Comment" class="form-control ">
                        <input type="submit" class="btn btn-primary " value="comment">
                    </div>
                    <br>
                  <button class="d-flex btn btn-light form-control justify-content-center  " type="submit">
                    <i class='bx bx-cart-download text-dark ' style="font-size: 25px;padding-right: 10px"></i>
                    <b>
                        Add to card
                    </b>
                  </button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/macbook4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-subtitle ">Disciption</p>
                    <p class="card-subtitle text-danger ">Price</p>
                    <div class="d-flex ">
                        <input type="text" placeholder="Comment" class="form-control ">
                        <input type="submit" class="btn btn-primary " value="comment">
                    </div>
                    <br>
                  <button class="d-flex btn btn-light form-control justify-content-center  " type="submit">
                    <i class='bx bx-cart-download text-dark ' style="font-size: 25px;padding-right: 10px"></i>
                    <b>
                        Add to card
                    </b>
                  </button>
                </div>
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
                    $('#homeview').load("{{ url('homepage/computer') }}");
                    
                }
            });
            $(item[1]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[1]).addClass('bg-danger');
                    $(item[i]).removeClass('bg-danger');
                    $('#homeview').load("{{ url('homepage/phone') }}");
                }
            });
            $(item[2]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[2]).addClass('bg-danger');
                    $(item[i]).removeClass('bg-danger');
                    $('#homeview').load("{{ url('homepage/airport') }}");
                }
            });
            $(item[3]).click(function() {
                for (var i = 0; i < item.length; i++) {
                    $(item[i]).removeClass('bg-danger');
                    $(item[3]).addClass('bg-danger');
                    $('#homeview').load("{{ url('homepage/gameconsole') }}");
                }
            });

        })
    </script>
</body>
</html>