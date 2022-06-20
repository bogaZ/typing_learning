<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karakter extends Model
{
    //
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function type(){
        return $this->belongsTo(type::class);
    }

}
