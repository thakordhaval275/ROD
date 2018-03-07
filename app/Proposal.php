<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable=['companyname','noofemployee','emailid','employeequalification','keyskill'];
}
