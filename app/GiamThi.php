<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiamThi extends Model
{
    protected  $table = 'giamthi' ;
    protected  $primaryKey = 'id_gt';
    protected $fillable = [
        'ho_va_ten',
        'gioi_tinh',
        'ngay_sinh',
        'so_cmt',
        'chuc_vu',
        'ghi_chu',
        'created_at',
        'updated_at'
    ];
}
