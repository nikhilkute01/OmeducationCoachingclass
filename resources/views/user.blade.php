<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .centered-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .centered-buttons a {
            margin-top: 10px;
        }

        .centered-buttons button {
            height: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="centered-buttons">
        <a href="{{Route('RegistredUser')}}"><button class="btn btn-primary">Check Registration form</button></a>
        <a href="{{Route('ContatedUser')}}"><button class="btn btn-danger">Check Contact form</button></a>
    </div>
</body>
</html>
