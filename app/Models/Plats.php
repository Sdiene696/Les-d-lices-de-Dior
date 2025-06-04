<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plats extends Model
{
    
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }


    public function commande(){
         return $this->hasMany(Commande::class);
    }
}
