<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhamNhan extends Model
{
    protected  $table = 'phamnhan' ;
    protected  $primaryKey = 'id_pn';
    protected $fillable = [
        'id_pg',
        'ho_va_ten',
        'ngay_sinh',
        'gioi_tinh',
        'so_cmt',
        'toi_danh',
        'ngay_vao_trai',
        'thoi_gian_linh_an',
        'trang_thai',
        'ghi_chu',
        'created_at',
        'updated_at'
    ];
}
