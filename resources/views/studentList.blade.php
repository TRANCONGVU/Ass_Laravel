<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Student List</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Telephone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>

                    <td scope="row"> {{$student -> id}} </td>
                    <td> {{$student -> name}} </td>
                    <td> {{$student -> age}} </td>
                    <td> {{$student -> adress}} </td>
                    <td> {{$student -> telephone}} </td>

                <tr>
                    @endforeach
            </tbody>
        </table>

        <a href="{{ url('add-student') }}">Thêm học sinh</a>
    </div>


</body>

</html>
