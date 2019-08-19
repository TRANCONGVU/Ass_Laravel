<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongGiam extends Model
{
    protected  $table = 'phonggiam' ;
    protected  $primaryKey = 'id_pg';
    protected $fillable = [
        'id_gt',
        'ten_pg',
        'soluong_phamnhan',
        'cho_trong',
        'ghi_chu',
        'created_at',
        'updated_at',
    ];
}
