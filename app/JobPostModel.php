<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPostModel extends Model
{
    protected $fillable=['companyname','logo','jobtype','department','term','termperiod','experience','payment','noofpositions','jobdescription','usertype','useremail'];
}
