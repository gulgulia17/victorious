<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Inquiry extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'fathername','phone','gmail','year','class',
    ];

}
