<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body style="width: 100%;height: 700px;" class="d-flex justify-content-center align-items-center " >
    <img class="w-25 h-50 rounded-2 shadow-sm  bg-light" src="images/Secure login.png">
    <div class="w-50 h-50 rounded-2 shadow-sm  bg-danger justify-content-center flex-column d-flex align-items-center  ">
        <form action="/login_data" class="w-75" id="login_form" method="POST">
            @csrf
            <h2 class="text-center m-1 text-white ">Willcome Again </h2>
            <label for="" class="m-1 ">Email </label>
            <input type="text" class="form-control" name="email" id="" placeholder="Email@example.com">
            <label for="" class="m-1 ">Password </label>
            <input type="password" class="form-control" name="password" id="" placeholder="Password">
            <br>
            <input type="submit" name="login" class="btn btn-dark  form-control  " value="Login" id="">
            <input type="submit" style="margin-top: 10px" name="Signup" class="btn btn-dark form-control  "  value="Sign up" id="signup">
        </form>
    </div>
</body>
</html>