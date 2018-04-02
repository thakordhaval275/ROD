<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable=['companyname','companyemail','noofemployee','emailid','employeequalification','keyskill','otherdetail','status'];
}
