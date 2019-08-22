@extends('layout')
@section('body')
<div class="container-fluid">
    <div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Phòng</th>
                    <th scope="col">Số Phạm Nhân</th>
                    <th scope="col">Chỗ Trống</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Giám thị</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phonggiams as $phonggiam)
                    <tr>
                        <td scope="row">{{ $phonggiam -> pg_id }}</td>
                        <td>{{ $phonggiam -> ten_pg }}</td>
                        <td>{{ $phonggiam -> so_pn }} &nbsp người</td>
                        <td>{{ $phonggiam -> cho_trong }}&nbsp chỗ trống</td>
                        <td>{{ $phonggiam -> ghi_chu }}</td>
                        <td>{{ $phonggiam -> gt_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $phonggiams -> Links() !!}
    </div>
</div>

@endsection
