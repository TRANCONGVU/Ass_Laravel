@extends('layout')
@section('body')
<div class="container my-5">
    <h1>Sửa Giám Thị</h1>
    <form action="{{ url('/suaGT') }}" method="POST">
        @csrf
        <input type="hidden" name="gt_id" value="{{ $giamthi -> gt_id }}">
        <div class="form-group">
            <label for="">Tên Giam Thị</label>
            <input type="text" name="ten" id="" class="form-control" value="{{ $giamthi -> ten }}">
            @if($errors -> has("ten"))
            <p class="error">{{ $errors -> first("ten") }}</p>
            @endif
        </div>

        {{-- <div class="form-group">
            <label for="">Giới Tính</label>
            <select name="gioi_tinh" class="form-control" id="" value="{{ $giamthi -> gioi_tinh }}">
        <option value="0">Nam</option>
        <option value="1">Nữ</option>
        </select>
</div> --}}
<div class="form-group">
    <label for="">Số Chứng Minh Thư</label>
    <input type="text" name="so_cmt" id="" class="form-control" value="{{ $giamthi -> so_cmt}}">
    @if($errors -> has("so_cmt"))
    <p class="error">{{ $errors -> first("so_cmt") }}</p>
    @endif
</div>
<div class="form-group">
    <label for="">Chức vụ</label>
    <input type="text" name="chuc_vu" id="" class="form-control" value="{{ $giamthi -> chuc_vu}}">
    @if($errors -> has("chuc_vu"))
    <p class="error">{{ $errors -> first("chuc_vu") }}</p>
    @endif
</div>
<div class="form-group">
    <label for="">Ghi Chú</label>
    <input type="text" name="ghi_chu" id="" class="form-control" value="{{ $giamthi -> ghi_chu }}">
    @if($errors -> has("ghi_chu"))
    <p class="error">{{ $errors -> first("ghi_chu") }}</p>
    @endif
</div>
<button class="btn btn-outline-danger" type="submit">Sửa giám thị</button>
</form>
</div>
@endsection
