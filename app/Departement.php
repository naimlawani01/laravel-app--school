<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function programmes()
    {
        return $this->hasMany('App\Programme');
    }
}
