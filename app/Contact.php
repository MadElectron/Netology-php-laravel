<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['surname', 'name', 'patronymic', 'created_at', 'updated_at'];

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

}
