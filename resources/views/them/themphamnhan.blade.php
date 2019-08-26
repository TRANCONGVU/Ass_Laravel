@extends('layout')
@section('body')
<div class="container my-5">
    <h2>Thêm Phạm Nhân</h2>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
          <label for="pn">Tên phạm nhân</label>
          <input type="text" name="ten" id="" class="form-control" value="{{old('ten')}}" >
          @if($errors -> has("ten"))
                <p class="error">{{ $errors -> first("ten") }}</p>
            @endif
        </div>
        <div class="form-group">
          <label for="">Ngày sinh</label>
          <input type="date" name="ngay_sinh" id="" class="form-control" value="{{old('ngay_sinh')}}" >
          @if($errors -> has("ngay_sinh"))
                <p class="error">{{ $errors -> first("ngay_sinh") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Giới Tính</label>
            <select class="form-control" name="gioitinh" id="">
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Số Chứng minh thư</label>
            <input type="text" name="so_cmt" id="" class="form-control"  value="{{old('so_cmt')}}" >
            @if($errors -> has("so_cmt"))
                <p class="error">{{ $errors -> first("so_cmt") }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="">Tội danh</label>
            <input type="text" name="toi_danh" id="" class="form-control"  value="{{old('toi_danh')}}" >
            @if($errors -> has("toi_danh"))
                <p class="error">{{ $errors -> first("toi_danh") }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="">Ngày Vào Từ</label>
            <input type="date" name="ngay_vao" id="" class="form-control"  value="{{old('ngay_vao')}}"  >
            @if($errors -> has("ngay_vao"))
                <p class="error">{{ $errors -> first("ngay_vao") }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="">Thời gian lĩnh án</label>
            <input type="text" name="thoi_gian" id="" class="form-control"  value="{{old('thoi_gian')}}" >
            @if($errors -> has("thoi_gian"))
                <p class="error">{{ $errors -> first("thoi_gian") }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="">Trạng thái</label>
            <input type="text" name="trang_thai" id="" class="form-control"  value="{{old('trang_thai')}}" >
            @if($errors -> has("trang_thai"))
                <p class="error">{{ $errors -> first("trang_thai") }}</p>
            @endif
            <small id="helpId" class="text-muted"></small>
          </div>
          <div class="form-group">
            <label for="">Ghi Chú</label>
            <input type="text" name="ghi_chu" id="" class="form-control"  value="{{old('ghi_chu')}}" >
            @if($errors -> has("ghi_chu"))
                <p class="error">{{ $errors -> first("ghi_chu") }}</p>
            @endif
          </div>
          <div class="form-group">
            <label for="">Phòng giam</label>
            <select class="form-control" name="pg_id">
                @foreach ($phonggiams as $phonggiam)
                    <option value="{{ $phonggiam -> pg_id }}">
                        {{ $phonggiam -> pg_id }} &nbsp.&nbsp{{ $phonggiam -> ten_pg }}
                    </option>
                @endforeach
            </select>
            <small id="helpId" class="text-muted">Help text</small>
          </div>
          <button class="btn btn-outline-primary" type="submit">Thêm Phạm Nhân</button>
    </form>
</div>
@endsection
