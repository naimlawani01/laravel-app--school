<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    public function classes()
    {
        return $this->hasMany('App\Classe');
    }
    public function departement()
    {
        return $this->belongsTo('App\Departement');
    }
}
