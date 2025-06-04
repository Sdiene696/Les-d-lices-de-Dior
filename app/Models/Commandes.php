<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{    

     protected $fillable=["user_id","plats_id","typecommande","total","stripe_id","statut","prix","stock"];
     
        public function plat(){
        return $this->hasMany(Plat::class);
    }

}
