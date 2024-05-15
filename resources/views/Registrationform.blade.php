<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            border: none;
            vertical-align: middle;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .table td {
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Total Number Of registrations</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Number</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->class}}</td>
                    <td>{{$user->number}}</td>
                    <td>{{$user->course}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
