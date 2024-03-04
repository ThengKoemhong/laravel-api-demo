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
        <form action="" class="w-50 bg-danger d-flex justify-content-center  align-items-center flex-column h-50" id="login_form" method="POST" >
            @csrf
            <h2 class="text-center text-white ">Add new categoy</h2>
            <label for="" class="m-1 ">Name Category </label>
            <input type="text" class="form-control w-75" name="category" id="" placeholder="Enter name category">
            <input type="submit" name="add" class="btn btn-dark  form-control  w-25 m-2" value="Add" id="">
        </form>
    </div>
</body>
</html>