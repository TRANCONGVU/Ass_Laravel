<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ho va Ten</th>
                    <th scope="col">Ngay sinh</th>
                    <th scope="col">Gioi tinh</th>
                    <th scope="col">So Chung Minh Thu</th>
                    <th scope="col">Toi Danh</th>
                    <th scope="col">Ngay vao trai</th>
                    <th scope="col">Thoi gian linh an</th>
                    <th scope="col">Trang Thai</th>
                    <th scope="col">Ghi Chu</th>
                    <th scope="col">Phong Giam</th>
                </tr>
            </thead>
            <tbody>
                @foreach($phamnhans as $phamnhan)
                    <tr>
                    <td scope="row">{{$phamnhan -> pn_id}}</td>
                    <td>{{$phamnhan -> ten}}</td>
                    <td>{{$phamnhan -> ngay_sinh}}</td>
                    <td>{{$phamnhan -> gioitinh}}</td>
                    <td>{{$phamnhan -> so_cmt}}</td>
                    <td>{{$phamnhan -> toi_danh}}</td>
                    <td>{{$phamnhan -> ngay_vao}}</td>
                    <td>{{$phamnhan -> thoi_gian}}</td>
                    <td>{{$phamnhan -> trang_thai}}</td>
                    <td>{{$phamnhan -> ghi_chu}}</td>
                    <td>{{$phamnhan -> pg_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $phamnhans -> Links() !!}
    </div>
</body>
</html>
