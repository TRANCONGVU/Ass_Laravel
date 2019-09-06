@extends('admin.layout.admin_layout')
@section('admin')
<div class="container my-5">
    <h1>Thêm Phòng Giam</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Tên Phòng Giam</label>
            <input type="text" name="ten_pg" id="" class="form-control" value="{{old('ten_pg')}}">
            @if($errors -> has("ten_pg"))
            <p class="error">{{ $errors -> first("ten_pg") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">Số Phạm Nhân</label>
            <input type="text" name="so_pn" id="" class="form-control" value="{{old('so_pn')}}">
            @if($errors -> has("so_pn"))
            <p class="error">{{ $errors -> first("so_pn") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Chỗ Trống</label>
            <input type="text" name="cho_trong" id="" class="form-control" value="{{old('cho_trong')}}">
            @if($errors -> has("cho_trong"))
            <p class="error">{{ $errors -> first("cho_trong") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Ghi Chú</label>
            <input type="text" name="ghi_chu" id="" class="form-control" value="{{old('ghi_chu')}}">
            @if($errors -> has("ghi_chu"))
            <p class="error">{{ $errors -> first("ghi_chu") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Chọn Giám Thị</label>
            <select class="form-control" name="gt_id" id="">
                @foreach ($giamthis as $giamthi)
                <option value="{{ $giamthi -> gt_id }}">
                    {{ $giamthi -> gt_id }} . {{ $giamthi -> ten }}
                </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-outline-danger" type="submit">Thêm Phòng</button>
    </form>
</div>
@endsection
