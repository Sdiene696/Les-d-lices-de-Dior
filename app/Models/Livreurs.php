<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livreurs extends Model
{
       public function livraisons(){
        return $this->hasMany(Livraison::class);
    }
}
