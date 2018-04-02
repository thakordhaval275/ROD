<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    const Pending=1, Accepted=2, Rejected=3;
    protected $fillable=['companyname','companyemail','noofemployee','emailid','employeequalification','keyskill','otherdetail','status'];
}
