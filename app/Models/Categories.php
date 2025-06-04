<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
         public function plats(){
        return $this->hasMany(Plat::class);
    }
}
