<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livraisons extends Model
{
        public function livreur(){
        return $this->belongsTo(Livreur::class);
    }
       public function user(){
        return $this->belongsTo(User::class);
    }
}
