<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    {{-- <a href="{{ url('adminproduct/add') }}" class="btn btn-outline-dark m-2 ">ADD New Product</a> --}}
    <div id="dialog" class="hidden">
        <div class="modal-body">
            <form action="" class="w-100  h-50 d-flex align-items-center justify-content-center  modal-body" id="login_form"
            method="POST">
            <table>
                @csrf
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
                        <div class="modal-footer">
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary form-control ">Add</button>
                        </div>
                    </td>
                </tr>

            </table>
        </form>
        </div>
    </div>
    <button class="btn btn-success col-2 m-2 " id="open-dialog">
        add
    </button>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Mame</th>
                <th scope="col">Discription</th>
                <th scope="col">price</th>
                <th scope="col">Category</th>
                <th scope="col">Img</th>
                <th scope="col">Action</th>
            </tr>
            </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $("#open-dialog").click(function() {
                $("#dialog").dialog({
                    title:"Add New Product ",
                    
                    width: 400, // Set custom width
                    modal: true,
                    buttons: {
                        "Close": function() {
                            $(this).dialog("close");
                        
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
