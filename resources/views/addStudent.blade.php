<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<style>
    .error {
        color: red;
    }

</style>
<div class="container">
    <form action="{{ url('/add-student') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Student Name">
            @if($errors -> has("name"))
            <p class="error">{{ $errors -> first("name") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">Age</label>
            <input type="number" name="age" value="{{old('age')}}" class="form-control" placeholder="Age">
            @if($errors -> has("age"))
            <p class="error">{{ $errors -> first("age") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Adress</label>
            <input type="text" name="adress" value="{{old('adress')}}" class="form-control" placeholder="Adress">
            @if($errors -> has("adress"))
            <p class="error">{{ $errors -> first("adress") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="text" name="telephone" value="{{old('telephone')}}" class="form-control"
                placeholder="telephone">
            @if($errors -> has("telephone"))
            <p class="error">{{ $errors -> first("telephone") }}</p>
            @endif
        </div>
        <div class="form-group text-right">
            <button class="btn btn-danger" type="submit">SUBMIT</button>
        </div>
    </form>
</div>

</body>
</html>
