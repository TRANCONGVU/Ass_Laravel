<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiamThi extends Model
{
    protected $table = 'GiamThi';
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
}
