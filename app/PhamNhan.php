<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhamNhan extends Model
{
    protected $table = 'PhamNhan';
    protected $primaryKey = 'pn_id';
    protected $fillable = [
        'pg_id',
        'ten',
        'ngay_sinh',
        'gioitinh',
        'so_cmt',
        'toi_danh',
        'ngay_vao',
        'thoi_gian',
        'trang_thai',
        'ghi_chu',
        'created_at',
        'updated_at'
    ];
}
