<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function programme()
    {
        return $this->belongsTo('App\Programme');
    }
    public function evaluation_l1s()
    {
        return $this->hasMany('App\Evaluation_l1');
    }
    public function evaluation_l2s()
    {
        return $this->hasMany('App\Evaluation_l1');
    }
    public function evaluation_l3s()
    {
        return $this->hasMany('App\Evaluation_l1');
    }

    public function inscriptions()
    {
        return $this->hasMany('App\Inscription');
    }
}
