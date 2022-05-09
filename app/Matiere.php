<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded = [];
    
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

    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }
    public function professeur()
    {
        return $this->belongsTo('App\Professeur');
    }
}
