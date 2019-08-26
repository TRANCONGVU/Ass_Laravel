<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongGiam extends Model
{
    protected $table = 'phonggiam';
    protected $primaryKey = 'pg_id';
    protected $fillable = [
        'gt_id',
        'ten_pg',
        'so_pg',
        'so_pn',
        'cho_trong',
        'ghi_chu',
        'created_at',
        'updated_at'
    ];
}
