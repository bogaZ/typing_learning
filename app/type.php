<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    //
    public function karakter(){
        return $this->belongsTo(karakter::class);
    }
}
