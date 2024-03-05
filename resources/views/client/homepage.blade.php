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
        <div id="homeview" class="d-block ">
            <div class="w-100 d-flex justify-content-around">
                <div class="w-50 d-block bg-light m-2" >
                    <div style="margin: 30px 30px;">
                        <h2 class="text-dark">The Best Platform <br> for Car Rental</h2>
                        <p class="text-dark">Ease of doing a car rental safely and reliably.<br> Of course at a low
                            price.</p>
                        <input type="submit" id="btn" class="btn btn-outline-dark  shadow"
                            style="width:100px ;" value="View it">
                    </div>
                    <img src="images/airpod.png" class="text-center" alt=""
                        style="margin-left: 250px; width: 100px; height: 100px;">
                </div>
                <div class="w-50 bg-dark d-block m-2">
                    <div style="margin: 30px 30px;">
                        <h2 class="text-light">Easy way to rent a <br> car at a low price</h2>
                        <p class="text-light">Providing cheap  rental services and<br> safe and comfortable
                            facilities.</p>
                        <input type="submit" id="btncare" class="btn btn-outline-light form-control"
                            style="width:100px ;" value="View it">
                    </div>
                    <img src="images/iphone.png" class="text-center" alt="" style="margin-left: 250px; width: 100px; height: 100px;">

                </div>
            </div>
            <br>
            <h3 class="text-light-emphasis " style="margin-left: 40px">New product</h3>
           <br>
            <div class="justify-content-evenly flex-wrap d-flex ">
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
    </div>
    <script>
        
    </script>
</body>

</html>
