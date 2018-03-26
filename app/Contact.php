<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['firstname','lastname','emailid','relationtorod','company','other','country','contactno','howcanwehelp'];
}
