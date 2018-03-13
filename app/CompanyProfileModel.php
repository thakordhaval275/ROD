<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProfileModel extends Model
{
    protected $fillable=['logo','aboutcompany','companyname','location','address','emailid','website','companytype','foundyear','noofemployee','usertype'];
}
