<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
            public function user(){
        return $this->belongsTo(User::class);
    }
            public function table(){
        return $this->belongsTo(Table::class);
    }
}
