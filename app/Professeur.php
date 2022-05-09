<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    public function matieres()
    {
        return $this->hasMany('App\Matiere');
    }
}
