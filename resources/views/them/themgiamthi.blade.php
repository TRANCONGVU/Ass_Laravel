@extends('layout')
@section('body')
<div class="container my-5">
        <h1>Thêm Giám Thị</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
              <label for="">Tên Giam Thị</label>
              <input type="text" name="ten" id="" class="form-control" >
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
                <label for="">Giới Tính</label>
                <select name="gioi_tinh" class="form-control" id="">
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Số Chứng Minh Thư</label>
                <input type="text" name="so_cmt" id="" class="form-control" >
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">Chức vụ</label>
                <input type="text" name="chuc_vu" id="" class="form-control" >
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">Ghi Chú</label>
                <input type="text" name="ghi_chu" id="" class="form-control" >
                <small id="helpId" class="text-muted">Help text</small>
              </div>
            <button class="btn btn-outline-danger" type="submit">Thêm giám thị</button>
        </form>
    </div>
@endsection
