<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruiterProfile extends Model
{
    protected $fillable=['profilephoto','aboutself','firstname','lastname','gender','emailid','contactno','address','city','state','country','otheremailid','gstregister','rcompanyname','rcompanytype','rindustrytype','companyaddress','rname','rdesignation','usertype'];
}
