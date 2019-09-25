<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student FeedBack</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background-color : #f4f6f8">
<style>
    .error {
        color: red;
    }

</style>

<div class="container" style="padding : 100px 100px ;
 background-image : url('')
 ;background-size : cover">
 <div class="thongbao text-center"></div>
    <h3 class="text-uppercase text-center">Survey</h3>
    <form action="{{ url('/feedback') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name Student</label>
            <input type="text" name="student_name" value="{{old('student_name')}}" class="form-control" placeholder="">
            @if($errors -> has("student_name"))
            <p class="error">{{ $errors -> first("student_name") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">Student Email</label>
            <input type="text" name="student_email" value="{{old('student_email')}}" class="form-control" placeholder="">
            @if($errors -> has("student_email"))
            <p class="error">{{ $errors -> first("student_email") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Student Telephone</label>
            <input type="number" name="student_telephone" value="{{old('student_telephone')}}" class="form-control" placeholder="">
            @if($errors -> has("student_telephone"))
            <p class="error">{{ $errors -> first("student_telephone") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Feed Back</label>
            <input style="width : 100% ; height: 300px;" type="textarea" name="feedback" value="{{old('feedback')}}" class="form-control"
                placeholder="">
            @if($errors -> has("feedback"))
            <p class="error">{{ $errors -> first("feedback") }}</p>
            @endif
        </div>
        <div class="form-group text-right">
            <button onclick="thongbao" class="btn btn-danger" type="submit">SUBMIT</button>
        </div>
    </form>
</div>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script>

    Pusher.logToConsole = true;
    var pusher = new Pusher('903304e8272a350117df', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {

    var thongbao = "<h3>" + " Feed Back thanh cong"  +"</h3>"
                        $(".thongbao").prepend(thongbao);

    });
    </script>
</body>
</html>
