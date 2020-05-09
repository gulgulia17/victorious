<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddmisionRequest extends Model
{
    protected $fillable = [
        "stdimage","sname","fname","mname","date","gender","add1","add2","add3","mobno",
        "email","nationality","religion","category","occupation","newclass","lastclass" ,"lastschool",
    ];
}
