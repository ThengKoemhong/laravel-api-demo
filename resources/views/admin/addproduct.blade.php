<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body style="width: 100%;height: 700px;" class="d-flex justify-content-center align-items-center ">
    <form action="" class="w-50 bg-danger h-75 d-flex align-items-center justify-content-center " id="login_form"
        method="POST">
        <table>
            @csrf
            <tr>
                <td>
                    <h2 class="text-center text-white ">Add new Product</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="" class="m-1 text-start ">Name Product </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control w-100" name="product" id=""
                        placeholder="Enter name product">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="" class="m-1 ">Price </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control w-100" name="price" id=""
                        placeholder="Enter price">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="" class="m-1 ">Images </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="file" name="profile" class="btn btn-dark  form-control  w-100 " value="file"
                        id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="" class="m-1 ">Category </label>
                </td>
            </tr>
            <tr>
                <td>
                    <select class="form-select" aria-label="Disabled select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Category One</option>
                        <option value="2">Category Two</option>
                        <option value="3">Category Three</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <br>
                    <input type="submit" name="add" class="btn btn-dark  form-control  w-50 " value="Add"
                        id="">
                </td>
            </tr>

        </table>
    </form>

</body>

</html>
