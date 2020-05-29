<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    public $timestamps = false;

    public function departments(){
        return $this->hasMany(Department::class);
    }
}
