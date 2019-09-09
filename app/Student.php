<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    protected  $primaryKey = 'id';
     protected $fillable = [
         'name',
         'age',
         'adress',
         'telephone',
         'create_at',
         'update_at',
     ];

}
