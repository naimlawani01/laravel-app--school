<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation_l3 extends Model
{
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }

    public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }
    public function annee()
    {
        return $this->belongsTo('App\Annee');
    }
    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
}
