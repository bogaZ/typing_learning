<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function karakter(){
        return $this->hasMany(karakter::class);
    }
}
