<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnneAcademique extends Model
{
    protected $guarded=[];
    public function cartes(){
        return $this->hasMany('App\Carte');
    }
}
