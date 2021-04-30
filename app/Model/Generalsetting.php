<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Generalsetting extends Model
{
    protected $fillable = [
        'site_name','site_logo','site_title','site_url','admin_email','currency','site_language','captca','time_zone','site_phone','fist_color','second_color',
    ];
}



