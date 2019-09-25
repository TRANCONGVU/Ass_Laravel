<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    protected $table = 'sinhvien';
    protected $primaryKey = 'id';
    protected $fillable = [
        'student_name' ,
        'student_email' ,
        'student_telephone' ,
        'feedback',
        'created_at',
        'updated_at'
    ];
}
