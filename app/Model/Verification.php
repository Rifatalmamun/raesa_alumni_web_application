<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
        'user_id','username','email','phone','document_type','link_type','document_picture','social_link','document_number','document_issue_date','student_institute',  
    ];
}
