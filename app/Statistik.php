<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    //
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function karakter(){
        return $this->belongsTo(karakter::class);
    }
}
