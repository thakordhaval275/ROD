<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyEmployee extends Model
{
    protected $fillable=['logo','aboutself','firstname','lastname','address','pincode','gender','bdate','contectno','emailid','city','state','country','hometown','maritalstatus','postgraduate','graduate','classxii','classx','otherque','industry','preferredlocation','expirienceyear','expiriencemonth','keyskill','usertype','useremail','resume'];

}
