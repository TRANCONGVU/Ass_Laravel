<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiamThi extends Model
{
    protected $table = 'giamthi';
    protected $primaryKey = 'gt_id';
    protected $fillable = [
        'ten',
        'gioi_tinh',
        'so_cmt',
        'chuc_vu',
        'ghi_chu',
        'created_at',
        'update_at',
    ];
    public const ACTIVE = 0;
    public const DEACTIVE = 1;

    public static $_Gender = [
        self ::ACTIVE => 'Nam',
        self ::DEACTIVE => 'Nữ',
    ];
}
