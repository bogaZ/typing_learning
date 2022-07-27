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
    public function bahasa(){
        return $this->belongsTo(Bahasa::class);
    }
    public function Level(){
        return $this->hasMany(Level::class);
    }

    protected $fillable  = ['user_id','karakter_id', 'speed_typing', 'time'];

}
