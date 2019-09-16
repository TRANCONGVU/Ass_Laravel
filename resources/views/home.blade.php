@extends('layouts.app')

@section('content-login')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">10 phạm nhân mới nhất</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($phamnhans as $phamnhan)
                            <tr>
                                {{--  <td>{{ $phamnhan -> pn_id }}</td>  --}}
                                <td>{{ $phamnhan -> ten }}</td>
                                <td>{{ $phamnhan -> so_cmt }}</td>
                                <td>{{ $phamnhan -> created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a onclick="LoadMore2()" class="btn btn-primary">Load More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script>
    var page = 1;
    {{-- function LoadMore(){
        $.ajax({
            url : '{{ url('/loadmore') }}',
            data : {
                page : ++page,
            } ,
            method : 'GET',
            success : function (result){
                var new_html = '';
                for(let i = 0 ; i < result.length ; i++){
                    new_html += '<tr>'
                                    + "<td>"+result[i].ten +"</td>"
                                    + "<td>"+result[i].so_cmt +"</td>"
                                    + "<td>"+result[i].created_at +"</td>"
                                 +'</tr>'
                }
                $(".table tbody").append(new_html);
            }
        });
    } --}}
    //jwt laravel
    function LoadMore2(){
        $.ajax({
            url : '{{ url('/loadmore-html') }}',
            data : {
                page : ++page,
            } ,
            method : 'GET',
            success : function (result){
                $(".table tbody").append(result);
            }

        });
    }

    Pusher.logToConsole = true;

    var pusher = new Pusher('903304e8272a350117df', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {

      var new_phamnhan = "<tr>" + "<td>"+data.ten +"</td>" +
                                "<td>"+data.so_cmt +"</td>" +
                                "<td>"+data.created_at +"</td>" +
                        "</tr>";
                        $(".table tbody").prepend(new_phamnhan);

    });
</script>
@endsection
