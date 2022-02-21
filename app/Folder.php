<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks(){
        return $htis->hasMany('App/Task');
    }
}
