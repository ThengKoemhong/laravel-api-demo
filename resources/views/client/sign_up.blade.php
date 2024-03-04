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
    <style>
        label{
            margin-left: 10px;
        }
    </style>
</head>
<body style="width: 100%;height: 700px;" class="d-flex justify-content-center align-items-center " >
    <img class="w-25 h-75 rounded-2 shadow-sm  bg-light" src="images/Secure login.png">
    <div class="w-50 h-75 rounded-2 shadow-sm  bg-danger justify-content-center d-flex flex-column align-items-center  " id="form">
        <h1>Create New Account</h1>
        <table class="w-75">
            <form action="" id="signup_form"  class="d-flex justify-content-center  align-items-center " enctype="multipart/form-data">
                @csrf
                <tr>
                    <td>
                        <label for="">Firname</label>
                    </td>
                    <td>
                        <label for="">Lastname</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="firstname" id="firstname" class="form-control w-100 " placeholder="Enter you firstname">
                    </td>
                    <td>
                        <input type="text" name="lastname" id="lastname" class="form-control w-100 "  placeholder="Enter you lastname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Email</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="email" id="email" class="form-control w-100  " placeholder="Example@.com">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Create password</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="password" name="password" id="password" class="form-control w-100  " placeholder="Create your password">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="">Profile</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="file" name="profile" id="profile" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" class="form-control btn btn-dark  " name="Signup" value="Sign Up">
                    </td>
                </tr>
              </form>
        </table>
    </div>
</body>
</html>