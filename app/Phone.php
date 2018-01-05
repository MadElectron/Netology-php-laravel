<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['contact_id', 'phone', 'created_at', 'updated_at'];

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

}
