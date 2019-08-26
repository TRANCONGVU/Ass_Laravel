@extends('layout')
@section('body')
    <div class="container mt-5">
        <h1>Thêm Phòng Giam</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
              <label for="">Tên Phòng Giam</label>
              <input type="text" name="ten_pg" id="" class="form-control" >
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
                <label for="">Số Phạm Nhân</label>
                <input type="text" name="so_pn" id="" class="form-control" >
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">Chỗ Trống</label>
                <input type="text" name="cho_trong" id="" class="form-control" >
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">Ghi Chú</label>
                <input type="text" name="ghi_chu" id="" class="form-control" >
                <small id="helpId" class="text-muted">Help text</small>
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
