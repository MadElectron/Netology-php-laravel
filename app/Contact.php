<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

}
