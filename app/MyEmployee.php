<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyEmployee extends Model
{
    protected $fillable=['firstname','lastname','emailid','qualification','skill','contactno','experience','location'];

}
