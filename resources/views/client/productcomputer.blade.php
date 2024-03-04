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
    <link href="{{ url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}" rel='stylesh' type="text/css">
    <title>Computer</title>
</head>

<body>
    <h1>
        Product
    </h1>
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
          <button class="d-flex btn btn-light form-control justify-content-center  " type="submit">
            <i class='bx bx-cart-download text-dark ' style="font-size: 25px;padding-right: 10px"></i>
            <b>
                Add to card
            </b>
          </button>
        </div>
    </div>
</body>

</html>
